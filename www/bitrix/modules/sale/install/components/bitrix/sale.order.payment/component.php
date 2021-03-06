<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!CModule::IncludeModule("sale"))
{
	ShowError(GetMessage("SALE_MODULE_NOT_INSTALL"));
	return;
}

global $APPLICATION;

$APPLICATION->RestartBuffer();

$bUseAccountNumber = (COption::GetOptionString("sale", "account_number_template", "") !== "") ? true : false;

$ORDER_ID = urldecode(urldecode($_REQUEST["ORDER_ID"]));
$paymentId = isset($_REQUEST["PAYMENT_ID"]) ? $_REQUEST["PAYMENT_ID"] : 0;

$arOrder = false;
if ($bUseAccountNumber)
{
	$dbOrder = CSaleOrder::GetList(
		array("DATE_UPDATE" => "DESC"),
		array(
			"LID" => SITE_ID,
			"USER_ID" => IntVal($GLOBALS["USER"]->GetID()),
			"ACCOUNT_NUMBER" => $ORDER_ID
		)
	);

	$arOrder = $dbOrder->GetNext();
}

if (!$arOrder)
{
	$dbOrder = CSaleOrder::GetList(
		array("DATE_UPDATE" => "DESC"),
		array(
			"LID" => SITE_ID,
			"USER_ID" => IntVal($GLOBALS["USER"]->GetID()),
			"ID" => $ORDER_ID
		)
	);

	$arOrder = $dbOrder->GetNext();
}

if ($arOrder)
{
	if ($paymentId > 0)
		$filter = array('ID' => $paymentId);
	else
		$filter = array('ORDER_ID' => $arOrder['ID'], '!PAY_SYSTEM_ID' => \Bitrix\Sale\Internals\PaySystemInner::getId());

	$resPayment = \Bitrix\Sale\Internals\PaymentTable::getList(array(
		'select' => array('PAY_SYSTEM_ID', 'SUM', 'DATE_BILL', 'ID'),
		'filter' => $filter,
		'limit' => array(1)
	));

	$payment = $resPayment->fetch();

	$dbPaySysAction = CSalePaySystemAction::GetList(
			array(),
			array(
					"PAY_SYSTEM_ID" => $payment['PAY_SYSTEM_ID'],
					"PERSON_TYPE_ID" => $arOrder["PERSON_TYPE_ID"]
				),
			false,
			false,
			array("ACTION_FILE", "PARAMS", "ENCODING")
		);

	if ($arPaySysAction = $dbPaySysAction->Fetch())
	{
		if (strlen($arPaySysAction["ACTION_FILE"]) > 0)
		{
			CSalePaySystemAction::InitParamArrays($arOrder, $ID, $arPaySysAction["PARAMS"], array(), $payment);

			$pathToAction = $_SERVER["DOCUMENT_ROOT"].$arPaySysAction["ACTION_FILE"];
			$pathToAction = rtrim(str_replace("\\", "/", $pathToAction), "/");

			try
			{
				if (file_exists($pathToAction))
				{
					if (is_dir($pathToAction))
					{
						if (file_exists($pathToAction."/payment.php"))
							include($pathToAction."/payment.php");
					}
					else
					{
						include($pathToAction);
					}
				}
			}
			catch(\Bitrix\Main\SystemException $e)
			{
				if($e->getCode() == CSalePaySystemAction::GET_PARAM_VALUE)
					$message = GetMessage("SOA_TEMPL_ORDER_PS_ERROR");
				else
					$message = $e->getMessage();

				ShowError($message);
			}

			if(strlen($arPaySysAction["ENCODING"]) > 0)
			{
				define("BX_SALE_ENCODING", $arPaySysAction["ENCODING"]);
				AddEventHandler("main", "OnEndBufferContent", "ChangeEncoding");
				function ChangeEncoding($content)
				{
					global $APPLICATION;
					header("Content-Type: text/html; charset=".BX_SALE_ENCODING);
					$content = $APPLICATION->ConvertCharset($content, SITE_CHARSET, BX_SALE_ENCODING);
					$content = str_replace("charset=".SITE_CHARSET, "charset=".BX_SALE_ENCODING, $content);
				}
			}

		}
	}
}
?>
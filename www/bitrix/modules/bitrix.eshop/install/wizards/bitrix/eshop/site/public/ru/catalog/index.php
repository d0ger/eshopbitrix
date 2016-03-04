<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<?$APPLICATION->IncludeComponent("bitrix:catalog", "", array(
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "#CATALOG_IBLOCK_ID#",
	"TEMPLATE_THEME" => "site",
	"HIDE_NOT_AVAILABLE" => "N",
	"BASKET_URL" => "#SITE_DIR#personal/cart/",
	"ACTION_VARIABLE" => "action",
	"PRODUCT_ID_VARIABLE" => "id",
	"SECTION_ID_VARIABLE" => "SECTION_ID",
	"PRODUCT_QUANTITY_VARIABLE" => "quantity",
	"PRODUCT_PROPS_VARIABLE" => "prop",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "#SITE_DIR#catalog/",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "Y",
	"CACHE_GROUPS" => "Y",
	"SET_TITLE" => "Y",
	"ADD_SECTION_CHAIN" => "Y",
	"ADD_ELEMENT_CHAIN" => "Y",
	"SET_STATUS_404" => "Y",
	"DETAIL_DISPLAY_NAME" => "N",
	"USE_ELEMENT_COUNTER" => "Y",
	"USE_FILTER" => "Y",
	"FILTER_NAME" => "",
	"FILTER_VIEW_MODE" => "VERTICAL",
	"FILTER_FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"FILTER_PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"FILTER_PRICE_CODE" => array(
		0 => "BASE",
	),
	"FILTER_OFFERS_FIELD_CODE" => array(
		0 => "PREVIEW_PICTURE",
		1 => "DETAIL_PICTURE",
		2 => "",
	),
	"FILTER_OFFERS_PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"USE_REVIEW" => "Y",
	"MESSAGES_PER_PAGE" => "10",
	"USE_CAPTCHA" => "Y",
	"REVIEW_AJAX_POST" => "Y",
	"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
	"FORUM_ID" => "11",
	"URL_TEMPLATES_READ" => "",
	"SHOW_LINK_TO_FORUM" => "Y",
	"USE_COMPARE" => "N",
	"PRICE_CODE" => array(
		0 => "BASE",
	),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"PRICE_VAT_SHOW_VALUE" => "N",
	"PRODUCT_PROPERTIES" => array(
	),
	"USE_PRODUCT_QUANTITY" => "Y",
	"CONVERT_CURRENCY" => "Y",
	"CURRENCY_ID" => "RUB",
	"QUANTITY_FLOAT" => "N",
	"OFFERS_CART_PROPERTIES" => array(
		0 => "SIZES_SHOES",
		1 => "SIZES_CLOTHES",
		2 => "COLOR_REF",
	),
	"SHOW_TOP_ELEMENTS" => "N",
	"SECTION_COUNT_ELEMENTS" => "N",
	"SECTION_TOP_DEPTH" => "1",
	"SECTIONS_VIEW_MODE" => "TILE",
	"SECTIONS_SHOW_PARENT_NAME" => "N",
	"PAGE_ELEMENT_COUNT" => "15",
	"LINE_ELEMENT_COUNT" => "3",
	"ELEMENT_SORT_FIELD" => "desc",
	"ELEMENT_SORT_ORDER" => "asc",
	"ELEMENT_SORT_FIELD2" => "id",
	"ELEMENT_SORT_ORDER2" => "desc",
	"LIST_PROPERTY_CODE" => array(
		0 => "NEWPRODUCT",
		1 => "SALELEADER",
		2 => "SPECIALOFFER",
		3 => "",
	),
	"INCLUDE_SUBSECTIONS" => "Y",
	"LIST_META_KEYWORDS" => "UF_KEYWORDS",
	"LIST_META_DESCRIPTION" => "UF_META_DESCRIPTION",
	"LIST_BROWSER_TITLE" => "UF_BROWSER_TITLE",
	"LIST_OFFERS_FIELD_CODE" => array(
		0 => "NAME",
		1 => "PREVIEW_PICTURE",
		2 => "DETAIL_PICTURE",
		3 => "",
	),
	"LIST_OFFERS_PROPERTY_CODE" => array(
		0 => "SIZES_SHOES",
		1 => "SIZES_CLOTHES",
		2 => "COLOR_REF",
		3 => "MORE_PHOTO",
		4 => "ARTNUMBER",
		5 => "",
	),
	"LIST_OFFERS_LIMIT" => "0",
	"SECTION_BACKGROUND_IMAGE" => "UF_BACKGROUND_IMAGE",
	"DETAIL_PROPERTY_CODE" => array(
		0 => "NEWPRODUCT",
		1 => "MANUFACTURER",
		2 => "MATERIAL",
	),
	"DETAIL_META_KEYWORDS" => "KEYWORDS",
	"DETAIL_META_DESCRIPTION" => "META_DESCRIPTION",
	"DETAIL_BROWSER_TITLE" => "TITLE",
	"DETAIL_OFFERS_FIELD_CODE" => array(
		0 => "NAME",
		1 => "",
	),
	"DETAIL_OFFERS_PROPERTY_CODE" => array(
		0 => "ARTNUMBER",
		1 => "SIZES_SHOES",
		2 => "SIZES_CLOTHES",
		3 => "COLOR_REF",
		4 => "MORE_PHOTO",
		5 => "",
	),
	"DETAIL_BACKGROUND_IMAGE" => "BACKGROUND_IMAGE",
	"LINK_IBLOCK_TYPE" => "",
	"LINK_IBLOCK_ID" => "",
	"LINK_PROPERTY_SID" => "",
	"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
	"USE_ALSO_BUY" => "Y",
	"ALSO_BUY_ELEMENT_COUNT" => "4",
	"ALSO_BUY_MIN_BUYES" => "1",
	"OFFERS_SORT_FIELD" => "sort",
	"OFFERS_SORT_ORDER" => "desc",
	"OFFERS_SORT_FIELD2" => "id",
	"OFFERS_SORT_ORDER2" => "desc",
	"PAGER_TEMPLATE" => "round",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "Товары",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
	"PAGER_SHOW_ALL" => "N",
	"ADD_PICT_PROP" => "MORE_PHOTO",
	"LABEL_PROP" => "NEWPRODUCT",
	"PRODUCT_DISPLAY_MODE" => "Y",
	"OFFER_ADD_PICT_PROP" => "MORE_PHOTO",
	"OFFER_TREE_PROPS" => array(
		0 => "SIZES_SHOES",
		1 => "SIZES_CLOTHES",
		2 => "COLOR_REF",
		3 => "",
	),
	"SHOW_DISCOUNT_PERCENT" => "Y",
	"SHOW_OLD_PRICE" => "Y",
	"MESS_BTN_BUY" => "Купить",
	"MESS_BTN_ADD_TO_BASKET" => "В корзину",
	"MESS_BTN_COMPARE" => "Сравнение",
	"MESS_BTN_DETAIL" => "Подробнее",
	"MESS_NOT_AVAILABLE" => "Нет в наличии",
	"DETAIL_USE_VOTE_RATING" => "Y",
	"DETAIL_VOTE_DISPLAY_AS_RATING" => "rating",
	"DETAIL_USE_COMMENTS" => "Y",
	"DETAIL_BLOG_USE" => "Y",
	"DETAIL_VK_USE" => "N",
	"DETAIL_FB_USE" => "Y",
	"AJAX_OPTION_ADDITIONAL" => "",
	"USE_STORE" => "Y",
	"USE_STORE_PHONE" => "Y",
	"USE_STORE_SCHEDULE" => "Y",
	"USE_MIN_AMOUNT" => "N",
	"STORE_PATH" => "#SITE_DIR#store/#store_id#",
	"MAIN_TITLE" => "Наличие на складах",
	"MIN_AMOUNT" => "10",
	"DETAIL_BRAND_USE" => "Y",
	"DETAIL_BRAND_PROP_CODE" => "BRAND_REF",
	"SIDEBAR_SECTION_SHOW" => "Y",
	"SIDEBAR_DETAIL_SHOW" => "Y",
	"SIDEBAR_PATH" => "#SITE_DIR#catalog/sidebar.php",
	"SEF_URL_TEMPLATES" => array(
		"sections" => "",
		"section" => "#SECTION_CODE#/",
		"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
		"compare" => "compare/",
	)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
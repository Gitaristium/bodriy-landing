<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Спасибо!");
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
if (CModule::IncludeModule("main")) {
  $arEventFields = array(
    "NAME" => $_POST["user_name"],
    "PHONE" => $_POST["user_phone"],
    "EMAIL" => $_POST["user_email"],
    "TEXT" => $_POST["user_text"]
  );

  CEvent::Send("CORP__landing", SITE_ID, $arEventFields, "N", 8162);

  unset($_POST["NAME"]);
  unset($_POST["PHONE"]);
  unset($_POST["EMAIL"]);
  unset($_POST["TEXT"]);
}
<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("MAIN_FEEDBACK_COMPONENT_NAME"),
	"DESCRIPTION" => GetMessage("MAIN_FEEDBACK_COMPONENT_DESCR"),
	"ICON" => "/images/feedback.gif",
    "PATH" => array(
        "ID" => "Мои компоненты",
        "CHILD" => array(
            "ID" => "forms",
            "NAME" => GetMessage("MAIN_FEEDBACK_COMPONENT_NAME"),
        )
    ),
);
?>
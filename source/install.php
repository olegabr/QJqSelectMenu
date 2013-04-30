<?php

$objPlugin = new QPlugin();
$objPlugin->strName = "QJqSelectMenu";
$objPlugin->strDescription = 'jQuery UI Selectmenu: An ARIA-Accessible Plugin for Styling a Custom HTML Select Element.';
$objPlugin->strVersion = "0.1";
$objPlugin->strPlatformVersion = "2.2";
$objPlugin->strAuthorName = "Oleg Abrosimov";
$objPlugin->strAuthorEmail = "olegabr [at] yandex [dot] ru";

$components = array();

$components[] = new QPluginJsFile("jquery.ui.selectmenu.js");
$components[] = new QPluginCssFile("jquery.ui.selectmenu.css");

$components[] = new QPluginControlFile("includes/QJqSelectMenu.class.php");
$components[] = new QPluginControlFile("includes/QJqSelectMenuBase.class.php");
$components[] = new QPluginControlFile("includes/QJqSelectMenuGen.class.php");

$components[] = new QPluginIncludedClass("QJqSelectMenu", "includes/QJqSelectMenu.class.php");
$components[] = new QPluginIncludedClass("QJqSelectMenuBase", "includes/QJqSelectMenuBase.class.php");
$components[] = new QPluginIncludedClass("QJqSelectMenuGen", "includes/QJqSelectMenuGen.class.php");

$components[] = new QPluginExample("example/selectmenu.php", "QJqSelectMenu: tree view/editor control based on jQuery selectmenu plugin");
$components[] = new QPluginExampleFile("example/selectmenu.php");
$components[] = new QPluginExampleFile("example/selectmenu.tpl.php");

$objPlugin->addComponents($components);
$objPlugin->install();

?>

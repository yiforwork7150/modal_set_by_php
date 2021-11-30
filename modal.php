<?php
include_once "class.TemplatePower.inc.php";


// Template 樣板載入
$my_tpl = new TemplatePower("modal.tpl");
$my_tpl->prepare();
$my_tpl->printToScreen();

<?php
/**
 * Created by PhpStorm.
 * User: salvadorlopez
 * Date: 10/01/18
 * Time: 13:59
 */
$hook_version = 1;
$hook_array = Array();
// position, file, function
$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array('1','Convertir valores de campos a mayúsculas','custom/modules/Contacts/convertUpperCase.php','convertUpperCase','convertUpper',);
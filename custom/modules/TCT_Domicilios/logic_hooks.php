<?php

 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array();

$hook_array['before_save'][] = Array(
    '1',
    'Genera peticiones REST para crear domicilios a cliente',
    'custom/modules/TCT_Domicilios/IntegrationsAddress.php',
    'IntegrationsAddress',
    'createAddress'
);




?>
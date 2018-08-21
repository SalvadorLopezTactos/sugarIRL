<?php
$popupMeta = array (
    'moduleMain' => 'TCT_Sepomex',
    'varName' => 'TCT_Sepomex',
    'orderBy' => 'tct_sepomex.name',
    'whereClauses' => array (
  'name' => 'tct_sepomex.name',
),
    'searchInputs' => array (
  0 => 'tct_sepomex_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'default' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
  ),
  'TCT_STATE_TXF' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TCT_STATE_TXF',
    'width' => '10%',
  ),
  'TCT_CITY_TXF' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TCT_CITY_TXF',
    'width' => '10%',
  ),
  'TCT_COLONY_TXF' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TCT_COLONY_TXF',
    'width' => '10%',
  ),
  'TEAM_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'studio' => 
    array (
      'portallistview' => false,
      'portalrecordview' => false,
    ),
    'label' => 'LBL_TEAMS',
    'id' => 'TEAM_ID',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
),
);

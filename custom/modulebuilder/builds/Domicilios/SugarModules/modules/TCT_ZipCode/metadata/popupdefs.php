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
    'name' => 'name',
  ),
  'TCT_STATE_TXF' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TCT_STATE_TXF',
    'width' => '10%',
    'name' => 'tct_state_txf',
  ),
  'TCT_CITY_TXF' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TCT_CITY_TXF',
    'width' => '10%',
    'name' => 'tct_city_txf',
  ),
  'TCT_COUNTY_TXF' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TCT_COUNTY_TXF',
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
    'name' => 'team_name',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'assigned_user_name',
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
    'name' => 'date_modified',
  ),
),
);

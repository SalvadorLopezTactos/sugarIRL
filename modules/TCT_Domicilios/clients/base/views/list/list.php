<?php
$module_name = 'TCT_Domicilios';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'tct_address_type_ddw',
                'label' => 'LBL_TCT_ADDRESS_TYPE_DDW',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'tct_country_ddw',
                'label' => 'LBL_TCT_COUNTRY_DDW',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'tct_street_txf',
                'label' => 'LBL_TCT_STREET_TXF',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => false,
              ),
              4 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => false,
              ),
              5 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => false,
                'enabled' => true,
                'link' => true,
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);

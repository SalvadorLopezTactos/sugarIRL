<?php
$viewdefs['Accounts'] = 
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
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'link' => true,
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'enabled' => true,
                'default' => true,
                'width' => 'xlarge',
              ),
              1 => 
              array (
                'name' => 'person_type_c',
                'label' => 'TCT_PERSON_TYPE_LIST',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'customer_type_c',
                'label' => 'LBL_CUSTOMER_TYPE',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'business_name_c',
                'label' => 'LBL_BUSINESS_NAME',
                'enabled' => true,
                'default' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);

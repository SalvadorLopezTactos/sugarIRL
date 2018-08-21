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
                'name' => 'accounts_tct_domicilios_1_name',
                'label' => 'LBL_ACCOUNTS_TCT_DOMICILIOS_1_FROM_ACCOUNTS_TITLE',
                'enabled' => true,
                'id' => 'ACCOUNTS_TCT_DOMICILIOS_1ACCOUNTS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'contacts_tct_domicilios_1_name',
                'label' => 'LBL_CONTACTS_TCT_DOMICILIOS_1_FROM_CONTACTS_TITLE',
                'enabled' => true,
                'id' => 'CONTACTS_TCT_DOMICILIOS_1CONTACTS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'enabled' => true,
                'link' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'tct_address_type_ddw',
                'label' => 'LBL_TCT_ADDRESS_TYPE_DDW',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'tct_country_ddw',
                'label' => 'LBL_TCT_COUNTRY_DDW',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'tct_state_txf',
                'label' => 'LBL_TCT_STATE_TXF',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'tct_city_txf',
                'label' => 'LBL_TCT_CITY_TXF',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'tct_colony_txf',
                'label' => 'LBL_TCT_COLONY_TXF',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'tct_street_txf',
                'label' => 'LBL_TCT_STREET_TXF',
                'enabled' => true,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'tct_external_num_txf',
                'label' => 'LBL_TCT_EXTERNAL_NUM_TXF',
                'enabled' => true,
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'tct_interior_num_txf',
                'label' => 'LBL_TCT_INTERIOR_NUM_TXF',
                'enabled' => true,
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => false,
                'enabled' => true,
                'link' => true,
              ),
              13 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => false,
              ),
              14 => 
              array (
                'name' => 'created_by_name',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'readonly' => true,
                'id' => 'CREATED_BY',
                'link' => true,
                'default' => false,
              ),
              15 => 
              array (
                'name' => 'modified_by_name',
                'label' => 'LBL_MODIFIED',
                'enabled' => true,
                'readonly' => true,
                'id' => 'MODIFIED_USER_ID',
                'link' => true,
                'default' => false,
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

<?php
$viewdefs['Accounts'] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'edit' => 
      array (
        'templateMeta' => 
        array (
          'maxColumns' => '1',
          'widths' => 
          array (
            0 => 
            array (
              'label' => '10',
              'field' => '30',
            ),
          ),
          'useTabs' => false,
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_PANEL_DEFAULT',
            'columns' => '1',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'displayParams' => 
                array (
                  'required' => true,
                  'wireless_edit_only' => true,
                ),
              ),
              1 => 
              array (
                'name' => 'customer_type_c',
                'label' => 'LBL_CUSTOMER_TYPE',
              ),
              2 => 
              array (
                'name' => 'person_type_c',
                'label' => 'TCT_PERSON_TYPE_LIST',
              ),
              3 => 
              array (
                'name' => 'firstname_c',
                'label' => 'LBL_FIRSTNAME',
              ),
              4 => 
              array (
                'name' => 'lastname_c',
                'label' => 'LBL_LASTNAME',
              ),
              5 => 
              array (
                'name' => 'business_name_c',
                'label' => 'LBL_BUSINESS_NAME',
              ),
              6 => 
              array (
                'name' => 'rfc_c',
                'label' => 'LBL_RFC',
              ),
              7 => 
              array (
                'name' => 'curp_c',
                'label' => 'LBL_CURP',
              ),
              8 => 
              array (
                'name' => 'contactoprincipal_c',
                'studio' => 'visible',
                'label' => 'LBL_CONTACTOPRINCIPAL',
              ),
              9 => 
              array (
                'name' => 'zone__c',
                'label' => 'LBL_ZONE_',
              ),
              10 => 
              array (
                'name' => 'industry',
                'comment' => 'The company belongs in this industry',
                'label' => 'LBL_INDUSTRY',
              ),
              11 => 
              array (
                'name' => 'parentname_c',
                'studio' => 'visible',
                'label' => 'LBL_PARENTNAME',
              ),
              12 => 'assigned_user_name',
              13 => 'team_name',
              14 => 
              array (
                'name' => 'estado_c',
                'label' => 'TCT_ESTADO_LBL',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);

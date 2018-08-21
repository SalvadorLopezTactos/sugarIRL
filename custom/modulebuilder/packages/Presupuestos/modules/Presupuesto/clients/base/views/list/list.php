<?php
$module_name = 'TCTP_Presupuesto';
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
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              1 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              2 => 
              array (
                'name' => 'tct_periodo_ddw',
                'label' => 'LBL_TCT_PERIODO_DDW',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'tct_anio_ddw',
                'label' => 'LBL_TCT_ANIO_DDW',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'tct_tipo_presupuesto_ddw',
                'label' => 'LBL_TCT_TIPO_PRESUPUESTO_DDW',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'tct_monto_cur',
                'label' => 'LBL_TCT_MONTO_CUR',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => false,
              ),
              7 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => false,
              ),
              8 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'default' => false,
                'enabled' => true,
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

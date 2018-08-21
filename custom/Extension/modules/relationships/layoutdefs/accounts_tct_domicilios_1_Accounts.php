<?php
 // created: 2018-01-10 22:32:25
$layout_defs["Accounts"]["subpanel_setup"]['accounts_tct_domicilios_1'] = array (
  'order' => 100,
  'module' => 'TCT_Domicilios',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_TCT_DOMICILIOS_1_FROM_TCT_DOMICILIOS_TITLE',
  'get_subpanel_data' => 'accounts_tct_domicilios_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

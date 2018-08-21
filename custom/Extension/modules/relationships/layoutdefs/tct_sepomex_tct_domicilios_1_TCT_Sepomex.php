<?php
 // created: 2018-01-10 22:31:12
$layout_defs["TCT_Sepomex"]["subpanel_setup"]['tct_sepomex_tct_domicilios_1'] = array (
  'order' => 100,
  'module' => 'TCT_Domicilios',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TCT_SEPOMEX_TCT_DOMICILIOS_1_FROM_TCT_DOMICILIOS_TITLE',
  'get_subpanel_data' => 'tct_sepomex_tct_domicilios_1',
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

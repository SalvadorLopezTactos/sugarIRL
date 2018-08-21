<?php
$viewdefs['Calls'] = 
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
                'label' => 'LBL_LIST_SUBJECT',
                'enabled' => true,
                'default' => true,
                'link' => true,
                'name' => 'name',
                'related_fields' => 
                array (
                  0 => 'repeat_type',
                ),
              ),
              1 => 
              array (
                'enabled' => true,
                'default' => true,
                'name' => 'status',
                'type' => 'event-status',
                'css_class' => 'full-width',
              ),
              2 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
              ),
              3 => 
              array (
                'enabled' => true,
                'default' => true,
                'name' => 'direction',
              ),
              4 => 
              array (
                'name' => 'date_start',
                'label' => 'LBL_LIST_DATE',
                'type' => 'datetimecombo-colorcoded',
                'css_class' => 'overflow-visible',
                'completed_status_value' => 'Held',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
                'related_fields' => 
                array (
                  0 => 'status',
                ),
              ),
              5 => 
              array (
                'name' => 'parent_name',
                'label' => 'LBL_LIST_RELATED_TO',
                'dynamic_module' => 'PARENT_TYPE',
                'id' => 'PARENT_ID',
                'link' => true,
                'enabled' => true,
                'default' => true,
                'sortable' => false,
                'ACLTag' => 'PARENT',
                'related_fields' => 
                array (
                  0 => 'parent_id',
                  1 => 'parent_type',
                ),
              ),
              6 => 
              array (
                'name' => 'assigned_user_name_c',
                'label' => 'LBL_ASSIGNED_USER_NAME',
                'enabled' => true,
                'id' => 'CALL_ID_C',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'date_end',
                'link' => false,
                'default' => false,
                'enabled' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);

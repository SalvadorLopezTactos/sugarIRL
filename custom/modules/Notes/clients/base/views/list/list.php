<?php
$viewdefs['Notes'] = 
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
                'label' => 'LBL_LIST_SUBJECT',
                'link' => true,
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'created_by_name',
                'type' => 'relate',
                'label' => 'LBL_CREATED_BY',
                'enabled' => true,
                'default' => true,
                'related_fields' => 
                array (
                  0 => 'created_by',
                ),
              ),
              4 => 
              array (
                'name' => 'filename',
                'label' => 'LBL_LIST_FILENAME',
                'enabled' => true,
                'default' => true,
                'type' => 'file',
                'related_fields' => 
                array (
                  0 => 'file_url',
                  1 => 'id',
                  2 => 'file_mime_type',
                ),
                'displayParams' => 
                array (
                  'module' => 'Notes',
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
                'name' => 'parent_type',
                'label' => 'LBL_PARENT_TYPE',
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

<?php
$listViewDefs['Documents'] = 
array (
  'assigned_user_name_c' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ASSIGNED_USER_NAME',
    'id' => 'DOCUMENT_ID_C',
    'link' => true,
    'width' => 10,
    'default' => true,
  ),
  'category_id' => 
  array (
    'width' => '10',
    'label' => 'LBL_LIST_CATEGORY',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '10',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'exp_date' => 
  array (
    'width' => '10',
    'label' => 'LBL_LIST_EXP_DATE',
    'default' => true,
  ),
  'doc_type' => 
  array (
    'width' => '5',
    'label' => 'LBL_DOC_TYPE',
    'link' => false,
    'default' => true,
  ),
  'document_name' => 
  array (
    'width' => '20',
    'label' => 'LBL_DOCUMENT_NAME',
    'link' => true,
    'default' => true,
    'bold' => true,
  ),
  'subcategory_id' => 
  array (
    'width' => '15',
    'label' => 'LBL_LIST_SUBCATEGORY',
    'default' => true,
  ),
  'team_name' => 
  array (
    'width' => '2',
    'label' => 'LBL_LIST_TEAM',
    'default' => false,
    'sortable' => false,
  ),
  'modified_by_name' => 
  array (
    'width' => '10',
    'label' => 'LBL_MODIFIED_USER',
    'module' => 'Users',
    'id' => 'USERS_ID',
    'default' => false,
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'modified_user_id',
    ),
  ),
);

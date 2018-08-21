<?php
// created: 2018-01-09 12:09:21
$dictionary["notes_users_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'notes_users_1' => 
    array (
      'lhs_module' => 'Notes',
      'lhs_table' => 'notes',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'notes_users_1_c',
      'join_key_lhs' => 'notes_users_1notes_ida',
      'join_key_rhs' => 'notes_users_1users_idb',
    ),
  ),
  'table' => 'notes_users_1_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'notes_users_1notes_ida' => 
    array (
      'name' => 'notes_users_1notes_ida',
      'type' => 'id',
    ),
    'notes_users_1users_idb' => 
    array (
      'name' => 'notes_users_1users_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_notes_users_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_notes_users_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'notes_users_1notes_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_notes_users_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'notes_users_1users_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'notes_users_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'notes_users_1notes_ida',
        1 => 'notes_users_1users_idb',
      ),
    ),
  ),
);
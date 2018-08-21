<?php
// created: 2018-01-10 22:32:25
$dictionary["accounts_tct_domicilios_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_tct_domicilios_1' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'TCT_Domicilios',
      'rhs_table' => 'tct_domicilios',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_tct_domicilios_1_c',
      'join_key_lhs' => 'accounts_tct_domicilios_1accounts_ida',
      'join_key_rhs' => 'accounts_tct_domicilios_1tct_domicilios_idb',
    ),
  ),
  'table' => 'accounts_tct_domicilios_1_c',
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
    'accounts_tct_domicilios_1accounts_ida' => 
    array (
      'name' => 'accounts_tct_domicilios_1accounts_ida',
      'type' => 'id',
    ),
    'accounts_tct_domicilios_1tct_domicilios_idb' => 
    array (
      'name' => 'accounts_tct_domicilios_1tct_domicilios_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_accounts_tct_domicilios_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_accounts_tct_domicilios_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_tct_domicilios_1accounts_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_accounts_tct_domicilios_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_tct_domicilios_1tct_domicilios_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'accounts_tct_domicilios_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_tct_domicilios_1tct_domicilios_idb',
      ),
    ),
  ),
);
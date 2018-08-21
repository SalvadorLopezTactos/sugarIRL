<?php
// created: 2018-01-09 11:57:57
$dictionary["documents_accounts_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'documents_accounts_1' => 
    array (
      'lhs_module' => 'Documents',
      'lhs_table' => 'documents',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'documents_accounts_1_c',
      'join_key_lhs' => 'documents_accounts_1documents_ida',
      'join_key_rhs' => 'documents_accounts_1accounts_idb',
    ),
  ),
  'table' => 'documents_accounts_1_c',
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
    'documents_accounts_1documents_ida' => 
    array (
      'name' => 'documents_accounts_1documents_ida',
      'type' => 'id',
    ),
    'documents_accounts_1accounts_idb' => 
    array (
      'name' => 'documents_accounts_1accounts_idb',
      'type' => 'id',
    ),
    'document_revision_id' => 
    array (
      'name' => 'document_revision_id',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_documents_accounts_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_documents_accounts_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'documents_accounts_1documents_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_documents_accounts_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'documents_accounts_1accounts_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'documents_accounts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'documents_accounts_1documents_ida',
        1 => 'documents_accounts_1accounts_idb',
      ),
    ),
  ),
);
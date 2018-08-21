<?php
// created: 2018-01-10 22:32:25
$dictionary["TCT_Domicilios"]["fields"]["accounts_tct_domicilios_1"] = array (
  'name' => 'accounts_tct_domicilios_1',
  'type' => 'link',
  'relationship' => 'accounts_tct_domicilios_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_TCT_DOMICILIOS_1_FROM_TCT_DOMICILIOS_TITLE',
  'id_name' => 'accounts_tct_domicilios_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["TCT_Domicilios"]["fields"]["accounts_tct_domicilios_1_name"] = array (
  'name' => 'accounts_tct_domicilios_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_TCT_DOMICILIOS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_tct_domicilios_1accounts_ida',
  'link' => 'accounts_tct_domicilios_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["TCT_Domicilios"]["fields"]["accounts_tct_domicilios_1accounts_ida"] = array (
  'name' => 'accounts_tct_domicilios_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_TCT_DOMICILIOS_1_FROM_TCT_DOMICILIOS_TITLE_ID',
  'id_name' => 'accounts_tct_domicilios_1accounts_ida',
  'link' => 'accounts_tct_domicilios_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

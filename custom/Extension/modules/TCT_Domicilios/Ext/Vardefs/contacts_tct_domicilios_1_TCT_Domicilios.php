<?php
// created: 2018-01-10 22:31:54
$dictionary["TCT_Domicilios"]["fields"]["contacts_tct_domicilios_1"] = array (
  'name' => 'contacts_tct_domicilios_1',
  'type' => 'link',
  'relationship' => 'contacts_tct_domicilios_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_TCT_DOMICILIOS_1_FROM_TCT_DOMICILIOS_TITLE',
  'id_name' => 'contacts_tct_domicilios_1contacts_ida',
  'link-type' => 'one',
);
$dictionary["TCT_Domicilios"]["fields"]["contacts_tct_domicilios_1_name"] = array (
  'name' => 'contacts_tct_domicilios_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_TCT_DOMICILIOS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_tct_domicilios_1contacts_ida',
  'link' => 'contacts_tct_domicilios_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["TCT_Domicilios"]["fields"]["contacts_tct_domicilios_1contacts_ida"] = array (
  'name' => 'contacts_tct_domicilios_1contacts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_TCT_DOMICILIOS_1_FROM_TCT_DOMICILIOS_TITLE_ID',
  'id_name' => 'contacts_tct_domicilios_1contacts_ida',
  'link' => 'contacts_tct_domicilios_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

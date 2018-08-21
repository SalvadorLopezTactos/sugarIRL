<?php
// created: 2018-01-10 22:31:12
$dictionary["TCT_Domicilios"]["fields"]["tct_sepomex_tct_domicilios_1"] = array (
  'name' => 'tct_sepomex_tct_domicilios_1',
  'type' => 'link',
  'relationship' => 'tct_sepomex_tct_domicilios_1',
  'source' => 'non-db',
  'module' => 'TCT_Sepomex',
  'bean_name' => 'TCT_Sepomex',
  'side' => 'right',
  'vname' => 'LBL_TCT_SEPOMEX_TCT_DOMICILIOS_1_FROM_TCT_DOMICILIOS_TITLE',
  'id_name' => 'tct_sepomex_tct_domicilios_1tct_sepomex_ida',
  'link-type' => 'one',
);
$dictionary["TCT_Domicilios"]["fields"]["tct_sepomex_tct_domicilios_1_name"] = array (
  'name' => 'tct_sepomex_tct_domicilios_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TCT_SEPOMEX_TCT_DOMICILIOS_1_FROM_TCT_SEPOMEX_TITLE',
  'save' => true,
  'id_name' => 'tct_sepomex_tct_domicilios_1tct_sepomex_ida',
  'link' => 'tct_sepomex_tct_domicilios_1',
  'table' => 'tct_sepomex',
  'module' => 'TCT_Sepomex',
  'rname' => 'name',
);
$dictionary["TCT_Domicilios"]["fields"]["tct_sepomex_tct_domicilios_1tct_sepomex_ida"] = array (
  'name' => 'tct_sepomex_tct_domicilios_1tct_sepomex_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_TCT_SEPOMEX_TCT_DOMICILIOS_1_FROM_TCT_DOMICILIOS_TITLE_ID',
  'id_name' => 'tct_sepomex_tct_domicilios_1tct_sepomex_ida',
  'link' => 'tct_sepomex_tct_domicilios_1',
  'table' => 'tct_sepomex',
  'module' => 'TCT_Sepomex',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

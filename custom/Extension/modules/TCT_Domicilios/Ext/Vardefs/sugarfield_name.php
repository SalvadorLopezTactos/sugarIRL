<?php
 // created: 2018-01-12 11:01:47
$dictionary['TCT_Domicilios']['fields']['name']['len']='255';
$dictionary['TCT_Domicilios']['fields']['name']['audited']=false;
$dictionary['TCT_Domicilios']['fields']['name']['massupdate']=false;
$dictionary['TCT_Domicilios']['fields']['name']['importable']='false';
$dictionary['TCT_Domicilios']['fields']['name']['duplicate_merge']='disabled';
$dictionary['TCT_Domicilios']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['TCT_Domicilios']['fields']['name']['merge_filter']='disabled';
$dictionary['TCT_Domicilios']['fields']['name']['unified_search']=false;
$dictionary['TCT_Domicilios']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.55',
  'searchable' => true,
);
$dictionary['TCT_Domicilios']['fields']['name']['calculated']='1';
$dictionary['TCT_Domicilios']['fields']['name']['formula']='subStr(concat($tct_address_type_ddw," - ",$tct_street_txf," ",$tct_external_num_txf," - ",$tct_colony_txf," - ",$tct_city_txf," - ",$tct_state_txf," - "),0,254)';
$dictionary['TCT_Domicilios']['fields']['name']['enforced']=true;

 ?>
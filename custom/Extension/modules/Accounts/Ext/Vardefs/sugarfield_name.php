<?php
 // created: 2018-01-16 19:04:57
$dictionary['Account']['fields']['name']['len']='150';
$dictionary['Account']['fields']['name']['massupdate']=false;
$dictionary['Account']['fields']['name']['comments']='Name of the Company';
$dictionary['Account']['fields']['name']['duplicate_merge']='disabled';
$dictionary['Account']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['Account']['fields']['name']['merge_filter']='disabled';
$dictionary['Account']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.91',
  'searchable' => true,
);
$dictionary['Account']['fields']['name']['calculated']='true';
$dictionary['Account']['fields']['name']['importable']='false';
$dictionary['Account']['fields']['name']['formula']='strToUpper(ifElse(equal(strToUpper($person_type_c),"FISICA"),
concat($customer_type_c,"-",$person_type_c,": ",$firstname_c," ",$lastname_c,"-",$rfc_c),
concat($customer_type_c,"-",$person_type_c,": ",$business_name_c,"-",$rfc_c)))';
$dictionary['Account']['fields']['name']['enforced']=true;

 ?>
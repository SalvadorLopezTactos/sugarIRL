<?php
 // created: 2018-01-16 19:09:58
$dictionary['Account']['fields']['rfc_c']['labelValue']='RFC:';
$dictionary['Account']['fields']['rfc_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['rfc_c']['enforced']='';
$dictionary['Account']['fields']['rfc_c']['dependency']='ifElse(equal($estado_c,"BLOQUEADO"),false,true)';

 ?>
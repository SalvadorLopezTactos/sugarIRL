<?php
 // created: 2018-01-16 19:08:27
$dictionary['Account']['fields']['business_name_c']['labelValue']='Razón social:';
$dictionary['Account']['fields']['business_name_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['business_name_c']['enforced']='';
$dictionary['Account']['fields']['business_name_c']['dependency']='ifElse(equal($estado_c,"BLOQUEADO"),false,equal($person_type_c,"MORAL"))';

 ?>
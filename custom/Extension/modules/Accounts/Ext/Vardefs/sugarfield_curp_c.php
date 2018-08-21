<?php
 // created: 2018-01-16 19:10:32
$dictionary['Account']['fields']['curp_c']['labelValue']='CURP:';
$dictionary['Account']['fields']['curp_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['curp_c']['enforced']='';
$dictionary['Account']['fields']['curp_c']['dependency']='ifElse(equal($estado_c,"BLOQUEADO"),false,equal($person_type_c,"FISICA"))';

 ?>
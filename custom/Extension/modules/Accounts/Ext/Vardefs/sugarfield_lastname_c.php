<?php
 // created: 2018-01-16 19:09:24
$dictionary['Account']['fields']['lastname_c']['labelValue']='Apellidos:';
$dictionary['Account']['fields']['lastname_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['lastname_c']['enforced']='';
$dictionary['Account']['fields']['lastname_c']['dependency']='ifElse(equal($estado_c,"BLOQUEADO"),false,equal($person_type_c,"FISICA"))';

 ?>
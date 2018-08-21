<?php
 // created: 2018-01-16 19:08:57
$dictionary['Account']['fields']['firstname_c']['labelValue']='Nombre:';
$dictionary['Account']['fields']['firstname_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['firstname_c']['enforced']='false';
$dictionary['Account']['fields']['firstname_c']['dependency']='ifElse(equal($estado_c,"BLOQUEADO"),false,equal($person_type_c,"FISICA"))';

 ?>
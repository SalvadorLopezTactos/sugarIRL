<?php
 // created: 2018-01-16 19:12:23
$dictionary['Account']['fields']['industry']['len']=100;
$dictionary['Account']['fields']['industry']['audited']=false;
$dictionary['Account']['fields']['industry']['massupdate']=true;
$dictionary['Account']['fields']['industry']['comments']='The company belongs in this industry';
$dictionary['Account']['fields']['industry']['duplicate_merge']='enabled';
$dictionary['Account']['fields']['industry']['duplicate_merge_dom_value']='1';
$dictionary['Account']['fields']['industry']['merge_filter']='disabled';
$dictionary['Account']['fields']['industry']['calculated']=false;
$dictionary['Account']['fields']['industry']['dependency']='ifElse(equal($estado_c,"BLOQUEADO"),false,true)';

 ?>
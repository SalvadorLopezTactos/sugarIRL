<?php
 // created: 2018-03-26 17:50:17
$dictionary['TCTP_Presupuesto']['fields']['name']['len']='255';
$dictionary['TCTP_Presupuesto']['fields']['name']['audited']=false;
$dictionary['TCTP_Presupuesto']['fields']['name']['massupdate']=false;
$dictionary['TCTP_Presupuesto']['fields']['name']['importable']='false';
$dictionary['TCTP_Presupuesto']['fields']['name']['duplicate_merge']='disabled';
$dictionary['TCTP_Presupuesto']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['TCTP_Presupuesto']['fields']['name']['merge_filter']='disabled';
$dictionary['TCTP_Presupuesto']['fields']['name']['unified_search']=false;
$dictionary['TCTP_Presupuesto']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.55',
  'searchable' => true,
);
$dictionary['TCTP_Presupuesto']['fields']['name']['calculated']='true';
$dictionary['TCTP_Presupuesto']['fields']['name']['formula']='concat(related($assigned_user_link,"first_name")," ",related($created_by_link,"last_name")," - ",$tct_anio_ddw," ",$tct_periodo_ddw," : ",$tct_tipo_presupuesto_ddw)';
$dictionary['TCTP_Presupuesto']['fields']['name']['enforced']=true;

 ?>
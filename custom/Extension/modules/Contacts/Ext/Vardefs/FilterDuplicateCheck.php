<?php
$dictionary['Contact']['duplicate_check']['FilterDuplicateCheck'] = array(
    'filter_template' => array(
        array(
            '$and' => array(
                array('email1' => array('$equals' => '$email1')),
            )
        ),
    ),
);

 ?>
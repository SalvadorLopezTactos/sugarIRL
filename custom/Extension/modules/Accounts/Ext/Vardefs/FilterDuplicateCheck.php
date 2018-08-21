<?php
$dictionary['Account']['duplicate_check']['FilterDuplicateCheck'] = array(
    'filter_template' => array(
        array(
            '$and' => array(
                array('name' => array('$equals' => '$name')),
            )
        ),
    ),
);

 ?>
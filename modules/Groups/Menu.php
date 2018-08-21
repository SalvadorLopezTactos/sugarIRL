<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
global $mod_strings;
$module_menu = array(
	array('index.php?module=Groups&action=ListView', $mod_strings['LNK_ALL_GROUPS'], 'Teams'),
	array('index.php?module=Groups&action=EditView&return_module=Groups&return_action=ListView', $mod_strings['LNK_NEW_GROUP'], 'CreateTeams'),
	//array('index.php?module=Groups&action=ListView', $mod_strings['LNK_CONVERT_USER'], 'CreateTeams'),
);

?>
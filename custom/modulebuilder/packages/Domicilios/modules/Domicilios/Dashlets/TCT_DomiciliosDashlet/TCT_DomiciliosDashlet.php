<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************
 * $Id$
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/Dashlets/DashletGeneric.php');
require_once('modules/TCT_Domicilios/TCT_Domicilios.php');

class TCT_DomiciliosDashlet extends DashletGeneric { 
    function TCT_DomiciliosDashlet($id, $def = null) {
		global $current_user, $app_strings;
		require('modules/TCT_Domicilios/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'TCT_Domicilios');

        $this->searchFields = $dashletData['TCT_DomiciliosDashlet']['searchFields'];
        $this->columns = $dashletData['TCT_DomiciliosDashlet']['columns'];

        $this->seedBean = new TCT_Domicilios();        
    }
}
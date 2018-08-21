<?php
/**
 * Created by PhpStorm.
 * User: salvadorlopez
 * Date: 10/01/18
 * Time: 14:02
 */

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class convertUpperCase{

    function convertUpper($bean, $event, $arguments){

                   foreach ($bean->field_defs as $keyField => $aFieldName) {

                       if($aFieldName['type']=="varchar" || $aFieldName['dbType']=="varchar")
                       {
                           $bean->$keyField = convertUpperCase::convertingToUpper($bean->$keyField);
                       }

                   }

    }//Fin función

    function convertingToUpper($cadena){
        $result="";
        if($cadena !=""){
            //Eliminando espacios en blanco al principio y al final
            $clean_string=trim($cadena);

            $result=  strtoupper($clean_string);
            $result = str_replace(array('á','à'),"Á",$result);
            $result = str_replace(array('í','ì'),"Í",$result);
            $result = str_replace(array('é','è'),"É",$result);
            $result = str_replace(array('ó','ò'),"Ó",$result);
            $result = str_replace(array('ú','ù'),"Ú",$result);
            $result = str_replace(array('ñ','Ñ'),"Ñ",$result);

        }
        return $result;
    }


}//fin clase

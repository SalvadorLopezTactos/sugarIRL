<?php
/**
 * Created by PhpStorm.
 * User: salvadorlopez
 * Date: 21/08/18
 * Time: 14:25
 */

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class IntegrationsAddress
{

    function createAddress($bean, $event, $arguments)
    {

        global $current_user;

        $url = "http://192.168.90.11:8080/lysi-rest";

        $idCliente =$bean->accounts_tct_domicilios_1accounts_ida;

        //Solo se debe de mandar la petición en caso de que la persona relacionada sea Cliente
        $beanQuery = BeanFactory::newBean('Accounts');
        $sugarQueryCli = new SugarQuery();
        $sugarQueryCli->select(array('id'));
        $sugarQueryCli->from($beanQuery);
        $sugarQueryCli->where()
            ->equals('customer_type_c','CLIENTE')
            ->equals('id',$idCliente);

        $resultCliente = $sugarQueryCli->execute();
        $countCli = count($resultCliente);

        if($countCli>0){
            //Creación domicilio

            if (!$arguments['isUpdate']) {

                //Crear domicilio
                $urlCdomicilio = "/rest/direcciones/creardireccion";



                $tipoDomicilio=$bean->tct_address_type_ddw;

                $principal=false;

                if($tipoDomicilio=='FACTURACION'){
                    $principal=true;
                }

                $codigoPostal=$bean->tct_sepomex_tct_domicilios_1->beans["{$bean->tct_sepomex_tct_domicilios_1tct_sepomex_ida}"]->name;

                $argsDomicilio = array(

                    "idUsuario" => (string)$current_user->id,
                    "tipoDireccion" => (string) $tipoDomicilio,
                    "codigoPostal" => intval($codigoPostal),
                    "personaId" => (string)$idCliente,
                    "calle" => (string)$bean->tct_street_txf,
                    "noExt" => (string)$bean->tct_external_num_txf,
                    "noInt" => (string)$bean->tct_interior_num_txf,
                    "esPrincipal" => $principal

                );


                $responseDomicilio = IntegrationsAddress::call($url . $urlCdomicilio, '', 'POST', $argsDomicilio, true, false);
                //$bean->description = $response['responseStatus'] . " RESULTADO: " . $response["result"];

            }else{//Actualización de domicilio

                $urlAdomicilioUpdate = "/rest/direcciones/actualizardireccion";

                $idCliente =$bean->accounts_tct_domicilios_1accounts_ida;

                $tipoDomicilio=$bean->tct_address_type_ddw;

                $principal=false;

                if($tipoDomicilio=='FACTURACION'){
                    $principal=true;
                }

                $codigoPostal=$bean->tct_sepomex_tct_domicilios_1->beans["{$bean->tct_sepomex_tct_domicilios_1tct_sepomex_ida}"]->name;

                $argsDomicilioUpdate = array(

                    "idUsuario" => (string)$current_user->id,
                    "tipoDireccion" => (string) $tipoDomicilio,
                    "codigoPostal" => intval($codigoPostal),
                    "personaId" => (string)$idCliente,
                    "calle" => (string)$bean->tct_street_txf,
                    "noExt" => (string)$bean->tct_external_num_txf,
                    "noInt" => (string)$bean->tct_interior_num_txf,
                    "esPrincipal" => $principal

                );


                $responseDomicilioUpdate = IntegrationsAddress::call($url . $urlAdomicilioUpdate, '', 'PUT', $argsDomicilioUpdate, true, false);
                //$bean->description = $response['responseStatus'] . " RESULTADO: " . $response["result"];


            }

        }


    }//Fin función

    function call($url, $oauthtoken = '', $type = 'GET', $arguments = array(), $encodeData = true, $returnHeaders = false)
    {
        $type = strtoupper($type);

        if ($type == 'GET') {
            $url .= "?" . http_build_query($arguments);
        }

        //$url .= "?" . http_build_query('access_token=bbd6aea9-c264-4b45-b4d3-c7941f2af9e');
        $curl_request = curl_init($url);
        if ($type == 'POST') {
            curl_setopt($curl_request, CURLOPT_CUSTOMREQUEST, 'POST');
        } elseif ($type == 'PUT') {
            curl_setopt($curl_request, CURLOPT_CUSTOMREQUEST, "PUT");
        } elseif ($type == 'DELETE') {
            curl_setopt($curl_request, CURLOPT_CUSTOMREQUEST, "DELETE");
        }
        curl_setopt($curl_request, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
        curl_setopt($curl_request, CURLOPT_HEADER, $returnHeaders);
        curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_request, CURLOPT_FOLLOWLOCATION, 0);
        if (!empty($oauthtoken)) {
            $token = array("oauth-token=> {$oauthtoken}");
            curl_setopt($curl_request, CURLOPT_HTTPHEADER, $token);
        }
        if (!empty($arguments) && $type !== 'GET') {
            if ($encodeData) {
                //encode the arguments as JSON
                $arguments = json_encode($arguments);
            }
            curl_setopt($curl_request, CURLOPT_POSTFIELDS, $arguments);
            curl_setopt($curl_request, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Accept: application/json'
                    //'Content-Length=> ' . strlen($arguments)
                )
            );
        }
        $result = curl_exec($curl_request);
        if ($returnHeaders) {
            //set headers from response
            list($headers, $content) = explode("\r\n\r\n", $result, 2);
            foreach (explode("\r\n", $headers) as $header) {
                header($header);
            }
            //return the nonheader data
            return trim($content);
        }
        curl_close($curl_request);
        //decode the response from JSON
        $response = json_decode($result, true);
        return $response;
    }//fin funcion call


}//fin clase

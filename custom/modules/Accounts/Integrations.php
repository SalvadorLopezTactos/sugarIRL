<?php
/**
 * Created by PhpStorm.
 * User: salvadorlopez
 * Date: 21/08/18
 * Time: 14:25
 */

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class Integrations
{

    function createRecords($bean, $event, $arguments)
    {

        global $current_user;

        $url = "http://192.168.90.11:8080/lysi-rest";

        //En la creación
        if ($bean->fetched_row['customer_type_c'] != $bean->customer_type_c && $bean->customer_type_c == 'CLIENTE') {

            //Crear cliente
            $urlCcliente = "/rest/clientes/crearcliente";

            $regimenFiscal = $bean->person_type_c;
            //Convirtiendo regimen fiscal para lo esperado por el servicio
            if ($regimenFiscal == "FISICA") {
                $regimenFiscal = "FISICO";

            }

            $argsCliente = array(
                /*
                "idUsuario"=>$current_user->id,
                "apellidoMaterno"=> "",
                "apellidoPaterno"=> "{$bean->lastname_c}",
                "regimenFiscal"=> $regimenFiscal,
                //"nacionalidad"=> "",
                "rfc"=> "{$bean->rfc_c}",
                "curp"=> "{$bean->curp_c}",
                "genero"=> "MASCULINO",
                //"fechaNacimiento"=> "2018-08-16T16=>41=>14.786Z",
                "personaId"=> "{$bean->id}",
                "clienteId"=> "",//Clave interna 4PMX
                "categoriaCliente"=> "JUNIOR",
                "correoElectronico1"=> "{$bean->email1}",
                "correoElectronico2"=> "{$bean->email2}",
                "correoElectronico3"=> "",
                "correoElectronico4"=> "",
                "confidencial"=> true,
                "estatus"=> "{$bean->estado_c}"
                */
                "idUsuario" => (string)$current_user->id,
                "nombres" => (string)$bean->firstname_c,
                "apellidoMaterno" => "",
                "apellidoPaterno" => (string)$bean->lastname_c,
                "regimenFiscal" => (string)$regimenFiscal,
                //"nacionalidad"=> "",
                "rfc" => (string)$bean->rfc_c,
                "curp" => (string)$bean->curp_c,
                "genero" => "MASCULINO",
                //"fechaNacimiento"=> "2018-08-16T16=>41=>14.786Z",
                "personaId" => (string)$bean->id,
                "clienteId" => "",//Cliente interna 4PMX
                "categoriaCliente" => "JUNIOR",
                "correoElectronico1" => (string)$bean->email1,
                "correoElectronico2" => (string)$bean->email2,
                "correoElectronico3" => "",
                "correoElectronico4" => "",
                "confidencial" => true,
                "estatus" => (string)$bean->estado_c
            );


            $response = Integrations::call($url . $urlCcliente, '', 'POST', $argsCliente, true, false);
            $bean->description = $response['responseStatus'] . " RESULTADO: " . $response["result"];


            //Crear teléfonos
            if ($response['responseError'] == 'OK') {
                $arrTelefonos= array();

                if($bean->phone_office!=""){
                    array_push($arrTelefonos,"OFICINA-".$bean->phone_office);
                }

                if($bean->phone_fax!=""){
                    array_push($arrTelefonos,"MOVIL-".$bean->phone_fax);
                }

                if($bean->phone_alternate!=""){
                    array_push($arrTelefonos,"PARTICULAR-".$bean->phone_alternate);
                }

                $urlCTelefono = "/rest/telefonos/creartelefono";
                if(count($arrTelefonos>0)){
                    $principal=false;
                    for ($i=0;$i<count($arrTelefonos);$i++){


                        //Generando explode para obtener teléfono de oficina y poder establecerlo como principal
                        $tel=explode("-",$arrTelefonos[$i]);

                        if($tel[0]=="OFICINA"){
                            $principal=true;

                        }
                        if($tel[0]=="PARTICULAR" && $principal==false){
                            $principal=true;

                        }
                        if($tel[0]=="MOVIL" && $principal==false){
                            $principal=true;
                        }


                        //Controlar valores de teléfonos para genera id (consecutivo_telefono)
                        $consecutivo_tel="";

                        if($tel[0]=="OFICINA"){
                            $consecutivo_tel="1";
                        }
                        if($tel[0]=="MOVIL"){
                            $consecutivo_tel="2";

                        }
                        if($tel[0]=="PARTICULAR"){
                            $consecutivo_tel="3";
                        }



                        $argsTelefono = array(
                            "personaId" => (string)$bean->id ,
                            "idUsuario" => (string)$current_user->id,
                            "telefonoId" => intval($tel[1].$consecutivo_tel),
                            "ladaTelefono" => 0,
                            "numero" => $tel[1],
                            "extension" => 0,
                            "tipoTelefono" => $tel[0],
                            "principal" => $principal
                        );

                        $responseTels = Integrations::call($url . $urlCTelefono, '', 'POST', $argsTelefono, true, false);

                    }

                }

            }
        }

        //Actualización de clientes
        if ($bean->fetched_row['customer_type_c'] == $bean->customer_type_c && $bean->customer_type_c == 'CLIENTE' && $arguments['isUpdate']) {

            $urlAcliente = "/rest/clientes/actualizarcliente";

            $regimenFiscal = $bean->person_type_c;
            //Convirtiendo regimen fiscal para lo esperado por el servicio
            if ($regimenFiscal == "FISICA") {
                $regimenFiscal = "FISICO";

            }

            $argsClienteUpdate = array(

                "idUsuario" => (string)$current_user->id,
                "nombres" => (string)$bean->firstname_c,
                "apellidoMaterno" => "",
                "apellidoPaterno" => (string)$bean->lastname_c,
                "regimenFiscal" => (string)$regimenFiscal,
                //"nacionalidad"=> "",
                "rfc" => (string)$bean->rfc_c,
                "curp" => (string)$bean->curp_c,
                "genero" => "MASCULINO",
                //"fechaNacimiento"=> "2018-08-16T16=>41=>14.786Z",
                "personaId" => (string)$bean->id,
                "clienteId" => "",//Cliente interna 4PMX
                "categoriaCliente" => "JUNIOR",
                "correoElectronico1" => (string)$bean->email1,
                "correoElectronico2" => (string)$bean->email2,
                "correoElectronico3" => "",
                "correoElectronico4" => "",
                "confidencial" => true,
                "estatus" => (string)$bean->estado_c
            );


            $responseUpdateCliente = Integrations::call($url . $urlAcliente, '', 'PUT', $argsClienteUpdate, true, false);
            $bean->description = $responseUpdateCliente['responseStatus'] . " RESULTADO: " . $responseUpdateCliente["result"];

            //Actualización de telefonos
            if ($responseUpdateCliente['responseError'] == 'OK') {
                $arrTelefonos= array();

                if($bean->fetched_row['phone_office'] != $bean->phone_office && $bean->phone_office !=""){
                    array_push($arrTelefonos,"OFICINA-".$bean->phone_office);
                }

                if($bean->fetched_row['phone_fax'] != $bean->phone_fax && $bean->phone_fax!=""){
                    array_push($arrTelefonos,"MOVIL-".$bean->phone_fax);
                }

                if($bean->fetched_row['phone_alternate'] != $bean->phone_alternate && $bean->phone_alternate!=""){
                    array_push($arrTelefonos,"PARTICULAR-".$bean->phone_alternate);
                }

                $urlATelefono = "/rest/telefonos/actualizartelefono";
                if(count($arrTelefonos>0)){
                    $principal=false;
                    for ($i=0;$i<count($arrTelefonos);$i++){


                        //Generando explode para obtener teléfono de oficina y poder establecerlo como principal
                        $tel=explode("-",$arrTelefonos[$i]);

                        if($tel[0]=="OFICINA"){
                            $principal=true;

                        }
                        if($tel[0]=="PARTICULAR" && $principal==false){
                            $principal=true;

                        }
                        if($tel[0]=="MOVIL" && $principal==false){
                            $principal=true;
                        }


                        //Controlar valores de teléfonos para genera id (consecutivo_telefono)
                        $consecutivo_tel="";

                        if($tel[0]=="OFICINA"){
                            $consecutivo_tel="1";
                        }
                        if($tel[0]=="MOVIL"){
                            $consecutivo_tel="2";

                        }
                        if($tel[0]=="PARTICULAR"){
                            $consecutivo_tel="3";
                        }


                        $argsTelefonoUpdate = array(
                            "personaId" => (string)$bean->id ,
                            "idUsuario" => (string)$current_user->id,
                            "telefonoId" => intval($tel[1].$consecutivo_tel),
                            "ladaTelefono" => 0,
                            "numero" => $tel[1],
                            "extension" => 0,
                            "tipoTelefono" => $tel[0],
                            "principal" => $principal
                        );

                        $responseTelsUpdate = Integrations::call($url . $urlATelefono, '', 'PUT', $argsTelefonoUpdate, true, false);
                        $bean->description= $bean->description." RESULT TELÉFONOS UPDATE: ".$responseTelsUpdate['responseError']." ".$responseTelsUpdate['result'];

                    }

                }

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

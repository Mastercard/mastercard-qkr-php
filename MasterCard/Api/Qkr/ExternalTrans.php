<?php
/*
 * Copyright 2016-2020 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of
 * conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its
 * contributors may be used to endorse or promote products derived from this software
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 */

 namespace MasterCard\Api\Qkr;

 use MasterCard\Core\Model\BaseObject;
 use MasterCard\Core\Model\RequestMap;
 use MasterCard\Core\Model\OperationMetadata;
 use MasterCard\Core\Model\OperationConfig;


/**
 * 
 */
class ExternalTrans extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "4435d1cf-9eab-4831-b091-556e5b14fb7b":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/externalTrans", "create", array(), array());
            case "3a2cd8f0-ca36-460c-a770-4388455cac6f":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/externalTrans", "query", array(), array());
            case "91b444f1-3829-4f4b-846d-81e17994b9b7":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/externalTrans/{id}", "read", array(), array());
            case "3bf031bb-b7b8-454b-998e-75511fae82ac":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/externalTrans/{id}", "update", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }


   /**
    * Creates object of type ExternalTrans
    *
    * @param Map map, containing the required parameters to create a new object
    * @return ExternalTrans of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("4435d1cf-9eab-4831-b091-556e5b14fb7b", new ExternalTrans($map));
    }










    /**
     * Query objects of type ExternalTrans by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return ExternalTrans of the response
     */
    public static function query($criteria)
    {
        return self::execute("3a2cd8f0-ca36-460c-a770-4388455cac6f",new ExternalTrans($criteria));
    }




    /**
     * Returns objects of type ExternalTrans by id and optional criteria
     * @param type $id
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return ExternalTrans of the response
     */
    public static function read($id, $criteria = null)
    {
        $map = new RequestMap();
        if (!empty($id)) {
            $map->set("id", $id);
        }
        if ($criteria != null) {
            $map->setAll($criteria);
        }
        return self::execute("91b444f1-3829-4f4b-846d-81e17994b9b7",new ExternalTrans($map));
    }


    /**
     * Updates an object of type ExternalTrans
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return ExternalTrans of the response
     */
    public function update()  {
        return self::execute("3bf031bb-b7b8-454b-998e-75511fae82ac",$this);
    }






}


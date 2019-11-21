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
class Beneficiary extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "52a6bfc9-93e9-4730-bd7e-3f4adeeb77eb":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/beneficiary", "create", array(), array("X-Auth-Token"));
            case "807122a0-7810-40ea-a080-94538a4a843c":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/beneficiary/{id}", "delete", array(), array("X-Auth-Token"));
            case "bfecf8b7-81bd-4ae8-866b-64f1e17a132e":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/beneficiary", "query", array("merchantId"), array("X-Auth-Token"));
            case "84744a69-e973-404d-a657-8fdee27e1d27":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/beneficiary/{id}", "update", array(), array("X-Auth-Token"));
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }


   /**
    * Creates object of type Beneficiary
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Beneficiary of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("52a6bfc9-93e9-4730-bd7e-3f4adeeb77eb", new Beneficiary($map));
    }








   /**
    * Delete object of type Beneficiary by id
    *
    * @param String id
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return Beneficiary of the response.
    */
    public static function deleteById($id, $requestMap = null)
    {
        $map = new RequestMap();
        if (!empty($id)) {
            $map->set("id", $id);
        }
        if (!empty($requestMap)) {
            $map->setAll($requestMap);
        }
        return self::execute("807122a0-7810-40ea-a080-94538a4a843c", new Beneficiary($map));
    }

   /**
    * Delete this object of type Beneficiary
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return Beneficiary of the response.
    */
    public function delete()
    {
        return self::execute("807122a0-7810-40ea-a080-94538a4a843c", $this);
    }







    /**
     * Query objects of type Beneficiary by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Beneficiary of the response
     */
    public static function query($criteria)
    {
        return self::execute("bfecf8b7-81bd-4ae8-866b-64f1e17a132e",new Beneficiary($criteria));
    }

    /**
     * Updates an object of type Beneficiary
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Beneficiary of the response
     */
    public function update()  {
        return self::execute("84744a69-e973-404d-a657-8fdee27e1d27",$this);
    }






}


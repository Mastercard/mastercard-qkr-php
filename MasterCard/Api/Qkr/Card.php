<?php
/*
 * Copyright 2016 MasterCard International.
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
class Card extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "dfd84da9-1770-4514-ad15-7c1a5c2ada52":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/card", "create", array(), array("X-Auth-Token"));
            case "c22f9813-2432-48c0-b680-48d9e3df986b":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/card/{id}", "delete", array(), array("X-Auth-Token"));
            case "3653dead-5de4-4151-a403-7d6715c650ba":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/card", "query", array(), array("X-Auth-Token"));
            case "2261fbe7-d2b6-404f-b08f-6229e734a1ac":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/card/{id}", "read", array(), array("X-Auth-Token"));
            case "fed31d50-a328-425f-8225-8a0165b89a2c":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/card/{id}", "update", array(), array("X-Auth-Token"));
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }


   /**
    * Creates object of type Card
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Card of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("dfd84da9-1770-4514-ad15-7c1a5c2ada52", new Card($map));
    }








   /**
    * Delete object of type Card by id
    *
    * @param String id
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return Card of the response.
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
        return self::execute("c22f9813-2432-48c0-b680-48d9e3df986b", new Card($map));
    }

   /**
    * Delete this object of type Card
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return Card of the response.
    */
    public function delete()
    {
        return self::execute("c22f9813-2432-48c0-b680-48d9e3df986b", $this);
    }







    /**
     * Query objects of type Card by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Card of the response
     */
    public static function query($criteria)
    {
        return self::execute("3653dead-5de4-4151-a403-7d6715c650ba",new Card($criteria));
    }




    /**
     * Returns objects of type Card by id and optional criteria
     * @param type $id
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Card of the response
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
        return self::execute("2261fbe7-d2b6-404f-b08f-6229e734a1ac",new Card($map));
    }


    /**
     * Updates an object of type Card
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Card of the response
     */
    public function update()  {
        return self::execute("fed31d50-a328-425f-8225-8a0165b89a2c",$this);
    }






}


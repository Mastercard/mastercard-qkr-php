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
class Card extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "a6f17a87-da96-458c-a0f9-4a5a78ffa87c":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/card", "create", array(), array("X-Auth-Token"));
            case "b12e9ace-c929-4799-a1d4-c6ca0b0a4383":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/card/{id}", "delete", array(), array("X-Auth-Token"));
            case "fa1c8a37-d94d-48a1-a82a-db9e146a3c7a":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/card", "query", array(), array("X-Auth-Token"));
            case "c9cb67c0-f404-4281-a270-2ac8e0e37fff":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/card/{id}", "read", array(), array("X-Auth-Token"));
            case "f7d2f263-36fa-4cb9-8079-248b90e6686b":
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
        return self::execute("a6f17a87-da96-458c-a0f9-4a5a78ffa87c", new Card($map));
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
        return self::execute("b12e9ace-c929-4799-a1d4-c6ca0b0a4383", new Card($map));
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
        return self::execute("b12e9ace-c929-4799-a1d4-c6ca0b0a4383", $this);
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
        return self::execute("fa1c8a37-d94d-48a1-a82a-db9e146a3c7a",new Card($criteria));
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
        return self::execute("c9cb67c0-f404-4281-a270-2ac8e0e37fff",new Card($map));
    }


    /**
     * Updates an object of type Card
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Card of the response
     */
    public function update()  {
        return self::execute("f7d2f263-36fa-4cb9-8079-248b90e6686b",$this);
    }






}


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
class User extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "13cc948c-7011-45f4-ad4f-1be21e3e129e":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/user", "create", array(), array("X-Auth-Token"));
            case "dd69235f-33ac-44c2-bcb4-5d0e637adf3c":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/user", "delete", array(), array("X-Auth-Token"));
            case "2c1c48f1-0490-4216-a878-b06db127ba52":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/user", "query", array(), array("X-Auth-Token"));
            case "5194cadd-8097-4715-84d6-65751499632b":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/user", "update", array(), array("X-Auth-Token"));
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }


   /**
    * Creates object of type User
    *
    * @param Map map, containing the required parameters to create a new object
    * @return User of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("13cc948c-7011-45f4-ad4f-1be21e3e129e", new User($map));
    }








   /**
    * Delete object of type User by id
    *
    * @param String id
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return User of the response.
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
        return self::execute("dd69235f-33ac-44c2-bcb4-5d0e637adf3c", new User($map));
    }

   /**
    * Delete this object of type User
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return User of the response.
    */
    public function delete()
    {
        return self::execute("dd69235f-33ac-44c2-bcb4-5d0e637adf3c", $this);
    }







    /**
     * Query objects of type User by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return User of the response
     */
    public static function query($criteria)
    {
        return self::execute("2c1c48f1-0490-4216-a878-b06db127ba52",new User($criteria));
    }

    /**
     * Updates an object of type User
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return User of the response
     */
    public function update()  {
        return self::execute("5194cadd-8097-4715-84d6-65751499632b",$this);
    }






}


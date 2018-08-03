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
            case "0b4e57f2-1ff2-48ff-8d76-c87873e98858":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/card", "create", array(), array("X-Auth-Token"));
            case "afb4b346-32a4-4075-ad14-7af8347347f9":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/card/{id}", "delete", array(), array("X-Auth-Token"));
            case "bd1fc2db-e491-4a18-a2a4-a23d78c3bf6f":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/card", "query", array(), array("X-Auth-Token"));
            case "d7d8482c-0d9d-477e-bb1c-3fef9b7cecdf":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/card/{id}", "read", array(), array("X-Auth-Token"));
            case "d0ba1454-3987-4490-899a-77fc144432d7":
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
        return self::execute("0b4e57f2-1ff2-48ff-8d76-c87873e98858", new Card($map));
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
        return self::execute("afb4b346-32a4-4075-ad14-7af8347347f9", new Card($map));
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
        return self::execute("afb4b346-32a4-4075-ad14-7af8347347f9", $this);
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
        return self::execute("bd1fc2db-e491-4a18-a2a4-a23d78c3bf6f",new Card($criteria));
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
        return self::execute("d7d8482c-0d9d-477e-bb1c-3fef9b7cecdf",new Card($map));
    }


    /**
     * Updates an object of type Card
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Card of the response
     */
    public function update()  {
        return self::execute("d0ba1454-3987-4490-899a-77fc144432d7",$this);
    }






}


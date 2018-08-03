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
class Trans extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "11b20d90-3bf9-4da3-a2c2-8659ed7b15bf":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/trans", "create", array(), array("X-Auth-Token"));
            case "5cb86eed-27c3-42c2-a559-b40cefd9d809":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/trans", "query", array("from","to"), array("X-Auth-Token"));
            case "1b96fb41-7002-4ca0-9832-96b8983b4e1b":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/trans/{id}", "read", array(), array("X-Auth-Token"));
            case "c6c3d209-2300-4fbb-9cc5-854be472ac15":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/trans/{id}", "update", array(), array("X-Auth-Token"));
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }


   /**
    * Creates object of type Trans
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Trans of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("11b20d90-3bf9-4da3-a2c2-8659ed7b15bf", new Trans($map));
    }










    /**
     * Query objects of type Trans by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Trans of the response
     */
    public static function query($criteria)
    {
        return self::execute("5cb86eed-27c3-42c2-a559-b40cefd9d809",new Trans($criteria));
    }




    /**
     * Returns objects of type Trans by id and optional criteria
     * @param type $id
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Trans of the response
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
        return self::execute("1b96fb41-7002-4ca0-9832-96b8983b4e1b",new Trans($map));
    }


    /**
     * Updates an object of type Trans
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Trans of the response
     */
    public function update()  {
        return self::execute("c6c3d209-2300-4fbb-9cc5-854be472ac15",$this);
    }






}


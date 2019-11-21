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
class Trans extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "18905398-3cc5-4e60-87cf-2e4e517d7ded":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/trans", "create", array(), array("X-Auth-Token"));
            case "b9ef9d32-b70b-4157-8e8a-4f9636a1ac5c":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/trans", "query", array("from","to"), array("X-Auth-Token"));
            case "c4bf3df4-c536-4249-891d-203739b054c1":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/trans/{id}", "read", array(), array("X-Auth-Token"));
            case "58cd9bd9-4722-4a4e-96b9-03170c1da690":
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
        return self::execute("18905398-3cc5-4e60-87cf-2e4e517d7ded", new Trans($map));
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
        return self::execute("b9ef9d32-b70b-4157-8e8a-4f9636a1ac5c",new Trans($criteria));
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
        return self::execute("c4bf3df4-c536-4249-891d-203739b054c1",new Trans($map));
    }


    /**
     * Updates an object of type Trans
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Trans of the response
     */
    public function update()  {
        return self::execute("58cd9bd9-4722-4a4e-96b9-03170c1da690",$this);
    }






}


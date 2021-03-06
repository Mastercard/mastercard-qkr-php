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
class CartItem extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "6d4aa7b6-5e53-4956-af76-b38d00868504":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/cartItem", "create", array(), array("X-Auth-Token"));
            case "89f71579-46a3-4f2d-bff2-1171f28e2459":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/cartItem/{id}", "delete", array(), array("X-Auth-Token"));
            case "afb3def1-7a2d-4710-b228-a6a2785927b3":
                return new OperationConfig("/labs/proxy/qkr2/internal/api2/cartItem/{id}", "update", array(), array("X-Auth-Token"));
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }


   /**
    * Creates object of type CartItem
    *
    * @param Map map, containing the required parameters to create a new object
    * @return CartItem of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("6d4aa7b6-5e53-4956-af76-b38d00868504", new CartItem($map));
    }








   /**
    * Delete object of type CartItem by id
    *
    * @param String id
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return CartItem of the response.
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
        return self::execute("89f71579-46a3-4f2d-bff2-1171f28e2459", new CartItem($map));
    }

   /**
    * Delete this object of type CartItem
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return CartItem of the response.
    */
    public function delete()
    {
        return self::execute("89f71579-46a3-4f2d-bff2-1171f28e2459", $this);
    }



    /**
     * Updates an object of type CartItem
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return CartItem of the response
     */
    public function update()  {
        return self::execute("afb3def1-7a2d-4710-b228-a6a2785927b3",$this);
    }






}


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
class Order extends BaseObject {



	protected static function getOperationConfig($operationUUID) {
		switch ($operationUUID) {
			case "d68ecb82-3a17-4b16-9072-0ceab721a761":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/order/pat", "create", array(), array());
			case "68570d5c-3f8e-44ea-a5e0-f0768cf64f86":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/order/pat/{id}", "delete", array(), array());
			case "736979c2-8717-41b9-8b6f-aab9bb4c7560":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/order/pat/{id}", "read", array(), array());
			case "454a9556-8c2e-47e6-8b47-adc4efb46e28":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/order/pat/{id}", "update", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
	}


   /**
	* Creates object of type Order
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Order of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("d68ecb82-3a17-4b16-9072-0ceab721a761", new Order($map));
	}








   /**
	* Delete object of type Order by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Order of the response.
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
		return self::execute("68570d5c-3f8e-44ea-a5e0-f0768cf64f86", new Order($map));
	}

   /**
	* Delete this object of type Order
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Order of the response.
	*/
	public function delete()
	{
		return self::execute("68570d5c-3f8e-44ea-a5e0-f0768cf64f86", $this);
	}






	/**
	 * Returns objects of type Order by id and optional criteria
	 * @param type $id
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Order of the response
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
		return self::execute("736979c2-8717-41b9-8b6f-aab9bb4c7560",new Order($map));
	}


	/**
	 * Updates an object of type Order
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Order of the response
	 */
	public function update()  {
		return self::execute("454a9556-8c2e-47e6-8b47-adc4efb46e28",$this);
	}






}


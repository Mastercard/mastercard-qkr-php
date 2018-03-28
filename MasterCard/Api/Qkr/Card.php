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
			case "e7537ecf-c7a0-4b71-a073-2515c42c72cb":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/card", "create", array(), array("X-Auth-Token"));
			case "58fa2bd7-2ddc-465b-be8c-a14691ccfbcf":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/card/{id}", "delete", array(), array("X-Auth-Token"));
			case "145c601a-2044-41b9-82ea-274cdb0805ab":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/card", "query", array(), array("X-Auth-Token"));
			case "c6044923-ead5-4f28-96a5-c177dc998fcf":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/card/{id}", "read", array(), array("X-Auth-Token"));
			case "c5661e8d-fde9-4cf8-ac7c-2e0b8333710f":
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
		return self::execute("e7537ecf-c7a0-4b71-a073-2515c42c72cb", new Card($map));
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
		return self::execute("58fa2bd7-2ddc-465b-be8c-a14691ccfbcf", new Card($map));
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
		return self::execute("58fa2bd7-2ddc-465b-be8c-a14691ccfbcf", $this);
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
		return self::execute("145c601a-2044-41b9-82ea-274cdb0805ab",new Card($criteria));
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
		return self::execute("c6044923-ead5-4f28-96a5-c177dc998fcf",new Card($map));
	}


	/**
	 * Updates an object of type Card
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Card of the response
	 */
	public function update()  {
		return self::execute("c5661e8d-fde9-4cf8-ac7c-2e0b8333710f",$this);
	}






}


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
			case "4325a0ce-90d1-47f1-bf97-2e45e78c2182":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/card", "create", array(), array("X-Auth-Token"));
			case "027195b8-b444-48cd-894a-1df9721a8ac1":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/card/{id}", "delete", array(), array("X-Auth-Token"));
			case "cf58b53e-c66b-4dcb-bc3c-291e4d567da3":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/card", "query", array(), array("X-Auth-Token"));
			case "646984fb-0125-4449-b14f-9b615ab3385d":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/card/{id}", "read", array("amountMinorUnits","currency","id2"), array("X-Auth-Token"));
			case "2e2ac6d7-bf68-4cf1-b9ae-17a6954dc04c":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/card/{id}", "update", array(), array("X-Auth-Token"));
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative());
	}


   /**
	* Creates object of type Card
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Card of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("4325a0ce-90d1-47f1-bf97-2e45e78c2182", new Card($map));
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
		return self::execute("027195b8-b444-48cd-894a-1df9721a8ac1", new Card($map));
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
		return self::execute("027195b8-b444-48cd-894a-1df9721a8ac1", $this);
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
		return self::execute("cf58b53e-c66b-4dcb-bc3c-291e4d567da3",new Card($criteria));
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
		return self::execute("646984fb-0125-4449-b14f-9b615ab3385d",new Card($map));
	}


	/**
	 * Updates an object of type Card
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Card of the response
	 */
	public function update()  {
		return self::execute("2e2ac6d7-bf68-4cf1-b9ae-17a6954dc04c",$this);
	}






}


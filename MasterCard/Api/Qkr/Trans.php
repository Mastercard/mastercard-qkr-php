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
			case "c94d84c1-a98f-4806-85ce-8dc4b554e1ce":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/trans", "create", array(), array("X-Auth-Token"));
			case "feff4ef6-98a1-4d27-b7d5-dc05d5a2df45":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/trans", "query", array("from","to"), array("X-Auth-Token"));
			case "eb850567-3e52-42ef-9637-ca32ce918f59":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/trans/{id}", "read", array(), array("X-Auth-Token"));
			case "66a96927-af56-41af-be2d-76be3fb564c8":
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
		return self::execute("c94d84c1-a98f-4806-85ce-8dc4b554e1ce", new Trans($map));
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
		return self::execute("feff4ef6-98a1-4d27-b7d5-dc05d5a2df45",new Trans($criteria));
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
		return self::execute("eb850567-3e52-42ef-9637-ca32ce918f59",new Trans($map));
	}


	/**
	 * Updates an object of type Trans
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Trans of the response
	 */
	public function update()  {
		return self::execute("66a96927-af56-41af-be2d-76be3fb564c8",$this);
	}






}


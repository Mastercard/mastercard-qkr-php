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
			case "2036ff17-dd61-4f04-b150-61983f062ced":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/trans", "create", array(), array("X-Auth-Token"));
			case "f7014a4c-f503-4b8c-adbf-4962ab14e159":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/trans", "query", array("from","to"), array("X-Auth-Token"));
			case "61f5af71-6033-4ae3-9bd3-823521473a2d":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/trans/{id}", "read", array(), array("X-Auth-Token"));
			case "35b24a2d-0527-41d9-841a-fc1f6cf02dc8":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/trans/{id}", "update", array(), array("X-Auth-Token"));
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative());
	}


   /**
	* Creates object of type Trans
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Trans of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("2036ff17-dd61-4f04-b150-61983f062ced", new Trans($map));
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
		return self::execute("f7014a4c-f503-4b8c-adbf-4962ab14e159",new Trans($criteria));
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
		return self::execute("61f5af71-6033-4ae3-9bd3-823521473a2d",new Trans($map));
	}


	/**
	 * Updates an object of type Trans
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Trans of the response
	 */
	public function update()  {
		return self::execute("35b24a2d-0527-41d9-841a-fc1f6cf02dc8",$this);
	}






}


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
class User extends BaseObject {



	protected static function getOperationConfig($operationUUID) {
		switch ($operationUUID) {
			case "fba7e265-f16e-4237-bc6a-33a0fb1cce1a":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/user", "create", array(), array("X-Auth-Token"));
			case "0b6526b4-02ee-44b1-9f64-fc44b7da9295":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/user", "query", array(), array("X-Auth-Token"));
			case "ba796876-950c-420b-a177-e1d45af81fc8":
				return new OperationConfig("/labs/proxy/qkr2/internal/api2/user", "update", array(), array("X-Auth-Token"));
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext());
	}


   /**
	* Creates object of type User
	*
	* @param Map map, containing the required parameters to create a new object
	* @return User of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("fba7e265-f16e-4237-bc6a-33a0fb1cce1a", new User($map));
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
		return self::execute("0b6526b4-02ee-44b1-9f64-fc44b7da9295",new User($criteria));
	}

	/**
	 * Updates an object of type User
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return User of the response
	 */
	public function update()  {
		return self::execute("ba796876-950c-420b-a177-e1d45af81fc8",$this);
	}






}


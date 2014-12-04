<?php
require_once '../code/API/qqConnectAPI.php';
class MyQC extends QC {
	/**
	 *
	 * @param string $access_token        	
	 * @param string $openid        	
	 */
	public function __construct($access_token = "", $openid = "") {
		parent::__construct ( $access_token, $openid );
	}
	/**
	 */
	public function logout() {
		$rec = $this->recorder;
		$rec->delete ( "access_token" );
		$rec->delete ( "openid" );
	}
	/**
	 *
	 * @param string $token        	
	 */
	public function setAccessToken($token) {
		$this->recorder->write ( "access_token", $token );
	}
}

<?php
require_once "baseProcessor.php";
require_once "../code/response/loginResponse.php";
require_once "../code/myqqconnect.php";
class LoginProcessor extends BaseProcessor {
	/**
	 */
	public function process() {
		parent::process();
		
		try {
			$this->checkParametersExist ( array (
					'token',
					'openid' 
			) );
		} catch ( Exception $e ) {
			$this->showError ( $e->getMessage () );
			exit ();
		}
		
		$token = $_POST ['token'];
		$openid = $_POST ['openid'];
		
		if (! $this->verifyId ( $token, $openid )) {
			$this->showError ( "Wrong" );
			exit ();
		}
		
		// simulate get userinfo
		$userinfo = array (
				'name' => 'Tom' 
		);
		
		$loginResponse = new LoginResponse ();
		$loginResponse->build ( $userinfo );
	}
	
	/**
	 *
	 * @param unknown $id        	
	 */
	public function verifyId($token, $id) {
		$qc = new MyQC ();
		$qc->setAccessToken ( $token );
		$openid = $qc->get_openid ();
		if ($openid == $id) {
			return true;
		}
		return false;
	}
}
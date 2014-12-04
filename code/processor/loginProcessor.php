<?php
require_once "baseProcessor.php";
require_once "../code/response/loginResponse.php";
class LoginProcessor extends BaseProcessor {
	/**
	 */
	public function process() {
		try {
			$this->checkParametersExist ( array (
					'token',
					'userid' 
			) );
			$this->checkData ();
		} catch ( Exception $e ) {
			$this->showError ( $e->getMessage () );
			exit ();
		}
		
		$token = $_POST ['token'];
		$userid = $_POST ['userid'];
		
		$userinfo = array (
				'name' => 'Tom' 
		);
		
		$loginResponse = new LoginResponse ();
		$loginResponse->build ( $userinfo );
	}
}
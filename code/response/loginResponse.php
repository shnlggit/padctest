<?php
require_once 'baseResponse.php';
class LoginResponse extends BaseResponse {
	public function build($userinfo) {
		$this->set ( "Userinfo", $userinfo );
		parent::build ();
	}
}
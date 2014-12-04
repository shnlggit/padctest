<?php
require_once 'baseResponse.php';
class ErrorResponse extends BaseResponse {
	public function build($errorMessage) {
		$this->set ( "Error", $errorMessage );
		parent::build ();
	}
}
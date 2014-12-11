<?php
require_once '../code/response/errorResponse.php';
require_once '../code/processor/processors.php';
/**
 *
 * @param string $requestClass        	
 */
function processRequestClass($requestClass) {
	$className = $requestClass . 'Processor';
	if (class_exists ( $className )) {
		$requestClass = new $className ();
		$requestClass->process ();
	} else {
		$err = new ErrorResponse ();
		$err->build ( "request error!" );
		exit ();
	}
}

if (isset ( $_POST ['requestClass'] )) {
	processRequestClass ( $_POST ['requestClass'] );
} else if (isset ( $_GET ['requestClass'] )) {
	processRequestClass ( $_GET ['requestClass'] );
} else {
	$err = new ErrorResponse ();
	$err->build ( "Request error!" );
	exit ();
}




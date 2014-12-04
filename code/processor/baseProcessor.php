<?php
class BaseProcessor {
	/**
	 */
	public function process() {
	}
	/**
	 *
	 * @param unknown $msg        	
	 */
	protected function showError($msg) {
		$err = new ErrorResponse ();
		$err->build ( $msg );
	}
	/**
	 */
	protected function checkParametersExist($parameters, $method = 'post') {
		$vars = $_POST;
		if (isset ( $method ) && $method == 'get') {
			$vars = $_GET;
		}
		if (isset ( $parameters ) && is_array ( $parameters )) {
			foreach ( $parameters as $param ) {
				if (! isset ( $vars [$param] )) {
					throw new Exception ( "Lost parameter" );
				}
			}
		}
	}
}
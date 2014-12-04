<?php
class BaseResponse {
	protected $arrayData;
	/**
	 */
	function _construct() {
		$arrayData = array ();
	}
	/**
	 *
	 * @param unknown $key        	
	 * @param unknown $value        	
	 */
	public function set($key, $value) {
		$this->arrayData [$key] = $value;
	}
	/**
	 */
	public function build() {
		$jsonStr = json_encode ( $this->arrayData );
		echo $jsonStr;
	}
}
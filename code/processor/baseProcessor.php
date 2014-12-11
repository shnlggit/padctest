<?php
class BaseProcessor {
	private $mem;
	
	/**
	 */
	public function process() {
		$this->initMemCache ();
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
	
	/**
	 */
	protected function initMemCache() {
		$this->mem = null;
		if (class_exists ( 'Memcached' )) {
			$this->mem = new Memcached ();
			$this->mem->addServer ( "127.0.0.1", 11211 );
		}
	}
	
	/**
	 *
	 * @param string $key        	
	 * @return string
	 */
	protected function getFromMem($key) {
		if ($this->mem) {
			return $this->mem->get ( $key );
		} else {
			return null;
		}
	}
	
	/**
	 *
	 * @param string $key        	
	 * @param string $value        	
	 */
	protected function setToMem($key, $value) {
		if ($this->mem) {
			$this->mem->set ( $key, $value );
		}
	}
	
	/**
	 *
	 * @return boolean
	 */
	protected function isMemCacheEnable() {
		return ($this->mem != null);
	}
}
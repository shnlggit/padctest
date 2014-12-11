<?php
require_once "baseProcessor.php";
require_once "../code/response/memcachetestResponse.php";
class MemCacheTestProcessor extends BaseProcessor {
	/**
	 */
	public function process() {
		parent::process ();
		
		$memResponse = new MemCacheTestResponse ();
		
		if ($this->isMemCacheEnable ()) {
			$prevTime = $this->getFromMem ( 'time' ); // or 'not found!';
			$nowTime = time ();
			$this->setToMem ( 'time', $nowTime );
		} else {
			$memResponse->build ( false );
			exit ();
		}
		
		$memResponse->build ( true, $prevTime, $nowTime );
	}
}
<?php
require_once 'baseResponse.php';
class MemCacheTestResponse extends BaseResponse {
	public function build($enable, $prevTime = null, $nowTime = null) {
		if ($enable) {
			$this->set ( 'enable', 1 );
			$this->set ( 'previous_time', $prevTime );
			$this->set ( 'now_time', $nowTime );
		} else {
			$this->set ( 'enable', 0 );
		}
		parent::build ();
	}
}
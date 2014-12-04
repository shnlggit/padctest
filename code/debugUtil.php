<?php
define ( 'DEBUGMODE', false );
class DebugUtil {
	/**
	 */
	function __construct() {
		if (DEBUGMODE) {
			ini_set ( 'display_errors', 1 );
		}
	}
	
	/**
	 *
	 * @return Ambigous <NULL, DebugUtil>
	 */
	public function getInstance() {
		static $instance = null;
		
		if ($instance === null) {
			$instance = new DebugUtil ();
		}
		return $instance;
	}
	
	/**
	 *
	 * @param unknown $msg        	
	 */
	public static function log($msg) {
		if (! DEBUGMODE)
			return;
		
		$traces = debug_backtrace ();
		if (isset ( $traces [0] )) {
			$trace = $traces [0];
			$locate = basename ( $trace ['file'] ) . '(' . $trace ['line'] . ')';
			print $locate . ':';
		}
		
		print_r ( $msg );
		print '<br>';
	}
	
	/**
	 *
	 * @param unknown $msg        	
	 */
	public static function error($msg) {
		if (! DEBUGMODE)
			return;
		
		print ('ERROR:' . $msg . '<br>') ;
		print ('TRACE:<br>') ;
		$traces = debug_backtrace ();
		foreach ( $traces as $trace ) {
			print '&nbsp;&nbsp;' . $trace ['file'] . '(' . $trace ['line'] . ')<br>';
		}
	}
}

?>
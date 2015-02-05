<?php
/* VERIFIED2 */
if(!defined('IN_ID'))die('You are not allowed to access to this page.');

class frame_TRSN extends frame_T {
	protected $tagcode = 'TRSN';
	protected $tagname = 'Internet radio station name';
	protected $deprecated = false;
	protected $instanceNumber = NULL;
	private static $counter = 0;

	function __construct($name, TagValue $value){
		parent::__construct($name,$value);
		$this->instanceNumber = self::$counter++;
	}
};
?>
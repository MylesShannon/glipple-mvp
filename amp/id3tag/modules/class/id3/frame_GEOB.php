<?php
/* VERIFIED2 */
if(!defined('IN_ID'))die('You are not allowed to access to this page.');

class frame_GEOB extends frame_NOTSUPPORTED {
	protected $tagcode = 'GEOB';
	protected $tagname = 'General encapsulated object';
	protected $deprecated = false;
	protected $instanceNumber = NULL;
	private static $counter = 0;

	function __construct($name, TagValue $value){
		parent::__construct($name,$value);
		$this->instanceNumber = self::$counter++;
	}
};
?>
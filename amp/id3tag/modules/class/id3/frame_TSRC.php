<?php
/* VERIFIED2 */
if(!defined('IN_ID'))die('You are not allowed to access to this page.');

class frame_TSRC extends frame_T {
	protected $tagcode = 'TSRC';
	protected $tagname = 'ISRC (international standard recording code)';
	protected $deprecated = false;
	protected $instanceNumber = NULL;
	private static $counter = 0;

	function __construct($name, TagValue $value){
		parent::__construct($name,$value);
		$this->instanceNumber = self::$counter++;
	}

	public function display_data() {
		return '<input type="text" name="'.$this->name.'['.$this->tagcode.']['.$this->instanceNumber.'][data]" value="'.$this->value->data.'" size="12" maxlength="4" style="width:200px" />';
	}
};
?>
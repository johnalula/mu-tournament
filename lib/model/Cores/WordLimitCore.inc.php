<?php

class Wordlimit {	

	static function wordlimiter ($_text, $_limit)
	{
		$_text=strip_tags($_text);
		$_words = str_word_count($_text, 2);
		$_pos=array_keys($_words);
		if(count($_words)>$_limit)
		{
			$_text=substr($_text, 0, $_pos[$_limit]). '...';
		}

		return $_text;
	}
	static function wordTeaxtLimiter ($_text, $_limit)
	{
		$_text=strip_tags($_text);
		$_words = str_word_count($_text, 2);
		$_pos=array_keys($_words);
		if(count($_words)>$_limit)
		{
			$_text=substr($_text, 0, $_pos[$_limit]);
		}

		return $_text;
	}
	static function wordLimiterShort ($_text, $_limit)
	{
		$_text=strip_tags($_text);
		$_words = str_word_count($_text, 2);
		$_pos=array_keys($_words);
		if(count($_words)>$_limit)
		{
			$_text=substr($_text, 0, $_pos[$_limit]);
		}

		return $_text;
	}
	static function makeWordWrap ($_wordWrapContent)
	{
		$_contents = self::clearArrayValue(explode(";", trim($_wordWrapContent))); 
		$_contentDisplay = "\n\n"; 
		$_count = count($_contents); 
		
		foreach ( $_contents as $_key => $_content )	{ 
			if(!empty($_content)) {
				if(($_key+1) < $_count ) {
					$_contentDisplay .= "\n\n".$_content."<br><br>";  
				//$_contentDisplay .= count($_contents);
				} else {
					$_contentDisplay .= "\n\n".$_content."<br>";  
				}
			} 
		} 
			  
		return $_contentDisplay;
	}
	static function clearArrayValue($_arrayValues) 
	{
		$_arrayContents = array();
		foreach ( $_arrayValues as $_key => $_content )	{ 
			if(!empty($_content)) {
				$_arrayContents[] = $_content;   
			} 
		} 
			  
		return $_arrayContents;
	}
}

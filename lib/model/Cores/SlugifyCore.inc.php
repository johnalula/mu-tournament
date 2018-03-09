<?php



class SlugifyCore {

	static function slugify( $_text )
	{		
		if(empty($_text)) return 'n-a';
		$_text = preg_replace('/\W+/', '=', $_text);
		$_text = trim($_text, '-');
		$_text = strtolower($_text);

		return $_text;
	}
}
 

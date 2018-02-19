<?php
class PersonCore {
		
	public static $_PHD = 1; 
	public static $_MD = 2; 
	public static $_PHD_CANDIDATE = 3; 
	public static $_MSC = 4; 
	public static $_MSC_STUDENT = 5; 
	public static $_BSC = 6; 
	public static $_OTHER_EDUCATION	= 7;  
	
	public static $_AUTHOR_EDUCATIONS = array ( 1 => "PhD", 2 => "MD", 3 => "PhD Candidate", 4 => "MSc", 5 => "MSc Student",  6 => "BSc", 7 => "Other");
		
	public static function processAuthorEducations ( ) 
	{
	  try {
				return  self::$_AUTHOR_EDUCATIONS; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processAuthorEducationID ( $_value ) 
	{
		try {
			foreach( self::$_AUTHOR_EDUCATIONS as $_key=> $_role ){
				if( strcmp($_role, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	
	public static function processAuthorEducationValue ( $_id )
	{
		try {
				foreach( self::$_AUTHOR_EDUCATIONS as $_key=> $_role ) {
					if( $_key == $_id )
						return $_role; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	} 
	public static function processAuthorEducationIcon ($_edu)
	{
		switch($_edu) {			
			case self::$_PHD:
				return 'owner';
			break;	
			case self::$_MD:
				return 'family_member';
			break;
			case self::$_PHD_CANDIDATE:
				return 'employee';
			break; 
			case self::$_MSC:
				return 'instructor';
			break;
			case self::$_MSC_STUDENT:
				return 'student';
			break; 
			case self::$_BSC:
				return 'parent';
			break; 
			case self::$_OTHER_EDUCATION:
				return 'other_person_role';
			break;
		}
	} 
	
	public static $_PROFESSOR = 1; 
	public static $_ASSOCIATE_PROFESSOR = 2; 
	public static $_ASSISTANT_PROFESSOR = 3; 
	public static $_INSTRUCTOR = 4; 
	public static $_OTHER_POSITION = 5; 
	
	public static $_AUTHOR_POSITIONS = array ( 1 => "Professor", 2 => "Associate Professor", 3 => "Assistance Professor", 4 => "Instructor", 5 => "Other");
		
	public static function processAuthorPositions ( ) 
	{
	  try {
				return  self::$_AUTHOR_POSITIONS; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processAuthorPositionID ( $_value ) 
	{
		try {
			foreach( self::$_AUTHOR_POSITIONS as $_key=> $_role ){
				if( strcmp($_role, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	
	public static function processAuthorPositionValue ( $_id )
	{
		try {
				foreach( self::$_AUTHOR_POSITIONS as $_key=> $_role ) {
					if( $_key == $_id )
						return $_role; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	} 
	public static function processAuthorPositionIcon ($_position)
	{
		switch($_position) {			
			case self::$_PHD:
				return 'owner';
			break;	
			case self::$_MD:
				return 'family_member';
			break;
			case self::$_PHD_CANDIDATE:
				return 'employee';
			break; 
			case self::$_MSC:
				return 'instructor';
			break;
			case self::$_MSC_STUDENT:
				return 'student';
			break; 
			case self::$_BSC:
				return 'parent';
			break; 
			case self::$_OTHER_EDUCATION:
				return 'other_person_role';
			break;
		}
	} 
	
}

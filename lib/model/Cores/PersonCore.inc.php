<?php
class PersonCore {
		
	public static $_OWNER = 1; 
	public static $_FAMILY_MEMBER = 2; 
	public static $_EMPLOYEE = 3; 
	public static $_INSTRUCTOR = 4; 
	public static $_STUDENT = 5; 
	public static $_PARENT = 6; 
	public static $_CONTACT_PERSON	= 7;  
	public static $_OTHER_PERSON_ROLE = 8;  
	
	public static $_PERSON_ROLES = array ( 1 => "owner", 2 => "Family Member", 3 => "Employee" , 4 => "Instructor" , 5 => "Student",  6 => "Parent", 7 => "Contact Person", 8 => "Other Person Role");
		
	public static function processPersonRoles ( ) 
	{
	  try {
				return  self::$_PERSON_ROLES; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processPersonRoleID ( $_value ) 
	{
		try {
			foreach( self::$_PERSON_ROLES as $_key=> $_role ){
				if( strcmp($_role, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	
	public static function processPersonRoleValue ( $_id )
	{
		try {
				foreach( self::$_PERSON_ROLES as $_key=> $_role ) {
					if( $_key == $_id )
						return $_role; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultPersonRole ()
	{
		try {
				return  self::$_EMPLOYEE; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	public static function processPersonRoleIcon ($_role)
	{
		switch($_role) {			
			case self::$_OWNER:
				return 'owner';
			break;	
			case self::$_FAMILY_MEMBER:
				return 'family_member';
			break;
			case self::$_EMPLOYEE:
				return 'employee';
			break; 
			case self::$_INSTRUCTOR:
				return 'instructor';
			break;
			case self::$_STUDENT:
				return 'student';
			break; 
			case self::$_PARENT:
				return 'parent';
			break; 
			case self::$_CONTACT_PERSON:
				return 'contact_person';
			break; 
			case self::$_OTHER_PERSON_ROLE:
				return 'other_person_role';
			break;
		}
	} 
	
	public static $_MALE = 1; 
	public static $_FEMAL = 2; 

	public static $_MEN = 1; 
	public static $_WOMEN = 2; 
	
	public static $_ALL_GENDERS = array ( 1 => "Male", 2 => "Femal" );
	public static $_GENDERS = array ( 1 => "MEN", 2 => "Women" );
	
	public static function processGenders ( ) 
	{
	  try {
				return  self::$_ALL_GENDERS; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processGenderID ( $_value ) 
	{
		try {
			foreach( self::$_ALL_GENDERS as $_key=> $_sex ) {
				if( strcmp($_sex, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	
	public static function processGenderValue ( $_id )
	{
		try {
				foreach( self::$_ALL_GENDERS as $_key=> $_sex ) {
					if( $_key == $_id )
						return $_sex; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultGender ()
	{
		try {
				return  self::$_MALE; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	public static function processGenderAlias ($_gender)
	{
		switch($_gender) {			
			case self::$_MALE:
				return 'M';
			break;	
			case self::$_FEMAL:
				return 'F';
			break; 
		}
	} 
	public static function processGenderTypeAlias ($_gender)
	{
		switch($_gender) {			
			case self::$_MALE:
				return 'M';
			break;	
			case self::$_FEMAL:
				return 'W';
			break; 
		}
	} 
	
	public static $_ADMINISTRATOR = 1;
	public static $_GENERAL_MANAGER = 2;
   public static $_FINANCE_OFFICER = 3;
   public static $_SUPERVISOR = 4;
   public static $_SALES_PERSON = 5;
   public static $_PURCHASER = 6;
   public static $_OPERATOR = 7;
   public static $_CASHIER = 8;
   public static $_FRONT_DESK = 9; 
   public static $_OTHER = 10;
   
   public static $_PERSON_POSITIONS = array ( 1 => "Administrator", 2 => "General Manager", 3 => "Finance Officer" , 4 => "Supervisor", 5 => "Sales Person", 6 => "Purchaser", 7 => "Operator", 8 => "Cashier", 9 => "Front Desk", 10 => "Other" );
   
   public static function processPersonPositions ( ) {
	  try {
				return  self::$_PERSON_POSITIONS; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	
   public static function processPersonPositionID ( $_value ) 
	{
		try {
				foreach( self::$_PERSON_POSITIONS as $_key=> $_role ){
					if( strcmp($_role, $_value) == 0 )
					  return $_key; 
			}			
			 return true; 
	  } catch ( Exception $e ) {
			return false; 
	  }
	}
	
	public static function processPersonPositionValue  ( $_id )
	{
		try{
				foreach( self::$_PERSON_POSITIONS as $_key=> $_role ){
				  if( $_key == $_id )
						return $_role; 
			}
			 return true; 
	  } catch ( Exception $e ) {
			 return false; 
		}
	}
	public static function processDefaultPersonPosition () 
	{
		try {
				return  self::$_OPERATOR; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	
	public static $ACTIVE =  1; 
	public static $BLOCKED =  2; 	
	public static $TERMINATED = 3;  
	public static $OTHER_STATUS = 4;  

	public static $ALL_STATUSES = array ( 1 => "Active", 2 => "Blocked" , 3 => "Terminated" , 4 => "Other Status");
	
	public static function processPartytatus() 
	{
		return self::$ALL_STATUSES;
	}
	
	public static function processPartyStatusID ( $value ) 
	{
		try {
				foreach( self::$ALL_STATUSES as $key=> $status ){
					if( strcmp($status, $value) == 0 )
					  return $key; 
			}
		
			 return $OTHER; 
	  } catch ( Exception $e ) {
			return $OTHER; 
	  }
	}

	public static function processPartyStatusValue ( $id )
	{
		try{
				foreach( self::$ALL_STATUSES as $key=> $status ){
				  if( $key == $id )
						return $status; 
			}
			 return $ACTIVE; 
	  } catch ( Exception $e ) {
			 return $ACTIVE; 
	  }
	}
	
	public static $_PUBLIC_ID =  1; 
	public static $_PASSPORT =  2; 	
	public static $_DRIVING_LICENSE = 3;  
	public static $_sTAFF_ID = 4;  
	public static $_OTHER_ID = 4;  

	public static $_IDENTIFICATION_TYPES = array ( 1 => "Public ID", 2 => "Passport" , 3 => "Driving License", 4 => "Staff ID", 5 => "Other ID");
	
	public static function processIdentificationTypes () 
	{
		return self::$_IDENTIFICATION_TYPES;
	}
	
	public static function processIdentificationTypeID ( $_value ) 
	{
		try {
				foreach( self::$_IDENTIFICATION_TYPES as $_key=> $_status ){
					if( strcmp($_status, $_value) == 0 )
					  return $_key; 
			}
		
			 return $_PUBLIC_ID; 
	  } catch ( Exception $e ) {
			return $_PUBLIC_ID; 
	  }
	}

	public static function processIdentificationTypeValue ( $_id )
	{
		try{
				foreach( self::$_IDENTIFICATION_TYPES as $_key=> $_status ){
				  if( $_key == $_id )
						return $_status; 
			}
			 return $_PUBLIC_ID; 
	  } catch ( Exception $e ) {
			 return $_PUBLIC_ID; 
	  }
	}
	public static function processDefaultIdentificationType () 
	{
		try {
				return  self::$_PUBLIC_ID; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	
}

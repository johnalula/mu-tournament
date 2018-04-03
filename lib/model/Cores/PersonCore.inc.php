<?php
class PersonCore {
		
	public static $_EMPLOYEE = 1; 
	public static $_CONTESTANT = 2; 
	public static $_COACH = 3; 
	public static $_TEAM_MEMBER = 4; 
	public static $_TEAM_LEADER = 5; 
	public static $_REPRESENTATIVE = 6; 
	public static $_REFEREE = 7; 
	public static $_OTHER_PERSON_ROLE = 8;  
	
	public static $_PERSON_ROLES = array ( 1 => "Employee", 2 => "Contestant/Player", 3 => "Coach" , 4 => "Team Member" , 5 => "Team Leader", 6 => "Representative", 7 => "Referee", 8 => "Other Role");
		
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
				return  self::$_PLAYER; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	public static function processPersonRoleIcon ($_role)
	{
		switch($_role) {			
			case self::$_EMPLOYEE:
				return 'employee';
			break;	
			case self::$_CONTESTANT:
				return 'contestant';
			break;
			case self::$_COACH:
				return 'coach';
			break; 
			case self::$_TEAM_MEMBER:
				return 'team_member';
			break;
			case self::$_TEAM_LEADER:
				return 'team_leader';
			break;
			case self::$_REPRESENTATIVE:
				return 'representative';
			break;
			case self::$_REFEREE:
				return 'referee';
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
	
	public static $_ACTIVE =  1; 
	public static $_BLOCKED =  2; 	
	public static $_TERMINATED = 3;  
	public static $_OTHER_STATUS = 4;  

	public static $_ALL_STATUSES = array ( 1 => "Active", 2 => "Blocked" , 3 => "Terminated" , 4 => "Other Status");
	
	public static function processPartytatus() 
	{
		return self::$_ALL_STATUSES;
	}
	
	public static function processPartyStatusID ( $_value ) 
	{
		try {
				foreach( self::$_ALL_STATUSES as $_key=> $_status ){
					if( strcmp($_status, $_value) == 0 )
					  return $_key; 
			}
		
			 return $_OTHER_STATUS; 
	  } catch ( Exception $_e ) {
			return $_OTHER_STATUS; 
	  }
	}

	public static function processPartyStatusValue ( $_id )
	{
		try{
				foreach( self::$_ALL_STATUSES as $_key=> $_status ){
				  if( $_key == $_id )
						return $_status; 
			}
			 return $_ACTIVE; 
	  } catch ( Exception $_e ) {
			 return $_ACTIVE; 
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

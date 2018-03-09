<?php
class ParticipantCore {
	
    public static $_MANAGER = 1; 
	public static $_EMPLOYEE = 2;
	public static $_COMMITTE_LEADER = 3;
	public static $_APPROVAL = 4;
	public static $_AUTHORIZE = 5; 
	public static $_CUSTOMER = 6;
	public static $_COMPANY_OWNER = 7; 
	public static $_COORDINATOR = 8;
	public static $_WITNES = 9;
	public static $_DATA_INCODER = 10;
	public static $_VENDOR = 11;
	public static $_SUPPLIER = 12;
	public static $_OTHER_ROLE = 13;
	
	public static $_PARTICIPANT_ROLES = array( 1 => "Manager", 2 => "Employee", 3 => "Committee Leader", 4 => "Approval", 5 => "Authorize", 6 => "Customer", 7 => "Company Owner", 8 => "Cordinator", 9 => "Witnes", 10 => "Data Incoder", 11 => "Vendor", 12 => "Supplier", 13 => "Other Role");
		
	public static function processParticipantRoles ( ) 
	{
	  try {
				return  self::$_PARTICIPANT_ROLES; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processParticipantRoleID ( $_value ) 
	{
		try {
			foreach( self::$_PARTICIPANT_ROLES as $_key=> $_type ) {
				if( strcmp($_type, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	public static function processParticipantRoleValue ( $_id ) 
	{
		try {
				foreach( self::$_PARTICIPANT_ROLES as $_key => $_type ) {
					if( $_key == $_id )
						return $_type; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultParticipantRole ()
	{
		try {
				return  self::$_DATA_INCODER; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	public static function processParticipantRoleIcon ($_type)
	{
		switch($_type) {			
			case self::$_PARENT:
				return 'parent';
			break;
			case self::$_GUARDIAN:
				return 'guardian';
			break; 
			case self::$_SIBLING:
				return 'sibling';
			break; 
			case self::$_RELATIVE:
				return 'relative';
			break; 
			case self::$_OTHER_RELATION:
				return 'other_relationship';
			break; 
		}
	} 
}



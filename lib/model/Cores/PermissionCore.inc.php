<?php

class PermissionCore {
    	public static $_VIEW = 1; 
    	public static $_ADD = 2;  
    	public static $_EDIT = 3;  
    	public static $_ADD_AND_EDIT = 4;  
    	public static $_APPROVE = 5;  
    	public static $_FULL_ACCESS = 6;   
    	public static $_NO_ACCESS = 7;  
		public static $_ACCESS_LEVELS = array ( 1 => "View Only", 2 => "Add", 3 => "Edit", 4 => "Add and Edit", 5 => "Approve", 6 => "Full Access", 7 => "No Access");
		
	public static function processAccessLevels ( ) 
	{
	  try {
				return  self::$_ACCESS_LEVELS; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processAccessLevelID ( $_value ) 
	{
		try {
			foreach( self::$_ACCESS_LEVELS as $_key=> $_level ) {
				if( strcmp($_level, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	
	public static function processAccessLevelValue ( $_id ) 
	{
		try {
				foreach( self::$_ACCESS_LEVELS as $_key => $_level ) {
					if( $_key == $_id )
						return $_level; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultAccessLevel ()
	{
		try {
				return  self::$_VIEW; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	 
	public static function processAccessLevelIcon ($_level) 
	{
		switch($_level) {			
			case self::$_VIEW:
				return 'view_access';
			break;
			case self::$_ADD:
				return 'add_access';
			break; 
			case self::$_EDIT:
				return 'edit_access';
			break; 
			case self::$_ADD_AND_EDIT:
				return 'add_and_edit';
			break; 
			case self::$_APPROVE:
				return 'approve_access';
			break;  
			case self::$_FULL_ACCESS:
				return 'full_access';
			break;  
			case self::$_NO_ACCESS:
				return 'no_access';
			break; 
		}
	} 
	public static function makeDefaultAccessLevel ($_moduleID, $_userRole)
	{ 
		switch($_moduleID) {			 
			case ModuleCore::$_DASHBOARD:
				return self::$_FULL_ACCESS; 
			break;
			case ModuleCore::$_REGISTRATION: 
			case ModuleCore::$_ADMISSION: 
			case ModuleCore::$_ENROLLMENT: 
			case ModuleCore::$_EXAMINATION: 
			case ModuleCore::$_TRANSAFER: 
			case ModuleCore::$_LEAVE: 
			case ModuleCore::$_BILLING: 
			case ModuleCore::$_STUDENT:
			case ModuleCore::$_INSTRUCTOR:
			case ModuleCore::$_ASSESSMENT_MANAGEMENT:
			case ModuleCore::$_ATTENDANCE_MANAGEMENT:
			case ModuleCore::$_COURSE_MANAGEMENT:
				if($_userRole == UserCore::$_SUPER_ADMINISTRATOR || $_userRole == UserCore::$_ADMINISTRATOR) {
					return self::$_FULL_ACCESS; 
				}
				return ModuleCore::processDefaultModuleAccessLevel ($_moduleID);
			break; 
			case ModuleCore::$_SCHOOL_SETTING:
			case ModuleCore::$_ORGANIZATION:
			case ModuleCore::$_GENERAL_SETTING:
			case ModuleCore::$_SYSTEM_SETTING:
			case ModuleCore::$_ADMINISTRATION:
				if($_userRole == UserCore::$_SUPER_ADMINISTRATOR || $_userRole == UserCore::$_ADMINISTRATOR) {
					return self::$_FULL_ACCESS; 
				}
				return self::$_NO_ACCESS; 
			break;
			case ModuleCore::$_REPORT:
				return ModuleCore::processDefaultModuleAccessLevel ($_moduleID); 
			break; 
			default:
				return ModuleCore::processDefaultModuleAccessLevel ($_moduleID); 
			break;
		}	
	}
}





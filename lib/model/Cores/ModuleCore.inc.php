<?php 
class ModuleCore {
 	
	public static $_DASHBOARD = 1;
	public static $_TOURNAMENT = 2;
	public static $_GAME = 3;
	public static $_GROUP = 4;
	public static $_TEAM = 5;  
	public static $_ORGANIZATION = 6; 
	public static $_GENERAL_SETTING = 7;
	public static $_SYSTEM_SETTING = 8;
	public static $_ADMINISTRATION = 9; 
	public static $_REPORT = 10;
	
	public static $_MODULES = array (1 => "Dashboard",  2 => "Tournament", 3 => "Game", 4 => "Group", 5 => "Team", 6 => "Organization", 7 => "General Setting", 8 => "System Setting", 9 => "Administration", 10 => "Report" );
	
	public static function processModules ( ) 
	{
	  try {
				return  self::$_MODULES; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	
	public static function processModuleID ( $_value )
	{
		try {
			foreach( self::$_MODULES as $_key=> $_module ) {
				if( strcmp($_module, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $e ) {
			return null; 
		}        
	}
	
	public static function processModuleValue ( $_id )
	{
		try {
			foreach( self::$_MODULES as $_key=> $_module ){
				if( $_key == $_id )
					return $_module; 
		}
			return null; 
		} catch ( Exception $e ) {
			return null; 
		}    
	}
	 
	public static function processDefaultModule ()
	{
		try {
				return  self::$_DASHBOARD; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	public static function processModuleDefaultStatus ($_isDefault) 
	{
		if($_isDefault){		 
				return 'Default'; 
		}  
	}
	public static function processModuleAccessibleStatusIcon ($_status) 
	{
		if($_status){		 
				return 'active_module'; 
		} else {
				return 'disabled_module';
		}
	}
	public static function processModuleAccessibleStatus ($_status) 
	{
		if($_status){		 
				return 'Active'; 
		} else {
				return 'Inactive';
		}
	}
	public static function processModuleApplicableStatus ($_status) 
	{
		if($_status){		 
				return 'Enabled'; 
		} else {
				return 'Disabled';
		}
	}
	public static function processModuleApplicableStatusIcon ($_status) 
	{
		if($_status){		 
				return 'apply'; 
		} else {
				return 'disabled';
		}
	}
	public static function processModuleDefaultIcon ($_icon) 
	{
		if($_icon){		 
				return 'default'; 
		} else {
				return 'inactive_default';
		}
	}
	public static function processModuleIcon ($_module) 
	{ 
		switch($_module) {			
			case self::$_DASHBOARD:
				return 'dashboard';
			break;
			case self::$_TOURNAMENT:
				return 'tournament';
			break;
			case self::$_GAME:
				return 'game';
			break; 
			case self::$_GROUP:
				return 'group';
			break;
			case self::$_TEAM:
				return 'team';
			break;
			case self::$_ORGANIZATION:
				return 'organization';
			break;
			case self::$_GENERAL_SETTING:
				return 'general_setting';
			break;
			case self::$_SYSTEM_SETTING:
				return 'system_setting';
			break; 
			case self::$_ADMINISTRATION:
				return 'administration';
			break;
			case self::$_REPORT:
				return 'report';
			break; 
		}
	} 

}

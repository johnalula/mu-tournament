<?php 
class ModuleCore {
 	
	public static $_DASHBOARD = 1;
	public static $_TOURNAMENT = 2;
	public static $_GAME = 3;
	public static $_GROUP = 4;
	public static $_TEAM = 5;  
	public static $_PLAYER = 6;  
	public static $_MATCH = 7;  
	public static $_ORGANIZATION = 8; 
	public static $_GENERAL_SETTING = 9;
	public static $_SYSTEM_SETTING = 10;
	public static $_ADMINISTRATOR = 11; 
	public static $_REPORT = 12;
	
	public static $_MODULES = array (1 => "Dashboard",  2 => "Tournament", 3 => "Game", 4 => "Group", 5 => "Team", 6 => "Player", 7 => "Match", 8 => "Organization", 9 => "General Setting", 10 => "System Setting", 11 => "Administrator", 12 => "Report" );
	
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
			case self::$_PLAYER:
				return 'player';
			break;
			case self::$_MATCH:
				return 'match';
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
	
	
	public static function makeModuleActionURL($_modleName, $_action, $_object)
	{
		if(is_null($_modleName) || is_null($_action) || is_null($_object)) {
			return false;
		} 
		return ($_modleName.'/'.$_action.'?match_id='.$_object->id.'&token_id='.$_object->token_id);
	}
	public static function makeModuleOrderActionURL ($_modleName, $_action, $_object)
	{
		if(is_null($_modleName) || is_null($_action) || is_null($_object)) {
			return false;
		} 
		return ($_modleName.'/'.$_action.'?match_id='.$_object->taskID.'&token_id='.$_object->taskTokenID);
	}
	public static function makeModuleURLAction($_modleName, $_IDName, $_action, $_object)
	{
		if(is_null($_modleName) || is_null($_action) || is_null($_object)) {
			return false;
		} 
		return ($_modleName.'/'.$_action.'?'.$_IDName.'='.$_object->id.'&token_id='.$_object->token_id);
	}
	public static function makeModuleURL($_modleName, $_action)
	{
		if(is_null($_modleName) || is_null($_action)) {
			return false;
		} 
		return ($_modleName.'/'.$_action);
	}
	public static function makeBackwardNavigation($_action)
	{
		switch($_action) {			
			case 'view':
				return 'index';
			break;
			case 'edit':
				return 'index';
			break;
			case 'order':
				return 'view';
			break; 
			case 'itemization':
				return 'order';
			break;
			case 'complete':
				return 'itemization';
			break;
		}
	}
	public static function makeForwardNavigation($_action)
	{
		switch($_action) {			
			case 'view':
				return 'order';
			break;
			case 'edit':
				return 'order';
			break;
			case 'order':
				return 'itemization';
			break;  
		}
	}
	public static function makeBackwardNavigationURL($_modleName, $_action, $_object)
	{
		if(is_null($_modleName) || is_null($_action) || is_null($_object)) {
			return false;
		} 
		$_navAction = self::makeBackwardNavigation($_action);
		if($_navAction == 'index') {
			return ($_modleName.'/'.$_navAction);
		}
		return ($_modleName.'/'.$_navAction.'?match_id='.$_object->id.'&token_id='.$_object->token_id);
	}
	public static function makeForwardNavigationURL($_modleName, $_action, $_object)
	{
		if(is_null($_modleName) || is_null($_action) || is_null($_object)) {
			return false;
		} 
		$_navAction = self::makeForwardNavigation($_action);
		return ($_modleName.'/'.$_navAction.'?match_id='.$_object->id.'&token_id='.$_object->token_id);
	}
	
	public static function makeSettingActionURL($_modleName, $_action, $_object, $_moduleAction)
	{
		if(is_null($_modleName) || is_null($_action) || is_null($_object)) {
			return false;
		} 
		$_action = $_action.'_'.$_moduleAction;
		$_urlID = $_moduleAction.'_id';
		
		return ($_modleName.'/'.$_action.'?'.$_urlID.'='.$_object->id.'&token_id='.$_object->token_id);
	}

}

<?php 
class SystemCore {
	
	public static $_DASHBOARD = 1;
	public static $_TOURNAMENT = 2;
	public static $_SPORT_GAME = 3;
	public static $_GROUP = 4;
	public static $_TEAM = 5;  
	public static $_CONTESTANT = 6;  
	public static $_TOURNAMENT_MATCH = 7;  
	public static $_TEAM_GROUP = 8;  
	public static $_MEDAL_AWARD = 9;  
	public static $_ORGANIZATION = 10; 
	public static $_GENERAL_SETTING = 11;
	public static $_SYSTEM_SETTING = 12;
	public static $_ADMINISTRATOR = 13; 
	public static $_REPORT = 14;
	
	public static $_CODE_TYPES = array (1 => "Dashboard",  2 => "Tournament", 3 => "Sport Game", 4 => "Group", 5 => "Team", 6 => "Contestant", 7 => "Tournament Match", 8 => "Team Group", 9 => "Medal Award", 10 => "Organization", 11 => "General Setting", 12 => "System Setting", 13 => "Administrator", 14 => "Report" );
	
	public static function processSystemCodeTypeID ( $_id ) 
	{ 
		return  ($_id < 1000 ? ($_id < 100 ? ($_id < 10 ? '000':'00'):'0'):'').$_id; 
	}
		
	public static function processCodeTypes () 
	{
		return self::$_CODE_TYPES;
	}
	public static function processCodeTypeID ( $_value ) 
	{
	  try {
			foreach( self::$_CODE_TYPES as $_key => $_type ){
			  if( strcmp($_type, $_value) == 0 )
					return $_key; 
			}
			return null; 	
		} catch ( Exception $e ) {
			return null; 
		}        
	}
	public static function processCodeTypeValue ( $_id )
	{
		try {
			foreach( self::$_CODE_TYPES as $_key=> $_type ){
			  if( $_key == $_id )
					return $_type; 
			}
			return null; 
		} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultCodeType ( )
	{
		try {
				return self::$_TOURNAMENT; 
			} catch ( Exception $e ) {
			return $e; 
		}   
	}
	public static function processCodeTypeAlias ($_codeType) 
	{ 
		switch($_codeType) {			
			case self::$_DASHBOARD:
				return 'dashboard';
			break;
			case self::$_TOURNAMENT:
				return 'tournament';
			break;
			case self::$_SPORT_GAME:
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
			case self::$_TEAM_GROUP:
				return 'team_group';
			break;
			case self::$_MEDAL_AWARD:
				return 'medal_award';
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
			case self::$_ADMINISTRATOR:
				return 'administrator';
			break;
			case self::$_REPORT:
				return 'report';
			break; 
		}
	}
	public static function processCodeTypeIcon ($_codeType) 
	{ 
		switch($_codeType) {			
			case self::$_DASHBOARD:
				return 'dashboard';
			break;
			case self::$_TOURNAMENT:
				return 'tournament';
			break;
			case self::$_SPORT_GAME:
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
			case self::$_TEAM_GROUP:
				return 'team_group';
			break;
			case self::$_MEDAL_AWARD:
				return 'medal_award';
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
			case self::$_ADMINISTRATOR:
				return 'administrator';
			break;
			case self::$_REPORT:
				return 'report';
			break; 
		}
	}
	
	public static $_ACTIVATE = 1;
	public static $_BLOCK = 2; 
	public static $_DELETED = 3; 
	public static $_DISABLE = 4; 
	public static $_COMPLETE_DELETE = 5; 
	public static $_RESTORE = 6; 
	public static $_GENERATE_PDF = 7; 

	public static $_ALL_BATCH_ACTIONS = array (1 => 'Activate', 2 => 'Block', 3 => 'Delete', 4 => 'Disable', 5 => 'Complete Delete', 6 => 'Restore');
	public static $_TRAHSED_BATCH_ACTIONS = array (5 => 'Delete', 6 => 'Restore');
	public static $_BATCH_ACTIONS = array (1 => 'Activate', 2 => 'Block', 3 => 'Delete', 4 => 'Disable');

	public static function processAllBatchActions ()
	{
	  try {
				return  self::$_ALL_BATCH_ACTIONS; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function ProcessBatchActionTypes ()
	{
	   try {
				return  self::$_BATCH_ACTIONS; 
			} catch ( Exception $e ) {
			return null; 
		}
	}
	public static function ProcessBatchActions ($_action)
	{
	   if($_action == 'trashed') {			
			return self::$_TRAHSED_BATCH_ACTIONS;
		} else {
			return self::$_BATCH_ACTIONS;
		}
	}
	
	public static function processBatchActionID ( $_value ) 
	{
		try {
			foreach( self::$_ALL_BATCH_ACTIONS as $_key=> $_action ) {
				if( strcmp($_action, $_value) == 0 ) {
					return $_key; 
				}
			}
			return null; 
		} catch ( Exception $_e ) {
			return null; 
		}
	}

	public static function processBatchActionValue ($_id )
	{
		try {
			foreach( self::$_ALL_BATCH_ACTIONS as $_key=> $_action ) {
			  if( $_key == $_id ) {
					return $_action;
				} 
			}
			return null;       
		} catch ( Exception $_e ) {
			return null; 
		}
	}
	public static function processDefaultBatchAction ()
	{
		try {
				return  self::$_ACTIVATE; 
			} catch ( Exception $_e ) {
			return null; 
	  }     
	}
	
	public static function processBatchActionIcon ($_action) 
	{
		switch($_action) {			
			case self::$_ACTIVATE:
				return 'approve';
			break;
			case self::$_BLOCK:
				return 'reject';
			break;
			case self::$_DELETED:
				return 'delete';
			break;
			case self::$_DISABLE:
				return 'delete';
			break;
			case self::$_RESTORE:
				return 'restore';
			break; 
			case self::$_GENERATE_PDF:
				return 'generate_pdf';
			break; 
		}
	} 	
	
	
	public static $_CREATE = 1;
	public static $_UPDATE = 2;
	public static $_READ = 3;
	public static $_DELETE = 4;
	public static $_LOGIN = 5;
	public static $_LOGOUT = 6;
	public static $_APPROVE = 7;
	public static $_PAY = 8;

	public static $_ACTIONS = array (1 => 'CREATE', 2 => 'UPDATE', 3 => 'READ', 4 => 'DELETE', 5 => 'LOGIN', 6 => 'LOGOUT', 7 => 'APPROVE', 8 => 'PAY');

	public static function processAllLogActions ( ) 
	{
		try {
			 return $_ACTIONS;
		} catch ( Exception $e ) {
		return null; 
		}
	}
	public static function processLogActionID ( $value ) 
	{
		try {
			foreach( self::$_ACTIONS as $key=> $action ){
			  if( strcmp($action, $value) == 0 )
					return $key; 
		}
		return null;  
		} catch ( Exception $e ) {
		return null; 
		}
	}

	public static function processLogActionValue ($_id )
	{
		try {
			foreach( self::$_ACTIONS as $key=> $action ) {
				if( $key == $_id )
					return $action; 
		}
		return null;       
		} catch ( Exception $e ) {
		return null; 
		}
	}
	public static function processDefaultLogAction () 
	{
		try {
				return  self::$READ; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	} 
	public static function processLogActionIcon ($action) 
	{
		switch($action) {			
			case self::$_CREATE:
				return 'create';
			break;
			case self::$_UPDATE:
				return 'update';
			break; 
			case self::$_READ:
				return 'read';
			break; 
			case self::$_DELETE:
				return 'delete';
			break; 
			case self::$_LOGIN:
				return 'login';
			break; 
			case self::$_LOGOUT:
				return 'logout';
			break; 
			case self::$_APPROVE:
				return 'approve';
			break; 
			case self::$_PAY:
				return 'pay';
			break; 
		}
	} 
	public static function processSystemActionValue ($_userName, $_actionID, $_actionData, $_actionObject, $_pcIPAddress)
	{ 
		return ucfirst('User: '.$_userName.', Action: '.strtoupper(self::processLogActionIcon ($_actionID)).', Data: '.$_actionData.', Object: '.$_actionObject.', IP: '.long2ip($_pcIPAddress));
	}
	public static function processSystemActionDataValue ( $_actionID, $_actionObject )
	{
		switch($_actionID) {			
			case self::$_LOGIN:
				return ucfirst(self::processLogActionIcon ($_actionID ).' to the system');
			break;
			case self::$_LOGOUT:
				return ucfirst(self::processLogActionIcon ($_actionID ).' from the system');
			break;
			case self::$_CREATE:
				return ucfirst(' New '.$_actionObject);
			break;
			case self::$_UPDATE:
				return ucfirst('Update '.$_actionObject);
			break;
			case self::$_DELETE:
				return ucfirst('Delete '.$_actionObject);
			break;
			case self::$_APPROVE:
				return ucfirst('Approve '.$_actionObject);
			break;
		}  
	} 
	public static function processTournamentSeason ()
	{
		$_season = array();
		for( $_i=2005;$_i<2030; $_i++){
				$_season[] = $_i;
			}
			 
		return $_season;  
	}
	
	/*********************************************/
	
	public static $_SINGLE_DATA = 1;
	public static $_MULTIPLE_DATA = 2;

	public static $_DATA_CREATION_MODES = array ( 1 => 'Single Data', 2 => 'Multiple Data');
	
	public static function processDataCreationModes ( ) 
	{
		 try {
				return self::$_DATA_CREATION_MODES; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	
	public static function processDataCreationModeID ( $_value ) 
	{
		try {
			foreach( self::$_DATA_CREATION_MODES as $_key => $_mode ){
				if( strcmp($_mode, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $_e ) {
			return null; 
		}
	}

	public static function processDataCreationModeValue ($_id )
	{
		try {
			foreach( self::$_DATA_CREATION_MODES as $_key => $_mode ){
			  if( $_key == $_id )
					return $_mode; 
			}
			return null;       
		} catch ( Exception $_e ) {
			return null; 
		}
	}
	public static function processDefaultDataCreationMode ( )
	{
		 try {
				return self::$_DATA_CREATION_MODES; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	public static function processDataCreationModeIcon ($_mode) 
	{
		switch($_mode) {			
			case self::$_SINGLE_DATA:
				return 'single_data';
			break; 
			case self::$_MULTIPLE_DATA:
				return 'multiple_data';
			break; 
		}
	}
	
	public static $_COUNTRIES = array ( 
	1 => "Algeria", 2 => "Angola", 3 => "Benin ", 4 => "Botswana", 5 => "Burkina Faso", 6 => "Burundi", 7 => "Cameroon", 8 => "Cape Verde", 9 => "Central African Republic", 10 => "Chad", 11 => "Comoros ", 12 => "Republic of the Congo-Brazzaville  ", 13 => "Democratic Republic of the Congo-Kinshasa ", 14 => "Côte d'Ivoire", 15 => "Djibouti", 16 => "Egypt", 17 => "Equatorial Guinea", 18 => "Eritrea", 19 => "Ethiopia ", 20 => "Gabon", 21 => "Gambia", 22 => "Ghana", 23 => "Guinea", 24 => "Guinea-Bissau", 25 => "Kenya", 26 => "Lesotho", 27 => "Liberia", 28 => "Libya", 29 => "Madagascar", 30 => "Malawi", 31 => "Mali", 32 => "Mauritania", 33 => "Mauritius", 34 => "Mayotte", 35 => "Morocco", 36 => "Mozambique", 37 => "Namibia", 38 => "Niger", 39 => "Nigeria", 40 => "Réunion", 41 => "Rwanda", 42 => "Saint Helena", 43 => "São Tomé and Príncipe", 44 => "Senegal", 45 => "Seychelles", 46 => "Sierra Leone", 47 => "Somalia", 48 => "South Africa", 49 => "South Sudan", 50 => "Sudan", 51 => "Swaziland", 52 => "Tanzania", 53 => "Togo", 54 => "Tunisia", 55 => "Uganda", 56 => "Democratic Republic Western Sahara", 57 => "Zambia", 58 => "Zimbabwe"	);
	
	public static $_COUNTRY_ALIAS = array ( 
	1 => "DZA", 2 => "AGO", 3 => "BEN ", 4 => "BWA", 5 => "BFA", 6 => "BDI", 7 => "CMR", 8 => "CPV", 9 => "CAF", 10 => "TCD", 11 => "COM ", 12 => "COG", 13 => "COD", 14 => "CIV", 15 => "DJI", 16 => "EGY", 17 => "GNQ", 18 => "ERI", 19 => "ETH ", 20 => "GAB", 21 => "GMB", 22 => "GHN", 23 => "GIN", 24 => "GNB", 25 => "KEN", 26 => "LSO", 27 => "LBR", 28 => "LBY", 29 => "MDG", 30 => "MWI", 31 => "MLI", 32 => "MRT", 33 => "MLI", 34 => "MYT", 35 => "MAR", 36 => "MOZ", 37 => "NAM", 38 => "NER", 39 => "NGA", 40 => "STP", 41 => "RWA", 42 => "SHA", 43 => "STP", 44 => "SEN", 45 => "SYC", 46 => "SLE", 47 => "SOM", 48 => "ZAF", 49 => "SSD", 50 => "SDN", 51 => "SWZ", 52 => "TZA", 53 => "TGO", 54 => "TUN", 55 => "UGA", 56 => "SADR", 57 => "ZMB", 58 => "ZWE"	);
	
	/*public static $_COUNTRY_ALIAS = array ( 
	1 => "AFG", 2 => "ALB", 3 => "DZA ", 4 => "ASM", 5 => "AND", 6 => "ANG", 7 => "AIA", 8 => "ATA", 9 => "ATG", 10 => "ARG", 11 => "ARM", 12 => "ABW  ", 13 => "AUS", 14 => "AUT", 15 => "AZE", 16 => "BHS", 17 => "BHR", 18 => "BGD", 19 => "BRB", 20 => "BLR", 21 => "BLG", 22 => "BLZ", 23 => "BNN", 24 => "BMU", 25 => "BTN", 26 => "BOL", 27 => "BSH", 28 => "BTW", 29 => "BVT", 30 => "BRA", 31 => "BIOT", 32 => "BRN", 33 => "BGR", 34 => "BRF", 1 => "BRD", 35 => "KCMB", 36 => "CMR", 37 => "CAN", 38 => "CPV", 39 => "CYM", 40 => "CAF", 41 => "TCD", 42 => "CHL", 43 => "CHN", 44 => "HMD", 45 => "CCK", 46 => "COL", 47 => "CMR", 48 => "COG", 49 => "COD	", 50 => "COK", 51 => "CRI", 52 => "HRV", 53 => "CUB", 54 => "CYP", 55 => "CZE", 56 => "DNK", 57 => "DJI", 58 => "DMA", 59 => "DMR", 60 => "ETMR", 61 => "ECU", 62 => "EGY", 63 => "SLV", 64 => "GNQ", 65 => "ERI", 66 => "EST", 67 => "ETH", 68 => "FLK", 69 => "ISN", 70 => "FRO", 71 => "FJI", 72 => "FIN", 73 => "UK", 74 => "USA"	);*/
	
	public static function processCountrys ( ) 
	{
	  try {
				return  self::$_COUNTRIES; 
			} catch ( Exception $e ) {
			return null; 
		  }        
	}
	public static function processCountryID ( $_value ) 
	{
		try {
			foreach( self::$_COUNTRIES as $_key => $_role ){
				if( strcmp($_role, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	
	public static function processCountryValue ( $_id )
	{
		try {
				foreach( self::$_COUNTRIES as $_key => $_role ){
					if( $_key == $_id )
						return $_role; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultCountry ()
	{
		try {
				return  19; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	public static function processCountryAliasIDValue ( $_id )
	{
		try {
				foreach( self::$_COUNTRY_ALIAS as $_key => $_role ){
					if( $_key == $_id )
						return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processCountryAliasID ( $_value ) 
	{
		try {
			foreach( self::$_COUNTRY_ALIAS as $_key => $_role ){
				if( strcmp($_role, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	public static function processCountryAliasValue ( $_id )
	{
		try {
				foreach( self::$_COUNTRY_ALIAS as $_key => $_role ){
					if( $_key == $_id )
						return $_role; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	
	public static function makeFullCode ( $_codeNumber )
	{
		return trim(trim($_codeNumber).'/'.date('y', time()));
	}
	public static function processCodeGeneratorInitialNumber ( $_initialNumber )
	{
		$_initialNumber = empty($_initialNumber) ? 1:intval($_initialNumber);
		if($_initialNumber < 10 ) $_initialNumber = '00'.$_initialNumber;
		else if($_initialNumber < 100 ) $_initialNumber = '0'.$_initialNumber; 
		else $_initialNumber = $_initialNumber; 
		
		return $_initialNumber;
	}
	public static function processCodeInitialNumber ( $_initialNumber )
	{
		$_initialNumber = empty($_initialNumber) ? 1:intval($_initialNumber);
		if($_initialNumber < 10 ) $_initialNumber = '000'.$_initialNumber;
		else if($_initialNumber < 100 ) $_initialNumber = '00'.$_initialNumber;
		else if($_initialNumber < 1000 ) $_initialNumber = '0'.$_initialNumber;
		else $_initialNumber = $_initialNumber; 
		
		return $_initialNumber;
	}
	public static function processReceiptCodeInitialNumber ( $_initialNumber)
	{
		$_initialNumber = empty($_initialNumber) ? 1:intval($_initialNumber);
		if($_initialNumber < 10 ) $_initialNumber = '000000'.$_initialNumber;
		else if($_initialNumber < 100 ) $_initialNumber = '00000'.$_initialNumber;
		else if($_initialNumber < 1000 ) $_initialNumber = '0000'.$_initialNumber;
		else if($_initialNumber < 10000 ) $_initialNumber = '000'.$_initialNumber;
		else if($_initialNumber < 100000 ) $_initialNumber = '00'.$_initialNumber;
		else if($_initialNumber < 1000000 ) $_initialNumber = '0'.$_initialNumber;
		else $_initialNumber = $_initialNumber; 
		
		return $_initialNumber;
	}
	public static function processRandomWords ( $_len=6)
	{
		 $_words = array_merge(range('A','Z'), range('A','Z'));
		 shuffle($_words);
		
		return substr(implode($_words),0,$_len);
	}
	public static function makeBreadcrumbs ( $_module, $_action )
	{
		 $_words = array_merge(range('A','Z'), range('A','Z'));
		 shuffle($_words);
		
		return ucwords(str_replace('_', ' ',trim($_action)));
	}
	
	public static function makeModuleURL ( $_userRole )
	{ 
		 switch($_userRole) {			
			case UserCore::$_SUPER_ADMINISTRATOR:
				return 'administrator';
			break; 
			case UserCore::$_ADMINISTRATOR:
				return 'administrator';
			break; 
			case UserCore::$_AUTHOR:
				return 'author';
			break; 
			case UserCore::$_REVIEWER:
				return 'reviewing';
			break; 
			case UserCore::$_EDITOR:
				return 'editor';
			break; 
		}	
		 
	} 
	public static function makeNavigationURL($_userRole, $_action)
	{
		if(is_null($_userRole) || is_null($_action) ) {
			return false;
		} 
		//$_moduleName = self::makeModuleURL($_userRole);
		
		return (self::makeModuleURL($_userRole).'/'.$_action);
	}
	public static function makeBreadCrumbURL ( $_userRole ) 
	{
		
	}
	public static function makeForwardNavigationURL($_modleName, $_action, $_object)
	{
		if(is_null($_modleName) || is_null($_action) || is_null($_object)) {
			return false;
		} 
		$_navAction = self::makeForwardNavigation($_action);
		return ($_modleName.'/'.$_navAction.'?task_id='.$_object->id.'&token_id='.$_object->token_id);
	}
	
	public static function makeLoginRedirectURL($_userRoleID, $_loginRoleID)
	{ 
		switch($_userRoleID) {			
			case UserCore::$_SUPER_ADMINISTRATOR:
				return 'administrator/index';
			break;
			case UserCore::$_ADMINISTRATOR:
				return 'administrator/index';
			break;
			case UserCore::$_AUTHOR:
				return 'author/index';
			break;
			case UserCore::$_EDITOR:
				return 'editor/index';
			break;
			case UserCore::$_REVIEWER:
				return 'reviewing/index';
			break;  
			case UserCore::$_AUTHOR_AND_REVIEWER:
				if($_loginRoleID == UserCore::$_AUTHOR ) { 
					return 'author/index';
				}	else { 
					return 'reviewing/index';
				}	
			break;  
			case UserCore::$_AUTHOR_AND_EDITOR:
				if($_loginRoleID == UserCore::$_AUTHOR ) { 
					return 'author/index';
				}	else { 
					return 'editor/index';
				}	
			break;  
			case UserCore::$_REVIEWER_AND_EDITOR:
				if($_loginRoleID == UserCore::$_REVIEWER ) { 
					return 'reviewing/index';
				}	else { 
					return 'editor/index';
				}	
			break;  
		} 
	}
	
	public static function makeHomeURLhh($_userRoleID, $_authorID)
	{ 
		switch($_userRoleID) {			
			case UserCore::$_SUPER_ADMINISTRATOR:
				return 'administrator/index';
			break;
			case UserCore::$_ADMINISTRATOR:
				return 'administrator/index';
			break;
			case UserCore::$_AUTHOR:
				return 'author/profile?author_id='.$_authorID;
			break;
			case UserCore::$_EDITOR:
				return 'author/profile?author_id='.$_authorID;
			break; 
		}
	}
	public static function makeHomeURL($_userRoleID, $_authorID)
	{ 
		switch($_userRoleID) {			
			case UserCore::$_SUPER_ADMINISTRATOR:
				return 'administrator/index';
			break;
			case UserCore::$_ADMINISTRATOR:
				return 'administrator/index';
			break;
			case UserCore::$_AUTHOR:
				return 'author/profile?author_id='.$_authorID;
			break;
			case UserCore::$_EDITOR:
				return 'author/profile?author_id='.$_authorID;
			break;
			case UserCore::$_REVIEWER:
				return 'reviewing/profile?author_id='.$_authorID;
			break;  
		}
	}
	public static function makePageRedirection ( $_userRole )
	{
		/*switch($_userRole) {			
			case UserCore::$_SUPER_ADMINISTRATOR:
				return 'administrator/index';
			break; 
			case UserCore::$_ADMINISTRATOR:
				return 'administrator/index';
			break; 
			case UserCore::$_AUTHOR:
				return 'author/index';
			breakUserCore
			case self::$_EDITOR:
				return 'editor/index';
			break; 
			case UserCore::$_REVIEWER:
				return 'reviewing/index';
			break;  
		}*/
		
		switch($_userRole) {			
			case UserCore::$_SUPER_ADMINISTRATOR:
				return UserCore::$_SUPER_ADMINISTRATOR;
			break;
			case self::$_EDITOR:
				return UserCore::$_EDITOR;
			break;
			case UserCore::$_REVIEWER:
				return UserCore::$_REVIEWER;
			break;  
			default:
			 return '';
			 break;
		}	
		
		//return UserCore::$_SUPER_ADMINISTRATOR;
	}
	
	public static function makeFullCodeNumber ( $_codeNumber ) 
	{ 
		return  (trim($_codeNumber).'/'.date('y', time())); 
	}
	public static function processSystemModuleID ( $_id ) 
	{ 
		return  ($_id < 1000 ? ($_id < 100 ? ($_id < 10 ? '000':'00'):'0'):'').$_id; 
	}
	public static function processAlias ( $_value ) 
	{ 
		return trim(strtoupper(str_replace(' ', '_', $_value))); 
	}
	public static function makeObjectAlias ($_object) 
	{ 
		return trim(strtoupper(str_replace(' ', '_', $_object))); 
	}
	public static function processDescription ( $_value, $_description ) 
	{ 
		return $_value ? trim(ucfirst($_value)).' ( '.trim($_description).' )':trim($_description);
	}
	public static function processDataID ( $_id ) 
	{ 
		return  ($_id < 100 ? ($_id < 10 ? ($_id < 10 ? '00':'0'):'0'):'').$_id; 
	}
	public static function makeTokenURL ( $_ID, $_tokenID, $_idName=null ) 
	{ 
		return  (($_idName ? ($_idName.'='.$_ID):('id'.'='.$_ID)).'&token_id='.substr(trim($_tokenID), 0, 16).'&ext_id='.substr(trim($_tokenID), 24, 8).'&opt_id='.substr(trim($_tokenID), 16, 8)); 
	}
	public static function makeSystemInitialCode ( $_codeType, $_initialNumber ) 
	{ 
		return  ((self::$_REFERENCE == $_codeType) || (self::$_INVOICE == $_codeType) || (self::$_RECEIPT == $_codeType)) ? self::processReferenceInitialNumber (trim($_initialNumber)):self::processCodeInitialNumber (trim($_initialNumber)); 
	}
	public static function makeSystemFullCode ( $_prefixCode, $_lastCode ) 
	{ 
		return  (trim($_prefixCode).'-'.trim($_lastCode)); 
	}
	public static function processTokenID ( $_tokenID, $_optID, $_extID ) 
	{ 
		return  (trim($_tokenID).trim($_optID).trim($_extID)); 
	}
	public static function makeStringExplode ( $_strValue ) 
	{ 
		return  (explode(',', $_strValue)); 
	}
	public static function makeAlias ( $_alias )
	{
		return trim(strtoupper(str_replace(' ', '_', $_alias))); 
	}
	public static function processSystemActionDescriptionValue ($_actionID, $_userName, $_actionObject)
	{
		switch($_actionID) {			
			case self::$_LOGIN:
				return ucfirst($_userName.' has performed '.strtoupper(self::processLogActionIcon ($_actionID)).' action to login to the system');
			break;
			case self::$_LOGOUT:
				return ucfirst($_userName.' has performed '.strtoupper(self::processLogActionIcon ($_actionID)).' action to logout from the system');
			break;
			case self::$_CREATE:
				return ucfirst($_userName.' has performed '.strtoupper(self::processLogActionIcon ($_actionID)).' action to create '.$_actionObject);
			break;
			case self::$_UPDATE:
				return ucfirst($_userName.' has performed '.strtoupper(self::processLogActionIcon ($_actionID)).' action to '.$_actionObject);
			break;
			case self::$_DELETE:
				return ucfirst($_userName.' has performed '.strtoupper(self::processLogActionIcon ($_actionID)).' action to '.$_actionObject);
			break;
			case self::$_APPROVE:
				return ucfirst($_userName.' has performed '.strtoupper(self::processLogActionIcon ($_actionID)).' action to '.$_actionObject);
			break;
		}  
	}
}

<?php 
class SystemCore {
 
	public static $_ACTIVATE = 1;
	public static $_BLOCK = 2; 
	public static $_DELETE = 3; 
	public static $_TERMINATE = 4; 
	public static $_COMPLETE_DELETE = 5; 
	public static $_RESTORE = 6; 
	public static $_GENERATE_PDF = 7; 

	public static $ALL_BATCH_ACTIONS = array (1 => 'Activate', 2 => 'Block', 3 => 'Delete', 4 => 'Teminate', 5 => 'Complete Delete', 6 => 'Restore');
	public static $TRAHSED_BATCH_ACTIONS = array (5 => 'Delete', 6 => 'Restore');
	public static $_BATCH_ACTIONS = array (1 => 'Activate', 2 => 'Block', 3 => 'Delete', 4 => 'Teminate');

	public static function processAllBatchActions ()
	{
	  try {
				return  self::$ALL_BATCH_ACTIONS; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function ProcessBatchActionS ($_action)
	{
	   if($_action == 'trashed') {			
			return self::$TRAHSED_BATCH_ACTIONS;
		} else {
			return self::$_BATCH_ACTIONS;
		}
	}
	
	public static function processBatchActionID ( $value ) 
	{
		try {
			foreach( self::$ALL_BATCH_ACTIONS as $key=> $action ) {
				if( strcmp($action, $value) == 0 ) {
					return $key; 
				}
			}
			return null; 
		} catch ( Exception $e ) {
			return null; 
		}
	}

	public static function processBatchActionValue ($_id )
	{
		try {
			foreach( self::$ALL_BATCH_ACTIONS as $key=> $action ) {
			  if( $key == $_id ) {
					return $action;
				} 
			}
			return null;       
		} catch ( Exception $e ) {
			return null; 
		}
	}
	public static function processDefaultBatchAction ()
	{
		try {
				return  self::$_ACTIVATE; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	
	public static function processBatchActionIcon ($action) 
	{
		switch($action) {			
			case self::$_ACTIVATE:
				return 'approve';
			break;
			case self::$_BLOCK:
				return 'reject';
			break;
			case self::$_DELETE:
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
	
	public static $_DASHBOARD = 1;
	public static $_REGISTRATION = 2;
	public static $_PURCHASE = 3;
	public static $_ACQUISITION = 4; 
	public static $_SALES = 5;
	public static $_PAYMENT = 6;
	public static $_RECEIPT = 7;
	public static $_EXPENSE = 8;
	public static $_INCOME = 9;
	public static $_REQUEST = 10;
	public static $_ACCOUNT = 11;
	public static $_PRODUCT = 12;
	public static $_CUSTOMER = 13;
	public static $_ORGANIZATION = 14; 
	public static $_GENERAL_SETTING = 15;
	public static $_SYSTEM_SETTING = 16;
	public static $_ADMINISTRATION = 17; 
	public static $_REPORT = 18;
	
	public static $_MODULES = array (1 => "Dashboard",  2 => "Registration", 3 => "Purchase", 4 => "Acquisition", 5 => "Sales", 6 => "Payment", 7 => "Receipt", 8 => "Expense", 9 => "Income", 10 => "Request", 11 => "Account", 12 => "Product", 13 => "Customer", 14 => "Organization", 15 => "General Setting", 16 => "System Setting", 17 => "Administration", 18 => "Report" );
	
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
			case self::$_REGISTRATION:
				return 'registration';
			break;
			case self::$_PURCHASE:
				return 'purchase';
			break; 
			case self::$_ACQUISITION:
				return 'acquisition';
			break;
			case self::$_SALES:
				return 'sales';
			break;
			case self::$_PAYMENT:
				return 'payment';
			break;
			case self::$_RECEIPT:
				return 'receipt';
			break;
			case self::$_EXPENSE:
				return 'expense';
			break;
			case self::$_INCOME:
				return 'income';
			break;
			case self::$_REQUEST:
				return 'request';
			break;
			case self::$_ACCOUNT:
				return 'account';
			break;
			case self::$_PRODUCT:
				return 'product';
			break; 
			case self::$_CUSTOMER:
				return 'customer';
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
	public static $_CREATE = 1;
	public static $_UPDATE = 2;
	public static $_READ = 3;
	public static $DELETE = 4;
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
	
	public static $_COUNTRIES = array ( 
	1 => "AFGHANISTAN, ISLAMIC STATE OF", 2 => "ALBANIA", 3 => "ALGERIA ", 4 => "AMERICAN SAMOA", 5 => "ANDORRA", 6 => "ANGOLA", 7 => "ANGUILLA", 8 => "ANTARCTICA", 9 => "ANTIGUA AND BARBUDA", 10 => "ARGENTINA", 11 => "ARMENIA ", 12 => "ARUBA  ", 13 => "AUSTRALIA ", 14 => "AUSTRIA", 15 => "AZERBAIDJAN", 16 => "BAHAMAS", 17 => "BAHRAIN", 18 => "BANGLADESH", 19 => "BARBADOS", 20 => "BELARUS", 21 => "BELGIUM", 22 => "BELIZE", 23 => "BENIN", 24 => "BERMUDA", 25 => "BHUTAN", 26 => "BOLIVIA", 27 => "BOSNIA-HERZEGOVINA", 28 => "BOTSWANA", 29 => "BOUVET ISLAND", 30 => "BRAZIL", 31 => "BRITISH INDIAN OCEAN TERRITORY", 32 => "BRUNEI DARUSSALAM", 33 => "BULGARIA", 34 => "BURKINA FASO", 1 => "BURUNDI", 35 => "CAMBODIA", 36 => "CAMEROON", 37 => "CANADA", 38 => "CAPE VERDE", 39 => "CAYMAN ISLANDS", 40 => "CENTRAL AFRICAN REPUBLIC", 41 => "CHAD", 42 => "CHILE", 43 => "CHINA", 44 => "HRISTMAS ISLAND", 45 => "COCOS (KEELING) ISLANDS", 46 => "COLOMBIA", 47 => "COMOROS", 48 => "CONGO", 49 => "DEMOCRATIC REPUBLIC OF CONGO", 50 => "COOK ISLANDS", 51 => "COSTA RICA", 52 => "CROATIA", 53 => "CUBA", 54 => "CYPRUS", 55 => "CZECH REPUBLIC", 56 => "DENMARK", 57 => "DJIBOUTI", 58 => "DOMINICA", 59 => "DOMINICAN REPUBLIC", 60 => "EAST TIMOR", 61 => "ECUADOR", 62 => "EGYPT", 63 => "EL SALVADOR", 64 => "EQUATORIAL GUINEA", 65 => "ERITREA", 66 => "ESTONIA", 67 => "ETHIOPIA", 68 => "FALKLAND", 69 => "ICLANDS", 70 => "FAROE ISLANDS", 71 => "FIJI", 72 => "FINLAND", 73 => "United Kingdom", 74 => "United States of America"	);
	
	public static $_COUNTRY_ALIAS = array ( 
	1 => "AFG", 2 => "ALB", 3 => "DZA ", 4 => "ASM", 5 => "AND", 6 => "ANG", 7 => "AIA", 8 => "ATA", 9 => "ATG", 10 => "ARG", 11 => "ARM", 12 => "ABW  ", 13 => "AUS", 14 => "AUT", 15 => "AZE", 16 => "BHS", 17 => "BHR", 18 => "BGD", 19 => "BRB", 20 => "BLR", 21 => "BLG", 22 => "BLZ", 23 => "BNN", 24 => "BMU", 25 => "BTN", 26 => "BOL", 27 => "BSH", 28 => "BTW", 29 => "BVT", 30 => "BRA", 31 => "BIOT", 32 => "BRN", 33 => "BGR", 34 => "BRF", 1 => "BRD", 35 => "KCMB", 36 => "CMR", 37 => "CAN", 38 => "CPV", 39 => "CYM", 40 => "CAF", 41 => "TCD", 42 => "CHL", 43 => "CHN", 44 => "HMD", 45 => "CCK", 46 => "COL", 47 => "CMR", 48 => "COG", 49 => "COD	", 50 => "COK", 51 => "CRI", 52 => "HRV", 53 => "CUB", 54 => "CYP", 55 => "CZE", 56 => "DNK", 57 => "DJI", 58 => "DMA", 59 => "DMR", 60 => "ETMR", 61 => "ECU", 62 => "EGY", 63 => "SLV", 64 => "GNQ", 65 => "ERI", 66 => "EST", 67 => "ETH", 68 => "FLK", 69 => "ISN", 70 => "FRO", 71 => "FJI", 72 => "FIN", 73 => "UK", 74 => "USA"	);
	
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
				return  67; 
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
			case UserCore::$_REVIEWER:
				return 'reviewing/profile?author_id='.$_authorID;
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
}

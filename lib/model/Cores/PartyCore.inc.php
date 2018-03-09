<?php

class PartyCore {
	
	public static $_ORGANIZATION = 1; 
	public static $_PERSON = 2;    
	public static $_OTHER_TYPE = 3;
	  
	public static $_PARTY_TYPES = array ( 1 => "Organization", 2 => "Person/Individual", 3 => "Other Type");
		
	public static function processPartyTypes ( ) 
	{
	  try {
				return  self::$_PARTY_TYPES; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processPartyTypeID ( $_value ) 
	{
		try {
			foreach( self::$_PARTY_TYPES as $_key=> $_type ) {
				if( strcmp($_type, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	public static function processPartyTypeValue ( $_id ) 
	{
		try {
				foreach( self::$_PARTY_TYPES as $_key => $_type ) {
					if( $_key == $_id )
						return $_type; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultPartyType (){
		try {
				return  self::$_ORGANIZATION; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	public static function processPartyTypeIcon ($_type)
	{
		switch($_type) {			
			case self::$_ORGANIZATION:
				return 'organization';
			break;
			case self::$_PERSON:
				return 'person';
			break; 
		}
	} 
	
	public static $_PERSONAL_CONTACT = 1; 
	public static $_FAMILY_CONTACT = 2;    
	public static $_EMERGENCY_CONTACT = 3;    
	public static $_OTHER_CONTACT_TYPE = 4;
	  
	public static $_PARTY_CONTACT_TYPES = array ( 1 => "Personal Contact", 2 => "Family Contact", 3 => "Emergency Contact", 4 => "Other Contact Type");
		
	public static function processPartyContactTypes ( ) 
	{
	  try {
				return  self::$_PARTY_CONTACT_TYPES; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processPartyContactTypeID ( $_value ) 
	{
		try {
			foreach( self::$_PARTY_CONTACT_TYPES as $_key=> $_type ) {
				if( strcmp($_type, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	public static function processPartyContactTypeValue ( $_id ) 
	{
		try {
				foreach( self::$_PARTY_CONTACT_TYPES as $_key => $_type ) {
					if( $_key == $_id )
						return $_type; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultPartyContactType (){
		try {
				return  self::$_PERSONAL_CONTACT; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	public static function processPartyContactTypeIcon ( $_type )
	{
		switch($_type) {			
			case self::$_PERSONAL_CONTACT:
				return 'personal_contact';
			break;
			case self::$_FAMILY_CONTACT:
				return 'family_contact';
			break; 
			case self::$_EMERGENCY_CONTACT:
				return 'emergency_contact';
			break; 
		}
	} 
	
	public static $_OWNER_COMPANY = 1; 
	public static $_INTERNAL_ORGANIZATION = 2;
	public static $_CUSTOMER	= 3; 
	public static $_PARTNER = 4; 
	public static $_VENDOR = 5; 
	public static $_SUPPLIER = 6; 
	public static $_DISTRIBUTER = 7; 
	public static $_AGENT =  8;  	 
	public static $_EMPLOYEE = 9; 
	public static $_FAMILY_MEMBER = 10; 
	public static $_SHAREHOLDER = 11; 
	public static $_CONTRACTOR = 12; 
	public static $_CUSTOMER_CONTACT =  13; 	 
	public static $_VENDOR_CONTACT =  14;  	  	 
	public static $_SUPPLIER_CONTACT =  15;  
	public static $_MONITORING_PARENT =  16;  	 
	public static $_CONTACT =  17;  	 
	public static $_INSTRUCTOR =  18;  	 
	public static $_STUDENT =  19;  	 
	public static $_PARENT =  20;  	 
	public static $_STUDENT_CONTACT =  21;  	 
	public static $_OTHER_ORGANIZATIONAL_ROLE = 22;  
	
	public static $_PARTY_ROLES = array (  1 => "Company Owner", 2 => "Internal Organization", 3 => "Customer", 4 => "Partner", 5 => "Vendor", 6 =>"Supplier", 7 => "Distributor", 8 => "Agent", 9 => "Employee", 10 => "Family Member", 11 => "Shareholder", 12 => "Contractor", 13 => "Customer Contact", 14 => "Vendor Contact", 15 => "Supplier Contact", 16 => "Monitoring Parent", 17 => "Contact", 18 => "Instructor", 19 => "Student", 20 => "Parent", 21 => "Student Contact", 22 => "Other Organizational Role");
	
	public static $_ORGANIZATION_ROLES = array (  1 => "Company Owner", 2 => "Internal Organization", 3 => "Customer", 4 => "Partner", 5 => "Vendor", 6 =>"Supplier", 7 => "Distributor", 8 => "Agent", 11 => "Shareholder", 13 => "Customer Contact", 14 => "Vendor Contact", 15 => "Supplier Contact", 16 => "Monitoring Parent", 16 => "Other Organizational Role");
	
	public static $_PERSON_ROLES = array (  1 => "Company Owner", 3 => "Customer", 5 => "Vendor", 6 =>"Supplier", 9 => "Employee", 10 => "Family Member", 11 => "Shareholder", 12 => "Contractor", 13 => "Customer Contact", 14 => "Vendor Contact", 15 => "Supplier Contact", 17 => "Contact", 18 => "Instructor", 19 => "Student", 20 => "Parent", 21 => "Student Contact", 22 => "Other Organizational Role");
		 
	public static function processPartyRoles ( ) 
	{
	  try {
				return  self::$_PARTY_ROLES; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processOrganizationRoles ( ) 
	{
	  try {
				return  self::$_ORGANIZATION_ROLES; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processPersonRoles ( ) 
	{
	  try {
				return  self::$_PERSON_ROLES; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processPartyRoleID ( $_value ) 
	{
		try {
			foreach( self::$_PARTY_ROLES as $_key=> $_role ){
				if( strcmp($_role, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	public static function processPartyRoleValue ( $_id )
	{
		try {
				foreach( self::$_PARTY_ROLES as $_key=> $_role ){
					if( $_key == $_id )
						return $_role; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultPartyRole () 
	{
		try {
				return  self::$_INTERNAL_ORGANIZATION; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	public static function processPartyRoleIcon ($_role) 
	{
		switch($_role) {		 
			case self::$_OWNER_COMPANY:
				return 'owner_company';
			break;
			case self::$_INTERNAL_ORGANIZATION:
				return 'internal_organization';
			break;
			case self::$_EXTERNAL_ORGANIZATION:
				return 'external_organization';
			break;
			case self::$_CUSTOMER:
				return 'customer';
			break;
			case self::$_PARTNER:
				return 'partner';
			break;
			case self::$_SUPPLIER:
				return 'supplier';
			break;
			case self::$_DISTRIBUTER:
				return 'distributer';
			break;
			case self::$_AGENT:
				return 'agent';
			break; 
			case self::$_PROJECT:
				return 'project';
			break; 
			case self::$_OTHER_ORGANIZATIONAL_ROLE:
				return 'other_organizational_role';
			break;
		}
	} 
	
	public static $_INSTRUCTOR_RELATIONSHIP = 1; 
	public static $_STUDENT_RELATIONSHIP = 2;  
	public static $_PARENT_RELATIONSHIP = 3;  
	public static $_DISTRIBUTION_CHANNEL = 4;  
	public static $_PARTNER_SHIP = 5;  
	public static $_EMPLOYMENT = 6;  
	public static $_STUDENT_CONTACT_RELATIONSHIP = 7;  
	public static $_ORGANIZATION_ROLLUP = 8;
	public static $_OTHER_RELATIONSHIP = 9;
	  
	public static $_PARTY_RELATIONSHIPS = array ( 1 => "Customer", 2 => "Vendor", 3 => "Supplier", 4 => "Distribution Channel", 5 => "Partnership", 6 => "Employment", 7 => "Organization Contact", 8 => "Organization Rollup", 9 => "Other Relationship" );
		
	public static function processRelationshipTypes ( ) 
	{
	  try {
				return  self::$_PARTY_RELATIONSHIPS; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processRelationshipTypeID ( $_value ) 
	{
		try {
			foreach( self::$_PARTY_RELATIONSHIPS as $_key=> $_type ) {
				if( strcmp($_type, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	public static function processRelationshipTypeValue ( $_id ) 
	{
		try {
				foreach( self::$_PARTY_RELATIONSHIPS as $_key => $_type ) {
					if( $_key == $_id )
						return $_type; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultRelationshipType ()
	{
		try {
				return  self::$_ORGANIZATION_ROLLUP; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	public static function processRelationshipTypeIcon ($_type)
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
	
	public static $_BILL_TO_CUSTOMER = 1; 
	public static $_SHIP_TO_CUSTOMER = 2;  
	public static $_END_USER_CUSTOMER = 3;   
	public static $_OTHER_SUB_ROLE_TYPES = 4;
	  
	public static $_SUB_ROLE_TYPES = array ( 1 => "Bill to Customer", 2 => "Ship to Customer", 3 => "End User Customer", 4 => "Other Role" );
		
	public static function processPartySubRoleTypes ( ) 
	{
	  try {
				return  self::$_SUB_ROLE_TYPES; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processPartySubRoleTypeID ( $_value ) 
	{
		try {
			foreach( self::$_SUB_ROLE_TYPES as $_key=> $_type ) {
				if( strcmp($_type, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	public static function processPartySubRoleValue ( $_id ) 
	{
		try {
				foreach( self::$_SUB_ROLE_TYPES as $_key => $_type ) {
					if( $_key == $_id )
						return $_type; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultPartySubRoleType ()
	{
		try {
				return  self::$_BILL_TO_CUSTOMER; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	public static function processPartySubRoleTypeIcon ($_type)
	{
		switch($_type) {			
			case self::$_BILL_TO_CUSTOMER:
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
	
	public static $_HIGH = 1; 
	public static $_MEDIUM = 2;   
	public static $_LOW = 3;
	public static $_OTHER_PRIORITY = 4;
	  
	public static $_PARTY_PRIORITIES = array ( 1 => "High", 2 => "Medium", 3 => "Low", 4 => "Other Priority");
		
	public static function processPartyPriorities ( ) 
	{
	  try {
				return  self::$_PARTY_PRIORITIES; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processPartyPriorityID ( $_value ) 
	{
		try {
			foreach( self::$_PARTY_PRIORITIES as $_key=> $_type ) {
				if( strcmp($_type, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	public static function processPartyPriorityValue ( $_id ) 
	{
		try {
				foreach( self::$_PARTY_PRIORITIES as $_key => $_type ) {
					if( $_key == $_id )
						return $_type; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultPartyPriority (){
		try {
				return  self::$_MEDIUM; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	public static function processPartyPriorityIcon ($_type)
	{
		switch($_type) {			
			case self::$_HIGH:
				return 'high_priority';
			break;
			case self::$_MEDIUM:
				return 'medium_priority';
			break; 
			case self::$_LOW:
				return 'low_priority';
			break; 
			case self::$_OTHER_PRIORITY:
				return 'other_priority';
			break; 
		}
	} 
	
	public static $_ACTIVE = 1;
	public static $_BLOCKED = 2;
	public static $_TERMINATED = 3;    
	public static $_DELETED = 4;    

	public static $_PARTY_STATUSES = array (1 => 'Active', 2 => 'Blocked', 3 => 'Terminated', 4 => 'Deleted');
	
	public static function processPartyStatus ( ) 
	{
		return self::$_PARTY_STATUSES;
	}
	public static function processPartyStatusID ( $_value ) 
	{
		try {
			foreach( self::$_PARTY_STATUSES as $_key=> $_status ){
				if( strcmp($_status, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $e ) {
			return null; 
		}
	}
	public static function processPartyStatusValue ($_id )
	{
		try {
			foreach( self::$_PARTY_STATUSES as $_key=> $_status ){
			  if( $_key == $_id )
					return $_status; 
			}
			return 'Unkown';       
		} catch ( Exception $e ) {
			return 'Unkown'; 
		}
	}
	public static function processDefaultPartyStatus ()
	{
		try {
				return  self::$_ACTIVE; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	public static function processPartyStatusIcon ($_status) 
	{
		switch($_status) {			
			case self::$_ACTIVE:
				return 'active';
			break;
			case self::$_BLOCKED:
				return 'blocked';
			break;
			case self::$_TERMINATED:
				return 'terminated';
			break;
			case self::$_DELETED:
				return 'Deleted';
			break;
		}
	}
	public static function processPartyStatusIconValue ($_status) 
	{
		switch($_status) {			
			case self::$_ACTIVE:
				return 'active';
			break;
			case self::$_BLOCKED:
				return 'deny_large';
			break;
			case self::$_TERMINATED:
				return 'terminated';
			break;
			case self::$_DELETED:
				return 'trashed';
			break;
		}
	}
	
	public static $_PRIMARY_PAYER = 1;
	public static $_SECONDARY_PAYER = 2;
	public static $_REPRESENTATIVE = 3;    
	public static $_OTHER_ROLE = 4;    

	public static $_SALES_ROLE_TYPES = array (1 => 'Primary Payer', 2 => 'Secondary Payer', 3 => 'Representative', 4 => 'Other Role');
	
	public static function processSalesPartyRoleTypes ( ) 
	{
		return self::$_SALES_ROLE_TYPES;
	}
	public static function processSalesPartyRoleTypeID ( $_value ) 
	{
		try {
			foreach( self::$_SALES_ROLE_TYPES as $_key=> $_status ){
				if( strcmp($_status, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $e ) {
			return null; 
		}
	}
	public static function processSalesPartyRoleTypeValue ($_id )
	{
		try {
			foreach( self::$_SALES_ROLE_TYPES as $_key=> $_status ){
			  if( $_key == $_id )
					return $_status; 
			}
			return 'Unkown';       
		} catch ( Exception $e ) {
			return 'Unkown'; 
		}
	}
	public static function processDefaultSalesPartyRoleType ()
	{
		try {
				return  self::$_PRIMARY_PAYER; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	public static function processSalesPartyRoleTypeIcon ($_status) 
	{
		switch($_status) {			
			case self::$_PRIMARY_PAYER:
				return 'primary_payer';
			break;
			case self::$_SECONDARY_PAYER:
				return 'secondary_payer';
			break;
			case self::$_REPRESENTATIVE:
				return 'representative';
			break;
			case self::$_OTHER_ROLE:
				return 'other_sales_role';
			break;
		}
	} 
	
	public static $_MALE = 1; 
	public static $_FEMAL = 2; 
	public static $_GENDERS = array ( 1 => "Male", 2 => "Femal" );
	
	public static function processAllGenders ( ) {
	  try {
				return  self::$_GENDERS; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processGenderID ( $_value ) {
		try {
			foreach( self::$_GENDERS as $_key=> $_gender ){
				if( strcmp($_gender, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	
	public static function processGenderValue ( $_id ){
		try {
				foreach( self::$_GENDERS as $_key=> $_gender ){
					if( $_key == $_id )
						return $_gender; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	
	public static $ALL_NATIONALITYS = array ( 
	1 => "AFGHANISTAN, ISLAMIC STATE OF", 2 => "ALBANIA", 3 => "ALGERIA ", 4 => "AMERICAN SAMOA", 5 => "ANDORRA, PRINCIPALITY OF", 6 => "ANGOLA", 7 => "ANGUILLA", 8 => "ANTARCTICA", 9 => "ANTIGUA AND BARBUDA", 10 => "ARGENTINA", 11 => "ARMENIA ", 12 => "ARUBA  ", 13 => "AUSTRALIA ", 14 => "AUSTRIA", 15 => "AZERBAIDJAN", 16 => "BAHAMAS", 17 => "BAHRAIN", 18 => "BANGLADESH", 19 => "BARBADOS", 20 => "BELARUS", 21 => "BELGIUM", 22 => "BELIZE", 23 => "BENIN", 24 => "BERMUDA", 25 => "BHUTAN", 26 => "BOLIVIA", 27 => "BOSNIA-HERZEGOVINA", 28 => "BOTSWANA", 29 => "BOUVET ISLAND", 30 => "BRAZIL", 31 => "BRITISH INDIAN OCEAN TERRITORY", 32 => "BRUNEI DARUSSALAM", 33 => "BULGARIA", 34 => "BURKINA FASO", 1 => "BURUNDI", 35 => "CAMBODIA, KINGDOM OF", 36 => "CAMEROON", 37 => "CANADA", 38 => "CAPE VERDE", 39 => "CAYMAN ISLANDS", 40 => "CENTRAL AFRICAN REPUBLIC", 41 => "CHAD", 42 => "CHILE", 43 => "CHINA", 44 => "HRISTMAS ISLAND", 45 => "COCOS (KEELING) ISLANDS", 46 => "COLOMBIA", 47 => "COMOROS", 48 => "CONGO", 49 => "CONGO, THE DEMOCRATIC REPUBLIC OF THE", 50 => "COOK ISLANDS", 51 => "COSTA RICA", 52 => "CROATIA", 53 => "CUBA", 54 => "CYPRUS", 55 => "CZECH REPUBLIC", 56 => "DENMARK", 57 => "DJIBOUTI", 58 => "DOMINICA", 59 => "DOMINICAN REPUBLIC", 60 => "EAST TIMOR", 61 => "ECUADOR", 62 => "EGYPT", 63 => "EL SALVADOR", 64 => "EQUATORIAL GUINEA", 65 => "ERITREA", 66 => "ESTONIA", 67 => "ETHIOPIA", 68 => "FALKLAND", 69 => "ISLANDS", 70 => "FAROE ISLANDS", 71 => "FIJI", 72 => "FINLAND"	);
	
	public static function processAllNationalitys ( ) {
  try {
			return  self::$ALL_NATIONALITYS; 
		} catch ( Exception $e ) {
		return null; 
	  }        
	}
	public static function processNationalityID ( $value ) 
	{
		try {
			foreach( self::$ALL_NATIONALITYS as $key=> $role ){
				if( strcmp($role, $value) == 0 )
					return $key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	
	public static function processNationalityValue ( $id )
	{
		try {
				foreach( self::$ALL_NATIONALITYS as $key=> $role ){
					if( $key == $id )
						return $role; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultNationality ()
	{
		try {
				return  67; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	
	public static function makePartyActionURL($_modleName, $_action, $_object)
	{
		if(is_null($_modleName) || is_null($_action) || is_null($_object)) {
			return false;
		} 
		return ($_modleName.'/'.$_action.'?party_id='.$_object->id.'&token_id='.$_object->token_id);
	}
	public static function makeFullPartyActionURL($_modleName, $_action, $_object, $_contactObject)
	{
		if(is_null($_modleName) || is_null($_action) || is_null($_object)) {
			return false;
		} 
		return ($_modleName.'/'.$_action.'?party_id='.$_object->id.'&token_id='.$_object->token_id.'&address_id='.$_contactObject->id.'&address_token_id='.$_contactObject->token_id);
	}
	public static function makePartyURL($_modleName, $_action)
	{
		if(is_null($_modleName) || is_null($_action)) {
			return false;
		} 
		return ($_modleName.'/'.$_action);
	}
	public static function makePersonActionURL($_modleName, $_action, $_object)
	{
		if(is_null($_modleName) || is_null($_action) || is_null($_object)) {
			return false;
		} 
		return ($_modleName.'/'.$_action.'?person_id='.$_object->id.'&token_id='.$_object->token_id);
	}
	public static function makeFullPersonActionURL($_modleName, $_action, $_object, $_contactObject)
	{
		if(is_null($_modleName) || is_null($_action) || is_null($_object)) {
			return false;
		} 
		return ($_modleName.'/'.$_action.'?person_id='.$_object->id.'&token_id='.$_object->token_id.'&address_id='.$_contactObject->id.'&address_token_id='.$_contactObject->token_id);
	}
	 
}





<?php

class OrganizationCore { 
	
    	public static $_OWNER_COMPANY = 1; 
    	public static $_INTERNAL_ORGANIZATION = 2;
		public static $_CUSTOMER	= 3; 
		public static $_PARTNER = 4; 
		public static $_VENDOR = 5; 
		public static $_SUPPLIER = 6; 
		public static $_DISTRIBUTER = 7; 
		public static $_AGENT =  8;  	 
		public static $_CUSTOMER_CONTACT =  9; 	 
		public static $_VENDOR_CONTACT =  10;  	  	 
		public static $_SUPPLIER_CONTACT =  11;  
		public static $_MONITORING_PARENT =  12;  	 
		public static $_OTHER_ORGANIZATIONAL_ROLE = 13;  
		public static $_ORGANIZATIONAL_ROLES = array (  1 => "Owner Company", 2 => "Internal Organization", 3 => "Customer", 4 => "Partner", 5 => "Vendor", 6 =>"Supplier", 7 => "Distributor", 8 => "Agent", 9 => "Customer Contact", 10 => "Vendor Contact", 11 => "Supplier Contact", 12 => "Monitorin Parent", 13 => "Other Organizational Role");
		
	public static function processOrganizationID ( $_id ) 
	{ 
		return  ($_id < 1000 ? ($_id < 100 ? ($_id < 10 ? '000':'00'):'0'):'').$_id; 
			
	}
	public static function processOrganizationalRoles ( ) 
	{
	  try {
				return  self::$_ORGANIZATIONAL_ROLES; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processOrganizationalRoleID ( $_value ) 
	{
		try {
			foreach( self::$_ORGANIZATIONAL_ROLES as $_key=> $_role ){
				if( strcmp($_role, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	public static function processOrganizationalRoleValue ( $_id )
	{
		try {
				foreach( self::$_ORGANIZATIONAL_ROLES as $_key=> $_role ){
					if( $_key == $_id )
						return $_role; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultOrganizationalRole () 
	{
		try {
				return  self::$_INTERNAL_ORGANIZATION; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	public static function processOrganizationalRoleIcon ($_role) 
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
	public static $_PARENT_ORGANIZATION = 1; 
	public static $_DEPARTMENT = 2; 
	public static $_DIVISION = 3; 
	public static $_SHARE_HOLDER	= 4;  
	public static $_SUBSIDIARY =  5; 	
	public static $_OTHER_ORGANIZATIONAL_UNIT = 6;  
	public static $_ORGANIZATIONAL_UNITS = array ( 1 => "Parent Organization", 2 => "Department" , 3 => "Division",  4 => "Share Holder", 5 => "Subsidiary" , 6 => "Other Organizational Unit");
		
	public static function processOrganizationalUnits ( ) 
	{
	  try {
				return  self::$_ORGANIZATIONAL_UNITS; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processOrganizationalUnitID ( $_value ) 
	{
		try {
			foreach( self::$_ORGANIZATIONAL_UNITS as $_key=> $_unit ){
				if( strcmp($_unit, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	public static function processOrganizationalUnitValue ( $_id )
	{
		try {
				foreach( self::$_ORGANIZATIONAL_UNITS as $_key=> $_unit ){
					if( $_key == $_id )
						return $_unit; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultOrganizationalUnit () 
	{
		try {
				return  self::$_DEPARTMENT; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	public static function processOrganizationalUnitIcon ($_unit) 
	{
		switch($_unit) {			
			case self::$_PARENT_ORGANIZATION:
				return 'parent_organization';
			break; 
			case self::$_DEPARTMENT:
				return 'department';
			break;
			case self::$_DIVISION:
				return 'division';
			break;
			case self::$_SHARE_HOLDER:
				return 'share_holder';
			break; 
			case self::$_SUBSIDIARY:
				return 'subsidiary';
			break;
			case self::$_OTHER_ORGANIZATIONAL_UNIT:
				return 'other_organizational_unit';
			break;
		}
	} 
	public static $_GOVERMENTAL_ORGANIZATION = 1;  
	public static $_NGO = 2;  
	public static $_CORPORATION =  3; 
	public static $_ASSOCIATION =  4; 
	public static $_PLC =  5; 	
	public static $_OTHER_ORGANIZATIONAL_TYPE = 6;  
	public static $_ORGANIZATIONAL_TYPES = array ( 1 => "Govermental Organization", 2 => "NGO" , 3 => "Corporation" , 4 => "Association" , 5 => "PLC", 6 => "Other Organization Type");

	public static function processOrganizationalTypes ( ) 
	{
	  try {
				return  self::$_ORGANIZATIONAL_TYPES; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processOrganizationalTypeID ( $_value ) 
	{
		try {
			foreach( self::$_ORGANIZATIONAL_TYPES as $_key=> $_type ) {
				if( strcmp($_type, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	public static function processOrganizationalTypeValue ( $_id )
	{
		try {
				foreach( self::$_ORGANIZATIONAL_TYPES as $_key=> $_type ) {
					if( $_key == $_id )
						return $_type; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultOrganizationalType ()
	{
		try {
				return  self::$_OTHER_ORGANIZATIONAL_TYPE; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	 
	public static function processOrganizationTypeIcon ($_type) 
	{
		switch($_type) {			
			case self::$_GOVERMENTAL_ORGANIZATION:
				return 'governmental_organization';
			break;
			case self::$_NGO:
				return 'ngo';
			break;
			case self::$_CORPORATION:
				return 'corporation';
			break;
			case self::$_ASSOCIATION:
				return 'association';
			break;
			case self::$_PLC:
				return 'plc';
			break; 
			case self::$_OTHER_ORGANIZATION_TYPE:
				return 'other_organization_type';
			break;
		}
	} 
	public static $_DAILY = 1;  
	public static $_WEEKLY = 2;  
	public static $_BI_WEEKLY =  3; 
	public static $_MONTHLY =  4; 
	public static $_BI_MONTHLY =  5; 
	public static $_QUARTERLY =  6; 	
	public static $_FOUR_MONTHLY =  7; 	
	public static $_HALF_YEARLY =  8; 	
	public static $_YEARLY = 9;  
	public static $_OTHER_FREQUENCY = 10;  
	public static $_ALL_FREQUENCIES = array ( 1 => "Daily", 2 => "Weekly" , 3 => "Bi-Weekly" , 4 => "Monthly" , 5 => "Bi-Monthly", 6 => "Quarterly", 7 => "Every Four Month", 8 => "Half Yealry", 9 => "Yearly", 10 => "Other Frequency");

	public static function processFrequencies ( ) 
	{
	  try {
				return  self::$_ALL_FREQUENCIES; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processFrequencyID ( $_value ) 
	{
		try {
			foreach( self::$_ALL_FREQUENCIES as $_key=> $_type ){
				if( strcmp($_type, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	
	public static function processFrequencyValue ( $_id )
	{
		try {
				foreach( self::$_ALL_FREQUENCIES as $_key=> $_type ){
					if( $_key == $_id )
						return $_type; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultFrequency ()
	{
		try {
				return  self::$_QUARTERLY; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	 
	public static function processFrequencyIcon ($_type) 
	{
		switch($_type) {			
			case self::$_DAILY:
				return 'daily_frequency';
			break;
			case self::$_WEEKLY:
				return 'weekly_frequency';
			break;
			case self::$_BI_WEEKLY:
				return 'bi_weekly_frequency';
			break;
			case self::$_MONTHLY:
				return 'monthly_frequency';
			break;
			case self::$_BI_MONTHLY:
				return 'bi_monthly_frequency';
			break; 
			case self::$_QUARTERLY:
				return 'quarterly_frequency';
			break;
			case self::$_FOUR_MONTHLY:
				return 'four_monthly_frequency';
			break;
			case self::$_HALF_YEARLY:
				return 'half_yearly_frequency';
			break;
			case self::$_YEARLY:
				return 'yearly_frequency';
			break;
			case self::$_OTHER_FREQUENCY:
				return 'other_frequency';
			break;
		}
	} 
	public static function processFrequencyDurationValue ($_type) 
	{
		switch($_type) {			
			case self::$_DAILY:
				return 1;
			break;
			case self::$_WEEKLY:
				return 7;
			break;
			case self::$_BI_WEEKLY:
				return 14;
			break;
			case self::$_MONTHLY:
				return 30;
			break;
			case self::$_BI_MONTHLY:
				return 60;
			break; 
			case self::$_QUARTERLY:
				return 90;
			break;
			case self::$_FOUR_MONTHLY:
				return 120;
			break;
			case self::$_HALF_YEARLY:
				return 180;
			break;
			case self::$_YEARLY:
				return 365;
			break; 
		}
	} 
}




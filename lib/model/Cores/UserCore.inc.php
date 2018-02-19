<?php 

Class UserCore {
   
   public static $_SUPER_ADMINISTRATOR = 1;
	public static $_ADMINISTRATOR = 2;
	public static $_AUTHOR = 3;
	public static $_EDITOR = 4;
	public static $_MODERATOR = 5; 
	public static $_ANONYMOUS = 6; 
	public static $_OTHER_ROLE = 7; 

	public static $_USER_ROLES = array ( 1 => 'Super Administrator', 2 => 'Administrator', 3 => 'Author', 4 => 'Editor', 5 => 'Moderator', 6  => 'Anonymous', 12 => 'Other Role');
	public static $_USER_LOGIN_ROLES = array ( 1 => 'Super Administrator', 2 => 'Administrator', 3 => 'Author', 4 => 'Editor', 5 => 'Moderator' );
	
	public static function processUserLoginRoles ( ) 
	{
		 try {
				return self::$_USER_LOGIN_ROLES; 
			} catch ( Exception $e ) {
			return $e; 
	  }   
	}
	public static function processUserRoles ( ) 
	{
		 try {
				return self::$_USER_ROLES; 
			} catch ( Exception $e ) {
			return $e; 
	  }   
	}
	
	public static function processUserRoleID ( $_value ) 
	{
		try {
			foreach( self::$_USER_ROLES as $_key=> $_userRole ){
				if( strcmp($_userRole, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $e ) {
			return null; 
		}
	}

	public static function processUserRoleValue ($_id )
	{
		try {
			foreach( self::$_USER_ROLES as $_key=> $_userRole ){
			  if( $_key == $_id )
					return $_userRole; 
			}
			return null;       
		} catch ( Exception $e ) {
			return null; 
		}
	}
	public static function processDefaultUserRole ( )
	{
		 try {
				return self::$_OPERATOR; 
			} catch ( Exception $e ) {
			return $e; 
	  }   
	}
	public static function processUserRoleIcon ($_role) 
	{
		switch($_role) {			
			case self::$_SUPER_ADMINISTRATOR:
				return 'super_administrator';
			break;
			case self::$_ADMINISTRATOR:
				return 'administrator';
			break;
			case self::$_AUTHOR:
				return 'author';
			break;
			case self::$_EDITOR:
				return 'editor';
			break;
			case self::$_MODERATOR:
				return 'moderator';
			break; 
			case self::$_ANONYMOUS:
				return 'anonymous';
			break; 
			case self::$_OTHER_ROLE:
				return 'other_role';
			break; 
		}
	}
	
	
	public static $_PENDING = 1;
	public static $_ACTIVE = 2;
	public static $_BLOCKED = 3;
	public static $_TERMINATED = 4;    
	public static $_DELETED = 5;    

	public static $_USER_STATUSS = array (1 => 'Pending', 2 => 'Active', 3 => 'Blocked', 4 => 'Terminated', 5 => 'Deleted');
	
	public static function processSystemUserStatuses ( ) 
	{
		return self::$_USER_STATUSS;
	}
	public static function processSystemUserStatusID ( $_value ) 
	{
		try {
			foreach( self::$_USER_STATUSS as $_key=> $_userStatus ) {
				if( strcmp($_userStatus, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $e ) {
			return null; 
		}
	}
	public static function processSystemUserStatusValue ($_id )
	{
		try {
			foreach( self::$_USER_STATUSS as $_key=> $_userStatus ) {
			  if( $_key == $_id )
					return $_userStatus; 
			}
			return 'Unkown';       
		} catch ( Exception $e ) {
			return 'Unkown'; 
		}
	}
	public static function processDefaultSystemUserStatus ( )
	{
		 try {
				return self::$_ACTIVE; 
			} catch ( Exception $e ) {
			return $e; 
	  }   
	}
	public static function processSystemUserStatusIcon ($_status) 
	{
		switch($_status) {		
			case self::$_PENDING:
				return 'pending';
			break;	
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
	
}

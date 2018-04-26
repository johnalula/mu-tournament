<?php 
class TeamCore {
 
	public static $_PENDING = 1;
	public static $_ACTIVE = 2;
	public static $_APPROVED = 3;
	public static $_REJECTED = 4;
	public static $_CONFIRMED = 5;
	public static $_QUALIFIED = 6;
	public static $_DISQUALIFIED = 7; 
	
	public static $_TEAM_STATUS = array ( 1 => "Pending", 2 => "Active", 3 => "Approved", 4 => "Rejected", 5 => "Confirmed", 6 => "Qualified", 7 => "Disqualified" );

	public static function processTeamStatuses() 
	{
		return self::$_TEAM_STATUS;
	}
	public static function processTeanStatusID ( $_value ) 
	{
		try {
			foreach( self::$_TEAM_STATUS as $_key=> $_status ) {
				if( strcmp($_status, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $e ) {
			return null; 
		}        
	}
	public static function processTeamStatusValue ( $_id )
	{
		try {
			foreach( self::$_TEAM_STATUS as $_key=> $_status ) {
				if( $_key == $_id )
					return $_status; 
			}
			return null; 
		} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultTeamStatus () 
	{
		return self::$_INITIATED;
	}
	public static function processTeamStatusIcon ($_status) 
	{
		switch($_status) {			
			case self::$_PENDING:
				return 'pending';
			break;
			case self::$_ACTIVE:
				return 'active';
			break; 
			case self::$_APPROVED:
				return 'approved';
			break; 
			case self::$_REJECTED:
				return 'not_played';
			break;
			case self::$_CONFIRMED:
				return 'played';
			break;
			case self::$_QUALIFIED:
				return 'confirmed';
			break;
			case self::$_DISQUALIFIED:
				return 'postpond';
			break; 
		}
	}  
	
}

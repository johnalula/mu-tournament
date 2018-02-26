<?php 
class TournamentCore {
 
	public static $_PENDING = 1;
	public static $_ACTIVE = 2;
	public static $_NOT_PLAYED = 3;
	public static $_PLAYED = 4;
	public static $_POSTPOND = 5;
	public static $_ROUNDING = 6;
	public static $_FINALIZED = 7;
	public static $_COMPLETED = 8;
	public static $_TOURNAMENT_STATUS = array ( 1 => "Pending", 2 => "Active", 3 => "Not Playe", 4 => "Played", 5 => "Postpond", 6 => "Rounding", 7 => "Finalized", 8 => "Completed" );

	public static function processTournamentStatuses() 
	{
		return self::$_TOURNAMENT_STATUS;
	}
	public static function processTournamentStatusID ( $_value ) 
	{
		try {
			foreach( self::$_TOURNAMENT_STATUS as $_key=> $_status ) {
				if( strcmp($_status, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $e ) {
			return null; 
		}        
	}
	public static function processTournamentStatusValue ( $_id )
	{
		try {
			foreach( self::$_TOURNAMENT_STATUS as $_key=> $_status ) {
				if( $_key == $_id )
					return $_status; 
			}
			return null; 
		} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultTournamentStatus () 
	{
		return self::$_PENDING;
	}
	public static function processTournamentStatusIcon ($_status) 
	{
		switch($_status) {			
			case self::$_PENDING:
				return 'pending';
			break;
			case self::$_ACTIVE:
				return 'active';
			break; 
			case self::$_NOT_PLAYED:
				return 'not_played';
			break;
			case self::$_PLAYED:
				return 'played';
			break;
			case self::$_POSTPOND:
				return 'postpond';
			break;
			case self::$_ROUNDING:
				return 'rounding';
			break;
			case self::$_FINALIZED:
				return 'finalized';
			break;
			case self::$_COMPLETED:
				return 'completed';
			break;
			default:
				return 'other';
			break;
		}
	} 
	public static function processTaskStatus ($_status, $_processStatus=null) 
	{
		switch($_status) {			
			case self::$_INITIATED: 
				return 'initiated';
			break;
			case self::$_ACTIVE: 
				return 'active';
			break; 
			case self::$_PENDING: 
				return 'pending';
			break; 
			case self::$_APPROVED:
				if(($_processStatus == self::$_ACTIVE || $_processStatus == self::$_APPROVED) ) {
					return 'pending';
				}
				return 'approved';
			break; 
			case self::$_COMPLETED:
				if(($_processStatus == self::$_COMPLETED) ) {
					return 'completed';
				}
				return 'pending';
			break; 
		}
	} 
	public static function processTaskProcessStatusIcon ($_status, $_approvalStatus=null) 
	{
		switch($_approvalStatus) {			
			case self::$_INITIATED: 
				return 'initiated';
			break;
			case self::$_PENDING: 
				return 'pending'; 
			break; 
			case self::$_ACTIVE:
				if(!is_null($_status) && $_status == self::$_APPROVED ) {
					return 'approved';
				}
				return 'pending';
			break;   
			case self::$_APPROVED:
				if(!is_null($_status) && $_status == self::$_COMPLETED ) {
					return 'approved';
				}
				return 'pending';
			break;   
		}
	} 
	public static function processTaskApprovalStatusIcon ($_status, $_processStatus=null) 
	{
		switch($_status) {			
			case self::$_INITIATED: 
				return 'initiated';
			break;
			case self::$_ACTIVE:
				if(!is_null($_status) && $_processStatus==self::$_PENDING ) {
					return 'pending';
				} 
			break; 
			case self::$_APPROVED:
				if(($_processStatus==self::$_ACTIVE || $_processStatus == self::$_APPROVED) ) {
					return 'active';
				}
			break; 
			case self::$_COMPLETED:
				if(($_processStatus==self::$_APPROVED) ) {
					return 'completed';
				} 
				return 'active';
			break; 
		}
	}
	
	/************************************************/
	
	public static $_SPRINTS = 1;
	public static $_MIDDLE_DISTANCE = 2;
	public static $_LONG_DISTANCE = 3;
	public static $_HARDLES = 4;
	public static $_STEEPLE_CHASE = 5; 
	public static $_RELAY = 6;
	public static $_JUMPS = 7;
	public static $_THROWS = 8;
	public static $_HALF_MARATHON = 9;
	public static $_MARATHON = 10;
	public static $_OTHER_DISTANCE = 11;
	public static $_DISTANCE_TYPES = array ( 1 => "Sprints", 2 => "Middle Distance", 3 => "Long Distance", 4 => "Hardless", 5 => "Steeplechase", 6 => "Relay",7 => "Jumps", 8 => "Throws", 9 => "Half Marathon", 10 => "Marathon", 11 => "Other" );

	public static function processDistanceTypes() 
	{
		return self::$_DISTANCE_TYPES;
	}
	public static function processDistanceTypeID ( $_value ) 
	{
		try {
			foreach( self::$_DISTANCE_TYPES as $_key => $_distance ) {
				if( strcmp($_distance, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $_e ) {
			return null; 
		}        
	}
	public static function processDistanceTypeValue ( $_id )
	{
		try {
			foreach( self::$_DISTANCE_TYPES as $_key => $_distance ) {
				if( $_key == $_id )
					return $_distance; 
			}
			return null; 
		} catch ( Exception $_e ) {
			return null; 
		}    
	}
	public static function processDefaultDistanceType ( )
	{
		 try {
				return self::$_OTHER_DISTANCE; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	public static function processDistanceTypeIcon ($_distance) 
	{
		switch($_distance) {			
			case self::$_SPRINTS:
				return 'sprints';
			break;
			case self::$_MIDDLE_DISTANCE:
				return 'middle_distance';
			break;
			case self::$_LONG_DISTANCE:
				return 'long_distance';
			break; 
			case self::$_HARDLES:
				return 'hardles';
			break;
			case self::$_STEEPLE_CHASE:
				return 'steeplechase';
			break;
			case self::$_RELAY:
				return 'relay';
			break;
			case self::$_JUMPS:
				return 'jumps';
			break;
			case self::$_THROWS:
				return 'throws';
			break;
			case self::$_HALF_MARATHON:
				return 'half_marathon';
			break;
			case self::$_MARATHON:
				return 'marathon';
			break;
			default:
				return 'other';
			break;
		}
	} 
	public static function processManuscriptCodeID ( $_codeNumber )
	{
		try {
			
			$_currentYear = date('y', time());
			return 'IJBDS-'.$_currentYear.'-'.$_codeNumber; 
			
		} catch ( Exception $e ) {
			return null; 
		}    
	}
	
	
	/*********************************************/
	
	public static $_ROUND = 1;
	public static $_QUARTER_FINAL = 2;
	public static $_SEMI_FINAL = 3;
	public static $_FINAL = 4;
	public static $_OTHER_ROUND = 5; 

	public static $_ROUND_TYPES = array ( 1 => 'Round', 2 => 'Quarter Final', 3 => 'Semi Final', 4 => 'Final', 5 => 'None');
	
	public static function processRounds ( ) 
	{
		 try {
				return self::$_ROUND_TYPES; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	
	public static function processRoundID ( $_value ) 
	{
		try {
			foreach( self::$_ROUND_TYPES as $_key=> $_round ){
				if( strcmp($_round, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $_e ) {
			return null; 
		}
	}

	public static function processRoundValue ($_id )
	{
		try {
			foreach( self::$_ROUND_TYPES as $_key=> $_round ){
			  if( $_key == $_id )
					return $_round; 
			}
			return null;       
		} catch ( Exception $_e ) {
			return null; 
		}
	}
	public static function processDefaultRound ( )
	{
		 try {
				return self::$_ROUND; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	public static function processUserRoleIcon ($_round) 
	{
		switch($_round) {			
			case self::$_ROUND:
				return 'Round';
			break;
			case self::$_QUARTER_FINAL:
				return 'Quarter Final';
			break;
			case self::$_SEMI_FINAL:
				return 'Semi Final';
			break;
			case self::$_FINAL:
				return 'Final';
			break;
			case self::$_OTHER_ROUND:
				return 'None';
			break; 
		}
	}
	/*********************************************/
	
	public static $_TRACK = 1;
	public static $_FIELD = 2;
	public static $_ROAD = 3;
	public static $_OTHER_EVENT = 4; 

	public static $_EVENT_TYPES = array ( 1 => 'Track Event', 2 => 'Field Event', 3 => 'Road EVent', 4 =>  'None');
	
	public static function processEventTypes ( ) 
	{
		 try {
				return self::$_EVENT_TYPES; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	
	public static function processEventTypeID ( $_value ) 
	{
		try {
			foreach( self::$_EVENT_TYPES as $_key => $_event ){
				if( strcmp($_event, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $_e ) {
			return null; 
		}
	}

	public static function processEventTypeValue ($_id )
	{
		try {
			foreach( self::$_EVENT_TYPES as $_key => $_event ){
			  if( $_key == $_id )
					return $_event; 
			}
			return null;       
		} catch ( Exception $_e ) {
			return null; 
		}
	}
	public static function processDefaultEventType ( )
	{
		 try {
				return self::$_TRACK; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	public static function processEventTypeIcon ($_event) 
	{
		switch($_event) {			
			case self::$_TRACK:
				return 'Track Event';
			break;
			case self::$_FIELD:
				return 'Field Event';
			break;
			case self::$_ROAD:
				return 'Road Event';
			break;
			case self::$_OTHER_EVENT:
				return 'Other EVEnt';
			break; 
		}
	}
	

}

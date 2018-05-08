<?php 
class TournamentCore {
 
	public static $_INITIATED = 1;
	public static $_PENDING = 2;
	public static $_ACTIVE = 3;
	public static $_APPROVED = 4;
	public static $_NOT_PLAYED = 5;
	public static $_PLAYED = 6;
	public static $_CONFIRMED = 7;
	public static $_POSTPOND = 8;
	public static $_ROUNDING = 9;
	public static $_FINALIZED = 10;
	public static $_COMPLETED = 11;
	
	public static $_TOURNAMENT_STATUS = array ( 1 => "Initiated", 2 => "Pending", 3 => "Active", 4 => "Approved", 5 => "Not Played", 6 => "Played", 7 => "Confirmed", 8 => "Postpond", 9 => "Rounding", 10 => "Finalized", 11 => "Completed" );

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
		return self::$_INITIATED;
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
			case self::$_APPROVED:
				return 'approved';
			break; 
			case self::$_NOT_PLAYED:
				return 'not_played';
			break;
			case self::$_PLAYED:
				return 'played';
			break;
			case self::$_CONFIRMED:
				return 'confirmed';
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
	public static $_HURDLES = 4;
	public static $_STEEPLE_CHASE = 5; 
	public static $_RELAY = 6;
	public static $_JUMPS = 7;
	public static $_THROWS = 8;
	public static $_CROSS_COUNTRY = 9;
	public static $_HALF_MARATHON = 10;
	public static $_MARATHON = 11;
	public static $_WHEELCHAIR_RACING = 12;
	public static $_OTHER_DISTANCE = 13;
	
	public static $_DISTANCE_TYPES = array ( 1 => "Sprint", 2 => "Middle Distance", 3 => "Long Distance", 4 => "Hurdless", 5 => "Steeplechase", 6 => "Relay",7 => "Jumps", 8 => "Throws", 9 => "Cross Country", 10 => "Half Marathon", 11 => "Marathon", 12 => "Wheelchair Racing", 13 => "Other" );

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
				return 'sprint';
			break;
			case self::$_MIDDLE_DISTANCE:
				return 'middle_distance';
			break;
			case self::$_LONG_DISTANCE:
				return 'long_distance';
			break; 
			case self::$_HURDLES:
				return 'hurdles';
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
			case self::$_CROSS_COUNTRY:
				return 'cross_country';
			break;
			case self::$_HALF_MARATHON:
				return 'half_marathon';
			break;
			case self::$_MARATHON:
				return 'marathon';
			break;
			case self::$_WHEELCHAIR_RACING:
				return 'wheelchair_racing';
			break;
			default:
				return 'other';
			break;
		}
	}  
	public static function processDistanceTypeAlias ($_distance) 
	{
		switch($_distance) {			
			case self::$_SPRINTS:
				return 'Running';
			break;
			case self::$_MIDDLE_DISTANCE:
				return 'Running';
			break;
			case self::$_LONG_DISTANCE:
				return 'Running';
			break; 
			case self::$_HURDLES:
				return 'Hurdles';
			break;
			case self::$_STEEPLE_CHASE:
				return 'Steeplechase';
			break;
			case self::$_RELAY:
				return 'Relay';
			break;
			case self::$_JUMPS:
				return 'Jumps';
			break;
			case self::$_THROWS:
				return 'Throws';
			break;
			case self::$_CROSS_COUNTRY:
				return 'Running';
			break;
			case self::$_HALF_MARATHON:
				return 'Running';
			break;
			case self::$_MARATHON:
				return 'Running';
			break;
			case self::$_WHEELCHAIR_RACING:
				return 'wheelchair_racing';
			break;
			default:
				return false;
			break;
		}
	}  
	public static function processTypeExclusion ($_distance) 
	{
		switch($_distance) {			
			case self::$_SPRINTS:
				return true;
			break;
			case self::$_MIDDLE_DISTANCE:
				return true;
			break;
			case self::$_LONG_DISTANCE:
				return true;
			break; 
			case self::$_HURDLES:
				return true;
			break;
			case self::$_STEEPLE_CHASE:
				return true;
			break;
			case self::$_RELAY:
				return true;
			break;
			case self::$_JUMPS:
				return true;
			break;
			case self::$_THROWS:
				return true;
			break;
			case self::$_CROSS_COUNTRY:
				return true;
			break;
			case self::$_HALF_MARATHON:
				return true;
			break;
			case self::$_MARATHON:
				return true;
			break;
			case self::$_WHEELCHAIR_RACING:
				return true;
			break;
			default:
				return false;
			break;
		}
	}  
	public static function processJumpExclusion ($_distance) 
	{
		switch($_distance) {	 
			case self::$_JUMPS:
				return true;
			break; 
			default:
				return false;
			break;
		}
	}  
	public static function processThrowExclusion ($_distance) 
	{
		switch($_distance) {	 
			case self::$_JUMPS:
				return true;
			break; 
			default:
				return false;
			break;
		}
	}  
	
	/************************************************/
	
	public static $_RUNNING_ATHLETICS = 1;
	public static $_HURDLE_ATHLETICS = 2;
	public static $_STEEPLE_CHASE_ATHLETICS = 3; 
	public static $_RELAY_ATHLETICS = 4;
	public static $_JUMP_ATHLETICS = 5;
	public static $_THROW_ATHLETICS = 6;
	public static $_OTHER_ATHLETICS = 7;
	
	public static $_ATHLETICS_TYPES = array ( 1 => "Running", 2  => "Hurdless", 3 => "Steeplechase", 4 => "Relay", 5 => "Jumps", 6 => "Throws", 7 => "Other" );

	public static function processAthleticsTypes() 
	{
		return self::$_ATHLETICS_TYPES;
	}
	public static function processAthleticsTypeID ( $_value ) 
	{
		try {
			foreach( self::$_ATHLETICS_TYPES as $_key => $_distance ) {
				if( strcmp($_distance, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $_e ) {
			return null; 
		}        
	}
	public static function processAthleticsTypeValue ( $_id )
	{
		try {
			foreach( self::$_ATHLETICS_TYPES as $_key => $_distance ) {
				if( $_key == $_id )
					return $_distance; 
			}
			return null; 
		} catch ( Exception $_e ) {
			return null; 
		}    
	}
	public static function processDefaultAthleticsType ( )
	{
		 try {
				return self::$_RUNNING; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	
	public static function processAthleticsTypeIcon ($_distance) 
	{
		switch($_distance) {			
			case self::$_RUNNING_ATHLETICS:
				return 'running';
			break; 
			case self::$_HURDLE_ATHLETICS:
				return 'hurdles';
			break;
			case self::$_STEEPLE_CHASE_ATHLETICS:
				return 'steeplechase';
			break;
			case self::$_RELAY_ATHLETICS:
				return 'relay';
			break;
			case self::$_JUMP_ATHLETICS:
				return 'jumps';
			break;
			case self::$_THROW_ATHLETICS:
				return 'throws';
			break; 
			default:
				return 'other';
			break;
		}
	}  
	
	/*********************************************/
	
	public static $_ROUND = 1;
	public static $_QUARTER_FINAL = 2;
	public static $_SEMI_FINAL = 3;
	public static $_FINAL = 4;
	public static $_OTHER_ROUND = 5; 

	public static $_ROUND_TYPES = array ( 1 => 'Round', 2 => 'Quarter Final', 3 => 'Semi Final', 4 => 'Final', 5 => 'Other');
	
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
	
	public static $_FIN = 1;
	public static $_QFD = 2;
	public static $_DNS = 3;
	public static $_DNF = 4;
	public static $_DISQ = 5;
	public static $_OTHER_STATUS = 6; 

	public static $_COMPETITION_STATUSES = array ( 1 => 'Finished', 2 => 'Qualified', 3 => 'Did Not Start', 4 => 'Did Not Finish', 5 => 'Disqualified', 6 => 'Other Status');
	
	public static function processCompetitionStatuses ( ) 
	{
		 try {
				return self::$_ROUND_TYPES; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	
	public static function processCompetitionStatusID ( $_value ) 
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

	public static function processCompetitionStatusValue ($_id )
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
	public static function processDefaultCompetitionStatus ( )
	{
		 try {
				return self::$_ROUND; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	public static function processCompetitionStatusAlias ($_round) 
	{
		switch($_round) {			
			case self::$_FIN:
				return 'FIN';
			break;
			case self::$_QFD:
				return 'QFD';
			break;
			case self::$_DNF:
				return 'DNF';
			break;
			case self::$_DNS:
				return 'DNS';
			break;
			case self::$_DISQ:
				return 'DISQ';
			break;
			case self::$_OTHER_STATUS:
				return 'OTHER';
			break; 
		}
	}
	public static function processCompetitionStatusIcon ($_round) 
	{
		switch($_round) {			
			case self::$_FIN:
				return 'FIN';
			break;
			case self::$_QFD:
				return 'QFD';
			break;
			case self::$_DNF:
				return 'DNF';
			break;
			case self::$_DNS:
				return 'DNS';
			break;
			case self::$_DISQ:
				return 'DISQ';
			break;
			case self::$_OTHER_STATUS:
				return 'OTHER';
			break; 
		}
	}
	/*********************************************/
	
	public static $_ONE = 1;
	public static $_TWO = 2;
	public static $_THREE = 3;
	public static $_FOUR = 4;
	public static $_FIVE = 5; 
	public static $_SIX = 6;
	public static $_SEVEN = 7;
	public static $_EIGHT = 8;
	public static $_NINE = 9;
	public static $_TEN = 10; 
	public static $_ELEVEN = 11; 
	public static $_TWELVE = 12; 
	public static $_THIRTEEN = 13; 
	public static $_FOURTEEN = 14; 
	public static $_FIFTEEN = 15; 
	public static $_SIXTEEN = 16; 

	public static $_ROUND_NUMBERS = array ( 1 => 'One', 2 => 'Two', 3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six', 7 => 'Seven', 8 => 'Eight', 9 => 'Nine', 10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve', 13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen', 16 => 'Sixteen');
	
	public static function processRoundNumbers ( ) 
	{
		 try {
				return self::$_ROUND_NUMBERS; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	
	public static function processRoundNumberID ( $_value ) 
	{
		try {
			foreach( self::$_ROUND_NUMBERS as $_key=> $_round ){
				if( strcmp($_round, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $_e ) {
			return null; 
		}
	}

	public static function processRoundNumberValue ($_id )
	{
		try {
			foreach( self::$_ROUND_NUMBERS as $_key=> $_round ){
			  if( $_key == $_id )
					return $_round; 
			}
			return null;       
		} catch ( Exception $_e ) {
			return null; 
		}
	}
	public static function processDefaultRoundNumber ( )
	{
		 try {
				return self::$_ONE; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	public static function processRoundNumberIcon ($_round) 
	{
		switch($_round) {			
			case self::$_ONE:
				return 'one';
			break;
			case self::$_TWO:
				return 'two';
			break;
			case self::$_THREE:
				return 'three';
			break;
			case self::$_FOUR:
				return 'four';
			break;
			case self::$_FIVE:
				return 'five';
			break; 
			case self::$_SIX:
				return 'six';
			break;
			case self::$_SEVEN:
				return 'seven';
			break;
			case self::$_EIGHT:
				return 'eight';
			break;
			case self::$_NINE:
				return 'nine';
			break;
			case self::$_TEN:
				return 'ten';
			break; 
			case self::$_ELEVEN:
				return 'eleven';
			break; 
			case self::$_TWELVE:
				return 'twelve';
			break;
			case self::$_THIRTEEN:
				return 'thirteen';
			break;
			case self::$_FOURTEEN:
				return 'fourteen';
			break;
			case self::$_FIFTEEN:
				return 'fifteen';
			break;
			case self::$_SIXTEEN:
				return 'sixteen';
			break; 
		}
	}
	/*********************************************/
	
	public static $_GROUP_ONE = 1;
	public static $_GROUP_TWO = 2;
	public static $_GROUP_THREE = 3;
	public static $_GROUP_FOUR = 4;
	public static $_GROUP_FIVE = 5; 
	public static $_GROUP_SIX = 6;
	public static $_GROUP_SEVEN = 7;
	public static $_GROUP_EIGHT = 8;
	public static $_GROUP_NINE = 9;
	public static $_GROUP_TEN = 10; 
	public static $_GROUP_ELEVEN = 11; 
	public static $_GROUP_TWELVE = 12; 
	public static $__GROUPTHIRTEEN = 13; 
	public static $_GROUP_FOURTEEN = 14; 
	public static $_GROUP_FIFTEEN = 15; 
	public static $_GROUP_SIXTEEN = 16; 

	public static $_GROUP_NUMBERS = array ( 1 => 'One', 2 => 'Two', 3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six', 7 => 'Seven', 8 => 'Eight', 9 => 'Nine', 10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve', 13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen', 16 => 'Sixteen');
	
	public static function processGroupNumbers ( ) 
	{
		 try {
				return self::$_GROUP_NUMBERS; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	
	public static function processGroupNumberID ( $_value ) 
	{
		try {
			foreach( self::$_GROUP_NUMBERS as $_key=> $_group ){
				if( strcmp($_group, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $_e ) {
			return null; 
		}
	}

	public static function processGroupNumberValue ($_id )
	{
		try {
			foreach( self::$_GROUP_NUMBERS as $_key=> $_group ){
			  if( $_key == $_id )
					return $_group; 
			}
			return null;       
		} catch ( Exception $_e ) {
			return null; 
		}
	}
	public static function processDefaultGroupNumber ( )
	{
		 try {
				return self::$_GROUP_ONE; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	public static function processGroupNumberIcon ($_round) 
	{
		switch($_round) {			
			case self::$_GROUP_ONE:
				return 'one';
			break;
			case self::$_GROUP_TWO:
				return 'two';
			break;
			case self::$_GROUP_THREE:
				return 'three';
			break;
			case self::$_GROUP_FOUR:
				return 'four';
			break;
			case self::$_GROUPFIVE:
				return 'five';
			break; 
			case self::$_GROUP_SIX:
				return 'six';
			break;
			case self::$_GROUP_SEVEN:
				return 'seven';
			break;
			case self::$_GROUP_EIGHT:
				return 'eight';
			break;
			case self::$_GROUP_NINE:
				return 'nine';
			break;
			case self::$_GROUP_TEN:
				return 'ten';
			break; 
			case self::$_GROUP_ELEVEN:
				return 'eleven';
			break; 
			case self::$_GROUP_TWELVE:
				return 'twelve';
			break;
			case self::$_GROUP_THIRTEEN:
				return 'thirteen';
			break;
			case self::$_GROUP_FOURTEEN:
				return 'fourteen';
			break;
			case self::$_GROUP_FIFTEEN:
				return 'fifteen';
			break;
			case self::$_GROUP_SIXTEEN:
				return 'sixteen';
			break; 
		}
	}
	/*********************************************/
	
	public static $_TRACK = 1;
	public static $_FIELD = 2;
	public static $_ROAD = 3;
	public static $_COMBINED = 4; 

	public static $_EVENT_TYPES = array ( 1 => 'Track', 2 => 'Field', 3 => 'Road', 4 =>  'Combined');
	
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
			case self::$_COMBINED:
				return 'Combined EVEnt';
			break; 
		}
	}
	
	/*********************************************/
	
	public static $_SINGLE = 1;
	public static $_PAIR = 2;
	public static $_TRIPLE = 3;
	public static $_MULTIPLE = 4;
	public static $_OTHER_PLAYING = 5; 

	public static $_PLAYER_MODE = array ( 1 => 'Single Player', 2 => 'Pair Player', 3 => 'Triple Players', 4 => 'Multiple Players', 5 =>  'Other');
	
	public static function processPlayerModes ( ) 
	{
		 try {
				return self::$_PLAYER_MODE; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	
	public static function processPlayerModeID ( $_value ) 
	{
		try {
			foreach( self::$_PLAYER_MODE as $_key => $_event ){
				if( strcmp($_event, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $_e ) {
			return null; 
		}
	}

	public static function processPlayerModeValue ($_id )
	{
		try {
			foreach( self::$_PLAYER_MODE as $_key => $_event ){
			  if( $_key == $_id )
					return $_event; 
			}
			return null;       
		} catch ( Exception $_e ) {
			return null; 
		}
	}
	public static function processDefaultPlayerMode ( )
	{
		 try {
				return self::$_OTHER_PLAYING; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	public static function processPlayerModeIcon ($_event) 
	{
		switch($_event) {			
			case self::$_SINGLE:
				return 'single_player';
			break;
			case self::$_PAIR:
				return 'pair_players';
			break;
			case self::$_TRIPLE:
				return 'pair_players';
			break;
			case self::$_MULTIPLE:
				return 'multiple_players';
			break;
			case self::$_OTHER_EVENT:
				return 'none';
			break; 
		}
	}
	
	/*********************************************/
	
	public static $_PAIR_TEAM = 1;
	public static $_MULTIPLE_TEAM = 2;

	public static $_CONTESTANT_TEAM_MODES = array ( 1 => 'Pair Team', 2 => 'Multiple Teams' );
	
	public static function processContestantTeamModes ( ) 
	{
		 try {
				return self::$_CONTESTANT_TEAM_MODES; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	
	public static function processContestantTeamModeID ( $_value ) 
	{
		try {
			foreach( self::$_CONTESTANT_TEAM_MODES as $_key => $_event ){
				if( strcmp($_event, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $_e ) {
			return null; 
		}
	}

	public static function processContestantTeamModeValue ($_id )
	{
		try {
			foreach( self::$_CONTESTANT_TEAM_MODES as $_key => $_event ){
			  if( $_key == $_id )
					return $_event; 
			}
			return null;       
		} catch ( Exception $_e ) {
			return null; 
		}
	}
	public static function processDefaultContestantTeamMode ( )
	{
		 try {
				return self::$_OTHER_MODE; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	public static function processContestantTeamModeIcon ($_event) 
	{
		switch($_event) {			
			case self::$_PAIR_TEAM:
				return 'pair_team';
			break;
			case self::$_MULTIPLE_TEAM:
				return 'multiple_players';
			break;
			case self::$_OTHER_MODE:
				return 'none';
			break; 
		}
	}
	
	/*********************************************/
	
	public static $_LONG = 1;
	public static $_TRIPLE_JUMP = 2;
	public static $_HIGH = 3;
	public static $_POLE_VAULT = 4;

	public static $_JUMP_TYPES = array ( 1 => 'Long Jump', 2 => 'Triple Jump', 3 =>  'High Jump', 4 =>  'Pole Vault');
	
	public static function processJumpTypes ( ) 
	{
		 try {
				return self::$_JUMP_TYPES; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	
	public static function processJumpTypeID ( $_value ) 
	{
		try {
			foreach( self::$_JUMP_TYPES as $_key => $_event ){
				if( strcmp($_event, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $_e ) {
			return null; 
		}
	}

	public static function processJumpTypeValue ($_id )
	{
		try {
			foreach( self::$_JUMP_TYPES as $_key => $_event ){
			  if( $_key == $_id )
					return $_event; 
			}
			return null;       
		} catch ( Exception $_e ) {
			return null; 
		}
	}
	public static function processDefaultJumpType ( )
	{
		 try {
				return self::$_METER; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	} 
	public static function processJumpTypeIcon ($_event) 
	{
		switch($_event) {			
			case self::$_LONG:
				return 'long_jump';
			break;
			case self::$_TRIPLE_JUMP:
				return 'triple_jump';
			break;
			case self::$_HIGH:
				return 'high_jump';
			break;
			case self::$_POLE_VAULT:
				return 'pole_vault';
			break; 
		}
	}
	/*********************************************/
	
	public static $_SHOT_PUT = 1;
	public static $_DISCUS = 2;
	public static $_HAMMER = 3;
	public static $_JAVLINE = 4; 

	public static $_THROW_TYPES = array ( 1 => 'Shot Put', 2 => 'Discus',3 =>  'Hammer', 4 =>  'Javline' );
	
	public static function processThrowTypes ( ) 
	{
		 try {
				return self::$_THROW_TYPES; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	
	public static function processThrowTypeID ( $_value ) 
	{
		try {
			foreach( self::$_THROW_TYPES as $_key => $_event ){
				if( strcmp($_event, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $_e ) {
			return null; 
		}
	}

	public static function processThrowTypeValue ($_id )
	{
		try {
			foreach( self::$_THROW_TYPES as $_key => $_event ){
			  if( $_key == $_id )
					return $_event; 
			}
			return null;       
		} catch ( Exception $_e ) {
			return null; 
		}
	}
	public static function processDefaultThrowType ( )
	{
		 try {
				return self::$_SHOT_PUT; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	 
	public static function processThrowTypeIcon ($_type) 
	{
		switch($_type) {			
			case self::$_SHOT_PUT:
				return 'shot_put';
			break;
			case self::$_DISCUS:
				return 'discus';
			break;
			case self::$_HAMMER:
				return 'hammer';
			break;
			case self::$_JAVLINE:
				return 'javline';
			break;  
		}
	}
	/*********************************************/
	
	public static $_METER = 1;
	public static $_KILO_METERL = 2;
	public static $_OTHER_MEASUREMENT = 3; 

	public static $_DISTANCE_MEASUREMENTS = array ( 1 => 'Meter', 2 => 'Kilometer',4 =>  'Other');
	
	public static function processDistanceMeasurements ( ) 
	{
		 try {
				return self::$_DISTANCE_MEASUREMENTS; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	
	public static function processDistanceMeasurementID ( $_value ) 
	{
		try {
			foreach( self::$_DISTANCE_MEASUREMENTS as $_key => $_event ){
				if( strcmp($_event, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $_e ) {
			return null; 
		}
	}

	public static function processDistanceMeasurementValue ($_id )
	{
		try {
			foreach( self::$_DISTANCE_MEASUREMENTS as $_key => $_event ){
			  if( $_key == $_id )
					return $_event; 
			}
			return null;       
		} catch ( Exception $_e ) {
			return null; 
		}
	}
	public static function processDefaultDistanceMeasurement ( )
	{
		 try {
				return self::$_METER; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	public static function processDistanceMeasurementAlias ($_event) 
	{
		switch($_event) {			
			case self::$_METER:
				return 'M';
			break;
			case self::$_KILO_METERL:
				return 'KM';
			break;
			case self::$_OTHER_MEASUREMENT:
				return 'other';
			break; 
		}
	}
	public static function processDistanceMeasurementIcon ($_event) 
	{
		switch($_event) {			
			case self::$_METER:
				return 'single_player';
			break;
			case self::$_KILO_METERL:
				return 'pair_players';
			break;
			case self::$_OTHER_MEASUREMENT:
				return 'other';
			break; 
		}
	}
	


/************************************************/

	public static $_MEN = 1; 
	public static $_WOMEN = 2; 
	public static $_BOTH_GENDER = 3; 
	public static $_MIXED = 4; 
	
	public static $_GENDERS = array ( 1 => "Men", 2 => "Women", 3 => "Both Gender", 4 => "Mixed" );
	public static $_PLAYER_GENDERS = array ( 1 => "Men", 2 => "Women");
	
	public static function processPlayerGender ( ) 
	{
	  try {
				return  self::$_PLAYER_GENDERS; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processGenders ( ) 
	{
	  try {
				return  self::$_GENDERS; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processGenderID ( $_value ) 
	{
		try {
			foreach( self::$_GENDERS as $_key => $_gender ) {
				if( strcmp($_gender, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	
	public static function processGenderValue ( $_id )
	{
		try {
				foreach( self::$_GENDERS as $_key => $_gender ) {
					if( $_key == $_id )
						return $_gender; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultGender ()
	{
		try {
				return  self::$_MEN; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	public static function processGenderAlias ($_gender)
	{
		switch($_gender) {			
			case self::$_MEN:
				return 'M';
			break;	
			case self::$_WOMEN:
				return 'W';
			break; 
			case self::$_BOTH_GENDER:
				return 'Both';
			break; 
			case self::$_MIXED:
				return 'MX';
			break; 
		}
	} 
/************************************************/

	public static $_FIRST_ROUND = 1; 
	public static $_NEXT_ROUND = 2; 
	public static $_QUALIFIED_ROUND = 3; 
	public static $_FINAL_ROUND = 4; 
	public static $_PLAY_OFF = 5; 
	
	public static $_ROUND_MODES = array ( 1 => "First Round", 2 => "Next Round", 3 => "Qualified Round", 4 => "Final Round", 5 => "Play Off" );
	
	public static function processMatchRoundModes ( ) 
	{
	  try {
				return  self::$_ROUND_MODES; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	} 
	public static function processMatchRoundModeID ( $_value ) 
	{
		try {
			foreach( self::$_ROUND_MODES as $_key => $_round ) {
				if( strcmp($_round, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	
	public static function processMatchRoundModeValue ( $_id )
	{
		try {
				foreach( self::$_ROUND_MODES as $_key => $_round ) {
					if( $_key == $_id )
						return $_round; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultMatchRoundMode ()
	{
		try {
				return  self::$_FIRST_ROUND; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	public static function processMatchRoundModeAlias ($_round)
	{
		switch($_round) {			
			case self::$_FIRST_ROUND:
				return 'first_round';
			break;	
			case self::$_NEXT_ROUND:
				return 'next_round';
			break; 
			case self::$_QUALIFIED_ROUND:
				return 'qualified_round';
			break;  
			case self::$_FINAL_ROUND:
				return 'final_round';
			break;  
			case self::$_PLAY_OFF:
				return 'play_off';
			break;  
		}
	} 
	
	/************************************************/
	
	public static $_POINT_ORDER = 1; 
	public static $_POSITION_ORDER = 2; 
	public static $_TIME_ORDER = 3; 
	public static $_OTHER_ORDER = 4; 
	
	public static $_RESULT_RANKING_MODES = array ( 1 => "Point Order", 2 => "Position Order", 3 => "Time Order", 4 => "Other Order" );
	
	public static function processResultRankingModes ( ) 
	{
	  try {
				return  self::$_RESULT_RANKING_MODES; 
			} catch ( Exception $_e ) {
			return null; 
	  }        
	}
	public static function processResultRankingModeID ( $_value ) 
	{
		try {
			foreach( self::$_RESULT_RANKING_MODES as $_key => $_order ) {
				if( strcmp($_order, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $_e ) {
			return null; 
		}        
	}
	
	public static function processResultRankingModeValue ( $_id )
	{
		try {
				foreach( self::$_RESULT_RANKING_MODES as $_key => $_order ) {
					if( $_key == $_id )
						return $_order; 
			}
			return null; 
			} catch ( Exception $_e ) {
			return null; 
		}    
	}
	public static function processDefaultResultRankingMode ()
	{
		try {
				return  self::$_POINT_ORDER; 
			} catch ( Exception $_e ) {
			return null; 
	  }     
	}
	public static function processResultRankingModeIcon ($_order)
	{
		switch($_order) {			
			case self::$_POINT_ORDER:
				return 'point_order';
			break;	
			case self::$_POSITION_ORDER:
				return 'position_order';
			break; 
			case self::$_TIME_ORDER:
				return 'time_order';
			break; 
			case self::$_OTHER_ORDER:
				return 'other_order';
			break; 
		}
	}
	public static function processResultRankingModeAlias ($_order)
	{
		switch($_order) {			
			case self::$_POINT_ORDER:
				return 'POTOR';
			break;	
			case self::$_POSITION_ORDER:
				return 'POSOR';
			break; 
			case self::$_TIME_ORDER:
				return 'TMOR';
			break; 
			case self::$_OTHER_ORDER:
				return 'OTOR';
			break; 
		}
	}
	
/************************************************/

	public static function makeSportGameName ($_event) 
	{
		switch($_event) {			
			case self::$_METER:
				return 'M';
			break;
			case self::$_KILO_METERL:
				return 'KM';
			break;
			case self::$_OTHER_MEASUREMENT:
				return 'other';
			break; 
		}
	}
	public static function makeSportGameAlias ($_gameType, $_gameDistance, $_measurement) 
	{
		switch($_event) {			
			case self::$_METER:
				return 'M';
			break;
			case self::$_KILO_METERL:
				return 'KM';
			break;
			case self::$_OTHER_MEASUREMENT:
				return 'other';
			break; 
		}
	}
}

<?php 
class TournamentCore {
 
	public static $_INITIATED = 1;
	public static $_PENDING = 2;
	public static $_ACTIVE = 3;
	public static $_APPROVED = 4;
	public static $_QUALIFIED = 5;
	public static $_DISQUALIFIED = 6;
	public static $_NOT_PLAYED = 7;
	public static $_PLAYED = 8;
	public static $_CONFIRMED = 9;
	public static $_POSTPOND = 10;
	public static $_ROUNDING = 11;
	public static $_FINALIZED = 12;
	public static $_COMPLETED = 13;
	
	public static $_TOURNAMENT_STATUS = array ( 1 => "Initiated", 2 => "Pending", 3 => "Active", 4 => "Approved", 5 => "Qualified", 6 => "Disqualified", 7 => "Not Played", 8 => "Played", 9 => "Confirmed", 10 => "Postpond", 11 => "Rounding", 12 => "Finalized", 13 => "Completed" );

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
			case self::$_QUALIFIED:
				return 'qualified';
			break;
			case self::$_DISQUALIFIED:
				return 'disqualified';
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
	
	public static $_PRELIMINARY = 1;
	public static $_HEATS = 2;
	public static $_QUALIFICATION = 3;
	public static $_QUARTER_FINAL = 4;
	public static $_SEMI_FINAL = 5;
	public static $_FINAL = 6;

	public static $_ROUND_MODES = array ( 1 => 'Preliminary Round', 2 => 'Heats', 3 => 'Qualification', 4 => 'Quarter Final', 5 => 'Semi Final', 6 => 'Final');
	
	public static function processRoundModes ( ) 
	{
		 try {
				return self::$_ROUND_MODES; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	
	public static function processRoundModeID ( $_value ) 
	{
		try {
			foreach( self::$_ROUND_MODES as $_key=> $_round ){
				if( strcmp($_round, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $_e ) {
			return null; 
		}
	}

	public static function processRoundModeValue ($_id )
	{
		try {switch($_distance) {			
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
			foreach( self::$_ROUND_MODES as $_key=> $_round ){
			  if( $_key == $_id )
					return $_round; 
			}
			return null;       
		} catch ( Exception $_e ) {
			return null; 
		}
	}
	public static function processDefaultRoundMode ( )
	{
		 try {
				return self::$_PRELIMINARY; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	public static function processRoundModeIcon ($_round) 
	{
		switch($_round) {			
			case self::$_PRELIMINARY:
				return 'Preliminary Round';
			break;
			case self::$_HEATS:
				return 'Heats';
			break;
			case self::$_QUALIFICATION:
				return 'Qualificaton';
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
		}
	}
	
	/************************************************/

	public static $_PRELIMINARY_ROUND = 1; 
	public static $_HEAT_ROUND = 2;
	public static $_QUALIFYING_ROUND = 3; 
	public static $_KNOCK_OUT = 4;  
	public static $_FINAL_ROUND = 5; 
	
	public static $_COMPETITION_MODES = array ( 1 => "Preliminary", 2 => "Heat Round", 3 => "Qualifying", 4 => "Knock Out", 5 => "Final" );
	
	public static function processMatchCompetitionRoundModes ( ) 
	{
	  try {
				return  self::$_COMPETITION_MODES; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	} 
	public static function processMatchCompetitionRoundModeID ( $_value ) 
	{
		try {
			foreach( self::$_COMPETITION_MODES as $_key => $_round ) {
				if( strcmp($_round, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	
	public static function processMatchCompetitionRoundModeValue ( $_id )
	{
		try {
				foreach( self::$_COMPETITION_MODES as $_key => $_round ) {
					if( $_key == $_id )
						return $_round; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultMatchCompetitionRoundMode ()
	{
		try {
				return  self::$_PRELIMINARY_ROUND; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	public static function processMatchRoundModeAlias ($_round)
	{
		switch($_round) {			
			case self::$_PRELIMINARY_ROUND:
				return 'first_round';
			break;	
			case self::$_HEAT_ROUND:
				return 'next_round';
			break; 
			case self::$_QUALIFYING_ROUND:
				return 'qualified_round';
			break;  
			case self::$_FINAL_ROUND:
				return 'final_round';
			break;  
			case self::$_KNOCK_OUT:
				return 'play_off';
			break;  
		}
	} 
	public static function makeMatchCompetitionRoundMode ($_roundMode)
	{
		 switch($_roundMode) {			
			case self::$_PRELIMINARY:
				return self::$_PRELIMINARY_ROUND;
			break;
			case self::$_HEATS:
				return self::$_HEAT_ROUND;
			break;
			case self::$_QUALIFICATION:
				return self::$_QUALIFYING_ROUND;
			break;
			case self::$_QUARTER_FINAL:
				return self::$_QUALIFYING_ROUND;
			break;
			case self::$_SEMI_FINAL:
				return self::$_QUALIFYING_ROUND;
			break;
			case self::$_FINAL:
				return self::$_FINAL_ROUND;
			break; 
		}
	} 
	/************************************************/

	public static $_GOLD_MEDAL = 1; 
	public static $_SILVER_MEDAL = 2;
	public static $_BRONZE_MEDAL = 3; 
	public static $_CERTIFICATE = 4;  
	public static $_OTHER_AWARD = 5; 
	
	public static $_MEDAL_AWARD_MODES = array ( 1 => "Gold Medal", 2 => "Silver Medal", 3 => "Bronze Medal", 4 => "Certificate", 5 => "Other Award" );
	
	public static function processMatchMedalAwardModes ( ) 
	{
	  try {
				return  self::$_MEDAL_AWARD_MODES; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	} 
	public static function processMatchMedalAwardModeID ( $_value ) 
	{
		try {
			foreach( self::$_MEDAL_AWARD_MODES as $_key => $_award ) {
				if( strcmp($_award, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	
	public static function processMatchMedalAwardModeValue ( $_id )
	{
		try {
				foreach( self::$_MEDAL_AWARD_MODES as $_key => $_award ) {
					if( $_key == $_id )
						return $_award; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processDefaultMatchMedalAwardMode ()
	{
		try {
				return  self::$_GOLD_MEDAL; 
			} catch ( Exception $e ) {
			return null; 
	  }     
	}
	public static function processMatchMedalAwardAlias ($_round)
	{
		switch($_round) {			
			case self::$_GOLD_MEDAL:
				return 'gold_medal';
			break;	
			case self::$_SILVER_MEDAL:
				return 'silver_medal';
			break; 
			case self::$_BRONZE_MEDAL:
				return 'bronze_medal';
			break;  
			case self::$_CERTIFICATE:
				return 'certificate';
			break;  
			case self::$_OTHER_AWARD:
				return 'other_award';
			break;  
		}
	}  
	
	 
	/************************************************/
	
	public static $_POINT_ORDER = 1; 
	public static $_POSITION_ORDER = 2; 
	public static $_TIME_ORDER = 3; 
	public static $_DISTANCE_ORDER = 4; 
	public static $_HEIGHT_ORDER = 5; 
	public static $_OTHER_ORDER = 6; 
	
	public static $_RESULT_RANKING_MODES = array ( 1 => "Point Order", 2 => "Position Order", 3 => "Time Order", 4 => "Distance Order", 5 => "Height Order", 6 => "Other Order" );
	
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
	
	/*********************************************/
	
	public static $_FIN = 1;
	public static $_QFD = 2;
	public static $_BQFD = 3;
	public static $_DISQ = 4;
	public static $_DNS = 5;
	public static $_DNF = 6; 

	public static $_COMPETITION_STATUSES = array ( 1 => 'Finished', 2 => 'Qualified', 3 => 'Best Qualified', 4 => 'Disqualified', 5 => 'Did Not Start', 6 => 'Did Not Finish');
	
	public static function processCompetitionStatuses ( ) 
	{
		 try {
				return self::$_COMPETITION_STATUSES; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	
	public static function processCompetitionStatusID ( $_value ) 
	{
		try {
			foreach( self::$_COMPETITION_STATUSES as $_key=> $_round ){
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
			foreach( self::$_COMPETITION_STATUSES as $_key=> $_round ){
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
				return self::$_FIN; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	public static function processCompetitionStatusAlias ($_round) 
	{
		switch($_round) {			
			case self::$_FIN:
				return 'F';
			break;
			case self::$_QFD:
				return 'Q';
			break;
			case self::$_BQFD:
				return 'q';
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
			case self::$_BQFD:
				return 'BQFD';
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
	
	public static $_HEAT_ONE = 1;
	public static $_HEAT_TWO = 2;
	public static $_HEAT_THREE = 3;
	public static $_HEAT_FOUR = 4;
	public static $_HEAT_FIVE = 5; 
	public static $_HEAT_SIX = 6;
	public static $_HEAT_SEVEN = 7;
	public static $_HEAT_EIGHT = 8;
	public static $_HEAT_NINE = 9;
	public static $_HEAT_TEN = 10; 

	public static $_HEAT_NUMBERS = array ( 1 => 'Heat One', 2 => 'Heat Two', 3 => 'Heat Three', 4 => 'Heat Four', 5 => 'Heat Five', 6 => 'Heat Six', 7 => 'Heat Seven', 8 => 'Heat Eight', 9 => 'Heat Nine', 10 => 'Heat Ten');
	
	public static function processHeatNumbers ( ) 
	{
		 try {
				return self::$_HEAT_NUMBERS; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	
	public static function processHeatNumberID ( $_value ) 
	{
		try {
			foreach( self::$_HEAT_NUMBERS as $_key=> $_group ){
				if( strcmp($_group, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $_e ) {
			return null; 
		}
	}

	public static function processHeatNumberValue ($_id )
	{
		try {
			foreach( self::$_HEAT_NUMBERS as $_key=> $_group ){
			  if( $_key == $_id )
					return $_group; 
			}
			return null;       
		} catch ( Exception $_e ) {
			return null; 
		}
	}
	public static function processDefaultHeatNumber ( )
	{
		 try {
				return self::$_HEAT_ONE; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	public static function processHeatNumberIcon ($_round) 
	{
		switch($_round) {			
			case self::$_HEAT_ONE:
				return 'one';
			break;
			case self::$_HEAT_TWO:
				return 'two';
			break;
			case self::$_HEAT_THREE:
				return 'three';
			break;
			case self::$_HEAT_FOUR:
				return 'four';
			break;
			case self::$_HEAT_FIVE:
				return 'five';
			break; 
			case self::$_HEAT_SIX:
				return 'six';
			break;
			case self::$_HEAT_SEVEN:
				return 'seven';
			break;
			case self::$_HEAT_EIGHT:
				return 'eight';
			break;
			case self::$_HEAT_NINE:
				return 'nine';
			break;
			case self::$_HEAT_TEN:
				return 'ten';
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
			foreach( self::$_EVENT_TYPES as $_key=> $_event ){
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
			 	return null; 
	  }   
	}
	public static function makeDefaultEventType ($_eventType)
	{
		 switch($_eventType) {			
			case self::$_PAIR_TEAM:
				return self::$_FIELD;
			break;
			case self::$_MULTIPLE_TEAM:
				return self::$_TRACK;
			break;
			default:
				return self::$_TRACK;
			break; 
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
	public static $_DOUBLE = 2;
	public static $_TRIPLE = 3;
	public static $_MULTIPLE = 4;
	public static $_MIXED_PLAYERS = 5;
	public static $_OTHER_PLAYING = 6; 

	public static $_PLAYER_MODE = array ( 1 => 'Single Player', 2 => 'Double Players', 3 => 'Triple Players', 4 => 'Multiple Players', 5 =>  'Mixed Gender Players', 6 =>  'Other');
	
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
			case self::$_DOUBLE:
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
	public static function makePlayerModeName ($_mode) 
	{
		switch($_mode) {			
			case self::$_SINGLE:
				return self::processPlayerModeValue($_mode);
			break;
			case self::$_DOUBLE:
				return self::processPlayerModeValue($_mode);
			break;
			case self::$_TRIPLE:
				return self::processPlayerModeValue($_mode);
			break;
			case self::$_MULTIPLE:
				return self::processPlayerModeValue($_mode);
			break;
			case self::$_MIXED_PLAYERS:
				return self::processPlayerModeValue($_mode);
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
	public static function processDistanceMeasurementAlias ($_distance) 
	{
		switch($_distance) {			
			case self::$_METER:
				return 'Meters';
			break;
			case self::$_KILO_METERL:
				return 'Kilo Meters';
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
	
	public static $_GENDERS = array ( 1 => "Men", 2 => "Women", 3 => "Both Gender", 4 => "Mixed Gender" );
	public static $_PLAYER_GENDERS = array ( 1 => "Men", 2 => "Women", 4 => "Mixed Gender");
	
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

	public static function makeAthleticsGameName ($_contestantMode, $_playersNumberPerGame, $_gameDistance, $_measurementType, $_sportGameTypeMode, $_throwTypeMode, $_jumpTypeMode) 
	{
		//$_athleticsName = self::makeAthleticsGameName($_sportGameTypeMode, $_throwTypeMode, $_jumpTypeMode);
		
		return $_gameDistance ? (intval(trim($_gameDistance)).' '.self::processDistanceMeasurementAlias($_measurementType)):self::makeAthleticsGameName($_contestantMode, $_playersNumberPerGame, $_sportGameTypeMode, $_throwTypeMode, $_jumpTypeMode);
	}
	
	public static function makeTournamentSportGameNames ($_sportGameDistance, $_gameDistanceType) 
	{
		return intval(trim($_sportGameDistance)).' '.self::processDistanceMeasurementAlias($_gameDistanceType);
	}
	
	public static function makeTournamentSportGameName ($_contestantMode, $_playersNumberPerGame, $_gameDistance, $_measurementType, $_sportGameTypeMode, $_throwTypeMode, $_jumpTypeMode) 
	{
		//$_playerModePerGame = self::makeContestantMode ($_contestantMode, $_playersNumberPerGame);
		
		switch($_sportGameTypeMode) {			
			case self::$_RUNNING_ATHLETICS:
				return (intval(trim($_gameDistance)).' '.self::processDistanceMeasurementAlias($_measurementType));
			break; 
			case self::$_HURDLE_ATHLETICS:
				return (intval(trim($_gameDistance)).' '.self::processDistanceMeasurementAlias($_measurementType));
			break;
			case self::$_STEEPLE_CHASE_ATHLETICS:
				return (intval(trim($_gameDistance)).' '.self::processDistanceMeasurementAlias($_measurementType));
			break;
			case self::$_RELAY_ATHLETICS:
				return trim(self::makeContestantMode ($_contestantMode, $_playersNumberPerGame)).' x '.(intval(trim($_gameDistance)).' '.self::processDistanceMeasurementAlias($_measurementType));
			break;
			case self::$_JUMP_ATHLETICS:
				return self::processJumpTypeValue($_jumpTypeMode);
			break;
			case self::$_THROW_ATHLETICS:
				return self::processThrowTypeValue($_throwTypeMode).' Throws';
			break; 
			default:
				return '';
			break;
		}
	}
	public static function makeContestantMode ($_mode, $_playersNumberPerGame) 
	{ 
		switch($_mode) {			
			case self::$_SINGLE:
				return 1;
			break;
			case self::$_DOUBLE:
				return 2;
			break;
			case self::$_TRIPLE:
				return 3;
			break;
			case self::$_MULTIPLE:
				return intval($_playersNumberPerGame);
			break;
			case self::$_OTHER_EVENT:
				return intval($_playersNumberPerGame);
			break; 
		}
	}
	public static function makeSportGameName ($_event) 
	{
		switch($_event) {			
			case self::$_METER:
				return 'Meters';
			break;
			case self::$_KILO_METERL:
				return 'Kilo Meters';
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
	/*********************************************/
	
	public static $_ATHLETE = 1;
	public static $_BASKETBALL_PLAYER = 2;
	public static $_BADMENTEN_PLAYER = 3;
	public static $_CYCLIST = 4;
	public static $_GROUND_TENNIS_PLAYER = 5; 
	public static $_FOOTBALL_PLAYER = 6;
	public static $_HANDBALL_PLAYER = 7;
	public static $_TABLE_TENNIS_PLAYER = 8;
	public static $_VOLLYBAL_PLAYER = 9;
	public static $_OTHER_PLAYER = 10;  

	public static $_CONTESTANT_NAME_MODES = array ( 1 => 'Athlete', 2 => 'Basketball Player', 3 => 'Badmenten Player', 4 => 'Cyclist', 5 => 'Ground Tennis Player', 6 => 'Football Player', 7 => 'Handball Player', 8 => 'Table Tennis Player', 9 => 'Vollyball Player', 10 => 'Other Player');
	
	public static function processContestantNameModes ( ) 
	{
		 try {
				return self::$_CONTESTANT_NAME_MODES; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	
	public static function processContestantNameModeID ( $_value ) 
	{
		try {
			foreach( self::$_CONTESTANT_NAME_MODES as $_key=> $_round ){
				if( strcmp($_round, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $_e ) {
			return null; 
		}
	}

	public static function processContestantNameModeValue ($_id )
	{
		try {
			foreach( self::$_CONTESTANT_NAME_MODES as $_key=> $_round ){
			  if( $_key == $_id )
					return $_round; 
			}
			return null;       
		} catch ( Exception $_e ) {
			return null; 
		}
	}
	public static function processDefaultContestantNameMode ( )
	{
		 try {
				return self::$_ATHLETE; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	public static function processContestantNameModeIcon ($_round) 
	{
		switch($_round) {			
			case self::$_ATHLETE:
				return 'athlete';
			break;
			case self::$_BASKETBALL_PLAYER:
				return 'basketball_player';
			break;
			case self::$_BADMENTEN_PLAYER:
				return 'badmenten_player';
			break;
			case self::$_CYCLIST:
				return 'cyclist';
			break;
			case self::$_GROUND_TENNIS_PLAYER:
				return 'ground_tennis_player';
			break; 
			case self::$_FOOTBALL_PLAYER:
				return 'football_player';
			break;
			case self::$_HANDBALL_PLAYER:
				return 'handball_player';
			break;
			case self::$_TABLE_TENNIS_PLAYER:
				return 'table_tennis_player';
			break;
			case self::$_VOLLYBAL_PLAYER:
				return 'vollyball_player';
			break;
			case self::$_OTHER_PLAYER:
				return 'other_player';
			break;  
			break; 
		}
	}
	
	/********************************************************/
	
	public static $_INDIVIDUAL_CREATION_MODE = 1;
	public static $_BATCH_CREATION_MODE = 2;

	public static $_DATA_CREATION_MODES = array ( 1 => 'Individual Participant', 2 => 'Batch Participant');
	
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
			foreach( self::$_DATA_CREATION_MODES as $_key => $_event ){
				if( strcmp($_event, $_value) == 0 )
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
			foreach( self::$_DATA_CREATION_MODES as $_key => $_event ){
			  if( $_key == $_id )
					return $_event; 
			}
			return null;       
		} catch ( Exception $_e ) {
			return null; 
		}
	}
	public static function processDefaultDataCreationMode ( )
	{
		 try {
				return self::$_INDIVIDUAL_CREATION_MODE; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	public static function processDataCreationModeAlias ($_event) 
	{
		switch($_event) {			
			case self::$_INDIVIDUAL_CREATION_MODE:
				return 'M';
			break;
			case self::$_BATCH_CREATION_MODE:
				return 'KM';
			break; 
		}
	}
	public static function processDataCreationModeIcon ($_event) 
	{
		switch($_event) {			
			case self::$_INDIVIDUAL_CREATION_MODE:
				return 'single_player';
			break;
			case self::$_BATCH_CREATION_MODE:
				return 'pair_players';
			break; 
		}
	}
	
	/********************************************************/
	
	public static $_MORNING_SESSION = 1;
	public static $_AFTERNOON_SESSION = 2;

	public static $_TOURNAMENT_SESSION_MODES = array ( 1 => 'Morning Session', 2 => 'Afternoon Session');
	
	public static function processTournamentSessionModes ( ) 
	{
		 try {
				return self::$_TOURNAMENT_SESSION_MODES; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	
	public static function processTournamentSessionModeID ( $_value ) 
	{
		try {
			foreach( self::$_TOURNAMENT_SESSION_MODES as $_key => $_event ){
				if( strcmp($_event, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $_e ) {
			return null; 
		}
	}

	public static function processTournamentSessionModeValue ($_id )
	{
		try {
			foreach( self::$_TOURNAMENT_SESSION_MODES as $_key => $_event ){
			  if( $_key == $_id )
					return $_event; 
			}
			return null;       
		} catch ( Exception $_e ) {
			return null; 
		}
	}
	public static function processDefaultTournamentSessionMode ( )
	{
		 try {
				return self::$_MORNING_SESSION; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	public static function processTournamentSessionModeAlias ($_event) 
	{
		switch($_event) {			
			case self::$_MORNING_SESSION:
				return 'M';
			break;
			case self::$_AFTERNOON_SESSION:
				return 'KM';
			break; 
		}
	}
	public static function processDataTournamentSessionModeIcon ($_event) 
	{
		switch($_event) {			
			case self::$_MORNING_SESSION:
				return 'single_player';
			break;
			case self::$_AFTERNOON_SESSION:
				return 'pair_players';
			break; 
		}
	} 
}

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
	public static $_CROSS_COUNTRY = 9;
	public static $_HALF_MARATHON = 10;
	public static $_MARATHON = 11;
	public static $_OTHER_DISTANCE = 12;
	
	public static $_DISTANCE_TYPES = array ( 1 => "Sprints", 2 => "Middle Distance", 3 => "Long Distance", 4 => "Hardless", 5 => "Steeplechase", 6 => "Relay",7 => "Jumps", 8 => "Throws", 9 => "Cross Country", 10 => "Half Marathon", 11 => "Marathon", 12 => "Other" );

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
			case self::$_CROSS_COUNTRY:
				return 'cross_country';
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
	public static $_OTHER_EVENT = 4; 

	public static $_EVENT_TYPES = array ( 1 => 'Track', 2 => 'Field', 3 => 'Road', 4 =>  'None');
	
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
	
	/*********************************************/
	
	public static $_SINGLE = 1;
	public static $_PAIR = 2;
	public static $_MULTIPLE = 3;
	public static $_OTHER_PLAYING = 4; 

	public static $_PLAYER_MODE = array ( 1 => 'Single Player', 2 => 'Pair Player', 3 => 'Multiple Players', 4 =>  'None');
	
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
	public static $_MULTIPLE_TEAM = 1;
	public static $_OTHER_MODE = 3; 

	public static $_PARTICIPANT_TEAM_MODES = array ( 1 => 'Pair Team', 2 => 'Multiple Teams', 4 =>  'Other Mode');
	
	public static function processParticipantTeamModes ( ) 
	{
		 try {
				return self::$_PARTICIPANT_TEAM_MODES; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	
	public static function processParticipantTeamModeID ( $_value ) 
	{
		try {
			foreach( self::$_PARTICIPANT_TEAM_MODES as $_key => $_event ){
				if( strcmp($_event, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $_e ) {
			return null; 
		}
	}

	public static function processParticipantTeamModeValue ($_id )
	{
		try {
			foreach( self::$_PARTICIPANT_TEAM_MODES as $_key => $_event ){
			  if( $_key == $_id )
					return $_event; 
			}
			return null;       
		} catch ( Exception $_e ) {
			return null; 
		}
	}
	public static function processDefaultParticipantTeamMode ( )
	{
		 try {
				return self::$_OTHER_MODE; 
			} catch ( Exception $_e ) {
			return $_e; 
	  }   
	}
	public static function processParticipantTeamModeIcon ($_event) 
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
	public static $_TRIPLE = 2;
	public static $_HIGH = 3;
	public static $_OTHER_JUMP = 4; 

	public static $_JUMP_TYPES = array ( 1 => 'Long Jump', 2 => 'Triple Jump',3 =>  'High Jump',4 =>  'Other');
	
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
	public static function processJumpTypeAlias ($_event) 
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
	public static function processJumpTypeIcon ($_event) 
	{
		switch($_event) {			
			case self::$_LONG:
				return 'long_jump';
			break;
			case self::$_TRIPLE:
				return 'triple_jump';
			break;
			case self::$_HIGH:
				return 'high_jump';
			break;
			case self::$_OTHER_MEASUREMENT:
				return 'other';
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
	public static $_MIXED = 3; 
	
	public static $_GENDERS = array ( 1 => "Men", 2 => "Women", 3 => "Mixed" );
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
			case self::$_MIXED:
				return 'MX';
			break; 
		}
	} 
	
	/************************************************/
	
	/*public static $_MEN = 1; 
	public static $_WOMEN = 2; 
	public static $_MIXED = 3; 
	
	public static $_GENDERS = array ( 1 => "Men", 2 => "Women", 3 => "Mixed" );
	
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
			case self::$_MIXED:
				return 'MX';
			break; 
		}
	}
	*/
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

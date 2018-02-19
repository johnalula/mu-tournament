<?php 
class TournamentCore {
 
	public static $_INITIATED = 1;
	public static $_PENDING = 2;
	public static $_ACTIVE = 3;
	public static $_APPROVED = 4;
	public static $_REJECTED = 5;
	public static $_DECLINED = 6;
	public static $_REVIEWED = 7;
	public static $_EDITED = 8;
	public static $_REVISION_REQUIRED = 9;
	public static $_PUBLISHED = 10;
	public static $_COMPLETED = 11;
	public static $_TOURNAMENT_STATUS = array ( 1 => "Initiated", 2 => "Pending", 3 => "Active", 4 => "Approved", 5 => "Rejected", 6 => "Declined", 7 => "Reviewed", 8 => "Edited", 9 => "Published", 10 => "Completed" );

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
			case self::$_INITIATED:
				return 'initiated';
			break;
			case self::$_PENDING:
				return 'pending';
			break;
			case self::$_ACTIVE:
				return 'Review Pending';
			break; 
			case self::$_APPROVED:
				return 'approved';
			break;
			case self::$_DECLINED:
				return 'paid';
			break;
			case self::$_COMPLETED:
				return 'viod';
			break;
			case self::$_EDITED:
				return 'rejected';
			break;
			case self::$_REVIEWED:
				return 'completed';
			break;
			case self::$_PUBLISHED:
				return 'completed';
			break;
			case self::$_REVIEWED:
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
	
	public static $_RESEARCH_NOTES = 1;
	public static $_ORGINAL_RESEARCH_PAPER = 2;
	public static $_CASE_REPORT = 3;
	public static $_REVIEW_PAPER = 4;
	public static $_SHORT_COMMUNICATION = 5; 
	public static $_OTHERS = 6;
	public static $_MANUSCRIPT_TYPES = array ( 1 => "Research Notes", 2 => "Orginal Research Paper", 3 => "Case Report", 4 => "Review Paper", 5 => "Short Communication", 6 => "Other" );

	public static function processManuscriptTypes() 
	{
		return self::$_MANUSCRIPT_TYPES;
	}
	public static function processManuscriptTypeID ( $_value ) 
	{
		try {
			foreach( self::$_MANUSCRIPT_TYPES as $_key=> $_item ) {
				if( strcmp($_item, $_value) == 0 )
					return $_key; 
			}
			return null; 
		} catch ( Exception $e ) {
			return null; 
		}        
	}
	public static function processManuscriptTypeValue ( $_id )
	{
		try {
			foreach( self::$_MANUSCRIPT_TYPES as $_key=> $_item ) {
				if( $_key == $_id )
					return $_item; 
			}
			return null; 
		} catch ( Exception $e ) {
			return null; 
		}    
	}
	public static function processManuscriptTypeIcon ($_status) 
	{
		switch($_status) {			
			case self::$_INITIATED:
				return 'initiated';
			break;
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
				return 'paid';
			break;
			case self::$_COMPLETED:
				return 'viod';
			break;
			case self::$_EDITED:
				return 'rejected';
			break;
			case self::$_REVIEWED:
				return 'completed';
			break;
			case self::$_PUBLISHED:
				return 'completed';
			break;
			case self::$_REVIEWED:
				return 'completed';
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
	
	public static $_REVIEWER_MESSAGE = 1; 
	public static $_EDITOR_MESSAGE = 2; 
	public static $_PUBLISHER_MESSAGE = 3; 
	public static $_OTHER_MESSAGE_TYPE = 4; 
	
	public static $_DEFAULT_MESSAGES = array ( 1 => "Reviewer Message", 2 => "Editor Message", 3 => "Publisher Message", 4 => "Other Message");
		
	public static function processDefaultMessages ( ) 
	{
	  try {
				return  self::$_DEFAULT_MESSAGES; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processDefaultMessageID ( $_value ) 
	{
		try {
			foreach( self::$_DEFAULT_MESSAGES as $_key=> $_role ){
				if( strcmp($_role, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	
	public static function processDefaultMessageValue ( $_id )
	{
		try {
				foreach( self::$_DEFAULT_MESSAGES as $_key=> $_message ) {
					if( $_key == $_id )
						return $_message; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	} 
	public static function processDefaultMessageIcon ($_message )
	{
		switch($_position) {			
			case self::$_REVIEWER_MESSAGE:
				return 'owner';
			break;	
			case self::$_EDITOR_MESSAGE:
				return 'family_member';
			break;
			case self::$_PUBLISHER_MESSAGE:
				return 'employee';
			break; 
			case self::$_OTHER_MESSAGE_TYPE:
				return 'instructor';
			break; 
		}
	} 
	
	public static $_APPROVAL_MESSAGE = 1; 
	public static $_REJECTION_MESSAGE = 2; 
	public static $_OTHER_MESSAGE_STATUS = 3; 
	
	public static $_DEFAULT_MESSAGE_STATUSES = array ( 1 => "Approval Message", 2 => "Rejection Message", 3 => "Other Message Status");
		
	public static function processDefaultMessageStatuses ( ) 
	{
	  try {
				return  self::$_DEFAULT_MESSAGE_STATUSES; 
			} catch ( Exception $e ) {
			return null; 
	  }        
	}
	public static function processDefaultMessageStatusID ( $_value ) 
	{
		try {
			foreach( self::$_DEFAULT_MESSAGE_STATUSES as $_key=> $_role ){
				if( strcmp($_role, $_value) == 0 )
					return $_key; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}        
	}
	
	public static function processDefaultMessageStatusValue ( $_id )
	{
		try {
				foreach( self::$_DEFAULT_MESSAGE_STATUSES as $_key=> $_message ) {
					if( $_key == $_id )
						return $_message; 
			}
			return null; 
			} catch ( Exception $e ) {
			return null; 
		}    
	} 
	public static function processDefaultMessageStatusIcon ($_message )
	{
		switch($_position) {			
			case self::$_APPROVAL_MESSAGE:
				return 'owner';
			break;	
			case self::$_REJECTION_MESSAGE:
				return 'family_member';
			break;
			case self::$_OTHER_MESSAGE_STATUS:
				return 'instructor';
			break; 
		}
	} 
	
	public static function makeFileSize($_fileSize)
	{
		$_convertedFileSize = 0;
		if($_fileSize >= 1073741824) {
			$_convertedFileSize = number_format(($_fileSize/1073741824), 2).' GB';
		} elseif($_fileSize >= 1048576) {
			$_convertedFileSize = number_format(($_fileSize/1048576), 2).' MB'; 
		} elseif($_fileSize >= 1024) {
			$_convertedFileSize = number_format(($_fileSize/1024), 2).' KB';
		} elseif($_fileSize > 1) {
			$_convertedFileSize = ($_fileSize/1048576).' Bytes';
		} elseif($_fileSize == 1) {
			$_convertedFileSize = ($_fileSize).' Byte';
		} else {
			$_convertedFileSize = '0 Byte';
		}
		return $_convertedFileSize;
	}
}

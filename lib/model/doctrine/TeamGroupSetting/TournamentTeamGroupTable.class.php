<?php

/**
 * TournamentTeamGroupTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TournamentTeamGroupTable extends PluginTournamentTeamGroupTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TournamentTeamGroupTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TournamentTeamGroup');
    }
    //
	public static function processNew ( $_orgID, $_orgTokenID, $_tournamentID, $_gameCategoryID, $_gameCategoryTokenID, $_sportGameTypeName, $_startDate, $_groupStatus, $_description, $_userID, $_userTokenID )
	{
			$_codeConfig = CodeGeneratorTable::processDefaultSelection (null, null, SystemCore::$_GROUP, true  ); 
			$_codeNumber =  $_codeConfig->hasDeletedCode ? $_codeConfig->deletedCode:$_codeConfig->lastCode; 
			$_groupCode = $_codeConfig->prefixCode.'-'.SystemCore::processCodeGeneratorInitialNumber($_codeNumber);
			
			$_sportGameGroup = self::processSave ( $_tournamentID, $_gameCategoryID, $_gameCategoryTokenID, $_sportGameTypeName, $_groupCode, $_startDate, $_groupStatus, $_description ); 
			
			$_flag = $_codeConfig->makeCodeSetup ( $_codeConfig->lastCode );
			
		return $_sportGameGroup;
	}
	//
	public static function processSave ( $_tournamentID, $_gameCategoryID, $_gameCategoryTokenID, $_sportGameTypeName, $_groupCode, $_startDate, $_groupStatus, $_description )
	{
		//try {
			//if(!$_orgID || !$_name) return false;
    
			$_token = trim($_tournamentID).trim($_gameCategoryID).trim($_gameCategoryTokenID).rand('11111', '99999'); 
			$_effectiveDate = date('m/d/Y', time());
			$_nw = new TournamentTeamGroup (); 
			$_nw->token_id = sha1(md5(trim($_token))); 
			$_nw->tournament_id = trim($_tournamentID); 
			$_nw->sport_game_category_id = trim($_gameCategoryID); 
			$_nw->sport_game_category_token_id = sha1(md5(trim($_gameCategoryTokenID))); 
			$_nw->group_full_code = SystemCore::makeFullCode ( trim($_groupCode) );  
			$_nw->group_code = trim($_groupCode);  
			$_nw->start_date = $_startDate ? trim($_startDate):trim($_effectiveDate); 
			$_nw->active_flag = false;  
			$_nw->approval_status = $_approvalStatus ? trim($_approvalStatus):TournamentCore::$_INITIATED;   
			$_nw->status = $_groupStatus ? trim($_groupStatus):TournamentCore::$_INITIATED;   
			$_nw->description = SystemCore::processDescription ( trim($_sportGameTypeName), trim($_description) );  
			$_nw->save(); 
			
			return $_nw; 
		//} catch ( Exception $e) {
	    //  return false; 
		//}
	} 
	//
	public static function processDelete( ) 
   {	
		 
	}
	//
	public static function appendPartialQueryFields ( ) 
	{		
		 
	}
	//
	public static function appendCandidateQueryFields ( ) 
	{		
		 
	}
	public static function appendQueryFields ( ) 
	{		
		 $_queryFileds = "trmntTmGrp.id, trmntTmGrp.group_code as tournamentGroupCode, trmntTmGrp.group_full_code as tournamentGroupFullCode, trmntTmGrp.start_date as matchDate, trmntTmGrp.approval_status as apporvalStatus, trmntTmGrp.active_flag as activeFlag,
								
								gmCat.id as gameCategoryID, gmCat.token_id as gameCategoryTokenID, gmCat.category_name as gameCategoryName, gmCat.alias as gameCategoryAlias,, gmCat.contestant_team_mode as contestantTeamMode,
								trnmt.id as tournamentID, trnmt.token_id as tournamentTokenID, trnmt.name as tournamentName, trnmt.alias as tournamentAlias,
								
								(trmntTmGrp.status=".TournamentCore::$_PENDING.") as pendingTeamGroup, (trmntTmGrp.status=".TournamentCore::$_ACTIVE.") as activeTeamGroup, (trmntTmGrp.status=".TournamentCore::$_COMPLETED.") as completedTeamGroup,
								(trmntTmGrp.approval_status=".TournamentCore::$_PENDING.") as pendingApprovalTeamGroup, (trmntTmGrp.approval_status=".TournamentCore::$_ACTIVE.") as activeApprovalTeamGroup, (trmntTmGrp.approval_status=".TournamentCore::$_APPROVED.") as approvedApprovalTeamGroup, (trmntTmGrp.approval_status=".TournamentCore::$_COMPLETED.") as completedApprovalTeamGroup,
		";	
		return $_queryFileds;
	}
	//
  // process list selection function 
   public static function processSelection ( $_orgID=null, $_orgTokenID=null, $_tournamentID=null, $_sportGameTypeID=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentTeamGroup trmntTmGrp") 
				->innerJoin("trmntTmGrp.Tournament trnmt on trmntTmGrp.tournament_id = trnmt.id ")  
				->innerJoin("trmntTmGrp.GameCategory gmCat on trmntTmGrp.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->offset($_offset)
				->limit($_limit) 
				->orderBy("trmntTmGrp.id ASC")
				->where("trmntTmGrp.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("trnmt.org_id = ? AND trnmt.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trmntTmGrp.active_flag = ?", $_tournamentID);    
				if(!is_null($_sportGameTypeID)) $_qry = $_qry->addWhere("trmntTmGrp.sport_game_category_id = ?", $_sportGameTypeID);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("gmCat.category_name LIKE ? OR trnmt.name LIKE ? OR trmntTmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processAll ( $_orgID=null, $_orgTokenID=null, $_tournamentID=null, $_gameTypeID=null, $_genderCategoryID=null, $_groupID=null, $_keyword=null ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentTeamGroup trmntTmGrp") 
				->innerJoin("trmntTmGrp.Tournament trnmt on trmntTmGrp.tournament_id = trnmt.id ")  
				->innerJoin("trmntTmGrp.SportGame sprtGm on trmntTmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")   
				->orderBy("trmntTmGrp.id ASC")
				->where("trmntTmGrp.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("trnmt.org_id = ? AND trnmt.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trmntTmGrp.active_flag = ?", $_tournamentID);    
				if(!is_null($_gameTypeID)) $_qry = $_qry->addWhere("trmntTmGrp.sport_game_id = ?", $_gameTypeID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("trmntTmGrp.gender_category_id = ?", $_genderCategoryID);    
				if(!is_null($_groupID)) $_qry = $_qry->addWhere("trmntTmGrp.game_group_type_id = ?", $_groupID);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("trmntTmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR trmntTmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	// process list selection function 
   public static function processCandidateSelection ( $_orgID=null, $_orgTokenID=null, $_tournamentID=null, $_sportGameID=null, $_sportGameTokenID=null, $_genderCategoryID=null, $_keyword=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentTeamGroup trmntTmGrp") 
				->innerJoin("trmntTmGrp.Tournament trnmt on trmntTmGrp.tournament_id = trnmt.id ")  
				->innerJoin("trmntTmGrp.SportGame sprtGm on trmntTmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")   
				->orderBy("trmntTmGrp.id ASC")
				->where("trmntTmGrp.id IS NOT NULL");
				//if(!is_null($_orgID)) $_qry = $_qry->addWhere("trnmt.org_id = ? AND trnmt.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("trmntTmGrp.sport_game_id = ? AND trmntTmGrp.sport_game_token_id = ? ", array($_sportGameID, $_sportGameTokenID));
				//if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trmntTmGrp.tournament_id = ?", $_tournamentID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("trmntTmGrp.gender_category_id = ?", $_genderCategoryID);  
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("trmntTmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR trmntTmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	} 
	// process list selection function 
   public static function processCandidates ( $_orgID=null, $_orgTokenID=null, $_tournamentID=null, $_sportGameID=null, $_sportGameTokenID=null, $_sportGameTypeID=null, $_genderCategoryID=null, $_keyword=null, $_exclusion=null, $_offset=0, $_limit=10) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentTeamGroup trmntTmGrp") 
				->innerJoin("trmntTmGrp.Tournament trnmt on trmntTmGrp.tournament_id = trnmt.id ")  
				->innerJoin("trmntTmGrp.SportGame sprtGm on trmntTmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")   
				->offset($_offset)
				->limit($_limit) 
				->orderBy("trmntTmGrp.id ASC")
				->where("trmntTmGrp.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("trnmt.org_id = ? AND trnmt.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("trmntTmGrp.sport_game_id = ? AND trmntTmGrp.sport_game_token_id = ? ", array($_sportGameID, $_sportGameTokenID));
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_sportGameTypeID)) $_qry = $_qry->addWhere("gmCat.id = ?", $_sportGameTypeID);  
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("trmntTmGrp.gender_category_id = ?", $_genderCategoryID);        
				if(! is_null($_exclusion)) $_qry = $_qry->andWhereNotIn("trmntTmGrp.id ", $_exclusion );     
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("trmntTmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR trmntTmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	} 
	//
	public static function processObject ( $_orgID=null, $_orgTokenID=null, $_teamGroupID, $_tokenID ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentTeamGroup trmntTmGrp") 
				->innerJoin("trmntTmGrp.Tournament trnmt on trmntTmGrp.tournament_id = trnmt.id ")  
				->innerJoin("trmntTmGrp.GameCategory gmCat on trmntTmGrp.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")      
				->where("trmntTmGrp.id = ? AND trmntTmGrp.token_id = ? ", array($_teamGroupID, $_tokenID ));
				if(!is_null($_orgID)) $_qry = $_qry->andWhere("trnmt.org_id = ? AND trnmt.org_token_id = ?", array($_orgID, $_orgTokenID));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeObject ( $_orgID=null, $_groupID, $_tokenID  ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentTeamGroup trmntTmGrp") 
				->innerJoin("trmntTmGrp.Tournament trnmt on trmntTmGrp.tournament_id = trnmt.id ") 
				->innerJoin("trmntTmGrp.SportGame sprtGm on trmntTmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")     
				->where("trmntTmGrp.id = ? AND trmntTmGrp.token_id = ? ", array($_groupID, $_tokenID ));
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeCandidateObject ( $_orgID=null, $_activeFlag ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentTeamGroup trmntTmGrp") 
				->innerJoin("trmntTmGrp.Tournament trnmt on trmntTmGrp.tournament_id = trnmt.id ") 
				->innerJoin("trmntTmGrp.SportGame sprtGm on trmntTmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")     
				->where("trmntTmGrp.id IS NOT NULL");
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				if(!is_null($_activeFlag)) $_qry = $_qry->andWhere("trmntTmGrp.active_flag = ?", $_activeFlag);
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	 
	
	/*********************************************************
	********** Candidate selection process *******************
	**********************************************************/
	 
	 /********** Candidate selection process new action *******************/
	//
	public static function selectCandidateTournamentGameCategorys ( $_orgID=null, $_orgTokenID=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_candidateCategorys = GameCategoryTable::processAll ( $_orgID, $_orgTokenID, $_keyword);
		$_exclusion = array();   
		foreach($_candidateCategorys as $_candidateCategory) {
			if(!$_candidateCategory->hasTournamentSportGames) {
				$_exclusion[] = $_candidateCategory->id;
			}
		} 
		
		return GameCategoryTable::processCandidates ( $_orgID, $_orgTokenID, $_exclusion, $_keyword, $_offset, $_limit ) ;
	} 
	 /********** Candidate selection process member action *******************/
	//
	public static function selectCandidateParticipantTeams ( $_tournamentID=null, $_tournamentGroupID=null, $_tournamentGroupTokenID=null, $_sportGameGroupID=null, $_sportGameID=null, $_genderCategory=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_groupParticipantTeams = TournamentGroupParticipantTeamTable::processCandidateParticipants($_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameGroupID, $_sportGameID, $_genderCategoryID, $_keyword);
		$_exclusion = array();   
		foreach($_groupParticipantTeams as $_groupParticipantTeam) {
			$_exclusion[] = $_groupParticipantTeam->team_id;
		} 
		
		return TeamGameParticipationTable::processCandidateParticipants ( $_tournamentID, $_teamID, $_teamTokenID, $_sportGameID, $_gameTypeID, $_genderCategory, $_keyword, $_exclusion, $_offset, $_limit ) ;
	} 
	//
	public static function selectAllCandidateParticipantTeams ( $_tournamentID=null, $_tournamentGroupID=null, $_tournamentGroupTokenID=null, $_sportGameGroupID=null, $_sportGameID=null, $_genderCategory=null, $_keyword=null ) 
   {
		$_groupParticipantTeams = TournamentGroupParticipantTeamTable::processCandidateParticipants($_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameGroupID, $_sportGameID, $_genderCategoryID, $_keyword);
		$_exclusion = array();   
		foreach($_groupParticipantTeams as $_groupParticipantTeam) {
			$_exclusion[] = $_groupParticipantTeam->team_id;
		} 
		
		return TeamGameParticipationTable::selectCandidateParticipants ( $_tournamentID, $_teamID, $_teamTokenID, $_sportGameID, $_gameTypeID, $_genderCategory, $_keyword, $_exclusion) ;
	} 
	
	 /********** Candidate selection process participant action *******************/
	 
	//
	public static function selectCandidateTournamentSportGameGroups ( $_tournamentID=null, $_tournamentGroupID=null, $_tournamentGroupTokenID=null, $_sportGameGroupID=null, $_sportGameID=null, $_approvalStatus=null, $_status=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		/*$_groupParticipantTeams = TournamentGroupParticipantTeamTable::processCandidateParticipants($_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameGroupID, $_sportGameID, $_genderCategoryID, $_keyword);
		$_exclusion = array();   
		foreach($_groupParticipantTeams as $_groupParticipantTeam) {
			$_exclusion[] = $_groupParticipantTeam->team_id;
		} */
		
		return TournamentSportGameGroupTable::processCandidateTournamentGroups ( $_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameTypeID, $_sportGameID, $_keyword, $_approvalStatus, $_status, $_offset, $_limit ) ;
	} 
	//
	public static function selectAllCandidateParticipantGroups ( $_tournamentID=null, $_tournamentGroupID=null, $_tournamentGroupTokenID=null, $_sportGameGroupID=null, $_sportGameID=null, $_genderCategory=null, $_keyword=null ) 
   {
		$_groupParticipantTeams = TournamentGroupParticipantTeamTable::processCandidateParticipants($_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameGroupID, $_sportGameID, $_genderCategoryID, $_keyword);
		$_exclusion = array();   
		foreach($_groupParticipantTeams as $_groupParticipantTeam) {
			$_exclusion[] = $_groupParticipantTeam->team_id;
		} 
		
		return TeamGameParticipationTable::selectCandidateParticipants ( $_tournamentID, $_teamID, $_teamTokenID, $_sportGameID, $_gameTypeID, $_genderCategory, $_keyword, $_exclusion) ;
	} 
	
	/********** Candidate group team member participant selection process *******************/
	//
	public static function selectCandidateGroupMemberParticipantTeams ( $_tournamentID=null, $_tournamentGroupID=null, $_tournamentGroupTokenID=null, $_sportGameGroupID=null, $_sportGameID=null, $_genderCategory=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		/*$_groupParticipantTeams = SportGameGroupParticipantTeamTable::processCandidateParticipants($_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameID, $_genderCategoryID, $_keyword);
		$_exclusion = array();   
		foreach($_groupParticipantTeams as $_groupParticipantTeam) {
			$_exclusion[] = $_groupParticipantTeam->team_id;
		} */
		
		return TournamentGroupParticipantTeamTable::processCandidateGroupMemberTeams ( $_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameGroupID, $_sportGameID, $_genderCategoryID, $_keyword, $_exclusion, $_offset, $_limit ) ;
	} 
	//
	public static function selectCandidateGroupParticipantTeamMembers ( $_tournamentGroupID=null, $_tournamentGroupTokenID=null, $_participantTeamID=null, $_participantTeamTokenID=null, $_groupParticipantTeamID=null, $_sportGameID=null, $_genderCategory=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_participantTeamMembers = TournamentGroupParticipantTeamMemberTable::processCandidateSelection ($_tournamentGroupID, $_tournamentGroupTokenID, $_groupParticipantTeamID, $_participantTeamID, $_sportGameID, $_genderCategory, $_keyword);
		$_exclusion = array();   
		foreach($_participantTeamMembers as $_participantTeamMember) {
			$_exclusion[] = $_participantTeamMember->team_member_participant_id;
		} 
		
		return TeamMemberParticipantRoleTable::processCandidateParticipants ( $_participantTeamID, $_participantTeamTokenID, $_sportGameID, $_genderCategory, $_keyword, $_exclusion, $_offset, $_limit ) ;
	} 
	//
	 
	/*********************************************************
	/*********************************************************
	********** Task Approval and Completion process *****************
	*********************************************************/
	
	// registration task approval function
	public static function processApproval ( $_orgID, $_orgTokenID, $_teamGroupID, $_teamGroupTokenID, $_userID, $_userTokenID ) 
	{
		$_flag = true;   
		$_sportGameTeamGroup =  self::processObject ( null, null, $_teamGroupID, $_teamGroupTokenID ); 
		
		//if(!$_sportGameTeamGroup) { return false; }   
		/*$_orders = RegistrationOrderTable::processApprovalCandidate ( $_task->id, sha1(md5($_task->token_id)), TaskOrderCore::$_PENDING, TaskCore::$_ACTIVE );
		if(!$_orders) { $_flag = false; } else {
			foreach($_orders as $_order) {
				$_flag = $_order->makeOrderApproval (); 
			}
		} */
		$_flag = $_sportGameTeamGroup ? $_sportGameTeamGroup->makeProcessApproval ():false;
			
		return $_flag; 
	}
	public static function processCompletion ( $_orgID, $_orgTokenID, $_teamGroupID, $_teamGroupTokenID, $_userID, $_userTokenID ) 
	{
		$_flag = true;   
		$_sportGameTeamGroup =  self::processObject ( $_orgID, sha1(md5($_orgTokenID)), $_teamGroupID, $_teamGroupTokenID ); 
		
		//if(!$_sportGameTeamGroup) { return false; }   
		/*$_orders = RegistrationOrderTable::processApprovalCandidate ( $_task->id, sha1(md5($_task->token_id)), TaskOrderCore::$_PENDING, TaskCore::$_ACTIVE );
		if(!$_orders) { $_flag = false; } else {
			foreach($_orders as $_order) {
				$_flag = $_order->makeOrderApproval (); 
			}
		} */
		$_flag = $_sportGameTeamGroup ? $_sportGameTeamGroup->makeProcessCompletion ():false;
			
		return $_flag; 
	}
}

<?php

/**
 * TournamentMatchTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TournamentMatchTable extends PluginTournamentMatchTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TournamentMatchTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TournamentMatch');
    }
   //
	public static function processNew ( $_orgID, $_orgTokenID, $_tournamentID, $_tournamentTokenID, $_sportGameCategoryID, $_sportGameCategoryName, $_tournamentMatchName, $_contestantTeamMode, $_matchRoundMode, $_matchResultMode, $_matchDate, $_status, $_description, $_userID, $_userTokenID )
	{
		 $_flag = true;
			
				$_codeConfig = CodeGeneratorTable::processDefaultSelection (null, null, SystemCore::$_TOURNAMENT_MATCH, true  ); 
				$_codeNumber =  $_codeConfig->hasDeletedCode ? $_codeConfig->deletedCode:$_codeConfig->lastCode; 
				$_tournamentMatchNumber = $_codeConfig->prefixCode.'-'.SystemCore::processCodeGeneratorInitialNumber($_codeNumber);
				
				$_tournamentMatch = self::processSave ( $_orgID, $_orgTokenID, $_tournamentID, $_tournamentTokenID, $_sportGameCategoryID, $_sportGameCategoryName, $_tournamentMatchName, $_tournamentMatchNumber, $_contestantTeamMode, $_matchRoundMode, $_matchResultMode, $_matchDate, $_status, $_description );
		
		if($_orgID && $_userID) { 
				
				$_actionID = SystemCore::$_CREATE; 
				$_moduleID  = ModuleCore::$_TOURNAMENT_MATCH;  
				$_actionObject  = 'Match ID: '.$_tournamentMatch->id;  
				$_actionDesc  = 'Tournament Match - [ Module: '.ModuleCore::processModuleValue(ModuleCore::$_TOURNAMENT_MATCH).' ]';  
			
				$_flag1 = SystemLogFileTable::processNew ($_orgID, $_orgTokenID, $_userID, $_userTokenID, $_moduleID, $_actionID, $_actionObject, $_actionDesc);
			}
			
		return $_tournamentMatch;
	}
	//
	public static function processCreate ( )
	{
		
	} 
	public static function processSave ( $_orgID, $_orgTokenID, $_tournamentID, $_tournamentTokenID, $_sportGameCategoryID, $_sportGameCategoryName, $_tournamentMatchName, $_tournamentMatchNumber, $_contestantTeamMode, $_matchRoundMode, $_matchResultMode, $_matchDate, $_status, $_description )
	{
		//try {
			//if(!$_orgID || !$_name) return false;
			$_token = trim($_tournamentTokenID).trim($_orgTokenID).trim($_matchDate).rand('11111', '99999'); 
			$_startDate = date('m/d/Y', time());
			$_nw = new TournamentMatch (); 
			$_nw->token_id = sha1(md5(trim($_token))); 
			$_nw->org_id = trim($_orgID); 
			$_nw->org_token_id = sha1(md5(trim($_orgTokenID)));  
			$_nw->tournament_id = trim($_tournamentID); 
			$_nw->tournament_token_id = sha1(md5(trim($_tournamentTokenID)));  
			$_nw->sport_game_category_id = trim($_sportGameCategoryID); 
			$_nw->tournament_match_number = trim($_tournamentMatchNumber); 
			$_nw->tournament_match_full_number = SystemCore::makeFullCodeNumber ( $_tournamentMatchNumber ); 
			$_nw->contestant_team_mode = trim($_contestantTeamMode); 
			$_nw->tournament_match_round_mode = trim($_matchRoundMode); 
			$_nw->tournament_match_result_mode = trim($_matchResultMode); 
			$_nw->round_type_mode = trim($_matchRoundMode); 
			$_nw->start_date = $_matchDate ? trim($_matchDate):trim($_startDate); 
			$_nw->active_flag = false;  
			$_nw->approval_status = TournamentCore::$_INITIATED;   
			$_nw->status = $_status ? trim($_status):TournamentCore::$_INITIATED;   
			$_nw->description = SystemCore::processDescription ( (trim($_tournamentMatchName).' '.trim($_sportGameCategoryName)), trim($_description) );  
			$_nw->save(); 
			
			return $_nw; 
		//} catch ( Exception $e) {
	    //  return false; 
		//}
	} 
	public static function processEdit ( )
	{
		
	} 
	//
	public static function processUpdate ($_id, $token_id, $date, $description, $ref )
	{		
		$_qry = Doctrine_Query::create( )
			->update('Vehicle vh')
			->set('vh.serial_no', '?', trim($serial_no))  
			->set('vh.pin_num', '?', trim($pin_no))   
			//->set('vh.plate_number', '?', trim($plate_no))   
			->set('vh.plate_code', '?', trim($plate_code))   
			->set('vh.plate_code_no', '?', trim($plate_code_no))   
			->set('vh.initial_mileage', '?', trim($purchased_mileage))   
			->set('vh.current_mileage', '?', trim($current_mileage))   
			->set('vh.vehicle_type_id', '?', $vehicle_type)   
			->set('vh.vehicle_make', '?', trim($vehicle_make))   
			->set('vh.litter_per_km', '?', trim($liter))   
			->set('vh.seating_capacity', '?', trim($seat_capacity))   
			->set('vh.no_of_doors', '?', trim($doors))   
			->set('vh.engine_number', '?', trim($engine_no))   
			->set('vh.chesis_number', '?', trim($chesis_no))  
			->set('vh.vehicle_model', '?', trim($vehicle_model))   
			->set('vh.vehicle_color', '?', trim($vehicle_color))   
			->set('vh.vehicle_weight', '?', trim($vehicle_weight))   
			->set('vh.service_type_id', '?', $service_type)   
			->set('vh.fuel_type_id', '?', $fuel_type)   
			->set('vh.service_year', '?', trim($vehicle_year))   
			->set('vh.purchased_date', '?', trim($purchased_date))   
			->set('vh.purchased_type', '?', trim($purchased_type))   
			//->set('vh.checkup_period_id', '?', trim($checkup_period_id))   
			//->set('vh.vehicle_status', '?', trim($vehicle_status))   
			//->set('vh.fuel_setting_id', '?', $fuel_type)   
			//->set('vh.is_assigned', '?', $is_assigned)   
			//->set('vh.description', '?', trim($description))   
			->where('vh.id = ? AND vh.token_id = ? AND vh.plate_number = ?', array($vehicle_id, $token_id, $plate_no))
			->execute();	
		return ( $q > 0 );   
	}
	//
	public static function processDelete( $pb_id, $task_id  ) 
   {	
		 $task= self::queryObject($task_id); 
    	if( ! $task )		return false; 
    	if( ! $task->canDelete )		return false; 
    	$task->delete(); 
    	return true;
	}
	public static function deleteAttachment (  $id ) { // AcquisitionTaskTable
		$q = Doctrine_Query::create()
                ->delete('*')
                ->from('TaskAttachment c')
                ->where('c.id=?', $id )
                ->execute();	
        return ($q > 0 ); 
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
		 $_queryFileds = "trnmtMtch.id, trnmtMtch.sport_game_category_id as matchSportGameCategoryID, trnmtMtch.tournament_match_number as matchNumber, trnmtMtch.tournament_match_number as tournamentMatchNumber, trnmtMtch.tournament_match_full_number as tournamentMatchFullNumber, trnmtMtch.tournament_match_round_mode as tournamentMatchRoundMode, trnmtMtch.active_flag as activeFlag, trnmtMtch.start_date as matchDate, 
								
								gmCat.id as gameCategoryID, gmCat.token_id as gameCategoryTokenID, gmCat.category_name as gameCategoryName, gmCat.alias as gameCategoryAlias, gmCat.contestant_team_mode as contestantTeamMode,
								trnmt.id as tournamentID, trnmt.token_id as tournamentTokenID, trnmt.name as tournamentName, trnmt.alias as tournamentAlias,
								
								(trnmtMtch.status=".TournamentCore::$_INITIATED.") as initiatedTournamentMatch, (trnmtMtch.status=".TournamentCore::$_PENDING.") as pendingTournamentMatch, (trnmtMtch.status=".TournamentCore::$_ACTIVE.") as activeTournamentMatch, (trnmtMtch.status=".TournamentCore::$_COMPLETED.") as completedTournamentMatch,
								
								(trnmtMtch.approval_status=".TournamentCore::$_PENDING.") as pendingApprovalTournamentMatch, (trnmtMtch.approval_status=".TournamentCore::$_ACTIVE.") as activeApprovalTournamentMatch, (trnmtMtch.approval_status=".TournamentCore::$_APPROVED.") as approvedApprovalTournamentMatch, (trnmtMtch.approval_status=".TournamentCore::$_COMPLETED.") as completedApprovalTournamentMatch,
								
								(EXISTS (SELECT mtchFix1.id FROM TournamentMatchFixture mtchFix1 WHERE mtchFix1.tournament_match_id = trnmtMtch.id AND mtchFix1.tournament_match_token_id = ".sha1."(".md5."("."trnmtMtch.token_id)) )) as hasTournamentMatchFixtures,
		";	
		return $_queryFileds;
	}
	//
  // process list selection function 
   public static function processSelection ( $_orgID=null, $_orgTokenID=null, $_categoryID=null, $_gameTypeID=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatch trnmtMtch") 
				->leftJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->leftJoin("trnmtMtch.GameCategory gmCat on trnmtMtch.sport_game_category_id = gmCat.id ")  
				//->innerJoin("trnmtMtch.Organization org on trnmtMtch.org_id = org.id ")   
				->offset($_offset)
				->limit($_limit) 
				->orderBy("trnmtMtch.id ASC")
				->where("trnmtMtch.id IS NOT NULL");
				//if(!is_null($_orgID)) $_qry = $_qry->addWhere("trnmtMtch.org_id = ? AND trnmtMtch.org_token_id = ? ", array($_orgID, $_orgTokenID));
				/*if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("trnmtMtch.active_flag = ?", $_activeFlag);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("trnmtMtch.category_name LIKE ? OR trnmtMtch.alias LIKE ? OR trnmtMtch.description LIKE ?", array( $_keyword, $_keyword, $_keyword));*/
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processAll ($_orgID=null, $_orgTokenID=null, $_keyword=null ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatch trnmtMtch") 
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->orderBy("trnmtMtch.id ASC")
				->where("trnmtMtch.id IS NOT NULL");
				//if(!is_null($_orgID)) $_qry = $_qry->addWhere("trnmtMtch.org_id = ? AND trnmtMtch.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("trnmtMtch.active_flag = ?", $_activeFlag);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("trnmtMtch.category_name LIKE ? OR trnmtMtch.alias LIKE ? OR trnmtMtch.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processCandidates ( ) 
   {
		 
	}
	//
	public static function processObject ( $_orgID=null, $_orgTokenID=null, $_matchID, $_tokenID ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatch trnmtMtch") 
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("trnmtMtch.GameCategory gmCat on trnmtMtch.sport_game_category_id = gmCat.id ")  
				//->innerJoin("tm.Organization org on tm.org_id = org.id ")     
				->where("trnmtMtch.id = ? AND trnmtMtch.token_id = ? ", array($_matchID, $_tokenID ));
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeObject ( $_orgID=null, $_matchID, $_tokenID  ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatch trnmtMtch") 
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("trnmtMtch.GameCategory gmCat on trnmtMtch.sport_game_category_id = gmCat.id ")  
				//->innerJoin("tm.Organization org on tm.org_id = org.id ")     
				->where("trnmtMtch.id = ? AND trnmtMtch.token_id = ? ", array($_matchID, $_tokenID ));
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeCandidateObject ( $_orgID=null, $_activeFlag ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatch trnmtMtch") 
				->innerJoin("trnmtMtch.GameCategory gmCat on trnmtMtch.sport_game_category_id = gmCat.id ")  
				//->innerJoin("tm.Organization org on tm.org_id = org.id ")  
				->where("trnmtMtch.id IS NOT NULL");
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				if(!is_null($_activeFlag)) $_qry = $_qry->andWhere("trnmtMtch.active_flag = ?", $_activeFlag);
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
	
	 /********** Candidate selection process fixture action *******************/
	 
	//
	public static function selectCandidateTournamentSportGameGroups ( $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_tournamentFixtureID=null, $_sportGameTypeID=null, $_sportGameID=null, $_approvalStatus=null, $_status=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_candidateMatchFixtures = TournamentMatchFixtureTable::processCandidateSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_genderCategoryID, $_keyword);
		$_exclusion = array();   
		foreach($_candidateMatchFixtures as $_candidateMatchFixture) {
			$_exclusion[] = $_candidateMatchFixture->tournament_sport_game_group_id;
		} 
		
		return TournamentSportGameGroupTable::processCandidateTournamentSportGameGroups ( $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameTypeID, $_sportGameID, TournamentCore::$_APPROVED, TournamentCore::$_APPROVED, TournamentCore::$_ACTIVE, $_keyword, $_exclusion, $_offset, $_limit ) ;
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
	
	
	/********** Candidate Match Fixtures *******************/
	//
	public static function selectCandidateTournamentMatchParticipantFixtures ( $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_sportGameID=null, $_sportGameTypeID=null, $_genderCategoryID=null, $_contestantTeamMode=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		
		switch ( trim($_contestantTeamMode) ) {
			case TournamentCore::$_MULTIPLE_TEAM: 
				$_matchFixtureGroupParticipants = TournamentMatchFixtureGroupTable::processCandidateSelections ( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameID, $_sportGameTypeID, $_genderCategoryID, TournamentCore::$_ACTIVE, TournamentCore::$_ACTIVE) ;
			
				$_exclusion = array();   
				foreach($_matchFixtureGroupParticipants as $_matchFixtureGroupParticipant) {
					if(!$_matchFixtureGroupParticipant->hasActiveGroupParticipantTeam) {
						$_exclusion[] = $_matchFixtureGroupParticipant->id;
					}
				}
				return TournamentMatchFixtureGroupTable::selectCandidates ( $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_processStatus, $_approvalStatus, $_exclusion, $_keyword, $_offset, $_limit) ;
			break; 
			case TournamentCore::$_PAIR_TEAM:  
			
				return TournamentMatchFixtureTable::processCandidates ( $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_genderCategoryID, $_keyword, $_exclusion,$_offset, $_limit) ;
				
			break;
		}
			
		//
	} 
	
	/********** Candidate Match Fixture Participants *******************/

	public static function selectCandidateParticipantTeams ( $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_sportGameGroupID=null, $_sportGameID=null, $_genderCategory=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_candidateParticipantTeams = TournamentMatchParticipantTeamTable::processCandidateParticipantSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameGroupID, $_sportGameID, $_keyword);
		$_exclusion = array();   
		foreach($_candidateParticipantTeams as $_candidateParticipantTeam) {
			$_exclusion[] = $_candidateParticipantTeam->group_participant_team_id;
		} 
		
		return TournamentGroupParticipantTeamTable::processCandidateParticipantTeamSelection ( $_tournamentID, $_tournamentGroupID, $_sportGameGroupID, $_sportGameID, $_genderCategory, $_keyword, $_exclusion, $_offset, $_limit ) ;
	} 
	
	/********** Candidate Opponent Participants *******************/
	
	public static function selectCandidateOpponentParticipantTeams ( $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_opponentParticipantTeamID=null,  $_sportGameGroupID=null, $_sportGameID=null, $_genderCategory=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_candidateParticipantTeams = TournamentMatchParticipantTeamTable::processCandidateParticipantSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameGroupID, $_sportGameID, $_keyword);
		$_exclusion = array();   
		$_exclusionOne = array();   
		foreach($_candidateParticipantTeams as $_candidateParticipantTeam) {
			$_exclusionOne[] = $_candidateParticipantTeam->group_participant_team_id;
		} 
		$_exclusionTwo = array();
		$_exclusionTwo[0] = intval($_opponentParticipantTeamID);
		
		$_exclusion = array_merge($_exclusionOne, $_exclusionTwo);
		
		return TournamentGroupParticipantTeamTable::processCandidateParticipantTeamSelection ( $_tournamentID, $_tournamentGroupID, $_sportGameGroupID, $_sportGameID, $_genderCategory, $_keyword, $_exclusion, $_offset, $_limit ) ;
	} 
	
	/********** Candidate All Participants Teams *******************/
	
	public static function selectAllCandidateParticipantTeams ( $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_sportGameGroupID=null, $_sportGameID=null, $_genderCategory=null, $_keyword=null) 
   {
		$_candidateParticipantTeams = TournamentMatchParticipantTeamTable::processCandidateParticipantSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameGroupID, $_sportGameID, $_keyword);
		$_exclusion = array();   
		foreach($_candidateParticipantTeams as $_candidateParticipantTeam) {
			$_exclusion[] = $_candidateParticipantTeam->group_participant_team_id;
		} 
		
		return TournamentGroupParticipantTeamTable::processAllCandidateParticipantTeams ( $_tournamentGroupID, $_sportGameGroupID, $_sportGameID, $_genderCategoryID, $_keyword, $_exclusion);
	} 
	
	/********** Candidate Match Fixture Participants Teams *******************/
	//
	public static function selectCandidateMatchFixtureParticipantTeams ( $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_sportGameID=null, $_genderCategory=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		/*$_candidateParticipantTeams = TournamentMatchParticipantTeamTable::processCandidateParticipantSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameGroupID, $_sportGameID, $_keyword);
		$_exclusion = array();   
		foreach($_candidateParticipantTeams as $_candidateParticipantTeam) {
			$_exclusion[] = $_candidateParticipantTeam->group_participant_team_id;
		} */
		
		return TournamentMatchParticipantTeamTable::processCandidateParticipantTeams ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameID, $_exclusion, $_keyword, $_offset, $_limit ) ;
	} 
	
	/********** Candidate Match Fixture Participants *******************/
	
	//
	public static function selectCandidateTournamentMatchFixtureGroups ( $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_sportGameID=null, $_sportGameTypeID=null, $_genderCategoryID=null, $_contestantTeamMode=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		/*$_groupParticipantTeams = SportGameGroupParticipantTeamTable::processCandidateParticipants($_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameID, $_genderCategoryID, $_keyword);
		$_exclusion = array();   
		foreach($_groupParticipantTeams as $_groupParticipantTeam) {
			$_exclusion[] = $_groupParticipantTeam->team_id;
		} */
		
		/*switch ( trim($_contestantTeamMode) ) {
			case TournamentCore::$_MULTIPLE_TEAM: 
				$_matchFixtureGroupParticipants = TournamentMatchFixtureGroupTable::processAll ($_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_keyword) ;
			
				$_exclusion = array();   
				foreach($_matchFixtureGroupParticipants as $_matchFixtureGroupParticipant) {
					if(!$_matchFixtureGroupParticipant->hasActiveGroupParticipantTeam) {
						$_exclusion[] = $_matchFixtureGroupParticipant->id;
					}
				}*/
			return TournamentMatchFixtureGroupTable::processCandidates ( $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_genderCategoryID, $_keyword, $_exclusion, $_offset, $_limit) ;
			 
			
		//
	} 
	
	// Tournament Match Fixture Group Participant Team Selection */
	public static function selectCandidateMatchFixtureGroupParticipantTeams ( $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_sportGameID=null, $_genderCategory=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		/*$_candidateParticipantTeams = TournamentMatchParticipantTeamTable::processCandidateParticipantSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameGroupID, $_sportGameID, $_keyword);
		$_exclusion = array();   
		foreach($_candidateParticipantTeams as $_candidateParticipantTeam) {
			$_exclusion[] = $_candidateParticipantTeam->group_participant_team_id;
		} */
		
		return TournamentMatchParticipantTeamTable::processCandidateParticipantTeams ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameID, $_exclusion, $_keyword, $_offset, $_limit ) ;
	} 

	// Tournament Match Fixture Group Participant Team Member Selection
	public static function selectCandidateMatchFixtureGroupParticipantTeamMembers( $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_participantTeamID=null, $_participantTeamTokenID=null, $_sportGameID=null, $_genderCategory=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_candidateParticipantMembers = TournamentMatchTeamMemberParticipantTable::processCandidateSelection ( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureGroupID, $_sportGameID, $_teamID, $_keyword);
		$_exclusion = array();   
		foreach($_candidateParticipantMembers as $_candidateParticipantMember) {
			$_exclusion[] = $_candidateParticipantMember->participant_team_member_role_id;
		} 
		
		//return TournamentGroupParticipantTeamMemberTable::processCandidateParticipantTeamMembers ($_tournamentID, $_tournamentGroupID, $_groupMemberTeamID, $_participantTeamID, $_participantTeamTokenID, $_sportGameID, $_genderCategory, $_exclusion, $_keyword, $_offset, $_limit ) ;
		
		return TeamMemberParticipantRoleTable::processCandidates ( $_tournamentID, $_participantTeamID, $_participantTeamTokenID, $_sportGameID, $_sportGameCategoryID, $_genderCategory, $_exclusion, $_keyword, $_offset, $_limit ) ;
		
		//return TournamentGroupParticipantTeamMemberTable::processSelection ( $_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameGroupID, $_sportGameID, $_genderCategoryID, $_keyword, $_offset, $_limit ) ;
	} 
	
	// Tournament Match Fixture Group Participant Team Selection */
	public static function selectCandidateBatchTournamentMatchFixtureGroupParticipantTeams ( $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_sportGameID=null, $_genderCategory=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		/*$_candidateParticipantTeams = TournamentMatchParticipantTeamTable::processCandidateParticipantSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameGroupID, $_sportGameID, $_keyword);
		$_exclusion = array();   
		foreach($_candidateParticipantTeams as $_candidateParticipantTeam) {
			$_exclusion[] = $_candidateParticipantTeam->group_participant_team_id;
		} */
		
		return TournamentMatchParticipantTeamTable::processCandidateParticipantTeams ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameID, $_exclusion, $_keyword, $_offset, $_limit ) ;
	} 
	
	/*********************************************************
	/*********************************************************
	********** Task Approval and Completion process *****************
	*********************************************************/
	
	// registration task approval function
	public static function processApproval ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_userID, $_userTokenID ) 
	{
		$_flag = true;   
		$_tournamentMatch =  self::processObject ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID ); 
		
		//if(!$_sportGameTeamGroup) { return false; }   
		/*$_tournamentMatchFixtures = TournamentMatchFixtureTable::selectCandidates ( $_tournamentMatchID, $_tournamentMatchTokenID, false, $_parentFlag, false, TournamentCore::$_PENDING, TournamentCore::$_PENDING);
		//if(!$_tournamentMatchFixtures) { $_flag = false; } else {
			foreach($_tournamentMatchFixtures as $_tournamentMatchFixture) {
				$_flag = $_tournamentMatchFixture->makeApproval (); 
			}
		//} */
		$_flag = $_tournamentMatch ? $_tournamentMatch->makeApproval ():false;
		
		/*if($_orgID && $_userID) { 
				
				$_actionID = SystemCore::$_CREATE; 
				$_moduleID  = ModuleCore::$_TOURNAMENT_MATCH;  
				$_actionObject  = 'Match Fixture ID: '.$_matchFixtureGroup->id;  
				$_actionDesc  = 'Tournament Match Fixture Participant Teams- [ Module: '.ModuleCore::processModuleValue(ModuleCore::$_TOURNAMENT_MATCH).' ]';  
			
				$_flag1 = SystemLogFileTable::processNew ($_orgID, $_orgTokenID, $_userID, $_userTokenID, $_moduleID, $_actionID, $_actionObject, $_actionDesc);
			}*/
			
		return $_flag; 
	}
	public static function processCompletion ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_userID, $_userTokenID)
	{
			$_flag = true;   
			$_tournamentMatch =  self::processObject ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID ); 
		
		//if(!$_sportGameTeamGroup) { return false; }   
		/*$_orders = RegistrationOrderTable::processApprovalCandidate ( $_task->id, sha1(md5($_task->token_id)), TaskOrderCore::$_PENDING, TaskCore::$_ACTIVE );
		if(!$_orders) { $_flag = false; } else {
			foreach($_orders as $_order) {
				$_flag = $_order->makeOrderApproval (); 
			}
		} */
		$_flag = $_tournamentMatch ? $_tournamentMatch->makeCompletion ():false;
		
		if($_orgID && $_userID) { 
				
				$_actionID = SystemCore::$_APPROVE; 
				$_moduleID  = ModuleCore::$_TOURNAMENT_MATCH;  
				$_actionObject  = 'Match ID: '.$_tournamentMatch->id;  
				$_actionDesc  = 'Tournament Match Completion- [ Module: '.ModuleCore::processModuleValue(ModuleCore::$_TOURNAMENT_MATCH).' ]';  
			
				$_flag1 = SystemLogFileTable::processNew ($_orgID, $_orgTokenID, $_userID, $_userTokenID, $_moduleID, $_actionID, $_actionObject, $_actionDesc);
			}
				
		return $_flag; 
	}
	 
}

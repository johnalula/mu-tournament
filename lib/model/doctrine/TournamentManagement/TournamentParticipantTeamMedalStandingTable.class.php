<?php

/**
 * TournamentParticipantTeamMedalStandingTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TournamentParticipantTeamMedalStandingTable extends PluginTournamentParticipantTeamMedalStandingTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TournamentParticipantTeamMedalStandingTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TournamentParticipantTeamMedalStanding');
    }
    //
	public static function processNew ( $_orgID, $_orgTokenID, $_tournamentID, $_participantTeamID, $_participantTeamTokenID, $_teamStandingRank, $_teamGoldMedals, $_teamSilverMedals, $_teamBronzeMedals, $_teamTotalMedalAwards, $_participantTeamName, $_status, $_description, $_userID, $_userTokenID )
	{
		 $_flag = true;
				
				$_participantMedalAwards = self::processSave ( $_orgID, $_orgTokenID, $_tournamentID, $_participantTeamID, $_participantTeamTokenID, $_teamStandingRank, $_teamGoldMedals, $_teamSilverMedals, $_teamBronzeMedals, $_teamTotalMedalAwards, $_participantTeamName, $_status, $_description );
		
			/*if($_orgID && $_userID) { 
				
				$_actionID = SystemCore::$_CREATE; 
				$_moduleID  = ModuleCore::$_TOURNAMENT_MATCH;  
				$_actionObject  = 'Match ID: '.$_tournamentMatch->id;  
				$_actionDesc  = 'Tournament Match - [ Module: '.ModuleCore::processModuleValue(ModuleCore::$_TOURNAMENT_MATCH).' ]';  
			
				$_flag1 = SystemLogFileTable::processNew ($_orgID, $_orgTokenID, $_userID, $_userTokenID, $_moduleID, $_actionID, $_actionObject, $_actionDesc);
			}*/
			
		return $_participantMedalAwards;
	}
	//
	public static function processCreate ( $_orgID, $_orgTokenID, $_tournamentID, $_participantTeamID, $_participantTeamTokenID, $_teamStandingRank, $_teamGoldMedals, $_teamSilverMedals, $_teamBronzeMedals, $_teamTotalMedalAwards, $_participantTeamName, $_status, $_description, $_userID, $_userTokenID )
	{
		 $_flag = true;
				
				$_participantMedalAwards = self::processSave ( $_orgID, $_orgTokenID, $_tournamentID, $_participantTeamID, $_participantTeamTokenID, $_teamStandingRank, $_teamGoldMedals, $_teamSilverMedals, $_teamBronzeMedals, $_teamTotalMedalAwards, $_participantTeamName, $_status, $_description );
		
			/*if($_orgID && $_userID) { 
				
				$_actionID = SystemCore::$_CREATE; 
				$_moduleID  = ModuleCore::$_TOURNAMENT_MATCH;  
				$_actionObject  = 'Match ID: '.$_tournamentMatch->id;  
				$_actionDesc  = 'Tournament Match - [ Module: '.ModuleCore::processModuleValue(ModuleCore::$_TOURNAMENT_MATCH).' ]';  
			
				$_flag1 = SystemLogFileTable::processNew ($_orgID, $_orgTokenID, $_userID, $_userTokenID, $_moduleID, $_actionID, $_actionObject, $_actionDesc);
			}*/
			
		return $_participantMedalAwards;
	}
	//
	public static function processGenerate ( $_orgID, $_orgTokenID, $_tournamentID, $_participantTeamID, $_participantTeamTokenID, $_description, $_userID, $_userTokenID )
	{
		 $_flag = true;
				
				$_participantTeams = TeamTable::processAll ( $_orgID, $_orgTokenID, $_tournamentID, true, $_keyword);
				
				foreach($_participantTeams as $_key => $_participantTeam ) {
					
					$_participantMedalAwards = self::processSave ( $_orgID, $_orgTokenID, $_tournamentID, $_participantTeam->id, $_participantTeam->token_id, $_teamStandingRank, $_teamGoldMedals, $_teamSilverMedals, $_teamBronzeMedals, $_teamTotalMedalAwards, $_participantTeam->teamName, $_status, $_description );
				}
				
				
				
		
			/*if($_orgID && $_userID) { 
				
				$_actionID = SystemCore::$_CREATE; 
				$_moduleID  = ModuleCore::$_TOURNAMENT_MATCH;  
				$_actionObject  = 'Match ID: '.$_tournamentMatch->id;  
				$_actionDesc  = 'Tournament Match - [ Module: '.ModuleCore::processModuleValue(ModuleCore::$_TOURNAMENT_MATCH).' ]';  
			
				$_flag1 = SystemLogFileTable::processNew ($_orgID, $_orgTokenID, $_userID, $_userTokenID, $_moduleID, $_actionID, $_actionObject, $_actionDesc);
			}*/
			
		return $_participantMedalAwards;
	}
	//
	public static function processSave ( $_orgID, $_orgTokenID, $_tournamentID, $_participantTeamID, $_participantTeamTokenID, $_teamStandingRank, $_teamGoldMedals, $_teamSilverMedals, $_teamBronzeMedals, $_teamTotalMedalAwards, $_participantTeamName, $_status, $_description )
	{
		//try {
			//if(!$_orgID || !$_name) return false;
			$_token = trim($_tournamentID).trim($_orgTokenID).trim($_participantTeamTokenID).rand('11111', '99999'); 
			$_startDate = date('m/d/Y', time());
			$_nw = new TournamentParticipantTeamMedalStanding (); 
			$_nw->token_id = sha1(md5(trim($_token))); 
			$_nw->org_id = trim($_orgID); 
			$_nw->org_token_id = sha1(md5(trim($_orgTokenID)));  
			$_nw->tournament_id = trim($_tournamentID); 
			$_nw->team_id = trim($_participantTeamID); 
			$_nw->team_token_id = sha1(md5(trim($_participantTeamTokenID)));  
			$_nw->standing_rank = trim($_teamStandingRank); 
			$_nw->gold_medal = trim($_teamGoldMedals); 
			$_nw->silver_medal = trim($_teamSilverMedals); 
			$_nw->bronze_medal = trim($_teamBronzeMedals); 
			$_nw->total_medal_award = trim($_teamTotalMedalAwards); 
			$_nw->active_flag = true;   
			$_nw->status = $_status ? trim($_status):TournamentCore::$_ACTIVE;   
			$_nw->description = SystemCore::processDescription ( (trim($_participantTeamName).' medal award'), trim($_description) );  
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
	public static function processUpdate ( $_orgID, $_orgTokenID, $_tournamentID, $_participantTeamID, $_participantTeamTokenID, $_goldMedalAward, $_silverMedalAward, $_bronzeMedalAward, $_userID, $_userTokenID )
	{
		
			$_participantStanding = TournamentParticipantTeamMedalStandingTable::makeObject ( $_orgID, $_participantTeamID, $_participantTeamTokenID );
			$_flag = $_participantStanding->makeMatchMedalAward($_goldMedalAward, $_silverMedalAward, $_bronzeMedalAward);
		
		return $_flag ? true:false;
	}
	//
	/*public static function processUpdateStanding ( $_orgID, $_orgTokenID, $_tournamentID, $_participantTeamID, $_participantTeamTokenID, $_goldMedalAward, $_silverMedalAward, $_bronzeMedalAward, $_userID, $_userTokenID )
	{		
		$_qry = Doctrine_Query::create( )
					->update('Vehicle vh')
					->set('vh.gold_medal', '?', trim($serial_no))  
					->set('vh.silver_medal', '?', trim($pin_no))   
					->set('vh.bronze_medal', '?', trim($plate_code))   
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
	}*/
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
		 $_queryFileds = "prtMdlAwrdStng.id, prtMdlAwrdStng.standing_rank as participantTeamStandingRank, prtMdlAwrdStng.gold_medal as numberOfGoldMedal, prtMdlAwrdStng.silver_medal as numberOfSilverMedal, prtMdlAwrdStng.bronze_medal as numberOfBronzeMedal, prtMdlAwrdStng.total_medal_award as totalMedalAward, prtMdlAwrdStng.active_flag as activeFlag, 
								
								 
								trnmt.id as tournamentID, trnmt.token_id as tournamentTokenID, trnmt.name as tournamentName, trnmt.alias as tournamentAlias,
								
								prtTm.id as participantTeamID, prtTm.token_id as participantTeamTokenID, prtTm.team_name as participantTeamName, prtTm.alias as participantTeamAlias, prtTm.country_id as teamCountry, prtTm.team_city as teamCity, prtTm.team_number as teamNumber, prtTm.confirmed_flag as confirmFlag,
		";	
		return $_queryFileds;
	}
	//
  // process list selection function 
   public static function processSelection ( $_orgID=null, $_orgTokenID=null, $_tournamentID=null, $_participantTeamID=null, $_activeFlag=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentParticipantTeamMedalStanding prtMdlAwrdStng") 
				->innerJoin("prtMdlAwrdStng.Team prtTm on prtMdlAwrdStng.team_id = prtTm.id ")  
				->innerJoin("prtMdlAwrdStng.Tournament trnmt on prtMdlAwrdStng.tournament_id = trnmt.id ")  
				->innerJoin("prtMdlAwrdStng.Organization org on prtMdlAwrdStng.org_id = org.id ")   
				->offset($_offset)
				->limit($_limit) 
				->orderBy("prtMdlAwrdStng.id ASC")
				->where("prtMdlAwrdStng.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("prtMdlAwrdStng.org_id = ? AND prtMdlAwrdStng.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("prtMdlAwrdStng.tournament_id = ?", $_tournamentID);    
				if(!is_null($_participantTeamID)) $_qry = $_qry->addWhere("prtMdlAwrdStng.team_id = ?", $_participantTeamID);    
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("prtMdlAwrdStng.active_flag = ?", $_activeFlag);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("trnmtMtch.category_name LIKE ? OR trnmtMtch.alias LIKE ? OR trnmtMtch.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processAll ( $_orgID=null, $_orgTokenID=null, $_tournamentID=null, $_participantTeamID=null, $_activeFlag=null, $_keyword=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentParticipantTeamMedalStanding prtMdlAwrdStng") 
				->innerJoin("prtMdlAwrdStng.Team prtTm on prtMdlAwrdStng.team_id = prtTm.id ")  
				->innerJoin("prtMdlAwrdStng.Tournament trnmt on prtMdlAwrdStng.tournament_id = trnmt.id ")  
				->innerJoin("prtMdlAwrdStng.Organization org on prtMdlAwrdStng.org_id = org.id ")  
				->orderBy("prtMdlAwrdStng.id ASC")
				->where("prtMdlAwrdStng.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("prtMdlAwrdStng.org_id = ? AND prtMdlAwrdStng.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("prtMdlAwrdStng.tournament_id = ?", $_tournamentID);    
				if(!is_null($_participantTeamID)) $_qry = $_qry->addWhere("prtMdlAwrdStng.team_id = ?", $_participantTeamID);    
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("prtMdlAwrdStng.active_flag = ?", $_activeFlag);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("trnmtMtch.category_name LIKE ? OR trnmtMtch.alias LIKE ? OR trnmtMtch.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processCandidates ( $_orgID=null, $_orgTokenID=null, $_tournamentID=null, $_participantTeamID=null, $_activeFlag=null, $_keyword=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentParticipantTeamMedalStanding prtMdlAwrdStng") 
				->innerJoin("prtMdlAwrdStng.Team prtTm on prtMdlAwrdStng.team_id = prtTm.id ")  
				->innerJoin("prtMdlAwrdStng.Tournament trnmt on prtMdlAwrdStng.tournament_id = trnmt.id ")  
				->innerJoin("prtMdlAwrdStng.Organization org on prtMdlAwrdStng.org_id = org.id ")  
				->orderBy("prtMdlAwrdStng.total_medal_award DESC")
				->where("prtMdlAwrdStng.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("prtMdlAwrdStng.org_id = ? AND prtMdlAwrdStng.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("prtMdlAwrdStng.tournament_id = ?", $_tournamentID);    
				if(!is_null($_participantTeamID)) $_qry = $_qry->addWhere("prtMdlAwrdStng.team_id = ?", $_participantTeamID);    
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("prtMdlAwrdStng.active_flag = ?", $_activeFlag);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("trnmtMtch.category_name LIKE ? OR trnmtMtch.alias LIKE ? OR trnmtMtch.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	} 
   public static function processCandidateSelection ( $_orgID=null, $_orgTokenID=null, $_tournamentID=null, $_participantTeamID=null, $_activeFlag=null, $_keyword=null, $_offset=0, $_limit=10) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentParticipantTeamMedalStanding prtMdlAwrdStng") 
				->innerJoin("prtMdlAwrdStng.Team prtTm on prtMdlAwrdStng.team_id = prtTm.id ")  
				->innerJoin("prtMdlAwrdStng.Tournament trnmt on prtMdlAwrdStng.tournament_id = trnmt.id ")  
				->innerJoin("prtMdlAwrdStng.Organization org on prtMdlAwrdStng.org_id = org.id ")    
				->offset($_offset)
				->limit($_limit) 
				->orderBy("prtMdlAwrdStng.total_medal_award DESC")
				->where("prtMdlAwrdStng.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("prtMdlAwrdStng.org_id = ? AND prtMdlAwrdStng.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("prtMdlAwrdStng.tournament_id = ?", $_tournamentID);    
				if(!is_null($_participantTeamID)) $_qry = $_qry->addWhere("prtMdlAwrdStng.team_id = ?", $_participantTeamID);    
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("prtMdlAwrdStng.active_flag = ?", $_activeFlag);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("trnmtMtch.category_name LIKE ? OR trnmtMtch.alias LIKE ? OR trnmtMtch.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	} 
	//
	public static function processObject ( $_orgID=null, $_orgTokenID=null, $_matchID, $_tokenID ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentParticipantTeamMedalStanding trnmtMtch") 
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("trnmtMtch.GameCategory gmCat on trnmtMtch.sport_game_category_id = gmCat.id ")  
				//->innerJoin("tm.Organization org on tm.org_id = org.id ")     
				->where("trnmtMtch.id = ? AND trnmtMtch.token_id = ? ", array($_matchID, $_tokenID ));
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeObject ( $_orgID=null, $_participantStandingID, $_participantStandingTokenID ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				//->select("prtMdlAwrdStng.*")
				->from("TournamentParticipantTeamMedalStanding prtMdlAwrdStng") 
				->innerJoin("prtMdlAwrdStng.Team prtTm on prtMdlAwrdStng.team_id = prtTm.id ")  
				->innerJoin("prtMdlAwrdStng.Tournament trnmt on prtMdlAwrdStng.tournament_id = trnmt.id ")  
				->innerJoin("prtMdlAwrdStng.Organization org on prtMdlAwrdStng.org_id = org.id ")    
				->where("prtMdlAwrdStng.id = ? AND prtMdlAwrdStng.token_id = ? ", array($_participantStandingID, $_participantStandingTokenID ));
				if(!is_null($_orgID)) $_qry = $_qry->andWhere("org.id = ? ", $_orgID);
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeCandidateObject ( $_orgID=null, $_activeFlag ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentParticipantTeamMedalStanding trnmtMtch") 
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
			return TournamentMatchFixtureGroupTable::processCandidateFixtures ( $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameTypeID, TournamentCore::$_PENDING, TournamentCore::$_PENDING, $_exclusion, $_keyword, $_offset, $_limit) ;
			 
			
		//
	} 
	
	/*********************************************************/
	
	// Tournament Match Fixture Group Participant Team Selection */
	public static function selectCandidateMatchFixtureGroupParticipantTeams ( $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_sportGameID=null, $_genderCategory=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_candidateParticipantTeams = TournamentMatchParticipantTeamTable::processCandidateParticipantSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameGroupID, $_sportGameID, $_keyword);
		$_exclusion = array();   
		foreach($_candidateParticipantTeams as $_candidateParticipantTeam) {
			$_exclusion[] = $_candidateParticipantTeam->group_participant_team_id;
		} 
		
		return TournamentMatchParticipantTeamTable::processCandidateParticipantTeams ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameID, $_exclusion, $_keyword, $_offset, $_limit ) ;
	} 
	// Tournament Match Fixture Group Participant Team Selection */
	public static function selectAllCandidateMatchFixtureGroupParticipantTeams ( $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_sportGameID=null, $_genderCategory=null, $_keyword=null) 
   {
		/*$_candidateParticipantTeams = TournamentMatchParticipantTeamTable::processCandidateParticipantSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameGroupID, $_sportGameID, $_keyword);
		$_exclusion = array();   
		foreach($_candidateParticipantTeams as $_candidateParticipantTeam) {
			$_exclusion[] = $_candidateParticipantTeam->group_participant_team_id;
		} */
		
		return TournamentMatchParticipantTeamTable::processAllCandidateParticipantTeams ($_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameID, $_exclusion, $_keyword) ;
	} 

	/*********************************************************/
	
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
	// Tournament Match Fixture Group Participant Team Member Selection
	public static function selectAllCandidateMatchFixtureGroupParticipantTeamMembers( $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_participantTeamID=null, $_participantTeamTokenID=null, $_sportGameID=null, $_genderCategory=null, $_keyword=null ) 
   {
		$_candidateParticipantMembers = TournamentMatchTeamMemberParticipantTable::processCandidateSelection ( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureGroupID, $_sportGameID, $_teamID, $_keyword);
		$_exclusion = array();   
		foreach($_candidateParticipantMembers as $_candidateParticipantMember) {
			$_exclusion[] = $_candidateParticipantMember->participant_team_member_role_id;
		} 
		
		//return TournamentGroupParticipantTeamMemberTable::processCandidateParticipantTeamMembers ($_tournamentID, $_tournamentGroupID, $_groupMemberTeamID, $_participantTeamID, $_participantTeamTokenID, $_sportGameID, $_genderCategory, $_exclusion, $_keyword, $_offset, $_limit ) ;
		
		return TeamMemberParticipantRoleTable::processAllCandidates ( $_tournamentID, $_participantTeamID, $_participantTeamTokenID, $_sportGameID, $_sportGameCategoryID, $_genderCategory, $_exclusion, $_keyword) ;
		
		//return TournamentGroupParticipantTeamMemberTable::processSelection ( $_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameGroupID, $_sportGameID, $_genderCategoryID, $_keyword, $_offset, $_limit ) ;
	} 
	
	/*********************************************************/
	
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
		///$_tournamentMatchFixtures = TournamentMatchFixtureTable::selectCandidates ( $_tournamentMatchID, $_tournamentMatchTokenID, false, $_parentFlag, false, TournamentCore::$_PENDING, TournamentCore::$_PENDING);
		$_tournamentMatchFixtures = TournamentMatchFixtureTable::selectApprovalCandidates ( $_tournamentMatchID, $_tournamentMatchTokenID, $_processStatus, $_approvalStatus, $_status);
		//if(!$_tournamentMatchFixtures) { $_flag = false; } else {
			foreach($_tournamentMatchFixtures as $_tournamentMatchFixture) {
				$_flag = $_tournamentMatchFixture->makeCompletion (); 
			}
		//} 
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

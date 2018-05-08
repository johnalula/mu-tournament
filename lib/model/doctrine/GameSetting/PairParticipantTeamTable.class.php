<?php

/**
 * PairParticipantTeamTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PairParticipantTeamTable extends PluginPairParticipantTeamTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object PairParticipantTeamTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('PairParticipantTeam');
    }
    //
	public static function processNew ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamGroupID, $_participantTeamGroupTokenID, $_matchFixtureName, $_participantTeamName, $_matchStatus, $_description, $_dataCreationMode )
	{
			$_flag = true;
			
			switch ( trim($_dataCreationMode) ) {
				case SystemCore::$_SINGLE_DATA: $_matchFixtureParticipantTeam = self::processSave ( $_matchFixtureID, $_matchFixtureTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamGroupID, $_participantTeamGroupTokenID, $_matchFixtureName, $_participantTeamName, $_matchStatus, $_description);
				break; 
				case SystemCore::$_MULTIPLE_DATA: 
					
						$_candidateParticipantTeams = TournamentMatchTable::selectAllCandidateParticipantTeams ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameGroupID, $_sportGameID, $_genderCategory, $_keyword ); 
		
					foreach($_candidateParticipantTeams as $_participantTeam ) {
						
						$_participantTeamFullName = ($_participantTeam->participantTeamName.' ( '.$_participantTeam->participantTeamAlias.' ) - '.SystemCore::processCountryValue($_participantTeam->participantTeamCountry));
						
						$_matchFixtureParticipantTeam = self::processSave ( $_matchFixtureID, $_matchFixtureTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeam->id, $_participantTeam->token_id, $_matchFixtureName, $_participantTeamFullName, $_matchStatus, $_description );
						
					}
					
					//$_flag1 = $_sportGameGroup->checkInitiated () ? $_sportGameGroup->makePending ():true;
				 
				break;
			
			}
			
		return $_matchFixtureParticipantTeam ? true:false;
	}
	//
	public static function processCreate ( )
	{
		
	} 
	public static function processSave ( $_matchFixtureID, $_matchFixtureTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamGroupID, $_participantTeamGroupTokenID, $_matchFixtureName, $_participantTeamName, $_matchStatus, $_description )
	{
		//try {
			//if(!$_orgID || !$_name) return false;
			$_token = trim($_matchFixtureTokenID).trim($_sportGameGroupTokenID).trim($_matchFixtureID).rand('11111', '99999'); 
			$_startDate = date('m/d/Y', time());
			$_nw = new PairParticipantTeam (); 
			$_nw->token_id = sha1(md5(trim($_token))); 
			$_nw->tournament_match_fixture_id = trim($_matchFixtureID); 
			$_nw->tournament_match_fixture_token_id = sha1(md5(trim($_tournamentMatchTokenID)));   
			$_nw->group_participant_team_id = trim($_participantTeamGroupID); 
			$_nw->group_participant_team_token_id = sha1(md5(trim($_participantTeamGroupTokenID)));
			$_nw->confirm_flag = true;     
			$_nw->active_flag = true;     
			$_nw->approval_status = $_matchStatus ? trim($_matchStatus):TournamentCore::$_APPROVED;  
			$_nw->status = $_matchStatus ? trim($_matchStatus):TournamentCore::$_ACTIVE;  
			$_nw->description = SystemCore::processDescription ( (trim($_participantTeamName).' participating in '.trim($_matchFixtureName)), trim($_description) );  
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
	public static function processUpdate ( )
	{
		   
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
		 $_queryFileds = "mtchPrtTm.id, mtchPrtTm.approval_status as apporvalStatus, 
						
								mtchFix.id, mtchFix.match_round_type_id as matchRoundTypeID, mtchFix.event_type as matchEventType, mtchFix.contestant_mode as matchContestantMode, mtchFix.match_venue as matchVenue, mtchFix.gender_category_id as genderCategoryID, mtchFix.tournament_match_number as tournamentMatchFixtureNumber, mtchFix.match_venue as tournamentMatchVenue, mtchFix.match_date as matchDate, mtchFix.match_time as matchTime, mtchFix.id as groupID, mtchFix.active_flag as activeFlag, 
		 
								trnmtMtch.id as tournamentMatchID, trnmtMtch.match_number as tournamentMatchNumber,
								prntMtchFix.id as parentMatchFixtureID,  
								
								sprtGmGrp.id as sportGameGroupID, sprtGmGrp.token_id as sportGameGroupTokenID, sprtGmGrp.group_name as sportGameGroupName, sprtGmGrp.group_code as sportGameGroupCode, sprtGmGrp.contestant_team_mode as teamGroupContestantTeamMode, sprtGmGrp.gender_category_id as teamGroupGenderCategoryID, sprtGmGrp.total_group_members as totalGroupMembers, sprtGmGrp.start_date as matchDate, sprtGmGrp.approval_status as apporvalStatus, sprtGmGrp.active_flag as teamGroupActiveFlag
								
								sprtGm.id as sportGameID, sprtGm.token_id as sportGameTokenID, sprtGm.name as sportGameName,  sprtGm.sport_game_category_id as matchSportGameCategoryID, sprtGm.contestant_team_mode as gameContestantTeamMode, sprtGm.sport_game_type_mode as sportGameTypeMode, sprtGm.contestant_team_mode as contestantTeamMode, sprtGm.contestant_mode as contestantMode, sprtGm.distance_type as sportGameDistanceTypeID, sprtGm.distance_type as sportGameDistanceTypeID, 
								
								gmCat.id as gameCategoryID, gmCat.token_id as gameCategoryTokenID, gmCat.category_name as gameCategoryName, gmCat.alias as gameCategoryAlias,
								trnmt.id as tournamentID, trnmt.token_id as tournamentTokenID, trnmt.name as tournamentName, trnmt.alias as tournamentAlias,
								 
								
								gmGrpMbr.id as sportGameTeamGroupID, gmGrpMbr.token_id as sportGameTeamGroupTokenID,
								
								tmPrt.id as teamID, tmPrt.token_id as teamTokenID, tmPrt.team_name as teamName, tmPrt.alias as teamAlias, tmPrt.country_id as teamCountry, tmPrt.team_city as teamCity, tmPrt.team_number as teamNumber, tmPrt.confirm_flag as confirmFlag,
		 
								 
		";	
		return $_queryFileds;
	}
	//
  // process list selection function 
   public static function processSelection ( $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_sportGameGroupID=null, $_sportGameID=null, $_teamID=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("PairParticipantTeam mtchPrtTm") 
				->innerJoin("mtchPrtTm.TournamentMatchFixture mtchFix on mtchPrtTm.tournament_match_fixture_id = mtchFix.id ")  
				->leftJoin("mtchFix.TournamentMatchFixture prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchFix.TournamentSportGameGroup sprtGmGrp on mtchFix.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("mtchPrtTm.TournamentGroupParticipantTeam gmGrpMbr on mtchPrtTm.group_participant_team_id = gmGrpMbr.id ") 
				->innerJoin("gmGrpMbr.Team tmPrt on gmGrpMbr.team_id = tmPrt.id ") 
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->offset($_offset)
				->limit($_limit) 
				->orderBy("mtchPrtTm.id ASC")
				->where("mtchPrtTm.id IS NOT NULL");
				if(!is_null($_tournamentMatchID)) $_qry = $_qry->addWhere("trnmtMtch.id = ? AND trnmtMtch.token_id = ? ", array($_tournamentMatchID, $_tournamentMatchTokenID));
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_matchFixtureID)) $_qry = $_qry->addWhere("mtchFix.id = ?", $_matchFixtureID);    
				if(!is_null($_sportGameGroupID)) $_qry = $_qry->addWhere("sprtGmGrp.id = ?", $_sportGameGroupID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_teamID)) $_qry = $_qry->addWhere("tmPrt.id = ?", $_teamID);       
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("gmCat.category_name LIKE ? OR mtchFix.id LIKE ? OR mtchFix.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processAll ($_orgID=null, $_orgTokenID=null, $_keyword=null ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("PairParticipantTeam mtchFix") 
				->innerJoin("mtchFix.Tournament trnmt on mtchFix.tournament_id = trnmt.id ")  
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->orderBy("mtchFix.id ASC")
				->where("mtchFix.id IS NOT NULL");
				//if(!is_null($_orgID)) $_qry = $_qry->addWhere("mtchFix.org_id = ? AND mtchFix.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("mtchFix.active_flag = ?", $_activeFlag);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("mtchFix.category_name LIKE ? OR mtchFix.alias LIKE ? OR mtchFix.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processCandidates ( $_tournamentID=null, $_matchID=null, $_machTokenID=null, $_categoryID=null, $_keyword=null, $_exclusion=null, $_activeFlag=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("PairParticipantTeam mtchPrtTm") 
				->innerJoin("mtchPrtTm.TournamentMatchFixture mtchFix on mtchPrtTm.tournament_match_fixture_id = mtchFix.id ")  
				->leftJoin("mtchFix.TournamentMatchFixture prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchFix.SportGameGroup sprtGmGrp on mtchFix.sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("mtchPrtTm.SportGameTeamGroup gmGrpMbr on mtchPrtTm.sport_game_team_group_id = gmGrpMbr.id ") 
				->innerJoin("gmGrpMbr.Team tmPrt on gmGrpMbr.team_id = tmPrt.id ") 
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ") 
				->offset($_offset)
				->limit($_limit) 
				->orderBy("mtchPrtTm.id ASC")
				->where("mtchPrtTm.id IS NOT NULL");
				if(!is_null($_matchID)) $_qry = $_qry->addWhere("mtchFix.tournament_match_id = ? AND mtchFix.tournament_match_token_id = ? ", array($_matchID, $_machTokenID));    
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_categoryID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_categoryID);    
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("mtchFix.active_flag = ?", $_activeFlag);
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("trnmt.name LIKE ? OR sprtGm.name LIKE ? OR gmCat.category_name LIKE ? OR sprtGm.alias LIKE ? OR mtchFix.description LIKE ?", array( $_keyword, $_keyword, $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
		 
	}
	//
   public static function processCandidateSelections ( $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_sportGameGroupID=null, $_sportGameID=null, $_keyword=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("PairParticipantTeam mtchPrtTm") 
				->innerJoin("mtchPrtTm.TournamentMatchFixture mtchFix on mtchPrtTm.tournament_match_fixture_id = mtchFix.id ")  
				->leftJoin("mtchFix.TournamentMatchFixture prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchFix.TournamentSportGameGroup sprtGmGrp on mtchFix.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("mtchPrtTm.TournamentGroupParticipantTeam gmGrpMbr on mtchPrtTm.group_participant_team_id = gmGrpMbr.id ") 
				->innerJoin("gmGrpMbr.Team tmPrt on gmGrpMbr.team_id = tmPrt.id ") 
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->orderBy("mtchPrtTm.id DESC")
				->where("mtchPrtTm.id IS NOT NULL");
				if(!is_null($_tournamentMatchID)) $_qry = $_qry->addWhere("trnmtMtch.id = ? AND trnmtMtch.token_id = ? ", array($_tournamentMatchID, $_tournamentMatchTokenID));    
				if(!is_null($_parentMatchID)) $_qry = $_qry->addWhere("mtchFix.id = ? ", $_matchFixtureID);    
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_sportGameGroupID)) $_qry = $_qry->addWhere("sprtGmGrp.id = ?", $_sportGameGroupID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("trnmt.name LIKE ? OR sprtGm.name LIKE ? OR gmCat.category_name LIKE ? OR sprtGm.alias LIKE ? OR mtchFix.description LIKE ?", array( $_keyword, $_keyword, $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
		 
	}
   public static function processCandidateParticipantSelection ( $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_sportGameGroupID=null, $_sportGameID=null, $_keyword=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("PairParticipantTeam mtchPrtTm") 
				->innerJoin("mtchPrtTm.TournamentMatchFixture mtchFix on mtchPrtTm.tournament_match_fixture_id = mtchFix.id ")  
				->leftJoin("mtchFix.TournamentMatchFixture prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchFix.TournamentSportGameGroup sprtGmGrp on mtchFix.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("mtchPrtTm.TournamentGroupParticipantTeam gmGrpMbr on mtchPrtTm.group_participant_team_id = gmGrpMbr.id ") 
				->innerJoin("gmGrpMbr.Team tmPrt on gmGrpMbr.team_id = tmPrt.id ") 
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->orderBy("mtchPrtTm.id DESC")
				->where("mtchPrtTm.id IS NOT NULL");
				if(!is_null($_tournamentMatchID)) $_qry = $_qry->addWhere("trnmtMtch.id = ? AND trnmtMtch.token_id = ? ", array($_tournamentMatchID, $_tournamentMatchTokenID));    
				if(!is_null($_matchFixtureID)) $_qry = $_qry->addWhere("mtchFix.id = ? ", $_matchFixtureID);    
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_sportGameGroupID)) $_qry = $_qry->addWhere("sprtGmGrp.id = ?", $_sportGameGroupID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("trnmt.name LIKE ? OR sprtGm.name LIKE ? OR gmCat.category_name LIKE ? OR sprtGm.alias LIKE ? OR mtchFix.description LIKE ?", array( $_keyword, $_keyword, $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
		 
	}
	//
	public static function processCandidateParticipantTeams ( $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_sportGameID=null, $_exclusion=null, $_keyword=null, $_offset=0, $_limit=10) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("PairParticipantTeam mtchPrtTm") 
				->innerJoin("mtchPrtTm.TournamentMatchFixture mtchFix on mtchPrtTm.tournament_match_fixture_id = mtchFix.id ")  
				->leftJoin("mtchFix.TournamentMatchFixture prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchFix.TournamentSportGameGroup sprtGmGrp on mtchFix.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("mtchPrtTm.TournamentGroupParticipantTeam gmGrpMbr on mtchPrtTm.group_participant_team_id = gmGrpMbr.id ") 
				->innerJoin("gmGrpMbr.Team tmPrt on gmGrpMbr.team_id = tmPrt.id ") 
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")   
				->offset($_offset)
				->limit($_limit) 
				->orderBy("mtchPrtTm.id DESC")
				->where("mtchPrtTm.id IS NOT NULL");
				if(!is_null($_tournamentMatchID)) $_qry = $_qry->addWhere("trnmtMtch.id = ? AND trnmtMtch.token_id = ? ", array($_tournamentMatchID, $_tournamentMatchTokenID));    
				if(!is_null($_matchFixtureID)) $_qry = $_qry->addWhere("mtchFix.id = ? ", $_matchFixtureID);    
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);        
				if(! is_null($_exclusion)) $_qry = $_qry->andWhereNotIn("mtchPrtTm.id ", $_exclusion );  
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("trnmt.name LIKE ? OR sprtGm.name LIKE ? OR gmCat.category_name LIKE ? OR sprtGm.alias LIKE ? OR mtchFix.description LIKE ?", array( $_keyword, $_keyword, $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
		 
	} 
	// process list selection function 
   public static function processCandidateParticipants ( $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_keyword=null, $_exclusion=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("PairParticipantTeam mtchPrtTm") 
				->innerJoin("mtchPrtTm.TournamentMatchFixture mtchFix on mtchPrtTm.tournament_match_fixture_id = mtchFix.id ")  
				->leftJoin("mtchFix.TournamentMatchFixture prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchFix.TournamentSportGameGroup sprtGmGrp on mtchFix.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("mtchPrtTm.TournamentGroupParticipantTeam gmGrpMbr on mtchPrtTm.group_participant_team_id = gmGrpMbr.id ") 
				->innerJoin("gmGrpMbr.Team tmPrt on gmGrpMbr.team_id = tmPrt.id ") 
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->offset($_offset)
				->limit($_limit) 
				->orderBy("mtchPrtTm.id ASC")
				->where("mtchPrtTm.id IS NOT NULL");
				if(!is_null($_tournamentMatchID)) $_qry = $_qry->addWhere("trnmtMtch.id = ? AND trnmtMtch.token_id = ? ", array($_tournamentMatchID, $_tournamentMatchTokenID));
				if(!is_null($_matchFixtureID)) $_qry = $_qry->addWhere("mtchFix.id = ?", $_matchFixtureID);    
				//if(!is_null($_teamGroupID)) $_qry = $_qry->addWhere("sprtGmGrp.id = ?", $_teamGroupID);    
				//if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);      
				if(! is_null($_exclusion)) $_qry = $_qry->andWhereNotIn("mtchPrtTm.id ", $_exclusion );         
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("gmCat.category_name LIKE ? OR mtchFix.id LIKE ? OR mtchFix.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
	public static function processObject ( $_orgID=null, $_orgTokenID=null, $_matchID, $_tokenID ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("PairParticipantTeam mtchFix") 
				->innerJoin("mtchFix.Tournament trnmt on mtchFix.tournament_id = trnmt.id ")  
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				//->innerJoin("tm.Organization org on tm.org_id = org.id ")     
				->where("mtchFix.id = ? AND mtchFix.token_id = ? ", array($_matchID, $_tokenID ));
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeObject ( $_orgID=null, $_matchID, $_tokenID  ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("PairParticipantTeam mtchFix") 
				->innerJoin("mtchFix.Tournament trnmt on mtchFix.tournament_id = trnmt.id ")  
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				//->innerJoin("tm.Organization org on tm.org_id = org.id ")     
				->where("mtchFix.id = ? AND mtchFix.token_id = ? ", array($_matchID, $_tokenID ));
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeCandidateObject ( $_orgID=null, $_activeFlag ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("PairParticipantTeam mtchFix") 
				->innerJoin("mtchFix.Tournament trnmt on mtchFix.tournament_id = trnmt.id ")  
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				//->innerJoin("tm.Organization org on tm.org_id = org.id ")  
				->where("mtchFix.id IS NOT NULL");
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				if(!is_null($_activeFlag)) $_qry = $_qry->andWhere("mtchFix.active_flag = ?", $_activeFlag);
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	 
}

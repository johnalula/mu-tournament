<?php

/**
 * TournamentMatchParticipantTeamTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TournamentMatchParticipantTeamTable extends PluginTournamentMatchParticipantTeamTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TournamentMatchParticipantTeamTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TournamentMatchParticipantTeam');
    }
   //
	public static function processNew ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureTokenID, $_matchFixtureGroupID, $_matchFixtureGroupTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamGroupID, $_participantTeamGroupTokenID, $_sportGameOpponentGroupID, $_sportGameOpponentGroupTokenID, $_opponentParticipantTeamGroupID, $_opponentParticipantTeamGroupTokenID, $_opponentParticipantTeamID, $_opponentParticipantTeamTokenID, $_matchFixtureName, $_participantTeamName, $_sportGameGroupName, $_sportGameOpponentGroupName, $_opponentParticipantTeamName, $_description, $_contestantTeamMode, $_dataCreationMode, $_userID, $_userTokenID )
	{
			$_flag = true;
			
			$_tournamentMatchFixture = TournamentMatchFixtureTable::processObject ( $_orgID, sha1(md5($_orgTokenID)), $_matchFixtureID, $_matchFixtureTokenID );
			
			switch ( trim($_contestantTeamMode) ) {
				case TournamentCore::$_PAIR_TEAM: 
					 
						$_matchFixtureGroup = PairParticipantTeamTable::processNew ( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureTokenID, $_matchFixtureGroupID, $_matchFixtureGroupTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamGroupID, $_participantTeamGroupTokenID, $_sportGameOpponentGroupID, $_sportGameOpponentGroupTokenID, $_opponentParticipantTeamGroupID, $_opponentParticipantTeamGroupTokenID, $_opponentParticipantTeamID, $_opponentParticipantTeamTokenID, $_matchFixtureName, $_participantTeamName, $_sportGameGroupName, $_sportGameOpponentGroupName, $_opponentParticipantTeamName, $_description, $_dataCreationMode );
						
				break; 
				case TournamentCore::$_MULTIPLE_TEAM:  
					
					$_matchFixtureGroup = MultipleParticipantTeamTable::processNew ( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureTokenID, $_matchFixtureGroupID, $_matchFixtureGroupTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamGroupID, $_participantTeamGroupTokenID, $_matchFixtureName, $_participantTeamName, $_matchStatus, $_description, $_dataCreationMode);
					
				break;
			}
			
			$_flag1 = $_tournamentMatchFixture->checkInitiated () ? $_tournamentMatchFixture->makePending ():true;
			
			if($_orgID && $_userID) { 
				
				$_actionID = SystemCore::$_CREATE; 
				$_moduleID  = ModuleCore::$_TOURNAMENT_MATCH;  
				$_actionObject  = 'Match Fixture ID: '.$_matchFixtureGroup->id;  
				$_actionDesc  = 'Tournament Match Fixture Participant Teams- [ Module: '.ModuleCore::processModuleValue(ModuleCore::$_TOURNAMENT_MATCH).' ]';  
			
				$_flag1 = SystemLogFileTable::processNew ($_orgID, $_orgTokenID, $_userID, $_userTokenID, $_moduleID, $_actionID, $_actionObject, $_actionDesc);
			}
			
		
		return $_matchFixtureGroup ? true:false;
	}
	//
	public static function processCreate ( )
	{
		
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
		 //(EXISTS (SELECT tmMmbrPrtRol1.id FROM TeamMemberParticipantRole tmMmbrPrtRol1 WHERE tmMmbrPrtRol1.tournament_sport_game_group_id = sprtGmGrp.id AND gmGrpMbr1.tournament_sport_game_group_token_id = ".sha1."(".md5."("."sprtGmGrp.token_id)) AND gmGrpMbr1.confirmed_status=".TournamentCore::$_INITIATED." AND gmGrpMbr1.confirmed_flag IS FALSE )) as hasActiveGroupParticipantTeam,
		 
		// ((SELECT COUNT(gmGrpMbr1.id) FROM TournamentGroupParticipantTeam gmGrpMbr1 WHERE gmGrpMbr1.tournament_sport_game_group_id = sprtGmGrp.id AND gmGrpMbr1.tournament_sport_game_group_token_id = ".sha1."(".md5."("."sprtGmGrp.token_id)) AND gmGrpMbr1.confirmed_status=".TournamentCore::$_INITIATED." AND gmGrpMbr1.confirmed_flag IS FALSE )) as hasActiveGroupParticipantTeam,
	}
	public static function appendQueryFields ( ) 
	{		
		 $_queryFileds = "mtchPrtTm.id, mtchPrtTm.approval_status as apporvalStatus, 
								
								mtchPrtTm.match_result_score as matchResultScore, 
								
								mtchFixGrp.id, 
								
								mtchFix.id, mtchFix.sport_game_id as fixtureSportGameID, mtchFix.match_round_type_id as matchRoundTypeID, mtchFix.event_type as matchEventType, mtchFix.contestant_mode as matchContestantMode, mtchFix.match_venue as matchVenue, mtchFix.gender_category_id as genderCategoryID, mtchFix.tournament_match_fixture_number as tournamentMatchFixtureNumber, mtchFix.tournament_match_fixture_full_number as tournamentMatchFixtureFullNumber, mtchFix.match_venue as tournamentMatchVenue, mtchFix.match_date as matchDate, mtchFix.match_time as matchTime, mtchFix.id as groupID, mtchFix.active_flag as activeFlag, 
		 
								trnmtMtch.id as tournamentMatchID, trnmtMtch.tournament_match_number as tournamentMatchNumber,
								
								sprtGmGrp.id as sportGameGroupID, sprtGmGrp.token_id as sportGameGroupTokenID, sprtGmGrp.group_name as sportGameGroupName, sprtGmGrp.group_code as sportGameGroupCode, sprtGmGrp.contestant_team_mode as teamGroupContestantTeamMode, sprtGmGrp.gender_category_id as teamGroupGenderCategoryID, sprtGmGrp.total_group_members as totalGroupMembers, sprtGmGrp.start_date as matchDate, sprtGmGrp.approval_status as apporvalStatus, sprtGmGrp.active_flag as teamGroupActiveFlag
								
								sprtGm.id as sportGameID, sprtGm.token_id as sportGameTokenID, sprtGm.name as sportGameName,  sprtGm.sport_game_category_id as matchSportGameCategoryID, sprtGm.contestant_team_mode as gameContestantTeamMode, sprtGm.sport_game_type_mode as sportGameTypeMode, sprtGm.contestant_team_mode as contestantTeamMode, sprtGm.contestant_mode as contestantMode, sprtGm.distance_type as sportGameDistanceTypeID, sprtGm.distance_type as sportGameDistanceTypeID, 
								
								gmCat.id as gameCategoryID, gmCat.token_id as gameCategoryTokenID, gmCat.category_name as gameCategoryName, gmCat.alias as gameCategoryAlias,
								trnmt.id as tournamentID, trnmt.token_id as tournamentTokenID, trnmt.name as tournamentName, trnmt.alias as tournamentAlias,
								 
								
								gmGrpMbr.id as groupParticipantTeamID, gmGrpMbr.token_id as groupParticipantTeamTokenID,
								
								tmPrt.id as participantTeamID, tmPrt.token_id as participantTeamTokenID, tmPrt.team_name as participantTeamName, tmPrt.alias as participantTeamAlias, tmPrt.team_full_alias as participantTeamFullAlias, tmPrt.country_id as teamCountry, tmPrt.team_city as teamCity, tmPrt.team_number as teamNumber, tmPrt.confirmed_flag as teamConfirmFlag,
		 
								
								 
		";	
		return $_queryFileds;
	}
	//
  // process list selection function 
   public static function processSelection ( $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_sportGameGroupID=null, $_sportGameID=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatchParticipantTeam mtchPrtTm") 
				->innerJoin("mtchPrtTm.TournamentMatchFixtureGroup mtchFixGrp on mtchPrtTm.tournament_match_fixture_group_id = mtchFixGrp.id ") 
				->innerJoin("mtchPrtTm.TournamentMatchFixture mtchFix on mtchPrtTm.tournament_match_fixture_id = mtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchPrtTm.TournamentGroupParticipantTeam gmGrpMbr on mtchPrtTm.group_participant_team_id = gmGrpMbr.id ")
				->innerJoin("mtchPrtTm.TournamentSportGameGroup sprtGmGrp on mtchPrtTm.tournament_sport_game_group_id = sprtGmGrp.id ") 
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
				->from("TournamentMatchParticipantTeam mtchPrtTm") 
				->innerJoin("mtchPrtTm.TournamentMatchFixtureGroup mtchFixGrp on mtchPrtTm.tournament_match_fixture_group_id = mtchFixGrp.id ") 
				->innerJoin("mtchPrtTm.TournamentMatchFixture mtchFix on mtchPrtTm.tournament_match_fixture_id = mtchFix.id ")  
				->leftJoin("mtchFix.TournamentMatchFixture prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchPrtTm.TournamentGroupParticipantTeam gmGrpMbr on mtchPrtTm.group_participant_team_id = gmGrpMbr.id ")
				->innerJoin("mtchPrtTm.TournamentSportGameGroup sprtGmGrp on mtchPrtTm.tournament_sport_game_group_id = sprtGmGrp.id ")  
				->innerJoin("gmGrpMbr.Team tmPrt on gmGrpMbr.team_id = tmPrt.id ") 
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
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
	}
	//
   public static function processCandidates ( $_tournamentID=null, $_matchID=null, $_machTokenID=null, $_categoryID=null, $_keyword=null, $_exclusion=null, $_activeFlag=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatchParticipantTeam mtchPrtTm") 
				->innerJoin("mtchPrtTm.TournamentMatchFixtureGroup mtchFixGrp on mtchPrtTm.tournament_match_fixture_group_id = mtchFixGrp.id ") 
				->innerJoin("mtchPrtTm.TournamentMatchFixture mtchFix on mtchPrtTm.tournament_match_fixture_id = mtchFix.id ")  
				->leftJoin("mtchFix.TournamentMatchFixture prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchPrtTm.TournamentGroupParticipantTeam gmGrpMbr on mtchPrtTm.group_participant_team_id = gmGrpMbr.id ")
				->innerJoin("mtchPrtTm.TournamentSportGameGroup sprtGmGrp on mtchPrtTm.tournament_sport_game_group_id = sprtGmGrp.id ")  
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
   public static function processCandidateSelections ( $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_matchFixtureGroupID=null, $_sportGameID=null, $_sportGameGroupID=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatchParticipantTeam mtchPrtTm") 
				->innerJoin("mtchPrtTm.TournamentMatchFixtureGroup mtchFixGrp on mtchPrtTm.tournament_match_fixture_group_id = mtchFixGrp.id ") 
				->innerJoin("mtchPrtTm.TournamentMatchFixture mtchFix on mtchPrtTm.tournament_match_fixture_id = mtchFix.id ")  
				->leftJoin("mtchFix.TournamentMatchFixture prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchPrtTm.TournamentGroupParticipantTeam gmGrpMbr on mtchPrtTm.group_participant_team_id = gmGrpMbr.id ")
				->innerJoin("mtchPrtTm.TournamentSportGameGroup sprtGmGrp on mtchPrtTm.tournament_sport_game_group_id = sprtGmGrp.id ")  
				->innerJoin("gmGrpMbr.Team tmPrt on gmGrpMbr.team_id = tmPrt.id ") 
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->orderBy("mtchPrtTm.id DESC")
				->where("mtchPrtTm.id IS NOT NULL");
				if(!is_null($_tournamentMatchID)) $_qry = $_qry->addWhere("trnmtMtch.id = ? AND trnmtMtch.token_id = ? ", array($_tournamentMatchID, $_tournamentMatchTokenID));    
				if(!is_null($_parentMatchID)) $_qry = $_qry->addWhere("mtchFix.id = ? ", $_matchFixtureID);    
				if(!is_null($_matchFixtureGroupID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_matchFixtureGroupID);    
				if(!is_null($_sportGameGroupID)) $_qry = $_qry->addWhere("sprtGmGrp.id = ?", $_sportGameGroupID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    

			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
		 
	}
   public static function processCandidateParticipantSelection ( $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_sportGameGroupID=null, $_sportGameID=null, $_keyword=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatchParticipantTeam mtchPrtTm") 
				->innerJoin("mtchPrtTm.TournamentMatchFixtureGroup mtchFixGrp on mtchPrtTm.tournament_match_fixture_group_id = mtchFixGrp.id ") 
				->innerJoin("mtchPrtTm.TournamentMatchFixture mtchFix on mtchPrtTm.tournament_match_fixture_id = mtchFix.id ")  
				->leftJoin("mtchFix.TournamentMatchFixture prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchPrtTm.TournamentGroupParticipantTeam gmGrpMbr on mtchPrtTm.group_participant_team_id = gmGrpMbr.id ")
				->innerJoin("mtchPrtTm.TournamentSportGameGroup sprtGmGrp on mtchPrtTm.tournament_sport_game_group_id = sprtGmGrp.id ") 
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
	public static function processCandidateParticipantTeams ( $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_sportGameID=null, $_exclusion=null, $_keyword=null, $_offset=0, $_limit=10) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatchParticipantTeam mtchPrtTm") 
				->innerJoin("mtchPrtTm.TournamentMatchFixtureGroup mtchFixGrp on mtchPrtTm.tournament_match_fixture_group_id = mtchFixGrp.id ") 
				->innerJoin("mtchPrtTm.TournamentMatchFixture mtchFix on mtchPrtTm.tournament_match_fixture_id = mtchFix.id ")  
				->leftJoin("mtchFix.TournamentMatchFixture prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchPrtTm.TournamentGroupParticipantTeam gmGrpMbr on mtchPrtTm.group_participant_team_id = gmGrpMbr.id ")
				->innerJoin("mtchPrtTm.TournamentSportGameGroup sprtGmGrp on mtchPrtTm.tournament_sport_game_group_id = sprtGmGrp.id ")   
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
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);        
				if(! is_null($_exclusion)) $_qry = $_qry->andWhereNotIn("mtchPrtTm.id ", $_exclusion );  
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("trnmt.name LIKE ? OR sprtGm.name LIKE ? OR gmCat.category_name LIKE ? OR sprtGm.alias LIKE ? OR mtchFix.description LIKE ?", array( $_keyword, $_keyword, $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
		 
	} 
	//
	public static function processAllCandidateParticipantTeams ( $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_sportGameID=null, $_exclusion=null, $_keyword=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatchParticipantTeam mtchPrtTm") 
				->innerJoin("mtchPrtTm.TournamentMatchFixtureGroup mtchFixGrp on mtchPrtTm.tournament_match_fixture_group_id = mtchFixGrp.id ") 
				->innerJoin("mtchPrtTm.TournamentMatchFixture mtchFix on mtchPrtTm.tournament_match_fixture_id = mtchFix.id ")  
				->leftJoin("mtchFix.TournamentMatchFixture prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchPrtTm.TournamentGroupParticipantTeam gmGrpMbr on mtchPrtTm.group_participant_team_id = gmGrpMbr.id ")
				->innerJoin("mtchPrtTm.TournamentSportGameGroup sprtGmGrp on mtchPrtTm.tournament_sport_game_group_id = sprtGmGrp.id ") 
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
				->from("TournamentMatchParticipantTeam mtchPrtTm") 
				->innerJoin("mtchPrtTm.TournamentMatchFixtureGroup mtchFixGrp on mtchPrtTm.tournament_match_fixture_group_id = mtchFixGrp.id ") 
				->innerJoin("mtchPrtTm.TournamentMatchFixture mtchFix on mtchPrtTm.tournament_match_fixture_id = mtchFix.id ")  
				->leftJoin("mtchFix.TournamentMatchFixture prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchPrtTm.TournamentGroupParticipantTeam gmGrpMbr on mtchPrtTm.group_participant_team_id = gmGrpMbr.id ")
				->innerJoin("mtchPrtTm.TournamentSportGameGroup sprtGmGrp on mtchPrtTm.tournament_sport_game_group_id = sprtGmGrp.id ") 
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
				->from("TournamentMatchParticipantTeam mtchPrtTm") 
				->innerJoin("mtchPrtTm.TournamentMatchFixtureGroup mtchFixGrp on mtchPrtTm.tournament_match_fixture_group_id = mtchFixGrp.id ") 
				->innerJoin("mtchPrtTm.TournamentMatchFixture mtchFix on mtchPrtTm.tournament_match_fixture_id = mtchFix.id ")  
				->leftJoin("mtchFix.TournamentMatchFixture prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchPrtTm.TournamentGroupParticipantTeam gmGrpMbr on mtchPrtTm.group_participant_team_id = gmGrpMbr.id ")
				->innerJoin("mtchPrtTm.TournamentSportGameGroup sprtGmGrp on mtchPrtTm.tournament_sport_game_group_id = sprtGmGrp.id ")  
				->innerJoin("gmGrpMbr.Team tmPrt on gmGrpMbr.team_id = tmPrt.id ") 
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->where("mtchPrtTm.id = ? AND mtchPrtTm.token_id = ? ", array($_matchID, $_tokenID ));
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeObject ( $_matchID, $_matchTokenID ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatchParticipantTeam mtchPrtTm") 
				->innerJoin("mtchPrtTm.TournamentMatchFixtureGroup mtchFixGrp on mtchPrtTm.tournament_match_fixture_group_id = mtchFixGrp.id ") 
				->innerJoin("mtchPrtTm.TournamentMatchFixture mtchFix on mtchPrtTm.tournament_match_fixture_id = mtchFix.id ")  
				->leftJoin("mtchFix.TournamentMatchFixture prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchPrtTm.TournamentGroupParticipantTeam gmGrpMbr on mtchPrtTm.group_participant_team_id = gmGrpMbr.id ")
				->innerJoin("mtchPrtTm.TournamentSportGameGroup sprtGmGrp on mtchPrtTm.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("gmGrpMbr.Team tmPrt on gmGrpMbr.team_id = tmPrt.id ") 
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->where("mtchPrtTm.id = ? AND mtchPrtTm.token_id = ? ", array($_matchID, $_matchTokenID ));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeCandidateObject ( $_orgID=null, $_activeFlag ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatchParticipantTeam mtchPrtTm") 
				->innerJoin("mtchPrtTm.TournamentMatchFixtureGroup mtchFixGrp on mtchPrtTm.tournament_match_fixture_group_id = mtchFixGrp.id ") 
				->innerJoin("mtchPrtTm.TournamentMatchFixture mtchFix on mtchPrtTm.tournament_match_fixture_id = mtchFix.id ")  
				->leftJoin("mtchFix.TournamentMatchFixture prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchPrtTm.TournamentGroupParticipantTeam gmGrpMbr on mtchPrtTm.group_participant_team_id = gmGrpMbr.id ")
				->innerJoin("mtchPrtTm.TournamentSportGameGroup sprtGmGrp on mtchPrtTm.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("gmGrpMbr.Team tmPrt on gmGrpMbr.team_id = tmPrt.id ") 
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->where("mtchFix.id IS NOT NULL");
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				if(!is_null($_activeFlag)) $_qry = $_qry->andWhere("mtchFix.active_flag = ?", $_activeFlag);
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	 
	//
   public static function makeCandidateGroupParticipantSelection ( $_fixtureGroupID=null ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatchParticipantTeam mtchPrtTm") 
				->innerJoin("mtchPrtTm.TournamentMatchFixtureGroup mtchFixGrp on mtchPrtTm.tournament_match_fixture_group_id = mtchFixGrp.id ") 
				->innerJoin("mtchPrtTm.TournamentMatchFixture mtchFix on mtchPrtTm.tournament_match_fixture_id = mtchFix.id ")  
				->leftJoin("mtchFix.TournamentMatchFixture prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchPrtTm.TournamentGroupParticipantTeam gmGrpMbr on mtchPrtTm.group_participant_team_id = gmGrpMbr.id ")
				->innerJoin("mtchPrtTm.TournamentSportGameGroup sprtGmGrp on mtchPrtTm.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("gmGrpMbr.Team tmPrt on gmGrpMbr.team_id = tmPrt.id ") 
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->orderBy("mtchPrtTm.id ASC")
				->where("mtchPrtTm.id IS NOT NULL");
				if(!is_null($_fixtureGroupID)) $_qry = $_qry->addWhere("mtchFixGrp.id = ?", $_fixtureGroupID);    
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}  
	 
	/*********************************************************/
	
	public static function makeAllCandidateSelection ( $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_sportGameTypeID=null, $_sportGameID=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatchParticipantTeam mtchPrtTm") 
				->innerJoin("mtchPrtTm.TournamentMatchFixtureGroup mtchFixGrp on mtchPrtTm.tournament_match_fixture_group_id = mtchFixGrp.id ") 
				->innerJoin("mtchPrtTm.TournamentMatchFixture mtchFix on mtchPrtTm.tournament_match_fixture_id = mtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchPrtTm.TournamentGroupParticipantTeam gmGrpMbr on mtchPrtTm.group_participant_team_id = gmGrpMbr.id ")
				->innerJoin("mtchPrtTm.TournamentSportGameGroup sprtGmGrp on mtchPrtTm.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("gmGrpMbr.Team tmPrt on gmGrpMbr.team_id = tmPrt.id ") 
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->orderBy("mtchPrtTm.id DESC")
				->where("mtchPrtTm.id IS NOT NULL");
				if(!is_null($_tournamentMatchID)) $_qry = $_qry->addWhere("trnmtMtch.id = ? AND trnmtMtch.token_id = ? ", array($_tournamentMatchID, $_tournamentMatchTokenID));
				if(!is_null($_matchFixtureID)) $_qry = $_qry->addWhere("mtchFix.id = ?", $_matchFixtureID);    
				if(!is_null($_sportGameTypeID)) $_qry = $_qry->addWhere("gmCat.id = ?", $_sportGameTypeID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);  
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	
	/*********************************************************/
	
	public static function selectCandidates ( $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_matchFixtureGroupID=null, $_sportGameID=null ) 
   {
		$_qry = Doctrine_Query::create()
				->select("mtchPrtTm.id")
				->from("TournamentMatchParticipantTeam mtchPrtTm") 
				->innerJoin("mtchPrtTm.TournamentMatchFixtureGroup mtchFixGrp on mtchPrtTm.tournament_match_fixture_group_id = mtchFixGrp.id ") 
				->innerJoin("mtchPrtTm.TournamentMatchFixture mtchFix on mtchPrtTm.tournament_match_fixture_id = mtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchPrtTm.TournamentGroupParticipantTeam gmGrpMbr on mtchPrtTm.group_participant_team_id = gmGrpMbr.id ")
				->innerJoin("mtchPrtTm.TournamentSportGameGroup sprtGmGrp on mtchPrtTm.tournament_sport_game_group_id = sprtGmGrp.id ") 
				//->innerJoin("gmGrpMbr.Team tmPrt on gmGrpMbr.team_id = tmPrt.id ") 
				//->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				//->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				//->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				//->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->orderBy("mtchPrtTm.id DESC")
				->where("mtchPrtTm.id IS NOT NULL");
				//if(!is_null($_tournamentMatchID)) $_qry = $_qry->addWhere("trnmtMtch.id = ? AND trnmtMtch.token_id = ? ", array($_tournamentMatchID, $_tournamentMatchTokenID));    
				//if(!is_null($_matchFixtureID)) $_qry = $_qry->addWhere("mtchFix.id = ? ", $_matchFixtureID);    
				//if(!is_null($_matchFixtureGroupID)) $_qry = $_qry->addWhere("mtchFixGrp.id = ? ", $_matchFixtureGroupID);    
				//if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);  
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
		 
	}
	
	/*********************************************************
	********** Candidate selection process *******************
	**********************************************************/
	
	//
	public static function processCandidateSportGameTeamGroups ( $_orgID=null, $_orgTokenID=null, $_tournamentID=null, $_parentMatchID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_sportGameTypeID=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_tournamentMatchFixtures = self::processCandidateSelections ( $_tournamentID, $_parentMatchID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameTypeID, $_keyword);
		//if(!$_groupMemberTeams) { return false; }   
		$_exclusion = array();   
		foreach($_tournamentMatchFixtures as $_tournamentMatchFixture) {
			$_exclusion[] = $_tournamentMatchFixture->sport_game_group_id;
		} 
	
		return SportGameGroupTable::processCandidates ( $_orgID, $_orgTokenID, $_tournamentID, $_sportGameID, $_sportGameTokenID, $_sportGameTypeID, $_genderCategoryID, $_keyword, $_exclusion, $_offset, $_limit);
		
		//return TeamGameParticipationTable::processCandidateParticipants ($_tournamentID, $_teamID, $_teamTokenID, $_sportGameID, $_gameTypeID, $_genderCategory, $_keyword, $_exclusion, $_offset, $_limit );
	} 
	
	/*********************************************************
	********** Candidate filtering process *******************
	**********************************************************/
	 
}

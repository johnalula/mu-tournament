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
	public static function processNew ( $_orgID, $_orgTokenID, $_tournamentID, $_tournamentTokenID, $_sportGameCategoryID, $_sportGameCategoryName, $_tournamentMatchName, $_contestantTeamMode, $_matchRoundMode, $_matchDate, $_status, $_description, $_userID, $_userTokenID )
	{
		 $_flag = true;
			
				$_codeConfig = CodeGeneratorTable::processDefaultSelection (null, null, SystemCore::$_MATCH, true  ); 
				$_codeNumber =  $_codeConfig->hasDeletedCode ? $_codeConfig->deletedCode:$_codeConfig->lastCode; 
				$_matchNumber = $_codeConfig->prefixCode.'-'.SystemCore::processCodeGeneratorInitialNumber($_codeNumber);
				
				$_tournamentMatch = self::processSave ( $_orgID, $_orgTokenID, $_tournamentID, $_tournamentTokenID, $_sportGameCategoryID, $_sportGameCategoryName, $_tournamentMatchName, $_matchNumber, $_contestantTeamMode, $_matchRoundMode, $_matchDate, $_status, $_description );
		
		return $_tournamentMatch;
	}
	//
	public static function processCreate ( )
	{
		
	} 
	public static function processSave ( $_orgID, $_orgTokenID, $_tournamentID, $_tournamentTokenID, $_sportGameCategoryID, $_sportGameCategoryName, $_tournamentMatchName, $_matchNumber, $_contestantTeamMode, $_matchRoundMode, $_matchDate, $_status, $_description )
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
			$_nw->match_number = trim($_matchNumber); 
			$_nw->contestant_team_mode = trim($_contestantTeamMode); 
			$_nw->tournament_match_round_mode = trim($_matchRoundMode); 
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
		 $_queryFileds = "trnmtMtch.id, trnmtMtch.sport_game_category_id as matchSportGameCategoryID, trnmtMtch.match_number as matchNumber, trnmtMtch.tournament_match_round_mode as tournamentMatchRoundMode, trnmtMtch.active_flag as activeFlag, trnmtMtch.start_date as matchDate, 
								gmCat.id as gameCategoryID, gmCat.token_id as gameCategoryTokenID, gmCat.category_name as gameCategoryName, gmCat.alias as gameCategoryAlias, gmCat.contestant_team_mode as contestantTeamMode,
								trnmt.id as tournamentID, trnmt.token_id as tournamentTokenID, trnmt.name as tournamentName, trnmt.alias as tournamentAlias,
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
		
		return TournamentSportGameGroupTable::processCandidateTournamentSportGameGroups ( $_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameTypeID, $_sportGameID, $_keyword, $_approvalStatus, $_status, $_exclusion, $_offset, $_limit ) ;
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
	
	//
	public static function selectCandidateTournamentMatchRounds ( $_orgID=null,  $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_tournamentFixtureID=null, $_sportGameID=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		/*$_tournamentMatchFixtures = self::processCandidateSelections ( $_tournamentID, $_parentMatchID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameTypeID, $_keyword);
		//if(!$_groupMemberTeams) { return false; }   
		$_exclusion = array();   
		foreach($_tournamentMatchFixtures as $_tournamentMatchFixture) {
			$_exclusion[] = $_tournamentMatchFixture->sport_game_group_id;
		} */
	
		return RoundTypeTable::processCandidateSelection ( $_orgID, $_roundType, $_exclusion, $_keyword, $_offset, $_limit);
		
		//return TeamGameParticipationTable::processCandidateParticipants ($_tournamentID, $_teamID, $_teamTokenID, $_sportGameID, $_gameTypeID, $_genderCategory, $_keyword, $_exclusion, $_offset, $_limit );
	} 
	
	
	/********** Candidate Match Fixtures *******************/
	//
	public static function selectCandidateMatchFixtures ( $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_sportGameID=null, $_sportGameTypeID=null, $_genderCategoryID=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		/*$_groupParticipantTeams = SportGameGroupParticipantTeamTable::processCandidateParticipants($_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameID, $_genderCategoryID, $_keyword);
		$_exclusion = array();   
		foreach($_groupParticipantTeams as $_groupParticipantTeam) {
			$_exclusion[] = $_groupParticipantTeam->team_id;
		} */
		
		return TournamentMatchFixtureTable::processCandidates ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_genderCategoryID, $_keyword, $_exclusion,$_offset, $_limit) ;
	} 
	//
	public static function selectCandidateParticipantTeams ( $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_sportGameGroupID=null, $_sportGameID=null, $_genderCategory=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_candidateParticipantTeams = TournamentMatchParticipantTeamTable::processCandidateParticipantSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameGroupID, $_sportGameID, $_keyword);
		$_exclusion = array();   
		foreach($_candidateParticipantTeams as $_candidateParticipantTeam) {
			$_exclusion[] = $_candidateParticipantTeam->group_participant_team_id;
		} 
		
		return TournamentGroupParticipantTeamTable::processCandidateParticipantTeamSelection ( $_tournamentID, $_tournamentGroupID, $_sportGameGroupID, $_sportGameID, $_genderCategory, $_keyword, $_exclusion, $_offset, $_limit ) ;
	} 
	//
	public static function selectAllCandidateParticipantTeams ( $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_sportGameGroupID=null, $_sportGameID=null, $_genderCategory=null, $_keyword=null) 
   {
		$_candidateParticipantTeams = TournamentMatchParticipantTeamTable::processCandidateParticipantSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameGroupID, $_sportGameID, $_keyword);
		$_exclusion = array();   
		foreach($_candidateParticipantTeams as $_candidateParticipantTeam) {
			$_exclusion[] = $_candidateParticipantTeam->group_participant_team_id;
		} 
		
		return TournamentGroupParticipantTeamTable::processAllCandidateParticipantTeamSelection ( $_tournamentID, $_tournamentGroupID, $_sportGameGroupID, $_sportGameID, $_genderCategory, $_keyword, $_exclusion, $_offset, $_limit ) ;
	} 
	
	/********** Candidate Match Fixture Participants *******************/
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
	//
	public static function selectCandidateParticipantTeamMembers( $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_matchFixtureID=null, $_participantTeamID=null, $_participantTeamTokenID=null, $_groupMemberTeamID=null, $_sportGameID=null, $_genderCategory=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		/*$_candidateParticipantTeams = TournamentMatchParticipantTeamTable::processCandidateParticipantSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameGroupID, $_sportGameID, $_keyword);
		$_exclusion = array();   
		foreach($_candidateParticipantTeams as $_candidateParticipantTeam) {
			$_exclusion[] = $_candidateParticipantTeam->group_participant_team_id;
		} */
		
		//return TournamentGroupParticipantTeamMemberTable::processCandidateParticipantTeamMembers ($_tournamentID, $_tournamentGroupID, $_groupMemberTeamID, $_participantTeamID, $_participantTeamTokenID, $_sportGameID, $_genderCategory, $_exclusion, $_keyword, $_offset, $_limit ) ;
		
		return TournamentGroupParticipantTeamMemberTable::processSelection ( $_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameGroupID, $_sportGameID, $_genderCategoryID, $_keyword, $_offset, $_limit ) ;
	} 
	 
}

<?php

/**
 * TournamentMatchFixtureGroupTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TournamentMatchFixtureGroupTable extends PluginTournamentMatchFixtureGroupTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TournamentMatchFixtureGroupTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TournamentMatchFixtureGroup');
    }
     //
	public static function processNew ( $_tournamentMatchFixtureID, $_tournamentMatchFixtureTokenID, $_sportGameGroupID, $_sportGameGroupName, $_tournamentMatchVenue, $_matchTime, $_matchDate, $_matchStatus, $_description )
	{
			$_flag = true;
			
			$_matchFixtureGroup = self::processSave ( $_tournamentMatchFixtureID, $_tournamentMatchFixtureTokenID, $_sportGameGroupID, $_sportGameGroupName, $_tournamentMatchVenue, $_matchTime, $_matchDate, $_matchStatus, $_description );
			
		return $_matchFixtureGroup;
	}
	//
	public static function processCreate ( )
	{
		
	} 
	public static function processSave ( $_tournamentMatchFixtureID, $_tournamentMatchFixtureTokenID, $_sportGameGroupID, $_sportGameGroupName, $_tournamentMatchVenue, $_matchTime, $_matchDate, $_matchStatus, $_description )
	{
		//try {
			//if(!$_orgID || !$_name) return false;
			$_token = trim($_sportGameGroupID).trim($_tournamentMatchTokenID).trim($_matchDate).rand('11111', '99999'); 
			$_startDate = date('m/d/Y', time());
			$_nw = new TournamentMatchFixtureGroup (); 
			$_nw->token_id = sha1(md5(trim($_token))); 
			$_nw->tournament_match_fixture_id = trim($_tournamentMatchFixtureID); 
			$_nw->tournament_match_fixture_token_id = sha1(md5(trim($_tournamentMatchFixtureID)));  
			$_nw->tournament_sport_game_group_id = trim($_sportGameGroupID  ); 
			$_nw->match_venue = trim($_tournamentMatchVenue); 
			$_nw->match_time = trim($_matchTime); 
			$_nw->match_date = trim($_matchDate); 
			$_nw->effective_date = $_matchDate ? trim($_matchDate):trim($_startDate); 
			$_nw->active_flag = false;  
			$_nw->approval_status = $_matchStatus ? trim($_matchStatus):TournamentCore::$_INITIATED;  
			$_nw->status = $_matchStatus ? trim($_matchStatus):TournamentCore::$_INITIATED;  
			$_nw->description = SystemCore::processDescription ( trim($_sportGameGroupName), trim($_description) );  
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
		 $_queryFileds = "mtchFixGrp.id, mtchFix.match_venue as tournamentMatchFixtureVenue, mtchFix.match_date as matchDate, mtchFix.match_time as matchTime, 
		 
								mtchFix.id as matchFixtureID, mtchFix.token_id as matchFixtureTokenID, mtchFix.match_round_type_id as matchRoundTypeID, mtchFix.event_type as matchEventType, mtchFix.contestant_mode as matchContestantMode, mtchFix.match_venue as matchVenue, mtchFix.gender_category_id as genderCategoryID, mtchFix.tournament_match_fixture_number as tournamentMatchFixtureNumber, mtchFix.tournament_match_fixture_full_number as tournamentMatchFixtureFullNumber, mtchFix.match_venue as tournamentMatchVenue, mtchFix.match_date as matchDate, mtchFix.match_time as matchTime, mtchFix.id as groupID, mtchFix.active_flag as activeFlag, mtchFix.sport_game_id as fixtureSportGameID,, mtchFix.match_round_type_name as roundTypeName, 
		 
								trnmtMtch.id as tournamentMatchID, trnmtMtch.tournament_match_number as tournamentMatchNumbe, trnmtMtch.tournament_match_full_number as tournamentMatchFullNumber,
								prntMtchFix.id as parentMatchFixtureID, 
								
								sprtGmGrp.id as sportGameGroupID, sprtGmGrp.token_id as sportGameGroupTokenID, sprtGmGrp.group_name as sportGameGroupName, sprtGmGrp.group_code as sportGameGroupCode, sprtGmGrp.contestant_team_mode as teamGroupContestantTeamMode, sprtGmGrp.gender_category_id as teamGroupGenderCategoryID, sprtGmGrp.total_group_members as totalGroupMembers, sprtGmGrp.start_date as matchDate, sprtGmGrp.approval_status as apporvalStatus, sprtGmGrp.active_flag as teamGroupActiveFlag
								
								sprtGm.id as sportGameID, sprtGm.token_id as sportGameTokenID, sprtGm.name as sportGameName,  sprtGm.sport_game_category_id as matchSportGameCategoryID, sprtGm.contestant_team_mode as gameContestantTeamMode, sprtGm.sport_game_type_mode as sportGameTypeMode, sprtGm.contestant_team_mode as contestantTeamMode, sprtGm.contestant_mode as contestantMode, sprtGm.distance_type as sportGameDistanceTypeID, sprtGm.distance_type as sportGameDistanceTypeID, 
								
								gmCat.id as gameCategoryID, gmCat.token_id as gameCategoryTokenID, gmCat.category_name as gameCategoryName, gmCat.alias as gameCategoryAlias,
								trnmt.id as tournamentID, trnmt.token_id as tournamentTokenID, trnmt.name as tournamentName, trnmt.alias as tournamentAlias,
								
								(EXISTS (SELECT gmGrpMbr1.id FROM TournamentGroupParticipantTeam gmGrpMbr1 WHERE gmGrpMbr1.tournament_sport_game_group_id = sprtGmGrp.id AND gmGrpMbr1.tournament_sport_game_group_token_id = ".sha1."(".md5."("."sprtGmGrp.token_id)) AND gmGrpMbr1.confirmed_status=".TournamentCore::$_INITIATED." AND gmGrpMbr1.confirmed_flag IS FALSE )) as hasActiveGroupParticipantTeam,
								 
		";	
		return $_queryFileds;
	}
	//
  // process list selection function 
   public static function processSelection ( $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_sportGameID=null, $_sportGameTypeID=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatchFixtureGroup mtchFixGrp") 
				->leftJoin("mtchFixGrp.TournamentMatchFixture mtchFix on mtchFixGrp.tournament_match_fixture_id = mtchFix.id ")  
				->leftJoin("mtchFix.TournamentMatchFixture prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchFix.TournamentSportGameGroup sprtGmGrp on mtchFix.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->offset($_offset)
				->limit($_limit) 
				->orderBy("mtchFix.id ASC")
				->where("mtchFix.id IS NOT NULL");
				if(!is_null($_tournamentMatchID)) $_qry = $_qry->addWhere("trnmtMtch.id = ? AND trnmtMtch.token_id = ? ", array($_tournamentMatchID, $_tournamentMatchTokenID));
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_sportGameTypeID)) $_qry = $_qry->addWhere("sprtGmGrp.sport_game_id = ?", $_sportGameTypeID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("gmCat.category_name LIKE ? OR mtchFix.id LIKE ? OR mtchFix.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processAll ($_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_sportGameID=null, $_sportGameTypeID=null, $_keyword=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatchFixtureGroup mtchFixGrp") 
				->leftJoin("mtchFixGrp.TournamentMatchFixture mtchFix on mtchFixGrp.tournament_match_fixture_id = mtchFix.id ")  
				->leftJoin("mtchFix.TournamentMatchFixture prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchFix.TournamentSportGameGroup sprtGmGrp on mtchFix.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("mtchFix.RoundType rndTyp on mtchFix.match_round_type_id = rndTyp.id ")    
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->orderBy("mtchFix.id ASC")
				->where("mtchFix.id IS NOT NULL");
				if(!is_null($_tournamentMatchID)) $_qry = $_qry->addWhere("trnmtMtch.id = ? AND trnmtMtch.token_id = ? ", array($_tournamentMatchID, $_tournamentMatchTokenID));
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_sportGameTypeID)) $_qry = $_qry->addWhere("sprtGmGrp.sport_game_id = ?", $_sportGameTypeID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("gmCat.category_name LIKE ? OR mtchFix.id LIKE ? OR mtchFix.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processCandidates ( $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_sportGameID=null, $_sportGameTypeID=null, $_genderCategoryID=null, $_keyword=null, $_exclusion=null, $_excluded=null,$_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatchFixtureGroup mtchFixGrp") 
				->leftJoin("mtchFixGrp.TournamentMatchFixture mtchFix on mtchFixGrp.tournament_match_fixture_id = mtchFix.id ")  
				->leftJoin("mtchFix.TournamentMatchFixture prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchFix.TournamentSportGameGroup sprtGmGrp on mtchFix.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("mtchFix.RoundType rndTyp on mtchFix.match_round_type_id = rndTyp.id ")    
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->offset($_offset)
				->limit($_limit)   
				->orderBy("mtchFix.id ASC")
				->where("mtchFix.id IS NOT NULL");
				if(!is_null($_tournamentMatchID)) $_qry = $_qry->addWhere("trnmtMtch.id = ? AND trnmtMtch.token_id = ? ", array($_tournamentMatchID, $_tournamentMatchTokenID));
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_sportGameTypeID)) $_qry = $_qry->addWhere("gmCat.id = ?", $_sportGameTypeID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);      
				//if(! is_null($_exclusion)) $_qry = $_qry->andWhereNotIn("sprtGmGrp.id ", $_exclusion );
				if(! is_null($_excluded)) $_qry = $_qry->andWhereNotIn("mtchFixGrp.id ", $_excluded );
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("gmCat.category_name LIKE ? OR mtchFix.id LIKE ? OR mtchFix.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}

	//
   public static function processCandidateSelections ( $_tournamentID=null, $_parentMatchID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_sportGameTypeID=null, $_keyword=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatchFixtureGroup mtchFix") 
				->leftJoin("mtchFix.TournamentMatchFixtureGroup prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchFix.SportGameGroup sprtGmGrp on mtchFix.sport_game_group_id = sprtGmGrp.id ")  
				->innerJoin("sprtGmGrp.GameGroupType grpTyp on sprtGmGrp.game_group_type_id = grpTyp.id ")   
				->innerJoin("mtchFix.RoundType rndTyp on mtchFix.match_round_type_id = rndTyp.id ")    
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->orderBy("mtchFix.id DESC")
				->where("mtchFix.id IS NOT NULL");
				if(!is_null($_tournamentMatchID)) $_qry = $_qry->addWhere("mtchFix.tournament_match_id = ? AND mtchFix.tournament_match_token_id = ? ", array($_tournamentMatchID, $_tournamentMatchTokenID));    
				if(!is_null($_parentMatchID)) $_qry = $_qry->addWhere("mtchFix.parent_match_fixture_id = ? ", $_parentMatchID);    
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_sportGameTypeID)) $_qry = $_qry->addWhere("gmCat.id = ?", $_sportGameTypeID);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("trnmt.name LIKE ? OR sprtGm.name LIKE ? OR gmCat.category_name LIKE ? OR sprtGm.alias LIKE ? OR mtchFix.description LIKE ?", array( $_keyword, $_keyword, $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
		 
	}
	// process list selection function 
   public static function processCandidateSelection ( $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_sportGameID=null, $_sportGameTypeID=null, $_genderCategoryID=null, $_keyword=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatchFixtureGroup mtchFix") 
				->leftJoin("mtchFix.TournamentMatchFixtureGroup prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchFix.TournamentSportGameGroup sprtGmGrp on mtchFix.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("mtchFix.RoundType rndTyp on mtchFix.match_round_type_id = rndTyp.id ")    
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")   
				->orderBy("mtchFix.id ASC")
				->where("mtchFix.id IS NOT NULL");
				if(!is_null($_tournamentMatchID)) $_qry = $_qry->addWhere("trnmtMtch.id = ? AND trnmtMtch.token_id = ? ", array($_tournamentMatchID, $_tournamentMatchTokenID));
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_sportGameTypeID)) $_qry = $_qry->addWhere("gmCat.id = ?", $_sportGameTypeID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID); 
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("gmCat.category_name LIKE ? OR mtchFix.id LIKE ? OR mtchFix.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
	public static function processObject ( $_orgID=null, $_orgTokenID=null, $_matchFixtureGroupID, $_matchFixtureGroupTokenID ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatchFixtureGroup mtchFixGrp") 
				->leftJoin("mtchFixGrp.TournamentMatchFixture mtchFix on mtchFixGrp.tournament_match_fixture_id = mtchFix.id ")  
				->leftJoin("mtchFix.TournamentMatchFixture prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchFix.TournamentSportGameGroup sprtGmGrp on mtchFix.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("mtchFix.RoundType rndTyp on mtchFix.match_round_type_id = rndTyp.id ")    
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->where("mtchFixGrp.id = ? AND mtchFixGrp.token_id = ? ", array($_matchFixtureGroupID, $_matchFixtureGroupTokenID ));
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("trnmt.org_id = ? AND trnmt.org_token_id = ?", array($_orgID, $_orgTokenID));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeObject ( $_orgID=null, $_matchID, $_tokenID  ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatchFixtureGroup mtchFix") 
				->leftJoin("mtchFix.TournamentMatchFixtureGroup prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchFix.TournamentSportGameGroup sprtGmGrp on mtchFix.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("mtchFix.RoundType rndTyp on mtchFix.match_round_type_id = rndTyp.id ")    
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
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
				->from("TournamentMatchFixtureGroup mtchFix") 
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
	 
	// process list selection function 
   public static function processCandidateSelectionGroup ( $_tournamentID=null, $_tournamentMatchID=null, $_tournamentMatchTokenID=null, $_sportGameID=null, $_sportGameTypeID=null, $_genderCategoryID=null, $_keyword=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentMatchFixtureGroup mtchFix") 
				->leftJoin("mtchFix.TournamentMatchFixtureGroup prntMtchFix on mtchFix.parent_match_fixture_id = prntMtchFix.id ")  
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")
				->innerJoin("mtchFix.TournamentSportGameGroup sprtGmGrp on mtchFix.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("mtchFix.RoundType rndTyp on mtchFix.match_round_type_id = rndTyp.id ")    
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")   
				->orderBy("mtchFix.id ASC")
				->where("mtchFix.id IS NOT NULL");
				if(!is_null($_tournamentMatchID)) $_qry = $_qry->addWhere("trnmtMtch.id = ? AND trnmtMtch.token_id = ? ", array($_tournamentMatchID, $_tournamentMatchTokenID));
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_sportGameTypeID)) $_qry = $_qry->addWhere("gmCat.id = ?", $_sportGameTypeID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID); 
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("gmCat.category_name LIKE ? OR mtchFix.id LIKE ? OR mtchFix.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
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
	 
}
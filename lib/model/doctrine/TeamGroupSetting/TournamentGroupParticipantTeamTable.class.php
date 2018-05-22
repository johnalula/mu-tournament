<?php

/**
 * TournamentGroupParticipantTeamTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TournamentGroupParticipantTeamTable extends PluginTournamentGroupParticipantTeamTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TournamentGroupParticipantTeamTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TournamentGroupParticipantTeam');
    }
    //
   public static function processNew ( $_orgID, $_orgTokenID, $_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamID, $_participantTeamTokenID, $_teamGameParticipationID, $_teamGameParticipationTokenID, $_sportGameID, $_participantTeamName, $_sportGameGroupName, $_genderCategory, $_entryDate, $_teamStatus, $_description, $_dataCreationMode, $_userID, $_userTokenID )
	{
			switch ( trim($_dataCreationMode) ) {
				case SystemCore::$_SINGLE_DATA: 
						$_groupParticipantTeam = self::processSave ( $_tournamentID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamID, $_participantTeamTokenID, $_teamGameParticipationID, $_participantTeamName, $_sportGameGroupName, $_entryDate, $_teamStatus, $_description );
				
						$_gameParticipation = TeamGameParticipationTable::processObject ( $_orgID, $_orgTokenID, $_teamGameParticipationID, $_teamGameParticipationTokenID ) ;
						
						$_flag2 = $_gameParticipation->makeConfirmation ();
						
						$_sportGameGroup =  TournamentSportGameGroupTable::processObject ($_orgID, $_orgTokenID, $_sportGameGroupID, $_sportGameGroupTokenID );  
						
						$_flag1 = ($_sportGameGroup->checkInitiated () && $_sportGameGroup->hasPendingTeamGameParticipation) ? $_sportGameGroup->makePending():$_sportGameGroup->makeActivation();
				
				break; 
				case SystemCore::$_MULTIPLE_DATA: 
					
					$_candidateParticipantTeams = TournamentTeamGroupTable::selectAllCandidateParticipantTeams ( $_tournamentGroupID, $_tournamenGroupTokenID, $_sportGameGroupID, $_sportGameID, $_genderCategory, $_keyword ); 
					
					foreach($_candidateParticipantTeams as $_participantTeam ) {
						
						$_participantTeamFullName = ($_participantTeam->teamName.' ( '.$_participantTeam->teamAlias.' ) - '.SystemCore::processCountryValue($_participantTeam->teamCountryID));
						
						$_groupParticipantTeam = self::processSave ( $_tournamentID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeam->teamID, $_participantTeam->teamTokenID, $_participantTeam->id, $_participantTeamFullName, $_sportGameGroupName, $_entryDate, $_teamStatus, $_description );
						
						$_gameParticipation = TeamGameParticipationTable::processObject ( $_orgID, $_orgTokenID, $_participantTeam->id, $_participantTeam->token_id ) ;
						
						$_flag2 = $_gameParticipation->makeConfirmation ();
					}
					
					$_sportGameGroup =  TournamentSportGameGroupTable::processObject ($_orgID, $_orgTokenID, $_sportGameGroupID, $_sportGameGroupTokenID );  
					
					$_flag1 = ($_sportGameGroup->checkInitiated () && $_sportGameGroup->hasPendingTeamGameParticipation) ? $_sportGameGroup->makePending():$_sportGameGroup->makeActivation();
					
					//$_flag1 = $_sportGameGroup->checkInitiated () ? $_sportGameGroup->makePending ():true;
				 
				break;
			
			}
			
			//$_flag1 = $_sportGameGroup->checkInitiated ? ($_sportGameGroup->hasPendingTeamGameParticipation ? $_sportGameGroup->makePending():$_sportGameGroup->makeActivation()):true;
			
			//$_flag1 = $_sportGameGroup->checkInitiated ? $_sportGameGroup->makePending():true;
			
		return $_groupParticipantTeam;
	}
	//
	public static function processCreate ( )
	{
		
	} 
	public static function processSave ( $_tournamentID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamID, $_participantTeamTokenID, $_teamGameParticipationID, $_participantTeamName, $_sportGameGroupName, $_entryDate, $_teamStatus, $_description )
	{
		//try {
			//if(!$_orgID || !$_name) return false;
    
			$_token = trim($_participantTeamID).trim($_participantTeamTokenID).trim($_teamGroupID).rand('11111', '99999'); 
			$_startDate = date('m/d/Y', time());
			$_nw = new TournamentGroupParticipantTeam (); 
			$_nw->token_id = sha1(md5(trim($_token))); 
			$_nw->tournament_id = trim($_tournamentID); 
			$_nw->tournament_sport_game_group_id = trim($_sportGameGroupID); 
			$_nw->tournament_sport_game_group_token_id = sha1(md5(trim($_sportGameGroupTokenID))); 
			$_nw->team_game_participation_id = trim($_teamGameParticipationID); 
			$_nw->team_id = trim($_participantTeamID); 
			$_nw->team_token_id = sha1(md5(trim($_participantTeamTokenID)));  
			$_nw->start_date = $_entryDate ? trim($_entryDate):trim($_startDate);; 
			$_nw->active_flag = true;  
			$_nw->approval_status = TournamentCore::$_APPROVED;   
			$_nw->status = TournamentCore::$_ACTIVE;   
			$_nw->description = SystemCore::processDescription ( (trim($_participantTeamName).' team grouped in '.trim($_sportGameGroupName)), trim($_description) );  
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
		 $_queryFileds = "gmGrpTmPrt.id, gmGrpTmPrt.active_flag as activeFlag, 
		 
								sprtGmGrp.id, sprtGmGrp.group_name as sportGameGroupName, sprtGmGrp.group_code as sportGameGroupCode, sprtGmGrp.contestant_team_mode as contestantTeamMode, sprtGmGrp.active_flag as groupActiveFlag, sprtGmGrp.gender_category_id as groupGenderCategoryID, sprtGmGrp.start_date as matchDate,
								
								trmnTmGrp.id, 
								
								sprtGm.id as sportGameID, sprtGm.token_id as sportGameTokenID, sprtGm.name as sportGameName, sprtGm.sport_game_category_id as matchSportGameCategoryID, sprtGm.contestant_team_mode as gameContestantTeamMode, sprtGm.sport_game_type_mode as sportGameTypeMode, sprtGm.contestant_team_mode as contestantTeamMode, sprtGm.contestant_mode as contestantMode, sprtGm.distance_type as sportGameDistanceTypeID, sprtGm.distance_type as sportGameDistanceTypeID, 
								
								gmCat.id as gameCategoryID, gmCat.token_id as gameCategoryTokenID, gmCat.category_name as gameCategoryName, gmCat.alias as gameCategoryAlias,
								trnmt.id as tournamentID, trnmt.token_id as tournamentTokenID, trnmt.name as tournamentName, trnmt.alias as tournamentAlias,
							 
								tmPrt.id as teamID, tmPrt.token_id as teamTokenID, tmPrt.team_number as participantTeamNumber, tmPrt.team_name as participantTeamName, tmPrt.alias as participantTeamAlias, tmPrt.country_id as participantTeamCountry, tmPrt.team_city as teamCity, tmPrt.team_number as teamNumber, tmPrt.confirmed_flag as confirmFlag,
								
							 (EXISTS (SELECT tmGmPrtn.id FROM TeamGameParticipation tmGmPrtn WHERE tmGmPrtn.team_id = tmPrt.id AND tmGmPrtn.team_token_id = ".sha1."(".md5."("."tmPrt.token_id)) )) as hasGameParticipation, 
							   
		";	
		return $_queryFileds;
	}
	//
  // process list selection function 
   public static function processSelection ( $_tournamentID=null, $_tournamentGroupID=null, $_tournamentGroupTokenID=null, $_sportGameID=null,  $_genderCategoryID=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeam gmGrpTmPrt") 
				->innerJoin("gmGrpTmPrt.TournamentSportGameGroup sprtGmGrp on gmGrpTmPrt.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("sprtGmGrp.TournamentTeamGroup trmnTmGrp on sprtGmGrp.tournament_team_group_id = trmnTmGrp.id ")  
				->innerJoin("gmGrpTmPrt.Team tmPrt on gmGrpTmPrt.team_id = tmPrt.id ") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->offset($_offset)
				->limit($_limit) 
				//->groupBy("sprtGmGrp.id")
				->orderBy("gmGrpTmPrt.id DESC")
				->where("gmGrpTmPrt.id IS NOT NULL");
				if(!is_null($_tournamentGroupID)) $_qry = $_qry->addWhere("sprtGmGrp.tournament_team_group_id = ? AND sprtGmGrp.tournament_team_group_token_id = ? ", array($_tournamentGroupID, $_tournamentGroupTokenID)); 
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("sprtGmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR sprtGmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processAll ( $_tournamentID=null, $_tournamentGroupID=null, $_tournamentGroupTokenID=null, $_sportGameID=null,  $_genderCategoryID=null, $_keyword=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeam gmGrpTmPrt") 
				->innerJoin("gmGrpTmPrt.TournamentSportGameGroup sprtGmGrp on gmGrpTmPrt.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("sprtGmGrp.TournamentTeamGroup trmnTmGrp on sprtGmGrp.tournament_team_group_id = trmnTmGrp.id ")  
				->innerJoin("gmGrpTmPrt.Team tmPrt on gmGrpTmPrt.team_id = tmPrt.id ") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				//->groupBy("sprtGmGrp.id")
				->orderBy("gmGrpTmPrt.id DESC")
				->where("gmGrpTmPrt.id IS NOT NULL");
				if(!is_null($_tournamentGroupID)) $_qry = $_qry->addWhere("sprtGmGrp.tournament_team_group_id = ? AND sprtGmGrp.tournament_team_group_token_id = ? ", array($_tournamentGroupID, $_tournamentGroupTokenID)); 
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("sprtGmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR sprtGmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processCandidates (  $_orgID=null, $_orgTokenID=null, $_tournamentID=null, $_teamGroupID=null, $_teamGroupTokenID=null, $_gameTypeID=null, $_genderCategoryID=null, $_groupID=null, $_keyword=null ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeam gmGrpTmPrt") 
				->innerJoin("gmGrpTmPrt.SportGameGroup sprtGmGrp on gmGrpTmPrt.sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("gmGrpTmPrt.Team tmPrt on gmGrpTmPrt.team_id = tmPrt.id ") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.GameGroupType grpTyp on sprtGmGrp.game_group_type_id = grpTyp.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")   
				->orderBy("sprtGmGrp.id ASC")
				->where("sprtGmGrp.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("trnmt.org_id = ? AND trnmt.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_teamGroupID)) $_qry = $_qry->addWhere("sprtGmGrp.id = ? AND sprtGmGrp.token_id = ? ", array($_teamGroupID, $_teamGroupTokenID)); 
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("sprtGmGrp.active_flag = ?", $_tournamentID);    
				if(!is_null($_gameTypeID)) $_qry = $_qry->addWhere("sprtGmGrp.sport_game_id = ?", $_gameTypeID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);    
				if(!is_null($_groupID)) $_qry = $_qry->addWhere("sprtGmGrp.game_group_type_id = ?", $_groupID);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("sprtGmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR sprtGmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 


		return ( count($_qry) <= 0 ? null:$_qry );  
		 
	}
	//
   public static function processCandidateGroupParticipants ( $_orgID=null, $_orgTokenID=null, $_tournamentID=null, $_teamGroupID=null, $_teamGroupTokenID=null, $_genderCategoryID=null, $_groupID=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeam gmGrpTmPrt") 
				->innerJoin("gmGrpTmPrt.SportGameGroup sprtGmGrp on gmGrpTmPrt.sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("gmGrpTmPrt.Team tmPrt on gmGrpTmPrt.team_id = tmPrt.id ") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.GameGroupType grpTyp on sprtGmGrp.game_group_type_id = grpTyp.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")   
				->orderBy("sprtGmGrp.id ASC")
				->where("sprtGmGrp.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("trnmt.org_id = ? AND trnmt.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_teamGroupID)) $_qry = $_qry->addWhere("sprtGmGrp.id = ? AND sprtGmGrp.token_id = ? ", array($_teamGroupID, $_teamGroupTokenID)); 
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_gameTypeID)) $_qry = $_qry->addWhere("sprtGmGrp.sport_game_id = ?", $_gameTypeID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);    
				if(!is_null($_groupID)) $_qry = $_qry->addWhere("sprtGmGrp.game_group_type_id = ?", $_groupID);  
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 


		return ( count($_qry) <= 0 ? null:$_qry );  
		 
	}
	// process list selection function 
   public static function processCandidateGroupMemberTeams ( $_tournamentID=null, $_tournamentGroupID=null, $_tournamentGroupTokenID=null, $_sportGameGroupID=null, $_sportGameID=null, $_genderCategoryID=null, $_keyword=null, $_exclusion=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeam gmGrpTmPrt") 
				->innerJoin("gmGrpTmPrt.TournamentSportGameGroup sprtGmGrp on gmGrpTmPrt.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("sprtGmGrp.TournamentTeamGroup trmnTmGrp on sprtGmGrp.tournament_team_group_id = trmnTmGrp.id ")  
				->innerJoin("gmGrpTmPrt.Team tmPrt on gmGrpTmPrt.team_id = tmPrt.id ") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->offset($_offset)
				->limit($_limit) 
				->orderBy("gmGrpTmPrt.id DESC")
				->where("gmGrpTmPrt.id IS NOT NULL");
				if(!is_null($_tournamentGroupID)) $_qry = $_qry->addWhere("sprtGmGrp.tournament_team_group_id = ? AND sprtGmGrp.tournament_team_group_token_id = ? ", array($_tournamentGroupID, $_tournamentGroupTokenID)); 
				if(!is_null($_sportGameGroupID)) $_qry = $_qry->addWhere("sprtGmGrp.id = ?", $_sportGameGroupID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);        
				if(! is_null($_exclusion)) $_qry = $_qry->andWhereNotIn("gmGrpTmPrt.id ", $_exclusion );              
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("sprtGmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR sprtGmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	
	// process list selection function 
   public static function processCandidateMemberTeams ( $_orgID=null, $_tournamentID=null, $_teamGroupID=null, $_teamID=null, $_teamTokenID=null, $_sportGameID=null, $_genderCategoryID=null, $_groupID=null, $_keyword=null, $_exclusion=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeam gmGrpTmPrt") 
				->innerJoin("gmGrpTmPrt.TournamentSportGameGroup sprtGmGrp on gmGrpTmPrt.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("sprtGmGrp.TournamentTeamGroup trmnTmGrp on sprtGmGrp.tournament_team_group_id = trmnTmGrp.id ")  
				->innerJoin("gmGrpTmPrt.Team tmPrt on gmGrpTmPrt.team_id = tmPrt.id ") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->offset($_offset)
				->limit($_limit) 
				->orderBy("gmGrpTmPrt.id DESC")
				->where("gmGrpTmPrt.id IS NOT NULL");
				if(!is_null($_teamID)) $_qry = $_qry->addWhere("tmPrt.id = ? AND tmPrt.token_id = ? ", array($_teamID, $_teamTokenID));
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("org.id = ?", $_orgID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_teamGroupID)) $_qry = $_qry->addWhere("sprtGmGrp.id = ?", $_teamGroupID);    
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);    
				if(!is_null($_groupID)) $_qry = $_qry->addWhere("sprtGmGrp.game_group_type_id = ?", $_groupID);      
				if(! is_null($_exclusion)) $_qry = $_qry->andWhereNotIn("gmGrpTmPrt.id ", $_exclusion );     
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("sprtGmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR sprtGmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	// process list selection function 
   public static function processCandidateParticipantTeams ( $_tournamentID=null, $_tournamentGroupID=null, $_tournamentGroupTokenID=null, $_sportGameID=null,  $_genderCategoryID=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeam gmGrpTmPrt") 
				->innerJoin("gmGrpTmPrt.TournamentSportGameGroup sprtGmGrp on gmGrpTmPrt.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("sprtGmGrp.TournamentTeamGroup trmnTmGrp on sprtGmGrp.tournament_team_group_id = trmnTmGrp.id ")  
				->innerJoin("gmGrpTmPrt.Team tmPrt on gmGrpTmPrt.team_id = tmPrt.id ") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->offset($_offset)
				->limit($_limit) 
				->orderBy("gmGrpTmPrt.id DESC")
				->where("gmGrpTmPrt.id IS NOT NULL");
				if(!is_null($_tournamentGroupID)) $_qry = $_qry->addWhere("sprtGmGrp.tournament_sport_game_group_id = ? AND sprtGmGrp.tournament_sport_game_group_token_id = ? ", array($_tournamentGroupID, $_tournamentGroupTokenID)); 
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("sprtGmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR sprtGmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	// process list selection function 
   public static function processAllCandidateParticipantTeams ( $_tournamentGroupID=null, $_sportGameGroupID=null, $_sportGameID=null, $_genderCategoryID=null, $_keyword=null, $_exclusion=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeam gmGrpTmPrt") 
				->innerJoin("gmGrpTmPrt.TournamentSportGameGroup sprtGmGrp on gmGrpTmPrt.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("sprtGmGrp.TournamentTeamGroup trmnTmGrp on sprtGmGrp.tournament_team_group_id = trmnTmGrp.id ")  
				->innerJoin("gmGrpTmPrt.Team tmPrt on gmGrpTmPrt.team_id = tmPrt.id ") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->orderBy("gmGrpTmPrt.id DESC")
				->where("gmGrpTmPrt.id IS NOT NULL");
				if(!is_null($_tournamentGroupID)) $_qry = $_qry->addWhere("trmnTmGrp.id = ?", $_tournamentGroupID);    
				if(!is_null($_sportGameGroupID)) $_qry = $_qry->addWhere("sprtGmGrp.id = ?", $_sportGameGroupID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);         
				if(! is_null($_exclusion)) $_qry = $_qry->andWhereNotIn("gmGrpTmPrt.id ", $_exclusion );     
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("sprtGmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR sprtGmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	// process list selection function 
   public static function processCandidateParticipantTeamSelection ( $_tournamentID=null, $_tournamentGroupID=null, $_sportGameGroupID=null, $_sportGameID=null, $_genderCategoryID=null, $_keyword=null, $_exclusion=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeam gmGrpTmPrt") 
				->innerJoin("gmGrpTmPrt.TournamentSportGameGroup sprtGmGrp on gmGrpTmPrt.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("sprtGmGrp.TournamentTeamGroup trmnTmGrp on sprtGmGrp.tournament_team_group_id = trmnTmGrp.id ")  
				->innerJoin("gmGrpTmPrt.Team tmPrt on gmGrpTmPrt.team_id = tmPrt.id ") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->offset($_offset)
				->limit($_limit) 
				->orderBy("gmGrpTmPrt.id DESC")
				->where("gmGrpTmPrt.id IS NOT NULL");
				if(!is_null($_tournamentGroupID)) $_qry = $_qry->addWhere("trmnTmGrp.id = ?", $_tournamentGroupID);    
				if(!is_null($_sportGameGroupID)) $_qry = $_qry->addWhere("sprtGmGrp.id = ?", $_sportGameGroupID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);         
				if(! is_null($_exclusion)) $_qry = $_qry->andWhereNotIn("gmGrpTmPrt.id ", $_exclusion );     
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("sprtGmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR sprtGmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	// process list selection function 
   public static function processCandidateParticipantOpponentTeamSelection ( $_tournamentGroupID=null, $_sportGameGroupID=null, $_sportGameID=null, $_genderCategoryID=null, $_keyword=null, $_exclusion=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeam gmGrpTmPrt") 
				->innerJoin("gmGrpTmPrt.TournamentSportGameGroup sprtGmGrp on gmGrpTmPrt.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("sprtGmGrp.TournamentTeamGroup trmnTmGrp on sprtGmGrp.tournament_team_group_id = trmnTmGrp.id ")  
				->innerJoin("gmGrpTmPrt.Team tmPrt on gmGrpTmPrt.team_id = tmPrt.id ") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->offset($_offset)
				->limit($_limit) 
				->orderBy("gmGrpTmPrt.id DESC")
				->where("gmGrpTmPrt.id IS NOT NULL");
				if(!is_null($_tournamentGroupID)) $_qry = $_qry->addWhere("trmnTmGrp.id = ?", $_tournamentGroupID);    
				if(!is_null($_sportGameGroupID)) $_qry = $_qry->addWhere("sprtGmGrp.id = ?", $_sportGameGroupID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				//if(!is_null($_opponentParticipantTeamID)) $_qry = $_qry->addWhere("gmGrpTmPrt.id != ?", $_opponentParticipantTeamID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);         
				if(! is_null($_exclusion)) $_qry = $_qry->andWhereNotIn("gmGrpTmPrt.id ", $_exclusion );     
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("sprtGmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR sprtGmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	// process list selection function 
   public static function processAllCandidateParticipantTeamSelection ( $_tournamentID=null, $_tournamentGroupID=null, $_sportGameGroupID=null, $_sportGameID=null, $_genderCategoryID=null, $_keyword=null, $_exclusion=null ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeam gmGrpTmPrt") 
				->innerJoin("gmGrpTmPrt.TournamentSportGameGroup sprtGmGrp on gmGrpTmPrt.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("sprtGmGrp.TournamentTeamGroup trmnTmGrp on sprtGmGrp.tournament_team_group_id = trmnTmGrp.id ")  
				->innerJoin("gmGrpTmPrt.Team tmPrt on gmGrpTmPrt.team_id = tmPrt.id ") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->orderBy("gmGrpTmPrt.id DESC")
				->where("gmGrpTmPrt.id IS NOT NULL");
				if(!is_null($_tournamentGroupID)) $_qry = $_qry->addWhere("trmnTmGrp.id = ?", $_tournamentGroupID);    
				if(!is_null($_sportGameGroupID)) $_qry = $_qry->addWhere("sprtGmGrp.id = ?", $_sportGameGroupID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);         
				if(! is_null($_exclusion)) $_qry = $_qry->andWhereNotIn("gmGrpTmPrt.id ", $_exclusion );     
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("sprtGmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR sprtGmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	// process list selection function 
   public static function processCandidateParticipants ( $_tournamentGroupID=null, $_tournamentGroupTokenID=null, $_sportGameGroupID=null, $_sportGameID=null, $_genderCategoryID=null, $_keyword=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeam gmGrpTmPrt") 
				->innerJoin("gmGrpTmPrt.TournamentSportGameGroup sprtGmGrp on gmGrpTmPrt.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("sprtGmGrp.TournamentTeamGroup trmnTmGrp on sprtGmGrp.tournament_team_group_id = trmnTmGrp.id ")  
				->innerJoin("gmGrpTmPrt.Team tmPrt on gmGrpTmPrt.team_id = tmPrt.id ") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->orderBy("gmGrpTmPrt.id DESC")
				->where("gmGrpTmPrt.id IS NOT NULL");
				if(!is_null($_tournamentGroupID)) $_qry = $_qry->addWhere("trmnTmGrp.id = ? AND trmnTmGrp.token_id = ? ", array($_tournamentGroupID, $_tournamentGroupTokenID)); 
				if(!is_null($_sportGameGroupID)) $_qry = $_qry->addWhere("sprtGmGrp.id = ?", $_sportGameGroupID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("sprtGmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR sprtGmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
	public static function processObject ( $_orgID=null, $_orgTokenID=null, $_groupID, $_tokenID ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeam gmGrpTmPrt") 
				->innerJoin("gmGrpTmPrt.TournamentSportGameGroup sprtGmGrp on gmGrpTmPrt.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("sprtGmGrp.TournamentTeamGroup trmnTmGrp on sprtGmGrp.tournament_team_group_id = trmnTmGrp.id ")  
				->innerJoin("gmGrpTmPrt.Team tmPrt on gmGrpTmPrt.team_id = tmPrt.id ") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->where("gmGrpTmPrt.id = ? AND gmGrpTmPrt.token_id = ? ", array($_groupID, $_tokenID ));
				if(!is_null($_orgID)) $_qry = $_qry->andWhere("trnmt.org_id = ? AND trnmt.org_token_id = ?", array($_orgID, $_orgTokenID));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeObject ( $_matchGroupID, $_matchGroupTokenID  ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeam gmGrpTmPrt") 
				->innerJoin("gmGrpTmPrt.TournamentSportGameGroup sprtGmGrp on gmGrpTmPrt.tournament_sport_game_group_id = sprtGmGrp.id ") 
				->innerJoin("sprtGmGrp.TournamentTeamGroup trmnTmGrp on sprtGmGrp.tournament_team_group_id = trmnTmGrp.id ")  
				->innerJoin("gmGrpTmPrt.Team tmPrt on gmGrpTmPrt.team_id = tmPrt.id ") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->where("gmGrpTmPrt.id = ? AND gmGrpTmPrt.token_id = ? ", array($_matchGroupID, $_matchGroupTokenID ));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeCandidateObject ( $_orgID=null, $_activeFlag ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentGroupParticipantTeam sprtGmGrp") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ") 
				->innerJoin("sprtGmGrp.GameGroupType grpTyp on sprtGmGrp.game_group_type_id = grpTyp.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")     
				->where("sprtGmGrp.id IS NOT NULL");
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				if(!is_null($_activeFlag)) $_qry = $_qry->andWhere("sprtGmGrp.active_flag = ?", $_activeFlag);
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	 
	/*********************************************************
	*********************************************************/
	 
	public static function processGenderSelection ( $_tournamentTeamGroupID=null, $_tournamentTeamGroupTokenID=null )
	{
		$_qry = Doctrine_Query::create()
			->select("DISTINCT(ord.status) AS orderStatus")
			->from("TournamentGroupParticipantTeam sprtGmGrp") 
			->where("ord.status IS NOT NULL");		
			if(!is_null($_taskID)) $_qry=$_qry->addWhere("ord.task_id=? AND ord.task_token_id=? ", array($_taskID, $_tokenID)); 

			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 
		
		$_status = array();
		foreach( $_qry as $_res)
			$_status[] = $_res->orderStatus;
	 
		return ( count ( $_status ) <= 0 ? null : $_status );
	}
	
	
	/*********************************************************
	********** Candidate selection process *******************
	**********************************************************/
}

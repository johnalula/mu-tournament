<?php

/**
 * TournamentSportGameGroupTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TournamentSportGameGroupTable extends PluginTournamentSportGameGroupTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TournamentSportGameGroupTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TournamentSportGameGroup');
    }
  //
	public static function processNew ( $_orgID, $_orgTokenID, $_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameID, $_sportGameTokenID, $_sportGameFullName, $_contestantTeamMode, $_genderCategory, $_numberOfTeamsPerGroup, $_groupNumber, $_groupCode, $_mandatoryFlag, $_groupStatus, $_description, $_userID, $_userTokenID )
	{
			 
			$_initialGroupNumber = 1;
			
			$_tournamentGroup = TournamentTeamGroupTable::processObject ( $_orgID, $_orgTokenID, $_tournamentGroupID, $_tournamentGroupTokenID );
			
			$_sportGame = SportGameTable::processObject ( $_orgID, $_orgTokenID, $_sportGameID, $_sportGameTokenID ); 
			
			if($_genderCategory == TournamentCore::$_MEN) {
				
				$_initialGroupNumber = $_sportGame->maxSportGameGroupNumberMen ? ($_sportGame->maxSportGameGroupNumberMen+1):1;
				
			} elseif($_genderCategory == TournamentCore::$_WOMEN) {
				
				$_initialGroupNumber = $_sportGame->maxSportGameGroupNumberWomen ? ($_sportGame->maxSportGameGroupNumberWomen+1):1;
			} else {
				$_initialGroupNumber = 1;
			}
			$_groupNumber = intval($_groupNumber) ? intval($_groupNumber):1 ;
			
			switch ( trim($_contestantTeamMode) ) {
				case TournamentCore::$_PAIR_TEAM: 
					for($_i=0,$_key=$_initialGroupNumber;$_i<$_groupNumber;$_i++,++$_key) {
						$_sportGameGroup = PairContestantTeamGroupTable::processNew ( $_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameID, $_sportGameTokenID, $_sportGameFullName, $_key, $_numberOfTeamsPerGroup, $_contestantTeamMode, $_genderCategory, $_mandatoryFlag, $_groupStatus, $_groupCode, $_description );
						
						$_sportGameGroup->makeGroupCode ($_groupCode, $_sportGameGroup->id); 
					}
				break; 
				case TournamentCore::$_MULTIPLE_TEAM:  
					for($_i=0,$_key=$_initialGroupNumber;$_i<$_groupNumber;$_i++,++$_key) {
						$_sportGameGroup = MultipleContestantTeamGroupTable::processNew ( $_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameID, $_sportGameTokenID, $_sportGameFullName, $_key, $_numberOfTeamsPerGroup, $_contestantTeamMode, $_genderCategory, $_mandatoryFlag, $_groupStatus, $_groupCode, $_description );
						
						$_sportGameGroup->makeGroupCode ($_groupCode, $_sportGameGroup->id); 
					}
				//$_sportGameGroup = MultipleContestantTeamGroupTable::processNew ( $_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameID, $_sportGameTokenID, $_sportGameFullName, $_groupTypeID, $_groupTypeName, $_contestantTeamMode, $_genderCategory, $_groupStatus, $_groupCode, $_description ); 
				break;
			
			}
			
			$_flag1 = $_tournamentGroup->checkInitiated () ? $_tournamentGroup->makePending ():true;
			 
			 if($_orgID && $_userID) { 
				
				$_actionID = SystemCore::$_CREATE; 
				$_moduleID  = ModuleCore::$_TEAM_GROUP;  
				$_actionObject  = 'Tournament Sport Game Group ID: '.$_sportGameGroup->id;  
				$_actionDesc  = 'Team Group - [ Module: '.ModuleCore::processModuleValue(ModuleCore::$_TEAM_GROUP).' ]';  
			
				$_flag1 = SystemLogFileTable::processNew ($_orgID, $_orgTokenID, $_userID, $_userTokenID, $_moduleID, $_actionID, $_actionObject, $_actionDesc);
			}
		
		return $_sportGameGroup;
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
		 $_queryFileds = "sprtGmGrp.id, sprtGmGrp.group_name as sportGameGroupName, sprtGmGrp.group_code as sportGameGroupCode, sprtGmGrp.contestant_team_mode as contestantTeamMode, sprtGmGrp.gender_category_id as groupGenderCategoryID, sprtGmGrp.total_group_members as totalGroupMembers, sprtGmGrp.start_date as matchDate, sprtGmGrp.approval_status as apporvalStatus, sprtGmGrp.active_flag as activeFlag,
								
								trmnSprtGmGrp.id, 
								sprtGm.id as sportGameID, sprtGm.token_id as sportGameTokenID, sprtGm.name as sportGameName,  sprtGm.sport_game_category_id as matchSportGameCategoryID, sprtGm.contestant_team_mode as gameContestantTeamMode, sprtGm.sport_game_type_mode as sportGameTypeMode, sprtGm.contestant_team_mode as contestantTeamMode, sprtGm.contestant_mode as contestantMode, sprtGm.distance_type as sportGameDistanceTypeID, sprtGm.distance_type as sportGameDistanceTypeID, 
								
								gmCat.id as gameCategoryID, gmCat.token_id as gameCategoryTokenID, gmCat.category_name as gameCategoryName, gmCat.alias as gameCategoryAlias,
								trnmt.id as tournamentID, trnmt.token_id as tournamentTokenID, trnmt.name as tournamentName, trnmt.alias as tournamentAlias,
								 
								
								(sprtGmGrp.status=".TournamentCore::$_PENDING.") as pendingTeamGroup, (sprtGmGrp.status=".TournamentCore::$_ACTIVE.") as activeTeamGroup, (sprtGmGrp.status=".TournamentCore::$_COMPLETED.") as completedTeamGroup,
								(sprtGmGrp.approval_status=".TournamentCore::$_PENDING.") as pendingApprovalTeamGroup, (sprtGmGrp.approval_status=".TournamentCore::$_ACTIVE.") as activeApprovalTeamGroup, (sprtGmGrp.approval_status=".TournamentCore::$_APPROVED.") as approvedApprovalTeamGroup, (sprtGmGrp.approval_status=".TournamentCore::$_COMPLETED.") as completedApprovalTeamGroup,
								
								(EXISTS (SELECT sprtGmGrp1.id FROM TournamentGroupParticipantTeam sprtGmGrp1 WHERE sprtGmGrp1.tournament_sport_game_group_id = sprtGmGrp.id AND sprtGmGrp1.tournament_sport_game_group_token_id = ".sha1."(".md5."("."sprtGmGrp.token_id)) AND sprtGmGrp1.approval_status = ".TournamentCore::$_APPROVED." AND sprtGmGrp1.status = ".TournamentCore::$_ACTIVE." )) as hasGroupParticipantTeam,
								
								(EXISTS (SELECT sprtGmPrt1.id FROM TeamGameParticipation sprtGmPrt1 WHERE sprtGmPrt1.sport_game_id = sprtGm.id AND sprtGmPrt1.sport_game_token_id = ".sha1."(".md5."("."sprtGm.token_id)) AND sprtGmPrt1.gender_category_id = sprtGmGrp.gender_category_id AND sprtGmPrt1.confirmed_status = ".TournamentCore::$_INITIATED." AND sprtGmPrt1.status = ".TournamentCore::$_PENDING." AND sprtGmPrt1.active_flag IS TRUE AND sprtGmPrt1.confirmed_flag IS FALSE AND sprtGmPrt1.grouped_flag IS FALSE)) as hasPendingTeamGameParticipation,
								
		";	
		return $_queryFileds;
	}
	//
  // process list selection function 
   public static function processSelection ( $_tournamentID=null, $_tournamentGroupID=null, $_tournamentGroupTokenID=null, $_sportGameID=null, $_sportGameTypeID=null, $_genderCategoryID=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentSportGameGroup sprtGmGrp") 
				->innerJoin("sprtGmGrp.TournamentTeamGroup trmnSprtGmGrp on sprtGmGrp.tournament_team_group_id = trmnSprtGmGrp.id ")  
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->offset($_offset)
				->limit($_limit) 
				->orderBy("sprtGmGrp.id DESC")
				->where("sprtGmGrp.id IS NOT NULL");
				if(!is_null($_tournamentGroupID)) $_qry = $_qry->addWhere("trmnSprtGmGrp.id = ? AND trmnSprtGmGrp.token_id = ? ", array($_tournamentGroupID, $_tournamentGroupTokenID));
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_sportGameTypeID)) $_qry = $_qry->addWhere("sprtGmGrp.sport_game_id = ?", $_sportGameTypeID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("sprtGmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR sprtGmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processAll ( $_orgID=null, $_orgTokenID=null, $_tournamentID=null, $_gameTypeID=null, $_genderCategoryID=null, $_groupID=null, $_keyword=null ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentSportGameGroup sprtGmGrp") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.GameGroupType grpTyp on sprtGmGrp.game_group_type_id = grpTyp.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")   
				->orderBy("sprtGmGrp.id ASC")
				->where("sprtGmGrp.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("trnmt.org_id = ? AND trnmt.org_token_id = ? ", array($_orgID, $_orgTokenID));
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
	// process list selection function 
   public static function processCandidateSelections ( $_tournamentGroupID=null, $_tournamentGroupTokenID=null, $_sportGameID=null, $_sportGameTypeID=null, $_genderCategoryID=null, $_keyword=null ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentSportGameGroup sprtGmGrp") 
				->innerJoin("sprtGmGrp.TournamentTeamGroup trmnSprtGmGrp on sprtGmGrp.tournament_team_group_id = trmnSprtGmGrp.id ")  
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ") 
				->orderBy("sprtGmGrp.id DESC")
				->where("sprtGmGrp.id IS NOT NULL");
				if(!is_null($_tournamentGroupID)) $_qry = $_qry->addWhere("trmnSprtGmGrp.id = ? AND trmnSprtGmGrp.token_id = ? ", array($_tournamentGroupID, $_tournamentGroupTokenID));
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_sportGameTypeID)) $_qry = $_qry->addWhere("sprtGmGrp.sport_game_id = ?", $_sportGameTypeID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("sprtGmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR sprtGmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	// process list selection function 
   public static function processCandidateSelection ( $_tournamentID=null, $_sportGameID=null, $_sportGameTokenID=null, $_genderCategoryID=null, $_keyword=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentSportGameGroup sprtGmGrp") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.GameGroupType grpTyp on sprtGmGrp.game_group_type_id = grpTyp.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")   
				->orderBy("sprtGmGrp.id ASC")
				->where("sprtGmGrp.id IS NOT NULL");
				//if(!is_null($_orgID)) $_qry = $_qry->addWhere("trnmt.org_id = ? AND trnmt.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGmGrp.sport_game_id = ? AND sprtGmGrp.sport_game_token_id = ? ", array($_sportGameID, $_sportGameTokenID));
				//if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("sprtGmGrp.tournament_id = ?", $_tournamentID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);  
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("sprtGmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR sprtGmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	} 
	// process list selection function 
   public static function processCandidates ( $_tournamentGroupID=null, $_tournamentGroupTokenID=null, $_sportGameID=null, $_sportGameTypeID=null, $_genderCategoryID=null, $_exclusion=null, $_keyword=null, $_offset=0, $_limit=10) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentSportGameGroup sprtGmGrp") 
				->innerJoin("sprtGmGrp.TournamentTeamGroup trmnSprtGmGrp on sprtGmGrp.tournament_team_group_id = trmnSprtGmGrp.id ")  
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->offset($_offset)
				->limit($_limit) 
				->orderBy("sprtGmGrp.id DESC")
				->where("sprtGmGrp.id IS NOT NULL");
				if(!is_null($_tournamentGroupID)) $_qry = $_qry->addWhere("trmnSprtGmGrp.id = ? AND trmnSprtGmGrp.token_id = ? ", array($_tournamentGroupID, $_tournamentGroupTokenID));
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_sportGameTypeID)) $_qry = $_qry->addWhere("sprtGmGrp.sport_game_id = ?", $_sportGameTypeID);    
				if(!is_null($_genderCategoryID)) $_qry = $_qry->addWhere("sprtGmGrp.gender_category_id = ?", $_genderCategoryID);        
				if(! is_null($_exclusion)) $_qry = $_qry->andWhereNotIn("sprtGmGrp.id ", $_exclusion );   
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("sprtGmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR sprtGmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	} 
	// process list selection function 
   public static function processCandidateApprovalSelections ( $_tournamentGroupID=null, $_tournamentGroupTokenID=null, $_processStatus=null, $_approvalStatus=null, $_status=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentSportGameGroup sprtGmGrp") 
				->innerJoin("sprtGmGrp.TournamentTeamGroup trmnSprtGmGrp on sprtGmGrp.tournament_team_group_id = trmnSprtGmGrp.id ")  
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->orderBy("sprtGmGrp.id DESC")
				->where("sprtGmGrp.id IS NOT NULL");
				if(!is_null($_tournamentGroupID)) $_qry = $_qry->addWhere("trmnSprtGmGrp.id = ? AND trmnSprtGmGrp.token_id = ? ", array($_tournamentGroupID, $_tournamentGroupTokenID));
				if(!is_null($_processStatus)) $_qry = $_qry->addWhere("sprtGmGrp.process_status = ?", $_processStatus);    
				if(!is_null($_approvalStatus)) $_qry = $_qry->addWhere("sprtGmGrp.approval_status = ?", $_approvalStatus);    
				if(!is_null($_status)) $_qry = $_qry->addWhere("sprtGmGrp.status = ?", $_status);  
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	} 
	// process list selection function 
   public static function processCandidateTournamentGroups ( $_tournamentID=null, $_tournamentGroupID=null, $_tournamentGroupTokenID=null, $_sportGameTypeID=null, $_sportGameID=null, $_keyword=null, $_approvalStatus=null, $_status=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentSportGameGroup sprtGmGrp") 
				->innerJoin("sprtGmGrp.TournamentTeamGroup trmnSprtGmGrp on sprtGmGrp.tournament_team_group_id = trmnSprtGmGrp.id ")  
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->offset($_offset)
				->limit($_limit) 
				->orderBy("sprtGmGrp.id ASC")
				->where("sprtGmGrp.id IS NOT NULL");
				if(!is_null($_tournamentGroupID)) $_qry = $_qry->addWhere("trmnSprtGmGrp.id = ? AND trmnSprtGmGrp.token_id = ? ", array($_tournamentGroupID, $_tournamentGroupTokenID));
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);    
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_sportGameTypeID)) $_qry = $_qry->addWhere("gmCat.id = ?", $_sportGameTypeID);    
				if(!is_null($_approvalStatus)) $_qry = $_qry->addWhere("sprtGmGrp.approval_status = ?", $_approvalStatus);    
				if(!is_null($_status)) $_qry = $_qry->addWhere("sprtGmGrp.status = ?", $_status);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("sprtGmGrp.group_name LIKE ? OR sprtGm.name LIKE ? OR sprtGmGrp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	// process list selection function 
   public static function processCandidateTournamentSportGameGroups ( $_tournamentGroupID=null, $_tournamentGroupTokenID=null, $_sportGameTypeID=null, $_sportGameID=null, $_processStatus=null, $_approvalStatus=null, $_status=null, $_keyword=null, $_exclusion=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentSportGameGroup sprtGmGrp") 
				->innerJoin("sprtGmGrp.TournamentTeamGroup trmnSprtGmGrp on sprtGmGrp.tournament_team_group_id = trmnSprtGmGrp.id ")  
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->offset($_offset)
				->limit($_limit) 
				->orderBy("sprtGmGrp.id ASC")
				->where("sprtGmGrp.id IS NOT NULL");
				if(!is_null($_tournamentGroupID)) $_qry = $_qry->addWhere("trmnSprtGmGrp.id = ? AND trmnSprtGmGrp.token_id = ? ", array($_tournamentGroupID, $_tournamentGroupTokenID));
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);    
				if(!is_null($_sportGameTypeID)) $_qry = $_qry->addWhere("gmCat.id = ?", $_sportGameTypeID);    
				if(!is_null($_processStatus)) $_qry = $_qry->addWhere("sprtGmGrp.process_status = ?", $_processStatus);    
				if(!is_null($_approvalStatus)) $_qry = $_qry->addWhere("sprtGmGrp.approval_status = ?", $_approvalStatus);    
				if(!is_null($_status)) $_qry = $_qry->addWhere("sprtGmGrp.status = ?", $_status);           
				if(! is_null($_exclusion)) $_qry = $_qry->andWhereNotIn("sprtGmGrp.id ", $_exclusion );         
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
				->from("TournamentSportGameGroup sprtGmGrp") 
				->innerJoin("sprtGmGrp.TournamentTeamGroup trmnSprtGmGrp on sprtGmGrp.tournament_team_group_id = trmnSprtGmGrp.id ")  
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")  
				->where("sprtGmGrp.id = ? AND sprtGmGrp.token_id = ? ", array($_groupID, $_tokenID ));
				if(!is_null($_orgID)) $_qry = $_qry->andWhere("trnmt.org_id = ? AND trnmt.org_token_id = ?", array($_orgID, $_orgTokenID));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeObject ( $_orgID=null, $_groupID, $_tokenID  ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentSportGameGroup sprtGmGrp") 
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ") 
				->innerJoin("sprtGmGrp.GameGroupType grpTyp on sprtGmGrp.game_group_type_id = grpTyp.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")     
				->where("sprtGmGrp.id = ? AND sprtGmGrp.token_id = ? ", array($_groupID, $_tokenID ));
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeCandidateObject ( $_sportGameGroupID, $_sportGameGroupTokenID ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TournamentSportGameGroup sprtGmGrp") 
				->innerJoin("sprtGmGrp.TournamentTeamGroup trmnSprtGmGrp on sprtGmGrp.tournament_team_group_id = trmnSprtGmGrp.id ")  
				->innerJoin("sprtGmGrp.Tournament trnmt on sprtGmGrp.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmGrp.SportGame sprtGm on sprtGmGrp.sport_game_id = sprtGm.id ") 
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				->innerJoin("trnmt.Organization org on trnmt.org_id = org.id ")   
				->where("sprtGmGrp.id = ? AND sprtGmGrp.token_id = ? ", array($_sportGameGroupID, $_sportGameGroupTokenID ));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	 
	/*********************************************************
	*********************************************************/
	 
	public static function processGenderSelection ( $_tournamentTeamGroupID=null, $_tournamentTeamGroupTokenID=null )
	{
		$_qry = Doctrine_Query::create()
			->select("DISTINCT(sprtGmGrp.gender_category_id) AS tournamentGroupGenderCategory")
			->from("TournamentSportGameGroup sprtGmGrp") 
			->where("sprtGmGrp.id IS NOT NULL");		
			if(!is_null($_taskID)) $_qry=$_qry->addWhere("sprtGmGrp.tournament_team_group_id=? AND sprtGmGrp.tournament_team_group_token_id=? ", array($_tournamentTeamGroupID, $_tournamentTeamGroupTokenID)); 

			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 
		
		$_status = array();
		foreach( $_qry as $_res)
			$_status[] = $_res->tournamentGroupGenderCategory;
	 
		return ( count ( $_status ) <= 0 ? null : $_status );
	}
	
	
	/*********************************************************
	********** Candidate selection process *******************
	**********************************************************/
	 
	//
	public static function processCandidateGroupMemberParticipantTeam ( $_orgID=null, $_orgTokenID=null, $_tournamentID=null, $_teamGroupID=null, $_teamGroupTokenID=null, $_sportGameID=null, $_genderCategory=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		/*$_groupMemberTeams = SportGameTeamGroupTable::processCandidates ( $_orgID, $_orgTokenID, $_tournamentID, $_gameTypeID, $_genderCategoryID, $_groupID, $_keyword );
		//if(!$_groupMemberTeams) { return false; }   
		$_exclusion = array();   
		foreach($_groupMemberTeams as $_groupMemberTeam) {
			//if(!$_productPrice->hasActiveInventoryItem ) {
				$_exclusion[] = $_groupMemberTeam->team_id;
			//} 
		} 
		//$_exlusion = $_exlusion ? $_exlusion:null;
		//$_candidateTeams = TeamTable::processCandidates ( $_orgID, $_orgTokenID, $_torunamentID, $_keyword, $_exclusion, $_activeFlag, $_offset, $_limit );
		//if(!$_candidateTeams) { return false; }   
		/*$_exclusion = array();   
		foreach($_candidateTeams as $_candidateTeam) {
			if(!$_candidateTeam->hasGameParticipation ) {
				$_exclusion[] = $_candidateTeam->id;
			} 
		} */
		
		return TeamTable::processCandidates ( $_orgID, $_orgTokenID, $_torunamentID, $_keyword, $_exclusion, $_activeFlag, $_offset, $_limit );
	} 
	//
	public static function processCandidateParticipantTeams ( $_orgID=null, $_orgTokenID=null, $_tournamentID=null, $_teamGroupID=null, $_teamGroupTokenID=null, $_sportGameID=null, $_sportGameTokenID=null, $_genderCategory=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_groupMemberTeams = SportGameTeamGroupTable::processCandidateParticipants ( $_orgID, sha1(md5($_orgTokenID)), $_tournamentID, $_teamGroupID, $_teamGroupTokenID, $_genderCategoryID, $_groupID);
		//if(!$_groupMemberTeams) { return false; }   
		$_exclusion = array();   
		foreach($_groupMemberTeams as $_groupMemberTeam) {
			$_exclusion[] = $_groupMemberTeam->team_id;
		} 
		
		return TeamGameParticipationTable::processCandidateParticipants ( $_tournamentID, $_teamID, $_teamTokenID, $_sportGameID, $_gameTypeID, $_genderCategory, $_keyword, $_exclusion, $_offset, $_limit ) ;
		
		//return TeamGameParticipationTable::processCandidateParticipants ($_tournamentID, $_teamID, $_teamTokenID, $_sportGameID, $_gameTypeID, $_genderCategory, $_keyword, $_exclusion, $_offset, $_limit );
	} 
	//
	public static function processCandidateMemberTeams ( $_orgID=null, $_orgTokenID=null, $_tournamentID=null, $_teamGroupID=null, $_teamGroupTokenID=null, $_sportGameID=null, $_groupTypeID=null, $_genderCategory=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		/*$_groupMemberTeams = SportGameTeamGroupTable::processCandidates ( $_orgID, $_orgTokenID, $_tournamentID, $_teamGroupID, $_teamGroupTokenID, $_gameTypeID, $_genderCategoryID, $_groupID, $_keyword );
		//if(!$_groupMemberTeams) { return false; }   
		$_exclusion = array();   
		foreach($_groupMemberTeams as $_groupMemberTeam) {
			$_exclusion[] = $_groupMemberTeam->team_id;
		} */
		
		return TeamGameParticipationTable::processCandidateParticipants ( $_orgID, $_tournamentID, $_teamID, $_teamTokenID, $_sportGameID, $_gameTypeID, $_genderCategory, $_keyword, $_exclusion, $_offset, $_limit );
	} 
	//
	public static function processAllCandidateMemberTeams ( $_orgID=null, $_orgTokenID=null, $_tournamentID=null, $_teamGroupID=null, $_teamGroupTokenID=null, $_sportGameID=null, $_genderCategory=null ) 
   {
		/*$_groupMemberTeams = SportGameTeamGroupTable::processCandidates ( $_orgID, $_orgTokenID, $_tournamentID, $_gameTypeID, $_genderCategoryID, $_groupID, $_keyword );
		//if(!$_groupMemberTeams) { return false; }   
		$_exclusion = array();   
		foreach($_groupMemberTeams as $_groupMemberTeam) {
			$_exclusion[] = $_groupMemberTeam->team_id;
		} */
		
		return TeamGameParticipationTable::processAllCandidateParticipants ( $_orgID, $_tournamentID, $_teamID, $_teamTokenID, $_sportGameID, $_gameTypeID, $_genderCategory, $_keyword, $_exclusion);
	} 
	//
	public static function processCandidateGroupMemberTeams ( $_orgID=null, $_tournamentID=null, $_teamGroupID=null, $_memberTeamID=null, $_memberTeamTokenID=null, $_sportGameID=null, $_sportGameTokenID=null, $_genderCategoryID=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		/*$_teamGroupMemberParticipants = TeamGroupMemberParticipantTable::processCandidateParticipants ( $_orgID, $_tournamentID, $_teamGroupID, $_teamID, $_teamTokenID, $_sportGameID, $_genderCategoryID, $_groupID, $_keyword );
		//if(!$_groupMemberTeams) { return false; }   
		$_exclusion = array();   
		foreach($_teamGroupMemberParticipants as $_teamGroupMemberParticipant) {
			//if(!$_productPrice->hasActiveInventoryItem ) {
				$_exclusion[] = $_teamGroupMemberParticipant->id;
			//} 
		} */
		
		return SportGameTeamGroupTable::processCandidateMemberTeams ( $_orgID, $_tournamentID, $_teamGroupID, $_memberTeamID, $_memberTeamTokenID, $_sportGameID, $_genderCategoryID, $_groupID, $_keyword, $_exclusion, $_offset, $_limit );
	} 
	//
	public static function processCandidateTeamMemberParticipants ( $_orgID=null, $_tournamentID=null, $_teamGroupID=null, $_memberTeamID=null, $_memberTeamTokenID=null, $_sportGameID=null, $_sportGameTokenID=null, $_genderCategory=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_teamGroupMemberParticipants = TeamGroupMemberParticipantTable::processCandidateParticipants ( $_orgID, $_tournamentID, $_teamGroupID, $_teamID, $_teamTokenID, $_sportGameID, $_genderCategoryID, $_groupID, $_keyword );
		//if(!$_groupMemberTeams) { return false; }   
		$_exclusion = array();   
		foreach($_teamGroupMemberParticipants as $_teamGroupMemberParticipant) {
			//if(!$_productPrice->hasActiveInventoryItem ) {
				$_exclusion[] = $_teamGroupMemberParticipant->id;
			//} 
		} 
		
		return TeamMemberParticipantTable::processCandidateParticipants( $_tournamentID, $_memberTeamID, $_memberTeamTokenID, $_sportGameID, $_sportGameTokenID, $_genderCategory, $_keyword, $_exclusion, $_offset, $_limit );
	} 
	public static function processCandidateGroupTypes ( $_orgID=null, $_orgTokenID=null, $_tournamentID=null, $_sportGameID=null, $_sportGameTokenID=null, $_genderCategoryID=null, $_keyword=null, $_activeFlag=null, $_offset=0, $_limit=10 ) 
   {
		$_candidateTeamGroups = self::processCandidateSelection ( $_orgID, $_orgTokenID, $_tournamentID, $_sportGameID, $_sportGameTokenID, $_genderCategoryID, $_keyword);
		//if(!$_groupMemberTeams) { return false; }   
		$_exclusion = array();   
		foreach($_candidateTeamGroups as $_candidateTeamGroup) {
			//if(!$_productPrice->hasActiveInventoryItem ) {
				$_exclusion[] = $_candidateTeamGroup->game_group_type_id;
			//} 
		} 
		
		return GameGroupTypeTable::processCandidates ( $_orgID, $_orgTokenID, $_keyword, $_exclusion, $_offset, $_limit );
	}  
	
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

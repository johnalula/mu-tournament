<?php

/**
 * TeamTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TeamTable extends PluginTeamTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TeamTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Team');
    }
     //
	public static function processNew ( $_orgID, $_orgTokenID, $_tournamentID, $_teamName, $_teamAlias, $_teamCountry, $_teamCity, $_description, $_userID, $_userTokenID  )
	{
		 $_flag = true;
		
				$_codeConfig = CodeGeneratorTable::processDefaultSelection (null, null, SystemCore::$_TEAM, true  ); 
				$_codeNumber =  $_codeConfig->hasDeletedCode ? $_codeConfig->deletedCode:$_codeConfig->lastCode; 
				$_teamNumber = $_codeConfig->prefixCode.'-'.SystemCore::processCodeGeneratorInitialNumber($_codeNumber);
				
				$_participantTeamAlias = trim($_teamAlias).'-'.SystemCore::processCountryAliasValue($_teamCountry);

				$_participantTeam = self::processSave ( $_orgID, $_orgTokenID, $_tournamentID, $_teamName, $_teamAlias, $_participantTeamAlias, $_teamCountry, $_teamCity, $_teamNumber, $_description );
				
				$_flag = $_codeConfig->makeCodeSetup ( $_codeConfig->lastCode );
				
				if($_orgID && $_userID) { 
				
					$_actionID = SystemCore::$_CREATE; 
					$_moduleID  = ModuleCore::$_TEAM;  
					$_actionObject  = 'Participant Team ID: '.$_participantTeam->id;  
					$_actionDesc  = 'Team - [ Module: '.ModuleCore::processModuleValue(ModuleCore::$_TEAM).' ]';  
				
					$_flag1 = SystemLogFileTable::processNew ($_orgID, $_orgTokenID, $_userID, $_userTokenID, $_moduleID, $_actionID, $_actionObject, $_actionDesc);
				}
			
		return $_participantTeam;
	}
	//
	public static function processCreate ( )
	{
		
	} 
	public static function processSave ( $_orgID, $_orgTokenID, $_tournamentID, $_teamName, $_teamAlias, $_teamFullAlias, $_teamCountry, $_teamCity, $_teamNumber, $_description )
	{
		//try {
			//if(!$_orgID || !$_name) return false;
    	
			$_token = trim($_orgTokenID).trim($_teamAlias).trim($_teamName).trim($_teamCity).rand('11111', '99999'); 
			$_startDate = date('m/d/Y', time());
			$_nw = new Team (); 
			$_nw->token_id = sha1(md5(trim($_token))); 
			$_nw->org_id = trim($_orgID); 
			$_nw->org_token_id = sha1(md5(trim($_orgTokenID)));  
			$_nw->tournament_id = trim($_tournamentID); 
			$_nw->team_name = trim($_teamName); 
			$_nw->alias = trim($_teamAlias); 
			$_nw->team_full_alias = trim($_teamFullAlias); 
			$_nw->team_number = trim($_teamNumber); 
			$_nw->country_id = trim($_teamCountry);  
			$_nw->team_city = trim($_teamCity);  
			$_nw->start_date = trim($_startDate);  
			$_nw->status = trim(TournamentCore::$_PENDING);   
			$_nw->description = SystemCore::processDescription ( trim($_teamName), trim($_description) );  
			$_nw->save(); 
			
			return $_nw; 
		//} catch ( Exception $e) {
	    //  return false; 
		//}
	} 
	public static function processLogoUploading ( $_teamID, $_teamTokenID, $_uploadedFileType, $_uploadedFileName, $_teamLogoFileNamePath, $_newFilePath, $_description )
	{ 
    
		$_qry = Doctrine_Query::create( )
					->update('TeamTable tm')  
					->set('tm.team_logo_file_type', '?', trim($_uploadedFileType)) 
					->set('tm.team_logo_file_name', '?', trim($_uploadedFileName)) 
					->set('tm.team_logo_file_name_path', '?', trim($_teamLogoFileNamePath)) 
					->set('tm.team_logo_file_full_path', '?', trim($_newFilePath)) 
					->where('tm.id = ? AND tm.token_id = ?', array($_teamID, $_teamTokenID))
					->execute();	
		 
			return $_qry; 
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
		 /*(EXISTS (SELECT tmGmPrtn1.id FROM TeamGameParticipation tmGmPrtn1 WHERE tmGmPrtn1.team_id = tm.id AND tmGmPrtn1.team_id = tm.id AND tmGmPrtn1.team_token_id = ".sha1."(".md5."("."tm.token_id)) AND tmGmPrtn1.gender_category_id = ".TournamentCore::$_MEN." )) as hasFemalGameParticipation, 
			
			(EXISTS (SELECT tmGmPrtn2.id FROM TeamGameParticipation tmGmPrtn2 WHERE tmGmPrtn2.team_id = tm.id AND tmGmPrtn2.team_id = tm.id AND tmGmPrtn2.team_token_id = ".sha1."(".md5."("."tm.token_id)) AND tmGmPrtn2.gender_category_id = ".TournamentCore::$_WOMEN." )) as hasMaleGameParticipation, 
			
			(EXISTS (SELECT tmGmPrtn3.id FROM TeamGameParticipation tmGmPrtn3 WHERE tmGmPrtn3.team_id = tm.id AND tmGmPrtn3.team_id = tm.id AND tmGmPrtn3.team_token_id = ".sha1."(".md5."("."tm.token_id)) AND tmGmPrtn3.gender_category_id = ".TournamentCore::$_MIXED." )) as hasMixedGameParticipation, */
	}
	public static function appendQueryFields ( ) 
	{		
		 $_queryFileds = "tm.id, tm.team_name as teamName, tm.alias as teamAlias, tm.team_full_alias as teamFullAlias, tm.country_id as teamCountry, tm.team_city as teamCity, tm.team_number as teamNumber, tm.confirmed_flag as confirmFlag, tm.active_flag as activeFlag,  , tm.standing_rank as participantTeamStandingRank, tm.gold_medal as numberOfGoldMedal, tm.silver_medal as numberOfSilverMedal, tm.bronze_medal as numberOfBronzeMedal, tm.total_medal_award as totalMedalAward,
		 
			trnmnt.id as tournamentID, trnmnt.token_id as tournamentTokenID, trnmnt.name as tournamentName, trnmnt.alias as tournamentAlias, trnmnt.season as tournamentSeason, trnmnt.start_date as tournamentStartDate, trnmnt.end_date as tournamentEndDate,
			
			((SELECT COUNT(tmGmPrtn.id) FROM TeamGameParticipation tmGmPrtn WHERE tmGmPrtn.team_id = tm.id AND tmGmPrtn.team_token_id = ".sha1."(".md5."("."tm.token_id)) )) as hasGameParticipation, 
			
			
		 
		  
		";	
		return $_queryFileds;
	}
	//
	// process list selection function 
   public static function processSelection ( $_orgID=null, $_tournamentID=null, $_activeFlag=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("Team tm") 
				->innerJoin("tm.Tournament trnmnt on tm.tournament_id = trnmnt.id ") 
				->innerJoin("tm.Organization org on tm.org_id = org.id ")  
				->offset($_offset)
				->limit($_limit) 
				->orderBy("tm.id ASC")
				->where("tm.id IS NOT NULL");
				//if(!is_null($_orgID)) $_qry = $_qry->addWhere("tm.org_id = ? AND tm.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmnt.id = ? ", $_tournamentID); 
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("tm.active_flag = ?", $_activeFlag);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("tm.team_name LIKE ? OR tm.alias LIKE ? OR tm.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processAll ( $_orgID=null, $_orgTokenID=null, $_tournamentID=null, $_activeFlag=null, $_keyword=null) 
   {
			$_qry = Doctrine_Query::create()
					->select(self::appendQueryFields())
					->from("Team tm") 
					->innerJoin("tm.Tournament trnmnt on tm.tournament_id = trnmnt.id ") 
					->innerJoin("tm.Organization org on tm.org_id = org.id ")  
					->orderBy("tm.id ASC")
					->where("tm.id IS NOT NULL");
					//if(!is_null($_orgID)) $_qry = $_qry->addWhere("tm.org_id = ? AND tm.org_token_id = ? ", array($_orgID, $_orgTokenID));
					if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmnt.id = ? ", $_tournamentID); 
					if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("tm.active_flag = ?", $_activeFlag);    
					if(!is_null($_keyword) )
						if(strcmp(trim($_keyword), "") != 0 )
							$_qry = $_qry->andWhere("tm.team_name LIKE ? OR tm.alias LIKE ? OR tm.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
					
				$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processCandidates ( $_orgID=null, $_orgTokenID=null, $_torunamentID=null, $_keyword=null, $_exclusion=null, $_activeFlag=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("Team tm") 
				->innerJoin("tm.Tournament trnmnt on tm.tournament_id = trnmnt.id ")  
				->innerJoin("tm.Organization org on tm.org_id = org.id ")   
				->offset($_offset)
				->limit($_limit) 
				->orderBy("tm.id ASC")
				->where("tm.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("tm.org_id = ? AND tm.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_torunamentID)) $_qry = $_qry->addWhere("tm.tournament_id = ?", $_torunamentID);    
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("tm.active_flag = ?", $_activeFlag);    
				if(!is_null($_exclusion))  $_qry = $_qry->andWhereNotIn("tm.id", $_exclusion ); 
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("tm.team_name LIKE ? OR tm.alias LIKE ? OR tm.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
	public static function processObject ( $_orgID=null, $_orgTokenID=null, $_teamID, $_tokenID ) 
	{
			$_qry = Doctrine_Query::create()
					->select(self::appendQueryFields())
					->from("Team tm") 
					->innerJoin("tm.Tournament trnmnt on tm.tournament_id = trnmnt.id ") 
					->innerJoin("tm.Organization org on tm.org_id = org.id ")  
					->where("tm.id = ? AND tm.token_id = ? ", array($_teamID, $_tokenID ));
					if(!is_null($_orgID)) $_qry = $_qry->andWhere("tm.org_id = ? AND tm.org_token_id = ?", array($_orgID, $_orgTokenID));
					$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeObject ( $_orgID=null, $_orgTokenID=null, $_teamID, $_tokenID ) 
	{
			$_qry = Doctrine_Query::create()
					->select(self::appendQueryFields())
					->from("Team tm") 
					->innerJoin("tm.Tournament trnmnt on tm.tournament_id = trnmnt.id ") 
					->innerJoin("tm.Organization org on tm.org_id = org.id ")  
					->where("tm.id = ? AND tm.token_id = ? ", array($_teamID, $_tokenID ));
					if(!is_null($_orgID)) $_qry = $_qry->andWhere("tm.org_id = ? AND tm.org_token_id = ?", array($_orgID, $_orgTokenID));
					$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	} 
   public static function makeCandidateObject ( $_teamID, $_tokenID ) 
	{
			$_qry = Doctrine_Query::create()
					->select("tm.id")
					->from("Team tm") 
					->innerJoin("tm.Tournament trnmnt on tm.tournament_id = trnmnt.id ") 
					->innerJoin("tm.Organization org on tm.org_id = org.id ")  
					->where("tm.id = ? AND tm.token_id = ? ", array($_teamID, $_tokenID ));
					if(!is_null($_orgID)) $_qry = $_qry->andWhere("tm.org_id = ? AND tm.org_token_id = ?", array($_orgID, $_orgTokenID));
					$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	} 
	 
	
	/*********************************************************/
	
	// process list selection function 
   public static function makeCandidateSelection ( $_tournamentID=null, $_activeFlag=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("Team tm") 
				->innerJoin("tm.Tournament trnmnt on tm.tournament_id = trnmnt.id ") 
				->innerJoin("tm.Organization org on tm.org_id = org.id ")  
				->offset($_offset)
				->limit($_limit) 
				->orderBy("tm.id ASC")
				->where("tm.id IS NOT NULL");
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmnt.id = ? ", $_tournamentID); 
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("tm.active_flag = ?", $_activeFlag);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("tm.team_name LIKE ? OR tm.alias LIKE ? OR tm.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	
	/*********************************************************/
	
	// process list selection function 
   public static function makeCandidateSelections ( $_tournamentID=null, $_activeFlag=null, $_keyword=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("Team tm") 
				->innerJoin("tm.Tournament trnmnt on tm.tournament_id = trnmnt.id ") 
				->innerJoin("tm.Organization org on tm.org_id = org.id ")   
				->orderBy("tm.id ASC")
				->where("tm.id IS NOT NULL");
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmnt.id = ? ", $_tournamentID); 
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("tm.active_flag = ?", $_activeFlag);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("tm.team_name LIKE ? OR tm.alias LIKE ? OR tm.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	
	
	/*********************************************************
	********** Candidate selection process *******************
	**********************************************************/
	
	//
	public static function processCandidateSportGameParticipation ( $_orgID, $_tournamentID, $_teamID, $_teamTokenID, $_gameTypeID, $_genderCategory, $_offset, $_limit ) 
   { 
		/*$_sportGameParticipations = TeamGameParticipationTable::processAll ( $_orgID, $_tournamentID, $_teamID, $_teamTokenID, $_gameTypeID, $_keyword, $_exclusion );
		//return TeamGameParticipationTable::processSelection ( $_orgID, $_tournamentID, $_teamID, $_teamTokenID, $_gameTypeID, $_keyword, $_exclusion, $_offset, $_limit) ;;
		
		if(!$_sportGameParticipations) { return false; }   
		$_exclusion = array();   
		foreach($_sportGameParticipations as $_sportGame) {
			if($_sportGame->genderCategoryID != $_genderCategory ) {
				if( $_sportGame->genderCategoryID !== TournamentCore::$_BOTH_GENDER ) {
					$_exclusion[] = $_sportGame->id;
				} 
			} 
		} */
		
		return TeamGameParticipationTable::processCandidateSelection ( $_orgID, $_tournamentID, $_teamID, $_teamTokenID, $_gameTypeID, $_genderCategory, $_keyword, $_exclusion, $_offset, $_limit);
		//return TeamGameParticipationTable::processAll ( $_orgID, $_tournamentID, $_teamID, $_teamTokenID, $_gameTypeID, $_keyword, $_exclusion );
	}  
	//
	public static function processCandidateTeamGameParticipation ( $_orgID=null, $_tournamentID=null, $_teamID=null, $_teamTokenID=null, $_memberParticipantID=null, $_sportGameCategory=null, $_genderCategory=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {  
		$_participantRoles = TeamMemberParticipantRoleTable::processCandidateMemberRoles ( $_orgID, $_tournamentID, $_teamID, $_teamTokenID, $_sportGameID, $_memberParticipantID, $_keyword);
		
		$_exclusion = array();   
		foreach($_participantRoles as $_participantRoles) {
			$_exclusion[] = $_participantRoles->team_game_participation_id;
		}  
		
		return TeamGameParticipationTable::processCandidateSelection ( $_orgID, $_tournamentID, $_teamID, $_teamTokenID, $_sportGameCategory, $_genderCategory, $_keyword, $_exclusion, $_offset, $_limit);
	}  
	
	/*********************************************************
	********** Candidate filtering process *******************
	**********************************************************/
	  
	
	// process candidate selection function 
	public static function selectCandidateMemberParticipants ( $_orgID=null, $_tournamentID=null, $_teamID=null, $_teamTokenID=null, $_genderCategory=null, $_keyword=null, $_offset=0, $_limit=10  )
   {
		/*$_productPrices = ProductPriceComponentTable::processAll ( $_productID, $_productTokenID, $_productPriceType, $_exclusion, $_status, $_keyword);
		if(!$_productPrices) { return false; }   
		$_exclusion = array();   
		foreach($_productPrices as $_productPrice) {
			if(!$_productPrice->hasActiveInventoryItem ) {
				$_exclusion[] = $_productPrice->id;
			} 
		} */
		
		return TeamMemberParticipantTable::processCandidateMembers ( $_tournamentID, $_teamID, $_teamTokenID, $_genderCategoryID, $_keyword, $_exclusion, $_offset, $_limit );
	} 
	/*********************************************************
	********** Candidate filtering process *******************
	**********************************************************/
	  
	
	// process list selection function 
   public static function selectCandidates ( $_tournamentID=null, $_activeFlag=null, $_keyword=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("Team tm") 
				->innerJoin("tm.Tournament trnmnt on tm.tournament_id = trnmnt.id ") 
				->innerJoin("tm.Organization org on tm.org_id = org.id ")  
				->orderBy("tm.id ASC")
				->where("tm.id IS NOT NULL");
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmnt.id = ? ", $_tournamentID); 
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("tm.active_flag = ?", $_activeFlag);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("tm.team_name LIKE ? OR tm.alias LIKE ? OR tm.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
 
	 
}

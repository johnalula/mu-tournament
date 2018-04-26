<?php

/**
 * TeamGameParticipationTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TeamGameParticipationTable extends PluginTeamGameParticipationTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TeamGameParticipationTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TeamGameParticipation');
    }
    //
	public static function processNew ( $_orgID, $_orgTokenID, $_teamID, $_teamTokenID, $_sportGameTypeID, $_sportGameID, $_sportGameTokenID, $_sportGameTypeName, $_sportGameName, $_genderCategory, $_eventType, $_playerMode, $_participantNumber, $_description, $_userID, $_userTokenID )
	{
		 $_flag = true;

			//$_categoryAlias = $_categoryAlias ? SystemCore::makeAlias ( $_categoryAlias ):SystemCore::makeAlias ( $_categoryName );
			//$_sportGameAlias = $_sportGameAlias ? SystemCore::makeAlias ( $_sportGameAlias ):SystemCore::makeAlias ( $_sportGameName );
			//$_gameParticipation = self::processSave ( $_teamID, $_teamTokenID, $_sportGameTypeID, $_sportGameID, $_sportGameTokenID, $_sportGameTypeName, $_sportGameName, $_genderCategory, $_eventType, $_playerMode, $_participantNumber, $_description );
			
			switch ( trim($_genderCategory) ) {
				case TournamentCore::$_MEN: $_gameParticipation = self::processSave ( $_teamID, $_teamTokenID, $_sportGameTypeID, $_sportGameID, $_sportGameTokenID, $_sportGameTypeName, $_sportGameName, TournamentCore::$_MEN, $_eventType, $_playerMode, $_participantNumber, $_description );
				break; 
				case TournamentCore::$_WOMEN: $_gameParticipation = self::processSave ( $_teamID, $_teamTokenID, $_sportGameTypeID, $_sportGameID, $_sportGameTokenID, $_sportGameTypeName, $_sportGameName, TournamentCore::$_WOMEN, $_eventType, $_playerMode, $_participantNumber, $_description );
				break;
				case TournamentCore::$_BOTH_GENDER: 
					$_gameParticipation = self::processSave ( $_teamID, $_teamTokenID, $_sportGameTypeID, $_sportGameID, $_sportGameTokenID, $_sportGameTypeName, $_sportGameName, TournamentCore::$_MEN, $_eventType, $_playerMode, $_participantNumber, $_description );
					
					$_gameParticipation = self::processSave ( $_teamID, $_teamTokenID, $_sportGameTypeID, $_sportGameID, $_sportGameTokenID, $_sportGameTypeName, $_sportGameName, TournamentCore::$_WOMEN, $_eventType, $_playerMode, $_participantNumber, $_description );
				break;
				case TournamentCore::$_MIXED: $_gameParticipation = self::processSave ( $_teamID, $_teamTokenID, $_sportGameTypeID, $_sportGameID, $_sportGameTokenID, $_sportGameTypeName, $_sportGameName, TournamentCore::$_MIXED, $_eventType, $_playerMode, $_participantNumber, $_description );
				break;
			
			}
			
		return $_gameParticipation ? true:false;
	}
	//
	public static function processCreate ( )
	{
		
	} 
	public static function processSave ( $_teamID, $_teamTokenID, $_sportGameTypeID, $_sportGameID, $_sportGameTokenID, $_sportGameTypeName, $_sportGameName, $_genderCategory, $_eventType, $_playerMode, $_participantNumber, $_description )
	{
		//try {
			//if(!$_orgID || !$_name) return false;
			$_token = trim($_teamTokenID).trim($_sportGameTokenID).trim($_sportGameName).rand('11111', '99999'); 
			$_startDate = date('m/d/Y', time());
			$_nw = new TeamGameParticipation (); 
			$_nw->token_id = sha1(md5(trim($_token))); 
			$_nw->team_id = trim($_teamID); 
			$_nw->team_token_id = sha1(md5(trim($_teamTokenID)));  
			$_nw->sport_game_category_id = trim($_sportGameTypeID); 
			$_nw->sport_game_id = trim($_sportGameID); 
			$_nw->sport_game_token_id = sha1(md5(trim($_sportGameTokenID)));  
			$_nw->gender_category_id = trim($_genderCategory); 
			$_nw->event_type = trim($_eventType); 
			$_nw->player_mode = trim($_playerMode); 
			$_nw->number_of_players = trim($_participantNumber); 
			$_nw->active_flag = false;  
			$_nw->status = TournamentCore::$_PENDING;  
			$_nw->description = SystemCore::processDescription ( (trim($_sportGameTypeName).' - '.trim($_sportGameName)), trim($_description) );  
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
		 $_queryFileds = "sprtGmPrt.id, sprtGmPrt.event_type as eventType, sprtGmPrt.player_mode as contestantMode,  sprtGmPrt.number_of_players as totalContestantNumber, sprtGmPrt.gender_category_id as genderCategoryID, sprtGmPrt.active_flag as activeFlag, 
								sprtGmPrt.team_id as participantTeamID,sprtGmPrt.team_token_id as participantTeamTokenID,
								prtTm.id as teamID, prtTm.token_id as teamTokenID, prtTm.team_name as teamName, prtTm.alias as teamAlias, prtTm.country_id as teamCountryID, prtTm.team_city as teamCity, prtTm.team_number as teamNumber, prtTm.confirm_flag as confirmFlag, prtTm.id as teamID, prtTm.token_id as teamTokenID, prtTm.team_name as partcipantTeamName, prtTm.alias as partcipantTeamAlias,
								sprtGm.id as sportGameID, sprtGm.token_id as sportGameTokenID, sprtGm.name as sportGameName, sprtGm.alias as sportGameAlias, sprtGm.distance_type as sportGameDistanceTypeID, sprtGm.sport_game_type_mode as sportGameTypeMode,
								gmCat.category_name as gameCategoryName, gmCat.alias as gameCategoryAlias,
								trnmt.id as tournamentID, trnmt.token_id as tournamentTokenID, trnmt.name as tournamentName, trnmt.id as tournamentAlias,
		";	
		return $_queryFileds;
	}
	//
  // process list selection function 
   public static function processSelection ( $_orgID=null, $_tournamentID=null, $_teamID=null, $_teamTokenID=null, $_gameTypeID=null, $_keyword=null, $_exclusion=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TeamGameParticipation sprtGmPrt") 
				->innerJoin("sprtGmPrt.Team prtTm on sprtGmPrt.team_id = prtTm.id ")  
				->innerJoin("sprtGmPrt.GameCategory gmCat on sprtGmPrt.sport_game_category_id = gmCat.id ")  
				->innerJoin("sprtGmPrt.SportGame sprtGm on sprtGmPrt.sport_game_id = sprtGm.id ")  
				->innerJoin("prtTm.Tournament trnmt on prtTm.tournament_id = trnmt.id ")  
				->innerJoin("prtTm.Organization org on prtTm.org_id = org.id ")   
				->offset($_offset)
				->limit($_limit) 
				->orderBy("sprtGmPrt.id ASC")
				->where("sprtGmPrt.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("sprtGmPrt.org_id = ?", $_orgID);
				if(!is_null($_teamID)) $_qry = $_qry->addWhere("sprtGmPrt.team_id = ? AND sprtGmPrt.team_token_id = ? ", array($_teamID, $_teamTokenID));
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("sprtGmPrt.active_flag = ?", $_activeFlag);      
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("gmCat.category_name LIKE ? OR sprtGmPrt.id LIKE ? OR sprtGmPrt.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	
	// process list selection function 
   public static function processAll ( $_orgID=null, $_tournamentID=null, $_teamID=null, $_teamTokenID=null, $_gameTypeID=null, $_keyword=null, $_exclusion=null ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TeamGameParticipation sprtGmPrt") 
				->innerJoin("sprtGmPrt.Team prtTm on sprtGmPrt.team_id = prtTm.id ")  
				->innerJoin("sprtGmPrt.GameCategory gmCat on sprtGmPrt.sport_game_category_id = gmCat.id ")  
				->innerJoin("sprtGmPrt.SportGame sprtGm on sprtGmPrt.sport_game_id = sprtGm.id ")  
				->innerJoin("prtTm.Tournament trnmt on prtTm.tournament_id = trnmt.id ")  
				//->innerJoin("prtTm.Organization org on prtTm.org_id = org.id ")   
				->orderBy("sprtGmPrt.id ASC")
				->where("sprtGmPrt.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("sprtGmPrt.org_id = ?", $_orgID);
				if(!is_null($_teamID)) $_qry = $_qry->addWhere("sprtGmPrt.team_id = ? AND sprtGmPrt.team_token_id = ? ", array($_teamID, $_teamTokenID));
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("sprtGmPrt.active_flag = ?", $_activeFlag);      
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("gmCat.category_name LIKE ? OR sprtGmPrt.id LIKE ? OR sprtGmPrt.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processCandidates ($_orgID=null, $_tournamentID=null, $_teamID=null, $_teamTokenID=null, $_gameTypeID=null, $_keyword=null, $_exclusion=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TeamGameParticipation sprtGmPrt") 
				->innerJoin("sprtGmPrt.Team prtTm on sprtGmPrt.team_id = prtTm.id ")  
				->innerJoin("sprtGmPrt.GameCategory gmCat on sprtGmPrt.sport_game_category_id = gmCat.id ")  
				->innerJoin("sprtGmPrt.SportGame sprtGm on sprtGmPrt.sport_game_id = sprtGm.id ")  
				->innerJoin("prtTm.Tournament trnmt on prtTm.tournament_id = trnmt.id ")  
				->innerJoin("prtTm.Organization org on prtTm.org_id = org.id ")   
				->orderBy("sprtGmPrt.id ASC")
				->where("sprtGmPrt.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("sprtGmPrt.org_id = ?", $_orgID);
				if(!is_null($_teamID)) $_qry = $_qry->addWhere("sprtGmPrt.team_id = ? AND sprtGmPrt.team_token_id = ? ", array($_teamID, $_teamTokenID));
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("sprtGmPrt.active_flag = ?", $_activeFlag);      
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("gmCat.category_name LIKE ? OR sprtGmPrt.id LIKE ? OR sprtGmPrt.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
		 
	}
   public static function processCandidateParticipants ( $_tournamentID=null, $_teamID=null, $_teamTokenID=null, $_sportGameID=null, $_gameTypeID=null, $_genderCategory=null, $_keyword=null, $_exclusion=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TeamGameParticipation sprtGmPrt") 
				->innerJoin("sprtGmPrt.Team prtTm on sprtGmPrt.team_id = prtTm.id ")  
				->innerJoin("sprtGmPrt.GameCategory gmCat on sprtGmPrt.sport_game_category_id = gmCat.id ")  
				->innerJoin("sprtGmPrt.SportGame sprtGm on sprtGmPrt.sport_game_id = sprtGm.id ")  
				->innerJoin("prtTm.Tournament trnmt on prtTm.tournament_id = trnmt.id ")  
				->innerJoin("prtTm.Organization org on prtTm.org_id = org.id ")    
				->offset($_offset)
				->limit($_limit) 
				->groupBy("sprtGmPrt.team_id")
				->orderBy("sprtGmPrt.id ASC")
				->where("sprtGmPrt.id IS NOT NULL");
				if(!is_null($_teamID)) $_qry = $_qry->addWhere("sprtGmPrt.team_id = ? AND sprtGmPrt.team_token_id = ? ", array($_teamID, $_teamTokenID));
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);      
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGmPrt.sport_game_id = ?", $_sportGameID);      
				//if(!is_null($_gameTypeID)) $_qry = $_qry->addWhere("sprtGmPrt.sport_game_category_id = ?", $_gameTypeID);      
				//if(!is_null($_gameTypeID)) $_qry = $_qry->addWhere("sprtGmPrt.sport_game_id = ?", $_gameTypeID);      
				if(!is_null($_genderCategory)) $_qry = $_qry->addWhere("sprtGmPrt.gender_category_id = ?", $_genderCategory);      
				if(!is_null($_exclusion))  $_qry = $_qry->andWhereNotIn("prtTm.id", $_exclusion ); 
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("gmCat.category_name LIKE ? OR sprtGmPrt.id LIKE ? OR sprtGmPrt.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
		 
	}
   public static function processAllCandidateParticipants ( $_orgID=null, $_tournamentID=null, $_teamID=null, $_teamTokenID=null, $_sportGameID=null, $_gameTypeID=null, $_genderCategory=null, $_keyword=null, $_exclusion=null ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TeamGameParticipation sprtGmPrt") 
				->innerJoin("sprtGmPrt.Team prtTm on sprtGmPrt.team_id = prtTm.id ")  
				->innerJoin("sprtGmPrt.GameCategory gmCat on sprtGmPrt.sport_game_category_id = gmCat.id ")  
				->innerJoin("sprtGmPrt.SportGame sprtGm on sprtGmPrt.sport_game_id = sprtGm.id ")  
				->innerJoin("prtTm.Tournament trnmt on prtTm.tournament_id = trnmt.id ")  
				->innerJoin("prtTm.Organization org on prtTm.org_id = org.id ")   
				->groupBy("sprtGmPrt.team_id")
				->orderBy("sprtGmPrt.id ASC")
				->where("sprtGmPrt.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("prtTm.org_id = ?", $_orgID);
				if(!is_null($_teamID)) $_qry = $_qry->addWhere("sprtGmPrt.team_id = ? AND sprtGmPrt.team_token_id = ? ", array($_teamID, $_teamTokenID));
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);      
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);      
				if(!is_null($_gameTypeID)) $_qry = $_qry->addWhere("sprtGmPrt.sport_game_category_id = ?", $_gameTypeID);      
				//if(!is_null($_gameTypeID)) $_qry = $_qry->addWhere("sprtGmPrt.sport_game_id = ?", $_gameTypeID);      
				if(!is_null($_genderCategory)) $_qry = $_qry->addWhere("sprtGmPrt.gender_category_id = ?", $_genderCategory);      
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("sprtGmPrt.active_flag = ?", $_activeFlag);   
				if(!is_null($_exclusion))  $_qry = $_qry->andWhereNotIn("prtTm.id", $_exclusion ); 
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("gmCat.category_name LIKE ? OR sprtGmPrt.id LIKE ? OR sprtGmPrt.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
		 
	}
   public static function processCandidateTeams ( $_orgID=null, $_tournamentID=null, $_sportGameID=null, $_sportGameTokenID=null, $_gameTypeID=null, $_genderCategory=null, $_keyword=null, $_exclusion=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TeamGameParticipation sprtGmPrt") 
				->innerJoin("sprtGmPrt.Team prtTm on sprtGmPrt.team_id = prtTm.id ")  
				->innerJoin("sprtGmPrt.GameCategory gmCat on sprtGmPrt.sport_game_category_id = gmCat.id ")  
				->innerJoin("sprtGmPrt.SportGame sprtGm on sprtGmPrt.sport_game_id = sprtGm.id ")  
				->innerJoin("prtTm.Tournament trnmt on prtTm.tournament_id = trnmt.id ")  
				->innerJoin("prtTm.Organization org on prtTm.org_id = org.id ")    
				->offset($_offset)
				->limit($_limit) 
				->groupBy("sprtGmPrt.team_id")
				->orderBy("sprtGmPrt.id ASC")
				->where("sprtGmPrt.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("prtTm.org_id = ?", $_orgID);
				if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGmPrt.sport_game_id = ? AND sprtGmPrt.sport_game_token_id = ? ", array($_sportGameID, $_sportGameTokenID));
				if(!is_null($_tournamentID)) $_qry = $_qry->addWhere("trnmt.id = ?", $_tournamentID);      
				//if(!is_null($_sportGameID)) $_qry = $_qry->addWhere("sprtGm.id = ?", $_sportGameID);      
				if(!is_null($_gameTypeID)) $_qry = $_qry->addWhere("sprtGmPrt.sport_game_category_id = ?", $_gameTypeID);      
				//if(!is_null($_gameTypeID)) $_qry = $_qry->addWhere("sprtGmPrt.sport_game_id = ?", $_gameTypeID);      
				if(!is_null($_genderCategory)) $_qry = $_qry->addWhere("sprtGmPrt.gender_category_id = ?", $_genderCategory);      
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("sprtGmPrt.active_flag = ?", $_activeFlag);   
				if(!is_null($_exclusion))  $_qry = $_qry->andWhereNotIn("prtTm.id", $_exclusion ); 
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("gmCat.category_name LIKE ? OR sprtGmPrt.id LIKE ? OR sprtGmPrt.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
		 
	}
	// process list selection function 
   public static function processCandidateSelection ( $_orgID=null, $_tournamentID=null, $_teamID=null, $_teamTokenID=null, $_sportGameCategoryID=null, $_genderCategory=null, $_keyword=null, $_exclusion=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TeamGameParticipation sprtGmPrt") 
				->innerJoin("sprtGmPrt.Team prtTm on sprtGmPrt.team_id = prtTm.id ")  
				->innerJoin("sprtGmPrt.GameCategory gmCat on sprtGmPrt.sport_game_category_id = gmCat.id ")  
				->innerJoin("sprtGmPrt.SportGame sprtGm on sprtGmPrt.sport_game_id = sprtGm.id ")  
				->innerJoin("prtTm.Tournament trnmt on prtTm.tournament_id = trnmt.id ")  
				->innerJoin("prtTm.Organization org on prtTm.org_id = org.id ")   
				->offset($_offset)
				->limit($_limit) 
				->orderBy("sprtGmPrt.id ASC")
				->where("sprtGmPrt.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("sprtGmPrt.org_id = ? ", $_orgID);
				if(!is_null($_teamID)) $_qry = $_qry->addWhere("sprtGmPrt.team_id = ? AND sprtGmPrt.team_token_id = ? ", array($_teamID, $_teamTokenID));
				if(!is_null($_genderCategory)) $_qry = $_qry->addWhere("sprtGmPrt.gender_category_id = ?", $_genderCategory);  
				if(!is_null($_sportGameCategoryID)) $_qry = $_qry->addWhere("gmCat.id = ?", $_sportGameCategoryID);  
				//if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("sprtGmPrt.active_flag = ?", $_activeFlag);    
				if(! is_null($_exclusion)) $_qry = $_qry->andWhereNotIn("sprtGmPrt.id ", $_exclusion );  
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("gmCat.category_name LIKE ? OR sprtGmPrt.id LIKE ? OR sprtGmPrt.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
	public static function processObject ( $_orgID=null, $_orgTokenID=null, $_sportGameID, $_sportGameTokenID ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TeamGameParticipation sprtGmPrt") 
				->innerJoin("sprtGmPrt.Team prtTm on sprtGmPrt.team_id = prtTm.id ")  
				->innerJoin("sprtGmPrt.GameCategory gmCat on sprtGmPrt.sport_game_category_id = gmCat.id ")  
				->innerJoin("sprtGmPrt.SportGame sprtGm on sprtGmPrt.sport_game_id = sprtGm.id ")  
				->innerJoin("prtTm.Tournament trnmt on prtTm.tournament_id = trnmt.id ")  
				->innerJoin("prtTm.Organization org on prtTm.org_id = org.id ")   
				->where("sprtGmPrt.id = ? AND sprtGmPrt.token_id = ? ", array($_sportGame, $_sportGameTokenID ));
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeObject ( $_orgID=null, $_matchID, $_tokenID  ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TeamGameParticipation sprtGmPrt") 
				->innerJoin("sprtGmPrt.Tournament trnmt on sprtGmPrt.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmPrt.SportGame sprtGm on sprtGmPrt.sport_game_id = sprtGm.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				//->innerJoin("tm.Organization org on tm.org_id = org.id ")     
				->where("sprtGmPrt.id = ? AND sprtGmPrt.token_id = ? ", array($_matchID, $_tokenID ));
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeCandidateObject ( $_orgID=null, $_activeFlag ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("TeamGameParticipation sprtGmPrt") 
				->innerJoin("sprtGmPrt.Tournament trnmt on sprtGmPrt.tournament_id = trnmt.id ")  
				->innerJoin("sprtGmPrt.SportGame sprtGm on sprtGmPrt.sport_game_id = sprtGm.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				//->innerJoin("tm.Organization org on tm.org_id = org.id ")  
				->where("sprtGmPrt.id IS NOT NULL");
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				if(!is_null($_activeFlag)) $_qry = $_qry->andWhere("sprtGmPrt.active_flag = ?", $_activeFlag);
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	 
	
	/*********************************************************
	********** Candidate selection process *******************
	**********************************************************/
	
	//
	public static function processCandidatePersonSelection ( ) 
   { 
		
	}  
	
	/*********************************************************
	********** Candidate filtering process *******************
	**********************************************************/
	
	public static function processRoleSelection ()
	{
		 
	}
}

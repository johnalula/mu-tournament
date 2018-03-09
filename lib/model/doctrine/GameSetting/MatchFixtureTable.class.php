<?php

/**
 * MatchFixtureTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class MatchFixtureTable extends PluginMatchFixtureTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object MatchFixtureTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('MatchFixture');
    }
   //
	public static function processNew ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchSportGameID, $_matchSportGameTokenID, $_sportGameName, $_matchRoundID, $_genderCategory, $_eventType, $_playerMode, $_matchVenue, $_matchGroup, $_matchTime, $_matchDate, $_matchStatus, $_description, $_userID, $_userTokenID  )
	{
		 $_flag = true;

			//$_categoryAlias = $_categoryAlias ? SystemCore::makeAlias ( $_categoryAlias ):SystemCore::makeAlias ( $_categoryName );
			//$_sportGameAlias = $_sportGameAlias ? SystemCore::makeAlias ( $_sportGameAlias ):SystemCore::makeAlias ( $_sportGameName );
			$_matchFixture = self::processSave ( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchSportGameID, $_matchSportGameTokenID, $_sportGameName, $_matchRoundID, $_genderCategory, $_eventType, $_playerMode, $_matchVenue, $_matchGroup, $_matchTime, $_matchDate, $_matchStatus, $_descriptio);
		
		return $_matchFixture ? true:false;
	}
	//
	public static function processCreate ( )
	{
		
	} 
	public static function processSave ( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchSportGameID, $_matchSportGameTokenID, $_sportGameName, $_matchRoundID, $_genderCategory, $_eventType, $_playerMode, $_matchVenue, $_matchGroup, $_matchTime, $_matchDate, $_matchStatus, $_description )
	{
		//try {
			//if(!$_orgID || !$_name) return false;
			$_token = trim($_tournamentMatchID).trim($_matchSportGameTokenID).trim($_matchDate).rand('11111', '99999'); 
			$_startDate = date('m/d/Y', time());
			$_nw = new MatchFixture (); 
			$_nw->token_id = sha1(md5(trim($_token))); 
			//$_nw->org_id = trim($_orgID); 
			//$_nw->org_token_id = sha1(md5(trim($_orgTokenID)));  
			$_nw->tournament_match_id = trim($_tournamentMatchID); 
			$_nw->tournament_match_token_id = sha1(md5(trim($_tournamentMatchTokenID)));  
			$_nw->sport_game_id = trim($_matchSportGameID); 
			$_nw->sport_game_token_id = sha1(md5(trim($_matchSportGameTokenID)));  
			if($_matchRoundID) {
			$_nw->match_round_type_id = trim($_matchRoundID  ); 
			}
			$_nw->group_type_id = trim($_matchGroup); 
			$_nw->gender_category_id = trim($_genderCategory); 
			$_nw->event_type = trim($_eventType); 
			$_nw->player_mode = trim($_playerMode); 
			$_nw->match_venue = trim($_matchVenue); 
			$_nw->match_time = trim($_matchTime); 
			$_nw->match_date = trim($_matchDate); 
			$_nw->start_date = $_matchDate ? trim($_matchDate):trim($_startDate); 
			$_nw->active_flag = true;  
			$_nw->status = trim($_matchStatus);   
			$_nw->description = SystemCore::processDescription ( trim($_sportGameName), trim($_description) );  
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
		 $_queryFileds = "mtchFix.id, mtchFix.match_round_type_id as matchRoundTypeID, mtchFix.event_type as matchEventType, mtchFix.player_mode as matchPlayerMode, mtchFix.match_venue as matchVenue, mtchFix.gender_category_id as genderCategoryID, mtchFix.match_date as matchDate, mtchFix.match_time as matchTime, mtchFix.group_type_id as groupID, mtchFix.active_flag as activeFlag, 
								trnmtMtch.id as tournamentMatchID,
								sprtGm.id as sportGameID, sprtGm.token_id as sportGameTokenID, sprtGm.name as sportGameName, sprtGm.alias as sportGameAlias,
								gmCat.category_name as gameCategoryName, gmCat.alias as gameCategoryAlias,
								trnmt.id as tournamentID, trnmt.token_id as tournamentTokenID, trnmt.name as tournamentName, trnmt.id as tournamentAlias,
		";	
		return $_queryFileds;
	}
	//
  // process list selection function 
   public static function processSelection ( $_orgID=null, $_orgTokenID=null, $_categoryID=null, $_gameTypeID=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("MatchFixture mtchFix") 
				->innerJoin("mtchFix.TournamentMatch trnmtMtch on mtchFix.tournament_match_id = trnmtMtch.id ")  
				->innerJoin("mtchFix.SportGame sprtGm on mtchFix.sport_game_id = sprtGm.id ")  
				->innerJoin("trnmtMtch.Tournament trnmt on trnmtMtch.tournament_id = trnmt.id ")  
				->innerJoin("sprtGm.GameCategory gmCat on sprtGm.sport_game_category_id = gmCat.id ")  
				//->innerJoin("mtchFix.Organization org on mtchFix.org_id = org.id ")   
				->offset($_offset)
				->limit($_limit) 
				->orderBy("mtchFix.id ASC")
				->where("mtchFix.id IS NOT NULL");
				//if(!is_null($_orgID)) $_qry = $_qry->addWhere("mtchFix.org_id = ? AND mtchFix.org_token_id = ? ", array($_orgID, $_orgTokenID));
				/*if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("mtchFix.active_flag = ?", $_activeFlag);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("gmCat.category_name LIKE ? OR mtchFix.id LIKE ? OR mtchFix.description LIKE ?", array( $_keyword, $_keyword, $_keyword));*/
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processAll ($_orgID=null, $_orgTokenID=null, $_keyword=null ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("MatchFixture mtchFix") 
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
   public static function processCandidates ( ) 
   {
		 
	}
	//
	public static function processObject ( $_orgID=null, $_orgTokenID=null, $_matchID, $_tokenID ) 
	{
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("MatchFixture mtchFix") 
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
				->from("MatchFixture mtchFix") 
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
				->from("MatchFixture mtchFix") 
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

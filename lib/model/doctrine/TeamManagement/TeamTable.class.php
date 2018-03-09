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
	public static function processNew ( $_orgID, $_orgTokenID,  $_teamName, $_teamAlias, $_teamCountry, $_teamCity, $_description, $_userID, $_userTokenID  )
	{
		 $_flag = true;

			$_tournament = self::processSave ( $_orgID, $_orgTokenID,  $_teamName, $_teamAlias, $_teamCountry, $_teamCity, $_description );
		
		return $_tournament;
	}
	//
	public static function processCreate ( )
	{
		
	} 
	public static function processSave ( $_orgID, $_orgTokenID,  $_teamName, $_teamAlias, $_teamCountry, $_teamCity, $_description )
	{
		//try {
			//if(!$_orgID || !$_name) return false;
    	
			$_token = trim($_orgTokenID).trim($_teamAlias).trim($_teamName).trim($_teamCity).rand('11111', '99999'); 
			$_startDate = date('m/d/Y', time());
			$_nw = new Team (); 
			$_nw->token_id = sha1(md5(trim($_token))); 
			//$_nw->org_id = trim($_orgID); 
			//$_nw->org_token_id = sha1(md5(trim($_orgTokenID)));  
			$_nw->team_name = trim($_teamName); 
			$_nw->alias = trim($_teamAlias); 
			$_nw->country_id = trim($_teamCountry);  
			$_nw->team_city = trim($_teamCity);  
			$_nw->start_date = trim($_startDate);  
			$_nw->status = trim(TournamentCore::$_PENDING);   
			//$_nw->description = SystemCore::processDescription ( trim($_teamName), trim($_description) );  
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
		 $_queryFileds = "tm.id, tm.team_name as teamName, tm.alias as teamAlias, tm.country_id as teamCountry, tm.team_city as teamCity, tm.active_flag as activeFlag, 
		";	
		return $_queryFileds;
	}
	//
  // process list selection function 
   public static function processSelection ( $_orgID=null, $_orgTokenID=null, $_activeFlag=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("Team tm") 
				//->innerJoin("tm.Campus cmps on tm.campus_id = cmps.id ")  
				//->innerJoin("tm.Organization org on tm.org_id = org.id ")   
				->offset($_offset)
				->limit($_limit) 
				->orderBy("tm.id ASC")
				->where("tm.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("tm.org_id = ? AND tm.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_season)) $_qry = $_qry->addWhere("tm.season = ? ", $_season); 
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("tm.active_flag = ?", $_activeFlag);    
				if(!is_null($_exclusion))  $_qry = $_qry->andWhereNotIn("tm.id", $_exclusion ); 
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("tm.team_name LIKE ? OR tm.alias LIKE ? OR tm.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processAll ( ) 
   {
		  
	}
	//
   public static function processCandidates ( ) 
   {
		 
	}
	//
	public static function processObject ( $_orgID=null, $_orgTokenID=null, $_teamID, $_tokenID ) 
	{
			$_qry = Doctrine_Query::create()
					->select(self::appendQueryFields())
					->from("Team tm") 
					//->innerJoin("tm.Tournament trnmnt on tm.tournament_id = trnmnt.id ")  
					//->innerJoin("tm.Organization org on tm.org_id = org.id ")     
				->where("tm.id = ? AND tm.token_id = ? ", array($_teamID, $_tokenID ));
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeObject ( ) 
   {
		 
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

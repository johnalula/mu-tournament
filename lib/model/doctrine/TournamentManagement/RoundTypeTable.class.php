<?php

/**
 * RoundTypeTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class RoundTypeTable extends PluginRoundTypeTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object RoundTypeTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('RoundType');
    }
    //
	public static function processNew ( $_orgID, $_orgTokenID,  $_roundTypeName, $_roundTypeAlias, $_roundType, $_roundNumber, $_description, $_userID, $_userTokenID  )
	{
			$_flag = true;
			$_roundTypeName = $_roundTypeName ? ucwords($_roundTypeName):TournamentCore::processRoundValue ( $_roundType );
			$_roundTypeAlias = $_roundTypeAlias ? SystemCore::makeAlias ( $_roundTypeAlias ):SystemCore::makeAlias ( $_roundTypeName );
			$_tournament = self::processSave ( $_orgID, $_orgTokenID,  $_roundTypeName, $_roundTypeAlias, $_roundType, $_description );
		
		return $_tournament;
	}
	//
	public static function processCreate ( )
	{
		
	} 
	public static function processSave ( $_orgID, $_orgTokenID,  $_roundTypeName, $_roundTypeAlias, $_roundType, $_description )
	{
		//try {
			//if(!$_orgID || !$_name) return false;
    	
			$_token = trim($_orgTokenID).trim($_roundTypeName).trim($_roundTypeAlias).trim($_roundType).rand('11111', '99999'); 
			$_startDate = date('m/d/Y', time());
			$_nw = new RoundType (); 
			$_nw->token_id = sha1(md5(trim($_token))); 
			//$_nw->org_id = trim($_orgID); 
			//$_nw->org_token_id = sha1(md5(trim($_orgTokenID)));  
			$_nw->name = ucwords(trim($_roundTypeName)); 
			$_nw->alias = trim($_roundTypeAlias); 
			$_nw->round_type = trim($_roundType);  
			$_nw->round_number = trim($_roundType);  
			$_nw->status = trim(TournamentCore::$_ACTIVE);   
			$_nw->description = SystemCore::processDescription ( ucwords(trim($_roundTypeName)), trim($_description) );  
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
		 $_queryFileds = "rnd.id, rnd.name as roundTypeName, rnd.alias as roundTypeAlias, rnd.round_type as roundTypeNumber, rnd.round_number as roundNumber, rnd.active_flag as activeFlag, 
		";	
		return $_queryFileds;
	}
	//
  // process list selection function 
   public static function processSelection ( $_orgID=null, $_orgTokenID=null, $_type=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("RoundType rnd") 
				//->innerJoin("rnd.Organization org on rnd.org_id = org.id ")   
				->offset($_offset)
				->limit($_limit) 
				->orderBy("rnd.id ASC")
				->where("rnd.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("rnd.org_id = ? AND rnd.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_season)) $_qry = $_qry->addWhere("rnd.season = ? ", $_season); 
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("rnd.active_flag = ?", $_activeFlag);    
				if(!is_null($_exclusion))  $_qry = $_qry->andWhereNotIn("rnd.id", $_exclusion ); 
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("rnd.name LIKE ? OR rnd.alias LIKE ? OR rnd.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processAll ( $_orgID=null, $_orgTokenID=null, $_type=null, $_keyword=null, $_activeFlag=null) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("RoundType rnd") 
				//->innerJoin("rnd.Campus cmps on rnd.campus_id = cmps.id ")  
				//->innerJoin("rnd.Organization org on rnd.org_id = org.id ")   
				->orderBy("rnd.id ASC")
				->where("rnd.id IS NOT NULL");
				/*if(!is_null($_orgID)) $_qry = $_qry->addWhere("rnd.org_id = ? AND rnd.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_season)) $_qry = $_qry->addWhere("rnd.season = ? ", $_season); 
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("rnd.active_flag = ?", $_activeFlag);    
				if(!is_null($_exclusion))  $_qry = $_qry->andWhereNotIn("rnd.id", $_exclusion ); 
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("rnd.name LIKE ? OR rnd.alias LIKE ? OR rnd.description LIKE ?", array( $_keyword, $_keyword, $_keyword));*/
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processCandidates ( ) 
   {
		 
	}
	 public static function processCandidateSelection ( $_orgID=null, $_roundType=null, $_exclusion=null,$_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("RoundType rnd") 
				//->innerJoin("rnd.Organization org on rnd.org_id = org.id ")   
				->offset($_offset)
				->limit($_limit) 
				->orderBy("rnd.id ASC")
				->where("rnd.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("rnd.org_id = ?", $_orgID);    
				if(!is_null($_roundType)) $_qry = $_qry->addWhere("rnd.round_type = ?", $_roundType);    
				if(!is_null($_exclusion))  $_qry = $_qry->andWhereNotIn("rnd.id", $_exclusion ); 
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("rnd.name LIKE ? OR rnd.alias LIKE ? OR rnd.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
	public static function processObject ( $_orgID=null, $_orgTokenID=null, $_tournamentID, $_tokenID ) 
	{
			$_qry = Doctrine_Query::create()
					->select(self::appendQueryFields())
					->from("Tournament trnmnt") 
					//->innerJoin("tm.Tournament trnmnt on tm.tournament_id = trnmnt.id ")  
					//->innerJoin("tm.Organization org on tm.org_id = org.id ")     
				->where("trnmnt.id = ? AND trnmnt.token_id = ? ", array($_tournamentID, $_tokenID ));
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeObject ( $_orgID=null, $_tournamentID, $_tokenID  ) 
	{
			$_qry = Doctrine_Query::create()
					->select(self::appendQueryFields())
					->from("Tournament trnmnt") 
					//->innerJoin("tm.Tournament trnmnt on tm.tournament_id = trnmnt.id ")  
					//->innerJoin("tm.Organization org on tm.org_id = org.id ")     
				->where("trnmnt.id = ? AND trnmnt.token_id = ? ", array($_tournamentID, $_tokenID ));
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeCandidateObject ( $_orgID=null, $_activeFlag ) 
	{
			$_qry = Doctrine_Query::create()
					->select(self::appendQueryFields())
					->from("Tournament trnmnt") 
					//->innerJoin("tm.Tournament trnmnt on tm.tournament_id = trnmnt.id ")  
					//->innerJoin("tm.Organization org on tm.org_id = org.id ")  
					->where("trnmnt.id IS NOT NULL");
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				if(!is_null($_activeFlag)) $_qry = $_qry->andWhere("trnmnt.active_flag = ?", $_activeFlag);
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

<?php

/**
 * GameGroupTypeTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class GameGroupTypeTable extends PluginGameGroupTypeTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object GameGroupTypeTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('GameGroupType');
    }
      //
	public static function processNew ( $_orgID, $_orgTokenID, $_categoryName, $_categoryAlias, $_status, $_description, $_userID, $_userTokenID  )
	{
		 $_flag = true;

			$_categoryAlias = $_categoryAlias ? SystemCore::makeAlias ( $_categoryAlias ):SystemCore::makeAlias ( $_categoryName );
			$_tournament = self::processSave ( $_orgID, $_orgTokenID, $_categoryName, $_categoryAlias, $_status, $_description );
		
		return $_tournament;
	}
	//
	public static function processCreate ( )
	{
		
	} 
	public static function processSave ( $_orgID, $_orgTokenID,  $_categoryName, $_categoryAlias, $_status, $_description )
	{
		//try {
			//if(!$_orgID || !$_name) return false;
    	
			$_token = trim($_orgTokenID).trim($_categoryName).trim($_categoryAlias).trim($_startDate).rand('11111', '99999'); 
			$_startDate = date('m/d/Y', time());
			$_nw = new GameGroupType (); 
			$_nw->token_id = sha1(md5(trim($_token))); 
			//$_nw->org_id = trim($_orgID); 
			//$_nw->org_token_id = sha1(md5(trim($_orgTokenID)));  
			$_nw->group_number = ucwords(trim($_categoryName)); 
			$_nw->alias = trim($_categoryAlias); 
			$_nw->active_flag = true;  
			$_nw->status = trim(TournamentCore::$_PENDING);   
			$_nw->description = SystemCore::processDescription ( trim($_categoryName), trim($_description) );  
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
		 $_queryFileds = "grp.id, grp.group_category_id as groupTypeID, grp.group_name as groupName, grp.group_number as groupNumber, grp.alias as groupAlias, grp.default_flag as defaultFlag, grp.active_flag as activeFlag, 
		";	
		return $_queryFileds;
	}
	//
  // process list selection function 
   public static function processSelection ( $_orgID=null, $_orgTokenID=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("GameGroupType grp") 
				//->innerJoin("grp.Campus cmps on grp.campus_id = cmps.id ")  
				//->innerJoin("grp.Organization org on grp.org_id = org.id ")   
				->offset($_offset)
				->limit($_limit) 
				->orderBy("grp.id ASC")
				->where("grp.id IS NOT NULL");
				//if(!is_null($_orgID)) $_qry = $_qry->addWhere("grp.org_id = ? AND grp.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("grp.active_flag = ?", $_activeFlag);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("grp.group_number LIKE ? OR grp.alias LIKE ? OR grp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processAll ($_orgID=null, $_orgTokenID=null, $_keyword=null, $_activeFlag=null ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("GameGroupType grp") 
				//->innerJoin("grp.Campus cmps on grp.campus_id = cmps.id ")  
				//->innerJoin("grp.Organization org on grp.org_id = org.id ")   
				->orderBy("grp.id ASC")
				->where("grp.id IS NOT NULL");
				//if(!is_null($_orgID)) $_qry = $_qry->addWhere("grp.org_id = ? AND grp.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("grp.active_flag = ?", $_activeFlag);    
				/*if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("grp.group_number LIKE ? OR grp.alias LIKE ? OR grp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));*/
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	// process list selection function 
   public static function processCandidates ( $_orgID=null, $_orgTokenID=null, $_keyword=null, $_exclusion=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("GameGroupType grp")  
				//->innerJoin("grp.Organization org on grp.org_id = org.id ")   
				->offset($_offset)
				->limit($_limit) 
				->orderBy("grp.id ASC")
				->where("grp.id IS NOT NULL");
				//if(!is_null($_orgID)) $_qry = $_qry->addWhere("grp.org_id = ? AND grp.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("grp.active_flag = ?", $_activeFlag);    
				if(! is_null($_exclusion)) $_qry = $_qry->andWhereNotIn("grp.id ", $_exclusion );     
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("grp.group_number LIKE ? OR grp.alias LIKE ? OR grp.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
    
	public static function processObject ( $_orgID=null, $_groupID, $_tokenID ) 
	{
			$_qry = Doctrine_Query::create()
					->select(self::appendQueryFields())
					->from("GameGroupType grp") 
					//->innerJoin("tm.Tournament trnmnt on tm.tournament_id = trnmnt.id ")  
					//->innerJoin("tm.Organization org on tm.org_id = org.id ")     
				->where("grp.id = ? AND grp.token_id = ? ", array($_teamID, $_tokenID ));
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
				$_qry = $_qry->fetchOne(array(), Doctrine_Core::HYDRATE_RECORD); 
			
		return (! $_qry ? null : $_qry ); 	
	}  
	//
   public static function makeObject ( $_orgID=null, $_groupID) 
   {
		 	$_qry = Doctrine_Query::create()
					->select(self::appendQueryFields())
					->from("GameGroupType grp") 
					//->innerJoin("tm.Tournament trnmnt on tm.tournament_id = trnmnt.id ")  
					//->innerJoin("tm.Organization org on tm.org_id = org.id ")     
					->where("grp.id = ?  ", $_groupID);
				//if(!is_null($_orgID)) $_qry = $_qry->andWhere("prt.org_id = ? AND prt.org_token_id = ?", array($_orgID, $_orgTokenID));
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

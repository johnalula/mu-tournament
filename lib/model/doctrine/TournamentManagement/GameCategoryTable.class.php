<?php

/**
 * GameCategoryTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class GameCategoryTable extends PluginGameCategoryTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object GameCategoryTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('GameCategory');
    }
   //
	public static function processNew ( $_orgID, $_orgTokenID, $_categoryName, $_categoryAlias, $_teamMode, $_categoryStatus, $_description, $_userID, $_userTokenID  )
	{
		 $_flag = true;

			$_categoryAlias = $_categoryAlias ? SystemCore::makeAlias ( $_categoryAlias ):SystemCore::makeAlias ( $_categoryName );
			$_tournament = self::processSave ( $_orgID, $_orgTokenID, $_categoryName, $_categoryAlias, $_teamMode, $_categoryStatus, $_description );
		
		return $_tournament;
	}
	//
	public static function processCreate ( )
	{
		
	} 
	public static function processSave ( $_orgID, $_orgTokenID, $_categoryName, $_categoryAlias, $_teamMode, $_categoryStatus, $_description )
	{
		//try {
			//if(!$_orgID || !$_name) return false;
    	
			$_token = trim($_orgTokenID).trim($_categoryName).trim($_categoryAlias).trim($_startDate).rand('11111', '99999'); 
			$_startDate = date('m/d/Y', time());
			$_nw = new GameCategory (); 
			$_nw->token_id = sha1(md5(trim($_token))); 
			$_nw->org_id = trim($_orgID); 
			$_nw->org_token_id = sha1(md5(trim($_orgTokenID)));  
			$_nw->category_name = ucwords(trim($_categoryName)); 
			$_nw->alias = trim($_categoryAlias); 
			$_nw->contestant_team_mode = trim($_teamMode); 
			$_nw->active_flag = true;  
			$_nw->status = $_categoryStatus ? $_categoryStatus:trim(SystemCore::$_ACTIVATE);   
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
		 $_queryFileds = "cat.id, cat.category_name as categoryName, cat.alias as categoryAlias, cat.category_type as categoryType, cat.contestant_team_mode as contestantTeamMode, cat.default_flag as defaultFlag, cat.active_flag as activeFlag, 
		";	
		return $_queryFileds;
	}
	//
  // process list selection function 
   public static function processSelection ( $_orgID=null, $_orgTokenID=null, $_keyword=null, $_offset=0, $_limit=10 ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("GameCategory cat")  
				->innerJoin("cat.Organization org on cat.org_id = org.id ")   
				->offset($_offset)
				->limit($_limit) 
				->orderBy("cat.id ASC")
				->where("cat.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("cat.org_id = ? AND cat.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("cat.active_flag = ?", $_activeFlag);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("cat.category_name LIKE ? OR cat.alias LIKE ? OR cat.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processAll ($_orgID=null, $_orgTokenID=null, $_keyword=null, $_activeFlag=null ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("GameCategory cat")  
				->innerJoin("cat.Organization org on cat.org_id = org.id ")   
				->orderBy("cat.id ASC")
				->where("cat.id IS NOT NULL");
				if(!is_null($_orgID)) $_qry = $_qry->addWhere("cat.org_id = ? AND cat.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("cat.active_flag = ?", $_activeFlag);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("cat.category_name LIKE ? OR cat.alias LIKE ? OR cat.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processCandidates ($_orgID=null, $_orgTokenID=null, $_keyword=null, $_activeFlag=null ) 
   {
		$_qry = Doctrine_Query::create()
				->select(self::appendQueryFields())
				->from("GameCategory cat")  
				//->innerJoin("cat.Organization org on cat.org_id = org.id ")   
				->orderBy("cat.id ASC")
				->where("cat.id IS NOT NULL");
				//if(!is_null($_orgID)) $_qry = $_qry->addWhere("cat.org_id = ? AND cat.org_token_id = ? ", array($_orgID, $_orgTokenID));
				if(!is_null($_activeFlag)) $_qry = $_qry->addWhere("cat.active_flag = ?", $_activeFlag);    
				if(!is_null($_keyword) )
					if(strcmp(trim($_keyword), "") != 0 )
						$_qry = $_qry->andWhere("cat.category_name LIKE ? OR cat.alias LIKE ? OR cat.description LIKE ?", array( $_keyword, $_keyword, $_keyword));
				
			$_qry = $_qry->execute(array(), Doctrine_Core::HYDRATE_RECORD); 

		return ( count($_qry) <= 0 ? null:$_qry );  
	}
	//
   public static function processCandidateSelection ( ) 
   {
		 
	}
	//
   public static function processObject( ) 
   {
		
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

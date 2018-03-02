<?php

/**
 * tournament_setup actions.
 *
 * @package    mu-TMS
 * @subpackage tournament_setup
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tournament_setupActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
	  //=null, $_offset=0, $_limit=10 )
	  //$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		//$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		//$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		$this->_countGameCategorys = GameCategoryTable::processAll ( $_orgID, $_orgTokenID, $_keyword );
		$this->_gameCategorys = GameCategoryTable::processSelection ( $_orgID, $_orgTokenID, $_keyword, 0, 15 );
		$this->_gameRounds = RoundTypeTable::processSelection ( $_orgID, $_orgTokenID, $_type, $_keyword, 0, 15 );
		$this->_sportGames = SportGameTable::processSelection ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword, 0, 15 );
  }
  
  public function executeCreateGameCategory(sfWebRequest $request)
	{
		$_categoryName = $request->getParameter('category_name');	
		$_categoryAlias = $request->getParameter('category_alias');	
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_flag =  GameCategoryTable::processNew ( $_orgID, $_orgTokenID, $_categoryName, $_categoryAlias, $_status, $_description, $_userID, $_userTokenID  );  
				 
		return $_flag ? true:false;
		
	}
  public function executeCreateSportGame(sfWebRequest $request)
	{
		$_categoryID = $request->getParameter('sport_game_category');	
		$_gameDistanceType = $request->getParameter('sprt_game_type');	
		$_gameDistance = $request->getParameter('sport_game_distance');	
		$_measurementType = $request->getParameter('sport_game_measurement');	
		$_sportGameName = $request->getParameter('sport_game_type_name');	
		$_sportGameAlias = $request->getParameter('sport_game_type_alias');	
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_flag =  SportGameTable::processNew ( _orgID, $_orgTokenID,  $_categoryID, $_sportGameName, $_sportGameAlias, $_gameDistanceType, $_gameDistance, $_measurementType, $_status, $_description, $_userID, $_userTokenID  );  
				 
		return $_flag ? true:false;
		
	}
	
	public function executeCreateGameRoundType(sfWebRequest $request)
	{
		$_roundTypeName = $request->getParameter('round_name');	
		$_roundTypeAlias = $request->getParameter('round_alias');	
		$_roundType = $request->getParameter('round_type');	
		$_roundNumber = $request->getParameter('round_number');	
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_flag =  RoundTypeTable::processNew ( $_orgID, $_orgTokenID, $_roundTypeName, $_roundTypeAlias, $_roundType, $_roundNumber, $_description, $_userID, $_userTokenID  );  
				 
		return $_flag ? true:false;
		
	}
}

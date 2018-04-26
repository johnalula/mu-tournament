<?php

/**
 * game actions.
 *
 * @package    mu-TMS
 * @subpackage game
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sport_gamesActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
   public function executeIndex(sfWebRequest $request)
	{
		//$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		//$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		//$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		//$this->_tournaments = TournamentTable::processSelection ( $_orgID, $_orgTokenID, $_season, $_activeFlag, $_keyword, 0, 10 );
		$this->_sportGames = SportGameTable::processSelection ( $_orgID, $_orgTokenID, $_categoryID, $_activeFlag, $_keyword, 1, 10 ); 
		$this->_countSportGames = SportGameTable::processAll ($_orgID, $_orgTokenID, $_categoryID, $_activeFlag, $_keyword ); 
	}
	
	public function executeNew(sfWebRequest $request)
	{
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		$this->_gameCategorys = GameCategoryTable::processSelection ( $_orgID, $_orgTokenID, $_keyword, 0, 15 );
		$this->_candidateGameCategorys = GameCategoryTable::processSelection ( $_orgID, $_orgTokenID, $_keyword, 0, 15 ); 
		$this->_sportGames = SportGameTable::processSelection ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword, 0, 20 ); 
		
	}
	
	public function executeCreateTournamentSportGame(sfWebRequest $request)
	{
		$_gameCategoryName = $request->getParameter('sport_game_category_name');	
		$_gameCategoryID = $request->getParameter('sport_game_category_id');	
		$_gameCategoryTokenID = $request->getParameter('sport_game_category_token_id');	
		$_contestantTeamMode = $request->getParameter('contestant_team_mode');	
		$_sportGameTypeMode = $request->getParameter('sport_game_type_mode');	
		$_gameDistanceType = $request->getParameter('sport_game_type');	
		$_gameDistance = $request->getParameter('sport_game_distance');	
		$_measurementType = $request->getParameter('sport_game_measurement');	
		$_sportGameName = $request->getParameter('sport_game_type_name');	
		$_sportGameAlias = $request->getParameter('sport_game_type_alias');	
		$_throwTypeMode = $request->getParameter('sport_game_throw_type');	
		$_jumpTypeMode = $request->getParameter('sport_game_jump_type_mode');	
		$_contestantMode = $request->getParameter('sport_game_player_mode');	
		$_teamMode = $request->getParameter('sport_game_team_mode');	
		$_sportGameStatus = $request->getParameter('sport_game_status');	
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_flag =  SportGameTable::processNew ( $_orgID, $_orgTokenID, $_gameCategoryID, $_gameCategoryTokenID, $_gameCategoryName, $_sportGameName, $_sportGameAlias, $_gameDistanceType, $_gameDistance, $_measurementType, $_sportGameTypeMode, $_throwTypeMode, $_jumpTypeMode, $_contestantMode, $_contestantTeamMode, $_sportGameStatus, $_description, $_userID, $_userTokenID  );  
				 
		return $_flag ? true:false;
		
	}
	
	public function executeView(sfWebRequest $request)
	{
		$_sportGameID = $request->getParameter('sport_game_id');	
		$_tokenID = $request->getParameter('token_id');	
		
		//$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		//$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		//$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		//$this->_tournaments = TournamentTable::processSelection ( $_orgID, $_orgTokenID, $_season, $_activeFlag, $_keyword, 0, 10 );
		$this->_sportGame = SportGameTable::processObject ( $_orgID, $_orgTokenID, $_sportGameID, $_tokenID ); 
		$this->_candidateParticipantTeams = TeamGameParticipationTable::processCandidateTeams ( $_orgID, $_tournamentID, $_sportGameID, sha1(md5($_tokenID)), $_gameTypeID, $_genderCategory, $_keyword, $_exclusion, 0, 20 ); 
		
	}
	
	/************  Candidate Navigation Selection Functions **************/
	
	public function executeCandidateSportGameCategorys(sfWebRequest $request)
	{
		//$_categoryID = $request->getParameter('sport_game_category');	
		//$_tokenID = $request->getParameter('token_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		
		//$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		//$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		//$_orgTokenID = $_defaultSuperAdmin ? null:sha1(md5(trim($this->getUser()->getAttribute('orgTokenID'))));
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		$_candidateGameCategorys = GameCategoryTable::processSelection ( $_orgID, $_orgTokenID, $_keyword, $_offset, $_limit ); 
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('game_category/candidate-game-categorys', array('_candidateGameCategorys' => $_candidateGameCategorys, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
	
	/************  Candidate Navigation Selection Functions **************/
	
	 
	public function executeSearch(sfWebRequest $request)
	{
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		$_limit = $request->getParameter("limit");
		$_offset = $request->getParameter("offset");
		$_categoryID = $request->getParameter("category_id");
		$_keyword = $request->getParameter("keyword");
		$_keyword = '%' . $_keyword . '%';
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 10;			 
		if(!$_categoryID || $_categoryID == '' ) $_categoryID = null;			 
		if(!$_gameTypeID || $_gameTypeID == '' ) $_gameTypeID = null;			 
		if(!$_keyword || $_keyword == '' ) $_keyword = null;			 
		
		$_sportGames = SportGameTable::processSelection ( null, null, null, null, $_keyword, $_offset, $_limit );
		$_countSportGames = SportGameTable::processAll ($_orgID, $_orgTokenID, $_categoryID, $_activeFlag, $_keyword ); 
		/*if (!$_sportGames)
		{
			return $this->renderPartial('error', array('_sportGames' => $_sportGames));
		}*/
		return $this->renderPartial('list', array('_sportGames' => $_sportGames, '_countSportGames' => $_countSportGames));

	}

}

<?php

/**
 * team actions.
 *
 * @package    mu-TMS
 * @subpackage team
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class teamActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
   public function executeIndex(sfWebRequest $request)
	{
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		$this->_teams = TeamTable::processSelection ( $_orgID, $_orgTokenID, $_activeFlag, $_keyword, 0, 10 );
	}
	
	public function executeNew(sfWebRequest $request)
	{
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		$this->_teams = TeamTable::processSelection ( $_orgID, $_orgTokenID, $_activeFlag, $_keyword, 0, 10 );
		
	}
	public function executeView(sfWebRequest $request)
	{
		$_teamID = $request->getParameter('team_id');	
		$_tokenID = $request->getParameter('token_id');	
		//$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		//$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		//$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		$this->_team = TeamTable::processObject ( $_orgID, $_orgTokenID, $_teamID, $_tokenID ) ;
		
	}
	public function executeSetting(sfWebRequest $request)
	{
		$_teamID = $request->getParameter('team_id');	
		$_tokenID = $request->getParameter('token_id');	
		//$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		//$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		//$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		$this->_team = TeamTable::processObject ( $_orgID, $_orgTokenID, $_teamID, $_tokenID ) ;
		$this->_candidateSportGames = SportGameTable::processSelection ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword, 0, 10  ) ;
		$this->_teamGameParticipations = TeamGameParticipationTable::processSelection ( $_orgID, $_tournamentID, $_teamID, sha1(md5($_tokenID)), $_gameTypeID, $_keyword, $_exclusion, 0, 10  ) ;
		//$this->_candidateGameCategorys = GameCategoryTable::processSelection ( $_orgID, $_orgTokenID, $_keyword, 0, 10  ); 
		
	}
	
	public function executeCreateTeam(sfWebRequest $request)
	{
		$_teamName = $request->getParameter('team_name');	
		$_teamAlias = $request->getParameter('team_alias');	
		$_teamCountry = $request->getParameter('country');	 
		$_teamCity = $request->getParameter('team_city');	 
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_flag =  TeamTable::processNew ( $_orgID, $_orgTokenID,  $_teamName, $_teamAlias, $_teamCountry, $_teamCity, $_description, $_userID, $_userTokenID  );  
				 
		return $_flag ? true:false;
		
	}

	public function executeCreateTeamGamePartcipation(sfWebRequest $request)
	{
		$_sportGameTypeName = $request->getParameter('sport_game_type_name');	
		$_sportGameName = $request->getParameter('sport_game_name');	
		$_teamID = $request->getParameter('team_id');	
		$_teamTokenID = $request->getParameter('team_token_id');	
		$_sportGameTypeID = $request->getParameter('sport_game_type_id');	
		$_sportGameTypeTokenID = $request->getParameter('sport_game_type_token_id');	
		$_sportGameID = $request->getParameter('sport_game_id');	
		$_sportGameTokenID = $request->getParameter('sport_game_token_id');	
		$_eventType = $request->getParameter('event_type');	 
		$_genderCategory = $request->getParameter('gender_category');	 
		$_playerMode = $request->getParameter('player_mode');	 
		$_participantNumber = $request->getParameter('participant_number');	 
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_flag =  TeamGameParticipationTable::processNew ( $_orgID, $_orgTokenID, $_teamID, $_teamTokenID, $_sportGameTypeID, $_sportGameID, $_sportGameTokenID, $_sportGameTypeName, $_sportGameName, $_genderCategory, $_eventType, $_playerMode, $_participantNumber, $_description, $_userID, $_userTokenID  );  
				 
		return $_flag ? true:false;
	}
	
	public function executeUploadTeamLogo(sfWebRequest $request)
	{
		$_studentNumber = $_POST['student_number'];
		$_studentID = $_POST['student_id'];
		$_studentTokenID = $_POST['student_token_id'];
		$_uploadedPhotoFileName = $_FILES['student_photo_file']['name'];
		$_uploadedPhotoFileType = $_FILES['student_photo_file']['type'];
		$_uploadedPhotoFileTempName = $_FILES['student_photo_file']['tmp_name'];
		$_newUploadedFileName = strtolower($_uploadedPhotoFileName);	
		$_uploadedFileName = str_replace(' ', '_', $_newUploadedFileName);
		$_uploadedDirectory = $_SERVER['DOCUMENT_ROOT'].'/uploads/student_photo/2008/'.$_uploadedFileName ;

		$_success = @move_uploaded_file($_FILES["student_photo_file"]["tmp_name"], $_uploadedDirectory);
		
		if(!$_success){ 
			$this->getUser()->setFlash('process_fail', true);
		}  else {
			$this->getUser()->setFlash('process_success', true);
		}
		
		$this->redirect('student/photo?student_id='.$_studentID.'&token_id='.$_studentTokenID);
	}
	/************  Candidate Navigation Selection Functions **************/
	
	
	public function executeCandidateSportGameTypes(sfWebRequest $request)
	{
		//$_categoryID = $request->getParameter('sport_game_category');	
		//$_tokenID = $request->getParameter('token_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		/*$_keyword = $request->getParameter('keyword');	
		
		
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:sha1(md5(trim($this->getUser()->getAttribute('orgTokenID'))));*/
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		$_candidateGameCategorys = GameCategoryTable::processSelection ( $_orgID, $_orgTokenID, $_keyword, $_offset, $_limit ); 
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('game_category/candidate_game_category', array('_candidateGameCategorys' => $_candidateGameCategorys, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
	public function executeCandidateSportGames(sfWebRequest $request)
	{
		$_categoryID = $request->getParameter('sport_game_category');	
		//$_tokenID = $request->getParameter('token_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		//$_keyword = $request->getParameter('keyword');	
		
		
		/*$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:sha1(md5(trim($this->getUser()->getAttribute('orgTokenID'))));*/
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		$_candidateSportGames = SportGameTable::processSelection ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword, $_offset, $_limit ); 
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('sport_games/candidate_sport_game', array('_candidateSportGames' => $_candidateSportGames, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
	public function executeSearch(sfWebRequest $request)
	{
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		$_limit = $request->getParameter("limit");
		$_offset = $request->getParameter("offset");
		$_classID = $request->getParameter("class_id");
		$_keyword = $request->getParameter("keyword");
		$_keyword = '%' . $_keyword . '%';
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 35;			 
		if(!$_classID || $_classID == '' ) $_classID = null;			 
		if(!$_keyword || $_keyword == '' ) $_keyword = null;			 
		
		$_products = ItemProductTable::processSelection ( $_orgID, sha1(md5($_orgTokenID)), $_classID, $_exclusion, $_status, $_keyword, $_offset, $_limit );
		$_countProducts = ItemProductTable::processAll ( $_orgID, sha1(md5($_orgTokenID)), $_classID, $_exclusion, $_status, $_keyword);
		if (!$_products)
		{
			return $this->renderPartial('error', array('_products' => $_products));
		}
			
		return $this->renderPartial('list', array('_products' => $_products, '_countProducts' => $_countProducts));

	}

}

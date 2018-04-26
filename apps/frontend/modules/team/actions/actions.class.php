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
		
		$this->_teams = TeamTable::processSelection ( $_orgID, $_orgTokenID, $_activeFlag, $_keyword, 0, 20 );
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
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		$this->_team = TeamTable::processObject ( $_orgID, $_orgTokenID, $_teamID, $_tokenID ) ;

		$this->_gameParticipations = TeamGameParticipationTable::processSelection ( $_orgID, $_tournamentID, $_teamID, sha1(md5($_tokenID)), $_gameTypeID, $_keyword, $_exclusion, 0, 20  ) ;
		$this->_memberParticipants = TeamMemberParticipantTable::processSelection( $_tournamentID, $_teamID, sha1(md5($_tokenID)), $_sportGameID, $_sportGameTokenID, $_keyword, $_exclusion, 0, 20  ) ;
		
		$this->_memberParticipantRoles = TeamMemberParticipantRoleTable::processSelection ( $_tournamentID, $_teamID, sha1(md5($_tokenID)), $_participantID, $_sportGameID, $_keyword, 0, 20 ); 
		$this->_candidateGameCategorys = GameCategoryTable::processSelection ( $_orgID, $_orgTokenID, $_keyword, 0, 20 ); 
		
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
	public function executeCreateTeamMember(sfWebRequest $request)
	{
		$_tournamentID = $request->getParameter('member_tournament_id');	
		$_teamID = $request->getParameter('member_team_id');	
		$_teamTokenID = $request->getParameter('member_team_token_id');	
		$_firstName = $request->getParameter('first_name');	
		$_middleName = $request->getParameter('middle_name');	
		$_lastName = $request->getParameter('last_name');	
		$_memberGender = $request->getParameter('member_gender');	
		$_dateOfBirth = $request->getParameter('date_of_birth');	 
		$_memberRole = $request->getParameter('team_member_role');	 
		$_memberNumber = $request->getParameter('team_member_role');	 
		$_nationality = $request->getParameter('country_id');	
		$_memberStatus = $request->getParameter('member_status');	
		$_remark = $request->getParameter('remark');	
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_flag =  TeamMemberParticipantTable::processNew ( $_orgID, $_orgTokenID, $_teamID, $_teamTokenID, $_firstName, $_middleName, $_lastName, $_memberRole, $_memberGender, $_dateOfBirth, $_memberNumber, $_memberStatus, $_remark, $_description, $_userID, $_userTokenID  );  
		
		//$_person = PersonTable::processNew ( $_orgID, $_orgTokenID, $_firstName, $_middleName, $_lastName, $_dateOfBirth, $_memberGender, $_nationality, $_partyRelationShipRole, $_memberRole, $_partyRelationShip, $_partyAddressOne, $_phoneNumberOne, $_phoneNumberTwo, $_mobileNumberOne, $_mobileNumberTwo, $_pobox, $_faxNumber, $_email, $_addressRemark, $_description, $_partyCode, $_userID, $_userTokenID );
		
				 
		return $_flag ? true:false;
	}
	public function executeCreateTeamMemberRole(sfWebRequest $request)
	{
		$_participantName = $request->getParameter('member_participant_name');	
		$_sportGameName = $request->getParameter('member_sport_game_name');	
		$_participantID = $request->getParameter('member_participant_id');	
		$_participantTokenID = $request->getParameter('member_participant_token_id');	
		$_memberSportGameID = $request->getParameter('member_sport_game_id');	
		$_memberSportGameTokenID = $request->getParameter('member_sport_game_token_id');	
		$_memberRole = $request->getParameter('team_member_role');	 
		$_memberStatus = $request->getParameter('member_status');	
		$_description = $request->getParameter('role_description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_flag =  TeamMemberParticipantRoleTable::processNew ( $_orgID, $_orgTokenID, $_participantID, $_participantTokenID, $_memberSportGameID, $_memberSportGameTokenID, $_participantName, $_sportGameName, $_memberRole, $_memberStatus, $_description, $_userID, $_userTokenID  );  
		
		return $_flag ? true:false;
	}
	
	public function executeCreateTeamLogo(sfWebRequest $request)
	{
		$_manuCode = $_POST['manuscript_journal_code'];
		$_authorID = $_POST['manuscript_author_id'];
		$_manuscriptID = $_POST['team_id'];
		$_tokenID = $_POST['team_token_id'];
		$_uploadedFileName = $_FILES['file_name']['name'];
		$_uploadedFileType = $_FILES['file_name']['type'];
		$_uploadedFileTempName = $_FILES['file_name']['tmp_name'];
		$_newUploadedFileName = strtolower($_uploadedFileName);	
		$_uploadedFileName = str_replace(' ', '_', $_newUploadedFileName);
		$_fileFullPath = $_SERVER['DOCUMENT_ROOT'].'/uploads/team/team_logo' ;
		$_newPath = date('Y', time());
		$_newFilePath = $_fileFullPath ."/" .$_newPath;
		/*if(!file_exists($_newFilePath)) { 
			exec("mkdir -p ${dir}/$_newFilePath");
			chmod("${dir}/$_newFilePath",0777);
			chown("${dir}/$_newFilePath","johnzalula");
			chgrp("${dir}/$_newFilePath","johnzalula");
		}*/
		$_fileUploadedPath = 'web/uploads/team/team_logo' ;
		$_fileUploadedFullPath = $_SERVER['DOCUMENT_ROOT'].'/uploads/team/team_logo' ;
		$_teamLogoFileNamePath = $_newFilePath.'/'.$_uploadedFileName ;
		$_description = $_uploadedFileName.' uploaded file' ;

		//id/6/sc/sumit_manuscript/manu_code/100006/nst/2
		//$_author = AuthorTable::processObject ($_authorID) ;
		
		//$_manusctiptJournal = ArticleJournalTable::makeActiveCandidateObject ( $_manuscriptID, $_tokenID, $_manuCode);
		$_teamLogo = TeamTable::processLogoUploading ( $_teamID, $_teamTokenID, $_uploadedFileType, $_uploadedFileName, $_teamLogoFileNamePath, $_newFilePath, $_description);
		
		
		$_success = @move_uploaded_file($_FILES["file_name"]["tmp_name"], $_teamLogoFileNamePath);
		
		
		//$_dirt = $_SERVER['DOCUMENT_ROOT'].'/uploads/manuscript_files/' ;
		
		//$path = $_dirt . "/" .date('Y', time());
		//mkdir($_dirt, 0777);

		
		
		$this->redirect('team/setting?id='.$_teamID.'&token_id='.$_teamTokenID);
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
	
	public function executeCandidateSportGameCategorys(sfWebRequest $request)
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
		$_keyword = $request->getParameter('keyword');	
		
		
		/*$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:sha1(md5(trim($this->getUser()->getAttribute('orgTokenID'))));*/
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		$_candidateSportGames = SportGameTable::processSelection ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword, $_offset, $_limit ); 
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('sport_games/candidate_sport_game', array('_candidateSportGames' => $_candidateSportGames, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
	/************  Candidate Navigation Selection Functions **************/
	
	public function executeCandidateTeamSportGameCategorys(sfWebRequest $request)
	{
		$_categoryID = $request->getParameter('member_team_id');	
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
	
	public function executeCandidateMemberSportGames(sfWebRequest $request)
	{
		$_teamID = $request->getParameter('member_team_id');	
		$_tokenID = $request->getParameter('member_team_token_id');	
		$_tournamentID = $request->getParameter('tournament_id');	
		$_genderCategory = $request->getParameter('member_participant_gender_id');	
		$_sportGameCategory = $request->getParameter('sport_game_category_id');	
		$_memberParticipantID = $request->getParameter('member_participant_id');	
		//$_tokenID = $request->getParameter('token_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		//$_keyword = $request->getParameter('keyword');	
		
		
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:sha1(md5(trim($this->getUser()->getAttribute('orgTokenID'))));
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		//$_teamGameParticipations = TeamTable::processCandidateSportGameParticipation ( $_orgID, $_tournamentID, $_teamID, sha1(md5($_tokenID)), $_gameTypeID, $_genderCategory, $_offset, $_limit  );
		$_teamGameParticipations = TeamTable::processCandidateTeamGameParticipation ( $_orgID, $_tournamentID, $_teamID, sha1(md5($_tokenID)), $_memberParticipantID, $_sportGameCategory, $_genderCategory, $_keyword, $_offset, $_limit  );
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('candidate_game_participation_list', array('_teamGameParticipations' => $_teamGameParticipations, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
	public function executeCandidateMemberParticipant(sfWebRequest $request)
	{
		$_tournamentID = $request->getParameter('tournament_id');	
		$_teamID = $request->getParameter('member_team_id');	
		$_tokenID = $request->getParameter('member_team_token_id');	
		$_genderCategory = $request->getParameter('member_participant_gender_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		//$_keyword = $request->getParameter('keyword');	
		
		
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:sha1(md5(trim($this->getUser()->getAttribute('orgTokenID'))));
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		//$_teamGameParticipations = TeamTable::processCandidateSportGameParticipation ( $_orgID, $_tournamentID, $_teamID, sha1(md5($_tokenID)), $_gameTypeID, $_genderCategory, $_offset, $_limit  );
		$_candidateMemberParticipants = TeamTable::selectCandidateMemberParticipants ( $_orgID, $_tournamentID, $_teamID, sha1(md5($_tokenID)), $_genderCategory, $_keyword, $_offset, $_limit  );
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('candidate_member_participant', array('_candidateMemberParticipants' => $_candidateMemberParticipants, '_countCandidateSportGames' => $_countCandidateSportGames));	  
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

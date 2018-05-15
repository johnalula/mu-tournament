<?php

/**
 * team_group actions.
 *
 * @package    mu-TMS
 * @subpackage team_group
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class team_groupActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
	public function executeIndex(sfWebRequest $request)
	{
	  
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		//$this->_sportGameTeamGroups =  SportGameGroupTable::processSelection ( $_orgID, sha1(md5($_orgTokenID)), $_tournamentID, $_gameTypeID, $_genderCategoryID, $_groupID, $_keyword, 0, 20 );  
		
		$this->_tournamentTeamGroups = TournamentTeamGroupTable::processSelection ( $_orgID, $_orgTokenID, $_tournamentID, $_sportGameTypeID, $_keyword, 0, 20  ) ;
	}

	public function executeNew(sfWebRequest $request)
	{
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		$this->_candidateGameCategorys = TournamentTeamGroupTable::selectCandidateTournamentGameCategorys ( $_orgID, $_orgTokenID, $_keyword, 0, 20  ) ;
	}
	public function executeCreateTournamentGroup(sfWebRequest $request)
	{
		$_tournamentTeamGroup = $request->getParameter('tournament_team_group');
		//$_tournamentID = $_tournamentTeamGroup['tournament_id'];	
		$_gameCategoryID = $_tournamentTeamGroup['sport_game_type_id'];	 
		$_gameCategoryTokenID = $_tournamentTeamGroup['sport_game_type_token_id'];	 
		$_sportGameTypeName = $_tournamentTeamGroup['sport_game_type_name'];	
		$_startDate = $_tournamentTeamGroup['start_date'];	 
		$_groupStatus = $_tournamentTeamGroup['group_status'];	 
		$_description = $_tournamentTeamGroup['description'];	
		$_sportGameFullName = $_sportGameName.' - '.$_sportGameTypeName;	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
		$_tournamentID = $this->getUser()->getAttribute('activeTournamentID'); 

		$_teamGroup =  TournamentTeamGroupTable::processNew ( $_orgID, $_orgTokenID, $_tournamentID, $_gameCategoryID, $_gameCategoryTokenID, $_sportGameTypeName, $_startDate, $_groupStatus, $_description, $_userID, $_userTokenID );  
		
		if(!trim($_teamGroup) && !empty($_teamGroup)) { 
			$this->getUser()->setFlash('process_fail', true);
			$this->redirect('team_group/new');
		}  else {
			$this->getUser()->setFlash('process_success', true);
			$this->redirect('team_group/category?team_group_id='.$_teamGroup->id.'&token_id='.$_teamGroup->token_id);
		}
		
	}

	public function executeEdit(sfWebRequest $request)
	{
		$_groupID = $request->getParameter('team_group_id');	
		$_tokenID = $request->getParameter('token_id');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		//$this->_sportGameGroups =  SportGameGroupTable::processObject ( $_orgID, sha1(md5($_tokenID)), $_groupID, $_tokenID );  
		$this->_sportGameTeamGroup =  TournamentTeamGroupTable::processObject ($_orgID, sha1(md5($_orgTokenID)), $_groupID, $_tokenID );  
		$this->_activeTournament = TournamentTable::makeCandidateObject ( $_orgID, true ) ;
		$this->_candidateGameCategorys = GameCategoryTable::processSelection ( $_orgID, $_orgTokenID, $_keyword, 0, 20  ) ;
		//$this->_candidateSportGames = SportGameTable::processSelection ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword, 0, 20  ) ;
		$this->_candidateGroups = GameGroupTypeTable::processAll ($_orgID, $_orgTokenID, $_keyword, $_activeFlag ) ;
	}

	public function executeView(sfWebRequest $request)
	{
		$_tournamentGroupID = $request->getParameter('team_group_id');	
		$_tokenID = $request->getParameter('token_id');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		$this->_tournamentTeamGroup = TournamentTeamGroupTable::processObject ( $_orgID, $_orgTokenID, $_tournamentGroupID, $_tokenID ) ;
		
		$this->_candidateParticipantMembers = TournamentGroupParticipantTeamMemberTable::processSelection ( $_tournamentID, $_tournamentGroupID, sha1(md5($_tokenID)), $_sportGameGroupID, $_sportGameID, $_genderCategoryID, $_keyword, 0, 20 ); 
	}
	
	public function executeCategory(sfWebRequest $request)
	{
		$_tournamentGroupID = $request->getParameter('team_group_id');	
		$_tokenID = $request->getParameter('token_id');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_tournamentID = $this->getUser()->getAttribute('activeTournamentID');   
		
		$this->_tournamentTeamGroup = TournamentTeamGroupTable::processObject ( $_orgID, $_orgTokenID, $_tournamentGroupID, $_tokenID ) ;
		
		//$this->_candidateGameCategorys = GameCategoryTable::processSelection ( $_orgID, $_orgTokenID, $_keyword, 0, 20  ) ;
		
		$this->_tournamentSportGameGroups = TournamentSportGameGroupTable::processSelection ( $_tournamentID, $_tournamentGroupID, $_tokenID, $_sportGameID, $_sportGameTypeID, $_genderCategoryID, $_keyword, 0, 20  ) ;
		
	}
	public function executeCreateTournamentTeamGroup(sfWebRequest $request)
	{
		$_tournamentGroupID = $request->getParameter('tournament_team_group_id');	
		$_tournamentGroupTokenID = $request->getParameter('tournament_team_group_token_id');
		$_tournamentGroupCode = $request->getParameter('tournament_group_code');	
		$_sportGameFullName = $request->getParameter('sport_game_full_name');	
		$_sportGameID = $request->getParameter('sport_game_id');	
		$_sportGameTokenID = $request->getParameter('sport_game_token_id');		
		$_genderCategory = $request->getParameter('gender_category');	 
		$_contestantTeamMode = $request->getParameter('sport_game_contestant_team_mode');	 
		$_groupNumber = $request->getParameter('group_number');	 
		$_groupStatus = $request->getParameter('sport_game_group_status');	 
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
		$_tournamentID = $this->getUser()->getAttribute('activeTournamentID'); 

		$_flag =  TournamentSportGameGroupTable::processNew ( $_orgID, $_orgTokenID, $_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameID, $_sportGameTokenID, $_sportGameFullName, $_contestantTeamMode, $_genderCategory, $_groupNumber, $_tournamentGroupCode, $_groupStatus, $_description, $_userID, $_userTokenID );  
				 
		return $_flag ? true:false;
	 
	}
	public function executeMember(sfWebRequest $request)
	{
		$_tournamentGroupID = $request->getParameter('team_group_id');	
		$_tokenID = $request->getParameter('token_id');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		$this->_activeTournament = TournamentTable::makeCandidateObject ( $_orgID, true ) ;
		$this->_tournamentTeamGroup = TournamentTeamGroupTable::processObject ( $_orgID, $_orgTokenID, $_tournamentGroupID, $_tokenID ) ;
		
		$this->_groupParticipantTeams = TournamentGroupParticipantTeamTable::processSelection( $_tournamentID, $_tournamentGroupID, sha1(md5($_tokenID)), $_sportGameID, $_genderCategoryID, $_keyword, 0, 20 ) ;
		
		$this->_tournamentSportGameGroups = TournamentSportGameGroupTable::processSelection ( $_tournamentID, $_tournamentGroupID, $_tokenID, $_sportGameID, $_sportGameTypeID, $_genderCategoryID, $_keyword, 0, 20  ) ;
		
		//$this->_candidateParticipantTeams = TournamentSportGameGroupTable::processCandidateParticipantTeams ( $_tournamentID, $_tournamentGroupID, sha1(md5($_tokenID)), $_sportGameID, $_genderCategory, $_keyword, 0, 20 ); 
	}

	public function executeCreateGroupParticipantTeam(sfWebRequest $request)
	{
		$_sportGameGroupName = $request->getParameter('sport_game_group_name');	
		$_tournamentGroupID = $request->getParameter('tournament_team_group_id');	
		$_tournamentGroupTokenID = $request->getParameter('tournament_team_group_token_id');	
		$_tournamentID = $request->getParameter('tournament_id');	
		$_participantTeamName = $request->getParameter('participant_team_name');	
		$_participantTeamID = $request->getParameter('participant_team_id');	
		$_participantTeamTokenID = $request->getParameter('participant_team_token_id');	
		$_teamGameParticipationID = $request->getParameter('team_game_participation_id');	
		$_teamGameParticipationTokenID = $request->getParameter('team_game_participation_token_id');	
		$_sportGameGroupID = $request->getParameter('sport_game_group_id');	
		$_sportGameGroupTokenID = $request->getParameter('sport_game_group_token_id');		 
		$_sportGameID = $request->getParameter('sport_game_id');	 
		$_genderCategory = $request->getParameter('gender_category_id');
		$_teamStatus = $request->getParameter('team_status');	 
		$_entryDate = $request->getParameter('start_date');	 
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 

		$_flag =  TournamentGroupParticipantTeamTable::processNew ( $_orgID, $_orgTokenID, $_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamID, $_participantTeamTokenID, $_teamGameParticipationID, $_teamGameParticipationTokenID, $_sportGameID, $_participantTeamName, $_sportGameGroupName, $_genderCategory, $_entryDate, $_teamStatus, $_description, SystemCore::$_SINGLE_DATA, $_userID, $_userTokenID );  
				 
		return $_flag ? true:false;
	 
	}
	//
	public function executeCreateMultipleGroupParticipantTeam(sfWebRequest $request)
	{
		$_sportGameGroupName = $request->getParameter('sport_game_group_name');	
		$_tournamentGroupID = $request->getParameter('tournament_team_group_id');	
		$_tournamentGroupTokenID = $request->getParameter('tournament_team_group_token_id');	
		$_tournamentID = $request->getParameter('tournament_id');	
		$_participantTeamName = $request->getParameter('participant_team_name');	
		$_participantTeamID = $request->getParameter('participant_team_id');	
		$_participantTeamTokenID = $request->getParameter('participant_team_token_id');	
		$_sportGameGroupID = $request->getParameter('sport_game_group_id');	
		$_sportGameGroupTokenID = $request->getParameter('sport_game_group_token_id');		 
		$_sportGameID = $request->getParameter('sport_game_id');	 
		$_genderCategory = $request->getParameter('gender_category_id');
		$_teamStatus = $request->getParameter('team_status');	 
		$_entryDate = $request->getParameter('start_date');	 
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 

		$_flag =  TournamentGroupParticipantTeamTable::processNew ( $_orgID, $_orgTokenID, $_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamID, $_participantTeamTokenID, $_teamGameParticipationID, $_teamGameParticipationTokenID, $_sportGameID, $_participantTeamName, $_sportGameGroupName, $_genderCategory, $_entryDate, $_teamStatus, $_description, SystemCore::$_MULTIPLE_DATA, $_userID, $_userTokenID ); 
		
		//$_flag =  TournamentGroupParticipantTeamTable::processNew ( $_orgID, $_orgTokenID, $_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamID, $_participantTeamTokenID, $_sportGameID, $_participantTeamName, $_sportGameGroupName, $_genderCategory, $_entryDate, $_teamStatus, $_description, SystemCore::$_MULTIPLE_DATA, $_userID, $_userTokenID );  
		
		return $_flag ? true:false;
	}

	public function executeParticipant(sfWebRequest $request)
	{
		$_tournamentGroupID = $request->getParameter('team_group_id');	
		$_tokenID = $request->getParameter('token_id');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		$this->_activeTournament = TournamentTable::makeCandidateObject ( $_orgID, true ) ;
		$this->_tournamentTeamGroup = TournamentTeamGroupTable::processObject ( $_orgID, $_orgTokenID, $_tournamentGroupID, $_tokenID ) ;
		//$this->_participantRoles = TeamMemberParticipantRoleTable::processBatchSelection ( 1, 5, $_participantRoleID, 2) ;
		
		//$this->_participantRoles = TournamentTeamGroupTable::selectCandidateBatchGroupParticipants ( $_tournamentID, $_tournamentGroupID, $_sportGameID, $_participantRoleID, $_genderCategory);
		 
		
		//$this->_candidateParticipantMembers = TournamentGroupParticipantTeamMemberTable::processSelection ( $_tournamentID, $_tournamentGroupID, sha1(md5($_tokenID)), $_sportGameGroupID, $_sportGameID, $_genderCategoryID, $_keyword, 0, 20 ); 
		
		//$this->_candidateParticipants = TournamentTeamGroupTable::selectCandidateGroupParticipantTeamMembers ( $_tournamentGroupID, $_tournamentGroupTokenID, $_participantTeamID, $_participantTeamTokenID, $_groupMemberTeamID, $_sportGameID, $_genderCategory, $_keyword, 0, 90 ); 
		
		$this->_candidateParticipantMembers = TournamentGroupParticipantTeamMemberTable::processSelection ( $_tournamentID, $_tournamentGroupID, sha1(md5($_tokenID)), $_sportGameGroupID, $_sportGameID, $_genderCategoryID, $_keyword, 0, 20 ); 
		 
	 
	}
	public function executeCreateGroupTeamParticipantMember(sfWebRequest $request)
	{
		
		$_participantName = $request->getParameter('participant_name');	
		$_memberTeamName = $request->getParameter('participant_team_name');	
		$_sportGameGroupID = $request->getParameter('sport_game_group_id');	
		$_sportGameGroupTokenID = $request->getParameter('sport_game_group_token_id');	
		$_memberTeamID = $request->getParameter('group_member_participant_team_id');	
		$_memberTeamTokenID = $request->getParameter('group_member_participant_team_token_id');
		$_participantID = $request->getParameter('participant_id');	
		$_participantTokenID = $request->getParameter('participant_token_id');	
		$_participantRoleID = $request->getParameter('participant_member_role_id');	
		$_participantRoleTokenID = $request->getParameter('participant_member_role_token_id');	
		$_participantStatus = $request->getParameter('member_participant_status');	  	 
		$_entryDate = $request->getParameter('start_date');	 
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 

		$_flag =  TournamentGroupParticipantTeamMemberTable::processNew ( $_orgID, $_orgTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_memberTeamID, $_memberTeamTokenID, $_participantID, $_participantTokenID, $_participantRoleID, $_participantRoleTokenID, $_memberTeamName, $_participantName, $_entryDate, $_participantStatus, $_description, $_userID, $_userTokenID  );  
				 
		return $_flag ? true:false;
	 
	}
	public function executeCreateBatchGroupTeamParticipantMember(sfWebRequest $request)
	{
		
		$_participantName = $request->getParameter('participant_name');	
		$_memberTeamName = $request->getParameter('participant_team_name');	
		$_sportGameGroupID = $request->getParameter('sport_game_group_id');	
		$_sportGameGroupTokenID = $request->getParameter('sport_game_group_token_id');	
		$_memberTeamID = $request->getParameter('group_member_participant_team_id');	
		$_memberTeamTokenID = $request->getParameter('group_member_participant_team_token_id');
		$_participantID = $request->getParameter('participant_id');	
		$_participantTokenID = $request->getParameter('participant_token_id');	
		$_participantRoleID = $request->getParameter('participant_member_role_id');	
		$_participantRoleTokenID = $request->getParameter('participant_member_role_token_id');	
		$_participantStatus = $request->getParameter('member_participant_status');	  	 
		$_entryDate = $request->getParameter('start_date');	 
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 

		$_flag =  TournamentGroupParticipantTeamMemberTable::processCreate ( $_orgID, $_orgTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_memberTeamID, $_memberTeamTokenID, $_participantID, $_participantTokenID, $_participantRoleID, $_participantRoleTokenID, $_memberTeamName, $_participantName, $_entryDate, $_participantStatus, $_description, $_userID, $_userTokenID  );  
				 
		return $_flag ? true:false;
	 
	}
	public function executeComplete(sfWebRequest $request)
	{
		$_tournamentGroupID = $request->getParameter('team_group_id');	
		$_tokenID = $request->getParameter('token_id');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		$this->_tournamentTeamGroup = TournamentTeamGroupTable::processObject ( $_orgID, $_orgTokenID, $_tournamentGroupID, $_tokenID ) ;
		
		$this->_candidateParticipantMembers = TournamentGroupParticipantTeamMemberTable::processSelection ( $_tournamentID, $_tournamentGroupID, sha1(md5($_tokenID)), $_sportGameGroupID, $_sportGameID, $_genderCategoryID, $_keyword, 0, 20 ); 
		 
		
	}


	/*********************************************************************/
	/************************ Candidate Selection ***********************
	//********************************************************************/
	 
	public function executeApproveTeamGrouping (sfWebRequest $request)
	{
		$_teamGroupID = $request->getParameter('team_group_id');	
		$_teamGroupTokenID = $request->getParameter('team_group_token_id');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID');  
		
		$_flag = TournamentTeamGroupTable::processApproval ( $_orgID, $_orgTokenID, $_teamGroupID, $_teamGroupTokenID, $_userID, $_userTokenID ); 
		
		return $_flag ? true:false;
	}
	public function executeCompleteTeamGrouping (sfWebRequest $request)
	{
		$_teamGroupID = $request->getParameter('team_group_id');	
		$_teamGroupTokenID = $request->getParameter('team_group_token_id');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID');  
		
		$_flag = TournamentTeamGroupTable::processCompletion ( $_orgID, $_orgTokenID, $_teamGroupID, $_teamGroupTokenID, $_userID, $_userTokenID ); 
		
		return $_flag ? true:false;
	}
	 

	/*********************************************************************/
	/************************ Candidate Selection ***********************
	//********************************************************************/

	/****************** Category Action ***********************/

	public function executeCandidateSportGames(sfWebRequest $request)
	{
		$_categoryID = $request->getParameter('game_category');	
		//$_tokenID = $request->getParameter('token_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		$_candidateSportGames = SportGameTable::processSelection ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword, $_offset, $_limit ); 
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('sport_games/candidate_sport_game', array('_candidateSportGames' => $_candidateSportGames, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	} 

	/****************** Member Action ***********************/

	public function executeCandidateGroupParticipantTeam (sfWebRequest $request)
	{
		$_tournamentID = $request->getParameter('tournament_id');	
		$_tournamentGroupID = $request->getParameter('tournament_team_group_id');	
		$_tournamenGroupTokenID = $request->getParameter('tournament_team_group_token_id');	
		$_sportGameGroupID = $request->getParameter('sport_game_group_id');	
		$_sportGameID = $request->getParameter('sport_game_id');	
		$_sportGameTokenID = $request->getParameter('sport_game_token_id');	
		$_genderCategory = $request->getParameter('gender_category_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		$_candidateParticipantTeams = TournamentTeamGroupTable::selectCandidateParticipantTeams ( $_tournamentID, $_tournamentGroupID, sha1(md5($_tournamenGroupTokenID)), $_sportGameGroupID, $_sportGameID, $_genderCategory, $_keyword, $_offset, $_limit ); 
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('team/candidate_participant_team', array('_candidateMemberTeams' => $_candidateParticipantTeams, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}

	/***************** Participant Action *********************/
	//
	public function executeCandidateGroupMemberTeam(sfWebRequest $request)
	{
		$_teamGroupID = $request->getParameter('team_group_id');	
		$_teamGroupTokenID = $request->getParameter('team_group_token_id');	
		$_sportGameID = $request->getParameter('sport_game_id');	
		$_sportGameTokenID = $request->getParameter('sport_game_token_id');	
		$_genderCategory = $request->getParameter('gender_category_id');	
		//$_tokenID = $request->getParameter('token_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		
		//$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		//$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		//$_orgTokenID = $_defaultSuperAdmin ? null:sha1(md5(trim($this->getUser()->getAttribute('orgTokenID'))));
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		//$_candidateTeams = SportGameGroupTable::processCandidateGroupMemberTeam ( $_orgID, $_orgTokenID, $_tournamentID, $_teamGroupID, $_teamGroupTokenID, $_sportGameID, $_genderCategory, $_keyword, $_offset, $_limit ); 
		$_candidateMemberTeams = SportGameGroupTable::processCandidateGroupMemberTeams ( $_orgID, $_tournamentID, $_teamGroupID, $_memberTeamID, $_memberTeamTokenID, $_sportGameID, $_sportGameTokenID, $_genderCategoryID, $_keyword, $_offset, $_limit ); 
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('candidate_group_member_team', array('_candidateMemberTeams' => $_candidateMemberTeams, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	//
	public function executeCandidateTournamentSportGameGroup(sfWebRequest $request)
	{
		$_tournamentGroupID = $request->getParameter('tournament_team_group_id');	
		$_tournamentGroupTokenID = $request->getParameter('tournament_team_group_token_id');	
		$_tournamentID = $request->getParameter('tournament_id');	
		$_sportGameGroupID = $request->getParameter('sport_game_group_id');	
		$_sportGameID = $request->getParameter('sport_game_id');	
		//$_genderCategory = $request->getParameter('gender_category_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		
		//$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		//$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		//$_orgTokenID = $_defaultSuperAdmin ? null:sha1(md5(trim($this->getUser()->getAttribute('orgTokenID'))));
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 
		
		$_tournamentSportGameGroups = TournamentTeamGroupTable::selectCandidateTournamentSportGameGroups ( $_tournamentID, $_tournamentGroupID, $_tournamentGroupTokenID, $_sportGameGroupID, $_sportGameID, TournamentCore::$_ACTIVE, TournamentCore::$_PENDING, $_keyword, $_offset, $_limit ) ;
		
		return $this->renderPartial('candidate_tournament_groups', array('_tournamentSportGameGroups' => $_tournamentSportGameGroups, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	//
	public function executeCandidateTournamentGroupMemberParticipantTeam (sfWebRequest $request)
	{
		$_tournamentID = $request->getParameter('tournament_id');	
		$_tournamentGroupID = $request->getParameter('tournament_team_group_id');	
		$_tournamentGroupTokenID = $request->getParameter('tournament_team_group_token_id');	
		$_sportGameGroupID = $request->getParameter('sport_game_group_id');	
		$_sportGameID = $request->getParameter('sport_game_id');	
		$_genderCategory = $request->getParameter('gender_category_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		$_candidateGroupMemberTeams = TournamentTeamGroupTable::selectCandidateGroupMemberParticipantTeams ( $_tournamentID, $_tournamentGroupID, sha1(md5($_tournamentGroupTokenID)), $_sportGameGroupID, $_sportGameID, $_genderCategory, $_keyword, $_offset, $_limit ); 
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('candidate_group_member_team', array('_candidateMemberTeams' => $_candidateGroupMemberTeams, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	public function executeCandidateGroupParticipantTeamMember(sfWebRequest $request)
	{ 
		$_tournamentGroupID = $request->getParameter('tournament_team_group_id');	
		$_tournamentGroupTokenID = $request->getParameter('tournament_team_group_token_id');	
		$_participantTeamID = $request->getParameter('participant_team_id');	
		$_participantTeamTokenID = $request->getParameter('participant_team_token_id');	
		$_sportGameID = $request->getParameter('sport_game_id');	
		$_groupMemberTeamID = $request->getParameter('group_member_participant_team_id');	
		$_genderCategory = $request->getParameter('gender_category_id');	
		
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 
		if(!$_genderCategory || $_genderCategory == '' ) $_genderCategory = null;			 

		$_candidateParticipants = TournamentTeamGroupTable::selectCandidateGroupParticipantTeamMembers ( $_tournamentGroupID, $_tournamentGroupTokenID, $_participantTeamID, sha1(md5($_participantTeamTokenID)), $_groupMemberTeamID, $_sportGameID, $_genderCategory, $_keyword, $_offset, $_limit ); 
		
		return $this->renderPartial('candidate_team_member_participants', array('_candidateParticipants' => $_candidateParticipants, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
}







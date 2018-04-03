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
		
		$this->_sportGameTeamGroups =  SportGameGroupTable::processSelection ( null, null, $_tournamentID, $_gameTypeID, $_genderCategoryID, $_groupID, $_keyword, 0, 20 );  
  }
  public function executeEdit(sfWebRequest $request)
  {
    
  }
  public function executeNew(sfWebRequest $request)
  {
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		$this->_activeTournament = TournamentTable::makeCandidateObject ( $_orgID, true ) ;
		$this->_candidateGameCategorys = GameCategoryTable::processSelection ( $_orgID, $_orgTokenID, $_keyword, 0, 20  ) ;
		$this->_candidateSportGames = SportGameTable::processSelection ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword, 0, 20  ) ;
		$this->_candidateGroups = GameGroupTypeTable::processAll ($_orgID, $_orgTokenID, $_keyword, $_activeFlag ) ;
  }
  public function executeCreateTournamentTeamGroup(sfWebRequest $request)
  {
		$_teamGroup = $request->getParameter('team_group');
		$_tournamentID = $_teamGroup['tournament_id'];	
		$_gameCategpry = $_teamGroup['game_category'];	 
		$_sportGameName = $_teamGroup['sport_game_full_name'];	
		$_sportGameTypeName = $_teamGroup['sport_game_category_name'];	
		$_sportGameID = $_teamGroup['sport_game_id'];	
		$_sportGameTokenID = $_teamGroup['sport_game_token_id'];	
		$_groupTypeName = $_teamGroup['sport_game_group_type_name'];	 
		$_groupTypeID = $_teamGroup['sport_game_group_type_id'];	 
		$_contestantTeamMode = $_teamGroup['contestant_team_mode'];	 
		$_genderCategory = $_teamGroup['gender_category'];	 
		$_groupStatus = $_teamGroup['team_group_status'];	 
		$_description = $_teamGroup['description'];	
		$_sportGameFullName = $_sportGameName.' - '.$_sportGameTypeName;	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_teamGroup =  SportGameGroupTable::processNew ( $_orgID, $_orgTokenID, $_tournamentID, $_sportGameID, $_sportGameTokenID, $_sportGameFullName, $_groupTypeID, $_groupTypeName, $_contestantTeamMode, $_genderCategory, $_groupStatus, $_description, $_userID, $_userTokenID );  
		
		//$_teamGroup =  MultipleContestantTeamGroupTable::processNew ( $_tournamentID, $_sportGameID, $_sportGameTokenID, $_sportGameFullName, $_groupTypeID, $_groupTypeName, $_contestantTeamMode, $_genderCategory, $_groupStatus, $_description );  
				 
		if(!trim($_teamGroup) && !empty($_teamGroup)) { 
			$this->getUser()->setFlash('process_fail', true);
			$this->redirect('team_group/new');
		}  else {
			$this->getUser()->setFlash('process_success', true);
			$this->redirect('team_group/member?team_group_id='.$_teamGroup->id.'&token_id='.$_teamGroup->token_id);
		}
		
		
  }
  public function executeMember(sfWebRequest $request)
  {
		$_groupID = $request->getParameter('team_group_id');	
		$_tokenID = $request->getParameter('token_id');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		//$this->_sportGameGroups =  SportGameGroupTable::processObject ( $_orgID, sha1(md5($_tokenID)), $_groupID, $_tokenID );  
		$this->_sportGameTeamGroup =  SportGameGroupTable::processObject ( null, null, $_groupID, $_tokenID );  
		//$this->_candidateTeams = TeamTable::processSelection ( null, null, $_activeFlag, $_keyword, 0, 20 );
		//$this->_candidateTeams = SportGameGroupTable::processCandidateGroupMemberTeam ( null, null, $_tournamentID, $_teamGroupID, $_teamGroupTokenID, $_sportGameID, $_genderCategory, $_keyword, 0, 20 );
		$this->_groupMemberTeams = SportGameTeamGroupTable::processSelection ( null, null, $_tournamentID, $_gameTypeID, $_genderCategoryID, $_groupID, $_keyword, 0, 20 );
		//$this->_candidateTeams = TeamGameParticipationTable::processCandidateParticipants ( null, $_tournamentID, $_teamID, $_teamTokenID, $_gameTypeID, $_genderCategory, $_keyword, $_exclusion, 0, 20 );
		//$this->_candidateTeams = SportGameGroupTable::processCandidateMemberTeams ( $_orgID, $_orgTokenID, $_tournamentID, $_teamGroupID, $_teamGroupTokenID, $_sportGameID, $_genderCategory, $_keyword, 0, 20 );
    
  }
  public function executeCreateGroupMemberTeam(sfWebRequest $request)
  {
		$_memberTeamName = $request->getParameter('member_team_name');	
		$_memberTeamID = $request->getParameter('member_team_id');	
		$_memberTeamTokenID = $request->getParameter('member_team_token_id');	
		$_teamGroupID = $request->getParameter('team_group_id');	
		$_teamGroupTokenID = $request->getParameter('team_group_token_id');	
		$_teamStatus = $request->getParameter('team_status');	 
		$_entryDate = $request->getParameter('start_date');	 
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_flag =  SportGameTeamGroupTable::processNew ( $_orgID, $_orgTokenID, $_memberTeamID, $_memberTeamTokenID, $_teamGroupID, $_teamGroupTokenID, $_memberTeamName, $_entryDate, $_teamStatus, $_description, $_userID, $_userTokenID );  
				 
		return $_flag ? true:false;
    
  }
  public function executeParticipant(sfWebRequest $request)
  {
		$_groupID = $request->getParameter('team_group_id');	
		$_tokenID = $request->getParameter('token_id');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		//$this->_sportGameGroups =  SportGameGroupTable::processObject ( $_orgID, sha1(md5($_tokenID)), $_groupID, $_tokenID );  
		$this->_sportGameTeamGroup =  SportGameGroupTable::processObject ( null, null, $_groupID, $_tokenID );  
		//$this->_candidateTeams = TeamTable::processSelection ( null, null, $_activeFlag, $_keyword, 0, 20 );
		//$this->_candidateTeams = SportGameGroupTable::processCandidateGroupMemberTeam ( null, null, $_tournamentID, $_teamGroupID, $_teamGroupTokenID, $_sportGameID, $_genderCategory, $_keyword, 0, 20 );
		//$this->_candidateTeams = SportGameGroupTable::processCandidateMemberTeams ( $_orgID, $_orgTokenID, $_tournamentID, $_teamGroupID, $_teamGroupTokenID, $_sportGameID, $_genderCategory, $_keyword, 0, 20 );
		//$this->_groupMemberTeams = SportGameTeamGroupTable::processSelection ( null, null, $_tournamentID, $_gameTypeID, $_genderCategoryID, $_groupID, $_keyword, 0, 20 );
		$this->_candidateTeams = TeamGameParticipationTable::processCandidateParticipants ( null, $_tournamentID, $_teamID, $_teamTokenID, $_gameTypeID, $_genderCategory, $_keyword, $_exclusion, 0, 20 );
		
    
  }
  public function executeView(sfWebRequest $request)
  {
    
  }
  public function executeCandidateSportGames(sfWebRequest $request)
	{
		$_categoryID = $request->getParameter('game_category');	
		//$_tokenID = $request->getParameter('token_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		
		//$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		//$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		//$_orgTokenID = $_defaultSuperAdmin ? null:sha1(md5(trim($this->getUser()->getAttribute('orgTokenID'))));
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		$_candidateSportGames = SportGameTable::processSelection ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword, $_offset, $_limit ); 
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('sport_games/candidate_sport_game', array('_candidateSportGames' => $_candidateSportGames, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	public function executeCandidateGroupMemberTeam(sfWebRequest $request)
	{
		$_teamGroupID = $request->getParameter('tam_group_id');	
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

		$_candidateTeams = SportGameGroupTable::processCandidateGroupMemberTeam ( $_orgID, $_orgTokenID, $_tournamentID, $_teamGroupID, $_teamGroupTokenID, $_sportGameID, $_genderCategory, $_keyword, $_offset, $_limit ); 
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('team/candidate_game_participation_list', array('_candidateTeams' => $_candidateTeams, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	public function executeCandidateTeamGroupMember(sfWebRequest $request)
	{
		$_teamGroupID = $request->getParameter('tam_group_id');	
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
		$_candidateMemberTeams = SportGameTeamGroupTable::processSelection ( null, null, $_tournamentID, $_gameTypeID, $_genderCategoryID, $_groupID, $_keyword, $_offset, $_limit ); 
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('candidate_group_member_team', array('_candidateMemberTeams' => $_candidateMemberTeams, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	public function executeCandidateGroupMemberTeamParticipant(sfWebRequest $request)
	{
		$_memberTeamID = $request->getParameter('member_team_id');	
		$_memberTeamTokenID = $request->getParameter('member_team_token_id');	
		//$_sportGameID = $request->getParameter('sport_game_id');	
		//$_sportGameTokenID = $request->getParameter('sport_game_token_id');	
		//$_genderCategory = $request->getParameter('gender_category_id');	
		//$_tokenID = $request->getParameter('token_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		
		//$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		//$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		//$_orgTokenID = $_defaultSuperAdmin ? null:sha1(md5(trim($this->getUser()->getAttribute('orgTokenID'))));
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		$_candidateParticipants = TeamMemberParticipantTable::processCandidateParticipants( $_orgID, $_tournamentID, $_memberTeamID, $_memberTeamTokenID, $_gameTypeID, $_keyword, $_exclusion, $_offset, $_limit ); 
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('party/candidate_game_participant', array('_candidateParticipants' => $_candidateParticipants, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
}







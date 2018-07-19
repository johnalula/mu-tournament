<?php

/**
 * tournament_award actions.
 *
 * @package    symfony
 * @subpackage tournament_award
 * @author     Mekonen Berhane
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tournament_awardActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
	public function executeIndex(sfWebRequest $request)
	{

	}
	
	public function executeEdit_medal_award(sfWebRequest $request)
	{

		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');

		$_tournament = TournamentTable::makeActiveObject ( true );
		
		$this->_activeTournament = TournamentTable::makeActiveObject ( 1, true );
		//$this->_activeTournament = TournamentTable::processObject (  1, '5298132053f93db5da4d84b8c1c0eb9aece6cd57', 1, '67a74306b06d0c01624fe0d0249a570f4d093747' );
		
		//$this->_candidateParticipantTeams = TournamentParticipantTeamMedalStandingTable::makeCandidates ( $_tournament->id, $_participantTeamID, $_activeFlag, $_keyword);
		$this->_participantTeams = TeamTable::makeCandidateSelections ( $_tournament->id, $_activeFlag, $_keyword );;
	}
	
	public function executeNew(sfWebRequest $request)
	{

		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');

		$this->_participantTeams = TournamentParticipantTeamMedalStandingTable::processCandidates ( $_orgID, $_orgTokenID, $_tournamentID, $_participantTeamID, $_activeFlag, $_keyword);
	}
	public function executeCreateTournamentMatchMedalAward(sfWebRequest $request)
	{
		$_tournamentMedalAward = $request->getParameter('tournament_medal_award');
		$_gameCategoryID = $_tournamentMedalAward['sport_game_category_id'];	 
		$_sportGameTypeName = $_tournamentMedalAward['sport_game_category_name'];	
		$_startDate = $_tournamentMedalAward['start_date'];	 
		$_medalAwardStatus = $_tournamentMedalAward['medal_award_status'];	 
		$_description = $_tournamentMedalAward['description'];	
		$_sportGameFullName = $_sportGameName.' - '.$_sportGameTypeName;	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
		$_tournamentID = $this->getUser()->getAttribute('activeTournamentID'); 

		$_tournamentAward =  TournamentMatchMedalAwardTable::processNew ( $_orgID, $_orgTokenID, $_tournamentID, $_gameCategoryID, $_sportGameTypeName, $_startDate, $_medalAwardStatus, $_description, $_userID, $_userTokenID );  
		
		if(!trim($_teamGroup) && !empty($_teamGroup)) { 
			$this->getUser()->setFlash('process_fail', true);
			$this->redirect('tournament_award/new');
		}  else {
			$this->getUser()->setFlash('process_success', true);
			$this->redirect('tournament_award/participant?medal_award_id='.$_tournamentAward->id.'&token_id='.$_tournamentAward->token_id);
		}
		
	}
	public function executeParticipant(sfWebRequest $request)
	{
		$_tournamentGroupID = $request->getParameter('team_group_id');	
		$_tournamentGroupTokenID = $request->getParameter('token_id');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		//$this->_activeTournament = TournamentTable::makeCandidateObject ( $_orgID, true ) ;
		$this->_tournamentTeamGroup = TournamentTeamGroupTable::processObject ( $_orgID, sha1(md5($_orgTokenID)), $_tournamentGroupID, $_tournamentGroupTokenID ) ;
		
		$this->_groupParticipantTeams = TournamentGroupParticipantTeamTable::processSelection ( $_tournamentID, $_tournamentGroupID, sha1(md5($_tournamentGroupTokenID)), $_sportGameID, $_genderCategoryID, $_keyword, 0, 20 ) ;
		
		//$this->_countGroupParticipantTeams = TournamentGroupParticipantTeamTable::processAll ( $_tournamentID, $_tournamentGroupID, sha1(md5($_tournamentGroupTokenID)), $_sportGameID, $_genderCategoryID, $_keyword) ;
		
		$this->_candidateTeamGroupParticipants = TournamentSportGameGroupTable::selectCanidates ( $_tournamentGroupID, sha1(md5($_tournamentGroupTokenID)), $_sportGameID, $_genderCategoryID, TournamentCore::$_ACTIVE, TournamentCore::$_PENDING, $_keyword, 0, 20  ) ; 
	}
	//
	public function executeGenerateTournamentMedalAwardStanding(sfWebRequest $request)
	{ 
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
		$_tournamentID = $this->getUser()->getAttribute('activeTournamentID'); 

		$_flag =  TournamentParticipantTeamMedalStandingTable::processGenerate ( $_orgID, $_orgTokenID, $_tournamentID, $_participantTeamID, $_participantTeamTokenID, $_description, $_userID, $_userTokenID );  
			 
		return $_flag ? true:false;

	}
	public function executeUpdateTournamentMedalAward(sfWebRequest $request)
	{ 
		$_participantTeamID = $request->getParameter('participant_team_id');	
		$_participantTeamTokenID = $request->getParameter('participant_team_token_id');	
		$_goldMedalAward = $request->getParameter('gold_medal_award');	 
		$_silverMedalAward = $request->getParameter('silver_medal_award');	 
		$_bronzeMedalAward = $request->getParameter('bronze_medal_award');	 
		
		
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
		$_tournamentID = $this->getUser()->getAttribute('activeTournamentID'); 

		$_flag =  TeamTable::makeUpdateMadalAward ( $_participantTeamID, $_participantTeamTokenID, $_goldMedalAward, $_silverMedalAward, $_bronzeMedalAward);  
			 
		return $_flag ? true:false;

	}
}

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

		$this->_participantTeams = TournamentParticipantTeamMedalStandingTable::processCandidates ( $_orgID, $_orgTokenID, $_tournamentID, $_participantTeamID, $_activeFlag, $_keyword);
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

		$_flag =  TournamentParticipantTeamMedalStandingTable::processUpdate ( $_orgID, $_orgTokenID, $_tournamentID, $_participantTeamID, $_participantTeamTokenID, $_goldMedalAward, $_silverMedalAward, $_bronzeMedalAward, $_userID, $_userTokenID );  
			 
		return $_flag ? true:false;

	}
}

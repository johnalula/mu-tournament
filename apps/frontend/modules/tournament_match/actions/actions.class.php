<?php

/**
 * tournament_match actions.
 *
 * @package    symfony
 * @subpackage tournament_match
 * @author     Mekonen Berhane
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tournament_matchActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
     
  }
  //
  public function executeFixture(sfWebRequest $request)
  {
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		//$this->_candidateMatchFixtureGroups = TournamentMatchFixtureGroupTable::makeCandidateSelection ( $_tournamentID, $_sportGameID, $_sportGameTypeID, $_genderCategory, $_keyword, 0, 20 );
  }
  //
  public function executeResult(sfWebRequest $request)
  {
     
  }
  public function executeTable(sfWebRequest $request)
  {
     
  }
  public function executeMedal_award(sfWebRequest $request)
  {
	  
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');

		$this->_participantTeams = TournamentParticipantTeamMedalStandingTable::processAll ( $_orgID, $_orgTokenID, $_tournamentID, $_participantTeamID, $_activeFlag, $_keyword);
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
	
}

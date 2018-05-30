<?php

/**
 * tournament_fixture actions.
 *
 * @package    symfony
 * @subpackage tournament_fixture
 * @author     Mekonen Berhane
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tournament_fixtureActions extends sfActions
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
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		$_tournamentID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('activeTournamentID');
		$_tournament = TournamentTable::makeActiveObject ( true );
		
		$this->_candidateMatchFixtureGroups = TournamentMatchFixtureGroupTable::makeCandidateSelection ( $_tournamentID, $_sportGameID, $_sportGameTypeID, $_genderCategory, $_keyword, 0, 20 );
  }
  //
  public function executeResult(sfWebRequest $request)
  {
		$_matchFixtureGroupID = $request->getParameter('match_fixture_id');	
		$_matchFixtureGroupTokenID = $request->getParameter('token_id');	
	  
	  $_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		$_tournamentID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('activeTournamentID');
		$_tournament = TournamentTable::makeActiveObject ( true );
		
		$this->_candidateMatchFixtureGroup = TournamentMatchFixtureGroupTable::makeCandidateObject ( $_matchFixtureGroupID, $_matchFixtureGroupTokenID);
		
		//$this->_candidateMatchFixtureGroup = TournamentMatchFixtureGroupTable::makeCandidateSelection ( $_tournamentID, $_sportGameID, $_sportGameTypeID, $_genderCategory, $_keyword, 0, 20 );
		
		$this->_matchFixtureGroupParticipants = TournamentMatchTeamMemberParticipantTable::makeCandidateSelection ( $_tournamentID, $_matchFixtureID, $_matchFixtureGroupID, $_sportGameID, $_teamID, $_keyword )  ; 
    
  }
  public function executeMedal_award(sfWebRequest $request)
  {
    
  }
}

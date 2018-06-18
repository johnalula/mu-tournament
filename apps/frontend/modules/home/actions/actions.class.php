<?php

/**
 * home actions.
 *
 * @package    mu-TMS
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
	public function executeIndex(sfWebRequest $request)
	{
		//$_orgID = $this->getUser()->getAttribute('orgID');
		//$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		 
		//$this->_tournamentMatchs = SportGameTable::processSelection ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword, 0, 20  );
		$_tournament = TournamentTable::makeActiveObject ( true );
		
		$this->_activeTournament = TournamentTable::makeActiveObject ( true );
		
		$this->_participantTeams = TeamTable::makeCandidateSelection ( $_tournament->id, $_activeFlag, $_keyword, 0, 10 );

		$this->_participantTeamStandings = TournamentParticipantTeamMedalStandingTable::makeCandidateSelection ( $_tournament->id, $_participantTeamID, $_activeFlag, $_keyword, 0, 6);;
		
		//$this->_tournamentMatchMorningSessionFixtures = TournamentMatchFixtureGroupTable::makeCandidateSelection ( $_tournament->id, $_sportGameID, $_sportGameTypeID, $_genderCategory, TournamentCore::$_MORNING_SESSION, $_tournamentDate, $_keyword, 0, 20  ) ;
		
		//$this->_tournamentMatchAfternoonSessionFixtures = TournamentMatchFixtureGroupTable::makeCandidateSelection ( $_tournament->id, $_sportGameID, $_sportGameTypeID, $_genderCategory, TournamentCore::$_AFTERNOON_SESSION, $_tournamentDate, $_keyword, 0, 20  ) ;
		
		$this->_candidateMatchFixtureParticipants = TournamentMatchFixtureTable::selectCandidateParticipants ( $_matchFixtureGroupID, $_matchFixtureGroupTokenID, $_sportGameID, $_genderCategoryID, $_qualificationStatus, $_competitionStatus, $_status ); 
		
	} 
	
	public function executeSelectTournamentMatchFixtures(sfWebRequest $request)
	{
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		//$_orgTokenID = md5(sha1(trim($orgTokenID))); 
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 15;	
		
		$_matchFixtures = TournamentMatchFixtureTable::processCandidateSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_genderCategoryID, $_keyword);
		
		return $this->renderPartial('content', array('_matchFixtures' => $_matchFixtures, '_countMatchFixtures' => $_countMatchFixtures));	  
	}
	
	
	
}

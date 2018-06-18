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
		
		$this->_candidateMatchFixtureGroups = TournamentMatchFixtureGroupTable::makeCandidateSelection ( $_tournament->id, $_sportGameID, $_genderCategory, $_matchSessionMode, $_tournamentDate, $_keyword, 0, 20  ) ;
		$this->_candidateMatchFixtureGroups = TournamentMatchFixtureGroupTable::makeCandidateSelections ( $_tournamentID, $_sportGameID, $_competitionStatus, $_approvalStatus, $_status, $_keyword, 0, 20  ) ;
  }
  //
  public function executeResult(sfWebRequest $request)
  {
		$_matchFixtureGroupID = $request->getParameter('match_fixture_id');	
		$_matchFixtureGroupTokenID = $request->getParameter('token_id');	
	  
		$_matchFixtureGroupID = $request->getParameter('match_fixture_id');	
		$_matchFixtureGroupTokenID = $request->getParameter('token_id');	
		
		$this->_tournamentMatchFixtureGroup = TournamentMatchFixtureGroupTable::makeObject ( $_matchFixtureGroupID, $_matchFixtureGroupTokenID );
		
		//$this->_tournamentMatchFixtureParticipants = TournamentMatchFixtureGroupTable::processAll ($_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_keyword ); 
		$this->_candidateMatchFixtureParticipants = TournamentMatchFixtureTable::selectCandidateParticipants ( $_matchFixtureGroupID, $_matchFixtureGroupTokenID, $_sportGameID, $_genderCategoryID, $_qualificationStatus, $_competitionStatus, $_status ); 
  }
  //
  public function executeUpdateTournamentMatchFixtureGroupParticipantResult(sfWebRequest $request)
	{ 
		//=13&=aaf85a268d5613462b49876462e33a4fe6e2b96e&=2&=1c550449c742b96368ed6e51697be8c46e8505f6&=&=&=&=1:55.28&=1&=
		
		$_matchFixtureGroupID = $request->getParameter('match_fixture_group_id');	
		$_matchFixtureGroupTokenID = $request->getParameter('match_fixture_group_token_id');	
		$_matchFixtureParticipantID = $request->getParameter('fixture_group_participant_id');	
		$_matchFixtureParticipantTokenID = $request->getParameter('fixture_group_participant_token_id');	
		$_participantRankNumber = $request->getParameter('fixture_group_participant_rank_number');	 
		$_participantPositionNumber = $request->getParameter('fixture_group_participant_position_number');	 
		$_participantBIBNumber = $request->getParameter('fixture_group_participant_number');	 
		$_participantTimeResult = $request->getParameter('fixture_group_participant_time_result');	 
		$_qualificationStatus = $request->getParameter('fixture_group_participant_qualification_status');	 
		$_participantMedalAward = $request->getParameter('fixture_group_participant_medal_award');	 
		
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
		$_tournamentID = $this->getUser()->getAttribute('activeTournamentID'); 
		
		$_flag =  TournamentParticipantTeamMedalStandingTable::processUpdate ( $_orgID, $_orgTokenID, $_matchFixtureGroupID, $_matchFixtureGroupTokenID, $_matchFixtureGroupTokenID, $_matchFixtureParticipantID, $_matchFixtureParticipantTokenID, $_participantRankNumber, $_participantPositionNumber, $_participantBIBNumber, $_participantTimeResult, $_qualificationStatus, $_participantMedalAward, $_userID, $_userTokenID );  
			 
		return $_flag ? true:false;

	}
  public function executeMedal_award(sfWebRequest $request)
  {
    
  }
}

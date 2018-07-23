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
		
		$this->_candidateMatchFixtureGroups = TournamentMatchFixtureGroupTable::selectCandidateMatchFixtureGroupSelection ( $_tournamentID, $_tournamentDate, $_competitionStatus, $_status, $_keyword, 0, 50  ) ;
		//$this->_candidateMatchFixtureGroups = TournamentMatchFixtureGroupTable::makeCandidateSelection ( $_tournamentID, $_sportGameID, $_genderCategory, $_matchSessionMode, $_tournamentDate, $_keyword, 0, 50  ) ;
		//$this->_candidateMatchFixtureGroups = TournamentMatchFixtureGroupTable::makeCandidateSelections ( $_tournamentID, $_sportGameID, $_competitionStatus, $_approvalStatus, $_status, $_keyword, 0, 50  ) ;
  }
  //
  public function executeResult(sfWebRequest $request)
  {
		$_matchFixtureGroupID = $request->getParameter('match_fixture_id');	
		$_matchFixtureGroupTokenID = $request->getParameter('token_id');	
	  
		$_matchFixtureGroupID = $request->getParameter('match_fixture_id');	
		$_matchFixtureGroupTokenID = $request->getParameter('token_id');	
		
		$this->_tournamentMatchFixtureGroup = TournamentMatchFixtureGroupTable::makeObject ( $_matchFixtureGroupID, $_matchFixtureGroupTokenID,true );
		
		//$this->_tournamentMatchFixtureParticipants = TournamentMatchFixtureGroupTable::processAll ($_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_keyword ); 
		$this->_candidateMatchFixtureParticipants = TournamentMatchFixtureTable::selectCandidateParticipants ( $_matchFixtureGroupID, $_matchFixtureGroupTokenID, $_sportGameID, $_genderCategoryID, $_qualificationStatus, $_competitionStatus, $_status ); 
  }
  //
  public function executeUpdateMatchFixtureGroupParticipantResult(sfWebRequest $request)
	{ 
		//match_fixture_group_id=13&match_fixture_group_token_id=86a1235bad84e5f0b1a2a640e042fcd54d830672&fixture_participant_team_id=1&fixture_participant_team_token_id=c02614d670570553718e3c12b1086fde93760fe2&fixture_participant_opponent_team_id=2&fixture_participant_opponent_team_token_id=d550d2593ffb687b2cb75e7045ed0484debaebd1&fixture_participant_team_result=4&fixture_participant_opponent_team_result=2
		
		$_matchFixtureGroupID = $request->getParameter('match_fixture_group_id');	
		$_matchFixtureGroupTokenID = $request->getParameter('match_fixture_group_token_id');	
		
		$_fixtureParticipantTeamID = $request->getParameter('fixture_participant_team_id');	
		$_fixtureParticipantTeamTokenID = $request->getParameter('fixture_participant_team_token_id');	
		$_fixtureParticipantOpponentTeamID = $request->getParameter('fixture_participant_opponent_team_id');	
		$_fixtureParticipantOpponentTeamTokenID = $request->getParameter('fixture_participant_opponent_team_token_id');	
		
		$_fixtureParticipantTeamResult = $request->getParameter('fixture_participant_team_result');	
		$_fixtureParticipantOpponentTeamResult = $request->getParameter('fixture_participant_opponent_team_result');	
		 
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
		$_tournamentID = $this->getUser()->getAttribute('activeTournamentID'); 
		
		$_flag =  TournamentMatchFixtureGroupTable::makeMatchFixtureGroupResult ( $_orgID, $_orgTokenID, $_matchFixtureGroupID, $_matchFixtureGroupTokenID, $_fixtureParticipantTeamID, $_fixtureParticipantTeamTokenID, $_fixtureParticipantOpponentTeamID, $_fixtureParticipantOpponentTeamTokenID, $_fixtureParticipantTeamResult, $_fixtureParticipantOpponentTeamResult, $_userID, $_userTokenID );  
			 
		return $_flag ? true:false;

	}
  public function executeUpdateTournamentMatchFixtureGroupParticipantResult(sfWebRequest $request)
	{ 
		//=1&=afdb28e0451c8f50ac97e93423a1c017e1df1f98&=1&=a5a975d861baaef5ee8b1e855f56f8c023d4ebb4&=1&=9248cc14f48fcd09ddf3ea1538ecdd49844651a4&=&=&fixture_group_participant_number=&=&=1&=8
		
		$_matchFixtureID = $request->getParameter('match_fixture_id');	
		$_matchFixtureTokenID = $request->getParameter('match_fixture_token_id');	
		$_matchFixtureGroupID = $request->getParameter('match_fixture_group_id');	
		$_matchFixtureGroupTokenID = $request->getParameter('match_fixture_group_token_id');	
		$_matchFixtureParticipantID = $request->getParameter('match_fixture_participant_id');	
		$_matchFixtureParticipantTokenID = $request->getParameter('match_fixture_participant_token_id');	
		$_participantTeamID = $request->getParameter('participant_team_id');	
		$_participantTeamTokenID = $request->getParameter('participant_team_token_id');	
		$_memberParticipantID = $request->getParameter('member_participant_id');	
		$_memberParticipantTokenID = $request->getParameter('member_participant_token_id');	
		$_participantRankNumber = $request->getParameter('fixture_group_participant_rank_number');	 
		$_participantPositionNumber = $request->getParameter('fixture_group_participant_position_number');	 
		$_participantBIBNumber = $request->getParameter('fixture_group_participant_number');	 
		$_participantTimeResult = $request->getParameter('fixture_group_participant_time_result');	 
		$_qualificationStatus = $request->getParameter('fixture_group_participant_qualification_status');	 
		$_fixtureParticipantStatus = $request->getParameter('fixture_group_participant_status');	 
		
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
		$_tournamentID = $this->getUser()->getAttribute('activeTournamentID'); 
		
		$_flag =  TournamentMatchFixtureTable::makeTournamentMatchFixtureResult ($_orgID, $_orgTokenID, $_matchFixtureID, $_matchFixtureTokenID, $_matchFixtureGroupID, $_matchFixtureGroupTokenID, $_matchFixtureParticipantID, $_matchFixtureParticipantTokenID, $_participantTeamID, $_participantTeamTokenID, $_memberParticipantID, $_memberParticipantTokenID, $_participantRankNumber, $_participantPositionNumber, $_participantBIBNumber, $_participantTimeResult, $_qualificationStatus, $_fixtureParticipantStatus, $_userID, $_userTokenID );  
			 
		return $_flag ? true:false;

	}
  public function executeMedal_award(sfWebRequest $request)
  {
    
  }
}

<?php

/**
 * competition actions.
 *
 * @package    mu-TMS
 * @subpackage competition
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class competitionActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
	public function executeIndex(sfWebRequest $request)
	{

	}
	public function executeView(sfWebRequest $request)
	{

	}
	public function executeTeam_standing(sfWebRequest $request)
	{
		$_tournament = TournamentTable::makeActiveObject ( true );
		
		$this->_activeTournament = TournamentTable::makeActiveObject ( 1, true );
		//$this->_activeTournament = TournamentTable::processObject (  1, '5298132053f93db5da4d84b8c1c0eb9aece6cd57', 1, '67a74306b06d0c01624fe0d0249a570f4d093747' );
		
		$this->_candidateParticipantTeams = TournamentParticipantTeamMedalStandingTable::makeCandidates ( $_tournament->id, $_participantTeamID, $_activeFlag, $_keyword);
	}
	public function executeFixture(sfWebRequest $request)
	{
		//$_tournamentID = $request->getParameter('tournament_id');	
		$_matchFixtureGroupID = $request->getParameter('match_fixture_id');	
		$_matchFixtureGroupTokenID = $request->getParameter('token_id');	
		
		//$_this->_activeTournament = TournamentTable::makeCandidateObject ( null, true );
		//$this->_matchFixtureGroup = TournamentMatchFixtureGroupTable::makeObject ( $_matchFixtureGroupID, $_matchFixtureGroupTokenID, $_activeFlag );
		//$this->_participantTeams = TeamTable::processSelection ( $_orgID, $_orgTokenID, $_activeFlag, $_keyword, 0, 10 );
		//$_sportGameID = $this->_matchFixtureGroup->sportGameID;
		//$this->_tournamentGames = GameCategoryTable::processSelection ( $_orgID, $_orgTokenID, $_keyword, 0, 20  ) ;
		//$this->_tournamentMatchFixtures = TournamentMatchFixtureTable::processCandidateSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_genderCategoryID, $_keyword) ;
		
		//$this->_tournamentMatchFixtures = TournamentMatchFixtureGroupTable::processObject ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_keyword, 0, 20  ) ;
		
		//$this->_tournamentMatchFixtureParticipants = TournamentMatchFixtureGroupTable::processAll ($_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_keyword ); 
		//$this->_tournamentMatchFixtureParticipants = TournamentMatchTeamMemberParticipantTable::selectCandidates ( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureGroupID, $_sportGameID, $_teamID, $_keyword  ); 
	}
	public function executeParticipant_team(sfWebRequest $request)
	{
		
		$_participantTeamID = $request->getParameter('team_id');	
		$_participantTeamTokenID = $request->getParameter('token_id');	
		
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		$this->_participantTeam = TeamTable::processObject ( $_orgID, $_orgTokenID, $_participantTeamID, $_participantTeamTokenID ) ;

		$this->_teamParticipatingGames = TeamGameParticipationTable::processSelection ( $_orgID, $_tournamentID, $_participantTeamID, sha1(md5($_participantTeamTokenID)), $_gameTypeID, $_keyword, $_exclusion, 0, 30  ) ;
		$this->_memberParticipants = TeamMemberParticipantTable::processSelection( $_tournamentID, $_participantTeamID, sha1(md5($_participantTeamTokenID)), $_sportGameID, $_sportGameTokenID, $_keyword, $_exclusion, 0, 20  ) ;
		
		$this->_memberParticipantRoles = TeamMemberParticipantRoleTable::processSelection ( $_tournamentID, $_participantTeamID, sha1(md5($_participantTeamTokenID)), $_participantID, $_sportGameID, $_keyword, 0, 20 ); 
		 
	}
	public function executeMatch_fixtures(sfWebRequest $request)
	{
		$this->_activeTournament = TournamentTable::makeCandidateObject ( true );
		 
		//$this->_activeTournamentObje = TournamentTable::makeCandidateObject ( $_orgID, true ) ;
		//$this->_tournamentMatchFixtureParticipants = TournamentMatchFixtureGroupTable::processAll ($_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_keyword ); 
		//$this->_tournamentMatchFixtureParticipants = TournamentMatchTeamMemberParticipantTable::selectCandidates ( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureGroupID, $_sportGameID, $_teamID, $_keyword  ); 
		
		$this->_candidateSportGames = SportGameTable::makeCandidateSelections ( $_categoryID, $_activeFlag, $_keyword); 
	}
	public function executeSport_games(sfWebRequest $request)
	{
		$this->_activeTournament = TournamentTable::makeCandidateObject ( true );
		 
		//$this->_activeTournamentObje = TournamentTable::makeCandidateObject ( $_orgID, true ) ;
		//$this->_tournamentMatchFixtureParticipants = TournamentMatchFixtureGroupTable::processAll ($_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_keyword ); 
		//$this->_tournamentMatchFixtureParticipants = TournamentMatchTeamMemberParticipantTable::selectCandidates ( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureGroupID, $_sportGameID, $_teamID, $_keyword  ); 
		
		$this->_candidateSportGames = SportGameTable::makeCandidateSelections ( $_categoryID, $_activeFlag, $_keyword); 
	}
	public function executeParticipants(sfWebRequest $request)
	{
		$this->_activeTournament = TournamentTable::makeCandidateObject ( true );
		 
		//$this->_activeTournamentObje = TournamentTable::makeCandidateObject ( $_orgID, true ) ;
		//$this->_tournamentMatchFixtureParticipants = TournamentMatchFixtureGroupTable::processAll ($_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_keyword ); 
		//$this->_tournamentMatchFixtureParticipants = TournamentMatchTeamMemberParticipantTable::selectCandidates ( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureGroupID, $_sportGameID, $_teamID, $_keyword  ); 
		
		//$this->_candidateSportGames = SportGameTable::makeCandidateSelections ( $_categoryID, $_activeFlag, $_keyword); 
	}
	public function executeParticipant_teams(sfWebRequest $request)
	{
		$this->_activeTournament = TournamentTable::makeCandidateObject ( true );
		 
		//$this->_activeTournamentObje = TournamentTable::makeCandidateObject ( $_orgID, true ) ;
		//$this->_tournamentMatchFixtureParticipants = TournamentMatchFixtureGroupTable::processAll ($_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_keyword ); 
		//$this->_tournamentMatchFixtureParticipants = TournamentMatchTeamMemberParticipantTable::selectCandidates ( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureGroupID, $_sportGameID, $_teamID, $_keyword  ); 
		
		$this->_candidateSportGames = SportGameTable::makeCandidateSelections ( $_categoryID, $_activeFlag, $_keyword); 
	}
}

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
	public function executeFixture(sfWebRequest $request)
	{
		
		//$_tournamentID = $request->getParameter('tournament_id');	
		$_matchFixtureID = $request->getParameter('match_fixture_id');	
		$_matchFixtureTokenID = $request->getParameter('token_id');	
		
		$this->_matchFixtureGroup = TournamentMatchFixtureGroupTable::makeCandidateObject ( $_matchFixtureID, $_matchFixtureTokenID, $_activeFlag );
		$this->_participantTeams = TeamTable::processSelection ( $_orgID, $_orgTokenID, $_activeFlag, $_keyword, 0, 10 );
		//$_sportGameID = $this->_matchFixtureGroup->sportGameID;
		//$this->_tournamentGames = GameCategoryTable::processSelection ( $_orgID, $_orgTokenID, $_keyword, 0, 20  ) ;
		//$this->_tournamentMatchFixtures = TournamentMatchFixtureTable::processCandidateSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_genderCategoryID, $_keyword) ;
		
		//$this->_tournamentMatchFixtures = TournamentMatchFixtureGroupTable::processObject ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_keyword, 0, 20  ) ;
		
		//$this->_tournamentMatchFixtureParticipants = TournamentMatchFixtureGroupTable::processAll ($_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_keyword ); 
		$this->_tournamentMatchFixtureParticipants = TeamMemberParticipantRoleTable::processAll ( $_tournamentID, $_teamID, $_teamTokenID, $_sportGameID, $_sportGameCategoryID, $_genderCategory, $_keyword  ); 
	}
}

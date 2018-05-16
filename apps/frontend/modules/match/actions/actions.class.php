<?php

/**
 * match actions.
 *
 * @package    mu-TMS
 * @subpackage match
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class matchActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
	{
		//$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		//$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		//$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		//$this->_teams = TeamTable::processSelection ( $_orgID, $_orgTokenID, $_activeFlag, $_keyword, 0, 10 );
		$this->_tournamentMatchs = TournamentMatchTable::processSelection ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword, 0, 20  );
	}
	
	
	public function executeEdit(sfWebRequest $request)
	{
		$_matchID = $request->getParameter('match_id');	
		$_tokenID = $request->getParameter('token_id');	
		//$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		//$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		//$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		$this->_tournamentMatch = TournamentMatchTable::processObject ( $_orgID, $_orgTokenID, $_matchID, $_tokenID );
		$this->_activeTournament = TournamentTable::makeCandidateObject ( $_orgID, $_activeFlag ) ;
		$this->_candidateGameCategorys = GameCategoryTable::processSelection ( $_orgID, $_orgTokenID, $_keyword, 0, 20  ) ;
		$this->_candidateRounds = RoundTypeTable::processAll ( $_orgID, $_orgTokenID, $_type, $_keyword, true) ;
		
	}
	public function executeView(sfWebRequest $request)
	{
		$_teamID = $request->getParameter('team_id');	
		$_tokenID = $request->getParameter('token_id');	
		//$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		//$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		//$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		$this->_team = TeamTable::processObject ( $_orgID, $_orgTokenID, $_teamID, $_tokenID ) ;
		
	} 
	
	public function executeNew(sfWebRequest $request)
	{
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		$this->_activeTournament = TournamentTable::makeCandidateObject ( $_orgID, $_activeFlag ) ;
		//$this->_candidateGameCategorys = GameCategoryTable::processSelection ( $_orgID, $_orgTokenID, $_keyword, 0, 20  ) ;
		//$this->_candidateRounds = RoundTypeTable::processAll ( $_orgID, $_orgTokenID, $_type, $_keyword, true) ;
	}
	//
	public function executeCreateTournamentMatch(sfWebRequest $request)
	{
		$_tournamentMatch = $request->getParameter('tournament_match');
		$_tournamentMatchName = $_tournamentMatch['tournament_name'];	
		$_tournamentID = $_tournamentMatch['tournament_id'];	
		$_tournamentTokenID = $_tournamentMatch['tournament_token_id'];	
		$_sportGameCategoryName = $_tournamentMatch['sport_game_category_name'];	
		$_sportGameCategoryID = $_tournamentMatch['sport_game_category_id'];	
		$_sportGameCategoryTokenID = $_tournamentMatch['sport_game_category_token_id'];	
		$_matchRoundMode = $_tournamentMatch['tournament_match_round_mode'];	 
		$_contestantTeamMode = $_tournamentMatch['contestant_team_mode'];	 
		$_status = $_tournamentMatch['match_status'];	 
		$_matchDate = $_tournamentMatch['match_date'];	 
		$_description = $_tournamentMatch['description'];	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_tournamentMatch =  TournamentMatchTable::processNew ( $_orgID, $_orgTokenID, $_tournamentID, $_tournamentTokenID, $_sportGameCategoryID, $_sportGameCategoryName, $_tournamentMatchName, $_contestantTeamMode, $_matchRoundMode, $_matchDate, $_status, $_description, $_userID, $_userTokenID );  
				 
		if(!$_tournamentMatch){ 
			$this->getUser()->setFlash('process_fail', true);
			$this->redirect('match/index');
		}  else {
			$this->getUser()->setFlash('process_success', true);
		}
		$this->redirect('match/fixture?match_id='.$_tournamentMatch->id.'&token_id='.$_tournamentMatch->token_id);
		
	}
	public function executeFixture(sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('match_id');	
		$_tournamentMatchTokenID = $request->getParameter('token_id');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		$this->_tournamentMatch = TournamentMatchTable::processObject ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID );
		
		//$this->_matchFixtures = TournamentMatchFixtureTable::processSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_gameTypeID, $_keyword, 0, 20  ) ;
		
	}
	public function executeCreateTournamentMatchFixture(sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		
		$_parentMatchFixtureID = $request->getParameter('parent_match_fixture_id');	
		$_parentMatchFixtureTokenID = $request->getParameter('parent_match_fixture_token_id');	
		$_matchGameTypeID = $request->getParameter('sport_game_group_type_id');	
		$_matchGameTypeID = $request->getParameter('math_game_type_id');	
		$_matchGameTypeTokenID = $request->getParameter('math_game_type_token_id');	
		
		$_sportGameGroupName = $request->getParameter('tournament_sport_game_group_name');	
		$_sportGameGroupID = $request->getParameter('tournament_sport_game_group_id');	
		$_sportGameGroupTokenID = $request->getParameter('tournament_sport_game_group_token_id');	
		
		$_sportGameID = $request->getParameter('sport_game_id');	
		$_sportGameTokenID = $request->getParameter('sport_game_token_id');	
		$_matchRoundTypeID = $request->getParameter('round_type_id');	
		$_tournamentMatchVenue = $request->getParameter('sport_game_venue_name');	 
		$_eventType = $request->getParameter('event_type');	 
		$_genderCategory = $request->getParameter('gender_category_id');	 
		$_contestantTeamMode = $request->getParameter('contestant_team_mode');	 
		$_contestantMode = $request->getParameter('contestant_mode');	 
		$_matchRoundMode = $request->getParameter('tournament_match_round_mode');	 
		
		$_tournamentMatchNumber = $request->getParameter('tournament_match_number');	 
		$_matchStatus = $request->getParameter('match_status');	 
		$_matchTime = $request->getParameter('match_time');	 
		$_matchDate = $request->getParameter('match_date');	 
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_flag =  TournamentMatchFixtureTable::processNew ( $_orgID, $_orgTokenID, $_parentMatchID, $_parentMatchTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_sportGameID, $_sportGameTokenID, $_sportGameGroupName, $_matchRoundTypeID, $_matchRoundMode, $_genderCategory, $_eventType, $_contestantTeamMode, $_contestantMode, $_tournamentMatchVenue, $_tournamentMatchNumber, $_matchTime, $_matchDate, $_matchStatus, $_description, $_userID, $_userTokenID  );  
				 
		return $_flag ? true:false;
		
	}
	public function executeParticipant_team(sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('match_id');	
		$_tournamentMatchTokenID = $request->getParameter('token_id');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_tournamentID = $this->getUser()->getAttribute('activeTournamentID');  
		
		$this->_tournamentMatch = TournamentMatchTable::processObject ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID );
		
		$this->_tournamentMatchFixtureGroups = TournamentMatchFixtureGroupTable::processSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_keyword, 0, 20  ) ;
		$this->_allTournamentMatchFixtureGroups = TournamentMatchFixtureGroupTable::processAll ($_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_keyword) ;
		
		//$this->_candidateMatchFixtures = TournamentMatchTable::selectCandidateMatchFixtures ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_genderCategoryID, $_keyword, 0, 20  ) ;
		
		$this->_matchParticipantTeams= TournamentMatchParticipantTeamTable::processSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameGroupID, $_sportGameID, $_teamID, $_keyword, 0, 20  ) ;
		
	}
	public function executeCreateTournamentMatchParticipantTeam(sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		
		$_matchFixtureID = $request->getParameter('match_fixture_id');	
		$_matchFixtureTokenID = $request->getParameter('match_fixture_token_id');	
		$_matchFixtureGroupID = $request->getParameter('tournament_match_fixture_group_id');	
		$_matchFixtureGroupTokenID = $request->getParameter('tournament_match_fixture_token_group_id');	
		$_sportGameGroupID = $request->getParameter('tournament_sport_game_group_id');	
		$_sportGameGroupTokenID = $request->getParameter('tournament_sport_game_group_token_id');	
		$_participantTeamGroupID = $request->getParameter('sport_game_group_team_id');	
		$_participantTeamGroupTokenID = $request->getParameter('sport_game_group_team_token_id');	
		$_opponentParticipantTeamGroupID = $request->getParameter('opponent_sport_game_group_team_id');	
		$_opponentParticipantTeamGroupTokenID = $request->getParameter('opponent_sport_game_group_team_token_id');	
		
		$_contestantTeamMode = $request->getParameter('tournament_contestant_team_mode');	
		$_matchFixtureName = $request->getParameter('match_fixture');	
		$_participantTeamName = $request->getParameter('participant_team_name');	
		$_opponentParticipantTeamName = $request->getParameter('opponent_participant_team_name');	
		$_genderCategory = $request->getParameter('gender_category_id');	
		$_tournamentMatchVenu = $request->getParameter('sport_game_venue_name');	 
		$_matchTime = $request->getParameter('match_time');	 
		$_matchDate = $request->getParameter('match_date');	
		
		$_matchStatus = $request->getParameter('match_status');	 
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_flag =  TournamentMatchParticipantTeamTable::processNew ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureTokenID, $_matchFixtureGroupID, $_matchFixtureGroupTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamGroupID, $_participantTeamGroupTokenID, $_opponentParticipantTeamGroupID, $_opponentParticipantTeamGroupTokenID, $_matchFixtureName, $_participantTeamName, $_opponentParticipantTeamName, $_tournamentMatchVenu, $_matchDate, $_matchTime, $_matchStatus, $_description, $_contestantTeamMode, SystemCore::$_SINGLE_DATA, $_userID, $_userTokenID );
		
		return $_flag ? true:false;
		
	}
	public function executeCreateBatchTournamentMatchParticipantTeam(sfWebRequest $request)
	{
		
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		
		$_matchFixtureID = $request->getParameter('match_fixture_id');	
		$_matchFixtureTokenID = $request->getParameter('match_fixture_token_id');	
		$_matchFixtureGroupID = $request->getParameter('tournament_match_fixture_group_id');	
		$_matchFixtureGroupTokenID = $request->getParameter('tournament_match_fixture_token_group_id');	
		$_sportGameGroupID = $request->getParameter('tournament_sport_game_group_id');	
		$_sportGameGroupTokenID = $request->getParameter('tournament_sport_game_group_token_id');	
		$_participantTeamGroupID = $request->getParameter('sport_game_group_team_id');	
		$_participantTeamGroupTokenID = $request->getParameter('sport_game_group_team_token_id');	
		$_opponentParticipantTeamGroupID = $request->getParameter('opponent_sport_game_group_team_id');	
		$_opponentParticipantTeamGroupTokenID = $request->getParameter('opponent_sport_game_group_team_token_id');	
		
		$_matchFixtureName = $request->getParameter('match_fixture');	
		$_participantTeamName = $request->getParameter('participant_team_name');	
		$_opponentParticipantTeamName = $request->getParameter('opponent_participant_team_name');	
		$_genderCategory = $request->getParameter('gender_category_id');	
		$_contestantTeamMode = $request->getParameter('tournament_contestant_team_mode');	
		
		$_matchStatus = $request->getParameter('match_status');	 
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
		
		
		$_flag =  TournamentMatchParticipantTeamTable::processNew ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureTokenID, $_matchFixtureGroupID, $_matchFixtureGroupTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamGroupID, $_participantTeamGroupTokenID, $_opponentParticipantTeamGroupID, $_opponentParticipantTeamGroupTokenID, $_matchFixtureName, $_participantTeamName, $_opponentParticipantTeamName, $_tournamentMatchVenu, $_matchDate, $_matchTime, $_matchStatus, $_description, $_contestantTeamMode, SystemCore::$_MULTIPLE_DATA, $_userID, $_userTokenID );
		
		
		//$_flag =  TournamentMatchParticipantTeamTable::processNew ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureTokenID, $_matchFixtureGroupID, $_matchFixtureGroupTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamGroupID, $_participantTeamGroupTokenID, $_opponentParticipantTeamGroupID, $_opponentParticipantTeamGroupTokenID, $_matchFixtureName, $_participantTeamName, $_matchStatus, $_description, $_contestantTeamMode, SystemCore::$_MULTIPLE_DATA, $_userID, $_userTokenID );  
	
		return $_flag ? true:false;
		
	}
	public function executeParticipant(sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('match_id');	
		$_tournamentMatchTokenID = $request->getParameter('token_id');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		$this->_tournamentMatch = TournamentMatchTable::processObject ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID );
		
		//$this->_matchParticipantTeams = TournamentMatchParticipantTeamTable::processSelection ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_matchFixtureID, $_teamGroupID, $_sportGameID, $_keyword, 0, 20  ) ;
		//$this->_candidateParticipantTeams = TournamentMatchTable::processCandidateTournamentMatchParticipantTeams ( $_orgID, $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_keyword, 0, 20 ); 
		//$this->_candidateParticipantTeams = TournamentMatchParticipantTeamTable::processCandidateParticipants ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_teamGroupID, $_sportGameID, $_keyword, 0, 20 ); 
		//$this->_candidateParticipantTeams = TournamentMatchParticipantTeamTable::processCandidateParticipants ( $_orgID, $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_keyword, $_exclusion, 0, 20 ); 
		
		//$this->_candidateParticipants = TournamentMatchTable::selectCandidateParticipantTeamMembers( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameID, $_genderCategory, $_keyword, 0, 20 );
		 
		
	}
	public function executeCreateMatchParticipantTeamMember(sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		
		$_matchFixtureID = $request->getParameter('match_fixture_id');	
		$_matchFixtureTokenID = $request->getParameter('match_fixture_token_id');	
		$_sportGameGroupID = $request->getParameter('tournament_sport_game_group_id');	
		$_sportGameGroupTokenID = $request->getParameter('tournament_sport_game_group_token_id');	
		$_participantTeamGroupID = $request->getParameter('sport_game_group_team_id');	
		$_participantTeamGroupTokenID = $request->getParameter('sport_game_group_team_token_id');	
		
		$_matchFixtureName = $request->getParameter('match_fixture');	
		$_participantTeamName = $request->getParameter('participant_team_name');	
		$_genderCategory = $request->getParameter('gender_category_id');	
		
		$_matchStatus = $request->getParameter('match_status');	 
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_flag =  TournamentMatchParticipantTeamTable::processNew ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamGroupID, $_participantTeamGroupTokenID, $_matchFixtureName, $_participantTeamName, $_matchStatus, $_description, SystemCore::$_SINGLE_DATA, $_userID, $_userTokenID );  
				 
		return $_flag ? true:false;
		
	}
	public function executeComplete(sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('match_id');	
		$_tournamentMatchTokenID = $request->getParameter('token_id');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		$this->_tournamentMatch = TournamentMatchTable::processObject ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID );
		
		//$this->_matchParticipantGroupTeams = TournamentMatchParticipantTeamTable::processSelection ( $_tournamentID, $_tournamentMatchIDl, $_tournamentMatchTokenIDl, $_matchFixtureID, $_sportGameGroupID, $_sportGameID, $_teamID, $_keyword, 0, 20  ) ;
		
		$this->_matchParticipantTeams = TournamentMatchFixtureGroupTable::processSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_keyword, 0, 20  ) ;
		
		$this->_tournamentMatchFixtures = TournamentMatchFixtureTable::selectCandidates ( $_tournamentMatchID, $_tournamentMatchTokenID, false, $_parentFlag, false, TournamentCore::$_PENDING, TournamentCore::$_PENDING);
		
	}

  /*********************************************************************/
	/*************** Process Approval and Completion *********************
	//********************************************************************/
	 
	public function executeApproveTournamentMatch (sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID');  
		
		$_flag = TournamentMatchTable::processApproval ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_userID, $_userTokenID ); 
		
		return $_flag ? true:false;
	}
	public function executeCompleteTournamentMatch (sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID');  
		
		$_flag = TournamentMatchTable::processCompletion ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_userID, $_userTokenID ); 
		
		return $_flag ? true:false;
		
	}
	
  /*********************************************************************/
  /************************ Candidate Selection ***********************
  //********************************************************************/
  
  /****************** Fixture Action ***********************/
  
	public function executeCandidateSportGameCategory(sfWebRequest $request)
	{
		
		//$_offset = $request->getParameter('offset');	
		//$_limit = $request->getParameter('limit');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		$_candidateGameCategorys = TournamentMatchTable::selectCandidateTournamentGameCategorys ( $_orgID, $_orgTokenID, $_keyword, $_offset, $_limit ); 
		
		return $this->renderPartial('game_category/candidate_game_category', array( '_candidateGameCategorys' => $_candidateGameCategorys, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
	
  /****************** Fixture Action ***********************/
  
	public function executeCandidateParentTournamentMatchFixtures(sfWebRequest $request)
	{
		
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		$_sportGameTypeID = $request->getParameter('tournament_match_game_category_id');	
		//$_tokenID = $request->getParameter('token_id');	
		//$_offset = $request->getParameter('offset');	
		//$_limit = $request->getParameter('limit');	
		
		
		//$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		//$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		//$_orgTokenID = $_defaultSuperAdmin ? null:sha1(md5(trim($this->getUser()->getAttribute('orgTokenID'))));
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		$_candidateMatchFixtures = TournamentMatchTable::processCandidateMatchFixtures ( $_orgID, $_orgTokenID, $_tournamentID, $_parentMatchID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameTypeID, $_keyword, $_offset, $_limit ); 
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('candidate_match_fixtures', array('_candidateMatchFixtures' => $_candidateMatchFixtures, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
	public function executeCandidateSportGameGroup(sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		$_sportGameTypeID = $request->getParameter('sport_game_type_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		$_tournamentSportGameGroups =  TournamentMatchTable::selectCandidateTournamentSportGameGroups ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_tournamentFixtureID, $_sportGameTypeID, $_sportGameID, TournamentCore::$_ACTIVE, TournamentCore::$_PENDING, $_keyword, $_offset, $_limit); 
		
		return $this->renderPartial('team_group/candidate_tournament_groups', array('_tournamentSportGameGroups' => $_tournamentSportGameGroups, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
	public function executeCandidateTournamentMatchRounds (sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		$_sportGameTypeID = $request->getParameter('sport_game_type_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 25;			 

		$_candidateRoundTypes =  TournamentMatchTable::selectCandidateTournamentMatchRounds ( $_orgID,  $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_tournamentFixtureID, $_sportGameID, $_keyword, $_offset, $_limit); 
		
		return $this->renderPartial('tournament_setup/candidate_round_type', array( '_candidateRoundTypes' => $_candidateRoundTypes, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
  /****************** Participant Team Action ***********************/
	
	public function executeCandidateTournamentMatchFixtures(sfWebRequest $request)
	{
		
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		$_sportGameTypeID = $request->getParameter('tournament_match_game_category_id');	
		$_contestantTeamMode = $request->getParameter('tournament_contestant_team_mode');	
		//$_tokenID = $request->getParameter('token_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		$_candidateMatchFixtures = TournamentMatchTable::selectCandidateMatchFixtures ( $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_genderCategoryID, $_contestantTeamMode, $_keyword, $_offset, $_limit); 
		
		return $this->renderPartial('candidate_match_fixtures', array('_candidateMatchFixtures' => $_candidateMatchFixtures, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
	public function executeCandidateMatchParticipantTeams(sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		$_matchFixtureID = $request->getParameter('match_fixture_id');	
		$_sportGameGroupID = $request->getParameter('tournament_sport_game_group_id');	
		$_genderCategoryID = $request->getParameter('gender_category_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		$_candidateParticipantTeams = TournamentMatchTable::selectCandidateParticipantTeams ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameGroupID, $_sportGameID, $_genderCategory, $_keyword, $_offset, $_limit ); 
		
		
		return $this->renderPartial('team_group/candidate_group_member_team', array('_candidateMemberTeams' => $_candidateParticipantTeams, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
	public function executeCandidateMatchParticipantOpponentTeams(sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		$_opponentParticipantTeamID = $request->getParameter('sport_game_group_team_id');	
		$_opponentParticipantTeamTokenID = $request->getParameter('participant_team_token_id');	
		$_matchFixtureID = $request->getParameter('match_fixture_id');	
		$_sportGameGroupID = $request->getParameter('tournament_sport_game_group_id');	
		$_genderCategoryID = $request->getParameter('gender_category_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		$_candidateParticipantTeams = TournamentMatchTable::selectCandidateOpponentParticipantTeams ( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_opponentParticipantTeamID, $_sportGameGroupID, $_sportGameID, $_genderCategory, $_keyword, $_offset, $_limit ); 
		
		
		return $this->renderPartial('candidate_group_member_opponent_team', array('_candidateMemberTeams' => $_candidateParticipantTeams, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
  /****************** Latest Participant Action ***********************/
	
	public function executeCandidateTournamentMatchParticipantFixtures(sfWebRequest $request)
	{
		
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		$_sportGameTypeID = $request->getParameter('tournament_match_game_category_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		$_candidateMatchFixtures = TournamentMatchTable::selectCandidateMatchFixtures ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_genderCategoryID, $_keyword, $_offset, $_limit); 
		
		return $this->renderPartial('candidate_match_fixtures', array('_candidateMatchFixtures' => $_candidateMatchFixtures, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
	public function executeCandidateMatchFixtureParticipantTeams(sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		$_matchFixtureID = $request->getParameter('match_fixture_id');	
		//$_sportGameGroupID = $request->getParameter('tournament_sport_game_group_id');	
		//$_genderCategoryID = $request->getParameter('gender_category_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 40;			 

		$_candidateParticipantTeams = TournamentMatchTable::selectCandidateMatchFixtureParticipantTeams ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameID, $_genderCategory, $_keyword, $_offset, $_limit ); 
		
		
		return $this->renderPartial('candidate_participant_team', array('_candidateParticipantTeams' => $_candidateParticipantTeams, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	public function executeCandidateMatchParticipantTeamMembers(sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		$_matchFixtureID = $request->getParameter('match_fixture_id');	
		$_participantTeamID = $request->getParameter('team_id');	
		$_participantTeamTokenID = $request->getParameter('team_token_id');	
		$_groupMemberTeamID = $request->getParameter('sport_game_group_team_id');	
		$_sportGameID = $request->getParameter('sport_game_id');	
		$_genderCategory = $request->getParameter('gender_category_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');
		 
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;				 

		$_candidateParticipants = TournamentMatchTable::selectCandidateParticipantTeamMembers( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_participantTeamID, $_participantTeamTokenID, $_groupMemberTeamID, $_sportGameID, $_genderCategory, $_keyword, $_offset, $_limit ); 
		
		
		return $this->renderPartial('team_group/candidate_group_member_participant', array('_candidateParticipants' => $_candidateParticipants, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
	/************  Candidate Navigation Selection Functions **************/
	
	public function executeCandidateSportGames(sfWebRequest $request)
	{
		$_categoryID = $request->getParameter('sport_game_category');	
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
	public function executeCandidateTeams(sfWebRequest $request)
	{
		$_categoryID = $request->getParameter('sport_game_category');	
		//$_tokenID = $request->getParameter('token_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		
		//$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		//$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		//$_orgTokenID = $_defaultSuperAdmin ? null:sha1(md5(trim($this->getUser()->getAttribute('orgTokenID'))));
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		$_candidateParticipantTeams = TeamTable::processSelection ( $_orgID, $_orgTokenID, $_activeFlag, $_keyword, $_offset, $_limit ); 
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('team/candidate_team', array('_candidateTeams' => $_candidateParticipantTeams, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
	/************  Participant Team Action **************/
	
	
	
	/************  Participant Action  **************/
	
	public function executeCandidateTournamentMatchParticipantTeams(sfWebRequest $request)
	{
		//=1&=c14cde52da7dbba0b3fb2b418a9c9a35962411b9 &match_fixture_id=1&match_fixture_token_id=81f85a62f6e4419c4bb3430b3ad4d5fd1af83a9d
		
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		$_matchFixtureID = $request->getParameter('match_fixture_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		
		//$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		//$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		//$_orgTokenID = $_defaultSuperAdmin ? null:sha1(md5(trim($this->getUser()->getAttribute('orgTokenID'))));
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		$_candidateParticipantTeams = TournamentMatchTable::processCandidateTournamentMatchParticipantTeams ( $_orgID, $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_keyword, $_offset, $_limit ); 
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('candidate_participant_team', array('_candidateParticipantTeams' => $_candidateParticipantTeams, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	public function executeCandidateTournamentMatchParticipants(sfWebRequest $request)
	{
		//=15&=a48232bbae74fc17baeca29760006c8881ee6815&=1&=81f85a62f6e4419c4bb3430b3ad4d5fd1af83a9d&=1&=f7d23e8ba378bc0c248f5db3e660f552ddc10458
		
		$_participantTeamID = $request->getParameter('participant_team_id');	
		$_participantTeamTokenID = $request->getParameter('participant_team_token_id');	
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		$_matchFixtureID = $request->getParameter('match_fixture_id');	
		$_matchFixtureTokenID = $request->getParameter('match_fixture_token_id');	
		$_sporttGameTeamGroupID = $request->getParameter('sport_game_group_team_id');	
		$_sporttGameTeamGroupTokenID = $request->getParameter('sport_game_group_team_token_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		
		//$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		//$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		//$_orgTokenID = $_defaultSuperAdmin ? null:sha1(md5(trim($this->getUser()->getAttribute('orgTokenID'))));
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		$_candidateParticipants = TournamentMatchTable::selectCandidateParticipantTeamMembers( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameID, $_genderCategory, $_keyword, $_offset, $_limit ); 
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('team_group/candidate_team_member_participants', array('_candidateParticipants' => $_candidateParticipants, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
	
	/************  Candidate Navigation Selection Functions **************/
	
	public function executeCandidateSportGameGroups(sfWebRequest $request)
	{
		$_categoryID = $request->getParameter('sport_game_category');	
		//$_tokenID = $request->getParameter('token_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		
		//$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		//$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		//$_orgTokenID = $_defaultSuperAdmin ? null:sha1(md5(trim($this->getUser()->getAttribute('orgTokenID'))));
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		$_candidateParticipantTeams = TeamTable::processSelection ( $_orgID, $_orgTokenID, $_activeFlag, $_keyword, $_offset, $_limit ); 
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('team/candidate_team', array('_candidateTeams' => $_candidateParticipantTeams, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
	
	/************  Candidate Navigation Selection Functions **************/
	
	
	public function executeSearch(sfWebRequest $request)
	{
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		$_limit = $request->getParameter("limit");
		$_offset = $request->getParameter("offset");
		$_classID = $request->getParameter("class_id");
		$_keyword = $request->getParameter("keyword");
		$_keyword = '%' . $_keyword . '%';
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 35;			 
		if(!$_classID || $_classID == '' ) $_classID = null;			 
		if(!$_keyword || $_keyword == '' ) $_keyword = null;			 
		
		$_products = ItemProductTable::processSelection ( $_orgID, sha1(md5($_orgTokenID)), $_classID, $_exclusion, $_status, $_keyword, $_offset, $_limit );
		$_countProducts = ItemProductTable::processAll ( $_orgID, sha1(md5($_orgTokenID)), $_classID, $_exclusion, $_status, $_keyword);
		if (!$_products)
		{
			return $this->renderPartial('error', array('_products' => $_products));
		}
			
		return $this->renderPartial('list', array('_products' => $_products, '_countProducts' => $_countProducts));

	}
}

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
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		//$this->_teams = TeamTable::processSelection ( $_orgID, $_orgTokenID, $_activeFlag, $_keyword, 0, 10 );
		$this->_tournamentMatchs = TournamentMatchTable::processSelection ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword, 0, 50  );
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
		$this->_candidateGameCategorys = GameCategoryTable::processSelection ( $_orgID, $_orgTokenID, $_keyword, 0, 50  ) ;
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
		//$this->_candidateGameCategorys = GameCategoryTable::processSelection ( $_orgID, $_orgTokenID, $_keyword, 0, 50  ) ;
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
		$_matchResultMode = $_tournamentMatch['tournament_match_result_mode'];	 
		$_status = $_tournamentMatch['match_status'];	 
		$_matchDate = $_tournamentMatch['match_date'];	 
		$_description = $_tournamentMatch['description'];	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_tournamentMatch =  TournamentMatchTable::processNew ( $_orgID, $_orgTokenID, $_tournamentID, $_tournamentTokenID, $_sportGameCategoryID, $_sportGameCategoryName, $_tournamentMatchName, $_contestantTeamMode, $_matchRoundMode, $_matchResultMode, $_matchDate, $_status, $_description, $_userID, $_userTokenID );  
				 
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
		$_tournamentID = $this->getUser()->getAttribute('activeTournamentID');  
		
		$this->_tournamentMatch = TournamentMatchTable::processObject ( $_orgID, sha1(md5($_orgTokenID)), $_tournamentMatchID, $_tournamentMatchTokenID );
		$_contestantTeamMode = $this->_tournamentMatch->contestantTeamMode;
		//$this->_matchFixtures = TournamentMatchFixtureTable::processSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_gameTypeID, $_keyword, 0, 50  ) ;
		
		$this->_tournamentFixtureGroups =  TournamentMatchTable::selectCandidateTournamentMatchFixtures ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_contestantTeamMode, $_keyword, 0, 50); 
		
		//$this->_tournamentFixtureGroups =  TournamentMatchFixtureGroupTable::processSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_keyword, 0, 50); 
		
		//$this->_candidateMatchFixtureGroups = TournamentMatchFixtureGroupTable::selectCandidateFixtureGroups ( $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID);
		
		//$_tournamentSportGameGroups =  TournamentMatchTable::selectCandidateTournamentSportGameGroups ( $_tournamentMatchID, $_tournamentMatchTokenID, $_tournamentFixtureID, $_sportGameTypeID, $_sportGameID, $_keyword, 0, 50); 
		//$this->_tournamentSportGameGroups =  TournamentMatchTable::selectCandidateTournamentSportGameGroups ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_tournamentFixtureID, $_sportGameTypeID, $_sportGameID, $_keyword, 0, 50);
		
		//$this->_tournamentSportGameGroups =  TournamentMatchTable::selectCandidateTournamentSportGameGroups ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_tournamentFixtureID, $_sportGameTypeID, $_sportGameID, TournamentCore::$_APPROVED, TournamentCore::$_ACTIVE, $_keyword, 0, 50); 
		
		$this->_tournamentSportGameGroups =  TournamentMatchTable::selectCandidateTournamentSportGameGroups ( $_tournamentMatchID, $_tournamentMatchTokenID, $_tournamentFixtureID, $_sportGameTypeID, $_sportGameID, $_contestantTeamMode, $_keyword, 0, 50); 
		
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
		$_heatsPerFixture = $request->getParameter('number_of_heats_per_group');	 
		$_qualifyingStatus = $request->getParameter('qualifying_status');	 
			 
		$_qualifyingRowNumbers = $request->getParameter('qualifying_row_numbers');	 
		$_qualifyingRowNumbersFlag = $request->getParameter('qualifing_row_numbers_flag');	 
		$_bestQqualifyingRowNumbers = $request->getParameter('best_qualifying_row_numbers');	 
		$_bestQqualifyingRowNumbersFlag = $request->getParameter('best_qualifing_row_numbers_flag');
		
		$_tournamentMatchSession = $request->getParameter('tournament_match_session');	 
		$_tournamentMatchNumber = $request->getParameter('tournament_match_number');	 
		$_matchStatus = $request->getParameter('match_status');	 
		$_matchTime = $request->getParameter('match_time');	 
		$_matchDate = $request->getParameter('match_date');	 
		$_remark = $request->getParameter('remark');	
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_flag =  TournamentMatchFixtureTable::processNew ( $_orgID, $_orgTokenID, $_parentMatchID, $_parentMatchTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_sportGameID, $_sportGameTokenID, $_sportGameGroupName, $_matchRoundMode, $_genderCategory, $_eventType, $_contestantTeamMode, $_contestantMode, $_tournamentMatchVenue, $_matchTime, $_matchDate, $_tournamentMatchSession, $_tournamentMatchNumber, $_heatsPerFixture, $_qualifyingRowNumbers, $_bestQqualifyingRowNumbers, $_qualifyingRowNumbersFlag, $_bestQqualifyingRowNumbersFlag, $_qualifyingStatus, $_matchStatus, $_remark, $_description, $_userID, $_userTokenID  );  
				 
		return $_flag ? true:false;
		
	}
	public function executeParticipant_group(sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('match_id');	
		$_tournamentMatchTokenID = $request->getParameter('token_id');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_tournamentID = $this->getUser()->getAttribute('activeTournamentID');  
		
		$this->_tournamentMatch = TournamentMatchTable::processObject ( $_orgID, sha1(md5($_orgTokenID)), $_tournamentMatchID, $_tournamentMatchTokenID );
		
		$this->_candidateTournamentMatchFixtureGroups = TournamentMatchFixtureGroupTable::makeCandidateFixtureSelection ( $_tournamentMatchID, $_tournamentMatchTokenID, $_processStatus, $_approvalStatus, TournamentCore::$_ACTIVE, $_keyword, 0, 50  ) ;
		//$this->_candidateTournamentMatchFixtureGroups = TournamentMatchFixtureGroupTable::makeCandidateFixtureSelection ( $_tournamentMatchID, $_tournamentMatchTokenID, TournamentCore::$_ACTIVE, $_approvalStatus, $_status, $_keyword, 0, 50  ) ;
		
		//$this->_candidateMatchFixtures = TournamentMatchTable::selectCandidateTournamentMatchParticipantFixtures ( $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_genderCategoryID, 1, $_keyword, 0, 50 ); 
		///$this->_candidateMatchFixtures = TournamentMatchFixtureGroupTable::selectCandidates ( $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameTypeID, $_processStatus, $_approvalStatus, $_exclusion, $_keyword, 0, 50);
		
		//$this->_matchParticipantTeams= TournamentMatchParticipantTeamTable::processSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameGroupID, $_sportGameID, $_teamID, $_keyword, 0, 50  ) ;
		
		//$this->_candidateMatchFixtures = TournamentMatchTable::selectCandidateTournamentMatchParticipantFixtures ( $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_genderCategoryID, 1, $_keyword, 0, 50); 
		
		//$this->_tournamentSportGameGroups =  TournamentMatchTable::selectCandidateTournamentFixtureSportGameGroups ( $_tournamentMatchID, $_tournamentMatchTokenID, $_tournamentFixtureID, $_sportGameID, $_genderCategory, $_approvalStatus, $_status, $_keyword, 0, 50); 
		
		//$this->_tournamentSportGameOpponentGroups =  TournamentMatchTable::selectCandidateTournamentFixtureSportGameGroups ( $_tournamentMatchID, $_tournamentMatchTokenID, $_tournamentFixtureID, 26, 1, $_approvalStatus, $_status, $_keyword, 0, 50); 
		
	}
	//
	public function executeCreateTournamentMatchGroupParticipant(sfWebRequest $request)
	{
		//match_fixture= - Table Tennis Single Player  - Men (Table Tennis)&=5&=90d8a6cd8c7f1f4bd2346b4f3de0edc04bf5f208&gender_category_id=1&=5&=90d8a6cd8c7f1f4bd2346b4f3de0edc04bf5f208&sport_game_id=26&contestant_team_mode=1&match_fixture_contestant_team_mode=1&tournament_contestant_team_mode=1&=2&=b2c2b256c170f31930f600e4c74b7663609dcef7&tournament_match_game_category_id=7&tournament_sport_game_group_name=Group One - Table Tennis Single Player (Men) -  - Table Tennis&tournament_sport_game_group_id=8&tournament_sport_game_group_token_id=44313725ac582f3d20c754cb0ebac3a5db956075&participant_team_name=Kampala International University (KIU) - Uganda&participant_team_id=10&participant_team_token_id=603685d0aa5cb85003333d48b14e66c5a0b458b6&sport_game_group_team_id=78&sport_game_group_team_token_id=983981bbe51701778510e9007f45d6ea67a1cd61&tournament_sport_game_group_opponent_name=Group One - Table Tennis Single Player (Men) -  - Table Tennis&tournament_sport_game_group_opponent_id=8&tournament_sport_game_group_opponent_token_id=44313725ac582f3d20c754cb0ebac3a5db956075&opponent_participant_team_name=Bayero University (BU) - Nigeria&opponent_participant_team_id=6&opponent_participant_team_token_id=f7c75d07758e88589f904628b142f31940c7ca9e&opponent_sport_game_group_team_id=74&opponent_sport_game_group_team_token_id=762426cc7f5c64c68e4553ef5ab50a2f2e94bebb&sport_game_venue_name=Mekelle Tigray Stadium&sport_game_group_type_id=&match_date=07/03/2018&match_time=8:00 AM&tournament_match_time_value=8:00&tournament_match_session=1&description=
		
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
		
		$_sportGameOpponentGroupID = $request->getParameter('tournament_sport_game_group_opponent_id');	
		$_sportGameOpponentGroupTokenID = $request->getParameter('tournament_sport_game_group_opponent_token_id');	
		$_opponentParticipantTeamGroupID = $request->getParameter('opponent_sport_game_group_team_id');	
		$_opponentParticipantTeamGroupTokenID = $request->getParameter('opponent_sport_game_group_team_token_id');	
		
		$_opponentParticipantTeamID = $request->getParameter('opponent_participant_team_id');	
		$_opponentParticipantTeamTokenID = $request->getParameter('opponent_participant_team_token_id');	
		
		$_contestantTeamMode = $request->getParameter('tournament_contestant_team_mode');	
		$_matchFixtureName = $request->getParameter('match_fixture');	
		$_participantTeamName = $request->getParameter('participant_team_name');	
		$_opponentParticipantTeamName = $request->getParameter('tournament_sport_game_group_opponent_name');	
		$_genderCategory = $request->getParameter('gender_category_id');	
		$_tournamentMatchVenu = $request->getParameter('sport_game_venue_name');	 
		$_matchTime = $request->getParameter('match_time');	 
		$_matchDate = $request->getParameter('match_date');	
		$_tournamentMatchSession = $request->getParameter('tournament_match_session');
		
		$_matchStatus = $request->getParameter('match_status');	 
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_flag =  TournamentMatchParticipantTeamTable::processNew ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureTokenID, $_matchFixtureGroupID, $_matchFixtureGroupTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamGroupID, $_participantTeamGroupTokenID, $_sportGameOpponentGroupID, $_sportGameOpponentGroupTokenID, $_opponentParticipantTeamGroupID, $_opponentParticipantTeamGroupTokenID, $_opponentParticipantTeamID, $_opponentParticipantTeamTokenID, $_matchFixtureName, $_participantTeamName, $_opponentParticipantTeamName, $_tournamentMatchVenu, $_matchDate, $_matchTime, $_tournamentMatchSession, $_matchStatus, $_description, $_contestantTeamMode, SystemCore::$_SINGLE_DATA, $_userID, $_userTokenID );
		
		 
		return $_flag ? true:false;
		
	}
	public function executeCreateBatchTournamentMatchGroupParticipantm(sfWebRequest $request)
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
		$_tournamentMatchSession = $request->getParameter('tournament_match_session');
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
		
		
		$_flag =  TournamentMatchParticipantTeamTable::processNew ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureTokenID, $_matchFixtureGroupID, $_matchFixtureGroupTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamGroupID, $_participantTeamGroupTokenID, $_opponentParticipantTeamGroupID, $_opponentParticipantTeamGroupTokenID, $_matchFixtureName, $_participantTeamName, $_opponentParticipantTeamName, $_tournamentMatchVenu, $_matchDate, $_matchTime, $_tournamentMatchSession, $_matchStatus, $_description, $_contestantTeamMode, SystemCore::$_MULTIPLE_DATA, $_userID, $_userTokenID );
		
		return $_flag ? true:false;
		
	}
	public function executeParticipant_team(sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('match_id');	
		$_tournamentMatchTokenID = $request->getParameter('token_id');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_tournamentID = $this->getUser()->getAttribute('activeTournamentID');  
		
		$this->_tournamentMatch = TournamentMatchTable::processObject ( $_orgID, sha1(md5($_orgTokenID)), $_tournamentMatchID, $_tournamentMatchTokenID );
		
		$this->_candidateTournamentMatchFixtureGroups = TournamentMatchFixtureGroupTable::makeCandidateFixtureSelection ( $_tournamentMatchID, $_tournamentMatchTokenID, $_processStatus, $_approvalStatus, TournamentCore::$_ACTIVE, $_keyword, 0, 50  ) ;
		//$this->_candidateTournamentMatchFixtureGroups = TournamentMatchFixtureGroupTable::makeCandidateFixtureSelection ( $_tournamentMatchID, $_tournamentMatchTokenID, TournamentCore::$_ACTIVE, $_approvalStatus, $_status, $_keyword, 0, 50  ) ;
		
		//$this->_candidateMatchFixtures = TournamentMatchTable::selectCandidateTournamentMatchParticipantFixtures ( $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_genderCategoryID, 1, $_keyword, 0, 50 ); 
		///$this->_candidateMatchFixtures = TournamentMatchFixtureGroupTable::selectCandidates ( $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameTypeID, $_processStatus, $_approvalStatus, $_exclusion, $_keyword, 0, 50);
		
		//$this->_matchParticipantTeams= TournamentMatchParticipantTeamTable::processSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameGroupID, $_sportGameID, $_teamID, $_keyword, 0, 50  ) ;
		
		//$this->_candidateMatchFixtures = TournamentMatchTable::selectCandidateTournamentMatchParticipantFixtures ( $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_genderCategoryID, 1, $_keyword, 0, 50); 
		
		//$this->_tournamentSportGameGroups =  TournamentMatchTable::selectCandidateTournamentFixtureSportGameGroups ( $_tournamentMatchID, $_tournamentMatchTokenID, $_tournamentFixtureID, $_sportGameID, $_genderCategory, $_approvalStatus, $_status, $_keyword, 0, 50); 
		
		//$this->_tournamentSportGameOpponentGroups =  TournamentMatchTable::selectCandidateTournamentFixtureSportGameGroups ( $_tournamentMatchID, $_tournamentMatchTokenID, $_tournamentFixtureID, 26, 1, $_approvalStatus, $_status, $_keyword, 0, 50); 
		//$this->_tournamentSportGameOpponentGroups =  TournamentMatchTable::selectCandidateTournamentFixtureSportGameGroups ( $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_genderCategory, $_keyword, 0, 50); 
		
	}
	public function executeCreateTournamentMatchParticipantTeam(sfWebRequest $request)
	{
		//match_fixture= - Table Tennis Single Player  - Men (Table Tennis)&=5&=90d8a6cd8c7f1f4bd2346b4f3de0edc04bf5f208&gender_category_id=1&=5&=90d8a6cd8c7f1f4bd2346b4f3de0edc04bf5f208&sport_game_id=26&contestant_team_mode=1&match_fixture_contestant_team_mode=1&tournament_contestant_team_mode=1&=2&=b2c2b256c170f31930f600e4c74b7663609dcef7&tournament_match_game_category_id=7&tournament_sport_game_group_name=Group One - Table Tennis Single Player (Men) -  - Table Tennis&tournament_sport_game_group_id=8&tournament_sport_game_group_token_id=44313725ac582f3d20c754cb0ebac3a5db956075&participant_team_name=Kampala International University (KIU) - Uganda&participant_team_id=10&participant_team_token_id=603685d0aa5cb85003333d48b14e66c5a0b458b6&sport_game_group_team_id=78&sport_game_group_team_token_id=983981bbe51701778510e9007f45d6ea67a1cd61&tournament_sport_game_group_opponent_name=Group One - Table Tennis Single Player (Men) -  - Table Tennis&tournament_sport_game_group_opponent_id=8&tournament_sport_game_group_opponent_token_id=44313725ac582f3d20c754cb0ebac3a5db956075&opponent_participant_team_name=Bayero University (BU) - Nigeria&opponent_participant_team_id=6&opponent_participant_team_token_id=f7c75d07758e88589f904628b142f31940c7ca9e&opponent_sport_game_group_team_id=74&opponent_sport_game_group_team_token_id=762426cc7f5c64c68e4553ef5ab50a2f2e94bebb&sport_game_venue_name=Mekelle Tigray Stadium&sport_game_group_type_id=&match_date=07/03/2018&match_time=8:00 AM&tournament_match_time_value=8:00&tournament_match_session=1&description=
		
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		
		$_matchFixtureID = $request->getParameter('match_fixture_id');	
		$_matchFixtureTokenID = $request->getParameter('match_fixture_token_id');	
		$_matchFixtureGroupID = $request->getParameter('tournament_match_fixture_group_id');	
		$_matchFixtureGroupTokenID = $request->getParameter('tournament_match_fixture_token_group_id');	
		
		$_sportGameGroupID = $request->getParameter('tournament_sport_game_group_id');	
		$_sportGameGroupTokenID = $request->getParameter('tournament_sport_game_group_token_id');	
		$_sportGameGroupName = $request->getParameter('tournament_sport_game_group_name');	
		$_participantTeamGroupID = $request->getParameter('sport_game_group_team_id');	
		$_participantTeamGroupTokenID = $request->getParameter('sport_game_group_team_token_id');	
		
		$_sportGameOpponentGroupID = $request->getParameter('tournament_sport_game_group_opponent_id');	
		$_sportGameOpponentGroupTokenID = $request->getParameter('tournament_sport_game_group_opponent_token_id');	
		$_sportGameOpponentGroupName = $request->getParameter('tournament_sport_game_group_opponent_name');	
		$_opponentParticipantTeamGroupID = $request->getParameter('opponent_sport_game_group_team_id');	
		$_opponentParticipantTeamGroupTokenID = $request->getParameter('opponent_sport_game_group_team_token_id');	
		
		$_opponentParticipantTeamID = $request->getParameter('opponent_participant_team_id');	
		$_opponentParticipantTeamTokenID = $request->getParameter('opponent_participant_team_token_id');	
		
		$_contestantTeamMode = $request->getParameter('tournament_contestant_team_mode');	
		$_matchFixtureName = $request->getParameter('match_fixture');	
		$_participantTeamName = $request->getParameter('participant_team_name');	
		$_opponentParticipantTeamName = $request->getParameter('tournament_sport_game_group_opponent_name');	
		$_genderCategory = $request->getParameter('gender_category_id');	
		$_tournamentMatchVenu = $request->getParameter('sport_game_venue_name');	 
		$_matchTime = $request->getParameter('match_time');	 
		$_matchDate = $request->getParameter('match_date');	
		$_tournamentMatchSession = $request->getParameter('tournament_match_session');
		
		$_matchStatus = $request->getParameter('match_status');	 
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_flag =  TournamentMatchParticipantTeamTable::processNew ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureTokenID, $_matchFixtureGroupID, $_matchFixtureGroupTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamGroupID, $_participantTeamGroupTokenID, $_sportGameOpponentGroupID, $_sportGameOpponentGroupTokenID, $_opponentParticipantTeamGroupID, $_opponentParticipantTeamGroupTokenID, $_opponentParticipantTeamID, $_opponentParticipantTeamTokenID, $_matchFixtureName, $_participantTeamName, $_sportGameGroupName, $_sportGameOpponentGroupName, $_opponentParticipantTeamName, $_tournamentMatchVenu, $_matchDate, $_matchTime, $_tournamentMatchSession, $_matchStatus, $_description, $_contestantTeamMode, SystemCore::$_SINGLE_DATA, $_userID, $_userTokenID );
		
		 
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
		$_tournamentMatchSession = $request->getParameter('tournament_match_session');
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
		
		
		$_flag =  TournamentMatchParticipantTeamTable::processNew ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureTokenID, $_matchFixtureGroupID, $_matchFixtureGroupTokenID, $_sportGameGroupID, $_sportGameGroupTokenID, $_participantTeamGroupID, $_participantTeamGroupTokenID, $_opponentParticipantTeamGroupID, $_opponentParticipantTeamGroupTokenID, $_matchFixtureName, $_participantTeamName, $_opponentParticipantTeamName, $_tournamentMatchVenu, $_matchDate, $_matchTime, $_tournamentMatchSession, $_matchStatus, $_description, $_contestantTeamMode, SystemCore::$_MULTIPLE_DATA, $_userID, $_userTokenID );
		
		return $_flag ? true:false;
		
	}
	public function executeParticipant(sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('match_id');	
		$_tournamentMatchTokenID = $request->getParameter('token_id');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		$this->_tournamentMatch = TournamentMatchTable::processObject ( $_orgID, sha1(md5($_orgTokenID)), $_tournamentMatchID, $_tournamentMatchTokenID );
		
		$this->_candidateMemeberParticipants = TournamentMatchTeamMemberParticipantTable::processSelection ( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_teamID, $_keyword, 0, 50  ) ; 
		
		//$this->_candidateParticipantTeams = TournamentMatchTable::selectCandidateMatchFixtureGroupParticipantTeams ( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameID, $_genderCategory, $_keyword, 0, 50  ); 
		
		//$this->_candidateParticipantTeams = TournamentMatchParticipantTeamTable::processSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameGroupID, $_sportGameID, $_keyword, 0, 50  ) ;
		
		//$this->_candidateMatchParticipantTeams = TournamentMatchTable::selectCandidateMatchFixtureGroupParticipantTeams ( $_tournamentMatchID, $_tournamentMatchTokenID, 1, $_matchFixtureGroupID, $_sportGameID, $_genderCategory, $_keyword, 0, 50 ); 
		
		//$this->_candidateParticipants = TournamentMatchTable::selectCandidateMatchFixtureGroupParticipantTeamMembers( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_participantTeamID, $_participantTeamTokenID, $_sportGameID, $_genderCategory, $_keyword, 0, 50 ); 
	}
	public function executeCreateTournamentMatchParticipantTeamMember(sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		
		$_matchFixtureName = $request->getParameter('match_fixture');	
		$_matchFixtureID = $request->getParameter('match_fixture_id');	
		$_matchFixtureTokenID = $request->getParameter('match_fixture_token_id');	
		$_matchFixtureGroupID = $request->getParameter('tournament_match_fixture_group_id');	
		$_matchFixtureGroupTokenID = $request->getParameter('tournament_match_fixture_token_group_id');	
		
		$_participantTeamName = $request->getParameter('participant_team_name');	
		$_participantTeamID = $request->getParameter('participant_team_id');	
		$_participantTeamTokenID = $request->getParameter('participant_team_token_id');	
		
		$_participantMemberName = $request->getParameter('participant_name');	
		$_participantMemberRoleID = $request->getParameter('participant_role_id');	
		$_participantMemberRoleTokenID = $request->getParameter('participant_role_token_id');	
		$_participantMemberID = $request->getParameter('participant_member_id');	
		$_participantMemberTokenID = $request->getParameter('participant_member_token_id');	
		
		$_genderCategory = $request->getParameter('gender_category_id');	
		
		$_batchCreationMode = $request->getParameter('match_participant_creation_mode');	 
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_flag =  TournamentMatchTeamMemberParticipantTable::processNew ( $_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureTokenID, $_matchFixtureGroupID, $_matchFixtureGroupTokenID, $_participantTeamID, $_participantTeamTokenID, $_participantMemberRoleID, $_participantMemberRoleTokenID, $_participantMemberID, $_participantMemberTokenID, $_matchFixtureName, $_participantTeamName, $_participantMemberName, $_genderCategory, $_description, $_batchCreationMode, SystemCore::$_SINGLE_DATA, $_userID, $_userTokenID );  
		
		return $_flag ? true:false;
		
	}
	public function executeCreateBatchMatchFixtureGroupParticipantTeamMembers(sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		
		$_matchFixtureName = $request->getParameter('match_fixture');	
		$_matchFixtureID = $request->getParameter('match_fixture_id');	
		$_matchFixtureTokenID = $request->getParameter('match_fixture_token_id');	
		$_matchFixtureGroupID = $request->getParameter('tournament_match_fixture_group_id');	
		$_matchFixtureGroupTokenID = $request->getParameter('tournament_match_fixture_token_group_id');	
		
		$_participantTeamName = $request->getParameter('participant_team_name');	
		$_participantTeamID = $request->getParameter('participant_team_id');	
		$_participantTeamTokenID = $request->getParameter('participant_team_token_id');	
		
		$_participantMemberName = $request->getParameter('participant_name');	
		$_participantMemberRoleID = $request->getParameter('participant_role_id');	
		$_participantMemberRoleTokenID = $request->getParameter('participant_role_token_id');	
		$_participantMemberID = $request->getParameter('participant_member_id');	
		$_participantMemberTokenID = $request->getParameter('participant_member_token_id');	
		
		$_genderCategory = $request->getParameter('gender_category_id');	
		
		$_batchCreationMode = $request->getParameter('match_participant_creation_mode');	 
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_flag =  TournamentMatchTeamMemberParticipantTable::processNew ($_orgID, $_orgTokenID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureTokenID, $_matchFixtureGroupID, $_matchFixtureGroupTokenID, $_participantTeamID, $_participantTeamTokenID, $_participantMemberRoleID, $_participantMemberRoleTokenID, $_participantMemberID, $_participantMemberTokenID, $_matchFixtureName, $_participantTeamName, $_participantMemberName, $_genderCategory, $_description, TournamentCore::$_BATCH_CREATION_MODE, $_dataCreationMode, $_userID, $_userTokenID);  
		
		return $_flag ? true:false;
	}
	public function executeComplete(sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('match_id');	
		$_tournamentMatchTokenID = $request->getParameter('token_id');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_tournamentID = $this->getUser()->getAttribute('activeTournamentID');  
		
		$this->_tournamentMatch = TournamentMatchTable::processObject ( $_orgID, sha1(md5($_orgTokenID)), $_tournamentMatchID, $_tournamentMatchTokenID );
		
		$this->_tournamentMatchFixtureGroups = TournamentMatchFixtureGroupTable::processSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_keyword, 0, 50  ) ;
		
		$this->_candidateMemeberParticipants = TournamentMatchTeamMemberParticipantTable::processSelection ( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_teamID, $_keyword, 0, 50  ) ; 
		
		//$this->_matchParticipantTeams = TournamentMatchFixtureGroupTable::processSelection ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_keyword, 0, 50  ) ;
		
		//$this->_tournamentMatchFixtures = TournamentMatchFixtureTable::selectCandidates ( $_tournamentMatchID, $_tournamentMatchTokenID, false, $_parentFlag, false, TournamentCore::$_PENDING, TournamentCore::$_PENDING);
		
		//$this->_matchParticipantTeamMembers = TournamentMatchTeamMemberParticipantTable::processSelection ( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureGroupID, $_sportGameID, $_teamID, $_keyword, 0, 50  ) ;
		
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
		
		$_flag = TournamentMatchTable::processApproval ( $_orgID, sha1(md5($_orgTokenID)), $_tournamentMatchID, $_tournamentMatchTokenID, $_userID, $_userTokenID ); 
		
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
		
		$_flag = TournamentMatchTable::processCompletion ( $_orgID, sha1(md5($_orgTokenID)), $_tournamentMatchID, $_tournamentMatchTokenID, $_userID, $_userTokenID ); 
		
		return $_flag ? true:false;
		
	}
	
  /*********************************************************************/
  /************************ Candidate Selection ***********************
  //********************************************************************/
  
  /****************** Fixture Action ***********************/
  
	public function executeCandidateSportGameCategory(sfWebRequest $request)
	{
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		//$_offset = $request->getParameter('offset');	
		//$_limit = $request->getParameter('limit');	
		
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 50;			 

		$_candidateGameCategorys = TournamentMatchTable::selectCandidateTournamentGameCategorys ( $_orgID, sha1(md5($_orgTokenID)), $_keyword, $_offset, $_limit ); 
		
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
		if(!$_limit || $_limit=='' ) $_limit = 50;			 

		$_candidateMatchFixtures = TournamentMatchTable::processCandidateMatchFixtures ( $_orgID, $_orgTokenID, $_tournamentID, $_parentMatchID, $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameTypeID, $_keyword, $_offset, $_limit ); 
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('candidate_match_fixtures', array('_candidateMatchFixtures' => $_candidateMatchFixtures, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
	public function executeCandidateSportGameGroup(sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		$_sportGameTypeID = $request->getParameter('sport_game_type_id');	
		$_contestantTeamMode = $request->getParameter('tournament_contestant_team_mode');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 50;			 

		$_tournamentSportGameGroups =  TournamentMatchTable::selectCandidateTournamentSportGameGroups ( $_tournamentMatchID, $_tournamentMatchTokenID, $_tournamentFixtureID, $_sportGameTypeID, $_sportGameID, $_contestantTeamMode, $_keyword, $_offset, $_limit); 
		
		return $this->renderPartial('team_group/candidate_tournament_groups', array('_tournamentSportGameGroups' => $_tournamentSportGameGroups, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
	 /****************** Participant Team Action ***********************/
	 
	public function executeCandidateTournamentFixtureSportGameGroup(sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		$_sportGameID = $request->getParameter('sport_game_id');	
		$_genderCategory = $request->getParameter('gender_category_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 50;			 

		$_tournamentSportGameGroups =  TournamentMatchTable::selectCandidateTournamentFixtureSportGameGroups ( $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_genderCategory, $_keyword, $_offset, $_limit); 
		
		return $this->renderPartial('candidate_tournament_groups', array('_tournamentSportGameGroups' => $_tournamentSportGameGroups, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	//
	public function executeCandidateTournamentFixtureSportGameOpponentGroup(sfWebRequest $request)
	{
		//tournament_match_id=2&tournament_match_token_id=b2c2b256c170f31930f600e4c74b7663609dcef7&sport_game_id=26&gender_category_id=1
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		$_sportGameID = $request->getParameter('sport_game_id');	
		$_genderCategory = $request->getParameter('gender_category_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 50;			 

		$_tournamentSportGameOpponentGroups =  TournamentMatchTable::selectCandidateTournamentFixtureSportGameGroups ( $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_genderCategory, $_keyword, $_offset, $_limit); 
		
		return $this->renderPartial('candidate_tournament_opponent_groups', array( '_tournamentSportGameOpponentGroups' => $_tournamentSportGameOpponentGroups, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	 
  /****************** Participant Team Action ***********************/
	
	public function executeCandidateTournamentMatchParticipantFixtures(sfWebRequest $request)
	{
		
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		$_sportGameTypeID = $request->getParameter('tournament_match_game_category_id');	
		$_contestantTeamMode = $request->getParameter('tournament_contestant_team_mode');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 50;			 

		$_candidateMatchFixtures = TournamentMatchTable::selectCandidateTournamentMatchParticipantFixtures ( $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_genderCategoryID, $_contestantTeamMode, $_keyword, $_offset, $_limit); 
		
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
		if(!$_limit || $_limit=='' ) $_limit = 50;			 

		$_candidateParticipantTeams = TournamentMatchTable::selectCandidateParticipantTeams ( $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameGroupID, $_sportGameID, $_genderCategory, $_keyword, $_offset, $_limit );
		 
		//$_candidateParticipantTeams = TournamentMatchTable::selectAllCandidateParticipantTeams ( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_sportGameGroupID, $_sportGameID, $_genderCategory, $_keyword ); 
		
		
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
		if(!$_limit || $_limit=='' ) $_limit = 50;			 

		$_candidateParticipantTeams = TournamentMatchTable::selectCandidateOpponentParticipantTeams ( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_opponentParticipantTeamID, $_sportGameGroupID, $_sportGameID, $_genderCategory, $_keyword, $_offset, $_limit ); 
		
		
		return $this->renderPartial('candidate_group_member_opponent_team', array('_candidateMemberTeams' => $_candidateParticipantTeams, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
  /****************** Latest Participant Action ***********************/
	
	// Tournament Match Fixture Group Selection */
	public function executeCandidateTournamentMatchParticipantFixtureGroups(sfWebRequest $request)
	{
		
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		$_sportGameTypeID = $request->getParameter('tournament_match_game_category_id');	
		$_contestantTeamMode = $request->getParameter('tournament_contestant_team_mode');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 50;			 

		$_candidateMatchFixtures = TournamentMatchTable::selectCandidateTournamentMatchFixtureGroups ( $_tournamentMatchID, $_tournamentMatchTokenID, $_sportGameID, $_sportGameTypeID, $_genderCategoryID, $_contestantTeamMode, $_keyword, $_offset, $_limit); 
		
		return $this->renderPartial('candidate_match_fixtures', array('_candidateMatchFixtures' => $_candidateMatchFixtures, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
	// Tournament Match Fixture Group Participant Team Selection */
	public function executeCandidateMatchFixtureGroupParticipantTeams(sfWebRequest $request)
	{
		//
		//tournament_match_id=1&tournament_match_token_id=881275b4bd93f934188c8483e17ad1357f5dd682&match_fixture_id=1&match_fixture_token_id=9248cc14f48fcd09ddf3ea1538ecdd49844651a4&match_fixture_token_id=9248cc14f48fcd09ddf3ea1538ecdd49844651a4&match_fixture_token_id=9248cc14f48fcd09ddf3ea1538ecdd49844651a4&tournament_match_fixture_group_id=1&gender_category_id=1
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		$_matchFixtureID = $request->getParameter('match_fixture_id');	
		//$_matchFixtureGroupID = $request->getParameter('tournament_match_fixture_group_id');	
		//$_sportGameGroupID = $request->getParameter('tournament_sport_game_group_id');	
		//$_genderCategoryID = $request->getParameter('gender_category_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');	
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 50;			 

		$_candidateParticipantTeams = TournamentMatchTable::selectCandidateMatchFixtureGroupParticipantTeams ( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_matchFixtureGroupID, $_sportGameID, $_genderCategory, $_keyword, $_offset, $_limit ); 
		
		
		return $this->renderPartial('candidate_participant_team', array('_candidateParticipantTeams' => $_candidateParticipantTeams, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
	// Trounament Match Fixture Group Participant Team Member Selection 
	public function executeCandidateMatchFixtureGroupParticipantTeamMembers(sfWebRequest $request)
	{
		$_tournamentMatchID = $request->getParameter('tournament_match_id');	
		$_tournamentMatchTokenID = $request->getParameter('tournament_match_token_id');	
		$_matchFixtureID = $request->getParameter('match_fixture_id');	
		$_participantTeamID = $request->getParameter('team_id');	
		$_participantTeamTokenID = $request->getParameter('team_token_id');	
		//$_groupMemberTeamID = $request->getParameter('sport_game_group_team_id');	
		$_sportGameID = $request->getParameter('sport_game_id');	
		$_genderCategory = $request->getParameter('gender_category_id');	
		$_offset = $request->getParameter('offset');	
		$_limit = $request->getParameter('limit');
		 
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 50;				 

		$_candidateParticipants = TournamentMatchTable::selectCandidateMatchFixtureGroupParticipantTeamMembers( $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_participantTeamID, $_participantTeamTokenID, $_sportGameID, $_genderCategory, $_keyword, $_offset, $_limit ); 
		
		
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
		if(!$_limit || $_limit=='' ) $_limit = 50;			 

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
		if(!$_limit || $_limit=='' ) $_limit = 50;			 

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
		if(!$_limit || $_limit=='' ) $_limit = 50;			 

		$_candidateParticipantTeams = TournamentMatchTable::processCandidateTournamentMatchParticipantTeams ( $_orgID, $_tournamentID, $_tournamentMatchID, $_tournamentMatchTokenID, $_matchFixtureID, $_keyword, $_offset, $_limit ); 
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('candidate_participant_team', array('_candidateParticipantTeams' => $_candidateParticipantTeams, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	public function executeCandidateTournamentMatchParticipants(sfWebRequest $request)
	{
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
		if(!$_limit || $_limit=='' ) $_limit = 50;			 

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
		if(!$_limit || $_limit=='' ) $_limit = 50;			 

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
		if(!$_limit || $_limit=='' ) $_limit = 50;			 
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

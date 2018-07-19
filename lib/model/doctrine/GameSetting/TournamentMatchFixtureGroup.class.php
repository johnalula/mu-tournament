<?php

/**
 * TournamentMatchFixtureGroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    symfony
 * @subpackage model
 * @author     Mekonen Berhane
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class TournamentMatchFixtureGroup extends PluginTournamentMatchFixtureGroup
{
	public function makeMatchFixtureGroupCode ($_tournamentMatchNumber, $_matchFixtureID)
	{
		$_flag = true;    
			$this->tournament_match_group_number = $_tournamentMatchNumber.'-'.SystemCore::processCodeGeneratorInitialNumber(trim($_matchFixtureID)).'-'.SystemCore::processCodeGeneratorInitialNumber($this->id).'/'.date('y', time()); 
			$this->active_flag = false;   
			$this->competition_status = trim(TournamentCore::$_PENDING);   
			$this->process_status = trim(TournamentCore::$_PENDING);   
			$this->approval_status = trim(TournamentCore::$_PENDING);   
			$this->status = trim(TournamentCore::$_PENDING); 
			$this->save();
			
		return $_flag;
	}
	
	public function checkInitiated ()
	{
		return (($this->approval_status ==TournamentCore::$_INITIATED) && ($this->status ==TournamentCore::$_INITIATED)) ? true:false;
	}
	public function makePending ()
	{
		$_flag = true;   
			$this->approval_status = trim(TournamentCore::$_PENDING);   
			$this->status = trim(TournamentCore::$_PENDING); 
			$this->save();
			
		return $_flag;
	}
	public function makeActivation ()
	{
		$_flag = true;    
			$this->qualified_flag = true; 
			$this->confirmed_flag = true; 
			$this->active_flag = true;   
			$this->competition_status = trim(TournamentCore::$_ACTIVE);   
			$this->process_status = trim(TournamentCore::$_COMPLETED);   
			$this->approval_status = trim(TournamentCore::$_APPROVED);  
			$this->status = trim(TournamentCore::$_ACTIVE);   
			$this->save();

		return $_flag;
	}
	
	public function makeApproval ()
	{
		$_flag = true;   
			$this->confirmed_flag = true; 
			$this->active_flag = true;   
			$this->confirmed_status = trim(TournamentCore::$_PENDING); 
			$this->competition_status = trim(TournamentCore::$_PENDING);   
			$this->process_status = trim(TournamentCore::$_ACTIVE);   
			$this->approval_status = trim(TournamentCore::$_PENDING);   
			$this->status = trim(TournamentCore::$_PENDING);    
			$this->save();

		return $_flag;
	} 
	public function makeConfirmation ()
	{
		$_flag = true;    
			$this->qualified_flag = true; 
			$this->confirmed_flag = true; 
			$this->active_flag = true;   
			$this->competition_status = trim(TournamentCore::$_ACTIVE);   
			$this->process_status = trim(TournamentCore::$_COMPLETED);   
			$this->approval_status = trim(TournamentCore::$_APPROVED);  
			$this->status = trim(TournamentCore::$_ACTIVE);   
			$this->save();

		return $_flag;
	}
	public function makeCompletion ()
	{
		$_flag = true;   
		$_endDate = date('m/d/Y', time());  
		$this->active_flag = true;  
		$this->process_status = trim(TournamentCore::$_COMPLETED); 
		$this->approval_status = trim(TournamentCore::$_APPROVED); 
		$this->status = trim(TournamentCore::$_ACTIVE);  
		$this->effective_date = $this->effective_date ? $this->effective_date:$_endDate;  
		$this->save();
		return $_flag;
	}
	public function makeProcessFinalize ()
	{
		$_flag = true;   
		$_endDate = date('m/d/Y', time());  
		$this->active_flag = false;  
		$this->complete_flag = true;  
		$this->approval_status = trim(TournamentCore::$_COMPLETED); 
		$this->status = trim(TournamentCore::$_COMPLETED);  
		$this->end_date = $_endDate;  
		$this->save();
		return $_flag;
	}

	/************************************************/
	
	public function makeTournamentMatchSchedule($_tournamentMatchVenu, $_matchDate, $_matchTime, $_tournamentMatchSession)
	{
		$_flag = true;   
		$this->match_venue = trim($_tournamentMatchVenu); 
		$this->match_time = trim($_matchTime);  
		$this->match_date = trim($_matchDate);  
		$this->tournament_match_session_mode = trim($_tournamentMatchSession);  
		$this->save();
		return $_flag;
		
	}
	/************************************************/
	
	public function selectCandidateParticipantTeams ()
	{
		$_fixtureParticipantTeams = TournamentMatchParticipantTeamTable::makeCandidateGroupParticipantSelection ($this->id);
		
		$_participantTeams = array();   
		
		foreach($_fixtureParticipantTeams as $_fixtureParticipantTeam) {
			$_participantTeams[] = $_fixtureParticipantTeam->participantTeamName.' ( '.$_fixtureParticipantTeam->participantTeamAlias.' )';
		}
		
		return Wordlimit::wordTeaxtLimiter($_participantTeams[0],3).' '." --- ".' '.Wordlimit::wordTeaxtLimiter($_participantTeams[1],3);
		
	}
	public function selectCandidateParticipantTeamsAlias ()
	{
		$_fixtureParticipantTeams = TournamentMatchParticipantTeamTable::makeCandidateGroupParticipantSelection ($this->id);
		
		$_participantTeams = array();   
		
		foreach($_fixtureParticipantTeams as $_fixtureParticipantTeam) {
			$_participantTeams[] = $_fixtureParticipantTeam->participantTeamAlias.' ( '.SystemCore::processCountryAliasValue($_fixtureParticipantTeam->teamCountry).' )';
		}
		
		return Wordlimit::wordTeaxtLimiter($_participantTeams[0],3).' '." --- ".' '.Wordlimit::wordTeaxtLimiter($_participantTeams[1],3);
		
	}
}









<?php

/**
 * TournamentMatchTeamMemberParticipant
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    symfony
 * @subpackage model
 * @author     John Haftom
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class TournamentMatchTeamMemberParticipant extends PluginTournamentMatchTeamMemberParticipant
{ 
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
		//if($this->pendingTeamGroup) { 
			$this->approval_status = trim(TournamentCore::$_ACTIVE); 
			$this->status = trim(TournamentCore::$_ACTIVE); 
			$this->save();
		//}
		return $_flag;
	}
	
	public function makeApproval ()
	{
		$_flag = true;   
		$_effectiveDate = date('m/d/Y', time());  
		$this->active_flag = true; 
		$this->approval_status = trim(TournamentCore::$_APPROVED); 
		$this->status = trim(TournamentCore::$_ACTIVE); 
		$this->effective_date = trim($_effectiveDate);  
		$this->save();
		return $_flag;
	} 
	public function makeConfirmation ()
	{
		$_flag = true;   
		$_endDate = date('m/d/Y', time());  
		$this->active_flag = true;  
		$this->competition_flag = true;  
		$this->competition_status = trim(TournamentCore::$_ACTIVE); 
		$this->process_status = trim(TournamentCore::$_COMPLETED); 
		$this->approval_status = trim(TournamentCore::$_APPROVED); 
		$this->status = trim(TournamentCore::$_ACTIVE);  
		$this->effective_date = $this->effective_date ? $this->effective_date:$_endDate;  
		$this->save();
		return $_flag;
	}
	public function makeCompletion ()
	{
		$_flag = true;   
		$_endDate = date('m/d/Y', time());  
		$this->active_flag = true;  
		$this->competition_flag = true;  
		$this->competition_status = trim(TournamentCore::$_COMPLETED); 
		$this->process_status = trim(TournamentCore::$_COMPLETED); 
		$this->approval_status = trim(TournamentCore::$_COMPLETED); 
		$this->status = trim(TournamentCore::$_COMPLETED);  
		$this->end_date = $this->effective_date ? $this->effective_date:$_endDate;  
		$this->save();
		return $_flag;
	}
	public function makeFinalization ()
	{ 
	}
	
	/************************************************/
	
	public function makeFixtureResultMultipleTeam ($_participantRankNumber, $_participantPositionNumber, $_participantTimeResult, $_qualificationStatus, $_fixtureParticipantStatus)
	{	
		$_endDate = date('m/d/Y', time());  
		$this->match_result_rank = trim($_participantRankNumber); 
		$this->match_result_position_order = trim($_participantPositionNumber); 
		//$this->match_result_distance = trim($_participantTimeResult); 
		//$this->match_result_height = trim($_participantTimeResult); 
		$this->match_result_time = date('H:i:s', strtotime(trim($_participantTimeResult))) ;
		$this->qualified_flag = ($_qualificationStatus == TournamentCore::$_QUALIFIED) ? true:false;
		//$this->medal_award_flag = trim($_participantRankNumber);
		$this->competition_status = trim($_fixtureParticipantStatus);
		$this->qualification_status = trim($_qualificationStatus);
		$this->status = trim(TournamentCore::$_ACTIVE);
		$this->effective_date = $_endDate;   
		$this->save();
		return $_flag;
		
	}
	
/*	public function makeFixtureResultPairTeam($_participantRankNumber, $_participantPositionNumber, $_participantBIBNumber, $_participantTimeResult, $_qualificationStatus, $_fixtureParticipantStatus)
	{
		$this->active_flag = true;  
		$this->competition_flag = true;  
		$this->competition_status = trim(TournamentCore::$_COMPLETED); 
		$this->process_status = trim(TournamentCore::$_COMPLETED); 
		$this->approval_status = trim(TournamentCore::$_COMPLETED); 
		$this->status = trim(TournamentCore::$_COMPLETED);  
		$this->end_date = $this->effective_date ? $this->effective_date:$_endDate;  
		$this->save();
		return $_flag;
		
	}
	public function makeFixtureResultUpdate2($_participantRankNumber, $_participantPositionNumber, $_participantBIBNumber, $_participantTimeResult, $_qualificationStatus, $_fixtureParticipantStatus)
	{
		$this->active_flag = true;  
		$this->competition_flag = true;  
		$this->competition_status = trim(TournamentCore::$_COMPLETED); 
		$this->process_status = trim(TournamentCore::$_COMPLETED); 
		$this->approval_status = trim(TournamentCore::$_COMPLETED); 
		$this->status = trim(TournamentCore::$_COMPLETED);  
		$this->end_date = $this->effective_date ? $this->effective_date:$_endDate;  
		$this->save();
		return $_flag;
		
	}
	public function makeFixtureResultUpdate3($_participantRankNumber, $_participantPositionNumber, $_participantBIBNumber, $_participantTimeResult, $_qualificationStatus, $_fixtureParticipantStatus)
	{
		$this->active_flag = true;  
		$this->competition_flag = true;  
		$this->competition_status = trim(TournamentCore::$_COMPLETED); 
		$this->process_status = trim(TournamentCore::$_COMPLETED); 
		$this->approval_status = trim(TournamentCore::$_COMPLETED); 
		$this->status = trim(TournamentCore::$_COMPLETED);  
		$this->end_date = $this->effective_date ? $this->effective_date:$_endDate;  
		$this->save();
		return $_flag;
		
	}*/
	
	
	
	
	
	
	
	
	
}

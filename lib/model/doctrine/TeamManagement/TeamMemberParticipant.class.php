<?php

/**
 * TeamMemberParticipant
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    mu-TMS
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class TeamMemberParticipant extends PluginTeamMemberParticipant
{
	public function checkPending ()
	{
		return (($this->status ==TournamentCore::$_PENDING) && (!$this->grouped_flag)) ? true:false;
	}
	public function checkConfirmation ()
	{
		return (($this->confirmed_status ==TournamentCore::$_ACTIVE) && (!$this->confirmed_flag)) ? true:false;
	}
	public function makePending ()
	{
		$_flag = true;   
			$this->status = trim(TournamentCore::$_PENDING); 
			$this->save();
			
		return $_flag;
	}
	public function makeActivation ()
	{
		$_flag = true;    
			$this->grouped_flag = true; 
			$this->active_flag = true; 
			$this->confirmed_flag = true; 
			$this->grouped_status = trim(TournamentCore::$_ACTIVE); 
			$this->status = trim(TournamentCore::$_ACTIVE); 
			$this->save();

		return $_flag;
	}
	public function makeConfirmation ()
	{
		$_flag = true;    
			$this->active_flag = true; 
			$this->confirmed_flag = true; 
			$this->confirmed_status = trim(TournamentCore::$_ACTIVE); 
			$this->status = trim(TournamentCore::$_ACTIVE); 
			$this->save();

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
	public function makeProcessRevertion ()
	{
		$_flag = true;       
		$this->status = trim(TournamentCore::$_ACTIVE); 
		$this->effective_date = NULL;  
		$this->save();
		return $_flag;
	}
	public function makeCompletion ()
	{
		$_flag = true;   
		$_endDate = date('m/d/Y', time());  
		$this->active_flag = true;  
		$this->approval_status = trim(TournamentCore::$_COMPLETED); 
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
	
	//
	public function countTeamMemberParticipantRoles ()
	{
		$_participantTeamMembers = TeamMemberParticipantRoleTable::makeCandidateParticipantRoleSelection ( $this->id, $this->token_id);
		
		return count($_participantTeamMembers);
	}
	
	
	
	
	
}

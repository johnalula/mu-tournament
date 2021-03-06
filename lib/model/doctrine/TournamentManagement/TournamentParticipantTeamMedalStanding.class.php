<?php

/**
 * TournamentParticipantTeamMedalStanding
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    symfony
 * @subpackage model
 * @author     Mekonen Berhane
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class TournamentParticipantTeamMedalStanding extends PluginTournamentParticipantTeamMedalStanding
{
	public function makeMatchMedalAward ($_goldMedalAward, $_silverMedalAward, $_bronzeMedalAward)
	{
		
		$_flag = true;    
			$this->gold_medal = trim($_goldMedalAward); 
			$this->silver_medal = trim($_silverMedalAward); 
			$this->bronze_medal = trim($_bronzeMedalAward); 
			$this->total_medal_award = intval(trim($_goldMedalAward))+intval(trim($_silverMedalAward))+intval(trim($_bronzeMedalAward)); 
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
		$this->competition_flag = true;  
		$this->competition_status = trim(TournamentCore::$_ACTIVE); 
		$this->process_status = trim(TournamentCore::$_COMPLETED); 
		$this->approval_status = trim(TournamentCore::$_APPROVED); 
		$this->status = trim(TournamentCore::$_COMPLETED);  
		$this->effective_date = $this->effective_date ? $this->effective_date:$_endDate;  
		$this->save();
		return $_flag;
	}
	public function makeFinalization ()
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
}

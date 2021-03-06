<?php

/**
 * TournamentTeamGroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    symfony
 * @subpackage model
 * @author     John Haftom
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class TournamentTeamGroup extends PluginTournamentTeamGroup
{
	public function checkInitiated ()
	{
		return (($this->approval_status ==TournamentCore::$_INITIATED) && ($this->status ==TournamentCore::$_INITIATED)) ? true:false;
	}
	public function checkProcessActivation ()
	{
		return (($this->approval_status ==TournamentCore::$_ACTIVE) && ($this->process_status ==TournamentCore::$_ACTIVE)) ? true:false;
	}
	public function makePending ()
	{
		$_flag = true;   
			$this->process_status = trim(TournamentCore::$_PENDING);   
			$this->approval_status = trim(TournamentCore::$_INITIATED);   
			$this->status = trim(TournamentCore::$_INITIATED); 
			$this->save();
			
		return $_flag;
	}
	public function makeActivation ()
	{
		$_flag = true;    
		$_effectiveDate = date('m/d/Y', time());   
		$this->process_status = trim(TournamentCore::$_ACTIVE); 
		$this->approval_status = trim(TournamentCore::$_PENDING); 
		$this->status = trim(TournamentCore::$_PENDING); 
		$this->effective_date = trim($_effectiveDate);  
		$this->save();
		return $_flag;
	}
	
	public function makeApproval ()
	{
		$_flag = true;   
		$_effectiveDate = date('m/d/Y', time());   
		$this->process_status = trim(TournamentCore::$_APPROVED); 
		$this->approval_status = trim(TournamentCore::$_ACTIVE); 
		$this->status = trim(TournamentCore::$_PENDING); 
		$this->effective_date = trim($_effectiveDate);  
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
	 
	public function countCandidates () 
	{
		
		$_tournamnetTeamGroups = TournamentSportGameGroupTable::countCanidates ( $this->id, sha1(md5($this->token_id)), $_qualificationStatus, $_approvalStatus, $_status, $_qualifiedFlag, $_activeFlag);
		
		return count($_tournamnetTeamGroups);
	}
	public function hasInitiatedTournamentSportGameGroup () 
	{
		
		$_tournamnetTeamGroups = TournamentSportGameGroupTable::countCanidates ( $this->id, sha1(md5($this->token_id)), $_qualificationStatus, TournamentCore::$_INITIATED, TournamentCore::$_INITIATED, $_qualifiedFlag, false);
		
		return count($_tournamnetTeamGroups);
	}
	public function hasTournamentSportGameGroup () 
	{
		
		$_tournamnetTeamGroups = TournamentSportGameGroupTable::countCanidates ( $this->id, sha1(md5($this->token_id)), $_qualificationStatus, $_approvalStatus, $_status, $_qualifiedFlag, $_activeFlag);
		
		return count($_tournamnetTeamGroups);
	}
	
	
	
	
}

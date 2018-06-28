<?php

/**
 * TournamentSportGameGroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    symfony
 * @subpackage model
 * @author     John Haftom
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class TournamentSportGameGroup extends PluginTournamentSportGameGroup
{
	
	public function makeGroupCode ($_groupCode, $_sportGameCodeID)
	{
		$_flag = true;    
		//if($this->pendingTeamGroup) { 
			$this->group_code = $_groupCode.'-'.SystemCore::processCodeGeneratorInitialNumber($_sportGameCodeID).'/'.date('y', time()); 
			$this->save();
		//}
		return $_flag;
	}
	
	public function checkInitiated ()
	{
		return (($this->approval_status ==TournamentCore::$_INITIATED) && ($this->status ==TournamentCore::$_INITIATED)) ? true:false;
	}
	
	public function makePending ()
	{
		$_flag = true;   
			$this->competition_status = trim(TournamentCore::$_PENDING);   
			$this->process_status = trim(TournamentCore::$_ACTIVE);   
			$this->approval_status = trim(TournamentCore::$_PENDING);   
			$this->status = trim(TournamentCore::$_PENDING); 
			$this->save();
			
		return $_flag;
	}
	public function makeActivation ()
	{
		$_flag = true;     
			$this->active_flag = true; 
			$this->competition_status = trim(TournamentCore::$_PENDING);  
			$this->process_status = trim(TournamentCore::$_ACTIVE); 
			$this->approval_status = trim(TournamentCore::$_ACTIVE); 
			$this->status = trim(TournamentCore::$_PENDING); 
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
	public function makeApproval ()
	{
		$_flag = true;   
		$_endDate = date('m/d/Y', time());  
		$this->competition_flag = true;  
		$this->active_flag = true;  
		$this->confirmed_status = trim(TournamentCore::$_PENDING); 
		$this->competition_status = trim(TournamentCore::$_ACTIVE); 
		$this->process_status = trim(TournamentCore::$_COMPLETED); 
		$this->approval_status = trim(TournamentCore::$_APPROVED); 
		$this->status = trim(TournamentCore::$_ACTIVE);  
		$this->save();
		return $_flag;
	}
	public function makeConfirmation ()
	{
		$_flag = true;   
		$_endDate = date('m/d/Y', time());  
		$this->confirmed_flag = true;  
		$this->confirmed_status = trim(TournamentCore::$_CONFIRMED); 
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
	
	//
	
	public function countCandidateParticipants()
	{
		
		//$_countParticipants = TeamMemberParticipantRoleTable::countCandidates ( $this->tournamentID, $_teamID, $_participantID, $this->tournamentID, $this->groupGenderCategoryID);
		$_countParticipants = TeamMemberParticipantRoleTable::countQualifiedCandidates ( $this->tournamentID, $this->sportGameID, $this->groupGenderCategoryID, $_qualificationStatus, $_status, $_qualifiedFlag, $_activeFlag) ;
		
		return count($_countParticipants);
	}

	/************************************************/
	 //((SELECT COUNT(sprtGmPrt1.id) FROM TeamGameParticipation sprtGmPrt1 WHERE sprtGmPrt1.sport_game_id = sprtGm.id AND sprtGmPrt1.sport_game_token_id = ".sha1."(".md5."("."sprtGm.token_id)) AND sprtGmPrt1.gender_category_id = sprtGmGrp.gender_category_id AND sprtGmPrt1.confirmed_status = ".TournamentCore::$_CONFIRMED." AND sprtGmPrt1.status = ".TournamentCore::$_ACTIVE." AND sprtGmPrt1.grouped_status = ".TournamentCore::$_PENDING." AND sprtGmPrt1.active_flag IS TRUE AND sprtGmPrt1.confirmed_flag IS TRUE AND sprtGmPrt1.grouped_flag IS FALSE)) as hasPendingTeamGameParticipation,
	 
	public function countCandidates () 
	{
		
		$_tournamnetTeamGroups = TeamGameParticipationTable::countCandidateGameParticipations ( $this->sportGameID, $this->sportGameTokenID, $this->groupGenderCategoryID, $_groupedStatus, $_confirmedStatus, $_status, $_qualifiedFlag, $_activeFlag);
		
		return count($_tournamnetTeamGroups);
	}
	public function hasPendingTeamGameParticipation () 
	{
		
		$_tournamnetTeamGroups = TeamGameParticipationTable::countCandidateGameParticipations ( $this->sportGameID, $this->sportGameTokenID, $this->groupGenderCategoryID, $_groupedStatus, TournamentCore::$_PENDING, $_status, $_qualifiedFlag, false, true);
		
		return (count($_tournamnetTeamGroups));
	}



	
}





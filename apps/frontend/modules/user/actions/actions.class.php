<?php

/**
 * user actions.
 *
 * @package    mu-TMS
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userActions extends sfActions
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
		
		$this->_systemUsers = UserTable::processSelection ( $_orgID, $_orgTokenID, $_groupID, $_userRole, $_status, $_exclusion, $_keyword, 0, 10 );
	}
	public function executeNew(sfWebRequest $request)
	{
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		$this->_systemUsers = UserTable::processSelection ( $_orgID, $_orgTokenID, $_groupID, $_userRole, $_status, $_exclusion, $_keyword, 0, 20 );
		
	}
	public function executeEdit(sfWebRequest $request)
	{

	}
	public function executeCreateSystemUserAccount (sfWebRequest $request)
	{	
		$_partyID = $request->getParameter('system_user_person_id');
		$_partyTokenID = $request->getParameter('system_user_person_token_id');
		$_userRoleID = $request->getParameter('system_user_role_id');
		$_userRoleTypeID = $request->getParameter('system_user_role_type_id'); 
		$_userGroupID = $request->getParameter('system_user_group_id'); 
		$_userRoleName = $request->getParameter('Instructor'); 
		$_userName = $request->getParameter('system_user_name'); 
		$_userPassword = $request->getParameter('system_user_password'); 
		$_userStatus = $request->getParameter('system_user_status'); 
		$_description = $request->getParameter('description'); 
		
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID');
		
		$_flag = UserTable::processNew ( $_orgID, $_orgTokenID, $_partyID, $_partyTokenID, $_userRoleID, $_userRoleTypeID, $_userGroupID, $_userName, $_userPassword, $_activationKey, $_userStatus, $_description, $_userID , $_userTokenID  );
		
		return $_flag;
		
	}
	public function executeCandidateSystemUserPersons(sfWebRequest $request)
	{
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID'); 
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 15;	
		
		$_candidatePersons = UserTable::processCandidatePersonSelection ( $_orgID, $_orgTokenID, $_partyRole, $_exclusion, $_status, $_keyword, $_offset, $_limit );
		
		return $this->renderPartial('party/candidate_user_parties', array('_candidates' => $_candidatePersons, '_countStudents' => $_countStudents));	  
	}
	public function executeCandidateSystemUserRoles(sfWebRequest $request)
	{
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID'); 
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 15;	
		
		$_candidateUserRoles = UserTable::processCandidateUserRoleSelection ( $_orgID, $_orgTokenID, $_userRoleTypeID, $_activeFlag, $_exclusion, $_keyword, $_offset, $_limit );
		
		return $this->renderPartial('user_role/candidate_active_user_roles', array('_candidates' => $_candidateUserRoles, '_countStudents' => $_countStudents));	  
	}
	public function executeCandidateSystemUserGroups(sfWebRequest $request)
	{
		$_userRoleID = $request->getParameter('system_user_role_id');
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID'); 
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 15;	
		
		$_candidateUserGroups = UserTable::processCandidateUserGroupSelection ( $_orgID, $_orgTokenID, $_userRoleID, $_activeFlag, $_status, $_keyword, $_offset, $_limit );
		
		return $this->renderPartial('user_group/candidate_active_user_groups', array('_candidates' => $_candidateUserGroups, '_countStudents' => $_countStudents));	  
	}
}

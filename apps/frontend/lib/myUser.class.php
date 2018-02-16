<?php

class myUser extends sfBasicSecurityUser
{
	private $_user = null;
	private $_firstRequest = true;
    
	public function processSignIn (User $_user)
   {
		$this->setAuthenticated(true);
		
		$this->setAttribute('userID', $_user->id);
		$this->setAttribute('userTokenID', $_user->tokenID);
		$this->setAttribute('empID', $_user->personID);
		$this->setAttribute('empTokenID', $_user->personTokenID);
		$this->setAttribute('orgID', $_user->orgID);
		$this->setAttribute('orgTokenID', $_user->orgTokenID); 
		$this->setAttribute('userName', $_user->userName);
		$this->setAttribute('organizationName', $_user->organizationName);
		$this->setAttribute('organizationAlias', $_user->organizationAlias); 
		$this->setAttribute('employeeFullName', $_user->personFullName);
		$this->setAttribute('defaultSuperAdmin', $_user->defaultSuperAdmin);
		$this->setAttribute('domainSuperAdmin', $_user->domainSuperAdmin);
		$this->setAttribute('isSuperAdminUser', $_user->isSuperAdmin);
		$this->setAttribute('isNormalUser', $_user->normalUser);
		$this->setAttribute('isDefaultUser', $_user->defaultFlag); 
		$this->setAttribute('userRoleID', $_user->userRoleID); 
		$this->setAttribute('logindate', date('m/d/Y H:i:s', time()));  
		
		/*if($_user->normalUser ) {
			$this->setAttribute('parentID', $_user->orgID);
			$this->setAttribute('parentTokenID', $_user->orgTokenID);
		} */
		
		//$this->processCredential($_user->user_role);
   }
	public function processCredential ( $_userRole )
	{ 
		switch($_userRole) {			
			case UserCore::$_ADMINISTRATOR:
				return $this->addCredential('ADMINISTRATOR');
			break;
			case UserCore::$_GENERAL_MANAGER:
				return $this->addCredential('GENERAL_MANAGER');
			break;
			case UserCore::$_FINANCE_OFFICER:
				return $this->addCredential('FINANCE_OFFICER');
			break;
			case UserCore::$_SUPERVISOR:
				return $this->addCredential('SUPERVISOR');
			break;
			case UserCore::$_SALES_PERSON:
				return $this->addCredential('SALES_PERSON');
			break;
			case UserCore::$_PURCHASER:
				return $this->addCredential('PURCHASER');
			break;
			case UserCore::$_OPERATOR:
				return $this->addCredential('OPERATOR');
			break;
			case UserCore::$_CASHIER:
				return $this->addCredential('CASHIER');
			break;
			case UserCore::$_FINANCE_AND_CASHIER:
				return $this->addCredential('FINANCE_AND_CASHIER');
			break;
			case UserCore::$_ANONYMOUS:
				return $this->addCredential('ANONYMOUS');
			break;
			default:
				return $this->addCredential('OTHER_ROLE');
			break;
		}	
	}
	public function getCredential()
	{ 
		return $this->credential(); 
	}
	
	public function isSuperAdmin()
	{ 
		$_user = UserTable::processObject ( $this->getAttribute('orgID'),$this->getAttribute('orgTokenID'),$this->getAttribute('UID'),$this->getAttribute('userTokenID')); 
		
		if($_user->isSuperAdmin) {
			return true;
		}
		return false; 
	}
	public function processAccessLevel($_moduleID)
	{ 
		//$_permission = AccessPermissionTable::processModuleAccess($this->getAttribute('orgID'),$this->getAttribute('orgTokenID'),$this->getAttribute('UID'),$this->getAttribute('userTokenID'), $_moduleID);
		$_permission = AccessLevelPermissionTable::processCandidateUserRoleAccessLevel( $this->getAttribute('userRoleID'), $_moduleID);
		if(!$_permission) { return false; }
		return $_permission;
	} 
	
	public function applicableFlag($_moduleID)
	{
		$_permission = $this->processAccessLevel($_moduleID);
		if($this->isSuperAdmin()) { 
			return true;	
		}	 
		return false;
	}
	public function activeFlag($_moduleID)
	{
		$_permission = $this->processAccessLevel($_moduleID);
		if($this->isSuperAdmin()) { 
			return true;	
		}	
		if($_permission->activeFlag) { 
			return true; 
		}
		return false;
	}
	
	public function canAccess($_moduleID)
	{
		$flag = true;
		$_permission = $this->processAccessLevel($_moduleID);
		  
		if($this->isSuperAdmin()) { 
			return true;	
		}	 
		if($_permission->activeFlag) {
			switch($_permission->accessLevel) {			
				case PermissionCore::$_VIEW:
					return true; 
				break;
				case PermissionCore::$_ADD:
					return true; 
				break; 
				case PermissionCore::$_EDIT:
					return true; 
				break; 
				case PermissionCore::$_ADD_AND_EDIT:
					return true; 
				break; 
				case PermissionCore::$_APPROVE:
					return true; 
				break;  
				case PermissionCore::$_FULL_ACCESS:
					return true; 
				break;  
			}
		}
		return false; 
	}
	public function canViewOnly($_moduleID)
	{
		$_permission = $this->processAccessLevel($_moduleID);  
		  
		if($this->isSuperAdmin()) { 
			return true;	
		}	 
		if(!$_permission->activeFlag) { 
			return false;
		}
		if($_permission->accessLevel == PermissionCore::$VIEW) {   
			return true; 
		}
			
		return false; 
	}
	public function canView($_moduleID)
	{
		$flag = true;
		$_permission = $this->processAccessLevel($_moduleID);  
		if($this->isSuperAdmin()) { 
			return true;	
		}	
		if(!$_permission->applicableFlag) { 
			return false; 
		}
		if($_permission->activeFlag) {
			switch($_permission->accessLevel) {			
				case PermissionCore::$VIEW:
					return true; 
				break;
				case PermissionCore::$_ADD:
					return true; 
				break; 
				case PermissionCore::$_EDIT:
					return true; 
				break; 
				case PermissionCore::$_ADD_AND_EDIT:
					return true; 
				break; 
				case PermissionCore::$_APPROVE:
					return true; 
				break; 
				case PermissionCore::$PAY:
					return true; 
				break; 
				case PermissionCore::$_FULL_ACCESS:
					return true; 
				break;  
			}
		}
		return false; 
	}
	public function canAdd($_moduleID)
	{
		$_permission = $this->processAccessLevel($_moduleID);  
		if($this->isSuperAdmin()) { 
			return true;	
		}	
		if(!$_permission->applicableFlag) { 
			return false; 
		}
		if($_permission->activeFlag) {
			switch($_permission->accessLevel) {				 
				case PermissionCore::$_ADD:
					return true; 
				break;  
				case PermissionCore::$_EDIT:
					return true; 
				break;  
				case PermissionCore::$_ADD_AND_EDIT:
					return true; 
				break; 
				case PermissionCore::$_APPROVE:
					return true; 
				break;  
				case PermissionCore::$_FULL_ACCESS:
					return true; 
				break;  
			}
		}
		return false; 
	}
	public function canEdit($_moduleID)
	{
		$_permission = $this->processAccessLevel($_moduleID);  
		if($this->isSuperAdmin()) { 
			return true;	
		}	
		if(!$_permission->applicableFlag) { 
			return false; 
		}
		if($_permission->activeFlag) {
			switch($_permission->accessLevel) {			
				case PermissionCore::$_EDIT:
					return true; 
				break;  
				case PermissionCore::$_ADD_AND_EDIT:
					return true; 
				break; 
				case PermissionCore::$_APPROVE:
					return true; 
				break;  
				case PermissionCore::$_FULL_ACCESS:
					return true; 
				break;  
			}
		}
			
		return false; 
	}
	public function canApprove($_moduleID)
	{
		$_permission = $this->processAccessLevel($_moduleID);  
		if($this->isSuperAdmin()) { 
			return true;	
		}	
		if(!$_permission->applicableFlag) { 
			return false; 
		}
		if($_permission->activeFlag) {
			switch($_permission->accessLevel) {			
				case PermissionCore::$_APPROVE:
					return true; 
				break;  
				case PermissionCore::$_FULL_ACCESS:
					return true; 
				break;  
			}
		}
			
		return false; 
	}
	public function canPay($_moduleID)
	{
		$_permission = $this->processAccessLevel($_moduleID);  
		if($this->isSuperAdmin()) { 
			return true;	
		}	
		if(!$_permission->applicableFlag) { 
			return false; 
		}
		if($_permission->activeFlag) {
			switch($_permission->accessLevel) {			
				case PermissionCore::$_APPROVE:
					return true; 
				break;   
				case PermissionCore::$_FULL_ACCESS:
					return true; 
				break;  
			}
		}
			
		return false; 
	}
	public function canAddEdit($_moduleID)
	{
		$_permission = $this->processAccessLevel($_moduleID);  
		if($this->isSuperAdmin()) { 
			return true;	
		}	
		if(!$_permission->applicableFlag) { 
			return false; 
		}
		if($_permission->activeFlag) {
			switch($_permission->accessLevel) {						 
				case PermissionCore::$_ADD_AND_EDIT:
					return true; 
				break; 
				case PermissionCore::$_APPROVE:
					return true; 
				break;  
				case PermissionCore::$_FULL_ACCESS:
					return true; 
				break;   
			}
		}
		return false; 
	} 
	public function canReject($_moduleID)
	{
		$_permission = $this->processAccessLevel($_moduleID);  
		if($this->isSuperAdmin()) { 
			return true;	
		}	
		if(!$_permission->applicableFlag) { 
			return false; 
		}
		if($_permission->activeFlag) {
			switch($_permission->accessLevel) {			
				case PermissionCore::$_APPROVE:
					return true; 
				break; 
				case PermissionCore::$_FULL_ACCESS:
					return true; 
				break;   
			}
		}
		return false; 
	}
	public function canDelete($_moduleID)
	{
		$_permission = $this->processAccessLevel($_moduleID);  
		if($this->isSuperAdmin()) { 
			return true;	
		}	
		if(!$_permission->applicableFlag) { 
			return false; 
		}
		if($_permission->activeFlag) {
			switch($_permission->accessLevel) {			
				case PermissionCore::$_ADD:
					return true; 
				break; 
				case PermissionCore::$_EDIT:
					return true; 
				break; 
				case PermissionCore::$_ADD_AND_EDIT:
					return true; 
				break; 
				case PermissionCore::$_APPROVE:
					return true; 
				break;  
				case PermissionCore::$_FULL_ACCESS:
					return true; 
				break;  
			}
		}
			
		return false; 
	}
	public function hasFullAccess($_moduleID)
	{
		$_permission = $this->processAccessLevel($_moduleID);  
		if($this->isSuperAdmin()) { 
			return true;	
		}	
		if(!$_permission->applicableFlag) { 
			return false; 
		}
		if(!$_permission->activeFlag) {
			return false;
		}
		if($_permission->accessLevel == PermissionCore::$_FULL_ACCESS)
			return true;
			
		return false; 
	}
	public function hasCustomAccess($_moduleID)
	{
		$_permission = $this->processAccessLevel($_moduleID);  
		if(!$_permission->applicableFlag) return false;
		if(!$_permission->activeFlag) return false;
		
		if($_permission->accessLevel == PermissionCore::$_CUSTOM_ACCESS)
			return true;
			
		return false; 
	}
	public function canNotAccess($_moduleID)
	{
		$_permission = $this->processAccessLevel($_moduleID); 
		if($this->isSuperAdmin()) { 
			return true;	
		}	
		if(!$_permission->applicableFlag) { 
			return false; 
		}
		if(!$_permission->activeFlag) {
			return false;
		}
		if($_permission->accessLevel == PermissionCore::$_NO_ACCESS)
			return true; 
		
		return false; 
	}
	
	public function processUserObject()
	{
		if ($this->_user != null) {
		return $this->_user;
		}
		return UserTable::processObject($this->getAttribute('orgID'),$this->getAttribute('orgTokenID'),$this->getAttribute('UID'),$this->getAttribute('userTokenID'));
	}  
   public static function setCredential($user_role) 
   {
		
	}
   public function hasSettingFullAccess()
   {
		return $this->hasSettingFullAccess;
	}
}

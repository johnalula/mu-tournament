<?php

/**
 * login actions.
 *
 * @package    mu-TMS
 * @subpackage login
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loginActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
	public function executeIndex(sfWebRequest $request)
	{
		$this->setLayout('login'); 
	}
	public function executeHome(sfWebRequest $request)
	{
		$this->redirect('home/index');
	}
	public function executeLogin(sfWebRequest $request)
	{
		$this->setLayout('login');
		$this->getUser()->setAuthenticated(false);
		$this->getUser()->clearCredentials();
		$this->setLayout('login');
	}
	public function executeSignin(sfWebRequest $request)
	{
		$_userLogin = $request->getParameter('user-login');
		$_userAccount = $_userLogin['user_account'];
		$_userPassword = $_userLogin['password'];  
		$_user = UserTable::processLogin ( $_userAccount, $_userPassword );
		if($_user) {	
			/*if ($_user->activeFlag && $_user->hasActivationKey) {
				$this->getUser()->setAuthenticated(false);
				$this->getUser()->setFlash('activation_key', true);
				$this->redirect('activation/user?user_id='.$_user->id.'&token_id='.$_user->token_id);
			}*/
			if (!$_user->activeFlag && $_user->blockedFlag) {
				$this->getUser()->setAuthenticated(false);
				$this->getUser()->setFlash('login_failure.activation', true);
				$this->forward('login', 'index');
			} 
			
			$this->getUser()->processSignIn ($_user);
			/*$_actionID = SystemCore::$_LOGIN;
			$_actionObject  = ModuleCore::processModuleValue(ModuleCore::$_DASHBOARD); 
			$_moduleID  = trim(ModuleCore::$_DASHBOARD); 
			$_userID = $_user->id;
			$_userTokenID = $_user->tokenID; 
			$_orgID = $_user->orgID;
			$_orgTokenID = $_user->orgTokenID;

			$_flag = SystemLogFileTable::processNew ( $_orgID, $_orgTokenID, $_user->id, $_user->tokenID, $_moduleID, $_actionID, $_actionObject, $_description );*/
			$this->redirect('dashboard/index');
		} else {
			$this->getUser()->setAuthenticated(false);
			$this->getUser()->setFlash('login_failure', true);
			 
			$this->forward('login', 'index');
		}
	}	  

	public function executeSignout(sfWebRequest $request)
	{
		if($this->getUser()->isAuthenticated()) {
			
			/*$_actionID = SystemCore::$_LOGOUT;
			$_moduleID  = ModuleCore::$_DASHBOARD; 
			$_actionObject  = ModuleCore::processModuleValue(ModuleCore::$_DASHBOARD); 
			$_userID = $this->getUser()->getAttribute('UID');
			$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
			$_orgID = $this->getUser()->getAttribute('orgID');
			$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');
			
			$_flag = SystemLogFileTable::processNew( $_orgID, $_orgTokenID, $_userID, $_userTokenID, $_moduleID, $_actionID, $_actionObject, $_description);*/
		}
		$this->setLayout('home');
		$this->getUser()->setAuthenticated(false);
		$this->getUser()->clearCredentials();
		$this->getResponse()->setCookie('autologin', 0, 0);
		$this->getUser()->setFlash('notice', 'Have a nice day!');
		$this->getUser()->getAttributeHolder()->remove('uid');
		$this->getUser()->getAttributeHolder()->remove('PID');
		$this->getUser()->getAttributeHolder()->remove('userName');
		$this->getUser()->getAttributeHolder()->remove('employeeFullName');
		$this->getUser()->getAttributeHolder()->remove('userRole');
		$this->getUser()->getAttributeHolder()->remove('userRoleID');
		$this->getUser()->getAttributeHolder()->remove('displayname');
		$this->getUser()->getAttributeHolder()->remove('lastdate'); 
		$this->forward('home', 'index');
	}
}

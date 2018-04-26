<?php

/**
 * administrator actions.
 *
 * @package    mu-TMS
 * @subpackage administrator
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class administratorActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    
  }
  public function executeUser(sfWebRequest $request)
  {
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		$this->_systemUsers = UserTable::processSelection ( $_orgID, $_orgTokenID, $_groupID, $_userRole, $_status, $_exclusion, $_keyword, 0, 20 );
  }
  public function executeUser_group(sfWebRequest $request)
  {
    
  }
  public function executeUser_role(sfWebRequest $request)
  {
    
  }
  public function executeAccess_level(sfWebRequest $request)
  {
    
  }
  public function executeModule(sfWebRequest $request)
  {
     $this->_systemModules = ModuleSettingTable::processSelection ( $_orgID, $_orgTokenID, $_applicableFlag, $_activeFlag, $_exclusion,  $_keyword, 0, 20 );
  }
  public function executeActivity_log(sfWebRequest $request)
  {
    
  }
   public function executeView(sfWebRequest $request)
  {

  } 
}

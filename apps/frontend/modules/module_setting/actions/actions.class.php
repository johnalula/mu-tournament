<?php

/**
 * module_setting actions.
 *
 * @package    mu-TMS
 * @subpackage module_setting
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class module_settingActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
     $this->_systemModules = ModuleSettingTable::processSelection ( $_orgID, $_orgTokenID, $_applicableFlag, $_activeFlag, $_exclusion,  $_keyword, 0, 20 );
  }
  public function executeNew(sfWebRequest $request)
  {
	  
	  $this->_systemModules = ModuleSettingTable::processSelection ( $_orgID, $_orgTokenID, $_applicableFlag, $_activeFlag, $_exclusion,  $_keyword, 0, 20 );
	  
     $this->_candidateModules = ModuleSettingTable::processCandidate ( $_orgID, $_orgTokenID ) ; 
  }
  public function executeEdit(sfWebRequest $request)
  {
     
  }
  public function executeView(sfWebRequest $request)
  {
     
  }
  public function executeCreateSystemModuleSetting(sfWebRequest $request)
  {
	  //system_module_name=Dashboard&system_module_id=1&system_module_token_id=&access_level=3&active_flag=1&applicable_flag=1&description=fasdfasdfasdf
	  
		$_moduleName = $request->getParameter('system_module_name');
		$_moduleID = $request->getParameter('system_module_id');
		$_defaultAccessLevel = $request->getParameter('access_level');
		$_activeFlag = $request->getParameter('active_flag'); 
		$_applicableFlag = $request->getParameter('applicable_flag'); 
		$_description = $request->getParameter('description');
		
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID'); 
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID');
	
		$_flag = ModuleSettingTable::proccessNew ( $_orgID, $_orgTokenID, $_moduleID, $_defaultAccessLevel, $_applicableFlag, $_activeFlag, $_description, $_userID, $_userTokenID );
		
		return $_flag;
  }
  
  /********************************************************/
  
  public function executeCandidateSystemModules(sfWebRequest $request)
	{
		
		/*$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:sha1(md5(trim($this->getUser()->getAttribute('orgTokenID'))));*/
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 20;			 

		$_candidateModules = ModuleSettingTable::processCandidate ( $_orgID, $_orgTokenID ) ; 
		//$_countCandidateSportGames = SportGameTable::processAll ( $_orgID, $_orgTokenID, $_categoryID, $_gameTypeID, $_keyword); 
		
		return $this->renderPartial('candidate_modules', array('_candidateModules' => $_candidateModules, '_countCandidateSportGames' => $_countCandidateSportGames));	  
	}
	
	public function executeSearch(sfWebRequest $request)
	{
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		$_limit = $request->getParameter("limit");
		$_offset = $request->getParameter("offset");
		$_classID = $request->getParameter("class_id");
		$_keyword = $request->getParameter("keyword");
		$_keyword = '%' . $_keyword . '%';
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 35;			 
		if(!$_classID || $_classID == '' ) $_classID = null;			 
		if(!$_keyword || $_keyword == '' ) $_keyword = null;			 
		
		$_products = ItemProductTable::processSelection ( $_orgID, sha1(md5($_orgTokenID)), $_classID, $_exclusion, $_status, $_keyword, $_offset, $_limit );
		$_countProducts = ItemProductTable::processAll ( $_orgID, sha1(md5($_orgTokenID)), $_classID, $_exclusion, $_status, $_keyword);
		if (!$_products)
		{
			return $this->renderPartial('error', array('_products' => $_products));
		}
			
		return $this->renderPartial('list', array('_products' => $_products, '_countProducts' => $_countProducts));

	}
}

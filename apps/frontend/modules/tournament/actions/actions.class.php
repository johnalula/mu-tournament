<?php

/**
 * tournament actions.
 *
 * @package    mu-TMS
 * @subpackage tournament
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tournamentActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
	{
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		$this->_tournaments = TournamentTable::processSelection ( $_orgID, sha1(md5($_orgTokenID)), $_season, $_activeFlag, $_keyword, 0, 10 );
	}
	
	public function executeNew(sfWebRequest $request)
	{
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
	}
	public function executeView(sfWebRequest $request)
	{
		$_productID = $request->getParameter('product_id');	
		$_productTokenID = $request->getParameter('token_id');	
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		$this->_product = ItemProductTable::processObject( $_orgID, sha1(md5($_orgTokenID)), $_productID, $_productTokenID );
		$_itemClassID = $this->_product->categoryClassID;
		$this->_inventoryItems = ItemProductTable::processCandidateInventory ( $_productID, sha1(md5($_productTokenID)), $_itemType, true, $_productStatus, $_status, $_keyword, 0, 25 );
		$this->_soldInventoryItems = ItemProductTable::processCandidateInventoryItems ( $_productID, $_productTokenID, $_itemClassID, $_itemType, 0, 25 );
		//$this->_soldStockItems = ItemProductTable::processCandidateInventoryItems ( $_taskID, sha1(md5($_tokenID)), PropertyCore::$_STOCK_ITEM, $_itemType, 0, 15 );
		//$this->_productPriceLevels = ItemProductTable::processCandidateProductPriceComponents ( $_productID, sha1(md5($_productTokenID)), $_productPriceType, $_exclusion, 0, 10 );
		//$this->_units = UnitTable::processAll ( $_orgID, md5(sha1($_orgTokenID)), $_isDefault, $_exclusion, $_keyword);
		
	}
	
	public function executeCreateTournament(sfWebRequest $request)
	{
		
		$_tournamentName = $request->getParameter('tournament_name');	
		$_tournamentAlias = $request->getParameter('tournament_alias');	
		$_tournamentSeason = $request->getParameter('season');	 
		$_status = $request->getParameter('status');	 
		$_startDate = $request->getParameter('start_date');	 
		$_endDate = $request->getParameter('end_date');	
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('userID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_flag =  TournamentTable::processNew ( $_orgID, $_orgTokenID,  $_tournamentName, $_tournamentAlias, $_tournamentSeason, $_startDate, $_effectiveDate, $_endDate, $_status, $_description, $_userID, $_userTokenID  );  
				 
		return $_flag ? true:false;
		
	}
	public function executeCreateCategory(sfWebRequest $request)
	{
		
		$_parentID = $request->getParameter('parent_product_category_id');	
		$_parentTokenID = $request->getParameter('parent_product_category_token_id');	 
		$_categoryStockCodeID = $request->getParameter('product_category_stock_id');	
		$_categoryFinancialCodeID = $request->getParameter('product_category_financial_id');	
		$_categoryName = $request->getParameter('product_category_name');	
		$_categoryGroupID = $request->getParameter('product_category_group_id');	
		$_categoryClassID = $request->getParameter('product_category_class_id');	 
		$_description = $request->getParameter('description');	
				
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		$_userID = $this->getUser()->getAttribute('UID');
		$_userTokenID = $this->getUser()->getAttribute('userTokenID'); 
	
		$_flag =  CategoryTable::processCreate ( $_orgID, $_orgTokenID, $_parentID, $_parentTokenID, $_categoryStockCodeID, $_categoryFinancialCodeID, $_categoryName, $_categoryGroupID, $_categoryClassID, $_description, $_userID, $_userTokenID );  
				 
		return $_flag ? true:false;
		
	}
	public function executeCandidateParentCategory(sfWebRequest $request)
	{
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:sha1(md5(trim($this->getUser()->getAttribute('orgTokenID'))));
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 35;			 

		$_candidateCategorys = CategoryTable::processCandidateCategorySelection ( $_orgID, $_orgTokenID, $_groupID, $_classID, $_keyword, $_offset, $_limit ); 
		
		return $this->renderPartial('product/candidate_parent_category', array('_candidateCategorys' => $_candidateCategorys, '_countCandidates' => $_countCandidateStudents));	  
	}
	public function executeCandidateProducts(sfWebRequest $request)
	{
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:sha1(md5(trim($this->getUser()->getAttribute('orgTokenID'))));
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 35;			 

		$_candidateCategorys = CategoryTable::processCandidateCategorySelection ( $_orgID, $_orgTokenID, $_groupID, $_classID, $_keyword, $_offset, $_limit ); 
		
		return $this->renderPartial('product/candidate_parent_category', array('_candidateCategorys' => $_candidateCategorys, '_countCandidates' => $_countCandidateStudents));	  
	}
	public function executeCandidateAccountChars(sfWebRequest $request)
	{
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:sha1(md5(trim($this->getUser()->getAttribute('orgTokenID'))));
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 35;			 

		$_candidateAccountCharts = GeneralLedgerAccountTable::processCandidateSelection ( $_orgID, $_glAccountTypeID, $_exclusion, $_defaultFlag, $_status, $_keyword, 0, 25 );
		
		return $this->renderPartial('candidate_gl_account_charts', array('_candidateAccountCharts' => $_candidateAccountCharts, '_countCandidates' => $_countCandidateStudents));	    
	}
	
	/************  Candidate Navigation Selection Functions **************/
	
	
	public function executeCandidateInventoryItemDetail(sfWebRequest $request)
	{
		$_defaultSuperAdmin = $this->getUser()->getAttribute('defaultSuperAdmin');
		$_orgID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgID');
		$_orgTokenID = $_defaultSuperAdmin ? null:$this->getUser()->getAttribute('orgTokenID');
		
		$_inventoryItemID = $request->getParameter("inventory_item_id");
		$_inventoryItemTokenID = $request->getParameter("inventory_item_token_id");
		//$_keyword = '%' . $_keyword . '%';
		
		if(!$_offset || $_offset=='')	$_offset = 0;			
		if(!$_limit || $_limit=='' ) $_limit = 35;			 
		if(!$_classID || $_classID == '' ) $_classID = null;			 
		if(!$_keyword || $_keyword == '' ) $_keyword = null;			 
		
		$_inventoryItem = InventoryItemTable::processObject( $_inventoryItemID, $_inventoryItemTokenID ) ;
		
		if (!$_inventoryItem)
		{
			return $this->renderPartial('global/error', array('_products' => $_products));
		}
			
		return $this->renderPartial('inventory_item/item_detail', array('_inventoryItem' => $_inventoryItem));

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

<?php

/**
 * employee actions.
 *
 * @package    symfony
 * @subpackage employee
 * @author     Mekonen Berhane
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class employeeActions extends sfActions
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
		
		$this->_employees = PersonTable::processSelection ( $_orgID, $_orgTokenID, $_partyRole, $_partyRelationShip, $_status, $_exclusion, $_keyword, 0, 10 );
  }
  public function executeNew(sfWebRequest $request)
  {
		$_orgID = $this->getUser()->getAttribute('orgID');
		$_orgTokenID = $this->getUser()->getAttribute('orgTokenID');  
		
		$this->_employees = PersonTable::processSelection ( $_orgID, $_orgTokenID, $_partyRole, $_partyRelationShip, $_status, $_exclusion, $_keyword, 0, 10 );
  }
  public function executeCreateEmployee(sfWebRequest $request)
  {
	  //parent_organization_name=Mekelle University&organization_id=1&organization_token_id=afccda09e18b3ebfd6734f446fd6e2a4e91f95c1&employee_name=&employee_father_name=&employee_grand_father_name=&place_of_birth=&employee_gender=2&date_of_birth=&employee_role=1&employee_status=1&description=&country_id=67&employee_region_address=Tigray&identification_type=1&employee_id_number=&employee_contact_adddress=Mekelle&contact_phone_number=523452345&contact_mobile_number=352345234&house_number=&street_number=&email_address=&contact_description=sdfgsdfgs

    
  }
  public function executeEdit(sfWebRequest $request)
  {
    
  }
  public function executeUpdateEmployee(sfWebRequest $request)
  {
    
  }
  public function executeView(sfWebRequest $request)
  {
    
  }
}

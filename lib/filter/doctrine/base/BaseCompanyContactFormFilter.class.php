<?php

/**
 * CompanyContact filter form base class.
 *
 * @package    mu-TMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCompanyContactFormFilter extends PartyContactFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('company_contact_filters[%s]');
  }

  public function getModelName()
  {
    return 'CompanyContact';
  }
}
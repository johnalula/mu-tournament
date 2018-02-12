<?php

/**
 * CompanyContact form base class.
 *
 * @method CompanyContact getObject() Returns the current form's model object
 *
 * @package    mu-TMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCompanyContactForm extends PartyContactForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('company_contact[%s]');
  }

  public function getModelName()
  {
    return 'CompanyContact';
  }

}

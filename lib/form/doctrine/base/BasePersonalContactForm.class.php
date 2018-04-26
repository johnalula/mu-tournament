<?php

/**
 * PersonalContact form base class.
 *
 * @method PersonalContact getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePersonalContactForm extends PartyContactForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('personal_contact[%s]');
  }

  public function getModelName()
  {
    return 'PersonalContact';
  }

}

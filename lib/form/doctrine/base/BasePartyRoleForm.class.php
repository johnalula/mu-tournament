<?php

/**
 * PartyRole form base class.
 *
 * @method PartyRole getObject() Returns the current form's model object
 *
 * @package    mu-TMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePartyRoleForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'token_id'        => new sfWidgetFormInputText(),
      'party_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Party'), 'add_empty' => true)),
      'party_role_type' => new sfWidgetFormInputText(),
      'party_unit_type' => new sfWidgetFormInputText(),
      'party_type'      => new sfWidgetFormInputText(),
      'from_date'       => new sfWidgetFormInputText(),
      'thru_date'       => new sfWidgetFormInputText(),
      'status'          => new sfWidgetFormInputText(),
      'default_flag'    => new sfWidgetFormInputCheckbox(),
      'active_flag'     => new sfWidgetFormInputCheckbox(),
      'description'     => new sfWidgetFormTextarea(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'party_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Party'), 'required' => false)),
      'party_role_type' => new sfValidatorInteger(array('required' => false)),
      'party_unit_type' => new sfValidatorInteger(array('required' => false)),
      'party_type'      => new sfValidatorInteger(array('required' => false)),
      'from_date'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'thru_date'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'status'          => new sfValidatorInteger(array('required' => false)),
      'default_flag'    => new sfValidatorBoolean(array('required' => false)),
      'active_flag'     => new sfValidatorBoolean(array('required' => false)),
      'description'     => new sfValidatorString(array('required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('party_role[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PartyRole';
  }

}

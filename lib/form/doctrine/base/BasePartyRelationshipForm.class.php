<?php

/**
 * PartyRelationship form base class.
 *
 * @method PartyRelationship getObject() Returns the current form's model object
 *
 * @package    mu-TMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePartyRelationshipForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'token_id'          => new sfWidgetFormInputText(),
      'party_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Party'), 'add_empty' => true)),
      'relationship_type' => new sfWidgetFormInputText(),
      'position_role_id'  => new sfWidgetFormInputText(),
      'from_date'         => new sfWidgetFormInputText(),
      'to_date'           => new sfWidgetFormInputText(),
      'status'            => new sfWidgetFormInputText(),
      'default_flag'      => new sfWidgetFormInputCheckbox(),
      'active_flag'       => new sfWidgetFormInputCheckbox(),
      'description'       => new sfWidgetFormTextarea(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'party_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Party'), 'required' => false)),
      'relationship_type' => new sfValidatorInteger(array('required' => false)),
      'position_role_id'  => new sfValidatorInteger(array('required' => false)),
      'from_date'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'to_date'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'status'            => new sfValidatorInteger(array('required' => false)),
      'default_flag'      => new sfValidatorBoolean(array('required' => false)),
      'active_flag'       => new sfValidatorBoolean(array('required' => false)),
      'description'       => new sfValidatorString(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('party_relationship[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PartyRelationship';
  }

}

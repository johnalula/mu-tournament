<?php

/**
 * RoundType form base class.
 *
 * @method RoundType getObject() Returns the current form's model object
 *
 * @package    mu-TMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRoundTypeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'token_id'     => new sfWidgetFormInputText(),
      'org_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'round_type'   => new sfWidgetFormInputText(),
      'round_number' => new sfWidgetFormInputText(),
      'name'         => new sfWidgetFormInputText(),
      'alias'        => new sfWidgetFormInputText(),
      'active_flag'  => new sfWidgetFormInputCheckbox(),
      'status'       => new sfWidgetFormInputText(),
      'description'  => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'org_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'required' => false)),
      'round_type'   => new sfValidatorInteger(array('required' => false)),
      'round_number' => new sfValidatorInteger(array('required' => false)),
      'name'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'alias'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'active_flag'  => new sfValidatorBoolean(array('required' => false)),
      'status'       => new sfValidatorInteger(array('required' => false)),
      'description'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('round_type[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RoundType';
  }

}

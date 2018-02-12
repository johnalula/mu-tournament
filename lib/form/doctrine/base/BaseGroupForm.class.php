<?php

/**
 * Group form base class.
 *
 * @method Group getObject() Returns the current form's model object
 *
 * @package    mu-TMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseGroupForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'token_id'            => new sfWidgetFormInputText(),
      'tournament_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'add_empty' => true)),
      'group_name'          => new sfWidgetFormInputText(),
      'alias'               => new sfWidgetFormInputText(),
      'total_group_numbers' => new sfWidgetFormInputText(),
      'start_date'          => new sfWidgetFormInputText(),
      'end_date'            => new sfWidgetFormInputText(),
      'active_flag'         => new sfWidgetFormInputCheckbox(),
      'status'              => new sfWidgetFormInputText(),
      'description'         => new sfWidgetFormTextarea(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tournament_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'required' => false)),
      'group_name'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'alias'               => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'total_group_numbers' => new sfValidatorInteger(array('required' => false)),
      'start_date'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'end_date'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'active_flag'         => new sfValidatorBoolean(array('required' => false)),
      'status'              => new sfValidatorInteger(array('required' => false)),
      'description'         => new sfValidatorString(array('required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('group[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Group';
  }

}

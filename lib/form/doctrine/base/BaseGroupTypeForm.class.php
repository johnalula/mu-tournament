<?php

/**
 * GroupType form base class.
 *
 * @method GroupType getObject() Returns the current form's model object
 *
 * @package    mu-TMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseGroupTypeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'token_id'      => new sfWidgetFormInputText(),
      'org_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'  => new sfWidgetFormInputText(),
      'group_type_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GroupType'), 'add_empty' => true)),
      'group_number'  => new sfWidgetFormInputText(),
      'alias'         => new sfWidgetFormInputText(),
      'active_flag'   => new sfWidgetFormInputCheckbox(),
      'description'   => new sfWidgetFormInputText(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'org_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'required' => false)),
      'org_token_id'  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'group_type_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('GroupType'), 'required' => false)),
      'group_number'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'alias'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'active_flag'   => new sfValidatorBoolean(array('required' => false)),
      'description'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('group_type[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'GroupType';
  }

}

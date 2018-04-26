<?php

/**
 * CodeGenerator form base class.
 *
 * @method CodeGenerator getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCodeGeneratorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'token_id'             => new sfWidgetFormInputText(),
      'org_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'         => new sfWidgetFormInputText(),
      'prefix_code'          => new sfWidgetFormInputText(),
      'alias'                => new sfWidgetFormInputText(),
      'initial_number'       => new sfWidgetFormInputText(),
      'last_code'            => new sfWidgetFormInputText(),
      'deleted_code'         => new sfWidgetFormInputText(),
      'can_recreate_deleted' => new sfWidgetFormInputCheckbox(),
      'code_type'            => new sfWidgetFormInputText(),
      'has_deleted'          => new sfWidgetFormInputCheckbox(),
      'default_flag'         => new sfWidgetFormInputCheckbox(),
      'applicable_flag'      => new sfWidgetFormInputCheckbox(),
      'active_flag'          => new sfWidgetFormInputCheckbox(),
      'description'          => new sfWidgetFormInputText(),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'             => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'org_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'required' => false)),
      'org_token_id'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'prefix_code'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'alias'                => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'initial_number'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'last_code'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'deleted_code'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'can_recreate_deleted' => new sfValidatorBoolean(array('required' => false)),
      'code_type'            => new sfValidatorInteger(array('required' => false)),
      'has_deleted'          => new sfValidatorBoolean(array('required' => false)),
      'default_flag'         => new sfValidatorBoolean(array('required' => false)),
      'applicable_flag'      => new sfValidatorBoolean(array('required' => false)),
      'active_flag'          => new sfValidatorBoolean(array('required' => false)),
      'description'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'           => new sfValidatorDateTime(),
      'updated_at'           => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('code_generator[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CodeGenerator';
  }

}

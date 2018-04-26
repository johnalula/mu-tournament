<?php

/**
 * SystemConfig form base class.
 *
 * @method SystemConfig getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSystemConfigForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'token_id'                  => new sfWidgetFormInputText(),
      'org_id'                    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'              => new sfWidgetFormInputText(),
      'active_language'           => new sfWidgetFormInputText(),
      'default_pagination_number' => new sfWidgetFormInputText(),
      'start_date'                => new sfWidgetFormInputText(),
      'end_date'                  => new sfWidgetFormInputText(),
      'default_flag'              => new sfWidgetFormInputCheckbox(),
      'applicable_flag'           => new sfWidgetFormInputCheckbox(),
      'active_flag'               => new sfWidgetFormInputCheckbox(),
      'description'               => new sfWidgetFormInputText(),
      'created_at'                => new sfWidgetFormDateTime(),
      'updated_at'                => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'                  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'org_id'                    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'required' => false)),
      'org_token_id'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'active_language'           => new sfValidatorInteger(array('required' => false)),
      'default_pagination_number' => new sfValidatorInteger(array('required' => false)),
      'start_date'                => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'end_date'                  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'default_flag'              => new sfValidatorBoolean(array('required' => false)),
      'applicable_flag'           => new sfValidatorBoolean(array('required' => false)),
      'active_flag'               => new sfValidatorBoolean(array('required' => false)),
      'description'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'                => new sfValidatorDateTime(),
      'updated_at'                => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('system_config[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SystemConfig';
  }

}

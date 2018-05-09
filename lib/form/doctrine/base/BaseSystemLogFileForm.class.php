<?php

/**
 * SystemLogFile form base class.
 *
 * @method SystemLogFile getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSystemLogFileForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'token_id'          => new sfWidgetFormInputText(),
      'org_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'      => new sfWidgetFormInputText(),
      'user_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'module_setting_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ModuleSetting'), 'add_empty' => true)),
      'action_date'       => new sfWidgetFormInputText(),
      'action_time'       => new sfWidgetFormInputText(),
      'action_data'       => new sfWidgetFormTextarea(),
      'action_type_id'    => new sfWidgetFormInputText(),
      'host_name'         => new sfWidgetFormInputText(),
      'document_root'     => new sfWidgetFormInputText(),
      'php_self'          => new sfWidgetFormInputText(),
      'pc_ip_address'     => new sfWidgetFormInputText(),
      'browser_type'      => new sfWidgetFormInputText(),
      'description'       => new sfWidgetFormTextarea(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'org_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'required' => false)),
      'org_token_id'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'user_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'required' => false)),
      'module_setting_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ModuleSetting'), 'required' => false)),
      'action_date'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'action_time'       => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'action_data'       => new sfValidatorString(array('required' => false)),
      'action_type_id'    => new sfValidatorInteger(array('required' => false)),
      'host_name'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'document_root'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'php_self'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'pc_ip_address'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'browser_type'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'description'       => new sfValidatorString(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('system_log_file[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SystemLogFile';
  }

}

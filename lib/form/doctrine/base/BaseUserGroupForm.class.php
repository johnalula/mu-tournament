<?php

/**
 * UserGroup form base class.
 *
 * @method UserGroup getObject() Returns the current form's model object
 *
 * @package    mu-TMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserGroupForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'token_id'               => new sfWidgetFormInputText(),
      'org_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'           => new sfWidgetFormInputText(),
      'user_group_role_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UserRole'), 'add_empty' => true)),
      'name'                   => new sfWidgetFormInputText(),
      'ui_theme_color_setting' => new sfWidgetFormInputText(),
      'ui_language_setting'    => new sfWidgetFormInputText(),
      'active_flag'            => new sfWidgetFormInputCheckbox(),
      'status'                 => new sfWidgetFormInputText(),
      'trashed_flag'           => new sfWidgetFormInputCheckbox(),
      'trashed_on'             => new sfWidgetFormInputText(),
      'description'            => new sfWidgetFormTextarea(),
      'created_at'             => new sfWidgetFormDateTime(),
      'updated_at'             => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'               => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'org_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'required' => false)),
      'org_token_id'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'user_group_role_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UserRole'), 'required' => false)),
      'name'                   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'ui_theme_color_setting' => new sfValidatorInteger(array('required' => false)),
      'ui_language_setting'    => new sfValidatorInteger(array('required' => false)),
      'active_flag'            => new sfValidatorBoolean(array('required' => false)),
      'status'                 => new sfValidatorInteger(array('required' => false)),
      'trashed_flag'           => new sfValidatorBoolean(array('required' => false)),
      'trashed_on'             => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'description'            => new sfValidatorString(array('required' => false)),
      'created_at'             => new sfValidatorDateTime(),
      'updated_at'             => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('user_group[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserGroup';
  }

}

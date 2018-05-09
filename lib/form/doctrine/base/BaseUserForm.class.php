<?php

/**
 * User form base class.
 *
 * @method User getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                       => new sfWidgetFormInputHidden(),
      'token_id'                 => new sfWidgetFormInputText(),
      'org_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'             => new sfWidgetFormInputText(),
      'person_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'add_empty' => true)),
      'person_token_id'          => new sfWidgetFormInputText(),
      'username'                 => new sfWidgetFormInputText(),
      'password'                 => new sfWidgetFormInputText(),
      'full_password'            => new sfWidgetFormInputText(),
      'access_activation_key'    => new sfWidgetFormInputText(),
      'user_role_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UserRole'), 'add_empty' => true)),
      'group_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UserGroup'), 'add_empty' => true)),
      'permission_mode'          => new sfWidgetFormInputText(),
      'has_logged_in'            => new sfWidgetFormInputCheckbox(),
      'last_login_date'          => new sfWidgetFormInputText(),
      'activated_key_flag'       => new sfWidgetFormInputCheckbox(),
      'super_admin_flag'         => new sfWidgetFormInputCheckbox(),
      'default_super_admin_flag' => new sfWidgetFormInputCheckbox(),
      'default_flag'             => new sfWidgetFormInputCheckbox(),
      'active_flag'              => new sfWidgetFormInputCheckbox(),
      'blocked_flag'             => new sfWidgetFormInputCheckbox(),
      'enabled_flag'             => new sfWidgetFormInputCheckbox(),
      'login_flag'               => new sfWidgetFormInputCheckbox(),
      'status'                   => new sfWidgetFormInputText(),
      'trashed_flag'             => new sfWidgetFormInputCheckbox(),
      'trashed_on'               => new sfWidgetFormInputText(),
      'description'              => new sfWidgetFormTextarea(),
      'created_at'               => new sfWidgetFormDateTime(),
      'updated_at'               => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'                 => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'org_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'required' => false)),
      'org_token_id'             => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'person_id'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'required' => false)),
      'person_token_id'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'username'                 => new sfValidatorString(array('max_length' => 255)),
      'password'                 => new sfValidatorString(array('max_length' => 255)),
      'full_password'            => new sfValidatorString(array('max_length' => 255)),
      'access_activation_key'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'user_role_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UserRole'), 'required' => false)),
      'group_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UserGroup'), 'required' => false)),
      'permission_mode'          => new sfValidatorInteger(array('required' => false)),
      'has_logged_in'            => new sfValidatorBoolean(array('required' => false)),
      'last_login_date'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'activated_key_flag'       => new sfValidatorBoolean(array('required' => false)),
      'super_admin_flag'         => new sfValidatorBoolean(array('required' => false)),
      'default_super_admin_flag' => new sfValidatorBoolean(array('required' => false)),
      'default_flag'             => new sfValidatorBoolean(array('required' => false)),
      'active_flag'              => new sfValidatorBoolean(array('required' => false)),
      'blocked_flag'             => new sfValidatorBoolean(array('required' => false)),
      'enabled_flag'             => new sfValidatorBoolean(array('required' => false)),
      'login_flag'               => new sfValidatorBoolean(array('required' => false)),
      'status'                   => new sfValidatorInteger(array('required' => false)),
      'trashed_flag'             => new sfValidatorBoolean(array('required' => false)),
      'trashed_on'               => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'description'              => new sfValidatorString(array('required' => false)),
      'created_at'               => new sfValidatorDateTime(),
      'updated_at'               => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

}

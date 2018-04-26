<?php

/**
 * User filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'                 => new sfWidgetFormFilterInput(),
      'org_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'             => new sfWidgetFormFilterInput(),
      'person_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'add_empty' => true)),
      'person_token_id'          => new sfWidgetFormFilterInput(),
      'username'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'full_password'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'access_activation_key'    => new sfWidgetFormFilterInput(),
      'user_role_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UserRole'), 'add_empty' => true)),
      'group_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UserGroup'), 'add_empty' => true)),
      'permission_mode'          => new sfWidgetFormFilterInput(),
      'has_logged_in'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'last_login_date'          => new sfWidgetFormFilterInput(),
      'activated_key_flag'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'super_admin_flag'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'default_super_admin_flag' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'default_flag'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'              => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'blocked_flag'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'enabled_flag'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'login_flag'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'                   => new sfWidgetFormFilterInput(),
      'trashed_flag'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'trashed_on'               => new sfWidgetFormFilterInput(),
      'description'              => new sfWidgetFormFilterInput(),
      'created_at'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'                 => new sfValidatorPass(array('required' => false)),
      'org_id'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Organization'), 'column' => 'id')),
      'org_token_id'             => new sfValidatorPass(array('required' => false)),
      'person_id'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Person'), 'column' => 'id')),
      'person_token_id'          => new sfValidatorPass(array('required' => false)),
      'username'                 => new sfValidatorPass(array('required' => false)),
      'password'                 => new sfValidatorPass(array('required' => false)),
      'full_password'            => new sfValidatorPass(array('required' => false)),
      'access_activation_key'    => new sfValidatorPass(array('required' => false)),
      'user_role_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UserRole'), 'column' => 'id')),
      'group_id'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UserGroup'), 'column' => 'id')),
      'permission_mode'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'has_logged_in'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'last_login_date'          => new sfValidatorPass(array('required' => false)),
      'activated_key_flag'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'super_admin_flag'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'default_super_admin_flag' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'default_flag'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'              => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'blocked_flag'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'enabled_flag'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'login_flag'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'trashed_flag'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'trashed_on'               => new sfValidatorPass(array('required' => false)),
      'description'              => new sfValidatorPass(array('required' => false)),
      'created_at'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

  public function getFields()
  {
    return array(
      'id'                       => 'Number',
      'token_id'                 => 'Text',
      'org_id'                   => 'ForeignKey',
      'org_token_id'             => 'Text',
      'person_id'                => 'ForeignKey',
      'person_token_id'          => 'Text',
      'username'                 => 'Text',
      'password'                 => 'Text',
      'full_password'            => 'Text',
      'access_activation_key'    => 'Text',
      'user_role_id'             => 'ForeignKey',
      'group_id'                 => 'ForeignKey',
      'permission_mode'          => 'Number',
      'has_logged_in'            => 'Boolean',
      'last_login_date'          => 'Text',
      'activated_key_flag'       => 'Boolean',
      'super_admin_flag'         => 'Boolean',
      'default_super_admin_flag' => 'Boolean',
      'default_flag'             => 'Boolean',
      'active_flag'              => 'Boolean',
      'blocked_flag'             => 'Boolean',
      'enabled_flag'             => 'Boolean',
      'login_flag'               => 'Boolean',
      'status'                   => 'Number',
      'trashed_flag'             => 'Boolean',
      'trashed_on'               => 'Text',
      'description'              => 'Text',
      'created_at'               => 'Date',
      'updated_at'               => 'Date',
    );
  }
}

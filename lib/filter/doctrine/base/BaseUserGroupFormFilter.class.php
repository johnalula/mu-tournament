<?php

/**
 * UserGroup filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserGroupFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'               => new sfWidgetFormFilterInput(),
      'org_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'           => new sfWidgetFormFilterInput(),
      'user_group_role_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UserRole'), 'add_empty' => true)),
      'name'                   => new sfWidgetFormFilterInput(),
      'ui_theme_color_setting' => new sfWidgetFormFilterInput(),
      'ui_language_setting'    => new sfWidgetFormFilterInput(),
      'active_flag'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'                 => new sfWidgetFormFilterInput(),
      'trashed_flag'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'trashed_on'             => new sfWidgetFormFilterInput(),
      'description'            => new sfWidgetFormFilterInput(),
      'created_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'               => new sfValidatorPass(array('required' => false)),
      'org_id'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Organization'), 'column' => 'id')),
      'org_token_id'           => new sfValidatorPass(array('required' => false)),
      'user_group_role_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UserRole'), 'column' => 'id')),
      'name'                   => new sfValidatorPass(array('required' => false)),
      'ui_theme_color_setting' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ui_language_setting'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'active_flag'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'trashed_flag'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'trashed_on'             => new sfValidatorPass(array('required' => false)),
      'description'            => new sfValidatorPass(array('required' => false)),
      'created_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('user_group_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserGroup';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'token_id'               => 'Text',
      'org_id'                 => 'ForeignKey',
      'org_token_id'           => 'Text',
      'user_group_role_id'     => 'ForeignKey',
      'name'                   => 'Text',
      'ui_theme_color_setting' => 'Number',
      'ui_language_setting'    => 'Number',
      'active_flag'            => 'Boolean',
      'status'                 => 'Number',
      'trashed_flag'           => 'Boolean',
      'trashed_on'             => 'Text',
      'description'            => 'Text',
      'created_at'             => 'Date',
      'updated_at'             => 'Date',
    );
  }
}

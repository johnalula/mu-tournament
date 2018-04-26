<?php

/**
 * AccessLevelPermission filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAccessLevelPermissionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'          => new sfWidgetFormFilterInput(),
      'user_role_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UserRole'), 'add_empty' => true)),
      'module_setting_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ModuleSetting'), 'add_empty' => true)),
      'access_level'      => new sfWidgetFormFilterInput(),
      'can_add'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'can_delete'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'can_edit'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'can_view'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'can_approve'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'description'       => new sfWidgetFormFilterInput(),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'          => new sfValidatorPass(array('required' => false)),
      'user_role_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UserRole'), 'column' => 'id')),
      'module_setting_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ModuleSetting'), 'column' => 'id')),
      'access_level'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'can_add'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'can_delete'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'can_edit'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'can_view'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'can_approve'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'description'       => new sfValidatorPass(array('required' => false)),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('access_level_permission_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AccessLevelPermission';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'token_id'          => 'Text',
      'user_role_id'      => 'ForeignKey',
      'module_setting_id' => 'ForeignKey',
      'access_level'      => 'Number',
      'can_add'           => 'Boolean',
      'can_delete'        => 'Boolean',
      'can_edit'          => 'Boolean',
      'can_view'          => 'Boolean',
      'can_approve'       => 'Boolean',
      'description'       => 'Text',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}

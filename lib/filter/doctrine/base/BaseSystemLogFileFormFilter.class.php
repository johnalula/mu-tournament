<?php

/**
 * SystemLogFile filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSystemLogFileFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'          => new sfWidgetFormFilterInput(),
      'org_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'      => new sfWidgetFormFilterInput(),
      'user_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'module_setting_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ModuleSetting'), 'add_empty' => true)),
      'action_date'       => new sfWidgetFormFilterInput(),
      'action_time'       => new sfWidgetFormFilterInput(),
      'action_data'       => new sfWidgetFormFilterInput(),
      'action_type_id'    => new sfWidgetFormFilterInput(),
      'host_name'         => new sfWidgetFormFilterInput(),
      'document_root'     => new sfWidgetFormFilterInput(),
      'php_self'          => new sfWidgetFormFilterInput(),
      'pc_ip_address'     => new sfWidgetFormFilterInput(),
      'browser_type'      => new sfWidgetFormFilterInput(),
      'description'       => new sfWidgetFormFilterInput(),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'          => new sfValidatorPass(array('required' => false)),
      'org_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Organization'), 'column' => 'id')),
      'org_token_id'      => new sfValidatorPass(array('required' => false)),
      'user_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'module_setting_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ModuleSetting'), 'column' => 'id')),
      'action_date'       => new sfValidatorPass(array('required' => false)),
      'action_time'       => new sfValidatorPass(array('required' => false)),
      'action_data'       => new sfValidatorPass(array('required' => false)),
      'action_type_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'host_name'         => new sfValidatorPass(array('required' => false)),
      'document_root'     => new sfValidatorPass(array('required' => false)),
      'php_self'          => new sfValidatorPass(array('required' => false)),
      'pc_ip_address'     => new sfValidatorPass(array('required' => false)),
      'browser_type'      => new sfValidatorPass(array('required' => false)),
      'description'       => new sfValidatorPass(array('required' => false)),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('system_log_file_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SystemLogFile';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'token_id'          => 'Text',
      'org_id'            => 'ForeignKey',
      'org_token_id'      => 'Text',
      'user_id'           => 'ForeignKey',
      'module_setting_id' => 'ForeignKey',
      'action_date'       => 'Text',
      'action_time'       => 'Text',
      'action_data'       => 'Text',
      'action_type_id'    => 'Number',
      'host_name'         => 'Text',
      'document_root'     => 'Text',
      'php_self'          => 'Text',
      'pc_ip_address'     => 'Text',
      'browser_type'      => 'Text',
      'description'       => 'Text',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}

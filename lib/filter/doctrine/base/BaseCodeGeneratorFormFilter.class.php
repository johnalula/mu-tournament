<?php

/**
 * CodeGenerator filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCodeGeneratorFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'             => new sfWidgetFormFilterInput(),
      'org_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'         => new sfWidgetFormFilterInput(),
      'prefix_code'          => new sfWidgetFormFilterInput(),
      'alias'                => new sfWidgetFormFilterInput(),
      'initial_number'       => new sfWidgetFormFilterInput(),
      'last_code'            => new sfWidgetFormFilterInput(),
      'deleted_code'         => new sfWidgetFormFilterInput(),
      'can_recreate_deleted' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'code_type'            => new sfWidgetFormFilterInput(),
      'has_deleted'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'default_flag'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'applicable_flag'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'description'          => new sfWidgetFormFilterInput(),
      'created_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'             => new sfValidatorPass(array('required' => false)),
      'org_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Organization'), 'column' => 'id')),
      'org_token_id'         => new sfValidatorPass(array('required' => false)),
      'prefix_code'          => new sfValidatorPass(array('required' => false)),
      'alias'                => new sfValidatorPass(array('required' => false)),
      'initial_number'       => new sfValidatorPass(array('required' => false)),
      'last_code'            => new sfValidatorPass(array('required' => false)),
      'deleted_code'         => new sfValidatorPass(array('required' => false)),
      'can_recreate_deleted' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'code_type'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'has_deleted'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'default_flag'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'applicable_flag'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'description'          => new sfValidatorPass(array('required' => false)),
      'created_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('code_generator_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CodeGenerator';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'token_id'             => 'Text',
      'org_id'               => 'ForeignKey',
      'org_token_id'         => 'Text',
      'prefix_code'          => 'Text',
      'alias'                => 'Text',
      'initial_number'       => 'Text',
      'last_code'            => 'Text',
      'deleted_code'         => 'Text',
      'can_recreate_deleted' => 'Boolean',
      'code_type'            => 'Number',
      'has_deleted'          => 'Boolean',
      'default_flag'         => 'Boolean',
      'applicable_flag'      => 'Boolean',
      'active_flag'          => 'Boolean',
      'description'          => 'Text',
      'created_at'           => 'Date',
      'updated_at'           => 'Date',
    );
  }
}

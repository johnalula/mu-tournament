<?php

/**
 * GameCategory filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseGameCategoryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'             => new sfWidgetFormFilterInput(),
      'org_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'         => new sfWidgetFormFilterInput(),
      'category_type'        => new sfWidgetFormFilterInput(),
      'category_name'        => new sfWidgetFormFilterInput(),
      'alias'                => new sfWidgetFormFilterInput(),
      'contestant_team_mode' => new sfWidgetFormFilterInput(),
      'default_flag'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'               => new sfWidgetFormFilterInput(),
      'description'          => new sfWidgetFormFilterInput(),
      'created_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'             => new sfValidatorPass(array('required' => false)),
      'org_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Organization'), 'column' => 'id')),
      'org_token_id'         => new sfValidatorPass(array('required' => false)),
      'category_type'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'category_name'        => new sfValidatorPass(array('required' => false)),
      'alias'                => new sfValidatorPass(array('required' => false)),
      'contestant_team_mode' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'default_flag'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'          => new sfValidatorPass(array('required' => false)),
      'created_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('game_category_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'GameCategory';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'token_id'             => 'Text',
      'org_id'               => 'ForeignKey',
      'org_token_id'         => 'Text',
      'category_type'        => 'Number',
      'category_name'        => 'Text',
      'alias'                => 'Text',
      'contestant_team_mode' => 'Number',
      'default_flag'         => 'Boolean',
      'active_flag'          => 'Boolean',
      'status'               => 'Number',
      'description'          => 'Text',
      'created_at'           => 'Date',
      'updated_at'           => 'Date',
    );
  }
}

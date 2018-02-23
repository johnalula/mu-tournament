<?php

/**
 * SportGame filter form base class.
 *
 * @package    mu-TMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSportGameFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'             => new sfWidgetFormFilterInput(),
      'org_id'               => new sfWidgetFormFilterInput(),
      'tournament_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'add_empty' => true)),
      'sport_game_type_id'   => new sfWidgetFormFilterInput(),
      'name'                 => new sfWidgetFormFilterInput(),
      'alias'                => new sfWidgetFormFilterInput(),
      'envent_type'          => new sfWidgetFormFilterInput(),
      'distance_category'    => new sfWidgetFormFilterInput(),
      'distance'             => new sfWidgetFormFilterInput(),
      'distance_measurement' => new sfWidgetFormFilterInput(),
      'double_single_type'   => new sfWidgetFormFilterInput(),
      'start_date'           => new sfWidgetFormFilterInput(),
      'effective_date'       => new sfWidgetFormFilterInput(),
      'end_date'             => new sfWidgetFormFilterInput(),
      'roundable_flag'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'               => new sfWidgetFormFilterInput(),
      'description'          => new sfWidgetFormFilterInput(),
      'created_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'             => new sfValidatorPass(array('required' => false)),
      'org_id'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tournament_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tournament'), 'column' => 'id')),
      'sport_game_type_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'name'                 => new sfValidatorPass(array('required' => false)),
      'alias'                => new sfValidatorPass(array('required' => false)),
      'envent_type'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'distance_category'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'distance'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'distance_measurement' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'double_single_type'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'start_date'           => new sfValidatorPass(array('required' => false)),
      'effective_date'       => new sfValidatorPass(array('required' => false)),
      'end_date'             => new sfValidatorPass(array('required' => false)),
      'roundable_flag'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'          => new sfValidatorPass(array('required' => false)),
      'created_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('sport_game_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SportGame';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'token_id'             => 'Text',
      'org_id'               => 'Number',
      'tournament_id'        => 'ForeignKey',
      'sport_game_type_id'   => 'Number',
      'name'                 => 'Text',
      'alias'                => 'Text',
      'envent_type'          => 'Number',
      'distance_category'    => 'Number',
      'distance'             => 'Number',
      'distance_measurement' => 'Number',
      'double_single_type'   => 'Number',
      'start_date'           => 'Text',
      'effective_date'       => 'Text',
      'end_date'             => 'Text',
      'roundable_flag'       => 'Boolean',
      'active_flag'          => 'Boolean',
      'status'               => 'Number',
      'description'          => 'Text',
      'created_at'           => 'Date',
      'updated_at'           => 'Date',
    );
  }
}

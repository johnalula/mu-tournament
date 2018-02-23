<?php

/**
 * SportGameGroup filter form base class.
 *
 * @package    mu-TMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSportGameGroupFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'            => new sfWidgetFormFilterInput(),
      'tournament_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'add_empty' => true)),
      'group_name'          => new sfWidgetFormFilterInput(),
      'alias'               => new sfWidgetFormFilterInput(),
      'total_group_numbers' => new sfWidgetFormFilterInput(),
      'start_date'          => new sfWidgetFormFilterInput(),
      'end_date'            => new sfWidgetFormFilterInput(),
      'active_flag'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'              => new sfWidgetFormFilterInput(),
      'description'         => new sfWidgetFormFilterInput(),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'            => new sfValidatorPass(array('required' => false)),
      'tournament_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tournament'), 'column' => 'id')),
      'group_name'          => new sfValidatorPass(array('required' => false)),
      'alias'               => new sfValidatorPass(array('required' => false)),
      'total_group_numbers' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'start_date'          => new sfValidatorPass(array('required' => false)),
      'end_date'            => new sfValidatorPass(array('required' => false)),
      'active_flag'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'         => new sfValidatorPass(array('required' => false)),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('sport_game_group_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SportGameGroup';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'token_id'            => 'Text',
      'tournament_id'       => 'ForeignKey',
      'group_name'          => 'Text',
      'alias'               => 'Text',
      'total_group_numbers' => 'Number',
      'start_date'          => 'Text',
      'end_date'            => 'Text',
      'active_flag'         => 'Boolean',
      'status'              => 'Number',
      'description'         => 'Text',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}

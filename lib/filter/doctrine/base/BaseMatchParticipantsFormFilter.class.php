<?php

/**
 * MatchParticipants filter form base class.
 *
 * @package    mu-TMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMatchParticipantsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'            => new sfWidgetFormFilterInput(),
      'match_fixture_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MatchFixture'), 'add_empty' => true)),
      'sport_game_group_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SportGameGroup'), 'add_empty' => true)),
      'team_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'add_empty' => true)),
      'effective_date'      => new sfWidgetFormFilterInput(),
      'active_flag'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'              => new sfWidgetFormFilterInput(),
      'description'         => new sfWidgetFormFilterInput(),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'            => new sfValidatorPass(array('required' => false)),
      'match_fixture_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MatchFixture'), 'column' => 'id')),
      'sport_game_group_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SportGameGroup'), 'column' => 'id')),
      'team_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Team'), 'column' => 'id')),
      'effective_date'      => new sfValidatorPass(array('required' => false)),
      'active_flag'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'         => new sfValidatorPass(array('required' => false)),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('match_participants_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MatchParticipants';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'token_id'            => 'Text',
      'match_fixture_id'    => 'ForeignKey',
      'sport_game_group_id' => 'ForeignKey',
      'team_id'             => 'ForeignKey',
      'effective_date'      => 'Text',
      'active_flag'         => 'Boolean',
      'status'              => 'Number',
      'description'         => 'Text',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}

<?php

/**
 * TournamentMatchFixture filter form base class.
 *
 * @package    mu-TMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTournamentMatchFixtureFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'                      => new sfWidgetFormFilterInput(),
      'tournament_match_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatch'), 'add_empty' => true)),
      'tournament_match_token_id'     => new sfWidgetFormFilterInput(),
      'parent_match_fixture_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixture'), 'add_empty' => true)),
      'parent_match_fixture_token_id' => new sfWidgetFormFilterInput(),
      'sport_game_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SportGame'), 'add_empty' => true)),
      'sport_game_token_id'           => new sfWidgetFormFilterInput(),
      'sport_game_group_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SportGameGroup'), 'add_empty' => true)),
      'match_round_type_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RoundType'), 'add_empty' => true)),
      'gender_category_id'            => new sfWidgetFormFilterInput(),
      'match_fixture_round_mode'      => new sfWidgetFormFilterInput(),
      'event_type'                    => new sfWidgetFormFilterInput(),
      'contestant_mode'               => new sfWidgetFormFilterInput(),
      'match_venue'                   => new sfWidgetFormFilterInput(),
      'tournament_match_number'       => new sfWidgetFormFilterInput(),
      'match_date'                    => new sfWidgetFormFilterInput(),
      'match_time'                    => new sfWidgetFormFilterInput(),
      'start_date'                    => new sfWidgetFormFilterInput(),
      'effective_date'                => new sfWidgetFormFilterInput(),
      'end_date'                      => new sfWidgetFormFilterInput(),
      'parent_flag'                   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'inheritable_flag'              => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'roundable_flag'                => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'                   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'complete_flag'                 => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'approval_status'               => new sfWidgetFormFilterInput(),
      'status'                        => new sfWidgetFormFilterInput(),
      'description'                   => new sfWidgetFormFilterInput(),
      'created_at'                    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'                      => new sfValidatorPass(array('required' => false)),
      'tournament_match_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentMatch'), 'column' => 'id')),
      'tournament_match_token_id'     => new sfValidatorPass(array('required' => false)),
      'parent_match_fixture_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentMatchFixture'), 'column' => 'id')),
      'parent_match_fixture_token_id' => new sfValidatorPass(array('required' => false)),
      'sport_game_id'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SportGame'), 'column' => 'id')),
      'sport_game_token_id'           => new sfValidatorPass(array('required' => false)),
      'sport_game_group_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SportGameGroup'), 'column' => 'id')),
      'match_round_type_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('RoundType'), 'column' => 'id')),
      'gender_category_id'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'match_fixture_round_mode'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'event_type'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'contestant_mode'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'match_venue'                   => new sfValidatorPass(array('required' => false)),
      'tournament_match_number'       => new sfValidatorPass(array('required' => false)),
      'match_date'                    => new sfValidatorPass(array('required' => false)),
      'match_time'                    => new sfValidatorPass(array('required' => false)),
      'start_date'                    => new sfValidatorPass(array('required' => false)),
      'effective_date'                => new sfValidatorPass(array('required' => false)),
      'end_date'                      => new sfValidatorPass(array('required' => false)),
      'parent_flag'                   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'inheritable_flag'              => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'roundable_flag'                => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'                   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'complete_flag'                 => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'approval_status'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'                        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'                   => new sfValidatorPass(array('required' => false)),
      'created_at'                    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('tournament_match_fixture_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentMatchFixture';
  }

  public function getFields()
  {
    return array(
      'id'                            => 'Number',
      'token_id'                      => 'Text',
      'tournament_match_id'           => 'ForeignKey',
      'tournament_match_token_id'     => 'Text',
      'parent_match_fixture_id'       => 'ForeignKey',
      'parent_match_fixture_token_id' => 'Text',
      'sport_game_id'                 => 'ForeignKey',
      'sport_game_token_id'           => 'Text',
      'sport_game_group_id'           => 'ForeignKey',
      'match_round_type_id'           => 'ForeignKey',
      'gender_category_id'            => 'Number',
      'match_fixture_round_mode'      => 'Number',
      'event_type'                    => 'Number',
      'contestant_mode'               => 'Number',
      'match_venue'                   => 'Text',
      'tournament_match_number'       => 'Text',
      'match_date'                    => 'Text',
      'match_time'                    => 'Text',
      'start_date'                    => 'Text',
      'effective_date'                => 'Text',
      'end_date'                      => 'Text',
      'parent_flag'                   => 'Boolean',
      'inheritable_flag'              => 'Boolean',
      'roundable_flag'                => 'Boolean',
      'active_flag'                   => 'Boolean',
      'complete_flag'                 => 'Boolean',
      'approval_status'               => 'Number',
      'status'                        => 'Number',
      'description'                   => 'Text',
      'created_at'                    => 'Date',
      'updated_at'                    => 'Date',
    );
  }
}

<?php

/**
 * TournamentMatchFixture filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTournamentMatchFixtureFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'                             => new sfWidgetFormFilterInput(),
      'tournament_match_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatch'), 'add_empty' => true)),
      'tournament_match_token_id'            => new sfWidgetFormFilterInput(),
      'parent_match_fixture_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixture'), 'add_empty' => true)),
      'parent_match_fixture_token_id'        => new sfWidgetFormFilterInput(),
      'tournament_sport_game_group_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentSportGameGroup'), 'add_empty' => true)),
      'tournament_sport_game_group_token_id' => new sfWidgetFormFilterInput(),
      'sport_game_id'                        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SportGame'), 'add_empty' => true)),
      'sport_game_token_id'                  => new sfWidgetFormFilterInput(),
      'match_round_type_id'                  => new sfWidgetFormFilterInput(),
      'match_heat_type_id'                   => new sfWidgetFormFilterInput(),
      'match_round_type_name'                => new sfWidgetFormFilterInput(),
      'match_heat_type_name'                 => new sfWidgetFormFilterInput(),
      'match_heat_number'                    => new sfWidgetFormFilterInput(),
      'match_heat_name'                      => new sfWidgetFormFilterInput(),
      'gender_category_id'                   => new sfWidgetFormFilterInput(),
      'match_fixture_round_mode'             => new sfWidgetFormFilterInput(),
      'event_type'                           => new sfWidgetFormFilterInput(),
      'contestant_mode'                      => new sfWidgetFormFilterInput(),
      'number_of_qualifying_rows'            => new sfWidgetFormFilterInput(),
      'number_of_best_qualifying_rows'       => new sfWidgetFormFilterInput(),
      'contestant_team_mode'                 => new sfWidgetFormFilterInput(),
      'match_venue'                          => new sfWidgetFormFilterInput(),
      'tournament_match_session_mode'        => new sfWidgetFormFilterInput(),
      'tournament_match_fixture_number'      => new sfWidgetFormFilterInput(),
      'tournament_match_fixture_full_number' => new sfWidgetFormFilterInput(),
      'match_date'                           => new sfWidgetFormFilterInput(),
      'match_time'                           => new sfWidgetFormFilterInput(),
      'start_date'                           => new sfWidgetFormFilterInput(),
      'effective_date'                       => new sfWidgetFormFilterInput(),
      'end_date'                             => new sfWidgetFormFilterInput(),
      'qualifying_rows_enable_flag'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'best_qualifying_row_enable_flag'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'parent_flag'                          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'inheritable_flag'                     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'roundable_flag'                       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'                          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'competition_flag'                     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'complete_flag'                        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'competition_status'                   => new sfWidgetFormFilterInput(),
      'fixture_round_status'                 => new sfWidgetFormFilterInput(),
      'process_status'                       => new sfWidgetFormFilterInput(),
      'approval_status'                      => new sfWidgetFormFilterInput(),
      'status'                               => new sfWidgetFormFilterInput(),
      'description'                          => new sfWidgetFormFilterInput(),
      'created_at'                           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'                             => new sfValidatorPass(array('required' => false)),
      'tournament_match_id'                  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentMatch'), 'column' => 'id')),
      'tournament_match_token_id'            => new sfValidatorPass(array('required' => false)),
      'parent_match_fixture_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentMatchFixture'), 'column' => 'id')),
      'parent_match_fixture_token_id'        => new sfValidatorPass(array('required' => false)),
      'tournament_sport_game_group_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentSportGameGroup'), 'column' => 'id')),
      'tournament_sport_game_group_token_id' => new sfValidatorPass(array('required' => false)),
      'sport_game_id'                        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SportGame'), 'column' => 'id')),
      'sport_game_token_id'                  => new sfValidatorPass(array('required' => false)),
      'match_round_type_id'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'match_heat_type_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'match_round_type_name'                => new sfValidatorPass(array('required' => false)),
      'match_heat_type_name'                 => new sfValidatorPass(array('required' => false)),
      'match_heat_number'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'match_heat_name'                      => new sfValidatorPass(array('required' => false)),
      'gender_category_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'match_fixture_round_mode'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'event_type'                           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'contestant_mode'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'number_of_qualifying_rows'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'number_of_best_qualifying_rows'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'contestant_team_mode'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'match_venue'                          => new sfValidatorPass(array('required' => false)),
      'tournament_match_session_mode'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tournament_match_fixture_number'      => new sfValidatorPass(array('required' => false)),
      'tournament_match_fixture_full_number' => new sfValidatorPass(array('required' => false)),
      'match_date'                           => new sfValidatorPass(array('required' => false)),
      'match_time'                           => new sfValidatorPass(array('required' => false)),
      'start_date'                           => new sfValidatorPass(array('required' => false)),
      'effective_date'                       => new sfValidatorPass(array('required' => false)),
      'end_date'                             => new sfValidatorPass(array('required' => false)),
      'qualifying_rows_enable_flag'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'best_qualifying_row_enable_flag'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'parent_flag'                          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'inheritable_flag'                     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'roundable_flag'                       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'                          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'competition_flag'                     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'complete_flag'                        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'competition_status'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fixture_round_status'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'process_status'                       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'approval_status'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'                               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'                          => new sfValidatorPass(array('required' => false)),
      'created_at'                           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
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
      'id'                                   => 'Number',
      'token_id'                             => 'Text',
      'tournament_match_id'                  => 'ForeignKey',
      'tournament_match_token_id'            => 'Text',
      'parent_match_fixture_id'              => 'ForeignKey',
      'parent_match_fixture_token_id'        => 'Text',
      'tournament_sport_game_group_id'       => 'ForeignKey',
      'tournament_sport_game_group_token_id' => 'Text',
      'sport_game_id'                        => 'ForeignKey',
      'sport_game_token_id'                  => 'Text',
      'match_round_type_id'                  => 'Number',
      'match_heat_type_id'                   => 'Number',
      'match_round_type_name'                => 'Text',
      'match_heat_type_name'                 => 'Text',
      'match_heat_number'                    => 'Number',
      'match_heat_name'                      => 'Text',
      'gender_category_id'                   => 'Number',
      'match_fixture_round_mode'             => 'Number',
      'event_type'                           => 'Number',
      'contestant_mode'                      => 'Number',
      'number_of_qualifying_rows'            => 'Number',
      'number_of_best_qualifying_rows'       => 'Number',
      'contestant_team_mode'                 => 'Number',
      'match_venue'                          => 'Text',
      'tournament_match_session_mode'        => 'Number',
      'tournament_match_fixture_number'      => 'Text',
      'tournament_match_fixture_full_number' => 'Text',
      'match_date'                           => 'Text',
      'match_time'                           => 'Text',
      'start_date'                           => 'Text',
      'effective_date'                       => 'Text',
      'end_date'                             => 'Text',
      'qualifying_rows_enable_flag'          => 'Boolean',
      'best_qualifying_row_enable_flag'      => 'Boolean',
      'parent_flag'                          => 'Boolean',
      'inheritable_flag'                     => 'Boolean',
      'roundable_flag'                       => 'Boolean',
      'active_flag'                          => 'Boolean',
      'competition_flag'                     => 'Boolean',
      'complete_flag'                        => 'Boolean',
      'competition_status'                   => 'Number',
      'fixture_round_status'                 => 'Number',
      'process_status'                       => 'Number',
      'approval_status'                      => 'Number',
      'status'                               => 'Number',
      'description'                          => 'Text',
      'created_at'                           => 'Date',
      'updated_at'                           => 'Date',
    );
  }
}

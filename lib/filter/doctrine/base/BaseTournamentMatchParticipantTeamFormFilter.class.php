<?php

/**
 * TournamentMatchParticipantTeam filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTournamentMatchParticipantTeamFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'                                => new sfWidgetFormFilterInput(),
      'tournament_match_id'                     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatch'), 'add_empty' => true)),
      'tournament_match_fixture_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixture'), 'add_empty' => true)),
      'tournament_match_fixture_token_id'       => new sfWidgetFormFilterInput(),
      'tournament_match_fixture_group_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixtureGroup'), 'add_empty' => true)),
      'tournament_match_fixture_group_token_id' => new sfWidgetFormFilterInput(),
      'tournament_sport_game_group_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentSportGameGroup'), 'add_empty' => true)),
      'group_participant_team_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentGroupParticipantTeam'), 'add_empty' => true)),
      'group_participant_team_token_id'         => new sfWidgetFormFilterInput(),
      'match_result_point'                      => new sfWidgetFormFilterInput(),
      'match_result_score'                      => new sfWidgetFormFilterInput(),
      'match_result_total_goals'                => new sfWidgetFormFilterInput(),
      'match_result_time'                       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'red_card_number'                         => new sfWidgetFormFilterInput(),
      'yellow_card_number'                      => new sfWidgetFormFilterInput(),
      'match_result_winner_point'               => new sfWidgetFormFilterInput(),
      'match_result_loser_point'                => new sfWidgetFormFilterInput(),
      'standing_rank'                           => new sfWidgetFormFilterInput(),
      'gold_medal'                              => new sfWidgetFormFilterInput(),
      'silver_medal'                            => new sfWidgetFormFilterInput(),
      'bronze_medal'                            => new sfWidgetFormFilterInput(),
      'total_medal_award'                       => new sfWidgetFormFilterInput(),
      'effective_date'                          => new sfWidgetFormFilterInput(),
      'qualified_flag'                          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'confirmed_flag'                          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'                             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'competition_flag'                        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'medal_award_flag'                        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'qualification_status'                    => new sfWidgetFormFilterInput(),
      'competition_status'                      => new sfWidgetFormFilterInput(),
      'process_status'                          => new sfWidgetFormFilterInput(),
      'approval_status'                         => new sfWidgetFormFilterInput(),
      'status'                                  => new sfWidgetFormFilterInput(),
      'description'                             => new sfWidgetFormFilterInput(),
      'type'                                    => new sfWidgetFormFilterInput(),
      'created_at'                              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'                                => new sfValidatorPass(array('required' => false)),
      'tournament_match_id'                     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentMatch'), 'column' => 'id')),
      'tournament_match_fixture_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentMatchFixture'), 'column' => 'id')),
      'tournament_match_fixture_token_id'       => new sfValidatorPass(array('required' => false)),
      'tournament_match_fixture_group_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentMatchFixtureGroup'), 'column' => 'id')),
      'tournament_match_fixture_group_token_id' => new sfValidatorPass(array('required' => false)),
      'tournament_sport_game_group_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentSportGameGroup'), 'column' => 'id')),
      'group_participant_team_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentGroupParticipantTeam'), 'column' => 'id')),
      'group_participant_team_token_id'         => new sfValidatorPass(array('required' => false)),
      'match_result_point'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'match_result_score'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'match_result_total_goals'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'match_result_time'                       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'red_card_number'                         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'yellow_card_number'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'match_result_winner_point'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'match_result_loser_point'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'standing_rank'                           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gold_medal'                              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'silver_medal'                            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'bronze_medal'                            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'total_medal_award'                       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'effective_date'                          => new sfValidatorPass(array('required' => false)),
      'qualified_flag'                          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'confirmed_flag'                          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'                             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'competition_flag'                        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'medal_award_flag'                        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'qualification_status'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'competition_status'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'process_status'                          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'approval_status'                         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'                                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'                             => new sfValidatorPass(array('required' => false)),
      'type'                                    => new sfValidatorPass(array('required' => false)),
      'created_at'                              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('tournament_match_participant_team_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentMatchParticipantTeam';
  }

  public function getFields()
  {
    return array(
      'id'                                      => 'Number',
      'token_id'                                => 'Text',
      'tournament_match_id'                     => 'ForeignKey',
      'tournament_match_fixture_id'             => 'ForeignKey',
      'tournament_match_fixture_token_id'       => 'Text',
      'tournament_match_fixture_group_id'       => 'ForeignKey',
      'tournament_match_fixture_group_token_id' => 'Text',
      'tournament_sport_game_group_id'          => 'ForeignKey',
      'group_participant_team_id'               => 'ForeignKey',
      'group_participant_team_token_id'         => 'Text',
      'match_result_point'                      => 'Number',
      'match_result_score'                      => 'Number',
      'match_result_total_goals'                => 'Number',
      'match_result_time'                       => 'Date',
      'red_card_number'                         => 'Number',
      'yellow_card_number'                      => 'Number',
      'match_result_winner_point'               => 'Number',
      'match_result_loser_point'                => 'Number',
      'standing_rank'                           => 'Number',
      'gold_medal'                              => 'Number',
      'silver_medal'                            => 'Number',
      'bronze_medal'                            => 'Number',
      'total_medal_award'                       => 'Number',
      'effective_date'                          => 'Text',
      'qualified_flag'                          => 'Boolean',
      'confirmed_flag'                          => 'Boolean',
      'active_flag'                             => 'Boolean',
      'competition_flag'                        => 'Boolean',
      'medal_award_flag'                        => 'Boolean',
      'qualification_status'                    => 'Number',
      'competition_status'                      => 'Number',
      'process_status'                          => 'Number',
      'approval_status'                         => 'Number',
      'status'                                  => 'Number',
      'description'                             => 'Text',
      'type'                                    => 'Text',
      'created_at'                              => 'Date',
      'updated_at'                              => 'Date',
    );
  }
}

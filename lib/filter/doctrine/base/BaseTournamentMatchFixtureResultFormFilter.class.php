<?php

/**
 * TournamentMatchFixtureResult filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTournamentMatchFixtureResultFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'                                 => new sfWidgetFormFilterInput(),
      'tournament_match_fixture_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixture'), 'add_empty' => true)),
      'tournament_match_fixture_group_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixtureGroup'), 'add_empty' => true)),
      'match_fixture_team_member_participant_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchTeamMemberParticipant'), 'add_empty' => true)),
      'match_round_type'                         => new sfWidgetFormFilterInput(),
      'match_result_rank'                        => new sfWidgetFormFilterInput(),
      'match_position_order'                     => new sfWidgetFormFilterInput(),
      'match_result_position_order'              => new sfWidgetFormFilterInput(),
      'match_result_point'                       => new sfWidgetFormFilterInput(),
      'match_result_score'                       => new sfWidgetFormFilterInput(),
      'match_result_goal_number'                 => new sfWidgetFormFilterInput(),
      'match_result_distance'                    => new sfWidgetFormFilterInput(),
      'match_result_height'                      => new sfWidgetFormFilterInput(),
      'match_result_time'                        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'effective_date'                           => new sfWidgetFormFilterInput(),
      'qualified_flag'                           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'                              => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'medal_award_flag'                         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'qualification_status'                     => new sfWidgetFormFilterInput(),
      'competition_status'                       => new sfWidgetFormFilterInput(),
      'status'                                   => new sfWidgetFormFilterInput(),
      'description'                              => new sfWidgetFormFilterInput(),
      'created_at'                               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'                                 => new sfValidatorPass(array('required' => false)),
      'tournament_match_fixture_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentMatchFixture'), 'column' => 'id')),
      'tournament_match_fixture_group_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentMatchFixtureGroup'), 'column' => 'id')),
      'match_fixture_team_member_participant_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentMatchTeamMemberParticipant'), 'column' => 'id')),
      'match_round_type'                         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'match_result_rank'                        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'match_position_order'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'match_result_position_order'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'match_result_point'                       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'match_result_score'                       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'match_result_goal_number'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'match_result_distance'                    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'match_result_height'                      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'match_result_time'                        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'effective_date'                           => new sfValidatorPass(array('required' => false)),
      'qualified_flag'                           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'                              => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'medal_award_flag'                         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'qualification_status'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'competition_status'                       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'                                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'                              => new sfValidatorPass(array('required' => false)),
      'created_at'                               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('tournament_match_fixture_result_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentMatchFixtureResult';
  }

  public function getFields()
  {
    return array(
      'id'                                       => 'Number',
      'token_id'                                 => 'Text',
      'tournament_match_fixture_id'              => 'ForeignKey',
      'tournament_match_fixture_group_id'        => 'ForeignKey',
      'match_fixture_team_member_participant_id' => 'ForeignKey',
      'match_round_type'                         => 'Number',
      'match_result_rank'                        => 'Number',
      'match_position_order'                     => 'Number',
      'match_result_position_order'              => 'Number',
      'match_result_point'                       => 'Number',
      'match_result_score'                       => 'Number',
      'match_result_goal_number'                 => 'Number',
      'match_result_distance'                    => 'Number',
      'match_result_height'                      => 'Number',
      'match_result_time'                        => 'Date',
      'effective_date'                           => 'Text',
      'qualified_flag'                           => 'Boolean',
      'active_flag'                              => 'Boolean',
      'medal_award_flag'                         => 'Boolean',
      'qualification_status'                     => 'Number',
      'competition_status'                       => 'Number',
      'status'                                   => 'Number',
      'description'                              => 'Text',
      'created_at'                               => 'Date',
      'updated_at'                               => 'Date',
    );
  }
}

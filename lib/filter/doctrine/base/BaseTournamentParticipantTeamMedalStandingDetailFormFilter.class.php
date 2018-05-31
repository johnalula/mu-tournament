<?php

/**
 * TournamentParticipantTeamMedalStandingDetail filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTournamentParticipantTeamMedalStandingDetailFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'                                 => new sfWidgetFormFilterInput(),
      'participant_team_medal_standing_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentParticipantTeamMedalStanding'), 'add_empty' => true)),
      'participant_team_medal_standing_token_id' => new sfWidgetFormFilterInput(),
      'tournament_match_fixture_group_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixtureGroup'), 'add_empty' => true)),
      'participant_team_member_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchTeamMemberParticipant'), 'add_empty' => true)),
      'sport_game_id'                            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SportGame'), 'add_empty' => true)),
      'standing_rank'                            => new sfWidgetFormFilterInput(),
      'gold_medal'                               => new sfWidgetFormFilterInput(),
      'silver_medal'                             => new sfWidgetFormFilterInput(),
      'bronze_medal'                             => new sfWidgetFormFilterInput(),
      'total_medal_award'                        => new sfWidgetFormFilterInput(),
      'active_flag'                              => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'                                   => new sfWidgetFormFilterInput(),
      'description'                              => new sfWidgetFormFilterInput(),
      'created_at'                               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'                                 => new sfValidatorPass(array('required' => false)),
      'participant_team_medal_standing_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentParticipantTeamMedalStanding'), 'column' => 'id')),
      'participant_team_medal_standing_token_id' => new sfValidatorPass(array('required' => false)),
      'tournament_match_fixture_group_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentMatchFixtureGroup'), 'column' => 'id')),
      'participant_team_member_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentMatchTeamMemberParticipant'), 'column' => 'id')),
      'sport_game_id'                            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SportGame'), 'column' => 'id')),
      'standing_rank'                            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gold_medal'                               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'silver_medal'                             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'bronze_medal'                             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'total_medal_award'                        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'active_flag'                              => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'                                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'                              => new sfValidatorPass(array('required' => false)),
      'created_at'                               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('tournament_participant_team_medal_standing_detail_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentParticipantTeamMedalStandingDetail';
  }

  public function getFields()
  {
    return array(
      'id'                                       => 'Number',
      'token_id'                                 => 'Text',
      'participant_team_medal_standing_id'       => 'ForeignKey',
      'participant_team_medal_standing_token_id' => 'Text',
      'tournament_match_fixture_group_id'        => 'ForeignKey',
      'participant_team_member_id'               => 'ForeignKey',
      'sport_game_id'                            => 'ForeignKey',
      'standing_rank'                            => 'Number',
      'gold_medal'                               => 'Number',
      'silver_medal'                             => 'Number',
      'bronze_medal'                             => 'Number',
      'total_medal_award'                        => 'Number',
      'active_flag'                              => 'Boolean',
      'status'                                   => 'Number',
      'description'                              => 'Text',
      'created_at'                               => 'Date',
      'updated_at'                               => 'Date',
    );
  }
}

<?php

/**
 * TournamentMatchTeamMedalAward filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTournamentMatchTeamMedalAwardFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'                             => new sfWidgetFormFilterInput(),
      'tournament_match_medal_award_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchMedalAward'), 'add_empty' => true)),
      'tournament_match_fixture_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixture'), 'add_empty' => true)),
      'tournament_match_fixture_group_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixtureGroup'), 'add_empty' => true)),
      'tournament_match_participant_team_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchParticipantTeam'), 'add_empty' => true)),
      'tournament_medal_award_mode'          => new sfWidgetFormFilterInput(),
      'gold_medal'                           => new sfWidgetFormFilterInput(),
      'silver_medal'                         => new sfWidgetFormFilterInput(),
      'bronze_medal'                         => new sfWidgetFormFilterInput(),
      'other_medal_award'                    => new sfWidgetFormFilterInput(),
      'total_medal_award'                    => new sfWidgetFormFilterInput(),
      'active_flag'                          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'                               => new sfWidgetFormFilterInput(),
      'description'                          => new sfWidgetFormFilterInput(),
      'created_at'                           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'                             => new sfValidatorPass(array('required' => false)),
      'tournament_match_medal_award_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentMatchMedalAward'), 'column' => 'id')),
      'tournament_match_fixture_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentMatchFixture'), 'column' => 'id')),
      'tournament_match_fixture_group_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentMatchFixtureGroup'), 'column' => 'id')),
      'tournament_match_participant_team_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentMatchParticipantTeam'), 'column' => 'id')),
      'tournament_medal_award_mode'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gold_medal'                           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'silver_medal'                         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'bronze_medal'                         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'other_medal_award'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'total_medal_award'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'active_flag'                          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'                               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'                          => new sfValidatorPass(array('required' => false)),
      'created_at'                           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('tournament_match_team_medal_award_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentMatchTeamMedalAward';
  }

  public function getFields()
  {
    return array(
      'id'                                   => 'Number',
      'token_id'                             => 'Text',
      'tournament_match_medal_award_id'      => 'ForeignKey',
      'tournament_match_fixture_id'          => 'ForeignKey',
      'tournament_match_fixture_group_id'    => 'ForeignKey',
      'tournament_match_participant_team_id' => 'ForeignKey',
      'tournament_medal_award_mode'          => 'Number',
      'gold_medal'                           => 'Number',
      'silver_medal'                         => 'Number',
      'bronze_medal'                         => 'Number',
      'other_medal_award'                    => 'Number',
      'total_medal_award'                    => 'Number',
      'active_flag'                          => 'Boolean',
      'status'                               => 'Number',
      'description'                          => 'Text',
      'created_at'                           => 'Date',
      'updated_at'                           => 'Date',
    );
  }
}

<?php

/**
 * TournamentMatchParticipantTeam filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTournamentMatchParticipantTeamFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'                       => new sfWidgetFormFilterInput(),
      'match_fixture_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixture'), 'add_empty' => true)),
      'match_fixture_token_id'         => new sfWidgetFormFilterInput(),
      'sport_game_group_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SportGameGroup'), 'add_empty' => true)),
      'sport_game_group_token_id'      => new sfWidgetFormFilterInput(),
      'sport_game_team_group_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SportGameTeamGroup'), 'add_empty' => true)),
      'sport_game_team_group_token_id' => new sfWidgetFormFilterInput(),
      'effective_date'                 => new sfWidgetFormFilterInput(),
      'qualified_flag'                 => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'qualification_status'           => new sfWidgetFormFilterInput(),
      'confirm_flag'                   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'                    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'approval_status'                => new sfWidgetFormFilterInput(),
      'status'                         => new sfWidgetFormFilterInput(),
      'description'                    => new sfWidgetFormFilterInput(),
      'type'                           => new sfWidgetFormFilterInput(),
      'created_at'                     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'                       => new sfValidatorPass(array('required' => false)),
      'match_fixture_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentMatchFixture'), 'column' => 'id')),
      'match_fixture_token_id'         => new sfValidatorPass(array('required' => false)),
      'sport_game_group_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SportGameGroup'), 'column' => 'id')),
      'sport_game_group_token_id'      => new sfValidatorPass(array('required' => false)),
      'sport_game_team_group_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SportGameTeamGroup'), 'column' => 'id')),
      'sport_game_team_group_token_id' => new sfValidatorPass(array('required' => false)),
      'effective_date'                 => new sfValidatorPass(array('required' => false)),
      'qualified_flag'                 => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'qualification_status'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'confirm_flag'                   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'                    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'approval_status'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'                         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'                    => new sfValidatorPass(array('required' => false)),
      'type'                           => new sfValidatorPass(array('required' => false)),
      'created_at'                     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
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
      'id'                             => 'Number',
      'token_id'                       => 'Text',
      'match_fixture_id'               => 'ForeignKey',
      'match_fixture_token_id'         => 'Text',
      'sport_game_group_id'            => 'ForeignKey',
      'sport_game_group_token_id'      => 'Text',
      'sport_game_team_group_id'       => 'ForeignKey',
      'sport_game_team_group_token_id' => 'Text',
      'effective_date'                 => 'Text',
      'qualified_flag'                 => 'Boolean',
      'qualification_status'           => 'Number',
      'confirm_flag'                   => 'Boolean',
      'active_flag'                    => 'Boolean',
      'approval_status'                => 'Number',
      'status'                         => 'Number',
      'description'                    => 'Text',
      'type'                           => 'Text',
      'created_at'                     => 'Date',
      'updated_at'                     => 'Date',
    );
  }
}

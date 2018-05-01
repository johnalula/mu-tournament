<?php

/**
 * TournamentGroupParticipantTeam filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTournamentGroupParticipantTeamFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'                  => new sfWidgetFormFilterInput(),
      'tournament_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'add_empty' => true)),
      'sport_game_group_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentSportGameGroup'), 'add_empty' => true)),
      'sport_game_group_token_id' => new sfWidgetFormFilterInput(),
      'team_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'add_empty' => true)),
      'team_token_id'             => new sfWidgetFormFilterInput(),
      'start_date'                => new sfWidgetFormFilterInput(),
      'effective_date'            => new sfWidgetFormFilterInput(),
      'end_date'                  => new sfWidgetFormFilterInput(),
      'active_flag'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'completed_flag'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'qualified_flag'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'qualification_status'      => new sfWidgetFormFilterInput(),
      'approval_status'           => new sfWidgetFormFilterInput(),
      'status'                    => new sfWidgetFormFilterInput(),
      'description'               => new sfWidgetFormFilterInput(),
      'created_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'                  => new sfValidatorPass(array('required' => false)),
      'tournament_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tournament'), 'column' => 'id')),
      'sport_game_group_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentSportGameGroup'), 'column' => 'id')),
      'sport_game_group_token_id' => new sfValidatorPass(array('required' => false)),
      'team_id'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Team'), 'column' => 'id')),
      'team_token_id'             => new sfValidatorPass(array('required' => false)),
      'start_date'                => new sfValidatorPass(array('required' => false)),
      'effective_date'            => new sfValidatorPass(array('required' => false)),
      'end_date'                  => new sfValidatorPass(array('required' => false)),
      'active_flag'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'completed_flag'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'qualified_flag'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'qualification_status'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'approval_status'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'               => new sfValidatorPass(array('required' => false)),
      'created_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('tournament_group_participant_team_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentGroupParticipantTeam';
  }

  public function getFields()
  {
    return array(
      'id'                        => 'Number',
      'token_id'                  => 'Text',
      'tournament_id'             => 'ForeignKey',
      'sport_game_group_id'       => 'ForeignKey',
      'sport_game_group_token_id' => 'Text',
      'team_id'                   => 'ForeignKey',
      'team_token_id'             => 'Text',
      'start_date'                => 'Text',
      'effective_date'            => 'Text',
      'end_date'                  => 'Text',
      'active_flag'               => 'Boolean',
      'completed_flag'            => 'Boolean',
      'qualified_flag'            => 'Boolean',
      'qualification_status'      => 'Number',
      'approval_status'           => 'Number',
      'status'                    => 'Number',
      'description'               => 'Text',
      'created_at'                => 'Date',
      'updated_at'                => 'Date',
    );
  }
}

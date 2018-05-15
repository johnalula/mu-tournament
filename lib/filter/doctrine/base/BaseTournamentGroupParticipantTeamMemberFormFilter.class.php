<?php

/**
 * TournamentGroupParticipantTeamMember filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTournamentGroupParticipantTeamMemberFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'                             => new sfWidgetFormFilterInput(),
      'tournament_sport_game_group_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentSportGameGroup'), 'add_empty' => true)),
      'tournament_sport_game_group_token_id' => new sfWidgetFormFilterInput(),
      'group_participant_team_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentGroupParticipantTeam'), 'add_empty' => true)),
      'group_participant_team_token_id'      => new sfWidgetFormFilterInput(),
      'team_member_participant_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TeamMemberParticipant'), 'add_empty' => true)),
      'team_member_participant_token_id'     => new sfWidgetFormFilterInput(),
      'team_member_participant_role_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TeamMemberParticipantRole'), 'add_empty' => true)),
      'start_date'                           => new sfWidgetFormFilterInput(),
      'effective_date'                       => new sfWidgetFormFilterInput(),
      'end_date'                             => new sfWidgetFormFilterInput(),
      'confirmed_flag'                       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'                          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'qualified_flag'                       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'qualification_status'                 => new sfWidgetFormFilterInput(),
      'confirmed_status'                     => new sfWidgetFormFilterInput(),
      'standing_status'                      => new sfWidgetFormFilterInput(),
      'contestant_status'                    => new sfWidgetFormFilterInput(),
      'process_status'                       => new sfWidgetFormFilterInput(),
      'approval_status'                      => new sfWidgetFormFilterInput(),
      'status'                               => new sfWidgetFormFilterInput(),
      'description'                          => new sfWidgetFormFilterInput(),
      'created_at'                           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'                             => new sfValidatorPass(array('required' => false)),
      'tournament_sport_game_group_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentSportGameGroup'), 'column' => 'id')),
      'tournament_sport_game_group_token_id' => new sfValidatorPass(array('required' => false)),
      'group_participant_team_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentGroupParticipantTeam'), 'column' => 'id')),
      'group_participant_team_token_id'      => new sfValidatorPass(array('required' => false)),
      'team_member_participant_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TeamMemberParticipant'), 'column' => 'id')),
      'team_member_participant_token_id'     => new sfValidatorPass(array('required' => false)),
      'team_member_participant_role_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TeamMemberParticipantRole'), 'column' => 'id')),
      'start_date'                           => new sfValidatorPass(array('required' => false)),
      'effective_date'                       => new sfValidatorPass(array('required' => false)),
      'end_date'                             => new sfValidatorPass(array('required' => false)),
      'confirmed_flag'                       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'                          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'qualified_flag'                       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'qualification_status'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'confirmed_status'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'standing_status'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'contestant_status'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'process_status'                       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'approval_status'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'                               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'                          => new sfValidatorPass(array('required' => false)),
      'created_at'                           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('tournament_group_participant_team_member_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentGroupParticipantTeamMember';
  }

  public function getFields()
  {
    return array(
      'id'                                   => 'Number',
      'token_id'                             => 'Text',
      'tournament_sport_game_group_id'       => 'ForeignKey',
      'tournament_sport_game_group_token_id' => 'Text',
      'group_participant_team_id'            => 'ForeignKey',
      'group_participant_team_token_id'      => 'Text',
      'team_member_participant_id'           => 'ForeignKey',
      'team_member_participant_token_id'     => 'Text',
      'team_member_participant_role_id'      => 'ForeignKey',
      'start_date'                           => 'Text',
      'effective_date'                       => 'Text',
      'end_date'                             => 'Text',
      'confirmed_flag'                       => 'Boolean',
      'active_flag'                          => 'Boolean',
      'qualified_flag'                       => 'Boolean',
      'qualification_status'                 => 'Number',
      'confirmed_status'                     => 'Number',
      'standing_status'                      => 'Number',
      'contestant_status'                    => 'Number',
      'process_status'                       => 'Number',
      'approval_status'                      => 'Number',
      'status'                               => 'Number',
      'description'                          => 'Text',
      'created_at'                           => 'Date',
      'updated_at'                           => 'Date',
    );
  }
}

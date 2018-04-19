<?php

/**
 * TeamGroupMemberParticipant filter form base class.
 *
 * @package    mu-TMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTeamGroupMemberParticipantFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'                         => new sfWidgetFormFilterInput(),
      'sport_game_group_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SportGameGroup'), 'add_empty' => true)),
      'sport_game_group_token_id'        => new sfWidgetFormFilterInput(),
      'group_member_team_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SportGameTeamGroup'), 'add_empty' => true)),
      'group_member_team_token_id'       => new sfWidgetFormFilterInput(),
      'team_member_participant_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TeamMemberParticipant'), 'add_empty' => true)),
      'team_member_participant_token_id' => new sfWidgetFormFilterInput(),
      'member_role_id'                   => new sfWidgetFormFilterInput(),
      'start_date'                       => new sfWidgetFormFilterInput(),
      'effective_date'                   => new sfWidgetFormFilterInput(),
      'end_date'                         => new sfWidgetFormFilterInput(),
      'confirm_flag'                     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'                      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'standing_status'                  => new sfWidgetFormFilterInput(),
      'contestant_status'                => new sfWidgetFormFilterInput(),
      'approval_status'                  => new sfWidgetFormFilterInput(),
      'status'                           => new sfWidgetFormFilterInput(),
      'description'                      => new sfWidgetFormFilterInput(),
      'created_at'                       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'                         => new sfValidatorPass(array('required' => false)),
      'sport_game_group_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SportGameGroup'), 'column' => 'id')),
      'sport_game_group_token_id'        => new sfValidatorPass(array('required' => false)),
      'group_member_team_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SportGameTeamGroup'), 'column' => 'id')),
      'group_member_team_token_id'       => new sfValidatorPass(array('required' => false)),
      'team_member_participant_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TeamMemberParticipant'), 'column' => 'id')),
      'team_member_participant_token_id' => new sfValidatorPass(array('required' => false)),
      'member_role_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'start_date'                       => new sfValidatorPass(array('required' => false)),
      'effective_date'                   => new sfValidatorPass(array('required' => false)),
      'end_date'                         => new sfValidatorPass(array('required' => false)),
      'confirm_flag'                     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'                      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'standing_status'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'contestant_status'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'approval_status'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'                           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'                      => new sfValidatorPass(array('required' => false)),
      'created_at'                       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('team_group_member_participant_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TeamGroupMemberParticipant';
  }

  public function getFields()
  {
    return array(
      'id'                               => 'Number',
      'token_id'                         => 'Text',
      'sport_game_group_id'              => 'ForeignKey',
      'sport_game_group_token_id'        => 'Text',
      'group_member_team_id'             => 'ForeignKey',
      'group_member_team_token_id'       => 'Text',
      'team_member_participant_id'       => 'ForeignKey',
      'team_member_participant_token_id' => 'Text',
      'member_role_id'                   => 'Number',
      'start_date'                       => 'Text',
      'effective_date'                   => 'Text',
      'end_date'                         => 'Text',
      'confirm_flag'                     => 'Boolean',
      'active_flag'                      => 'Boolean',
      'standing_status'                  => 'Number',
      'contestant_status'                => 'Number',
      'approval_status'                  => 'Number',
      'status'                           => 'Number',
      'description'                      => 'Text',
      'created_at'                       => 'Date',
      'updated_at'                       => 'Date',
    );
  }
}

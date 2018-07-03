<?php

/**
 * TeamMemberParticipantRole filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTeamMemberParticipantRoleFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'                         => new sfWidgetFormFilterInput(),
      'team_game_participation_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TeamGameParticipation'), 'add_empty' => true)),
      'team_game_participation_token_id' => new sfWidgetFormFilterInput(),
      'team_member_participant_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TeamMemberParticipant'), 'add_empty' => true)),
      'team_member_participant_token_id' => new sfWidgetFormFilterInput(),
      'member_role_id'                   => new sfWidgetFormFilterInput(),
      'member_relation_id'               => new sfWidgetFormFilterInput(),
      'gender_category_id'               => new sfWidgetFormFilterInput(),
      'competition_flag'                 => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'confirmed_flag'                   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'grouped_flag'                     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'                      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'qualified_flag'                   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'competition_status'               => new sfWidgetFormFilterInput(),
      'qualification_status'             => new sfWidgetFormFilterInput(),
      'confirmed_status'                 => new sfWidgetFormFilterInput(),
      'grouped_status'                   => new sfWidgetFormFilterInput(),
      'status'                           => new sfWidgetFormFilterInput(),
      'description'                      => new sfWidgetFormFilterInput(),
      'created_at'                       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'                         => new sfValidatorPass(array('required' => false)),
      'team_game_participation_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TeamGameParticipation'), 'column' => 'id')),
      'team_game_participation_token_id' => new sfValidatorPass(array('required' => false)),
      'team_member_participant_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TeamMemberParticipant'), 'column' => 'id')),
      'team_member_participant_token_id' => new sfValidatorPass(array('required' => false)),
      'member_role_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'member_relation_id'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gender_category_id'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'competition_flag'                 => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'confirmed_flag'                   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'grouped_flag'                     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'                      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'qualified_flag'                   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'competition_status'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'qualification_status'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'confirmed_status'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'grouped_status'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'                           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'                      => new sfValidatorPass(array('required' => false)),
      'created_at'                       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('team_member_participant_role_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TeamMemberParticipantRole';
  }

  public function getFields()
  {
    return array(
      'id'                               => 'Number',
      'token_id'                         => 'Text',
      'team_game_participation_id'       => 'ForeignKey',
      'team_game_participation_token_id' => 'Text',
      'team_member_participant_id'       => 'ForeignKey',
      'team_member_participant_token_id' => 'Text',
      'member_role_id'                   => 'Number',
      'member_relation_id'               => 'Number',
      'gender_category_id'               => 'Number',
      'competition_flag'                 => 'Boolean',
      'confirmed_flag'                   => 'Boolean',
      'grouped_flag'                     => 'Boolean',
      'active_flag'                      => 'Boolean',
      'qualified_flag'                   => 'Boolean',
      'competition_status'               => 'Number',
      'qualification_status'             => 'Number',
      'confirmed_status'                 => 'Number',
      'grouped_status'                   => 'Number',
      'status'                           => 'Number',
      'description'                      => 'Text',
      'created_at'                       => 'Date',
      'updated_at'                       => 'Date',
    );
  }
}

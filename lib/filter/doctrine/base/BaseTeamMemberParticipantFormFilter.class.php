<?php

/**
 * TeamMemberParticipant filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTeamMemberParticipantFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'           => new sfWidgetFormFilterInput(),
      'team_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'add_empty' => true)),
      'team_token_id'      => new sfWidgetFormFilterInput(),
      'person_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'add_empty' => true)),
      'person_token_id'    => new sfWidgetFormFilterInput(),
      'gender_category_id' => new sfWidgetFormFilterInput(),
      'member_full_name'   => new sfWidgetFormFilterInput(),
      'member_role_id'     => new sfWidgetFormFilterInput(),
      'member_number'      => new sfWidgetFormFilterInput(),
      'grouped_flag'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'             => new sfWidgetFormFilterInput(),
      'description'        => new sfWidgetFormFilterInput(),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'           => new sfValidatorPass(array('required' => false)),
      'team_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Team'), 'column' => 'id')),
      'team_token_id'      => new sfValidatorPass(array('required' => false)),
      'person_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Person'), 'column' => 'id')),
      'person_token_id'    => new sfValidatorPass(array('required' => false)),
      'gender_category_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'member_full_name'   => new sfValidatorPass(array('required' => false)),
      'member_role_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'member_number'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'grouped_flag'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'        => new sfValidatorPass(array('required' => false)),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('team_member_participant_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TeamMemberParticipant';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'token_id'           => 'Text',
      'team_id'            => 'ForeignKey',
      'team_token_id'      => 'Text',
      'person_id'          => 'ForeignKey',
      'person_token_id'    => 'Text',
      'gender_category_id' => 'Number',
      'member_full_name'   => 'Text',
      'member_role_id'     => 'Number',
      'member_number'      => 'Number',
      'grouped_flag'       => 'Boolean',
      'active_flag'        => 'Boolean',
      'status'             => 'Number',
      'description'        => 'Text',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
    );
  }
}

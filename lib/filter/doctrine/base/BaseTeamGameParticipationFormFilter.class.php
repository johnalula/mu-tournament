<?php

/**
 * TeamGameParticipation filter form base class.
 *
 * @package    mu-TMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTeamGameParticipationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'       => new sfWidgetFormFilterInput(),
      'team_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'add_empty' => true)),
      'player_name'    => new sfWidgetFormFilterInput(),
      'player_role_id' => new sfWidgetFormFilterInput(),
      'player_number'  => new sfWidgetFormFilterInput(),
      'active_flag'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'         => new sfWidgetFormFilterInput(),
      'description'    => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'       => new sfValidatorPass(array('required' => false)),
      'team_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Team'), 'column' => 'id')),
      'player_name'    => new sfValidatorPass(array('required' => false)),
      'player_role_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'player_number'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'active_flag'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'    => new sfValidatorPass(array('required' => false)),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('team_game_participation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TeamGameParticipation';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'token_id'       => 'Text',
      'team_id'        => 'ForeignKey',
      'player_name'    => 'Text',
      'player_role_id' => 'Number',
      'player_number'  => 'Number',
      'active_flag'    => 'Boolean',
      'status'         => 'Number',
      'description'    => 'Text',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
    );
  }
}

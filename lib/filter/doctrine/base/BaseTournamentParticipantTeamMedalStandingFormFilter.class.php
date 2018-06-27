<?php

/**
 * TournamentParticipantTeamMedalStanding filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTournamentParticipantTeamMedalStandingFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'          => new sfWidgetFormFilterInput(),
      'org_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'      => new sfWidgetFormFilterInput(),
      'tournament_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'add_empty' => true)),
      'team_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'add_empty' => true)),
      'team_token_id'     => new sfWidgetFormFilterInput(),
      'standing_rank'     => new sfWidgetFormFilterInput(),
      'gold_medal'        => new sfWidgetFormFilterInput(),
      'silver_medal'      => new sfWidgetFormFilterInput(),
      'bronze_medal'      => new sfWidgetFormFilterInput(),
      'other_medal_award' => new sfWidgetFormFilterInput(),
      'total_medal_award' => new sfWidgetFormFilterInput(),
      'active_flag'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'            => new sfWidgetFormFilterInput(),
      'description'       => new sfWidgetFormFilterInput(),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'          => new sfValidatorPass(array('required' => false)),
      'org_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Organization'), 'column' => 'id')),
      'org_token_id'      => new sfValidatorPass(array('required' => false)),
      'tournament_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tournament'), 'column' => 'id')),
      'team_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Team'), 'column' => 'id')),
      'team_token_id'     => new sfValidatorPass(array('required' => false)),
      'standing_rank'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gold_medal'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'silver_medal'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'bronze_medal'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'other_medal_award' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'total_medal_award' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'active_flag'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'       => new sfValidatorPass(array('required' => false)),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('tournament_participant_team_medal_standing_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentParticipantTeamMedalStanding';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'token_id'          => 'Text',
      'org_id'            => 'ForeignKey',
      'org_token_id'      => 'Text',
      'tournament_id'     => 'ForeignKey',
      'team_id'           => 'ForeignKey',
      'team_token_id'     => 'Text',
      'standing_rank'     => 'Number',
      'gold_medal'        => 'Number',
      'silver_medal'      => 'Number',
      'bronze_medal'      => 'Number',
      'other_medal_award' => 'Number',
      'total_medal_award' => 'Number',
      'active_flag'       => 'Boolean',
      'status'            => 'Number',
      'description'       => 'Text',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}

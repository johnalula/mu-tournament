<?php

/**
 * TournamentMatchFixtureGroup filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTournamentMatchFixtureGroupFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'                          => new sfWidgetFormFilterInput(),
      'tournament_match_fixture_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixture'), 'add_empty' => true)),
      'tournament_match_fixture_token_id' => new sfWidgetFormFilterInput(),
      'tournament_sport_game_group_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentSportGameGroup'), 'add_empty' => true)),
      'tournament_match_group_number'     => new sfWidgetFormFilterInput(),
      'match_venue'                       => new sfWidgetFormFilterInput(),
      'match_date'                        => new sfWidgetFormFilterInput(),
      'match_time'                        => new sfWidgetFormFilterInput(),
      'effective_date'                    => new sfWidgetFormFilterInput(),
      'qualified_flag'                    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'qualification_status'              => new sfWidgetFormFilterInput(),
      'confirmed_flag'                    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'                       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'approval_status'                   => new sfWidgetFormFilterInput(),
      'status'                            => new sfWidgetFormFilterInput(),
      'description'                       => new sfWidgetFormFilterInput(),
      'created_at'                        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'                          => new sfValidatorPass(array('required' => false)),
      'tournament_match_fixture_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentMatchFixture'), 'column' => 'id')),
      'tournament_match_fixture_token_id' => new sfValidatorPass(array('required' => false)),
      'tournament_sport_game_group_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentSportGameGroup'), 'column' => 'id')),
      'tournament_match_group_number'     => new sfValidatorPass(array('required' => false)),
      'match_venue'                       => new sfValidatorPass(array('required' => false)),
      'match_date'                        => new sfValidatorPass(array('required' => false)),
      'match_time'                        => new sfValidatorPass(array('required' => false)),
      'effective_date'                    => new sfValidatorPass(array('required' => false)),
      'qualified_flag'                    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'qualification_status'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'confirmed_flag'                    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'                       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'approval_status'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'                            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'                       => new sfValidatorPass(array('required' => false)),
      'created_at'                        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('tournament_match_fixture_group_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentMatchFixtureGroup';
  }

  public function getFields()
  {
    return array(
      'id'                                => 'Number',
      'token_id'                          => 'Text',
      'tournament_match_fixture_id'       => 'ForeignKey',
      'tournament_match_fixture_token_id' => 'Text',
      'tournament_sport_game_group_id'    => 'ForeignKey',
      'tournament_match_group_number'     => 'Text',
      'match_venue'                       => 'Text',
      'match_date'                        => 'Text',
      'match_time'                        => 'Text',
      'effective_date'                    => 'Text',
      'qualified_flag'                    => 'Boolean',
      'qualification_status'              => 'Number',
      'confirmed_flag'                    => 'Boolean',
      'active_flag'                       => 'Boolean',
      'approval_status'                   => 'Number',
      'status'                            => 'Number',
      'description'                       => 'Text',
      'created_at'                        => 'Date',
      'updated_at'                        => 'Date',
    );
  }
}

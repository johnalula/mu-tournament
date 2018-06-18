<?php

/**
 * TournamentMatchFixtureGroup form base class.
 *
 * @method TournamentMatchFixtureGroup getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTournamentMatchFixtureGroupForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                            => new sfWidgetFormInputHidden(),
      'token_id'                                      => new sfWidgetFormInputText(),
      'tournament_match_id'                           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatch'), 'add_empty' => true)),
      'tournament_match_fixture_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixture'), 'add_empty' => true)),
      'tournament_match_fixture_token_id'             => new sfWidgetFormInputText(),
      'tournament_sport_game_group_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentSportGameGroup'), 'add_empty' => true)),
      'tournament_match_group_number'                 => new sfWidgetFormInputText(),
      'match_fixture_round_mode'                      => new sfWidgetFormInputText(),
      'match_heat_number'                             => new sfWidgetFormInputText(),
      'match_heat_name'                               => new sfWidgetFormInputText(),
      'match_venue'                                   => new sfWidgetFormInputText(),
      'match_date'                                    => new sfWidgetFormInputText(),
      'match_time'                                    => new sfWidgetFormInputText(),
      'tournament_match_session_mode'                 => new sfWidgetFormInputText(),
      'number_of_qualifying_rows'                     => new sfWidgetFormInputText(),
      'number_of_best_qualifying_rows'                => new sfWidgetFormInputText(),
      'number_of_teams_per_fixture_group'             => new sfWidgetFormInputText(),
      'number_of_participants_per_fixture_group'      => new sfWidgetFormInputText(),
      'effective_date'                                => new sfWidgetFormInputText(),
      'qualifying_rows_enable_flag'                   => new sfWidgetFormInputCheckbox(),
      'best_qualifying_row_enable_flag'               => new sfWidgetFormInputCheckbox(),
      'enable_participant_team_number_mandatory_flag' => new sfWidgetFormInputCheckbox(),
      'enable_participant_number_mandatory_flag'      => new sfWidgetFormInputCheckbox(),
      'qualified_flag'                                => new sfWidgetFormInputCheckbox(),
      'qualification_status'                          => new sfWidgetFormInputText(),
      'confirmed_flag'                                => new sfWidgetFormInputCheckbox(),
      'competition_flag'                              => new sfWidgetFormInputCheckbox(),
      'active_flag'                                   => new sfWidgetFormInputCheckbox(),
      'competition_status'                            => new sfWidgetFormInputText(),
      'fixture_round_status'                          => new sfWidgetFormInputText(),
      'duration_status'                               => new sfWidgetFormInputText(),
      'process_status'                                => new sfWidgetFormInputText(),
      'approval_status'                               => new sfWidgetFormInputText(),
      'status'                                        => new sfWidgetFormInputText(),
      'description'                                   => new sfWidgetFormTextarea(),
      'created_at'                                    => new sfWidgetFormDateTime(),
      'updated_at'                                    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                                            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'                                      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tournament_match_id'                           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatch'), 'required' => false)),
      'tournament_match_fixture_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixture'), 'required' => false)),
      'tournament_match_fixture_token_id'             => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tournament_sport_game_group_id'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentSportGameGroup'), 'required' => false)),
      'tournament_match_group_number'                 => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'match_fixture_round_mode'                      => new sfValidatorInteger(array('required' => false)),
      'match_heat_number'                             => new sfValidatorInteger(array('required' => false)),
      'match_heat_name'                               => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'match_venue'                                   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'match_date'                                    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'match_time'                                    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tournament_match_session_mode'                 => new sfValidatorInteger(array('required' => false)),
      'number_of_qualifying_rows'                     => new sfValidatorInteger(array('required' => false)),
      'number_of_best_qualifying_rows'                => new sfValidatorInteger(array('required' => false)),
      'number_of_teams_per_fixture_group'             => new sfValidatorInteger(array('required' => false)),
      'number_of_participants_per_fixture_group'      => new sfValidatorInteger(array('required' => false)),
      'effective_date'                                => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'qualifying_rows_enable_flag'                   => new sfValidatorBoolean(array('required' => false)),
      'best_qualifying_row_enable_flag'               => new sfValidatorBoolean(array('required' => false)),
      'enable_participant_team_number_mandatory_flag' => new sfValidatorBoolean(array('required' => false)),
      'enable_participant_number_mandatory_flag'      => new sfValidatorBoolean(array('required' => false)),
      'qualified_flag'                                => new sfValidatorBoolean(array('required' => false)),
      'qualification_status'                          => new sfValidatorInteger(array('required' => false)),
      'confirmed_flag'                                => new sfValidatorBoolean(array('required' => false)),
      'competition_flag'                              => new sfValidatorBoolean(array('required' => false)),
      'active_flag'                                   => new sfValidatorBoolean(array('required' => false)),
      'competition_status'                            => new sfValidatorInteger(array('required' => false)),
      'fixture_round_status'                          => new sfValidatorInteger(array('required' => false)),
      'duration_status'                               => new sfValidatorInteger(array('required' => false)),
      'process_status'                                => new sfValidatorInteger(array('required' => false)),
      'approval_status'                               => new sfValidatorInteger(array('required' => false)),
      'status'                                        => new sfValidatorInteger(array('required' => false)),
      'description'                                   => new sfValidatorString(array('required' => false)),
      'created_at'                                    => new sfValidatorDateTime(),
      'updated_at'                                    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('tournament_match_fixture_group[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentMatchFixtureGroup';
  }

}

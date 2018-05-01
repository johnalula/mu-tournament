<?php

/**
 * TournamentMatchFixture form base class.
 *
 * @method TournamentMatchFixture getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTournamentMatchFixtureForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                            => new sfWidgetFormInputHidden(),
      'token_id'                      => new sfWidgetFormInputText(),
      'tournament_match_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatch'), 'add_empty' => true)),
      'tournament_match_token_id'     => new sfWidgetFormInputText(),
      'parent_match_fixture_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixture'), 'add_empty' => true)),
      'parent_match_fixture_token_id' => new sfWidgetFormInputText(),
      'sport_game_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SportGame'), 'add_empty' => true)),
      'sport_game_token_id'           => new sfWidgetFormInputText(),
      'sport_game_group_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentSportGameGroup'), 'add_empty' => true)),
      'sport_game_group_token_id'     => new sfWidgetFormInputText(),
      'match_round_type_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RoundType'), 'add_empty' => true)),
      'gender_category_id'            => new sfWidgetFormInputText(),
      'match_fixture_round_mode'      => new sfWidgetFormInputText(),
      'event_type'                    => new sfWidgetFormInputText(),
      'contestant_mode'               => new sfWidgetFormInputText(),
      'contestant_team_mode'          => new sfWidgetFormInputText(),
      'match_venue'                   => new sfWidgetFormInputText(),
      'tournament_match_number'       => new sfWidgetFormInputText(),
      'match_date'                    => new sfWidgetFormInputText(),
      'match_time'                    => new sfWidgetFormInputText(),
      'start_date'                    => new sfWidgetFormInputText(),
      'effective_date'                => new sfWidgetFormInputText(),
      'end_date'                      => new sfWidgetFormInputText(),
      'parent_flag'                   => new sfWidgetFormInputCheckbox(),
      'inheritable_flag'              => new sfWidgetFormInputCheckbox(),
      'roundable_flag'                => new sfWidgetFormInputCheckbox(),
      'active_flag'                   => new sfWidgetFormInputCheckbox(),
      'complete_flag'                 => new sfWidgetFormInputCheckbox(),
      'approval_status'               => new sfWidgetFormInputText(),
      'status'                        => new sfWidgetFormInputText(),
      'description'                   => new sfWidgetFormInputText(),
      'created_at'                    => new sfWidgetFormDateTime(),
      'updated_at'                    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'                      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tournament_match_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatch'), 'required' => false)),
      'tournament_match_token_id'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'parent_match_fixture_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixture'), 'required' => false)),
      'parent_match_fixture_token_id' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'sport_game_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SportGame'), 'required' => false)),
      'sport_game_token_id'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'sport_game_group_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentSportGameGroup'), 'required' => false)),
      'sport_game_group_token_id'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'match_round_type_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('RoundType'), 'required' => false)),
      'gender_category_id'            => new sfValidatorInteger(array('required' => false)),
      'match_fixture_round_mode'      => new sfValidatorInteger(array('required' => false)),
      'event_type'                    => new sfValidatorInteger(array('required' => false)),
      'contestant_mode'               => new sfValidatorInteger(array('required' => false)),
      'contestant_team_mode'          => new sfValidatorInteger(array('required' => false)),
      'match_venue'                   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tournament_match_number'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'match_date'                    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'match_time'                    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'start_date'                    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'effective_date'                => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'end_date'                      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'parent_flag'                   => new sfValidatorBoolean(array('required' => false)),
      'inheritable_flag'              => new sfValidatorBoolean(array('required' => false)),
      'roundable_flag'                => new sfValidatorBoolean(array('required' => false)),
      'active_flag'                   => new sfValidatorBoolean(array('required' => false)),
      'complete_flag'                 => new sfValidatorBoolean(array('required' => false)),
      'approval_status'               => new sfValidatorInteger(array('required' => false)),
      'status'                        => new sfValidatorInteger(array('required' => false)),
      'description'                   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'                    => new sfValidatorDateTime(),
      'updated_at'                    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('tournament_match_fixture[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentMatchFixture';
  }

}

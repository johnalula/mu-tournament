<?php

/**
 * TournamentMatchParticipantTeam form base class.
 *
 * @method TournamentMatchParticipantTeam getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTournamentMatchParticipantTeamForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                   => new sfWidgetFormInputHidden(),
      'token_id'                             => new sfWidgetFormInputText(),
      'match_fixture_id'                     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixture'), 'add_empty' => true)),
      'match_fixture_token_id'               => new sfWidgetFormInputText(),
      'tournament_sport_game_group_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentSportGameGroup'), 'add_empty' => true)),
      'tournament_sport_game_group_token_id' => new sfWidgetFormInputText(),
      'sport_game_team_group_id'             => new sfWidgetFormInputText(),
      'sport_game_team_group_token_id'       => new sfWidgetFormInputText(),
      'effective_date'                       => new sfWidgetFormInputText(),
      'qualified_flag'                       => new sfWidgetFormInputCheckbox(),
      'qualification_status'                 => new sfWidgetFormInputText(),
      'confirm_flag'                         => new sfWidgetFormInputCheckbox(),
      'active_flag'                          => new sfWidgetFormInputCheckbox(),
      'approval_status'                      => new sfWidgetFormInputText(),
      'status'                               => new sfWidgetFormInputText(),
      'description'                          => new sfWidgetFormTextarea(),
      'type'                                 => new sfWidgetFormInputText(),
      'created_at'                           => new sfWidgetFormDateTime(),
      'updated_at'                           => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'                             => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'match_fixture_id'                     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixture'), 'required' => false)),
      'match_fixture_token_id'               => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tournament_sport_game_group_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentSportGameGroup'), 'required' => false)),
      'tournament_sport_game_group_token_id' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'sport_game_team_group_id'             => new sfValidatorInteger(array('required' => false)),
      'sport_game_team_group_token_id'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'effective_date'                       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'qualified_flag'                       => new sfValidatorBoolean(array('required' => false)),
      'qualification_status'                 => new sfValidatorInteger(array('required' => false)),
      'confirm_flag'                         => new sfValidatorBoolean(array('required' => false)),
      'active_flag'                          => new sfValidatorBoolean(array('required' => false)),
      'approval_status'                      => new sfValidatorInteger(array('required' => false)),
      'status'                               => new sfValidatorInteger(array('required' => false)),
      'description'                          => new sfValidatorString(array('required' => false)),
      'type'                                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'                           => new sfValidatorDateTime(),
      'updated_at'                           => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('tournament_match_participant_team[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentMatchParticipantTeam';
  }

}

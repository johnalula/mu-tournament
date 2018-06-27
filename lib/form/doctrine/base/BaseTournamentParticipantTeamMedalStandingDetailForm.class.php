<?php

/**
 * TournamentParticipantTeamMedalStandingDetail form base class.
 *
 * @method TournamentParticipantTeamMedalStandingDetail getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTournamentParticipantTeamMedalStandingDetailForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                       => new sfWidgetFormInputHidden(),
      'token_id'                                 => new sfWidgetFormInputText(),
      'participant_team_medal_standing_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentParticipantTeamMedalStanding'), 'add_empty' => true)),
      'participant_team_medal_standing_token_id' => new sfWidgetFormInputText(),
      'tournament_match_id'                      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatch'), 'add_empty' => true)),
      'tournament_match_fixture_group_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixtureGroup'), 'add_empty' => true)),
      'participant_team_member_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchTeamMemberParticipant'), 'add_empty' => true)),
      'medal_award_mode'                         => new sfWidgetFormInputText(),
      'sport_game_id'                            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SportGame'), 'add_empty' => true)),
      'standing_rank'                            => new sfWidgetFormInputText(),
      'gold_medal'                               => new sfWidgetFormInputText(),
      'silver_medal'                             => new sfWidgetFormInputText(),
      'bronze_medal'                             => new sfWidgetFormInputText(),
      'total_medal_award'                        => new sfWidgetFormInputText(),
      'active_flag'                              => new sfWidgetFormInputCheckbox(),
      'status'                                   => new sfWidgetFormInputText(),
      'description'                              => new sfWidgetFormTextarea(),
      'created_at'                               => new sfWidgetFormDateTime(),
      'updated_at'                               => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                                       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'                                 => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'participant_team_medal_standing_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentParticipantTeamMedalStanding'), 'required' => false)),
      'participant_team_medal_standing_token_id' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tournament_match_id'                      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatch'), 'required' => false)),
      'tournament_match_fixture_group_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixtureGroup'), 'required' => false)),
      'participant_team_member_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchTeamMemberParticipant'), 'required' => false)),
      'medal_award_mode'                         => new sfValidatorInteger(array('required' => false)),
      'sport_game_id'                            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SportGame'), 'required' => false)),
      'standing_rank'                            => new sfValidatorInteger(array('required' => false)),
      'gold_medal'                               => new sfValidatorInteger(array('required' => false)),
      'silver_medal'                             => new sfValidatorInteger(array('required' => false)),
      'bronze_medal'                             => new sfValidatorInteger(array('required' => false)),
      'total_medal_award'                        => new sfValidatorInteger(array('required' => false)),
      'active_flag'                              => new sfValidatorBoolean(array('required' => false)),
      'status'                                   => new sfValidatorInteger(array('required' => false)),
      'description'                              => new sfValidatorString(array('required' => false)),
      'created_at'                               => new sfValidatorDateTime(),
      'updated_at'                               => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('tournament_participant_team_medal_standing_detail[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentParticipantTeamMedalStandingDetail';
  }

}

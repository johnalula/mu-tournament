<?php

/**
 * TournamentMatchParticipant form base class.
 *
 * @method TournamentMatchParticipant getObject() Returns the current form's model object
 *
 * @package    mu-TMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTournamentMatchParticipantForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                   => new sfWidgetFormInputHidden(),
      'token_id'                             => new sfWidgetFormInputText(),
      'match_fixture_id'                     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixture'), 'add_empty' => true)),
      'match_fixture_token_id'               => new sfWidgetFormInputText(),
      'tournament_match_participant_team_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchParticipantTeam'), 'add_empty' => true)),
      'sport_game_group_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SportGameGroup'), 'add_empty' => true)),
      'team_group_member_participant_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TeamGroupMemberParticipant'), 'add_empty' => true)),
      'effective_date'                       => new sfWidgetFormInputText(),
      'confirm_flag'                         => new sfWidgetFormInputCheckbox(),
      'active_flag'                          => new sfWidgetFormInputCheckbox(),
      'standing_status'                      => new sfWidgetFormInputText(),
      'contestant_status'                    => new sfWidgetFormInputText(),
      'approval_status'                      => new sfWidgetFormInputText(),
      'status'                               => new sfWidgetFormInputText(),
      'description'                          => new sfWidgetFormTextarea(),
      'created_at'                           => new sfWidgetFormDateTime(),
      'updated_at'                           => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'                             => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'match_fixture_id'                     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixture'), 'required' => false)),
      'match_fixture_token_id'               => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tournament_match_participant_team_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchParticipantTeam'), 'required' => false)),
      'sport_game_group_id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SportGameGroup'), 'required' => false)),
      'team_group_member_participant_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TeamGroupMemberParticipant'), 'required' => false)),
      'effective_date'                       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'confirm_flag'                         => new sfValidatorBoolean(array('required' => false)),
      'active_flag'                          => new sfValidatorBoolean(array('required' => false)),
      'standing_status'                      => new sfValidatorInteger(array('required' => false)),
      'contestant_status'                    => new sfValidatorInteger(array('required' => false)),
      'approval_status'                      => new sfValidatorInteger(array('required' => false)),
      'status'                               => new sfValidatorInteger(array('required' => false)),
      'description'                          => new sfValidatorString(array('required' => false)),
      'created_at'                           => new sfValidatorDateTime(),
      'updated_at'                           => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('tournament_match_participant[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentMatchParticipant';
  }

}

<?php

/**
 * TournamentGroupParticipantTeam form base class.
 *
 * @method TournamentGroupParticipantTeam getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTournamentGroupParticipantTeamForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'token_id'                  => new sfWidgetFormInputText(),
      'tournament_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'add_empty' => true)),
      'sport_game_group_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentSportGameGroup'), 'add_empty' => true)),
      'sport_game_group_token_id' => new sfWidgetFormInputText(),
      'team_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'add_empty' => true)),
      'team_token_id'             => new sfWidgetFormInputText(),
      'start_date'                => new sfWidgetFormInputText(),
      'effective_date'            => new sfWidgetFormInputText(),
      'end_date'                  => new sfWidgetFormInputText(),
      'active_flag'               => new sfWidgetFormInputCheckbox(),
      'completed_flag'            => new sfWidgetFormInputCheckbox(),
      'qualified_flag'            => new sfWidgetFormInputCheckbox(),
      'qualification_status'      => new sfWidgetFormInputText(),
      'approval_status'           => new sfWidgetFormInputText(),
      'status'                    => new sfWidgetFormInputText(),
      'description'               => new sfWidgetFormTextarea(),
      'created_at'                => new sfWidgetFormDateTime(),
      'updated_at'                => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'                  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tournament_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'required' => false)),
      'sport_game_group_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentSportGameGroup'), 'required' => false)),
      'sport_game_group_token_id' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'team_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'required' => false)),
      'team_token_id'             => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'start_date'                => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'effective_date'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'end_date'                  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'active_flag'               => new sfValidatorBoolean(array('required' => false)),
      'completed_flag'            => new sfValidatorBoolean(array('required' => false)),
      'qualified_flag'            => new sfValidatorBoolean(array('required' => false)),
      'qualification_status'      => new sfValidatorInteger(array('required' => false)),
      'approval_status'           => new sfValidatorInteger(array('required' => false)),
      'status'                    => new sfValidatorInteger(array('required' => false)),
      'description'               => new sfValidatorString(array('required' => false)),
      'created_at'                => new sfValidatorDateTime(),
      'updated_at'                => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('tournament_group_participant_team[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentGroupParticipantTeam';
  }

}

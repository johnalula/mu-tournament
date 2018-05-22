<?php

/**
 * TournamentParticipantTeamMedalStanding form base class.
 *
 * @method TournamentParticipantTeamMedalStanding getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTournamentParticipantTeamMedalStandingForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'token_id'          => new sfWidgetFormInputText(),
      'org_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'      => new sfWidgetFormInputText(),
      'tournament_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'add_empty' => true)),
      'team_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'add_empty' => true)),
      'team_token_id'     => new sfWidgetFormInputText(),
      'standing_rank'     => new sfWidgetFormInputText(),
      'gold_medal'        => new sfWidgetFormInputText(),
      'silver_medal'      => new sfWidgetFormInputText(),
      'bronze_medal'      => new sfWidgetFormInputText(),
      'total_medal_award' => new sfWidgetFormInputText(),
      'active_flag'       => new sfWidgetFormInputCheckbox(),
      'status'            => new sfWidgetFormInputText(),
      'description'       => new sfWidgetFormTextarea(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'org_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'required' => false)),
      'org_token_id'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tournament_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'required' => false)),
      'team_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'required' => false)),
      'team_token_id'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'standing_rank'     => new sfValidatorInteger(array('required' => false)),
      'gold_medal'        => new sfValidatorInteger(array('required' => false)),
      'silver_medal'      => new sfValidatorInteger(array('required' => false)),
      'bronze_medal'      => new sfValidatorInteger(array('required' => false)),
      'total_medal_award' => new sfValidatorInteger(array('required' => false)),
      'active_flag'       => new sfValidatorBoolean(array('required' => false)),
      'status'            => new sfValidatorInteger(array('required' => false)),
      'description'       => new sfValidatorString(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('tournament_participant_team_medal_standing[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentParticipantTeamMedalStanding';
  }

}

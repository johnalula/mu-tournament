<?php

/**
 * TeamGameParticipation form base class.
 *
 * @method TeamGameParticipation getObject() Returns the current form's model object
 *
 * @package    mu-TMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTeamGameParticipationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'token_id'               => new sfWidgetFormInputText(),
      'team_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'add_empty' => true)),
      'team_token_id'          => new sfWidgetFormInputText(),
      'sport_game_category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GameCategory'), 'add_empty' => true)),
      'sport_game_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SportGame'), 'add_empty' => true)),
      'sport_game_token_id'    => new sfWidgetFormInputText(),
      'number_of_players'      => new sfWidgetFormInputText(),
      'gender_category_id'     => new sfWidgetFormInputText(),
      'event_type'             => new sfWidgetFormInputText(),
      'player_mode'            => new sfWidgetFormInputText(),
      'confirm_flag'           => new sfWidgetFormInputCheckbox(),
      'active_flag'            => new sfWidgetFormInputCheckbox(),
      'status'                 => new sfWidgetFormInputText(),
      'description'            => new sfWidgetFormTextarea(),
      'created_at'             => new sfWidgetFormDateTime(),
      'updated_at'             => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'               => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'team_id'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'required' => false)),
      'team_token_id'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'sport_game_category_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('GameCategory'), 'required' => false)),
      'sport_game_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SportGame'), 'required' => false)),
      'sport_game_token_id'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'number_of_players'      => new sfValidatorInteger(array('required' => false)),
      'gender_category_id'     => new sfValidatorInteger(array('required' => false)),
      'event_type'             => new sfValidatorInteger(array('required' => false)),
      'player_mode'            => new sfValidatorInteger(array('required' => false)),
      'confirm_flag'           => new sfValidatorBoolean(array('required' => false)),
      'active_flag'            => new sfValidatorBoolean(array('required' => false)),
      'status'                 => new sfValidatorInteger(array('required' => false)),
      'description'            => new sfValidatorString(array('required' => false)),
      'created_at'             => new sfValidatorDateTime(),
      'updated_at'             => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('team_game_participation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TeamGameParticipation';
  }

}

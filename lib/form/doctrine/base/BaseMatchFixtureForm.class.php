<?php

/**
 * MatchFixture form base class.
 *
 * @method MatchFixture getObject() Returns the current form's model object
 *
 * @package    mu-TMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMatchFixtureForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'token_id'                  => new sfWidgetFormInputText(),
      'tournament_match_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatch'), 'add_empty' => true)),
      'tournament_match_token_id' => new sfWidgetFormInputText(),
      'sport_game_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SportGame'), 'add_empty' => true)),
      'sport_game_token_id'       => new sfWidgetFormInputText(),
      'group_type_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GroupType'), 'add_empty' => true)),
      'match_round_type_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RoundType'), 'add_empty' => true)),
      'gender_category_id'        => new sfWidgetFormInputText(),
      'event_type'                => new sfWidgetFormInputText(),
      'player_mode'               => new sfWidgetFormInputText(),
      'match_venue'               => new sfWidgetFormInputText(),
      'tournament_match_number'   => new sfWidgetFormInputText(),
      'match_date'                => new sfWidgetFormInputText(),
      'match_time'                => new sfWidgetFormInputText(),
      'start_date'                => new sfWidgetFormInputText(),
      'effective_date'            => new sfWidgetFormInputText(),
      'end_date'                  => new sfWidgetFormInputText(),
      'roundable_flag'            => new sfWidgetFormInputCheckbox(),
      'active_flag'               => new sfWidgetFormInputCheckbox(),
      'status'                    => new sfWidgetFormInputText(),
      'description'               => new sfWidgetFormInputText(),
      'created_at'                => new sfWidgetFormDateTime(),
      'updated_at'                => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'                  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tournament_match_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatch'), 'required' => false)),
      'tournament_match_token_id' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'sport_game_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SportGame'), 'required' => false)),
      'sport_game_token_id'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'group_type_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('GroupType'), 'required' => false)),
      'match_round_type_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('RoundType'), 'required' => false)),
      'gender_category_id'        => new sfValidatorInteger(array('required' => false)),
      'event_type'                => new sfValidatorInteger(array('required' => false)),
      'player_mode'               => new sfValidatorInteger(array('required' => false)),
      'match_venue'               => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tournament_match_number'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'match_date'                => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'match_time'                => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'start_date'                => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'effective_date'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'end_date'                  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'roundable_flag'            => new sfValidatorBoolean(array('required' => false)),
      'active_flag'               => new sfValidatorBoolean(array('required' => false)),
      'status'                    => new sfValidatorInteger(array('required' => false)),
      'description'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'                => new sfValidatorDateTime(),
      'updated_at'                => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('match_fixture[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MatchFixture';
  }

}

<?php

/**
 * SportGame form base class.
 *
 * @method SportGame getObject() Returns the current form's model object
 *
 * @package    mu-TMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSportGameForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                        => new sfWidgetFormInputHidden(),
      'token_id'                  => new sfWidgetFormInputText(),
      'org_id'                    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'              => new sfWidgetFormInputText(),
      'sport_game_category_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GameCategory'), 'add_empty' => true)),
      'distance_type'             => new sfWidgetFormInputText(),
      'name'                      => new sfWidgetFormInputText(),
      'alias'                     => new sfWidgetFormInputText(),
      'game_distance'             => new sfWidgetFormInputText(),
      'game_distance_measurement' => new sfWidgetFormInputText(),
      'sport_game_number'         => new sfWidgetFormInputText(),
      'player_mode'               => new sfWidgetFormInputText(),
      'playing_team_mode'         => new sfWidgetFormInputText(),
      'jump_type_mode'            => new sfWidgetFormInputText(),
      'throws_type'               => new sfWidgetFormInputText(),
      'start_date'                => new sfWidgetFormInputText(),
      'effective_date'            => new sfWidgetFormInputText(),
      'end_date'                  => new sfWidgetFormInputText(),
      'roundable_flag'            => new sfWidgetFormInputCheckbox(),
      'active_flag'               => new sfWidgetFormInputCheckbox(),
      'status'                    => new sfWidgetFormInputText(),
      'description'               => new sfWidgetFormTextarea(),
      'created_at'                => new sfWidgetFormDateTime(),
      'updated_at'                => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'                  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'org_id'                    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'required' => false)),
      'org_token_id'              => new sfValidatorInteger(array('required' => false)),
      'sport_game_category_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('GameCategory'), 'required' => false)),
      'distance_type'             => new sfValidatorInteger(array('required' => false)),
      'name'                      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'alias'                     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'game_distance'             => new sfValidatorInteger(array('required' => false)),
      'game_distance_measurement' => new sfValidatorInteger(array('required' => false)),
      'sport_game_number'         => new sfValidatorInteger(array('required' => false)),
      'player_mode'               => new sfValidatorInteger(array('required' => false)),
      'playing_team_mode'         => new sfValidatorInteger(array('required' => false)),
      'jump_type_mode'            => new sfValidatorInteger(array('required' => false)),
      'throws_type'               => new sfValidatorInteger(array('required' => false)),
      'start_date'                => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'effective_date'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'end_date'                  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'roundable_flag'            => new sfValidatorBoolean(array('required' => false)),
      'active_flag'               => new sfValidatorBoolean(array('required' => false)),
      'status'                    => new sfValidatorInteger(array('required' => false)),
      'description'               => new sfValidatorString(array('required' => false)),
      'created_at'                => new sfValidatorDateTime(),
      'updated_at'                => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('sport_game[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SportGame';
  }

}

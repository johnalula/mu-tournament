<?php

/**
 * TournamentSportGameGroup form base class.
 *
 * @method TournamentSportGameGroup getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTournamentSportGameGroupForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                           => new sfWidgetFormInputHidden(),
      'token_id'                     => new sfWidgetFormInputText(),
      'tournament_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'add_empty' => true)),
      'sport_game_category_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GameCategory'), 'add_empty' => true)),
      'sport_game_category_token_id' => new sfWidgetFormInputText(),
      'contestant_team_mode'         => new sfWidgetFormInputText(),
      'start_date'                   => new sfWidgetFormInputText(),
      'effective_date'               => new sfWidgetFormInputText(),
      'end_date'                     => new sfWidgetFormInputText(),
      'complete_flag'                => new sfWidgetFormInputCheckbox(),
      'active_flag'                  => new sfWidgetFormInputCheckbox(),
      'approval_status'              => new sfWidgetFormInputText(),
      'status'                       => new sfWidgetFormInputText(),
      'description'                  => new sfWidgetFormTextarea(),
      'created_at'                   => new sfWidgetFormDateTime(),
      'updated_at'                   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'                     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tournament_id'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'required' => false)),
      'sport_game_category_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('GameCategory'), 'required' => false)),
      'sport_game_category_token_id' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'contestant_team_mode'         => new sfValidatorInteger(array('required' => false)),
      'start_date'                   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'effective_date'               => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'end_date'                     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'complete_flag'                => new sfValidatorBoolean(array('required' => false)),
      'active_flag'                  => new sfValidatorBoolean(array('required' => false)),
      'approval_status'              => new sfValidatorInteger(array('required' => false)),
      'status'                       => new sfValidatorInteger(array('required' => false)),
      'description'                  => new sfValidatorString(array('required' => false)),
      'created_at'                   => new sfValidatorDateTime(),
      'updated_at'                   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('tournament_sport_game_group[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentSportGameGroup';
  }

}

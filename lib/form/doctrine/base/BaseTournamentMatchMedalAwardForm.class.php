<?php

/**
 * TournamentMatchMedalAward form base class.
 *
 * @method TournamentMatchMedalAward getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTournamentMatchMedalAwardForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                 => new sfWidgetFormInputHidden(),
      'token_id'                           => new sfWidgetFormInputText(),
      'org_id'                             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'                       => new sfWidgetFormInputText(),
      'tournament_id'                      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'add_empty' => true)),
      'sport_game_category_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GameCategory'), 'add_empty' => true)),
      'tournament_medal_award_number'      => new sfWidgetFormInputText(),
      'tournament_medal_award_full_number' => new sfWidgetFormInputText(),
      'completed_flag'                     => new sfWidgetFormInputCheckbox(),
      'effective_date'                     => new sfWidgetFormInputText(),
      'start_date'                         => new sfWidgetFormInputText(),
      'end_date'                           => new sfWidgetFormInputText(),
      'active_flag'                        => new sfWidgetFormInputCheckbox(),
      'process_status'                     => new sfWidgetFormInputText(),
      'approval_status'                    => new sfWidgetFormInputText(),
      'status'                             => new sfWidgetFormInputText(),
      'description'                        => new sfWidgetFormTextarea(),
      'created_at'                         => new sfWidgetFormDateTime(),
      'updated_at'                         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'                           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'org_id'                             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'required' => false)),
      'org_token_id'                       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tournament_id'                      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'required' => false)),
      'sport_game_category_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('GameCategory'), 'required' => false)),
      'tournament_medal_award_number'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tournament_medal_award_full_number' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'completed_flag'                     => new sfValidatorBoolean(array('required' => false)),
      'effective_date'                     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'start_date'                         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'end_date'                           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'active_flag'                        => new sfValidatorBoolean(array('required' => false)),
      'process_status'                     => new sfValidatorInteger(array('required' => false)),
      'approval_status'                    => new sfValidatorInteger(array('required' => false)),
      'status'                             => new sfValidatorInteger(array('required' => false)),
      'description'                        => new sfValidatorString(array('required' => false)),
      'created_at'                         => new sfValidatorDateTime(),
      'updated_at'                         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('tournament_match_medal_award[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentMatchMedalAward';
  }

}

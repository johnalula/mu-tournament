<?php

/**
 * TournamentRankTable form base class.
 *
 * @method TournamentRankTable getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTournamentRankTableForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'token_id'          => new sfWidgetFormInputText(),
      'team_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'add_empty' => true)),
      'person_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'add_empty' => true)),
      'rank'              => new sfWidgetFormInputText(),
      'total_medal_award' => new sfWidgetFormInputText(),
      'game_win'          => new sfWidgetFormInputText(),
      'game_draw'         => new sfWidgetFormInputText(),
      'game_lost'         => new sfWidgetFormInputText(),
      'goal_for'          => new sfWidgetFormInputText(),
      'goal_againest'     => new sfWidgetFormInputText(),
      'goal_difference'   => new sfWidgetFormInputText(),
      'points'            => new sfWidgetFormInputText(),
      'active_flag'       => new sfWidgetFormInputCheckbox(),
      'status'            => new sfWidgetFormInputText(),
      'description'       => new sfWidgetFormTextarea(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'team_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'required' => false)),
      'person_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'required' => false)),
      'rank'              => new sfValidatorInteger(array('required' => false)),
      'total_medal_award' => new sfValidatorInteger(array('required' => false)),
      'game_win'          => new sfValidatorInteger(array('required' => false)),
      'game_draw'         => new sfValidatorInteger(array('required' => false)),
      'game_lost'         => new sfValidatorInteger(array('required' => false)),
      'goal_for'          => new sfValidatorInteger(array('required' => false)),
      'goal_againest'     => new sfValidatorInteger(array('required' => false)),
      'goal_difference'   => new sfValidatorInteger(array('required' => false)),
      'points'            => new sfValidatorInteger(array('required' => false)),
      'active_flag'       => new sfValidatorBoolean(array('required' => false)),
      'status'            => new sfValidatorInteger(array('required' => false)),
      'description'       => new sfValidatorString(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('tournament_rank_table[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentRankTable';
  }

}

<?php

/**
 * MatchResult form base class.
 *
 * @method MatchResult getObject() Returns the current form's model object
 *
 * @package    mu-TMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMatchResultForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'token_id'            => new sfWidgetFormInputText(),
      'match_fixture_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MatchFixture'), 'add_empty' => true)),
      'sport_game_group_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SportGameGroup'), 'add_empty' => true)),
      'team_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'add_empty' => true)),
      'start_date'          => new sfWidgetFormInputText(),
      'effective_date'      => new sfWidgetFormInputText(),
      'end_date'            => new sfWidgetFormInputText(),
      'active_flag'         => new sfWidgetFormInputCheckbox(),
      'status'              => new sfWidgetFormInputText(),
      'description'         => new sfWidgetFormTextarea(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'match_fixture_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MatchFixture'), 'required' => false)),
      'sport_game_group_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SportGameGroup'), 'required' => false)),
      'team_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'required' => false)),
      'start_date'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'effective_date'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'end_date'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'active_flag'         => new sfValidatorBoolean(array('required' => false)),
      'status'              => new sfValidatorInteger(array('required' => false)),
      'description'         => new sfValidatorString(array('required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('match_result[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MatchResult';
  }

}

<?php

/**
 * TournamentMatchFixtureResult form base class.
 *
 * @method TournamentMatchFixtureResult getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTournamentMatchFixtureResultForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                => new sfWidgetFormInputHidden(),
      'token_id'                          => new sfWidgetFormInputText(),
      'tournament_match_fixture_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixture'), 'add_empty' => true)),
      'tournament_match_fixture_token_id' => new sfWidgetFormInputText(),
      'active_flag'                       => new sfWidgetFormInputCheckbox(),
      'status'                            => new sfWidgetFormInputText(),
      'description'                       => new sfWidgetFormTextarea(),
      'created_at'                        => new sfWidgetFormDateTime(),
      'updated_at'                        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'                          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tournament_match_fixture_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatchFixture'), 'required' => false)),
      'tournament_match_fixture_token_id' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'active_flag'                       => new sfValidatorBoolean(array('required' => false)),
      'status'                            => new sfValidatorInteger(array('required' => false)),
      'description'                       => new sfValidatorString(array('required' => false)),
      'created_at'                        => new sfValidatorDateTime(),
      'updated_at'                        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('tournament_match_fixture_result[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentMatchFixtureResult';
  }

}

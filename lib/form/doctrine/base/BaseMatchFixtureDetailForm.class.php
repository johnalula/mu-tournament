<?php

/**
 * MatchFixtureDetail form base class.
 *
 * @method MatchFixtureDetail getObject() Returns the current form's model object
 *
 * @package    mu-TMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMatchFixtureDetailForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'token_id'         => new sfWidgetFormInputText(),
      'match_fixture_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MatchFixture'), 'add_empty' => true)),
      'team_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'add_empty' => true)),
      'person_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'add_empty' => true)),
      'effective_date'   => new sfWidgetFormInputText(),
      'event'            => new sfWidgetFormInputText(),
      'event_type_id'    => new sfWidgetFormInputText(),
      'status'           => new sfWidgetFormInputText(),
      'description'      => new sfWidgetFormTextarea(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'match_fixture_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MatchFixture'), 'required' => false)),
      'team_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'required' => false)),
      'person_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'required' => false)),
      'effective_date'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'event'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'event_type_id'    => new sfValidatorInteger(array('required' => false)),
      'status'           => new sfValidatorInteger(array('required' => false)),
      'description'      => new sfValidatorString(array('required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('match_fixture_detail[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MatchFixtureDetail';
  }

}

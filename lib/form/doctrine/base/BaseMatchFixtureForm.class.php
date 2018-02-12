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
      'id'               => new sfWidgetFormInputHidden(),
      'token_id'         => new sfWidgetFormInputText(),
      'game_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Game'), 'add_empty' => true)),
      'round_type_id'    => new sfWidgetFormInputText(),
      'hosting_place_id' => new sfWidgetFormInputText(),
      'start_date'       => new sfWidgetFormInputText(),
      'effective_date'   => new sfWidgetFormInputText(),
      'end_date'         => new sfWidgetFormInputText(),
      'active_flag'      => new sfWidgetFormInputCheckbox(),
      'status'           => new sfWidgetFormInputText(),
      'description'      => new sfWidgetFormInputText(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'game_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Game'), 'required' => false)),
      'round_type_id'    => new sfValidatorInteger(array('required' => false)),
      'hosting_place_id' => new sfValidatorInteger(array('required' => false)),
      'start_date'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'effective_date'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'end_date'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'active_flag'      => new sfValidatorBoolean(array('required' => false)),
      'status'           => new sfValidatorInteger(array('required' => false)),
      'description'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
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

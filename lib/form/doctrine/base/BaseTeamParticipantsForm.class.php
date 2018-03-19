<?php

/**
 * TeamParticipants form base class.
 *
 * @method TeamParticipants getObject() Returns the current form's model object
 *
 * @package    mu-TMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTeamParticipantsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'token_id'              => new sfWidgetFormInputText(),
      'game_participation_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TeamGameParticipation'), 'add_empty' => true)),
      'team_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'add_empty' => true)),
      'person_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'add_empty' => true)),
      'player_name'           => new sfWidgetFormInputText(),
      'player_role_id'        => new sfWidgetFormInputText(),
      'player_number'         => new sfWidgetFormInputText(),
      'active_flag'           => new sfWidgetFormInputCheckbox(),
      'status'                => new sfWidgetFormInputText(),
      'description'           => new sfWidgetFormTextarea(),
      'created_at'            => new sfWidgetFormDateTime(),
      'updated_at'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'game_participation_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TeamGameParticipation'), 'required' => false)),
      'team_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'required' => false)),
      'person_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'required' => false)),
      'player_name'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'player_role_id'        => new sfValidatorInteger(array('required' => false)),
      'player_number'         => new sfValidatorInteger(array('required' => false)),
      'active_flag'           => new sfValidatorBoolean(array('required' => false)),
      'status'                => new sfValidatorInteger(array('required' => false)),
      'description'           => new sfValidatorString(array('required' => false)),
      'created_at'            => new sfValidatorDateTime(),
      'updated_at'            => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('team_participants[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TeamParticipants';
  }

}

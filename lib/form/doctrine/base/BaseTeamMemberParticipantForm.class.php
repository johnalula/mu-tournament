<?php

/**
 * TeamMemberParticipant form base class.
 *
 * @method TeamMemberParticipant getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTeamMemberParticipantForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'token_id'           => new sfWidgetFormInputText(),
      'team_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'add_empty' => true)),
      'team_token_id'      => new sfWidgetFormInputText(),
      'person_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'add_empty' => true)),
      'person_token_id'    => new sfWidgetFormInputText(),
      'gender_category_id' => new sfWidgetFormInputText(),
      'member_full_name'   => new sfWidgetFormInputText(),
      'member_role_id'     => new sfWidgetFormInputText(),
      'member_relation_id' => new sfWidgetFormInputText(),
      'member_age'         => new sfWidgetFormInputText(),
      'member_number'      => new sfWidgetFormInputText(),
      'confirmed_flag'     => new sfWidgetFormInputCheckbox(),
      'grouped_flag'       => new sfWidgetFormInputCheckbox(),
      'active_flag'        => new sfWidgetFormInputCheckbox(),
      'grouped_status'     => new sfWidgetFormInputText(),
      'confirmed_status'   => new sfWidgetFormInputText(),
      'status'             => new sfWidgetFormInputText(),
      'description'        => new sfWidgetFormTextarea(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'team_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'required' => false)),
      'team_token_id'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'person_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'required' => false)),
      'person_token_id'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'gender_category_id' => new sfValidatorInteger(array('required' => false)),
      'member_full_name'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'member_role_id'     => new sfValidatorInteger(array('required' => false)),
      'member_relation_id' => new sfValidatorInteger(array('required' => false)),
      'member_age'         => new sfValidatorInteger(array('required' => false)),
      'member_number'      => new sfValidatorInteger(array('required' => false)),
      'confirmed_flag'     => new sfValidatorBoolean(array('required' => false)),
      'grouped_flag'       => new sfValidatorBoolean(array('required' => false)),
      'active_flag'        => new sfValidatorBoolean(array('required' => false)),
      'grouped_status'     => new sfValidatorInteger(array('required' => false)),
      'confirmed_status'   => new sfValidatorInteger(array('required' => false)),
      'status'             => new sfValidatorInteger(array('required' => false)),
      'description'        => new sfValidatorString(array('required' => false)),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('team_member_participant[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TeamMemberParticipant';
  }

}

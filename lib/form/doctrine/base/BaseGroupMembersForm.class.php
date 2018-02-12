<?php

/**
 * GroupMembers form base class.
 *
 * @method GroupMembers getObject() Returns the current form's model object
 *
 * @package    mu-TMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseGroupMembersForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'token_id'       => new sfWidgetFormInputText(),
      'tournament_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'add_empty' => true)),
      'group_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Group'), 'add_empty' => true)),
      'team_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'add_empty' => true)),
      'start_date'     => new sfWidgetFormInputText(),
      'effective_date' => new sfWidgetFormInputText(),
      'end_date'       => new sfWidgetFormInputText(),
      'active_flag'    => new sfWidgetFormInputCheckbox(),
      'status'         => new sfWidgetFormInputText(),
      'description'    => new sfWidgetFormTextarea(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tournament_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'required' => false)),
      'group_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Group'), 'required' => false)),
      'team_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'required' => false)),
      'start_date'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'effective_date' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'end_date'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'active_flag'    => new sfValidatorBoolean(array('required' => false)),
      'status'         => new sfValidatorInteger(array('required' => false)),
      'description'    => new sfValidatorString(array('required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('group_members[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'GroupMembers';
  }

}
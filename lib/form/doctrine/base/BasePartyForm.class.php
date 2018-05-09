<?php

/**
 * Party form base class.
 *
 * @method Party getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePartyForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'token_id'              => new sfWidgetFormInputText(),
      'org_id'                => new sfWidgetFormInputText(),
      'org_token_id'          => new sfWidgetFormInputText(),
      'parent_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Party'), 'add_empty' => true)),
      'name'                  => new sfWidgetFormInputText(),
      'alias'                 => new sfWidgetFormInputText(),
      'party_code_number'     => new sfWidgetFormInputText(),
      'parent_flag'           => new sfWidgetFormInputCheckbox(),
      'super_parent_flag'     => new sfWidgetFormInputCheckbox(),
      'default_flag'          => new sfWidgetFormInputCheckbox(),
      'active_flag'           => new sfWidgetFormInputCheckbox(),
      'status'                => new sfWidgetFormInputText(),
      'trashed_flag'          => new sfWidgetFormInputCheckbox(),
      'trashed_on'            => new sfWidgetFormInputText(),
      'description'           => new sfWidgetFormTextarea(),
      'type'                  => new sfWidgetFormInputText(),
      'representative_id'     => new sfWidgetFormInputText(),
      'title'                 => new sfWidgetFormInputText(),
      'middle_name'           => new sfWidgetFormInputText(),
      'last_name'             => new sfWidgetFormInputText(),
      'full_name'             => new sfWidgetFormInputText(),
      'gender'                => new sfWidgetFormInputText(),
      'date_of_birth'         => new sfWidgetFormInputText(),
      'place_of_birth'        => new sfWidgetFormInputText(),
      'religion'              => new sfWidgetFormInputText(),
      'ethnicity'             => new sfWidgetFormInputText(),
      'nationality'           => new sfWidgetFormInputText(),
      'access_activation_key' => new sfWidgetFormInputText(),
      'created_at'            => new sfWidgetFormDateTime(),
      'updated_at'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'org_id'                => new sfValidatorInteger(array('required' => false)),
      'org_token_id'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'parent_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Party'), 'required' => false)),
      'name'                  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'alias'                 => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'party_code_number'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'parent_flag'           => new sfValidatorBoolean(array('required' => false)),
      'super_parent_flag'     => new sfValidatorBoolean(array('required' => false)),
      'default_flag'          => new sfValidatorBoolean(array('required' => false)),
      'active_flag'           => new sfValidatorBoolean(array('required' => false)),
      'status'                => new sfValidatorInteger(array('required' => false)),
      'trashed_flag'          => new sfValidatorBoolean(array('required' => false)),
      'trashed_on'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'description'           => new sfValidatorString(array('required' => false)),
      'type'                  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'representative_id'     => new sfValidatorInteger(array('required' => false)),
      'title'                 => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'middle_name'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'last_name'             => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'full_name'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'gender'                => new sfValidatorInteger(array('required' => false)),
      'date_of_birth'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'place_of_birth'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'religion'              => new sfValidatorInteger(array('required' => false)),
      'ethnicity'             => new sfValidatorInteger(array('required' => false)),
      'nationality'           => new sfValidatorInteger(array('required' => false)),
      'access_activation_key' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'created_at'            => new sfValidatorDateTime(),
      'updated_at'            => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('party[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Party';
  }

}

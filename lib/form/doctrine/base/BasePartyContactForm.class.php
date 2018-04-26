<?php

/**
 * PartyContact form base class.
 *
 * @method PartyContact getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePartyContactForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'token_id'              => new sfWidgetFormInputText(),
      'from_date'             => new sfWidgetFormInputText(),
      'to_date'               => new sfWidgetFormInputText(),
      'party_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Party'), 'add_empty' => true)),
      'party_token_id'        => new sfWidgetFormInputText(),
      'address_one'           => new sfWidgetFormInputText(),
      'address_two'           => new sfWidgetFormInputText(),
      'country'               => new sfWidgetFormInputText(),
      'identification_type'   => new sfWidgetFormInputText(),
      'identification_number' => new sfWidgetFormInputText(),
      'mobile_number'         => new sfWidgetFormInputText(),
      'home_phone_number'     => new sfWidgetFormInputText(),
      'pobox'                 => new sfWidgetFormInputText(),
      'email'                 => new sfWidgetFormInputText(),
      'website'               => new sfWidgetFormInputText(),
      'photo'                 => new sfWidgetFormInputText(),
      'photo_file_path'       => new sfWidgetFormInputText(),
      'default_flag'          => new sfWidgetFormInputCheckbox(),
      'active_flag'           => new sfWidgetFormInputCheckbox(),
      'status'                => new sfWidgetFormInputText(),
      'description'           => new sfWidgetFormTextarea(),
      'type'                  => new sfWidgetFormInputText(),
      'created_at'            => new sfWidgetFormDateTime(),
      'updated_at'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'from_date'             => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'to_date'               => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'party_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Party'), 'required' => false)),
      'party_token_id'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'address_one'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'address_two'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'country'               => new sfValidatorInteger(array('required' => false)),
      'identification_type'   => new sfValidatorInteger(array('required' => false)),
      'identification_number' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'mobile_number'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'home_phone_number'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'pobox'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'website'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'photo'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'photo_file_path'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'default_flag'          => new sfValidatorBoolean(array('required' => false)),
      'active_flag'           => new sfValidatorBoolean(array('required' => false)),
      'status'                => new sfValidatorInteger(array('required' => false)),
      'description'           => new sfValidatorString(array('required' => false)),
      'type'                  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'            => new sfValidatorDateTime(),
      'updated_at'            => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('party_contact[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PartyContact';
  }

}

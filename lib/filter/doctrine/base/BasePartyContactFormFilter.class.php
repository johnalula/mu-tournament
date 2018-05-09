<?php

/**
 * PartyContact filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePartyContactFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'              => new sfWidgetFormFilterInput(),
      'from_date'             => new sfWidgetFormFilterInput(),
      'to_date'               => new sfWidgetFormFilterInput(),
      'party_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Party'), 'add_empty' => true)),
      'party_token_id'        => new sfWidgetFormFilterInput(),
      'address_one'           => new sfWidgetFormFilterInput(),
      'address_two'           => new sfWidgetFormFilterInput(),
      'country'               => new sfWidgetFormFilterInput(),
      'identification_type'   => new sfWidgetFormFilterInput(),
      'identification_number' => new sfWidgetFormFilterInput(),
      'mobile_number'         => new sfWidgetFormFilterInput(),
      'home_phone_number'     => new sfWidgetFormFilterInput(),
      'pobox'                 => new sfWidgetFormFilterInput(),
      'email'                 => new sfWidgetFormFilterInput(),
      'website'               => new sfWidgetFormFilterInput(),
      'photo'                 => new sfWidgetFormFilterInput(),
      'photo_file_path'       => new sfWidgetFormFilterInput(),
      'default_flag'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'                => new sfWidgetFormFilterInput(),
      'description'           => new sfWidgetFormFilterInput(),
      'type'                  => new sfWidgetFormFilterInput(),
      'created_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'              => new sfValidatorPass(array('required' => false)),
      'from_date'             => new sfValidatorPass(array('required' => false)),
      'to_date'               => new sfValidatorPass(array('required' => false)),
      'party_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Party'), 'column' => 'id')),
      'party_token_id'        => new sfValidatorPass(array('required' => false)),
      'address_one'           => new sfValidatorPass(array('required' => false)),
      'address_two'           => new sfValidatorPass(array('required' => false)),
      'country'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'identification_type'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'identification_number' => new sfValidatorPass(array('required' => false)),
      'mobile_number'         => new sfValidatorPass(array('required' => false)),
      'home_phone_number'     => new sfValidatorPass(array('required' => false)),
      'pobox'                 => new sfValidatorPass(array('required' => false)),
      'email'                 => new sfValidatorPass(array('required' => false)),
      'website'               => new sfValidatorPass(array('required' => false)),
      'photo'                 => new sfValidatorPass(array('required' => false)),
      'photo_file_path'       => new sfValidatorPass(array('required' => false)),
      'default_flag'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'           => new sfValidatorPass(array('required' => false)),
      'type'                  => new sfValidatorPass(array('required' => false)),
      'created_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('party_contact_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PartyContact';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'token_id'              => 'Text',
      'from_date'             => 'Text',
      'to_date'               => 'Text',
      'party_id'              => 'ForeignKey',
      'party_token_id'        => 'Text',
      'address_one'           => 'Text',
      'address_two'           => 'Text',
      'country'               => 'Number',
      'identification_type'   => 'Number',
      'identification_number' => 'Text',
      'mobile_number'         => 'Text',
      'home_phone_number'     => 'Text',
      'pobox'                 => 'Text',
      'email'                 => 'Text',
      'website'               => 'Text',
      'photo'                 => 'Text',
      'photo_file_path'       => 'Text',
      'default_flag'          => 'Boolean',
      'active_flag'           => 'Boolean',
      'status'                => 'Number',
      'description'           => 'Text',
      'type'                  => 'Text',
      'created_at'            => 'Date',
      'updated_at'            => 'Date',
    );
  }
}

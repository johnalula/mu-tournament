<?php

/**
 * PartyRelationship filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePartyRelationshipFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'          => new sfWidgetFormFilterInput(),
      'party_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Party'), 'add_empty' => true)),
      'relationship_type' => new sfWidgetFormFilterInput(),
      'position_role_id'  => new sfWidgetFormFilterInput(),
      'from_date'         => new sfWidgetFormFilterInput(),
      'to_date'           => new sfWidgetFormFilterInput(),
      'status'            => new sfWidgetFormFilterInput(),
      'default_flag'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'description'       => new sfWidgetFormFilterInput(),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'          => new sfValidatorPass(array('required' => false)),
      'party_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Party'), 'column' => 'id')),
      'relationship_type' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'position_role_id'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'from_date'         => new sfValidatorPass(array('required' => false)),
      'to_date'           => new sfValidatorPass(array('required' => false)),
      'status'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'default_flag'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'description'       => new sfValidatorPass(array('required' => false)),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('party_relationship_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PartyRelationship';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'token_id'          => 'Text',
      'party_id'          => 'ForeignKey',
      'relationship_type' => 'Number',
      'position_role_id'  => 'Number',
      'from_date'         => 'Text',
      'to_date'           => 'Text',
      'status'            => 'Number',
      'default_flag'      => 'Boolean',
      'active_flag'       => 'Boolean',
      'description'       => 'Text',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}

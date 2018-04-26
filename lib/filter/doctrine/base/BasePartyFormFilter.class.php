<?php

/**
 * Party filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePartyFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'              => new sfWidgetFormFilterInput(),
      'org_id'                => new sfWidgetFormFilterInput(),
      'org_token_id'          => new sfWidgetFormFilterInput(),
      'parent_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Party'), 'add_empty' => true)),
      'name'                  => new sfWidgetFormFilterInput(),
      'alias'                 => new sfWidgetFormFilterInput(),
      'party_code_number'     => new sfWidgetFormFilterInput(),
      'parent_flag'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'super_parent_flag'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'default_flag'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'                => new sfWidgetFormFilterInput(),
      'trashed_flag'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'trashed_on'            => new sfWidgetFormFilterInput(),
      'description'           => new sfWidgetFormFilterInput(),
      'type'                  => new sfWidgetFormFilterInput(),
      'representative_id'     => new sfWidgetFormFilterInput(),
      'title'                 => new sfWidgetFormFilterInput(),
      'middle_name'           => new sfWidgetFormFilterInput(),
      'last_name'             => new sfWidgetFormFilterInput(),
      'full_name'             => new sfWidgetFormFilterInput(),
      'gender'                => new sfWidgetFormFilterInput(),
      'date_of_birth'         => new sfWidgetFormFilterInput(),
      'place_of_birth'        => new sfWidgetFormFilterInput(),
      'religion'              => new sfWidgetFormFilterInput(),
      'ethnicity'             => new sfWidgetFormFilterInput(),
      'nationality'           => new sfWidgetFormFilterInput(),
      'access_activation_key' => new sfWidgetFormFilterInput(),
      'created_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'              => new sfValidatorPass(array('required' => false)),
      'org_id'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'org_token_id'          => new sfValidatorPass(array('required' => false)),
      'parent_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Party'), 'column' => 'id')),
      'name'                  => new sfValidatorPass(array('required' => false)),
      'alias'                 => new sfValidatorPass(array('required' => false)),
      'party_code_number'     => new sfValidatorPass(array('required' => false)),
      'parent_flag'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'super_parent_flag'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'default_flag'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'trashed_flag'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'trashed_on'            => new sfValidatorPass(array('required' => false)),
      'description'           => new sfValidatorPass(array('required' => false)),
      'type'                  => new sfValidatorPass(array('required' => false)),
      'representative_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'title'                 => new sfValidatorPass(array('required' => false)),
      'middle_name'           => new sfValidatorPass(array('required' => false)),
      'last_name'             => new sfValidatorPass(array('required' => false)),
      'full_name'             => new sfValidatorPass(array('required' => false)),
      'gender'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'date_of_birth'         => new sfValidatorPass(array('required' => false)),
      'place_of_birth'        => new sfValidatorPass(array('required' => false)),
      'religion'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ethnicity'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nationality'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'access_activation_key' => new sfValidatorPass(array('required' => false)),
      'created_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('party_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Party';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'token_id'              => 'Text',
      'org_id'                => 'Number',
      'org_token_id'          => 'Text',
      'parent_id'             => 'ForeignKey',
      'name'                  => 'Text',
      'alias'                 => 'Text',
      'party_code_number'     => 'Text',
      'parent_flag'           => 'Boolean',
      'super_parent_flag'     => 'Boolean',
      'default_flag'          => 'Boolean',
      'active_flag'           => 'Boolean',
      'status'                => 'Number',
      'trashed_flag'          => 'Boolean',
      'trashed_on'            => 'Text',
      'description'           => 'Text',
      'type'                  => 'Text',
      'representative_id'     => 'Number',
      'title'                 => 'Text',
      'middle_name'           => 'Text',
      'last_name'             => 'Text',
      'full_name'             => 'Text',
      'gender'                => 'Number',
      'date_of_birth'         => 'Text',
      'place_of_birth'        => 'Text',
      'religion'              => 'Number',
      'ethnicity'             => 'Number',
      'nationality'           => 'Number',
      'access_activation_key' => 'Text',
      'created_at'            => 'Date',
      'updated_at'            => 'Date',
    );
  }
}

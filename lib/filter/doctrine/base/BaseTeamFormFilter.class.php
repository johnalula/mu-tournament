<?php

/**
 * Team filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTeamFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'                         => new sfWidgetFormFilterInput(),
      'org_id'                           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'                     => new sfWidgetFormFilterInput(),
      'tournament_id'                    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'add_empty' => true)),
      'tournament_token_id'              => new sfWidgetFormFilterInput(),
      'country_id'                       => new sfWidgetFormFilterInput(),
      'team_number'                      => new sfWidgetFormFilterInput(),
      'team_name'                        => new sfWidgetFormFilterInput(),
      'alias'                            => new sfWidgetFormFilterInput(),
      'team_city'                        => new sfWidgetFormFilterInput(),
      'total_member'                     => new sfWidgetFormFilterInput(),
      'team_logo_alias'                  => new sfWidgetFormFilterInput(),
      'team_logo_file_type'              => new sfWidgetFormFilterInput(),
      'team_logo_file_name'              => new sfWidgetFormFilterInput(),
      'team_logo_file_name_path'         => new sfWidgetFormFilterInput(),
      'team_logo_file_full_path'         => new sfWidgetFormFilterInput(),
      'team_country_flag_alias'          => new sfWidgetFormFilterInput(),
      'team_country_flag_file_type'      => new sfWidgetFormFilterInput(),
      'team_country_flag_file_name'      => new sfWidgetFormFilterInput(),
      'team_country_flag_file_name_path' => new sfWidgetFormFilterInput(),
      'team_country_flag_file_full_path' => new sfWidgetFormFilterInput(),
      'start_date'                       => new sfWidgetFormFilterInput(),
      'end_date'                         => new sfWidgetFormFilterInput(),
      'grouped_flag'                     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'confirm_flag'                     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'                      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'                           => new sfWidgetFormFilterInput(),
      'description'                      => new sfWidgetFormFilterInput(),
      'created_at'                       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'                         => new sfValidatorPass(array('required' => false)),
      'org_id'                           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Organization'), 'column' => 'id')),
      'org_token_id'                     => new sfValidatorPass(array('required' => false)),
      'tournament_id'                    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tournament'), 'column' => 'id')),
      'tournament_token_id'              => new sfValidatorPass(array('required' => false)),
      'country_id'                       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'team_number'                      => new sfValidatorPass(array('required' => false)),
      'team_name'                        => new sfValidatorPass(array('required' => false)),
      'alias'                            => new sfValidatorPass(array('required' => false)),
      'team_city'                        => new sfValidatorPass(array('required' => false)),
      'total_member'                     => new sfValidatorPass(array('required' => false)),
      'team_logo_alias'                  => new sfValidatorPass(array('required' => false)),
      'team_logo_file_type'              => new sfValidatorPass(array('required' => false)),
      'team_logo_file_name'              => new sfValidatorPass(array('required' => false)),
      'team_logo_file_name_path'         => new sfValidatorPass(array('required' => false)),
      'team_logo_file_full_path'         => new sfValidatorPass(array('required' => false)),
      'team_country_flag_alias'          => new sfValidatorPass(array('required' => false)),
      'team_country_flag_file_type'      => new sfValidatorPass(array('required' => false)),
      'team_country_flag_file_name'      => new sfValidatorPass(array('required' => false)),
      'team_country_flag_file_name_path' => new sfValidatorPass(array('required' => false)),
      'team_country_flag_file_full_path' => new sfValidatorPass(array('required' => false)),
      'start_date'                       => new sfValidatorPass(array('required' => false)),
      'end_date'                         => new sfValidatorPass(array('required' => false)),
      'grouped_flag'                     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'confirm_flag'                     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'                      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'                           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'                      => new sfValidatorPass(array('required' => false)),
      'created_at'                       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('team_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Team';
  }

  public function getFields()
  {
    return array(
      'id'                               => 'Number',
      'token_id'                         => 'Text',
      'org_id'                           => 'ForeignKey',
      'org_token_id'                     => 'Text',
      'tournament_id'                    => 'ForeignKey',
      'tournament_token_id'              => 'Text',
      'country_id'                       => 'Number',
      'team_number'                      => 'Text',
      'team_name'                        => 'Text',
      'alias'                            => 'Text',
      'team_city'                        => 'Text',
      'total_member'                     => 'Text',
      'team_logo_alias'                  => 'Text',
      'team_logo_file_type'              => 'Text',
      'team_logo_file_name'              => 'Text',
      'team_logo_file_name_path'         => 'Text',
      'team_logo_file_full_path'         => 'Text',
      'team_country_flag_alias'          => 'Text',
      'team_country_flag_file_type'      => 'Text',
      'team_country_flag_file_name'      => 'Text',
      'team_country_flag_file_name_path' => 'Text',
      'team_country_flag_file_full_path' => 'Text',
      'start_date'                       => 'Text',
      'end_date'                         => 'Text',
      'grouped_flag'                     => 'Boolean',
      'confirm_flag'                     => 'Boolean',
      'active_flag'                      => 'Boolean',
      'status'                           => 'Number',
      'description'                      => 'Text',
      'created_at'                       => 'Date',
      'updated_at'                       => 'Date',
    );
  }
}

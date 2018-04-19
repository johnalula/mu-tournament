<?php

/**
 * Team form base class.
 *
 * @method Team getObject() Returns the current form's model object
 *
 * @package    mu-TMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTeamForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                               => new sfWidgetFormInputHidden(),
      'token_id'                         => new sfWidgetFormInputText(),
      'org_id'                           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'                     => new sfWidgetFormInputText(),
      'tournament_id'                    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'add_empty' => true)),
      'tournament_token_id'              => new sfWidgetFormInputText(),
      'country_id'                       => new sfWidgetFormInputText(),
      'team_number'                      => new sfWidgetFormInputText(),
      'team_name'                        => new sfWidgetFormInputText(),
      'alias'                            => new sfWidgetFormInputText(),
      'team_city'                        => new sfWidgetFormInputText(),
      'total_member'                     => new sfWidgetFormInputText(),
      'team_logo_alias'                  => new sfWidgetFormInputText(),
      'team_logo_file_type'              => new sfWidgetFormInputText(),
      'team_logo_file_name'              => new sfWidgetFormInputText(),
      'team_logo_file_name_path'         => new sfWidgetFormInputText(),
      'team_logo_file_full_path'         => new sfWidgetFormInputText(),
      'team_country_flag_alias'          => new sfWidgetFormInputText(),
      'team_country_flag_file_type'      => new sfWidgetFormInputText(),
      'team_country_flag_file_name'      => new sfWidgetFormInputText(),
      'team_country_flag_file_name_path' => new sfWidgetFormInputText(),
      'team_country_flag_file_full_path' => new sfWidgetFormInputText(),
      'start_date'                       => new sfWidgetFormInputText(),
      'end_date'                         => new sfWidgetFormInputText(),
      'confirm_flag'                     => new sfWidgetFormInputCheckbox(),
      'active_flag'                      => new sfWidgetFormInputCheckbox(),
      'status'                           => new sfWidgetFormInputText(),
      'description'                      => new sfWidgetFormTextarea(),
      'created_at'                       => new sfWidgetFormDateTime(),
      'updated_at'                       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'                         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'org_id'                           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'required' => false)),
      'org_token_id'                     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tournament_id'                    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'required' => false)),
      'tournament_token_id'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'country_id'                       => new sfValidatorInteger(array('required' => false)),
      'team_number'                      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'team_name'                        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'alias'                            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'team_city'                        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'total_member'                     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'team_logo_alias'                  => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'team_logo_file_type'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'team_logo_file_name'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'team_logo_file_name_path'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'team_logo_file_full_path'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'team_country_flag_alias'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'team_country_flag_file_type'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'team_country_flag_file_name'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'team_country_flag_file_name_path' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'team_country_flag_file_full_path' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'start_date'                       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'end_date'                         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'confirm_flag'                     => new sfValidatorBoolean(array('required' => false)),
      'active_flag'                      => new sfValidatorBoolean(array('required' => false)),
      'status'                           => new sfValidatorInteger(array('required' => false)),
      'description'                      => new sfValidatorString(array('required' => false)),
      'created_at'                       => new sfValidatorDateTime(),
      'updated_at'                       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('team[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Team';
  }

}

<?php

/**
 * SportGame filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSportGameFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'                             => new sfWidgetFormFilterInput(),
      'org_id'                               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'                         => new sfWidgetFormFilterInput(),
      'sport_game_category_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GameCategory'), 'add_empty' => true)),
      'distance_type'                        => new sfWidgetFormFilterInput(),
      'name'                                 => new sfWidgetFormFilterInput(),
      'alias'                                => new sfWidgetFormFilterInput(),
      'game_distance'                        => new sfWidgetFormFilterInput(),
      'game_distance_measurement'            => new sfWidgetFormFilterInput(),
      'sport_game_number'                    => new sfWidgetFormFilterInput(),
      'sport_game_type_mode'                 => new sfWidgetFormFilterInput(),
      'contestant_mode'                      => new sfWidgetFormFilterInput(),
      'contestant_team_mode'                 => new sfWidgetFormFilterInput(),
      'jump_type_mode'                       => new sfWidgetFormFilterInput(),
      'throw_type_mode'                      => new sfWidgetFormFilterInput(),
      'win_result_table_point'               => new sfWidgetFormFilterInput(),
      'draw_result_table_point'              => new sfWidgetFormFilterInput(),
      'loose_result_table_point'             => new sfWidgetFormFilterInput(),
      'result_ranking_mode'                  => new sfWidgetFormFilterInput(),
      'number_of_contestants_per_track_mode' => new sfWidgetFormFilterInput(),
      'start_date'                           => new sfWidgetFormFilterInput(),
      'effective_date'                       => new sfWidgetFormFilterInput(),
      'end_date'                             => new sfWidgetFormFilterInput(),
      'fixed_contestant_per_track_flag'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'default_flag'                         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'                          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'                               => new sfWidgetFormFilterInput(),
      'description'                          => new sfWidgetFormFilterInput(),
      'created_at'                           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'                             => new sfValidatorPass(array('required' => false)),
      'org_id'                               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Organization'), 'column' => 'id')),
      'org_token_id'                         => new sfValidatorPass(array('required' => false)),
      'sport_game_category_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('GameCategory'), 'column' => 'id')),
      'distance_type'                        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'name'                                 => new sfValidatorPass(array('required' => false)),
      'alias'                                => new sfValidatorPass(array('required' => false)),
      'game_distance'                        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'game_distance_measurement'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sport_game_number'                    => new sfValidatorPass(array('required' => false)),
      'sport_game_type_mode'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'contestant_mode'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'contestant_team_mode'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'jump_type_mode'                       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'throw_type_mode'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'win_result_table_point'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'draw_result_table_point'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'loose_result_table_point'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'result_ranking_mode'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'number_of_contestants_per_track_mode' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'start_date'                           => new sfValidatorPass(array('required' => false)),
      'effective_date'                       => new sfValidatorPass(array('required' => false)),
      'end_date'                             => new sfValidatorPass(array('required' => false)),
      'fixed_contestant_per_track_flag'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'default_flag'                         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'                          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'                               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'                          => new sfValidatorPass(array('required' => false)),
      'created_at'                           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('sport_game_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SportGame';
  }

  public function getFields()
  {
    return array(
      'id'                                   => 'Number',
      'token_id'                             => 'Text',
      'org_id'                               => 'ForeignKey',
      'org_token_id'                         => 'Text',
      'sport_game_category_id'               => 'ForeignKey',
      'distance_type'                        => 'Number',
      'name'                                 => 'Text',
      'alias'                                => 'Text',
      'game_distance'                        => 'Number',
      'game_distance_measurement'            => 'Number',
      'sport_game_number'                    => 'Text',
      'sport_game_type_mode'                 => 'Number',
      'contestant_mode'                      => 'Number',
      'contestant_team_mode'                 => 'Number',
      'jump_type_mode'                       => 'Number',
      'throw_type_mode'                      => 'Number',
      'win_result_table_point'               => 'Number',
      'draw_result_table_point'              => 'Number',
      'loose_result_table_point'             => 'Number',
      'result_ranking_mode'                  => 'Number',
      'number_of_contestants_per_track_mode' => 'Number',
      'start_date'                           => 'Text',
      'effective_date'                       => 'Text',
      'end_date'                             => 'Text',
      'fixed_contestant_per_track_flag'      => 'Boolean',
      'default_flag'                         => 'Boolean',
      'active_flag'                          => 'Boolean',
      'status'                               => 'Number',
      'description'                          => 'Text',
      'created_at'                           => 'Date',
      'updated_at'                           => 'Date',
    );
  }
}

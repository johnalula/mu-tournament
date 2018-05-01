<?php

/**
 * SportGameGroup filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSportGameGroupFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'                             => new sfWidgetFormFilterInput(),
      'tournament_id'                        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'add_empty' => true)),
      'tournament_sport_game_group_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentTeamGroup'), 'add_empty' => true)),
      'tournament_sport_game_group_token_id' => new sfWidgetFormFilterInput(),
      'sport_game_id'                        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SportGame'), 'add_empty' => true)),
      'sport_game_token_id'                  => new sfWidgetFormFilterInput(),
      'gender_category_id'                   => new sfWidgetFormFilterInput(),
      'group_code'                           => new sfWidgetFormFilterInput(),
      'group_name'                           => new sfWidgetFormFilterInput(),
      'group_number'                         => new sfWidgetFormFilterInput(),
      'alias'                                => new sfWidgetFormFilterInput(),
      'total_group_members'                  => new sfWidgetFormFilterInput(),
      'contestant_team_mode'                 => new sfWidgetFormFilterInput(),
      'start_date'                           => new sfWidgetFormFilterInput(),
      'effective_date'                       => new sfWidgetFormFilterInput(),
      'end_date'                             => new sfWidgetFormFilterInput(),
      'complete_flag'                        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'                          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'approval_status'                      => new sfWidgetFormFilterInput(),
      'status'                               => new sfWidgetFormFilterInput(),
      'description'                          => new sfWidgetFormFilterInput(),
      'created_at'                           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'                             => new sfValidatorPass(array('required' => false)),
      'tournament_id'                        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tournament'), 'column' => 'id')),
      'tournament_sport_game_group_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentTeamGroup'), 'column' => 'id')),
      'tournament_sport_game_group_token_id' => new sfValidatorPass(array('required' => false)),
      'sport_game_id'                        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SportGame'), 'column' => 'id')),
      'sport_game_token_id'                  => new sfValidatorPass(array('required' => false)),
      'gender_category_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'group_code'                           => new sfValidatorPass(array('required' => false)),
      'group_name'                           => new sfValidatorPass(array('required' => false)),
      'group_number'                         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'alias'                                => new sfValidatorPass(array('required' => false)),
      'total_group_members'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'contestant_team_mode'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'start_date'                           => new sfValidatorPass(array('required' => false)),
      'effective_date'                       => new sfValidatorPass(array('required' => false)),
      'end_date'                             => new sfValidatorPass(array('required' => false)),
      'complete_flag'                        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'                          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'approval_status'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'                               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'                          => new sfValidatorPass(array('required' => false)),
      'created_at'                           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('sport_game_group_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SportGameGroup';
  }

  public function getFields()
  {
    return array(
      'id'                                   => 'Number',
      'token_id'                             => 'Text',
      'tournament_id'                        => 'ForeignKey',
      'tournament_sport_game_group_id'       => 'ForeignKey',
      'tournament_sport_game_group_token_id' => 'Text',
      'sport_game_id'                        => 'ForeignKey',
      'sport_game_token_id'                  => 'Text',
      'gender_category_id'                   => 'Number',
      'group_code'                           => 'Text',
      'group_name'                           => 'Text',
      'group_number'                         => 'Number',
      'alias'                                => 'Text',
      'total_group_members'                  => 'Number',
      'contestant_team_mode'                 => 'Number',
      'start_date'                           => 'Text',
      'effective_date'                       => 'Text',
      'end_date'                             => 'Text',
      'complete_flag'                        => 'Boolean',
      'active_flag'                          => 'Boolean',
      'approval_status'                      => 'Number',
      'status'                               => 'Number',
      'description'                          => 'Text',
      'created_at'                           => 'Date',
      'updated_at'                           => 'Date',
    );
  }
}

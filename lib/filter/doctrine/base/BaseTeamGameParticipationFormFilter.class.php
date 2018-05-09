<?php

/**
 * TeamGameParticipation filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTeamGameParticipationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'               => new sfWidgetFormFilterInput(),
      'team_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'add_empty' => true)),
      'team_token_id'          => new sfWidgetFormFilterInput(),
      'sport_game_category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GameCategory'), 'add_empty' => true)),
      'sport_game_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SportGame'), 'add_empty' => true)),
      'sport_game_token_id'    => new sfWidgetFormFilterInput(),
      'number_of_players'      => new sfWidgetFormFilterInput(),
      'gender_category_id'     => new sfWidgetFormFilterInput(),
      'event_type'             => new sfWidgetFormFilterInput(),
      'player_mode'            => new sfWidgetFormFilterInput(),
      'grouped_flag'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'confirm_flag'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'                 => new sfWidgetFormFilterInput(),
      'description'            => new sfWidgetFormFilterInput(),
      'created_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'               => new sfValidatorPass(array('required' => false)),
      'team_id'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Team'), 'column' => 'id')),
      'team_token_id'          => new sfValidatorPass(array('required' => false)),
      'sport_game_category_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('GameCategory'), 'column' => 'id')),
      'sport_game_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SportGame'), 'column' => 'id')),
      'sport_game_token_id'    => new sfValidatorPass(array('required' => false)),
      'number_of_players'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gender_category_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'event_type'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'player_mode'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'grouped_flag'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'confirm_flag'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'            => new sfValidatorPass(array('required' => false)),
      'created_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('team_game_participation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TeamGameParticipation';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'token_id'               => 'Text',
      'team_id'                => 'ForeignKey',
      'team_token_id'          => 'Text',
      'sport_game_category_id' => 'ForeignKey',
      'sport_game_id'          => 'ForeignKey',
      'sport_game_token_id'    => 'Text',
      'number_of_players'      => 'Number',
      'gender_category_id'     => 'Number',
      'event_type'             => 'Number',
      'player_mode'            => 'Number',
      'grouped_flag'           => 'Boolean',
      'confirm_flag'           => 'Boolean',
      'active_flag'            => 'Boolean',
      'status'                 => 'Number',
      'description'            => 'Text',
      'created_at'             => 'Date',
      'updated_at'             => 'Date',
    );
  }
}

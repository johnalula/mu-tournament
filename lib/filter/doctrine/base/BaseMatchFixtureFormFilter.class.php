<?php

/**
 * MatchFixture filter form base class.
 *
 * @package    mu-TMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMatchFixtureFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'                  => new sfWidgetFormFilterInput(),
      'tournament_match_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatch'), 'add_empty' => true)),
      'tournament_match_token_id' => new sfWidgetFormFilterInput(),
      'sport_game_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SportGame'), 'add_empty' => true)),
      'sport_game_token_id'       => new sfWidgetFormFilterInput(),
      'group_type_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GroupType'), 'add_empty' => true)),
      'match_round_type_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RoundType'), 'add_empty' => true)),
      'gender_category_id'        => new sfWidgetFormFilterInput(),
      'event_type'                => new sfWidgetFormFilterInput(),
      'player_mode'               => new sfWidgetFormFilterInput(),
      'match_venue'               => new sfWidgetFormFilterInput(),
      'tournament_match_number'   => new sfWidgetFormFilterInput(),
      'match_date'                => new sfWidgetFormFilterInput(),
      'match_time'                => new sfWidgetFormFilterInput(),
      'start_date'                => new sfWidgetFormFilterInput(),
      'effective_date'            => new sfWidgetFormFilterInput(),
      'end_date'                  => new sfWidgetFormFilterInput(),
      'roundable_flag'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'                    => new sfWidgetFormFilterInput(),
      'description'               => new sfWidgetFormFilterInput(),
      'created_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'                  => new sfValidatorPass(array('required' => false)),
      'tournament_match_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentMatch'), 'column' => 'id')),
      'tournament_match_token_id' => new sfValidatorPass(array('required' => false)),
      'sport_game_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SportGame'), 'column' => 'id')),
      'sport_game_token_id'       => new sfValidatorPass(array('required' => false)),
      'group_type_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('GroupType'), 'column' => 'id')),
      'match_round_type_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('RoundType'), 'column' => 'id')),
      'gender_category_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'event_type'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'player_mode'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'match_venue'               => new sfValidatorPass(array('required' => false)),
      'tournament_match_number'   => new sfValidatorPass(array('required' => false)),
      'match_date'                => new sfValidatorPass(array('required' => false)),
      'match_time'                => new sfValidatorPass(array('required' => false)),
      'start_date'                => new sfValidatorPass(array('required' => false)),
      'effective_date'            => new sfValidatorPass(array('required' => false)),
      'end_date'                  => new sfValidatorPass(array('required' => false)),
      'roundable_flag'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'               => new sfValidatorPass(array('required' => false)),
      'created_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('match_fixture_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MatchFixture';
  }

  public function getFields()
  {
    return array(
      'id'                        => 'Number',
      'token_id'                  => 'Text',
      'tournament_match_id'       => 'ForeignKey',
      'tournament_match_token_id' => 'Text',
      'sport_game_id'             => 'ForeignKey',
      'sport_game_token_id'       => 'Text',
      'group_type_id'             => 'ForeignKey',
      'match_round_type_id'       => 'ForeignKey',
      'gender_category_id'        => 'Number',
      'event_type'                => 'Number',
      'player_mode'               => 'Number',
      'match_venue'               => 'Text',
      'tournament_match_number'   => 'Text',
      'match_date'                => 'Text',
      'match_time'                => 'Text',
      'start_date'                => 'Text',
      'effective_date'            => 'Text',
      'end_date'                  => 'Text',
      'roundable_flag'            => 'Boolean',
      'active_flag'               => 'Boolean',
      'status'                    => 'Number',
      'description'               => 'Text',
      'created_at'                => 'Date',
      'updated_at'                => 'Date',
    );
  }
}

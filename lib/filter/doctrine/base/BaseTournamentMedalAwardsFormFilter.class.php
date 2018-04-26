<?php

/**
 * TournamentMedalAwards filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTournamentMedalAwardsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'            => new sfWidgetFormFilterInput(),
      'tournament_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'add_empty' => true)),
      'team_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Team'), 'add_empty' => true)),
      'tournament_award_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentRankTable'), 'add_empty' => true)),
      'match_fixture_id'    => new sfWidgetFormFilterInput(),
      'person_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'add_empty' => true)),
      'rank'                => new sfWidgetFormFilterInput(),
      'medal_award_type'    => new sfWidgetFormFilterInput(),
      'total_medal_award'   => new sfWidgetFormFilterInput(),
      'game_win'            => new sfWidgetFormFilterInput(),
      'game_draw'           => new sfWidgetFormFilterInput(),
      'game_lost'           => new sfWidgetFormFilterInput(),
      'goal_for'            => new sfWidgetFormFilterInput(),
      'goal_againest'       => new sfWidgetFormFilterInput(),
      'goal_difference'     => new sfWidgetFormFilterInput(),
      'points'              => new sfWidgetFormFilterInput(),
      'active_flag'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'              => new sfWidgetFormFilterInput(),
      'description'         => new sfWidgetFormFilterInput(),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'            => new sfValidatorPass(array('required' => false)),
      'tournament_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tournament'), 'column' => 'id')),
      'team_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Team'), 'column' => 'id')),
      'tournament_award_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentRankTable'), 'column' => 'id')),
      'match_fixture_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'person_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Person'), 'column' => 'id')),
      'rank'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'medal_award_type'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'total_medal_award'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'game_win'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'game_draw'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'game_lost'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'goal_for'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'goal_againest'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'goal_difference'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'points'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'active_flag'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'         => new sfValidatorPass(array('required' => false)),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('tournament_medal_awards_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentMedalAwards';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'token_id'            => 'Text',
      'tournament_id'       => 'ForeignKey',
      'team_id'             => 'ForeignKey',
      'tournament_award_id' => 'ForeignKey',
      'match_fixture_id'    => 'Number',
      'person_id'           => 'ForeignKey',
      'rank'                => 'Number',
      'medal_award_type'    => 'Number',
      'total_medal_award'   => 'Number',
      'game_win'            => 'Number',
      'game_draw'           => 'Number',
      'game_lost'           => 'Number',
      'goal_for'            => 'Number',
      'goal_againest'       => 'Number',
      'goal_difference'     => 'Number',
      'points'              => 'Number',
      'active_flag'         => 'Boolean',
      'status'              => 'Number',
      'description'         => 'Text',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}

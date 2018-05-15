<?php

/**
 * TournamentMatch filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTournamentMatchFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'                         => new sfWidgetFormFilterInput(),
      'org_id'                           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'                     => new sfWidgetFormFilterInput(),
      'tournament_id'                    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'add_empty' => true)),
      'tournament_token_id'              => new sfWidgetFormFilterInput(),
      'parent_tournament_match_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TournamentMatch'), 'add_empty' => true)),
      'parent_tournament_match_token_id' => new sfWidgetFormFilterInput(),
      'sport_game_category_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GameCategory'), 'add_empty' => true)),
      'tournament_match_number'          => new sfWidgetFormFilterInput(),
      'tournament_match_full_number'     => new sfWidgetFormFilterInput(),
      'tournament_match_round_mode'      => new sfWidgetFormFilterInput(),
      'round_type_mode'                  => new sfWidgetFormFilterInput(),
      'contestant_team_mode'             => new sfWidgetFormFilterInput(),
      'start_date'                       => new sfWidgetFormFilterInput(),
      'effective_date'                   => new sfWidgetFormFilterInput(),
      'end_date'                         => new sfWidgetFormFilterInput(),
      'complete_flag'                    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'                      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'approval_status'                  => new sfWidgetFormFilterInput(),
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
      'parent_tournament_match_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TournamentMatch'), 'column' => 'id')),
      'parent_tournament_match_token_id' => new sfValidatorPass(array('required' => false)),
      'sport_game_category_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('GameCategory'), 'column' => 'id')),
      'tournament_match_number'          => new sfValidatorPass(array('required' => false)),
      'tournament_match_full_number'     => new sfValidatorPass(array('required' => false)),
      'tournament_match_round_mode'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'round_type_mode'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'contestant_team_mode'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'start_date'                       => new sfValidatorPass(array('required' => false)),
      'effective_date'                   => new sfValidatorPass(array('required' => false)),
      'end_date'                         => new sfValidatorPass(array('required' => false)),
      'complete_flag'                    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'                      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'approval_status'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'                           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'                      => new sfValidatorPass(array('required' => false)),
      'created_at'                       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('tournament_match_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentMatch';
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
      'parent_tournament_match_id'       => 'ForeignKey',
      'parent_tournament_match_token_id' => 'Text',
      'sport_game_category_id'           => 'ForeignKey',
      'tournament_match_number'          => 'Text',
      'tournament_match_full_number'     => 'Text',
      'tournament_match_round_mode'      => 'Number',
      'round_type_mode'                  => 'Number',
      'contestant_team_mode'             => 'Number',
      'start_date'                       => 'Text',
      'effective_date'                   => 'Text',
      'end_date'                         => 'Text',
      'complete_flag'                    => 'Boolean',
      'active_flag'                      => 'Boolean',
      'approval_status'                  => 'Number',
      'status'                           => 'Number',
      'description'                      => 'Text',
      'created_at'                       => 'Date',
      'updated_at'                       => 'Date',
    );
  }
}

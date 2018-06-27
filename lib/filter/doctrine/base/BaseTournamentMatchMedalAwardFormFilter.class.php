<?php

/**
 * TournamentMatchMedalAward filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTournamentMatchMedalAwardFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'                           => new sfWidgetFormFilterInput(),
      'org_id'                             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'                       => new sfWidgetFormFilterInput(),
      'tournament_id'                      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'add_empty' => true)),
      'sport_game_category_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GameCategory'), 'add_empty' => true)),
      'tournament_medal_award_number'      => new sfWidgetFormFilterInput(),
      'tournament_medal_award_full_number' => new sfWidgetFormFilterInput(),
      'completed_flag'                     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'effective_date'                     => new sfWidgetFormFilterInput(),
      'start_date'                         => new sfWidgetFormFilterInput(),
      'end_date'                           => new sfWidgetFormFilterInput(),
      'active_flag'                        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'process_status'                     => new sfWidgetFormFilterInput(),
      'approval_status'                    => new sfWidgetFormFilterInput(),
      'status'                             => new sfWidgetFormFilterInput(),
      'description'                        => new sfWidgetFormFilterInput(),
      'created_at'                         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'                           => new sfValidatorPass(array('required' => false)),
      'org_id'                             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Organization'), 'column' => 'id')),
      'org_token_id'                       => new sfValidatorPass(array('required' => false)),
      'tournament_id'                      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tournament'), 'column' => 'id')),
      'sport_game_category_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('GameCategory'), 'column' => 'id')),
      'tournament_medal_award_number'      => new sfValidatorPass(array('required' => false)),
      'tournament_medal_award_full_number' => new sfValidatorPass(array('required' => false)),
      'completed_flag'                     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'effective_date'                     => new sfValidatorPass(array('required' => false)),
      'start_date'                         => new sfValidatorPass(array('required' => false)),
      'end_date'                           => new sfValidatorPass(array('required' => false)),
      'active_flag'                        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'process_status'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'approval_status'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'                             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'                        => new sfValidatorPass(array('required' => false)),
      'created_at'                         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('tournament_match_medal_award_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentMatchMedalAward';
  }

  public function getFields()
  {
    return array(
      'id'                                 => 'Number',
      'token_id'                           => 'Text',
      'org_id'                             => 'ForeignKey',
      'org_token_id'                       => 'Text',
      'tournament_id'                      => 'ForeignKey',
      'sport_game_category_id'             => 'ForeignKey',
      'tournament_medal_award_number'      => 'Text',
      'tournament_medal_award_full_number' => 'Text',
      'completed_flag'                     => 'Boolean',
      'effective_date'                     => 'Text',
      'start_date'                         => 'Text',
      'end_date'                           => 'Text',
      'active_flag'                        => 'Boolean',
      'process_status'                     => 'Number',
      'approval_status'                    => 'Number',
      'status'                             => 'Number',
      'description'                        => 'Text',
      'created_at'                         => 'Date',
      'updated_at'                         => 'Date',
    );
  }
}

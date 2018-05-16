<?php

/**
 * TournamentTeamGroup filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTournamentTeamGroupFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'                     => new sfWidgetFormFilterInput(),
      'tournament_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'add_empty' => true)),
      'sport_game_category_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GameCategory'), 'add_empty' => true)),
      'sport_game_category_token_id' => new sfWidgetFormFilterInput(),
      'group_full_code'              => new sfWidgetFormFilterInput(),
      'group_code'                   => new sfWidgetFormFilterInput(),
      'start_date'                   => new sfWidgetFormFilterInput(),
      'effective_date'               => new sfWidgetFormFilterInput(),
      'end_date'                     => new sfWidgetFormFilterInput(),
      'complete_flag'                => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'active_flag'                  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'process_status'               => new sfWidgetFormFilterInput(),
      'approval_status'              => new sfWidgetFormFilterInput(),
      'status'                       => new sfWidgetFormFilterInput(),
      'description'                  => new sfWidgetFormFilterInput(),
      'created_at'                   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'                     => new sfValidatorPass(array('required' => false)),
      'tournament_id'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tournament'), 'column' => 'id')),
      'sport_game_category_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('GameCategory'), 'column' => 'id')),
      'sport_game_category_token_id' => new sfValidatorPass(array('required' => false)),
      'group_full_code'              => new sfValidatorPass(array('required' => false)),
      'group_code'                   => new sfValidatorPass(array('required' => false)),
      'start_date'                   => new sfValidatorPass(array('required' => false)),
      'effective_date'               => new sfValidatorPass(array('required' => false)),
      'end_date'                     => new sfValidatorPass(array('required' => false)),
      'complete_flag'                => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'active_flag'                  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'process_status'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'approval_status'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'                       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'                  => new sfValidatorPass(array('required' => false)),
      'created_at'                   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('tournament_team_group_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentTeamGroup';
  }

  public function getFields()
  {
    return array(
      'id'                           => 'Number',
      'token_id'                     => 'Text',
      'tournament_id'                => 'ForeignKey',
      'sport_game_category_id'       => 'ForeignKey',
      'sport_game_category_token_id' => 'Text',
      'group_full_code'              => 'Text',
      'group_code'                   => 'Text',
      'start_date'                   => 'Text',
      'effective_date'               => 'Text',
      'end_date'                     => 'Text',
      'complete_flag'                => 'Boolean',
      'active_flag'                  => 'Boolean',
      'process_status'               => 'Number',
      'approval_status'              => 'Number',
      'status'                       => 'Number',
      'description'                  => 'Text',
      'created_at'                   => 'Date',
      'updated_at'                   => 'Date',
    );
  }
}

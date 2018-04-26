<?php

/**
 * TournamentProgram filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTournamentProgramFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'           => new sfWidgetFormFilterInput(),
      'org_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'       => new sfWidgetFormFilterInput(),
      'tournament_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'add_empty' => true)),
      'program_full_title' => new sfWidgetFormFilterInput(),
      'event_date'         => new sfWidgetFormFilterInput(),
      'effective_date'     => new sfWidgetFormFilterInput(),
      'start_date'         => new sfWidgetFormFilterInput(),
      'end_date'           => new sfWidgetFormFilterInput(),
      'active_flag'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'featured_flag'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'archived_flag'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'             => new sfWidgetFormFilterInput(),
      'description'        => new sfWidgetFormFilterInput(),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'           => new sfValidatorPass(array('required' => false)),
      'org_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Organization'), 'column' => 'id')),
      'org_token_id'       => new sfValidatorPass(array('required' => false)),
      'tournament_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tournament'), 'column' => 'id')),
      'program_full_title' => new sfValidatorPass(array('required' => false)),
      'event_date'         => new sfValidatorPass(array('required' => false)),
      'effective_date'     => new sfValidatorPass(array('required' => false)),
      'start_date'         => new sfValidatorPass(array('required' => false)),
      'end_date'           => new sfValidatorPass(array('required' => false)),
      'active_flag'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'featured_flag'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'archived_flag'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'        => new sfValidatorPass(array('required' => false)),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('tournament_program_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentProgram';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'token_id'           => 'Text',
      'org_id'             => 'ForeignKey',
      'org_token_id'       => 'Text',
      'tournament_id'      => 'ForeignKey',
      'program_full_title' => 'Text',
      'event_date'         => 'Text',
      'effective_date'     => 'Text',
      'start_date'         => 'Text',
      'end_date'           => 'Text',
      'active_flag'        => 'Boolean',
      'featured_flag'      => 'Boolean',
      'archived_flag'      => 'Boolean',
      'status'             => 'Number',
      'description'        => 'Text',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
    );
  }
}

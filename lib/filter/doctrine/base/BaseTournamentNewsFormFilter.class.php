<?php

/**
 * TournamentNews filter form base class.
 *
 * @package    mu-TMS
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTournamentNewsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token_id'                       => new sfWidgetFormFilterInput(),
      'org_id'                         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'                   => new sfWidgetFormFilterInput(),
      'tournament_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'add_empty' => true)),
      'tournament_event_type'          => new sfWidgetFormFilterInput(),
      'news_full_title'                => new sfWidgetFormFilterInput(),
      'tournament_news_file_type'      => new sfWidgetFormFilterInput(),
      'tournament_news_file_name'      => new sfWidgetFormFilterInput(),
      'tournament_news_file_name_path' => new sfWidgetFormFilterInput(),
      'tournament_news_file_full_path' => new sfWidgetFormFilterInput(),
      'published_date'                 => new sfWidgetFormFilterInput(),
      'edited_date'                    => new sfWidgetFormFilterInput(),
      'active_flag'                    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'featured_flag'                  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'archived_flag'                  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'status'                         => new sfWidgetFormFilterInput(),
      'description'                    => new sfWidgetFormFilterInput(),
      'created_at'                     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'token_id'                       => new sfValidatorPass(array('required' => false)),
      'org_id'                         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Organization'), 'column' => 'id')),
      'org_token_id'                   => new sfValidatorPass(array('required' => false)),
      'tournament_id'                  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tournament'), 'column' => 'id')),
      'tournament_event_type'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'news_full_title'                => new sfValidatorPass(array('required' => false)),
      'tournament_news_file_type'      => new sfValidatorPass(array('required' => false)),
      'tournament_news_file_name'      => new sfValidatorPass(array('required' => false)),
      'tournament_news_file_name_path' => new sfValidatorPass(array('required' => false)),
      'tournament_news_file_full_path' => new sfValidatorPass(array('required' => false)),
      'published_date'                 => new sfValidatorPass(array('required' => false)),
      'edited_date'                    => new sfValidatorPass(array('required' => false)),
      'active_flag'                    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'featured_flag'                  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'archived_flag'                  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'status'                         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'                    => new sfValidatorPass(array('required' => false)),
      'created_at'                     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('tournament_news_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentNews';
  }

  public function getFields()
  {
    return array(
      'id'                             => 'Number',
      'token_id'                       => 'Text',
      'org_id'                         => 'ForeignKey',
      'org_token_id'                   => 'Text',
      'tournament_id'                  => 'ForeignKey',
      'tournament_event_type'          => 'Number',
      'news_full_title'                => 'Text',
      'tournament_news_file_type'      => 'Text',
      'tournament_news_file_name'      => 'Text',
      'tournament_news_file_name_path' => 'Text',
      'tournament_news_file_full_path' => 'Text',
      'published_date'                 => 'Text',
      'edited_date'                    => 'Text',
      'active_flag'                    => 'Boolean',
      'featured_flag'                  => 'Boolean',
      'archived_flag'                  => 'Boolean',
      'status'                         => 'Number',
      'description'                    => 'Text',
      'created_at'                     => 'Date',
      'updated_at'                     => 'Date',
    );
  }
}

<?php

/**
 * TournamentNews form base class.
 *
 * @method TournamentNews getObject() Returns the current form's model object
 *
 * @package    mu-TMS
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTournamentNewsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                             => new sfWidgetFormInputHidden(),
      'token_id'                       => new sfWidgetFormInputText(),
      'org_id'                         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'org_token_id'                   => new sfWidgetFormInputText(),
      'tournament_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'add_empty' => true)),
      'tournament_event_type'          => new sfWidgetFormInputText(),
      'news_full_title'                => new sfWidgetFormInputText(),
      'tournament_news_file_type'      => new sfWidgetFormInputText(),
      'tournament_news_file_name'      => new sfWidgetFormInputText(),
      'tournament_news_file_name_path' => new sfWidgetFormInputText(),
      'tournament_news_file_full_path' => new sfWidgetFormInputText(),
      'published_date'                 => new sfWidgetFormInputText(),
      'edited_date'                    => new sfWidgetFormInputText(),
      'active_flag'                    => new sfWidgetFormInputCheckbox(),
      'featured_flag'                  => new sfWidgetFormInputCheckbox(),
      'archived_flag'                  => new sfWidgetFormInputCheckbox(),
      'status'                         => new sfWidgetFormInputText(),
      'description'                    => new sfWidgetFormTextarea(),
      'created_at'                     => new sfWidgetFormDateTime(),
      'updated_at'                     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'                       => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'org_id'                         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'required' => false)),
      'org_token_id'                   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tournament_id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tournament'), 'required' => false)),
      'tournament_event_type'          => new sfValidatorInteger(array('required' => false)),
      'news_full_title'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'tournament_news_file_type'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'tournament_news_file_name'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'tournament_news_file_name_path' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'tournament_news_file_full_path' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'published_date'                 => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'edited_date'                    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'active_flag'                    => new sfValidatorBoolean(array('required' => false)),
      'featured_flag'                  => new sfValidatorBoolean(array('required' => false)),
      'archived_flag'                  => new sfValidatorBoolean(array('required' => false)),
      'status'                         => new sfValidatorInteger(array('required' => false)),
      'description'                    => new sfValidatorString(array('required' => false)),
      'created_at'                     => new sfValidatorDateTime(),
      'updated_at'                     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('tournament_news[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TournamentNews';
  }

}

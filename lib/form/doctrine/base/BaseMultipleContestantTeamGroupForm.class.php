<?php

/**
 * MultipleContestantTeamGroup form base class.
 *
 * @method MultipleContestantTeamGroup getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMultipleContestantTeamGroupForm extends SportGameGroupForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('multiple_contestant_team_group[%s]');
  }

  public function getModelName()
  {
    return 'MultipleContestantTeamGroup';
  }

}

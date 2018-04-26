<?php

/**
 * PairContestantTeamGroup form base class.
 *
 * @method PairContestantTeamGroup getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePairContestantTeamGroupForm extends SportGameGroupForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('pair_contestant_team_group[%s]');
  }

  public function getModelName()
  {
    return 'PairContestantTeamGroup';
  }

}

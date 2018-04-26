<?php

/**
 * MultipleContestantTeamGroup filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMultipleContestantTeamGroupFormFilter extends SportGameGroupFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('multiple_contestant_team_group_filters[%s]');
  }

  public function getModelName()
  {
    return 'MultipleContestantTeamGroup';
  }
}

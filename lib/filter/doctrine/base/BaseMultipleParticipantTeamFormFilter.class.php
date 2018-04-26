<?php

/**
 * MultipleParticipantTeam filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMultipleParticipantTeamFormFilter extends TournamentMatchParticipantTeamFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('multiple_participant_team_filters[%s]');
  }

  public function getModelName()
  {
    return 'MultipleParticipantTeam';
  }
}

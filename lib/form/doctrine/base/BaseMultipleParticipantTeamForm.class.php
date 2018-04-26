<?php

/**
 * MultipleParticipantTeam form base class.
 *
 * @method MultipleParticipantTeam getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     John Haftom
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMultipleParticipantTeamForm extends TournamentMatchParticipantTeamForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('multiple_participant_team[%s]');
  }

  public function getModelName()
  {
    return 'MultipleParticipantTeam';
  }

}

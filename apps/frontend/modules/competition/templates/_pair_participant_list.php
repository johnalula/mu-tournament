<div class="table-responsive" id="ui-data-content">
	<table class="table1 table-striped1"> 
		<tbody>
			<?php foreach($_tournamentMatchFixtureParticipants as $_key => $_tournamentMatchFixtureParticipant ): ?>
			<tr>
				<td>
						<?php echo ++$_key ?> 
				</td>
				<td>
					<?php echo $_tournamentMatchFixtureParticipant->participantMemberFullName ?>
				</td>
				<td>
					<?php echo $_tournamentMatchFixtureParticipant->participantTeamName.' ( '.$_tournamentMatchFixtureParticipant->participantTeamAlias.' ) ' ?>
				</td> 
				<td >
					<?php  $_contryFlag = 'flags/'.$_tournamentMatchFixtureParticipant->teamCountry ?>
					<img style="max-width:45px;" src="<?php echo image_path($_contryFlag) ?>" alt="First slide">&nbsp;
					<?php echo SystemCore::processCountryValue($_tournamentMatchFixtureParticipant->teamCountry)  ?>
				</td> 
				<td align="center">
					<?php echo $_tournamentMatchFixtureParticipant->matchResultRank ?>
				</td>
				<td align="left">
					<?php echo date('H:i:s', strtotime($_tournamentMatchFixtureParticipant->matchResultTime))  ?>
				</td>
				<td align="left">
					<?php echo TournamentCore::processCompetitionStatusAlias($_tournamentMatchFixtureParticipant->qualificationStatus)  ?>
				</td>
				<td>
					<?php echo TournamentCore::processTournamentStatusValue($_tournamentMatchFixtureParticipant->competitionStatus)  ?>
				</td>
				<td>
					<?php echo $_tournamentMatchFixtureParticipant->id ? '':'' ?>
				</td>
			</tr> 
			<?php endforeach; ?>
		</tbody>
	</table>
</div>

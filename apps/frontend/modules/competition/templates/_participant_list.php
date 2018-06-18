<div class="table-responsive" id="ui-data-content">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>PARTICIPANT</th>
				<th>TEAM</th>
				<th>COUNTRY</th> 
				<th align="center">RANK</th>
				
				<th align="center">TIME</th>
				<th>STATUS</th>
				<th>...</th>
			</tr>
		</thead>
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
					<?php echo $_tournamentMatchFixtureParticipant->id ? '0':'' ?>
				</td>
				<td align="center">
					<?php echo $_tournamentMatchFixtureParticipant->id ? '0':'' ?>
				</td>
				<td>
					<?php echo $_tournamentMatchFixtureParticipant->id ? 'Pending':'Active' ?>
				</td>
				<td>
					<?php echo $_tournamentMatchFixtureParticipant->id ? '0':'' ?>
				</td>
			</tr> 
			<?php endforeach; ?>
		</tbody>
	</table>
</div>

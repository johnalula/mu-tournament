<div class="table-responsive" id="ui-data-content">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>PARTICIPANT</th>
				<th>TEAM</th>
				<th>COUNTRY</th> 
				<th>RANK</th>
				
				<th>TIME</th>
				<th>STATUS</th>
				<th>...</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($_tournamentMatchFixtureParticipants as $_key => $_tournamentMatchFixtureParticipant ): ?>
			<tr>
				<td>
						<?php echo $_tournamentMatchFixtureParticipant->id ?> 
				</td>
				<td>
					<?php echo $_tournamentMatchFixtureParticipant->participantMemberFullName ?>
				</td>
				<td>
						<?php echo $_tournamentMatchFixtureParticipant->participantTeamName ?>
					
				</td> 
				<td>
						<?php echo $_tournamentMatchFixtureParticipant->id ?>
				</td> 
				<td>
					<?php echo $_tournamentMatchFixtureParticipant->id ?>
				</td>
				
				<td>
					<?php echo $_tournamentMatchFixtureParticipant->id ?>
				</td>
				<td>
					<?php echo $_tournamentMatchFixtureParticipant->id ? 'Pending':'Active' ?>
				</td>
				<td>
						<?php echo $_tournamentMatchFixtureParticipant->id ?>
				</td>
			</tr> 
			<?php endforeach; ?>
		</tbody>
	</table>
</div>

<div class="table-responsive" id="">
	<table class="table table-striped">
		<thead>
			<tr> 
				<th>No</th> 
				<th>Participant Name</th>
				<th>Team</th> 
				<th>Part No</th> 
				<th>Role</th> 
				<th>...</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($_tournamentMatchFixtureParticipants as $_key => $_tournamentMatchFixtureParticipant ): ?>
			<tr> 
				<td>
					<?php echo  $_tournamentMatchFixtureParticipant->id ?>
				</td>
				<td>
					<?php echo  $_tournamentMatchFixtureParticipant->memberFullName ?>
				</td>
				<td>
					<?php echo $_tournamentMatchFixtureParticipant->partcipantTeamName ?>
				</td> 
				<td>
					<?php echo $_tournamentMatchFixtureParticipant->id ?>
				</td> 
				<td>
					<?php echo $_tournamentMatchFixtureParticipant->id ?>
				</td> 
			</tr> 
			<?php endforeach; ?>
		</tbody>
	</table>
</div>

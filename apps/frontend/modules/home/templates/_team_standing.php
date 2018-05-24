<div class="table-responsive" id="">
	<table class="table table-striped">
		<thead>
			<tr> 
				<th>Team</th>
				<th>Gold</th> 
				<th>Silver</th> 
				<th>Bronze</th> 
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($_participantTeams as $_key => $_participantTeam ): ?>
			<tr> 
				<td>
					<?php echo  $_participantTeam->teamName ?>
				</td>
				<td>
					<?php echo  $_participantTeam->id ?>
				</td>
				<td>
					<?php echo $_participantTeam->id ?>
				</td> 
				<td>
					<?php echo $_participantTeam->id ?>
				</td> 
				<td>
					<?php echo $_participantTeam->id ?>
				</td> 
			</tr> 
			<?php endforeach; ?>
		</tbody>
	</table>
</div>

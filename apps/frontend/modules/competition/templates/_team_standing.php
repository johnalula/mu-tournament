<div class="table-responsive" id="">
	<table class="table table-striped" border=0>
		<thead>
			<tr> 
				<th><?php echo __('Rank').' #' ?></th>
				<th><?php echo __('Participant Team') ?></th>
				<th><?php echo __('Country') ?></th>
				<th align="center">
					<span class="ui-header-status-icon">
						<img width=20 height=25 title="" src="<?php echo image_path('settings/gold_medal')  ?>"> 
					</span>
				</th> 
				<th align="center">
					<span class="ui-header-status-icon">
						<img  align="center" width=20 height=25 title="" src="<?php echo image_path('settings/silver_medal')  ?>"> 
					</span>
				</th> 
				<th align="center">
					<span class="ui-header-status-icon">
						<img width=20 height=25 title="" src="<?php echo image_path('settings/bronze_medal')  ?>"> 
					</span>
				</th> 
				<th align="center">Total</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($_participantTeams as $_key => $_participantTeam ): ?>
			<tr> 
				<td align="center" width=70>
					<?php echo ++$_key ?>
				</td>
				<td align="left">
					<?php echo $_participantTeam->participantTeamName ?>
				</td>
				<td align="left">
					<?php echo SystemCore::processCountryValue($_participantTeam->teamCountry) ?>
				</td>
				<td align="left" width=80>
					<?php echo  $_participantTeam->numberOfGoldMedal ?>
				</td>
				<td align="left" width=80>
					<?php echo  $_participantTeam->numberOfSilverMedal ?>
				</td> 
				<td align="left" width=80>
					<?php echo  $_participantTeam->numberOfBronzeMedal ?>
				</td> 
				<td align="left" width=80>
					<?php echo  $_participantTeam->totalMedalAward ?>
				</td> 
			</tr> 
			<?php endforeach; ?> 
		</tbody>
	</table>
</div>

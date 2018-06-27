<div class="table-responsive" id="ui-data-content">
	<table class="table table-striped">
		<thead>
			<tr> 
				<th><?php echo __('Rank').' #' ?></th>
				<th><?php echo __('Participant Team') ?></th>
				<th><?php echo __('Country') ?></th>
				<th>
					<span class="ui-header-status-icon">
						<img width=20 height=25 title="" src="<?php echo image_path('settings/gold_medal')  ?>"> 
					</span>
				</th> 
				<th>
					<span class="ui-header-status-icon">
						<img width=20 height=25 title="" src="<?php echo image_path('settings/silver_medal')  ?>"> 
					</span>
				</th> 
				<th>
					<span class="ui-header-status-icon">
						<img width=20 height=25 title="" src="<?php echo image_path('settings/bronze_medal')  ?>"> 
					</span>
				</th> 
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($_candidateParticipantTeams as $_key => $_participantTeam ): ?>
			<tr class="<?php echo fmod($_key, 2) ? 'ui-even' : 'ui-odd' ?>"> 
				<td align="center" width=70>
					<?php echo ++$_key ?>
				</td>
				<td align="left">
					<?php echo $_participantTeam->teamName ?>
				</td>
				<td align="left">
					<?php  $_contryFlag = 'flags/'.$_participantTeam->teamCountry ?>
					<img style="max-width:45px;" src="<?php echo image_path($_contryFlag) ?>" alt="First slide">&nbsp;
					<?php echo SystemCore::processCountryValue($_participantTeam->teamCountry)  ?>
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

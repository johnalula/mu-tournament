<div class="table-responsive" id="ui-data-content">
	<table class="table table-striped">
		<thead>
			<tr> 
				<th></th>
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
			<?php foreach($_participantTeams as $_key => $_participantTeam ): ?>
			<tr class="<?php echo fmod($_key, 2) ? 'ui-even' : 'ui-odd' ?>"> 
				<td align="left">
					<?php echo $_participantTeam->participantTeamName ?>
				</td>
				<td align="center">
					<?php echo  $_participantTeam->numberOfGoldMedal ?>
				</td>
				<td align="center">
					<?php echo  $_participantTeam->numberOfSilverMedal ?>
				</td> 
				<td align="center">
					<?php echo  $_participantTeam->numberOfBronzeMedal ?>
				</td> 
				<td align="center">
					<?php echo  $_participantTeam->totalMedalAward ?>
				</td> 
			</tr> 
			<?php endforeach; ?>
			<tr class="ui-footer-tr">
				<td colspan=5 align="right"><a href="<?php echo url_for('competition/team_standing') ?>" title="<?php echo __('Add New Tournament Team Group') ?>" id="saveTournamentMatchMedalAward" class=""><?php echo __('See More') ?></a></td>
			</tr>
		</tbody>
	</table>
</div>

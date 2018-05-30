<div class="table-responsive" id="ui-data-content">
	<table class="table table-striped">
		<thead>
			<tr> 
				<th align="center" width="60"> #</th>
				<th><?php echo __('Sport Games') ?></th>
				<th><?php echo __('Category') ?></th>
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
				<th><?php echo __('Total') ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($_teamParticipatingGames as $_key => $_teamParticipatingGame ): ?>
			<tr class="<?php echo fmod($_key, 2) ? 'ui-even' : 'ui-odd' ?>"> 
				<td align="center" width="60">
					<?php echo ++$_key  ?>
				</td>
				<td align="left">
					<?php echo $_teamParticipatingGame->sportGameName.' ( '.TournamentCore::processDistanceTypeValue($_teamParticipatingGame->id).' ) '.$_teamParticipatingGame->gameCategoryName  ?>
				</td>
				<td align="left" width="160">
					<?php echo  $_teamParticipatingGame->gameCategoryName ?>
				</td>
				<td align="center" width="60">
					<?php echo  $_teamParticipatingGame->id ? '0':'0' ?>
				</td>
				<td align="left" width="60">
					<?php echo  $_teamParticipatingGame->id ? '0':'0' ?>
				</td> 
				<td align="left" width="60">
						<?php echo  $_teamParticipatingGame->id ? '0':'0' ?>
				</td> 
				<td align="left" width="60">
						<?php echo  $_teamParticipatingGame->id ? '0':'0' ?>
				</td> 
			</tr> 
			<?php endforeach; ?> 
		</tbody>
	</table>
</div>

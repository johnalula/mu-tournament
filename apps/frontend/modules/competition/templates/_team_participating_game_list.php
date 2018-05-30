<div class="table-responsive" id="ui-data-content">
	<table class="table table-striped">
		<thead>
			<tr> 
				<th align="center" width="60"> #</th>
				<th><?php echo __('Sport Games') ?></th>
				<th><?php echo __('Category') ?></th>
				<th>
					<?php echo __('Type') ?>
				</th> 
				<th>
					<?php echo __('Total') ?>
				</th> 
				<th>
					<?php echo __('Total') ?>
				</th> 
				<th><?php echo __('Description') ?></th>
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
				<td align="left" width="40%">
						<?php echo  $_teamParticipatingGame->description  ?>
				</td> 
			</tr> 
			<?php endforeach; ?> 
		</tbody>
	</table>
</div>

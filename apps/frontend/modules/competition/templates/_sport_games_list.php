<div class="table-responsive" id="ui-data-content">
	<table class="table table-striped">
		<thead>
			<tr> 
				<th><?php echo ' #' ?></th>
				<th><?php echo __('Sport GAme') ?></th>
				<th><?php echo __('Type') ?></th>
				<th><?php echo __('Status') ?></th>
				<th><?php echo __('Description') ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($_candidateSportGames as $_key => $_candidateSportGame ): ?>
			<tr class="<?php echo fmod($_key, 2) ? 'ui-even' : 'ui-odd' ?>"> 
				<td align="center" width=70>
					<?php echo ++$_key ?>
				</td>
				<td align="left">
					<?php echo $_candidateSportGame->sportGameName ?>
				</td>
				<td align="left">
					<?php echo $_candidateSportGame->gameCategoryName ?>
				</td>
				<td align="left" width=80>
					<?php echo  $_candidateSportGame->sportGameDistanceTypeID ?>
				</td>
				<td align="left" width=420>
					<?php echo Wordlimit::Wordlimiter($_candidateSportGame->description, 6) ?>
				</td> 
			</tr> 
			<?php endforeach; ?> 
		</tbody>
	</table>
</div>

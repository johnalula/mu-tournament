<div class="table-responsive" id="ui-modal-data-table-list-candidate-sport-games"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th></th>
			<th class="" style="text-align:center!important;"><?php echo __('ID') ?></th>
			<th class="ui-th-left-text"><?php echo __('Name') ?></th>
			<th class="" style=""><?php echo __('Category') ?></th>
			<th class="ui-th-center-text"><?php echo __('Class') ?></th>
			<th class="ui-th-center-text"><?php echo __('Group') ?></th>
			<th class="ui-th-left-text"><?php echo __('Description') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Status') ?></th>
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
	   <?php foreach ( $_candidateSportGames as $_key => $_candidateSportGame ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="radio" id="selectCandidate-<?php echo ++$_key ?>" class="selectCandidate" name="selectCandidate" value="<?php echo  $_candidateSportGame->id.'$'.$_candidateSportGame->token_id.'$'.$_candidateSportGame->sportGameName.'$'.$_candidateSportGame->gameCategoryName.'$'.$_candidateSportGame->id ?>">
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo SystemCore::processDataID($_candidateSportGame->id) ?> 
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-1">
				<?php echo $_candidateSportGame->sportGameName ?>
			</td>
			<td class="ui-td-left-text ui-td-xsmall-2">
				<?php echo $_candidateSportGame->gameCategoryName ?>
			</td>
			<td class="ui-td-left-text ui-td-xsmall-01">
				<?php echo $_candidateSportGame->id ?>
			</td>
			<td class="ui-td-left-text ui-td-xsmall-01">
				<?php echo $_candidateSportGame->id ?>
			</td>
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_candidateSportGame->description ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_candidateSportGame->id ?>" class="ui-table-status-small-icon" id="<?php echo $_candidateSportGame->id ?>">
					<img title="<?php echo $_candidateSportGame->id ?> " src="<?php echo image_path($_candidateSportGame->id ? 'status/approved':'status/deny')  ?>"> 
					<img title="<?php echo $_candidateSportGame->id ?> " src="<?php echo image_path($_candidateSportGame->id ? 'status/inactive':'status/apply')  ?>"> 
				</span>
			</td> 
			<td class="ui-table-td-right-border ui-table-td-xfw">
			</td>
		 </tr> 
		 <?php endforeach; ?>
		 <tr> 
			<td class="ui-table-td-left-border ui-table-td-xfw"></td>
			<td class="ui-table-td-footer" colspan=7></td>
			<td class="ui-table-td-right-border ui-table-td-xfw"></td>
		 </tr>
	  </tbody>
	  <tfoot>
			<tr>
				<td class="ui-panel-table-list-footer" colspan=9>&nbsp;</td>
			</tr>
	  </tfoot>
	</table>
 </div>

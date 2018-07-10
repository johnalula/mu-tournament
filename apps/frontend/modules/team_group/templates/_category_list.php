<div class="table-responsive" id="ui-data-list-sport-game-group"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Game').' #' ?></th>  
			<th class="ui-th-left-text" title="<?php echo __('Sport Game Type Name') ?>"><?php echo  __('Sport Game') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Gender Category') ?>"><?php echo  __('Gender') ?></th> 
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Team Group') ?>"><?php echo  __('Group #') ?></th>    
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Description') ?>"><?php echo  __('Description') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Team Group Status') ?>"><?php echo  __('Status') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countTournaments) ?>">
	  <?php $_rowNumber = 1; foreach ( $_tournamentSportGameGroups as $_key => $_tournamentTeamGroup ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo SystemCore::processDataID($_rowNumber) ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-00"> 
				<?php echo $_tournamentTeamGroup->sportGameGroupCode  ?>
			</td>  
			<td class="ui-td-left-text ui-td-xsmall-2">
				<?php echo $_tournamentTeamGroup->sportGameName.' '.($_tournamentTeamGroup->sportGameDistanceTypeID ? (' - '.TournamentCore::processDistanceTypeValue($_tournamentTeamGroup->sportGameDistanceTypeID)):'').'  '.($_tournamentTeamGroup->sportGameTypeMode ? (TournamentCore::processAthleticsTypeValue($_tournamentTeamGroup->sportGameTypeMode)):'') ?>
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo TournamentCore::processGenderValue($_tournamentTeamGroup->groupGenderCategoryID) ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_tournamentTeamGroup->sportGameGroupName ?>
			</td>  
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo Wordlimit::Wordlimiter($_tournamentTeamGroup->description, 8) ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_tournamentTeamGroup->id ?>" class="ui-table-status-small-icon" id="<?php echo $_tournamentTeamGroup->id ?>">
					<img title="<?php echo $_tournamentTeamGroup->id ?>" src="<?php echo image_path($_tournamentTeamGroup->id ? 'status/approved':'status/disabled')  ?>"> 
					<img title="<?php echo $_tournamentTeamGroup->id ?>" src="<?php echo image_path($_tournamentTeamGroup->status == TournamentCore::$_ACTIVE  ? 'status/active':'status/pending')  ?>"> 
				</span>
			</td>  
			<td class="ui-table-td-right-border ui-table-td-xfw">
			</td>
		 </tr> 
		 <?php $_rowNumber++; ?>
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

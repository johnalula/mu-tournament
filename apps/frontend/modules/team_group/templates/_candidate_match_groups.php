<div class="table-responsive" id="ui-modal-data-table-list-candidate-sport-game-team-groups"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th></th>
			<th class="" style="text-align:center!important;"><?php echo __('ID') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Game').' #' ?></th>
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Team Group') ?>"><?php echo  __('Group') ?></th>   
			<th class="ui-th-left-text" title="<?php echo __('Sport Game Type Name') ?>"><?php echo  __('Sport Game') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Gender Category') ?>"><?php echo  __('Gender') ?></th>  
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Team Mode') ?>"><?php echo  __('Team Mode') ?></th>  
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Total Group Members') ?>"><?php echo  __('Member #') ?></th>  
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Description') ?>"><?php echo  __('Description') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Team Group Status') ?>"><?php echo  __('Status') ?></th> 
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
	   <?php foreach ( $_sportGameTeamGroups as $_key => $_sportGameTeamGroup ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="radio" id="selectCandidate-<?php echo ++$_key ?>" class="selectCandidate" name="selectCandidate" value="<?php echo  $_sportGameTeamGroup->id.'$'.$_sportGameTeamGroup->token_id.'$'.$_sportGameTeamGroup->sportGameName.'$'.$_sportGameTeamGroup->gameCategoryName.'$'.TournamentCore::processAthleticsTypeValue($_sportGameTeamGroup->sportGameTypeMode).'$'.$_sportGameTeamGroup->groupTypeName.'$'.TournamentCore::processGenderValue($_sportGameTeamGroup->groupGenderCategoryID).'$'.$_sportGameTeamGroup->groupGenderCategoryID.'$'.$_sportGameTeamGroup->contestantTeamMode.'$'.$_sportGameTeamGroup->groupTypeID ?>">
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo SystemCore::processDataID($_sportGameTeamGroup->id) ?> 
			</td> <td class="ui-td-left-text ui-td-xsmall-00"> 
				<?php echo $_sportGameTeamGroup->sportGameGroupCode  ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-00">
				<?php echo $_sportGameTeamGroup->groupTypeName ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-1">
				<?php echo $_sportGameTeamGroup->sportGameName.' - '.$_sportGameTeamGroup->gameCategoryName.'- '.($_sportGameTeamGroup->sportGameTypeMode ? (TournamentCore::processAthleticsTypeValue($_sportGameTeamGroup->sportGameTypeMode)):'') ?>
			</td>
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo TournamentCore::processGenderValue($_sportGameTeamGroup->groupGenderCategoryID) ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-00">
				<?php echo TournamentCore::processContestantTeamModeValue($_sportGameTeamGroup->contestantTeamMode)  ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo $_sportGameTeamGroup->totalGroupMemberTeams  ?>
			</td>  
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_sportGameTeamGroup->description ?> 
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_sportGameTeamGroup->id ?>" class="ui-table-status-small-icon" id="<?php echo $_sportGameTeamGroup->id ?>">
					<img title="<?php echo $_sportGameTeamGroup->id ?> " src="<?php echo image_path($_sportGameTeamGroup->id ? 'status/approved':'status/deny')  ?>"> 
					<img title="<?php echo $_sportGameTeamGroup->id ?> " src="<?php echo image_path($_sportGameTeamGroup->id ? 'status/inactive':'status/apply')  ?>"> 
				</span>
			</td> 
			<td class="ui-table-td-right-border ui-table-td-xfw">
			</td>
		 </tr> 
		 <?php endforeach; ?>
		 <tr> 
			<td class="ui-table-td-left-border ui-table-td-xfw"></td>
			<td class="ui-table-td-footer" colspan=9></td>
			<td class="ui-table-td-right-border ui-table-td-xfw"></td>
		 </tr>
	  </tbody>
	  <tfoot>
			<tr>
				<td class="ui-panel-table-list-footer" colspan=11>&nbsp;</td>
			</tr>
	  </tfoot>
	</table>
 </div>

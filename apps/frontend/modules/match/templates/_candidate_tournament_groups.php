<div class="table-responsive" id="ui-modal-data-table-list-candidate-tournament-groups"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th></th>
			<th class="" style="text-align:center!important;"><?php echo __('PRO') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('ID') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Game').' #' ?></th>
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Team Group') ?>"><?php echo  __('Group #') ?></th>    
			<th class="ui-th-left-text" title="<?php echo __('Sport Game Type Name') ?>"><?php echo  __('Sport Game') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Gender Category') ?>"><?php echo  __('Gender') ?></th> 
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Description') ?>"><?php echo  __('Description') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Team Group Status') ?>"><?php echo  __('Status') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
	   <?php foreach ( $_tournamentSportGameGroups as $_key => $_tournamentSportGameGroup ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="radio" id="selectCandidate-<?php echo ++$_key ?>" class="selectCandidate" name="selectCandidate" value="<?php echo  $_tournamentSportGameGroup->id.'$'.$_tournamentSportGameGroup->token_id.'$'.$_tournamentSportGameGroup->sportGameID.'$'.$_tournamentSportGameGroup->sportGameTokenID.'$'.$_tournamentSportGameGroup->sportGameGroupName.'$'.$_tournamentSportGameGroup->sportGameName.'$'.$_tournamentSportGameGroup->gameCategoryName.'$'.TournamentCore::processDistanceTypeValue($_tournamentSportGameGroup->sportGameDistanceTypeID).'$'.TournamentCore::processAthleticsTypeValue($_tournamentSportGameGroup->sportGameTypeMode).'$'.$_tournamentSportGameGroup->groupGenderCategoryID.'$'.TournamentCore::processGenderValue($_tournamentSportGameGroup->groupGenderCategoryID).'$'.$_tournamentSportGameGroup->contestantTeamMode .'$'.$_tournamentSportGameGroup->contestantMode .'$'.$_tournamentSportGameGroup->id .'$'.$_tournamentSportGameGroup->countCandidateParticipants() ?>">
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<span rel="<?php echo $_tournamentSportGameGroup->id ?>" class="ui-table-status-xsmall-icon" id="<?php echo $_tournamentSportGameGroup->id ?>">
					<img title="<?php echo $_tournamentSportGameGroup->id ?>" src="<?php echo image_path($_tournamentSportGameGroup->id ? 'status/pending':'status/disabled')  ?>"> 
				</span>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo SystemCore::processDataID($_tournamentSportGameGroup->id) ?> 
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-00"> 
				<?php echo $_tournamentSportGameGroup->sportGameGroupCode  ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_tournamentSportGameGroup->sportGameGroupName ?>
			</td>  
			<td class="ui-td-left-text ui-td-xsmall-2">
				<?php echo $_tournamentSportGameGroup->sportGameName.' '.($_tournamentSportGameGroup->sportGameDistanceTypeID ? (' - '.TournamentCore::processDistanceTypeValue($_tournamentSportGameGroup->sportGameDistanceTypeID)):'').'  '.($_tournamentSportGameGroup->sportGameTypeMode ? (TournamentCore::processAthleticsTypeValue($_tournamentSportGameGroup->sportGameTypeMode)):'') ?>
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo TournamentCore::processGenderValue($_tournamentSportGameGroup->groupGenderCategoryID) ?>
			</td>  
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo Wordlimit::Wordlimiter($_tournamentSportGameGroup->description, 8) ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_tournamentSportGameGroup->id ?>" class="ui-table-status-small-icon" id="<?php echo $_tournamentSportGameGroup->id ?>">
					<img title="<?php echo $_tournamentSportGameGroup->id ?>" src="<?php echo image_path($_tournamentSportGameGroup->activeFlag ? 'status/approved':'status/disabled')  ?>"> 
					<img title="<?php echo $_tournamentSportGameGroup->id ?>" src="<?php echo image_path($_tournamentSportGameGroup->status == TournamentCore::$_ACTIVE  ? 'status/active':'status/pending')  ?>"> 
				</span>
			</td> 
			<td class="ui-table-td-right-border ui-table-td-xfw">
			</td>
		 </tr> 
		 <?php endforeach; ?>
		 <tr> 
			<td class="ui-table-td-left-border ui-table-td-xfw"></td>
			<td class="ui-table-td-footer" colspan=8></td>
			<td class="ui-table-td-right-border ui-table-td-xfw"></td>
		 </tr>
	  </tbody>
	  <tfoot>
			<tr>
				<td class="ui-panel-table-list-footer" colspan=10>&nbsp;</td>
			</tr>
	  </tfoot>
	</table>
 </div>

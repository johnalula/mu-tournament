<div class="" id="ui-data-list-group-members"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="ui-th-left-text" title="<?php echo __('Participant Team Name') ?>"><?php echo  __('Team Name') ?></th>   
			<th class="ui-th-left-text" title="<?php echo __('Sport Game Type Name') ?>"><?php echo  __('Sport Game') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Gender Category') ?>"><?php echo  __('Gender') ?></th> 
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Team Group') ?>"><?php echo  __('Group').' #' ?></th>    
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Description') ?>"><?php echo  __('Description') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Team Group Status') ?>"><?php echo  __('Status') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-group-members" name="ui-total-data-list-group-members" value="<?php echo count($_countGroupParticipantTeams) ?>">
	  <?php foreach ( $_candidateParticipantMembers as $_key => $_groupParticipantTeam ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo SystemCore::processDataID($_groupParticipantTeam->id) ?>
			</td>  
			<td class="ui-td-left-text ui-td-xsmall-2">
				<?php echo $_groupParticipantTeam->participantTeamName.' ( '.$_groupParticipantTeam->participantTeamAlias.' ) - '.SystemCore::processCountryValue($_groupParticipantTeam->participantTeamCountry) ?>
			</td>
			<td class="ui-td-left-text ui-td-xsmall-1">
				<?php echo $_groupParticipantTeam->sportGameName.' '.($_groupParticipantTeam->sportGameTypeMode ? (TournamentCore::processAthleticsTypeValue($_groupParticipantTeam->sportGameTypeMode)):'') ?>
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo TournamentCore::processGenderValue($_groupParticipantTeam->groupGenderCategoryID) ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_groupParticipantTeam->sportGameGroupName ?>
			</td>   
			<td class="ui-td-left-text ui-td-xlarg" title="<?php echo $_groupParticipantTeam->description ?>">
				<?php echo Wordlimit::Wordlimiter($_groupParticipantTeam->description, 5 ) ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_groupParticipantTeam->participantTeamName ?>" class="ui-table-status-small-icon" id="<?php echo $_groupParticipantTeam->id ?>">
					<img title="<?php echo $_groupParticipantTeam->participantTeamName ?>" src="<?php echo image_path($_groupParticipantTeam->activeFlag ? 'status/approved':'status/disabled')  ?>"> 
					<img title="<?php echo $_groupParticipantTeam->participantTeamName ?>" src="<?php echo image_path($_groupParticipantTeam->status == TournamentCore::$_ACTIVE  ? 'status/active':'status/pending')  ?>"> 
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

<div class="table-responsive" id="ui-modal-data-table-list-candidate-group-member-teams"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th></th>
			<th class="" style="text-align:center!important;"><?php echo __('ID') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Team #') ?></th>
			<th class="" style=""><?php echo __('Team Name') ?></th>
			<th class="ui-th-left-text"><?php echo __('Alias') ?></th>
			<th class="" style=""><?php echo __('Country') ?></th>
			<th class="ui-th-center-text"><?php echo __('Contestant #') ?></th>
			<th class="ui-th-left-text"><?php echo __('Description') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Status') ?></th>
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
	   <?php $_rowNumber = 1; foreach ( $_candidateMemberTeams as $_key => $_candidateTeam ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="radio" id="selectCandidate-<?php echo ++$_key ?>" class="selectCandidate" name="selectCandidate" value="<?php echo  $_candidateTeam->id.'$'.$_candidateTeam->token_id.'$'.$_candidateTeam->teamID.'$'.$_candidateTeam->teamTokenID.'$'.$_candidateTeam->participantTeamName.'$'.$_candidateTeam->participantTeamAlias.'$'.SystemCore::processCountryValue($_candidateTeam->participantTeamCountry) ?>">
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo SystemCore::processDataID($_rowNumber) ?> 
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo $_candidateTeam->participantTeamNumber ?> 
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-01"> 
				<?php echo $_candidateTeam->participantTeamName  ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-02"> 
				<?php echo $_candidateTeam->participantTeamAlias ?> 
			</td>  
			<td class="ui-td-left-text ui-td-xsmall-00">
				<?php echo SystemCore::processCountryValue($_candidateTeam->participantTeamCountry) ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo TournamentCore::processEventTypeValue($_candidateTeam->id) ?>
			</td>  
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo Wordlimit::Wordlimiter($_candidateTeam->description, 5 ) ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_candidateTeam->id ?>" class="ui-table-status-small-icon" id="<?php echo $_candidateTeam->id ?>">
					<img title="<?php echo $_candidateTeam->id ?> " src="<?php echo image_path($_candidateTeam->id ? 'status/approved':'status/deny')  ?>"> 
					<img title="<?php echo $_candidateTeam->id ?> " src="<?php echo image_path($_candidateTeam->activeFlag ? 'status/active':'status/disabled')  ?>"> 
				</span>
			</td> 
			<td class="ui-table-td-right-border ui-table-td-xfw">
			</td>
		 </tr> 
		 <?php $_rowNumber++; ?>
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

<div class="table-responsive" id="ui-data-list-sport-game-group"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" disabled />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Game').' #' ?></th>  
			<th class="ui-th-left-text" title="<?php echo __('Sport Game Type Name') ?>"><?php echo  __('Participant Team') ?></th>   
			<th class="ui-th-left-text" title="<?php echo __('Sport Game Type Name') ?>"><?php echo  __('Sport Game') ?></th>    
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Description') ?>"><?php echo  __('Description') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Team Group Status') ?>"><?php echo  __('Status') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countTournaments) ?>">
	  <?php $_rowNumber = 1; foreach ( $_caniddateParticipantTeams as $_key => $_caniddateParticipantTeam ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" disabled />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo $_rowNumber ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-00"> 
				<?php echo $_caniddateParticipantTeam->participantTeamNumber  ?>
			</td>  
			<td class="ui-td-left-text ui-td-xsmall-2">
				<?php echo $_caniddateParticipantTeam->participantTeamName.' ( '.$_caniddateParticipantTeam->participantTeamAlias.' ) '.SystemCore::processCountryAliasValue($_caniddateParticipantTeam->participantTeamCountry) ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_caniddateParticipantTeam->sportGameName ?>
			</td>   
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo Wordlimit::Wordlimiter($_caniddateParticipantTeam->description, 7) ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_caniddateParticipantTeam->id ?>" class="ui-table-status-small-icon" id="<?php echo $_caniddateParticipantTeam->id ?>">
					<img title="<?php echo $_caniddateParticipantTeam->id ?>" src="<?php echo image_path($_caniddateParticipantTeam->activeFlag ? 'status/approved':'status/disabled')  ?>"> 
					<img title="<?php echo $_caniddateParticipantTeam->id ?>" src="<?php echo image_path($_caniddateParticipantTeam->status == TournamentCore::$_ACTIVE  ? 'status/active':'status/pending')  ?>"> 
				</span>
			</td>  
			<td class="ui-table-td-right-border ui-table-td-xfw">
			</td>
		 </tr> 
		 <?php $_rowNumber++; ?>
		 <?php endforeach; ?>
		 <tr> 
			<td class="ui-table-td-left-border ui-table-td-xfw"></td>
			<td class="ui-table-td-footer" colspan=6></td>
			<td class="ui-table-td-right-border ui-table-td-xfw"></td>
		 </tr>
	  </tbody>
	  <tfoot>
			<tr>
				<td class="ui-panel-table-list-footer" colspan=8>&nbsp;</td>
			</tr>
	  </tfoot>
	</table>
 </div>

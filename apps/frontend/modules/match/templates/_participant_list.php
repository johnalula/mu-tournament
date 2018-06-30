<div class="table-responsive" id="ui-data-list-product"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Row #') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Participant Name') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Team Name') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Sport Game') ?></th>
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Group') ?>"><?php echo  __('Group') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Match Time') ?>"><?php echo  __('Description') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Status Status') ?>"><?php echo  __('Status') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countTournaments) ?>">
	  <?php foreach ( $_matchParticipantTeamMembers as $_key => $_matchParticipantTeamMember ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo SystemCore::processDataID(++$_key) ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo $_matchParticipantTeamMember->tournament_match_fixture_id ?> 
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-02"> 
				<?php echo $_matchParticipantTeamMember->participantMemberFullName  ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-02"> 
				<?php echo $_matchParticipantTeamMember->participantTeamName.' ( '.$_matchParticipantTeamMember->participantTeamAlias.' ) - '.(SystemCore::processCountryValue($_matchParticipantTeamMember->teamCountry))  ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo $_matchParticipantTeamMember->sportGameName.' ( '.TournamentCore::processGenderValue($_matchParticipantTeamMember->teamGroupGenderCategoryID).' )'?> 
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_matchParticipantTeamMember->sportGameGroupName ?>
			</td>  
			<td class="ui-td-left-text ui-td-xlarg" title="<?php echo $_matchParticipantTeamMember->description ?>">
				<?php echo Wordlimit::Wordlimiter($_matchParticipantTeamMember->description, 3) ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_matchParticipantTeamMember->id ?>" class="ui-table-status-small-icon" id="<?php echo $_matchParticipantTeamMember->id ?>">
					<img title="<?php echo $_matchParticipantTeamMember->sportGameName ?>" src="<?php echo image_path($_matchParticipantTeamMember->id ? 'status/approved':'status/disabled')  ?>"> 
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

<div class="" id="ui-data-list-group-members"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Group Code').' #' ?></th>  
			<th class="" style="text-align:left!important;"><?php echo __('Team').' #' ?></th>  
			<th class="ui-th-left-text" title="<?php echo __('Participant Team Name') ?>"><?php echo  __('Team Name') ?></th>   
			<th class="ui-th-left-text" title="<?php echo __('Sport Game Type Name') ?>"><?php echo  __('Sport Game') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Gender Category') ?>"><?php echo  __('Gender') ?></th> 
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Team Group') ?>"><?php echo  __('Group').' #' ?></th>    
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Description') ?>"><?php echo  __('Description') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Team Group Status') ?>"><?php echo  __('Status') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;"><?php echo  __('...') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-group-members" name="ui-total-data-list-group-members" value="<?php echo count($_countGroupParticipantTeams) ?>">
	  <?php foreach ( $_groupParticipantTeams as $_key => $_groupParticipantTeam ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo SystemCore::processDataID($_groupParticipantTeam->id) ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-00"> 
				<?php echo $_groupParticipantTeam->sportGameGroupCode  ?>
			</td>  
			<td class="ui-td-left-text ui-td-xsmall-00"> 
				<?php echo $_groupParticipantTeam->participantTeamNumber  ?>
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
			<td class="ui-table-action ui-table-list-action-box-2">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">   
						<li>
							<a href="#"  data-toggle="modal" data-target="#viewCandidateGroupParticipantTeamModal" >	
								<img title="<?php echo __('View Team Group').' ( '.' Group '.' #:'.$_groupParticipantTeam->sportGameGroupName ?> )" src="<?php echo image_path('icons/view') ?>">			
							</a>
						</li>  
						<li>   
							<a href="#" class="ui-action-button" id="ui-delete-cash_request-<?php echo $_groupParticipantTeam->id ?>" onclick="Javascript:deleteGroupMemberParticipant(<?php echo $_groupParticipantTeam->id ?>);" rel="<?php echo $_groupParticipantTeam->token_id ?>">	
								<img title="<?php echo __('Delete Category').' ( '.' Task '.' #:'.$_groupParticipantTeam->id ?> )" src="<?php echo image_path('icons/del')  ?>" > 
							</a>  
						</li> 
					</ul>
				</div>
			</td>
			<td class="ui-table-td-right-border ui-table-td-xfw">
			</td>
		 </tr> 
		 <?php endforeach; ?>
		 <tr> 
			<td class="ui-table-td-left-border ui-table-td-xfw"></td>
			<td class="ui-table-td-footer" colspan=10></td>
			<td class="ui-table-td-right-border ui-table-td-xfw"></td>
		 </tr>
	  </tbody>
	  <tfoot>
			<tr>
				<td class="ui-panel-table-list-footer" colspan=12>&nbsp;</td>
			</tr>
	  </tfoot>
	</table>
 </div>

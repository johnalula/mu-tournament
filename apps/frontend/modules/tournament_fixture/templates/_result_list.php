<div class="table-responsive" id="ui-data-list-product"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" disabled />
			</th>
			<th class="" style="text-align:left!important;"><?php echo __('Row #') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Participant Name') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Team Name') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Country') ?></th>
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Rank') ?>"><?php echo  __('Rank') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Time') ?>"><?php echo  __('Time') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Status Status') ?>"><?php echo  __('Status') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;"><?php echo  __('...') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countTournaments) ?>">
	  <?php foreach ( $_matchFixtureGroupParticipants as $_key => $_matchFixtureGroupParticipant ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" disabled />
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo $_matchFixtureGroupParticipant->id ?> 
			</td> 
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo Wordlimit::Wordlimiter($_matchFixtureGroupParticipant->participantMemberFullName, 5) ?>
			</td>  
			<td class="ui-td-left-text ui-td-xsmall-1"> 
				<?php echo $_matchFixtureGroupParticipant->participantTeamName.' ( '.$_matchFixtureGroupParticipant->participantTeamAlias.' ) '  ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-12"> 
				<?php echo SystemCore::processCountryValue($_matchFixtureGroupParticipant->teamCountry)?> 
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-1">
				<?php echo $_matchFixtureGroupParticipant->id ?>
			</td>  
			<td class="ui-td-left-text ui-td-xsmall-1 ui-table-td-form"> 
				<input type="text" class="ui-table-list-form-input-md  ui-text-center-align participantTeamMatchFixtureResult <?php echo $_task->id ? 'ui-table-list-form-disabled-input':'' ?>" id="participantTeamMatchFixtureResult_<?php echo $_matchFixtureGroupParticipant->id ?>" name="<?php echo $_matchFixtureGroupParticipant->id ?>" value="<?php echo $_matchFixtureGroupParticipant->matchResultTime ? $_matchFixtureGroupParticipant->matchResultTime:'0:00' ?>" rel="<?php echo $_matchFixtureGroupParticipant->id ?>" placeholder="" title="<?php echo $_matchFixtureGroupParticipant->participantTeamName ?>" <?php echo $_task->id ? 'disabled':'' ?>  >
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_matchFixtureGroupParticipant->id ?>" class="ui-table-status-small-icon" id="<?php echo $_matchFixtureGroupParticipant->id ?>">
					<?php echo $_matchFixtureGroupParticipant->qualifyingStatus ? $_matchFixtureGroupParticipant->qualifyingStatus:'P' ?> 
				</span>
			</td> 
			<td class="ui-table-action ui-table-list-action-box-2">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">   
						<li>
							<button class="ui-table-grid-list-button updateCandidateSerializedItem" id="updateTournamentMatchMedalAward-<?php echo $_matchFixtureGroupParticipant->id ?>" rel="<?php echo $_matchFixtureGroupParticipant->token_id ?>"   onclick='Javascript:updateTournamentMatchMedalAwardFunction(<?php echo $_matchFixtureGroupParticipant->id ?>)'>	 
								<img title="<?php echo __('View Participant Team Medal Award').' ( '.' Team '.' #:'.$_matchFixtureGroupParticipant->teamNumber ?> )" src="<?php echo image_path('icons/update') ?>">		
							</button>
						</li> 
						<li>   
							<a href="#" class="ui-action-button" id="ui-delete-cash_request-<?php echo $_matchFixtureGroupParticipant->id ?>" onclick="Javascript:deleteProduct(<?php echo $_matchFixtureGroupParticipant->id ?>);" rel="<?php echo $_matchFixtureGroupParticipant->token_id ?>">	
							<img title="<?php echo __('Delete Category').' ( '.' Task '.' #:'.$_matchFixtureGroupParticipant->id ?> )" src="<?php echo image_path('icons/del')  ?>" > 
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

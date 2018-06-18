<div class="table-responsive" id="ui-data-list-product"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" disabled />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Rank #') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Pos').' #' ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('BIB').' #' ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Country') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Team') ?></th>
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Participant Name') ?>"><?php echo  __('Participant Name') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Time') ?>"><?php echo  __('Result Time') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Status') ?>"><?php echo  __('Status') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Medal Award') ?>"><?php echo  __('Award') ?></th>    
			<th class="ui-th-left-text" style="text-align:center!important;">&nbsp;</th>  
			<th class="ui-th-left-text" style="text-align:center!important;"><?php echo  __('...') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
	  <?php foreach ( $_candidateMatchFixtureParticipants as $_key => $_candidateMatchFixtureParticipant ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" disabled />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo SystemCore::processDataID($_candidateMatchFixtureParticipant->id) ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0 ui-table-td-form">
				<input type="text" class="ui-table-list-form-input-md  ui-text-center-align matchFixtureGroupParticipantRankNumber <?php echo $_task->id ? 'ui-table-list-form-disabled-input':'' ?>" id="matchFixtureGroupParticipantRankNumber_<?php echo $_candidateMatchFixtureParticipant->id ?>" name="<?php echo $_candidateMatchFixtureParticipant->id ?>" value="" rel="<?php echo $_candidateMatchFixtureParticipant->id ?>" placeholder="0" title="<?php echo $_candidateMatchFixtureParticipant->id ?>" <?php echo $_task->id ? 'disabled':'' ?>  >
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0 ui-table-td-form">
				<input type="text" class="ui-table-list-form-input-md  ui-text-center-align matchFixtureGroupParticipantPositionNumber <?php echo $_task->id ? 'ui-table-list-form-disabled-input':'' ?>" id="matchFixtureGroupParticipantPositionNumber_<?php echo $_candidateMatchFixtureParticipant->id ?>" name="<?php echo $_candidateMatchFixtureParticipant->id ?>" value="" rel="<?php echo $_candidateMatchFixtureParticipant->id ?>" placeholder="0" title="<?php echo $_candidateMatchFixtureParticipant->id ?>" <?php echo $_task->id ? 'disabled':'' ?>  >
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0 ui-table-td-form">
				<input type="text" class="ui-table-list-form-input-md  ui-text-center-align matchFixtureGroupParticipantNumber <?php echo $_task->id ? 'ui-table-list-form-disabled-input':'' ?>" id="matchFixtureGroupParticipantNumber_<?php echo $_candidateMatchFixtureParticipant->id ?>" name="<?php echo $_candidateMatchFixtureParticipant->id ?>" value="" rel="<?php echo $_candidateMatchFixtureParticipant->id ?>" placeholder="0" title="<?php echo $_candidateMatchFixtureParticipant->id ?>" <?php echo $_task->id ? 'disabled':'' ?>  >
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0" title="<?php echo SystemCore::processCountryValue($_candidateMatchFixtureParticipant->teamCountry) ?>">
				<?php  $_contryFlag = 'flags/'.$_candidateMatchFixtureParticipant->teamCountry ?>
				<img style="max-width:45px;" src="<?php echo image_path($_contryFlag) ?>" alt="First slide">&nbsp;
				<?php echo SystemCore::processCountryAliasValue($_candidateMatchFixtureParticipant->teamCountry) ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0" title="<?php echo $_candidateMatchFixtureParticipant->participantTeamName ?>">
				<?php echo $_candidateMatchFixtureParticipant->participantTeamAlias ?>
			</td> 
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_candidateMatchFixtureParticipant->participantMemberFullName  ?>
			</td>  
			<td class="ui-td-left-text ui-td-xsmall-01 ui-table-td-form"> 
				<input type="text" class="ui-table-list-form-input-md  ui-text-center-align matchFixtureGroupParticipantTimeResult <?php echo $_task->id ? 'ui-table-list-form-disabled-input':'' ?>" id="matchFixtureGroupParticipantTimeResult_<?php echo $_candidateMatchFixtureParticipant->id ?>" name="<?php echo $_candidateMatchFixtureParticipant->id ?>" value="" rel="<?php echo $_candidateMatchFixtureParticipant->id ?>" placeholder="0:00.0" title="<?php echo $_candidateMatchFixtureParticipant->id ?>" <?php echo $_task->id ? 'disabled':'' ?>  >
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-01 ui-table-td-form"> 
				<select id="matchFixtureGroupParticipantResultStatus_<?php echo $_candidateMatchFixtureParticipant->id ?>" name="tournament_match_fixture[event_type]" class="form-control matchFixtureGroupParticipantResultStatus" title="<?php echo __('Participant Result Status') ?>" >
					<option value=""  ><?php echo 'Select Status ...' ?></option>
					<?php foreach(TournamentCore::processCompetitionStatuses() as $_key => $_resultStatus): ?>								 
						<option value="<?php echo $_key ?>"  <?php echo $_key == TournamentCore::$_FIN ? 'selected':'' ?>  > 
							<?php echo $_resultStatus ?>
						</option>								 
					<?php endforeach; ?>
				</select>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-10 ui-table-td-form"> 
				<select id="matchFixtureGroupParticipantMedalAward_<?php echo $_candidateMatchFixtureParticipant->id ?>" name="tournament_match_fixture[event_type]" class="form-control matchFixtureGroupParticipantMedalAward" title="<?php echo __('Participant Result Status') ?>" <?php echo ($_tournamentMatch->contestantTeamMode == TournamentCore::$_PAIR_TEAM) ? 'disabled':'' ?>>
					<option value=""  ><?php echo 'Select Medal Award ...' ?></option>
					<?php foreach(TournamentCore::processMatchMedalAwardModes() as $_key => $_medalAward): ?>								 
						<option value="<?php echo $_key ?>"  > 
							<?php echo $_medalAward ?>
						</option>								 
					<?php endforeach; ?>
				</select>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				&nbsp;
			</td> 
			<td class="ui-table-action ui-table-list-action-box-3">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">     
						<li>
							<button class="ui-table-grid-list-button updateCandidateSerializedItem" id="updateTournamentMatchParticipantMedalAward-<?php echo $_candidateMatchFixtureParticipant->id ?>" rel="<?php echo $_candidateMatchFixtureParticipant->token_id ?>" onclick='Javascript:updateTournamentMatchFixtureParticipantResultFunction(<?php echo $_candidateMatchFixtureParticipant->id ?>)'>	 
								<img title="<?php echo __('View Participant Team Medal Award').' ( '.' Team '.' #:'.$_candidateMatchFixtureParticipant->teamNumber ?> )" src="<?php echo image_path('icons/update') ?>">		
							</button>
						</li> 
						<li>
							<a href="<?php echo url_for('team/view?product_id='.$_candidateMatchFixtureParticipant->id.'&token_id='.$_candidateMatchFixtureParticipant->token_id) ?>" >	
								<img title="<?php echo __('View Team').' ( '.' Task '.' #:'.$_candidateMatchFixtureParticipant->id ?> )" src="<?php echo image_path('icons/del') ?>">			
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
			<td class="ui-table-td-footer" colspan=12></td>
			<td class="ui-table-td-right-border ui-table-td-xfw"></td>
		 </tr>
	  </tbody>
	  <tfoot>
			<tr>
				<td class="ui-panel-table-list-footer" colspan=14>&nbsp;</td>
			</tr>
	  </tfoot>
	</table>
 </div>

<div class="table-responsive" id="ui-modal-data-table-list-candidate-match-fixtures"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>&nbsp;</th>
			<th class="" style="text-align:center!important;"><?php echo __('ID') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Match #') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Tournament Match Game') ?></th>
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Event Type') ?>"><?php echo  __('Event') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Group') ?>"><?php echo  __('Group') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Match Round') ?>"><?php echo  __('Round') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Match Date') ?>"><?php echo  __('Date') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Match Time') ?>"><?php echo  __('Time') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Status Status') ?>"><?php echo  __('Status') ?></th>  
			<th>&nbsp;</th>
		 </tr>
	  </thead>
	  <tbody>
	    <?php foreach ( $_candidateMatchFixtures as $_key => $_candidateMatchFixture ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="radio" id="selectCandidate-<?php echo ++$_key ?>" class="selectCandidate" name="selectCandidate" value="<?php echo  $_candidateMatchFixture->id.'$'.$_candidateMatchFixture->token_id.'$'.$_candidateMatchFixture->sportGameGroupID.'$'.$_candidateMatchFixture->sportGameGroupTokenID.'$'.$_candidateMatchFixture->sportGameName.'$'.$_candidateMatchFixture->gameCategoryName.'$'.TournamentCore::processAthleticsTypeValue($_candidateMatchFixture->sportGameTypeMode).'$'.$_candidateMatchFixture->sportGameGroupName.'$'.TournamentCore::processGenderValue($_candidateMatchFixture->teamGroupGenderCategoryID).'$'.$_candidateMatchFixture->teamGroupGenderCategoryID.'$'.$_candidateMatchFixture->contestantMode.'$'.$_candidateMatchFixture->fixtureSportGameID.'$'.$_candidateMatchFixture->sportGameTokenID.'$'.$_candidateMatchFixture->tournamentMatchVenue.'$'.$_candidateMatchFixture->matchDate.'$'.$_candidateMatchFixture->matchTime.'$'.$_candidateMatchFixture->matchFixtureID.'$'.$_candidateMatchFixture->matchFixtureTokenID ?>">
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo SystemCore::processDataID($_candidateMatchFixture->id) ?> 
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo $_candidateMatchFixture->hasActiveGroupParticipantTeam ? 'true':'fasle' ?> 
			</td> 
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_candidateMatchFixture->sportGameName.' - '.$_candidateMatchFixture->gameCategoryName.'- '.($_candidateMatchFixture->sportGameTypeMode ? (TournamentCore::processAthleticsTypeValue($_candidateMatchFixture->sportGameTypeMode)):$_candidateMatchFixture->sportGameName).' - '.$_candidateMatchFixture->sportGameGroupName.' ( '.TournamentCore::processGenderValue($_candidateMatchFixture->teamGroupGenderCategoryID).' )' ?>
			</td>
			<td class="ui-td-center-text ui-td-xsmall-01">
				<?php echo TournamentCore::processEventTypeValue($_candidateMatchFixture->matchEventType) ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-01">
				<?php echo TournamentCore::processGroupNumberValue($_candidateMatchFixture->groupID) ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-01">
				<?php echo $_candidateMatchFixture->roundTypeName ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-01">
				<?php echo $_candidateMatchFixture->matchDate ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-01">
				<?php echo $_candidateMatchFixture->matchTime ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_candidateMatchFixture->id ?>" class="ui-table-status-small-icon" id="<?php echo $_candidateMatchFixture->id ?>">
					<img title="<?php echo $_candidateMatchFixture->sportGameName ?>" src="<?php echo image_path($_candidateMatchFixture->id ? 'status/approved':'status/disabled')  ?>"> 
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

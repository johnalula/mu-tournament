<div class="table-responsive" id="ui-data-list-product"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Tournament Match Game') ?></th>
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Event Type') ?>"><?php echo ('# of '). __('Teams') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Match Round') ?>"><?php echo  __('Heat') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Match Date') ?>"><?php echo  __('Qualifying') ?></th>    
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Match Date') ?>"><?php echo  __('Date') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Match Time') ?>"><?php echo  __('Time') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Match Time') ?>"><?php echo  __('Venue') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Status Status') ?>"><?php echo  __('Status') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;"><?php echo  __('...') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countTournaments) ?>">
	  <?php $_rowNumber = 1; foreach ( $_candidateTournamentMatchFixtureGroups as $_key => $_matchFixture ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo SystemCore::processDataID($_rowNumber) ?> 
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-02"> 
				<?php echo $_matchFixture->sportGameName.' - '.$_matchFixture->gameCategoryName.'- '.($_matchFixture->sportGameTypeMode ? (TournamentCore::processAthleticsTypeValue($_matchFixture->sportGameTypeMode)):$_matchFixture->sportGameName).' - ( '.TournamentCore::processGenderValue($_matchFixture->teamGroupGenderCategoryID).' )' ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_matchFixture->countTournamentMatchFixtureParticipantTeams ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0" title="<?php echo TournamentCore::processRoundModeValue($_matchFixture->matchFixtureGroupRoundMode) ?>">
				<?php echo $_matchFixture->matchFixtureHeatName ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo TournamentCore::processMatchCompetitionRoundModeValue($_matchFixture->qualifyingStatus) ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo  date('D M, d-Y', strtotime($_matchFixture->matchDate)) ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0" title="<?php echo TournamentCore::processTournamentSessionModeValue($_matchFixture->matchFixtureGroupSessionMode) ?>">
				<?php echo $_matchFixture->matchTime ?>
			</td>  
			<td class="ui-td-left-text ui-td-xsmall-2">
				<?php echo $_matchFixture->tournamentMatchFixtureVenue ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_matchFixture->id ?>" class="ui-table-status-small-icon" id="<?php echo $_matchFixture->id ?>">
					<img title="<?php echo $_matchFixture->sportGameName ?>" src="<?php echo image_path($_matchFixture->id ? 'status/approved':'status/disabled')  ?>"> 
				</span>
			</td> 
			<td class="ui-table-action ui-table-list-action-box-2">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">   
						<li>
							<a href="<?php echo url_for('team/view?product_id='.$_matchFixture->id.'&token_id='.$_matchFixture->token_id) ?>" >	
								<img title="<?php echo __('View Team').' ( '.' Task '.' #:'.$_matchFixture->id ?> )" src="<?php echo image_path('icons/view') ?>">			
							</a>
						</li>  
						<li>   
							<a href="#" class="ui-action-button" id="ui-delete-cash_request-<?php echo $_matchFixture->id ?>" onclick="Javascript:deleteProduct(<?php echo $_matchFixture->id ?>);" rel="<?php echo $_matchFixture->token_id ?>">	
							<img title="<?php echo __('Delete Category').' ( '.' Task '.' #:'.$_matchFixture->id ?> )" src="<?php echo image_path('icons/del')  ?>" > 
							</a>  
						</li> 
					</ul>
				</div>
			</td>
			<td class="ui-table-td-right-border ui-table-td-xfw">
			</td>
		 </tr> 
		 <?php $_rowNumber++; ?>
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

<div class="table-responsive" id="ui-data-list-product"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" disabled />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Date') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Time') ?></th>
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Event Type') ?>"><?php echo  __('Sex') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Group') ?>"><?php echo  __('Event') ?></th>     
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Match Time') ?>"><?php echo  __('  ... ') ?></th>    
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Match Round') ?>"><?php echo  __('Heat') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Match Time') ?>"><?php echo  __('Round') ?></th> 
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Status Status') ?>"><?php echo  __('Status') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;"><?php echo  __('...') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countTournaments) ?>">
	  <?php $_rowNumber = 1; foreach ( $_candidateMatchFixtureGroups as $_key => $_matchFixture ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" disabled />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<a href="<?php echo url_for('category/view?category_id='.$_matchFixture->id.'&token_id='.$_matchFixture->token_id) ?>" >	
					<?php echo SystemCore::processDataID($_rowNumber) ?>
				</a>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_matchFixture->matchDate ? date('D M, d-Y', strtotime($_matchFixture->matchDate)):date('D M, d-Y', strtotime($_matchFixture->fixtureGroupMatchDate)) ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_matchFixture->matchTime ? $_matchFixture->matchTime:$_matchFixture->fixtureGroupMatchTime ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo TournamentCore::processGenderAlias($_matchFixture->teamGroupGenderCategoryID) ?>
			</td>  
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_matchFixture->sportGameName?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_matchFixture->matchContestantMode == TournamentCore::$_PAIR_TEAM ? $_matchFixture->selectCandidateParticipantTeams():'' ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo  $_matchFixture->matchFixtureHeatName ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo TournamentCore::processMatchCompetitionRoundModeValue($_matchFixture->qualifyingStatus) ?>
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
							<a href="<?php echo url_for('tournament_fixture/result?match_fixture_id='.$_matchFixture->id.'&token_id='.$_matchFixture->token_id) ?>" >	
								<img title="<?php echo __('Fixture Restult ').' ( '.' Fixture '.' #:'.$_matchFixture->id ?> )" src="<?php echo image_path('icons/edit') ?>">			
							</a>
						</li>  
						<li>   
							<a href="#" class="ui-action-button" id="ui-delete-cash_request-<?php echo $_matchFixture->id ?>" onclick="Javascript:deleteProduct(<?php echo $_matchFixture->id ?>);" rel="<?php echo $_matchFixture->token_id ?>">	
							<img title="<?php echo __('Delete Category').' ( '.' Task '.' #:'.$_matchFixture->id ?> )" src="<?php echo image_path('icons/view')  ?>" > 
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

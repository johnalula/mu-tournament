<div class="table-responsive" id="ui-data-list-product"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Sport Game') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Home Team').' vs '.(__('Away Team')) ?></th>
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Match Date') ?>"><?php echo  __('Date') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Match Time') ?>"><?php echo  __('Time') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Description') ?>"><?php echo  __('Match Venue') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Status Status') ?>"><?php echo  __('Status') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;"><?php echo  __('...') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countTournaments) ?>">
	  <?php foreach ( $_tournamentMatchFixtureGroups as $_key => $_candidateMatchFixtureGroup ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<a href="<?php echo url_for('category/view?category_id='.$_candidateMatchFixtureGroup->id.'&token_id='.$_candidateMatchFixtureGroup->token_id) ?>" >	
					<?php echo SystemCore::processDataID($_candidateMatchFixtureGroup->id) ?>
				</a>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-12"> 
				<?php echo $_candidateMatchFixtureGroup->sportGameName.' - '.$_candidateMatchFixtureGroup->sportGameGroupName.' ( '.TournamentCore::processGenderValue($_candidateMatchFixtureGroup->teamGroupGenderCategoryID).' )' ?>
			</td> 
			<td class="ui-td-center-text ui-td-xlarg">
				<?php echo $_candidateMatchFixtureGroup->selectCandidateParticipantTeams()  ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-01">
				<?php echo date('M, d Y', strtotime($_candidateMatchFixtureGroup->fixtureGroupMatchDate)) ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_candidateMatchFixtureGroup->fixtureGroupMatchTime ?>
			</td>  	
			<td class="ui-td-left-text ui-td-xsmall-12"> 
				<?php echo Wordlimit::Wordlimiter($_candidateMatchFixtureGroup->tournamentMatchFixtureGroupVenue, 7) ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_candidateMatchFixtureGroup->id ?>" class="ui-table-status-small-icon" id="<?php echo $_candidateMatchFixtureGroup->id ?>">
					<img title="<?php echo $_candidateMatchFixtureGroup->sportGameName ?>" src="<?php echo image_path($_candidateMatchFixtureGroup->id ? 'status/approved':'status/disabled')  ?>"> 
				</span>
			</td> 
			<td class="ui-table-action ui-table-list-action-box-2">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">   
						<li>
							<a href="<?php echo url_for('team/view?product_id='.$_candidateMatchFixtureGroup->id.'&token_id='.$_candidateMatchFixtureGroup->token_id) ?>" >	
								<img title="<?php echo __('View Team').' ( '.' Task '.' #:'.$_candidateMatchFixtureGroup->id ?> )" src="<?php echo image_path('icons/view') ?>">			
							</a>
						</li>  
						<li>   
							<a href="#" class="ui-action-button" id="ui-delete-cash_request-<?php echo $_candidateMatchFixtureGroup->id ?>" onclick="Javascript:deleteProduct(<?php echo $_candidateMatchFixtureGroup->id ?>);" rel="<?php echo $_candidateMatchFixtureGroup->token_id ?>">	
							<img title="<?php echo __('Delete Category').' ( '.' Task '.' #:'.$_candidateMatchFixtureGroup->id ?> )" src="<?php echo image_path('icons/del')  ?>" > 
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

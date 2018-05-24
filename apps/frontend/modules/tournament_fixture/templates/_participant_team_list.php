<div class="table-responsive" id="ui-data-list-product"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Match #') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Sport Game') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Participant Team')  ?></th>
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Match Date') ?>"><?php echo  __('Row'),' #' ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Description') ?>"><?php echo  __('Description') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Status Status') ?>"><?php echo  __('Status') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;"><?php echo  __('...') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countTournaments) ?>">
	  <?php foreach ( $_candidateMatchFixtureParticipants as $_key => $_candidateMatchFixtureParticipant ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<a href="<?php echo url_for('category/view?category_id='.$_candidateMatchFixtureParticipant->id.'&token_id='.$_candidateMatchFixtureParticipant->token_id) ?>" >	
					<?php echo SystemCore::processDataID($_candidateMatchFixtureParticipant->id) ?>
				</a>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo $_candidateMatchFixtureParticipant->tournamentMatchFixtureNumber ?> 
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-12"> 
				<?php echo $_candidateMatchFixtureParticipant->sportGameName.' - '.($_candidateMatchFixtureParticipant->sportGameTypeMode ? (TournamentCore::processAthleticsTypeValue($_candidateMatchFixtureParticipant->sportGameTypeMode)):$_candidateMatchFixtureParticipant->sportGameName).' - '.$_candidateMatchFixtureParticipant->sportGameGroupName.' ( '.TournamentCore::processGenderValue($_candidateMatchFixtureParticipant->teamGroupGenderCategoryID).' )' ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-12"> 
				<?php echo $_candidateMatchFixtureParticipant->participantTeamName.' ( '.$_candidateMatchFixtureParticipant->participantTeamAlias.' ) - '.SystemCore::processCountryValue($_candidateMatchFixtureParticipant->teamCountry)  ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo $_candidateMatchFixtureParticipant->id ?>
			</td>  
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo Wordlimit::Wordlimiter($_candidateMatchFixtureParticipant->description, 5) ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_candidateMatchFixtureParticipant->id ?>" class="ui-table-status-small-icon" id="<?php echo $_candidateMatchFixtureParticipant->id ?>">
					<img title="<?php echo $_candidateMatchFixtureParticipant->sportGameName ?>" src="<?php echo image_path($_candidateMatchFixtureParticipant->id ? 'status/approved':'status/disabled')  ?>"> 
				</span>
			</td> 
			<td class="ui-table-action ui-table-list-action-box-2">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">   
						<li>
							<a href="<?php echo url_for('team/view?product_id='.$_candidateMatchFixtureParticipant->id.'&token_id='.$_candidateMatchFixtureParticipant->token_id) ?>" >	
								<img title="<?php echo __('View Team').' ( '.' Task '.' #:'.$_candidateMatchFixtureParticipant->id ?> )" src="<?php echo image_path('icons/view') ?>">			
							</a>
						</li>  
						<li>   
							<a href="#" class="ui-action-button" id="ui-delete-cash_request-<?php echo $_candidateMatchFixtureParticipant->id ?>" onclick="Javascript:deleteProduct(<?php echo $_candidateMatchFixtureParticipant->id ?>);" rel="<?php echo $_candidateMatchFixtureParticipant->token_id ?>">	
							<img title="<?php echo __('Delete Category').' ( '.' Task '.' #:'.$_candidateMatchFixtureParticipant->id ?> )" src="<?php echo image_path('icons/del')  ?>" > 
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

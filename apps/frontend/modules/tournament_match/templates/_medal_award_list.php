<div class="table-responsive" id="ui-data-list-product"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Rank') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Team').' #' ?></th>
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Team Name') ?>"><?php echo  __('Team Name') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Country Name') ?>"><?php echo  __('Country Name') ?></th>     
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Gold Medal') ?>"><img align="center" width=10 height=15 title="" src="<?php echo image_path('settings/gold_medal')  ?>"> <?php echo  __('Gold') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Silver Medal') ?>"><img align="center" width=10 height=15 title="" src="<?php echo image_path('settings/silver_medal')  ?>"> <?php echo  __('Silver') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Bronze Medal') ?>"><img align="center" width=10 height=15 title="" src="<?php echo image_path('settings/bronze_medal')  ?>"> <?php echo  __('Bronze') ?></th>    
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Total Medal') ?>"><?php echo  __('Total') ?></th>    
			<th class="ui-th-left-text" style="text-align:center!important;"><?php echo  __('...') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countTournaments) ?>">
	  <?php foreach ( $_participantTeams as $_key => $_participantTeam ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<a href="<?php echo url_for('category/view?category_id='.$_participantTeam->id.'&token_id='.$_participantTeam->token_id) ?>" >	
					<?php echo SystemCore::processDataID($_participantTeam->id) ?>
				</a>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_participantTeam->participantTeamStandingRank ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_participantTeam->teamNumber ?>
			</td> 
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_participantTeam->participantTeamName.' ( '.$_participantTeam->participantTeamAlias.' ) ' ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-1">
				<?php echo SystemCore::processCountryValue($_participantTeam->teamCountry) ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_participantTeam->numberOfGoldMedal ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_participantTeam->numberOfSilverMedal ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo  $_participantTeam->numberOfBronzeMedal ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo  $_participantTeam->totalMedalAward ?>
			</td> 
			<td class="ui-table-action ui-table-list-action-box-2">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">     
						<li>
							<a href="<?php echo url_for('match/fixture?match_id='.$_tournamentMatch->id.'&token_id='.$_tournamentMatch->token_id) ?>" >	
								<img title="<?php echo __('View Team').' ( '.' Task '.' #:'.$_tournamentMatch->id ?> )" src="<?php echo image_path('icons/view') ?>">			
							</a>
						</li> 
						<li>
							<a href="<?php echo url_for('team/view?product_id='.$_participantTeam->id.'&token_id='.$_participantTeam->token_id) ?>" >	
								<img title="<?php echo __('View Team').' ( '.' Task '.' #:'.$_participantTeam->id ?> )" src="<?php echo image_path('icons/view') ?>">			
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

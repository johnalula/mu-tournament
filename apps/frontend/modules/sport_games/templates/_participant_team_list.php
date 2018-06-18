<div class="table-responsive" id="ui-data-list-product"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Team').' #' ?></th>
			<th class="ui-th-left-text" title="<?php echo __('Product Name') ?>"><?php echo  __('Team Name') ?></th>  
			<th class="ui-th-left-text" title="<?php echo __('Team Name') ?>"><?php echo  __('Team Alias') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Country Name') ?>"><?php echo  __('Country') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Category Group') ?>"><?php echo  __('Description') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Employee Status') ?>"><?php echo  __('Status') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;"><?php echo  __('...') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countTournaments) ?>">
	  <?php $_rowNumber = 1; foreach ( $_candidateParticipantTeams as $_key => $_candidateParticipantTeam ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
					<?php echo SystemCore::processDataID($_rowNumber) ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo $_candidateParticipantTeam->teamNumber ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-02"> 
				<?php echo $_candidateParticipantTeam->teamName  ?>
			</td>  
			<td class="ui-td-left-text ui-td-xsmall-1"> 
				<?php echo $_candidateParticipantTeam->teamFullAlias  ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-1"> 
				<?php echo SystemCore::processCountryValue($_candidateParticipantTeam->teamCountry) ?> 
			</td>   
			<td class="ui-td-left-text ui-td-xlarg" title="<?php echo $_candidateParticipantTeam->description ?>">
				<?php echo Wordlimit::Wordlimiter($_candidateParticipantTeam->description, 5) ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_candidateParticipantTeam->id ?>" class="ui-table-status-small-icon" id="<?php echo $_candidateParticipantTeam->id ?>">
					<img title="<?php echo $_candidateParticipantTeam->teamName ?>" src="<?php echo image_path($_candidateParticipantTeam->activeFlag ? 'status/active':'status/other')  ?>"> 
					<img title="<?php echo $_candidateParticipantTeam->teamName ?>" src="<?php echo image_path($_candidateParticipantTeam->status == TournamentCore::$_ACTIVE ? 'status/approved':'status/disabled')  ?>"> 
				</span>
			</td> 
			<td class="ui-table-action ui-table-list-action-box-1">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">  
						<li>
							<a href="<?php echo url_for('team/view?team_id='.$_candidateParticipantTeam->id.'&token_id='.$_candidateParticipantTeam->token_id) ?>" >	
								<img title="<?php echo __('View Team').' ( '.' Task '.' #:'.$_candidateParticipantTeam->id ?> )" src="<?php echo image_path('icons/view') ?>">			
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

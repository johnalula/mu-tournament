<div class="table-responsive" id="ui-data-list-candidate-participants"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Party').' #' ?></th>
			<th class="ui-th-left-text" title="<?php echo __('Product Name') ?>"><?php echo  __('Participant Name') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Member Role') ?>"><?php echo  __('Team Name') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Event') ?>"><?php echo  __('Role') ?></th>  
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Description') ?>"><?php echo  __('Description') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Employee Status') ?>"><?php echo  __('Status') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;"><?php echo  __('...') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-candidate-participants" name="ui-total-data-list-candidate-participants" value="<?php echo count($_countCandidateParticipants) ?>">
	  <?php foreach ( $_candidateWomenParticipants as $_key => $_candidateParticipant ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo SystemCore::processDataID($_candidateParticipant->id) ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo $_candidateParticipant->memberNumber ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-01"> 
				<?php echo $_candidateParticipant->memberFullName  ?>
			</td>   
			<td class="ui-td-left-text ui-td-xsmall-00">
				<?php echo $_candidateParticipant->participantTeamName.' ( '.$_candidateParticipant->participantTeamAlias.' ) - '.(SystemCore::processCountryValue($_candidateParticipant->teamCountry))  ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo PersonCore::processPersonRoleValue($_candidateParticipant->memberRoleID) ?>
			</td>  
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo Wordlimit::Wordlimiter($_candidateParticipant->description, 5) ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_candidateParticipant->id ?>" class="ui-table-status-small-icon" id="<?php echo $_candidateParticipant->id ?>">
					<img title="<?php echo $_candidateParticipant->id ?>" src="<?php echo image_path($_candidateParticipant->id ? 'status/approved':'status/disabled')  ?>"> 
				</span>
			</td> 
			<td class="ui-table-action ui-table-list-action-box-1">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">  
						<li>
							<a href="<?php echo url_for('team/view?team_id='.$_candidateParticipant->id.'&token_id='.$_candidateParticipant->token_id) ?>" >	
								<img title="<?php echo __('View Team').' ( '.' Task '.' #:'.$_candidateParticipant->id ?> )" src="<?php echo image_path('icons/view') ?>">			
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

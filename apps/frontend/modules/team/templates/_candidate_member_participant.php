<div class="table-responsive" id="ui-modal-data-table-list-candidate-member-participant"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="ui-th-left-text" title="<?php echo __('Product Name') ?>"><?php echo  __('Member Name') ?></th>   
			<th class="" style="text-align:left!important;"><?php echo __('Gender')  ?></th>
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Member Team') ?>"><?php echo  __('Role') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Member Role') ?>"><?php echo  __('Relation') ?></th>  
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Description') ?>"><?php echo  __('Description') ?></th>   
			<th class="ui-th-left-text" style="text-align:left!important;" title="<?php echo __('Employee Status') ?>"><?php echo  __('Status') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countTournaments) ?>">
	  <?php foreach ( $_candidateMemberParticipants as $_key => $_candidateParticipant ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="radio" id="selectCandidate-<?php echo ++$_key ?>" class="selectCandidate" name="selectCandidate" value="<?php echo  $_candidateParticipant->id.'$'.$_candidateParticipant->token_id.'$'.$_candidateParticipant->memberFullName.'$'.$_candidateParticipant->memberRoleID.'$'.TournamentCore::processContestantNameModeValue($_candidateParticipant->memberRoleID).'$'.$_candidateParticipant->genderCategoryID ?>">
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo SystemCore::processDataID($_candidateParticipant->id) ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-2"> 
				<?php echo $_candidateParticipant->memberFullName  ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo PersonCore::processGenderValue($_candidateParticipant->genderCategoryID) ?> 
			</td>
			<td class="ui-td-left-text ui-td-xsmall-0">
				<?php echo TournamentCore::processContestantNameModeValue($_candidateParticipant->memberRoleID) ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-0">
				<?php echo PersonCore::processPersonRoleValue($_candidateParticipant->memberRelationID) ?>
			</td>  
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo Wordlimit::Wordlimiter($_candidateParticipant->description, 5) ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_candidateParticipant->id ?>" class="ui-table-status-small-icon" id="<?php echo $_candidateParticipant->id ?>">
					<img title="<?php echo $_candidateParticipant->memberFullName ?>" src="<?php echo image_path($_candidateParticipant->id ? 'status/approved':'status/disabled')  ?>"> 
				</span>
			</td>  
			<td class="ui-table-td-right-border ui-table-td-xfw">
			</td>
		 </tr> 
		 <?php endforeach; ?>
		 <tr> 
			<td class="ui-table-td-left-border ui-table-td-xfw"></td>
			<td class="ui-table-td-footer" colspan=7></td>
			<td class="ui-table-td-right-border ui-table-td-xfw"></td>
		 </tr>
	  </tbody>
	  <tfoot>
			<tr>
				<td class="ui-panel-table-list-footer" colspan=9>&nbsp;</td>
			</tr>
	  </tfoot>
	</table>
 </div>

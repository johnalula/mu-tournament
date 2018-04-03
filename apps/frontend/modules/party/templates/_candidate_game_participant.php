<div class="table-responsive" id="ui-modal-data-table-list-candidate-team-member-participation"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th></th>
			<th class="" style="text-align:center!important;"><?php echo __('ID') ?></th>
			<th class="" style=""><?php echo __('Type') ?></th>
			<th class="ui-th-left-text"><?php echo __('Sport Game') ?></th>
			<th class="" style=""><?php echo __('Event') ?></th>
			<th class="ui-th-center-text"><?php echo __('Contestant #') ?></th>
			<th class="ui-th-left-text"><?php echo __('Description') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Status') ?></th>
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
	   <?php foreach ( $_candidateParticipants as $_key => $_candidateParticipant ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="radio" id="selectCandidate-<?php echo ++$_key ?>" class="selectCandidate" name="selectCandidate" value="<?php echo  $_candidateParticipant->id.'$'.$_candidateParticipant->token_id.'$'.$_candidateParticipant->id.'$'.$_candidateParticipant->id.'$'.$_candidateParticipant->id ?>">
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo SystemCore::processDataID($_candidateParticipant->id) ?> 
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-01"> 
				<?php echo $_candidateParticipant->id.' '.(TournamentCore::processDistanceTypeAlias($_candidateParticipant->id) ? (' - '.TournamentCore::processDistanceTypeAlias($_candidateParticipant->id)):'' )  ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-02"> 
				<?php echo $_candidateParticipant->memberFullName ?> 
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo $_candidateParticipant->id ? 'True':'False' ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo TournamentCore::processEventTypeValue($_candidateParticipant->id) ?>
			</td>  
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_candidateParticipant->description ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_candidateParticipant->id ?>" class="ui-table-status-small-icon" id="<?php echo $_candidateParticipant->id ?>">
					<img title="<?php echo $_candidateParticipant->id ?> " src="<?php echo image_path($_candidateParticipant->id ? 'status/approved':'status/deny')  ?>"> 
					<img title="<?php echo $_candidateParticipant->id ?> " src="<?php echo image_path($_candidateParticipant->id ? 'status/active':'status/disabled')  ?>"> 
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

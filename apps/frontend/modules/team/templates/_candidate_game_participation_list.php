<div class="table-responsive" id="ui-modal-data-table-list-candidate-sport-game-participation"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th></th>
			<th class="" style="text-align:center!important;"><?php echo __('ID') ?></th>
			<th class="" style=""><?php echo __('Gender') ?></th>
			<th class="ui-th-left-text"><?php echo __('Sport Game') ?></th>
			<th class="" style=""><?php echo __('Type') ?></th>
			<th class="" style=""><?php echo __('Category') ?></th>
			<th class="" style=""><?php echo __('Event') ?></th>
			<th class="ui-th-center-text"><?php echo __('Contestant #') ?></th>
			<th class="ui-th-left-text"><?php echo __('Description') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Status') ?></th>
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
	   <?php foreach ( $_teamGameParticipations as $_key => $_teamGameParticipation ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="radio" id="selectCandidate-<?php echo ++$_key ?>" class="selectCandidate" name="selectCandidate" value="<?php echo  $_teamGameParticipation->id.'$'.$_teamGameParticipation->token_id.'$'.$_teamGameParticipation->sportGameName.'$'.$_teamGameParticipation->gameCategoryName.'$'.$_teamGameParticipation->teamAlias ?>">
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo SystemCore::processDataID($_teamGameParticipation->id) ?> 
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo TournamentCore::processGenderValue($_teamGameParticipation->genderCategoryID)  ?>
			</td>  
			<td class="ui-td-left-text ui-td-xsmall-01"> 
				<?php echo $_teamGameParticipation->sportGameName  ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-1"> 
				<?php echo TournamentCore::processDistanceTypeValue($_teamGameParticipation->sportGameDistanceTypeID).' '.($_teamGameParticipation->sportGameTypeMode ? (TournamentCore::processAthleticsTypeValue($_teamGameParticipation->sportGameTypeMode)):$_teamGameParticipation->sportGameName)   ?>
			</td>  
			<td class="ui-td-left-text ui-td-xsmall-00">
				<?php echo $_teamGameParticipation->gameCategoryName  ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo TournamentCore::processEventTypeValue($_teamGameParticipation->eventType) ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo $_teamGameParticipation->totalContestantNumber ?>
			</td>  
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_teamGameParticipation->description ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_teamGameParticipation->id ?>" class="ui-table-status-small-icon" id="<?php echo $_teamGameParticipation->id ?>">
					<img title="<?php echo $_teamGameParticipation->id ?> " src="<?php echo image_path($_teamGameParticipation->id ? 'status/approved':'status/deny')  ?>"> 
					<img title="<?php echo $_teamGameParticipation->id ?> " src="<?php echo image_path($_teamGameParticipation->activeFlag ? 'status/active':'status/disabled')  ?>"> 
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

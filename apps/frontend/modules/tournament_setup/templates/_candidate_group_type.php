<div class="table-responsive" id="ui-modal-data-table-list-candidate-group-type"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th></th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="ui-th-left-text" title="<?php echo __('Round Type Name') ?>"><?php echo  __('Group Type Name') ?></th>   
			<th class="ui-th-left-text" style="" title="<?php echo __('Category Alias') ?>"><?php echo  __('Alias') ?></th>   
			<th class="ui-th-left-text" style="" title="<?php echo __('Category Group') ?>"><?php echo  __('Description') ?></th>   
			<th class="ui-th-left-text" style="" title="<?php echo __('Employee Status') ?>"><?php echo  __('Default') ?></th>  
			<th class="ui-th-left-text" style="" title="<?php echo __('Employee Status') ?>"><?php echo  __('Status') ?></th> 
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
	   <?php foreach ( $_candidateGroupTypes as $_key => $_groupType ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="radio" id="selectCandidate-<?php echo ++$_key ?>" class="selectCandidate" name="selectCandidate" value="<?php echo  $_groupType->id.'$'.$_groupType->token_id.'$'.$_groupType->groupName.'$'.$_groupType->groupNumber  ?>">
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo SystemCore::processDataID($_groupType->id) ?> 
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-11">  
				<?php echo $_groupType->groupName  ?> 
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-11">
				<?php echo $_groupType->groupNumber ?> 
			</td>
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo Wordlimit::Wordlimiter($_groupType->description, 5) ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_groupType->id ?>" class="ui-table-status-small-icon" id="<?php echo $_groupType->id ?>">
					<img title="<?php echo $_groupType->groupName ?>" src="<?php echo image_path($_groupType->defaultFlag ? 'status/default':'status/inactive_default')  ?>"> 
				</span>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_groupType->id ?>" class="ui-table-status-small-icon" id="<?php echo $_groupType->id ?>">
					<img title="<?php echo $_groupType->groupName ?>" src="<?php echo image_path($_groupType->activeFlag ? 'status/approved':'status/disabled')  ?>"> 
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

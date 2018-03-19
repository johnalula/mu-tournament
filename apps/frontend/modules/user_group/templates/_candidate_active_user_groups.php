<div class="table-responsive" id="ui-modal-data-table-list-active-user-groups"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th></th>
			<th class="" style="text-align:center!important;"><?php echo __('ID') ?></th>
			<th class="ui-th-left-text"><?php echo __('User Group Name') ?></th>
			<th class="ui-th-center-text"><?php echo __('Access Level') ?></th>
			<th class="ui-th-left-text"><?php echo __('Description') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Active') ?></th>
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
	   <?php foreach ( $_candidates as $_key => $_userGroup ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="radio" id="selectCandidate-<?php echo ++$_key ?>" class="selectCandidate" name="selectCandidate" value="<?php echo  $_userGroup->id.'$'.$_userGroup->token_id.'$'.$_userGroup->userGroupName.'$'.$_userGroup->token_id ?>">
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo SystemCore::processDataID($_userGroup->id) ?> 
			</td>
			<td class="ui-td-left-text ui-td-xsmall-10">
				<?php echo $_userGroup->userGroupName ?>
			</td>
			<td class="ui-td-left-text ui-td-xsmall-01">
				<?php echo PermissionCore::processAccessLevelValue ($_userGroup->id) ?>
			</td>
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_userGroup->description ?>
			</td>
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_userGroup->id ?>" class="ui-table-status-small-icon" id="<?php echo $_userGroup->id ?>">
					<img title="<?php echo $_userGroup->userGroupName ?> " src="<?php echo image_path('status/'.ModuleCore::processModuleAccessibleStatusIcon($_userGroup->activeFlag))  ?>"> 
				</span>
			</td> 
			<td class="ui-table-td-right-border ui-table-td-xfw">
			</td>
		 </tr> 
		 <?php endforeach; ?>
		 <tr> 
			<td class="ui-table-td-left-border ui-table-td-xfw"></td>
			<td class="ui-table-td-footer" colspan=5></td>
			<td class="ui-table-td-right-border ui-table-td-xfw"></td>
		 </tr>
	  </tbody>
	  <tfoot>
			<tr>
				<td class="ui-panel-table-list-footer" colspan=7>&nbsp;</td>
			</tr>
	  </tfoot>
	</table>
 </div>

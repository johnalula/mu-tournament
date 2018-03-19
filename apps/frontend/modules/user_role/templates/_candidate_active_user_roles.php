<div class="table-responsive" id="ui-modal-data-table-list-active-user-roles"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th></th>
			<th class="" style="text-align:center!important;"><?php echo __('ID') ?></th>
			<th class="ui-th-left-text"><?php echo __('User Role Name') ?></th>
			<th class="ui-th-center-text"><?php echo __('Access Level') ?></th>
			<th class="ui-th-left-text"><?php echo __('Description') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Default') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Active') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Applicable') ?></th>
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
	   <?php foreach ( $_candidates as $_key => $_userRole ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="radio" id="selectCandidate-<?php echo ++$_key ?>" class="selectCandidate" name="selectCandidate" value="<?php echo  $_userRole->id.'$'.$_userRole->token_id.'$'.$_userRole->userRoleName.'$'.$_userRole->userRoleTypeID ?>">
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo SystemCore::processDataID($_userRole->id) ?> 
			</td>
			<td class="ui-td-left-text ui-td-xsmall-10">
				<a href="<?php echo url_for('user_role/view?user_role_id='.$_userRole->id.'&token_id='.$_userRole->token_id) ?>">
					<?php echo $_userRole->userRoleName ?>
				</a>
			</td>
			<td class="ui-td-left-text ui-td-xsmall-01">
				<?php echo PermissionCore::processAccessLevelValue ($_userRole->userRoleTypeID) ?>
			</td>
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_userRole->description ?>
			</td>
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_userRole->userRoleName ?>" class="ui-table-status-small-icon" id="<?php echo $_userRole->id ?>"> 
					<img title="<?php echo ($_userRole->defaultFlag ? __('Default'):'').' '.$_userRole->userRoleName.' '.__(' user role') ?> " src="<?php echo image_path('status/'.ModuleCore::processModuleDefaultIcon($_userRole->defaultFlag))  ?>"> 
				</span> 
			</td>
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_userRole->id ?>" class="ui-table-status-small-icon" id="<?php echo $_userRole->id ?>">
					<img title="<?php echo $_userRole->userRoleName ?> " src="<?php echo image_path('status/'.ModuleCore::processModuleAccessibleStatusIcon($_userRole->activeFlag))  ?>"> 
				</span>
			</td>
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_userRole->id ?>" class="ui-table-status-small-icon" id="<?php echo $_userRole->id ?>"> 
					<img title="<?php echo $_userRole->userRoleName ?> " src="<?php echo image_path('status/'.ModuleCore::processModuleApplicableStatusIcon($_userRole->applicableFlag))  ?>"> 
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

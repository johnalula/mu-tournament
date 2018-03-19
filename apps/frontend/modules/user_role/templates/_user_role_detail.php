<div class="ui-content-detail">
	<fieldset class="ui-content-detail-fieldset"> 
		<legend class="ui-content-detial-fieldset-legend">
			<img class="ui-content-detail-nor-img" src="<?php echo image_path('settings/user_role') ?>" > 
			<?php echo __('Role').': '.$_userRole->userRoleName ?> 
		</legend> 
		<div class="ui-content-detail-box"> 	
			<div class="col-sm-5"> 
				<table class="ui-content-detail-table">
					<tbody>
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('ID') ?>:</td><td><?php echo SystemCore::processDataID($_userRole->id) ?></td>
						</tr>
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Role Name') ?>:</td><td><?php echo $_userRole->userRoleName.' - '.$_userRole->userRoleAlias ?></td>
						</tr> 
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Role Type') ?>:</td><td><?php echo UserCore::processUserRoleValue($_userRole->userRoleTypeID) ?></td>
						</tr>
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Description') ?>:</td><td><?php echo $_userRole->description ?></td>
						</tr> 
					</tbody>
				</table>  
			</div>                      
			<div class="col-sm-5"> 
				<table class="ui-content-detail-table">
					<tbody>
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Stauts') ?>:</td>
							<td>
								<img class="ui-detail-status-img" title="<?php echo $_userRole->userRoleName ?>" src="<?php echo image_path($_userRole->defaultFlag ? 'status/default':'status/inactive_default')  ?>">  
								<img class="ui-detail-status-img" title="<?php echo $_userRole->userRoleName ?>" src="<?php echo image_path($_userRole->activeFlag ? 'status/enabled':'status/disabled')  ?>">  
								<img class="ui-detail-status-img" title="<?php echo $_userRole->userRoleName ?>" src="<?php echo image_path($_userRole->applicableFlag ? 'status/approved':'status/deny_lrg')  ?>">  
							</td>
						</tr>
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Created Date') ?>:</td><td><?php echo $_userRole->createdAt ?></td>
						</tr> 
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Update Date') ?>:</td><td><?php echo $_userRole->updatedAt ?></td>
						</tr> 
					</tbody>
				</table>  
			</div>  
		</div>   
	</fieldset>  
	<div class="ui-clear-fix"></div>                   
</div>                      



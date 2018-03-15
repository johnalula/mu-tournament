<div class="ui-content-detail">
	<fieldset class="ui-content-detail-fieldset"> 
		<legend class="ui-content-detial-fieldset-legend">
			<img class="ui-content-detail-nor-img" src="<?php echo image_path('settings/module') ?>" > 
			<?php echo __('Module').': '.$_module->moduleName ?> 
		</legend> 
		<div class="ui-content-detail-box"> 	
			<div class="col-sm-5"> 
				<table class="ui-content-detail-table">
					<tbody>
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('ID') ?>:</td><td><?php echo SystemCore::processDataID($_module->id) ?></td>
						</tr>
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Module Name') ?>:</td><td><?php echo $_module->moduleName.' - '.$_module->moduleAlias ?></td>
						</tr> 
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Default Access') ?>:</td><td><?php echo PermissionCore::processAccessLevelValue($_module->defaultAccessLevelTypeID) ?></td>
						</tr>
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Description') ?>:</td><td><?php echo $_module->description ?></td>
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
								<img class="ui-detail-status-img" title="<?php echo $_module->moduleName ?>" src="<?php echo image_path($_module->defaultFlag ? 'status/default':'status/inactive_default')  ?>">  
								<img class="ui-detail-status-img" title="<?php echo $_module->moduleName ?>" src="<?php echo image_path($_module->activeFlag ? 'status/enabled':'status/disabled')  ?>">  
								<img class="ui-detail-status-img" title="<?php echo $_module->moduleName ?>" src="<?php echo image_path($_module->applicableFlag ? 'status/approved':'status/deny_lrg')  ?>">  
							</td>
						</tr>
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Created Date') ?>:</td><td><?php echo $_module->createdAt ?></td>
						</tr> 
						<tr>
							<td class="ui-th-title-right-text"><?php echo __('Update Date') ?>:</td><td><?php echo $_module->updatedAt ?></td>
						</tr> 
					</tbody>
				</table>  
			</div>  
		</div>   
	</fieldset>  
	<div class="ui-clear-fix"></div>                   
</div>                      



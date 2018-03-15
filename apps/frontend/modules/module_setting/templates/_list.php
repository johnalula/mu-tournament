<div class="table-responsive"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('ID') ?></th>
			<th class="ui-th-left-text"><?php echo __('System Module Name') ?></th>
			<th class="ui-th-center-text"><?php echo __('Access Level') ?></th>
			<th class="ui-th-left-text"><?php echo __('Description') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Default') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Active') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Applicable') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Action') ?></th>
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
	  <?php foreach ( $_modules as $_key => $_module ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<a href="<?php echo url_for('module_setting/view?module_id='.$_module->id.'&token_id='.$_module->token_id) ?>">
					<?php echo SystemCore::processDataID($_module->id) ?>
				</a>
			</td>
			<td class="ui-td-left-text ui-td-xsmall-10">
				<a href="<?php echo url_for('module_setting/view?module_id='.$_module->id.'&token_id='.$_module->token_id) ?>">
					<?php echo $_module->moduleName ?>
				</a>
			</td>
			<td class="ui-td-left-text ui-td-xsmall-01">
				<?php echo PermissionCore::processAccessLevelValue ($_module->defaultAccessLevelTypeID) ?>
			</td>
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_module->description ?>
			</td>
			<td class="ui-td-center-text ui-td-xsmall-0">
			<span rel="<?php echo $_module->moduleName ?>" class="ui-table-status-small-icon" id="<?php echo $_module->id ?>"> 
					<img title="<?php echo ($_module->defaultFlag ? __('Default'):'').' '.$_module->moduleName.' '.__(' module setting') ?> " src="<?php echo image_path('status/'.ModuleCore::processModuleDefaultIcon($_module->defaultFlag))  ?>"> 
				</span> 
			</td>
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_module->id ?>" class="ui-table-status-small-icon" id="<?php echo $_module->id ?>">
					<img title="<?php echo $_module->moduleName ?> " src="<?php echo image_path('status/'.ModuleCore::processModuleAccessibleStatusIcon($_module->activeFlag))  ?>"> 
				</span>
			</td>
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_module->id ?>" class="ui-table-status-small-icon" id="<?php echo $_module->id ?>"> 
					<img title="<?php echo $_module->moduleName ?> " src="<?php echo image_path('status/'.ModuleCore::processModuleApplicableStatusIcon($_module->applicableFlag))  ?>"> 
				</span> 
			</td>
			<td class="ui-table-action ui-table-list-action-box-3">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">  
						<li>
							<a href="<?php echo url_for('module_setting/view?module_id='.$_module->id.'&token_id='.$_module->token_id) ?>" >
								<img title="<?php echo __('View module setting').' ( '.' Task '.' #:'.$_module->moduleName ?> )" src="<?php echo image_path('icons/view') ?>">			
							</a>
						</li> 
						<li>  
							<a href="<?php echo url_for('module_setting/view?module_id='.$_module->id.'&token_id='.$_module->token_id) ?>" >	 
								<img title="<?php echo __('Edit module setting').' ( '.' Task '.' #:'.$_module->moduleName ?> )" src="<?php echo image_path('icons/edit')  ?>" >
							</a>    
						</li> 
						<li>   
							<a href="#" class="ui-action-button" id="ui-delete-cash_request-<?php echo $_module->id ?>" onclick="Javascript:deleteUser(<?php echo $_module->id ?>);" rel="<?php echo $_module->token_id ?>">	
							<img title="<?php echo __('Can not Delete module setting').' ( '.' Task '.' #:'.$_module->moduleName ?> )" src="<?php echo image_path('icons/del')  ?>" > 
							</a>  
						</li> 
					</ul>
				</div>
			</td>
			<td class="ui-table-td-right-border ui-table-td-xfw">
			</td>
		 </tr> 
		 <?php endforeach; ?> 
	  </tbody>
	  <tfoot>
			<tr>
				<td class="ui-panel-table-list-footer" colspan=10>&nbsp;</td>
			</tr>
	  </tfoot>
	</table>
 </div>

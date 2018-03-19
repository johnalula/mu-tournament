<div class="table-responsive"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('ID') ?></th>
			<th class="ui-th-left-text"><?php echo __('Module Name') ?></th>
			<th class="ui-th-center-text"><?php echo __('Access Level') ?></th>
			<th class="ui-th-left-text"><?php echo __('Description') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Default') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Active') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Applicable') ?></th> 
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
	  <?php foreach ( $_userRoleAccessLevels as $_key => $_accessLevel ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<a href="<?php echo url_for('module_setting/view?module_id='.$_accessLevel->id.'&token_id='.$_accessLevel->token_id) ?>">
					<?php echo SystemCore::processDataID($_accessLevel->id) ?>
				</a>
			</td>
			<td class="ui-td-left-text ui-td-xsmall-11"> 
				<?php echo $_accessLevel->moduleName ?> 
			</td>
			<td class="ui-td-left-text ui-td-xsmall-1"> 
				<?php echo PermissionCore::processAccessLevelValue ($_accessLevel->accessLevel) ?>
			</td>
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_accessLevel->description ?>
			</td>
			<td class="ui-td-center-text ui-td-xsmall-0">
			<span rel="<?php echo $_accessLevel->id ?>" class="ui-table-status-small-icon" id="<?php echo $_accessLevel->id ?>"> 
					<img title="<?php echo ($_accessLevel->moduleName ? __('Default'):'').' '.$_accessLevel->moduleName.' '.__(' module setting') ?> " src="<?php echo image_path('status/'.ModuleCore::processModuleDefaultIcon($_accessLevel->defaultFlag))  ?>"> 
				</span> 
			</td>
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_accessLevel->id ?>" class="ui-table-status-small-icon" id="<?php echo $_accessLevel->id ?>">
					<img title="<?php echo $_accessLevel->moduleName ?> " src="<?php echo image_path('status/'.ModuleCore::processModuleAccessibleStatusIcon($_accessLevel->activeFlag))  ?>"> 
				</span>
			</td>
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_accessLevel->id ?>" class="ui-table-status-small-icon" id="<?php echo $_accessLevel->id ?>"> 
					<img title="<?php echo $_accessLevel->moduleName ?> " src="<?php echo image_path('status/'.ModuleCore::processModuleApplicableStatusIcon($_accessLevel->applicableFlag))  ?>"> 
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

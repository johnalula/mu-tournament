<div class="table-responsive" id="ui-modal-data-table-list-candidate-active-system-module"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th></th>
			<th class="" style="text-align:center!important;"><?php echo __('ID') ?></th>
			<th class="ui-th-left-text"><?php echo __('Module Name') ?></th> 
			<th class="ui-th-center-text"><?php echo __('Access Level') ?></th>
			<th class="ui-th-left-text"><?php echo __('Description') ?></th> 
			<th class="" style="text-align:center!important;"><?php echo __('Default') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Active') ?></th> 
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
	   <?php foreach ( $_candidates as $_key => $_module ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="radio" id="selectCandidate-<?php echo ++$_key ?>" class="selectCandidate" name="selectCandidate" value="<?php echo  $_module->id.'$'.$_module->token_id.'$'.$_module->moduleName ?>">
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo SystemCore::processDataID($_module->id) ?> 
			</td>
			<td class="ui-td-left-text ui-td-xsmall-12"> 
				<?php echo $_module->moduleName ?>
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
					<img title="<?php echo $_module->id ?> " src="<?php echo image_path('status/'.ModuleCore::processModuleAccessibleStatusIcon($_module->activeFlag))  ?>"> 
					<img title="<?php echo $_module->id ?> " src="<?php echo image_path('status/'.ModuleCore::processModuleApplicableStatusIcon($_module->applicableFlag))  ?>"> 
				</span>
			</td>
			<td class="ui-table-td-right-border ui-table-td-xfw">
			</td>
		 </tr> 
		 <?php endforeach; ?>
		 <tr> 
			<td class="ui-table-td-left-border ui-table-td-xfw"></td>
			<td class="ui-table-td-footer" colspan=6></td>
			<td class="ui-table-td-right-border ui-table-td-xfw"></td>
		 </tr>
	  </tbody>
	  <tfoot>
			<tr>
				<td class="ui-panel-table-list-footer" colspan=8>&nbsp;</td>
			</tr>
	  </tfoot>
	</table>
 </div>

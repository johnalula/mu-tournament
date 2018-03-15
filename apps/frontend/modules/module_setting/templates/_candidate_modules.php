<div class="table-responsive" id="ui-modal-data-table-list-candidate-system-module"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th></th>
			<th class="" style="text-align:center!important;"><?php echo __('ID') ?></th>
			<th class="ui-th-left-text"><?php echo __('Module Name') ?></th> 
			<th class="" ><?php echo __('Alias') ?></th> 
			<th class="ui-th-left-text"><?php echo __('Description') ?></th> 
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
	   <?php foreach ( $_modules as $_key => $_module ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="radio" id="selectCandidate-<?php echo ++$_key ?>" class="selectCandidate" name="selectCandidate" value="<?php echo  $_module.'$'.ModuleCore::processModuleValue($_module).'$'.strtoupper(ModuleCore::processModuleIcon($_module)) ?>">
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo SystemCore::processDataID($_module) ?> 
			</td>
			<td class="ui-td-left-text ui-td-xsmall-12"> 
				<?php echo ModuleCore::processModuleValue($_module) ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-11"> 
				<?php echo ModuleCore::processModuleIcon($_module) ?>
			</td>  
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_course->description ?>
			</td>  
			<td class="ui-table-td-right-border ui-table-td-xfw">
			</td>
		 </tr> 
		 <?php endforeach; ?>
		 <tr> 
			<td class="ui-table-td-left-border ui-table-td-xfw"></td>
			<td class="ui-table-td-footer" colspan=4></td>
			<td class="ui-table-td-right-border ui-table-td-xfw"></td>
		 </tr>
	  </tbody>
	  <tfoot>
			<tr>
				<td class="ui-panel-table-list-footer" colspan=6>&nbsp;</td>
			</tr>
	  </tfoot>
	</table>
 </div>

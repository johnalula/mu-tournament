<div class="table-responsive" id="ui-modal-data-table-list-user-role"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th></th>
			<th class="" style="text-align:center!important;"><?php echo __('ID') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('User Role Name') ?></th> 
			<th class="ui-th-left-text"><?php echo __('Alias') ?></th> 
			<th class="ui-th-left-text"><?php echo __('Description') ?></th> 
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
	   <?php foreach ( $_candidates as $_key => $_userRole ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="radio" id="selectCandidate-<?php echo ++$_key ?>" class="selectCandidate" name="selectCandidate" value="<?php echo  $_userRole.'$'.UserCore::processUserRoleValue($_userRole) ?>">
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo SystemCore::processDataID($_userRole->id) ?> 
			</td>
			<td class="ui-td-left-text ui-td-xsmall-11"> 
				<?php echo UserCore::processUserRoleValue($_userRole) ?> 
			</td>  
			<td class="ui-td-left-text ui-td-xsmall-111"> 
				<?php echo strtoupper(UserCore::processUserRoleIcon($_userRole)) ?> 
			</td>  
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_userRole->id ?>
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

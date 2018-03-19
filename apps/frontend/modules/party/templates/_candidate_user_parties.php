<div class="table-responsive" id="ui-modal-data-table-list-candidate-persons"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th></th>
			<th class="" style="text-align:center!important;"><?php echo __('ID') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Party').' #' ?></th>
			<th class="ui-th-left-text"><?php echo __('Person Name') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Role') ?></th>
			<th class="ui-th-center-text"><?php echo __('Phone').' #' ?></th>
			<th class="ui-th-center-text"><?php echo __('Mobile').' #' ?></th>
			<th class="ui-th-left-text"><?php echo __('Description') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Status') ?></th>
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
	   <?php foreach ( $_candidates as $_key => $_userParty ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="radio" id="selectCandidate-<?php echo ++$_key ?>" class="selectCandidate" name="selectCandidate" value="<?php echo  $_userParty->id.'$'.$_userParty->token_id.'$'.$_userParty->fullName.'$'.PartyCore::processPartyRoleValue($_userParty->activePartyRoleTypeID) ?>">
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo SystemCore::processDataID($_userParty->id) ?> 
			</td>
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_userParty->personRoleType ?>
			</td>
			<td class="ui-td-left-text ui-td-xsmall-2">
				<?php echo $_userParty->fullName ?>
			</td>
			<td class="ui-td-left-text ui-td-xsmall-01">
				<?php echo PartyCore::processPartyRoleValue($_userParty->personRoleType) ?>
			</td>
			<td class="ui-td-left-text ui-td-xsmall-01">
				<?php echo $_userParty->id ?>
			</td>
			<td class="ui-td-left-text ui-td-xsmall-01">
				<?php echo $_userParty->id ?>
			</td>
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_userParty->description ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_userParty->id ?>" class="ui-table-status-small-icon" id="<?php echo $_userParty->id ?>">
					<img title="<?php echo $_userParty->id ?> " src="<?php echo image_path('status/'.ModuleCore::processModuleAccessibleStatusIcon($_userParty->status))  ?>"> 
				</span>
			</td> 
			<td class="ui-table-td-right-border ui-table-td-xfw">
			</td>
		 </tr> 
		 <?php endforeach; ?>
		 <tr> 
			<td class="ui-table-td-left-border ui-table-td-xfw"></td>
			<td class="ui-table-td-footer" colspan=8></td>
			<td class="ui-table-td-right-border ui-table-td-xfw"></td>
		 </tr>
	  </tbody>
	  <tfoot>
			<tr>
				<td class="ui-panel-table-list-footer" colspan=10>&nbsp;</td>
			</tr>
	  </tfoot>
	</table>
 </div>

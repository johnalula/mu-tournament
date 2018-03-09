<div class="table-responsive" id="ui-modal-data-table-list-candidate-parent-categorys"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th></th>
			<th class="" style="text-align:center!important;"><?php echo __('ID') ?></th>
			<th class="ui-th-left-text"><?php echo __('Name') ?></th>
			<th class="" style=""><?php echo __('Alias') ?></th>
			<th class="ui-th-center-text"><?php echo __('Group') ?></th>
			<th class="ui-th-left-text"><?php echo __('Description') ?></th>
			<th class="" style="text-align:center!important;"><?php echo __('Status') ?></th>
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
	   <?php foreach ( $_candidateGameCategorys as $_key => $_candidateGameCategory ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="radio" id="selectCandidate-<?php echo ++$_key ?>" class="selectCandidate" name="selectCandidate" value="<?php echo  $_candidateGameCategory->id.'$'.$_candidateGameCategory->token_id.'$'.$_candidateGameCategory->categoryName.'$'.$_candidateGameCategory->categoryAlias.'$'.$_candidateGameCategory->id ?>">
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00"> 
				<?php echo SystemCore::processDataID($_candidateGameCategory->id) ?> 
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-1">
				<?php echo $_candidateGameCategory->categoryName ?>
			</td>
			<td class="ui-td-left-text ui-td-xsmall-2">
				<?php echo $_candidateGameCategory->categoryName ?>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-01">
				<?php echo $_candidateGameCategory->id ?>
			</td>
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_candidateGameCategory->description ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_candidateGameCategory->id ?>" class="ui-table-status-small-icon" id="<?php echo $_candidateGameCategory->id ?>">
					<img title="<?php echo $_candidateGameCategory->id ?> " src="<?php echo image_path($_candidateGameCategory->id ? 'status/approved':'status/deny')  ?>"> 
					<img title="<?php echo $_candidateGameCategory->id ?> " src="<?php echo image_path($_candidateGameCategory->id ? 'status/inactive':'status/apply')  ?>"> 
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

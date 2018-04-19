<div class="table-responsive" id="ui-data-list-product"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="" style="text-align:left!important;"><?php echo __('Prod').' #' ?></th>
			<th class="ui-th-left-text" title="<?php echo __('Product Name') ?>"><?php echo  __('Product Name') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Category Name') ?>"><?php echo  __('UOM') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Category Class') ?>"><?php echo  __('Qnt on SO') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Category Class') ?>"><?php echo  __('Qnt on Hand') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Category Group') ?>"><?php echo  __('Unit Price') ?></th>   
			<th class="ui-th-left-text" style="text-align:center!important;" title="<?php echo __('Employee Status') ?>"><?php echo  __('Status') ?></th>  
			<th class="ui-th-left-text" style="text-align:center!important;"><?php echo  __('Action') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countTournaments) ?>">
	  <?php foreach ( $_groupMemberTeams as $_key => $_groupMemberTeam ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<a href="<?php echo url_for('category/view?category_id='.$_groupMemberTeam->id.'&token_id='.$_groupMemberTeam->token_id) ?>" >	
					<?php echo SystemCore::processDataID($_groupMemberTeam->id) ?>
				</a>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-02"> 
				<?php echo $_groupMemberTeam->teamName  ?>
			</td> 
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_groupMemberTeam->teamAlias ?> 
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_groupMemberTeam->id ?>
			</td>
			
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo $_groupMemberTeam->hasGameParticipation ? 'True':'False' ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_groupMemberTeam->id ?>
			</td> 
			<td class="ui-td-right-text ui-td-xsmall-00">
				<?php echo number_format($_groupMemberTeam->id,2)  ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_groupMemberTeam->id ?>" class="ui-table-status-small-icon" id="<?php echo $_groupMemberTeam->id ?>">
					<img title="<?php echo $_groupMemberTeam->teamName ?>" src="<?php echo image_path($_groupMemberTeam->id ? 'status/approved':'status/disabled')  ?>"> 
				</span>
			</td> 
			<td class="ui-table-action ui-table-list-action-box-4">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">  
						<li>
							<a href="<?php echo url_for('team/setting?product_id='.$_groupMemberTeam->id.'&token_id='.$_groupMemberTeam->token_id) ?>" >	
								<img title="<?php echo __('View Team Setting').' ( '.' Task '.' #:'.$_groupMemberTeam->id ?> )" src="<?php echo image_path('icons/setting_large') ?>">			
							</a>
						</li> 
						<li>
							<a href="<?php echo url_for('team/view?product_id='.$_groupMemberTeam->id.'&token_id='.$_groupMemberTeam->token_id) ?>" >	
								<img title="<?php echo __('View Team').' ( '.' Task '.' #:'.$_groupMemberTeam->id ?> )" src="<?php echo image_path('icons/view') ?>">			
							</a>
						</li> 
						<li>  
							<a href="<?php echo url_for('team/edit?product_id='.$_groupMemberTeam->id.'&token_id='.$_groupMemberTeam->token_id) ?>" >	
								<img title="<?php echo __('Edit Team').' ( '.' Task '.' #:'.$_groupMemberTeam->id ?> )" src="<?php echo image_path('icons/edit')  ?>" >
							</a>    
						</li> 
						<li>   
							<a href="#" class="ui-action-button" id="ui-delete-cash_request-<?php echo $_groupMemberTeam->id ?>" onclick="Javascript:deleteProduct(<?php echo $_groupMemberTeam->id ?>);" rel="<?php echo $_groupMemberTeam->token_id ?>">	
							<img title="<?php echo __('Delete Category').' ( '.' Task '.' #:'.$_groupMemberTeam->id ?> )" src="<?php echo image_path('icons/del')  ?>" > 
							</a>  
						</li> 
					</ul>
				</div>
			</td>
			<td class="ui-table-td-right-border ui-table-td-xfw">
			</td>
		 </tr> 
		 <?php endforeach; ?>
		 <tr> 
			<td class="ui-table-td-left-border ui-table-td-xfw"></td>
			<td class="ui-table-td-footer" colspan=9></td>
			<td class="ui-table-td-right-border ui-table-td-xfw"></td>
		 </tr>
	  </tbody>
	  <tfoot>
			<tr>
				<td class="ui-panel-table-list-footer" colspan=11>&nbsp;</td>
			</tr>
	  </tfoot>
	</table>
 </div>

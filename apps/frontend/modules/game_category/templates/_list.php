<div class="table-responsive" id="ui-data-list-product"> 
	<table class="ui-grid-table">
	  <thead>
		 <tr>
			<th>
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</th>
			<th class="" style="text-align:center!important;"><?php echo __('SID') ?></th>
			<th class="ui-th-left-text" title="<?php echo __('Category Name') ?>"><?php echo  __('Category Name') ?></th>   
			<th class="ui-th-left-text" style="" title="<?php echo __('Category Alias') ?>"><?php echo  __('Alias') ?></th>   
			<th class="ui-th-left-text" style="" title="<?php echo __('Category Group') ?>"><?php echo  __('Description') ?></th>   
			<th class="ui-th-left-text" style="" title="<?php echo __('Employee Status') ?>"><?php echo  __('Status') ?></th>  
			<th class="ui-th-left-text" style=""><?php echo  __('Action') ?></th>  
			<th></th>
		 </tr>
	  </thead>
	  <tbody>
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countTournaments) ?>">
	  <?php foreach ( $_gameCategorys as $_key => $_gameCategory ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<a href="<?php echo url_for('game_category/view?category_id='.$_gameCategory->id.'&token_id='.$_gameCategory->token_id) ?>" >	
					<?php echo SystemCore::processDataID($_gameCategory->id) ?>
				</a>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-11"> 
				<a href="<?php echo url_for('game_category/view?category_id='.$_gameCategory->id.'&token_id='.$_gameCategory->token_id) ?>" >	
					<?php echo $_gameCategory->categoryName  ?>
				</a>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-11">
				<?php echo $_gameCategory->categoryAlias ?> 
			</td>
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo Wordlimit::Wordlimiter($_gameCategory->description, 5) ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_gameCategory->id ?>" class="ui-table-status-small-icon" id="<?php echo $_gameCategory->id ?>">
					<img title="<?php echo $_gameCategory->categoryName ?>" src="<?php echo image_path($_gameCategory->id ? 'status/approved':'status/disabled')  ?>"> 
				</span>
			</td> 
			<td class="ui-table-action ui-table-list-action-box-3">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">   
						<li>
							<a href="<?php echo url_for('game_category/view?category_id='.$_gameCategory->id.'&token_id='.$_gameCategory->token_id) ?>" >	
								<img title="<?php echo __('View Game Category').' ( '.' Task '.' #:'.$_gameCategory->id ?> )" src="<?php echo image_path('icons/view') ?>">			
							</a>
						</li> 
						<li>  
							<a href="<?php echo url_for('game_category/edit?category_id='.$_gameCategory->id.'&token_id='.$_gameCategory->token_id) ?>" >	
								<img title="<?php echo __('Edit Game Category').' ( '.' Task '.' #:'.$_gameCategory->id ?> )" src="<?php echo image_path('icons/edit')  ?>" >
							</a>    
						</li> 
						<li>   
							<a href="#" class="ui-action-button" id="ui-delete-cash_request-<?php echo $_gameCategory->id ?>" onclick="Javascript:deleteProduct(<?php echo $_gameCategory->id ?>);" rel="<?php echo $_gameCategory->token_id ?>">	
							<img title="<?php echo __('Delete Category').' ( '.' Task '.' #:'.$_gameCategory->id ?> )" src="<?php echo image_path('icons/del')  ?>" > 
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

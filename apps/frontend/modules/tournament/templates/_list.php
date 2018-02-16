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
		<input type="hidden" class="form-control" id="ui-total-data-list-product" name="ui-total-data-list-product" value="<?php echo count($_countProducts) ?>">
	  <?php foreach ( $_products as $_key => $_product ): ?>
		 <tr class="<?php echo fmod($_key, 2) ? 'ui-table-td-even' : 'ui-table-td-odd' ?>"> 
			<td class="ui-table-td-left-border ui-table-td-xfw">
				<input type="checkbox" id="all-list-check-boxs" name="all-list-check-boxs" class="ui-input-checkbox" value="true" />
			</td>
			<td class="ui-td-center-text ui-td-xsmall-00">
				<a href="<?php echo url_for('category/view?category_id='.$_product->id.'&token_id='.$_product->token_id) ?>" >	
					<?php echo SystemCore::processDataID($_product->id) ?>
				</a>
			</td> 
			<td class="ui-td-left-text ui-td-xsmall-02"> 
				<?php echo $_product->productNumber ? $_product->productCode:$_product->productNumber ?>
			</td> 
			<td class="ui-td-left-text ui-td-xlarg">
				<?php echo $_product->productName ?> 
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_product->unitAlias ?>
			</td>
			
			<td class="ui-td-center-text ui-td-xsmall-00">
				<?php echo $_product->productQuantity ?>
			</td> 
			<td class="ui-td-center-text ui-td-xsmall-0">
				<?php echo $_product->remainingQuantity ?>
			</td> 
			<td class="ui-td-right-text ui-td-xsmall-00">
				<?php echo number_format($_product->itemPurchasedPrice,2)  ?>
			</td>  
			<td class="ui-td-center-text ui-td-xsmall-0">
				<span rel="<?php echo $_product->id ?>" class="ui-table-status-small-icon" id="<?php echo $_product->id ?>">
					<img title="<?php echo $_product->productName ?>" src="<?php echo image_path(($_product->presentFlag && $_product->activeFlag) ? ('status/'.PropertyCore::processPropertyQuantityStatusIcon ($_product->productStatus, $_product->minQuantityLevel, $_product->remainingQuantity)):'status/pending')  ?>"> 
					<img title="<?php echo $_product->productName ?>" src="<?php echo image_path($_product->presentFlag ? 'status/approved':'status/disabled')  ?>"> 
				</span>
			</td> 
			<td class="ui-table-action ui-table-list-action-box-4">
				<div class="ui-table-list-action " id="">
					<ul class="ui-table-action-menu">  
						<li>
							<a href="<?php echo url_for('product/setting?product_id='.$_product->id.'&token_id='.$_product->token_id) ?>" >	
								<img title="<?php echo __('View Product Setting').' ( '.' Task '.' #:'.$_product->id ?> )" src="<?php echo image_path('icons/setting_large') ?>">			
							</a>
						</li> 
						<li>
							<a href="<?php echo url_for('product/view?product_id='.$_product->id.'&token_id='.$_product->token_id) ?>" >	
								<img title="<?php echo __('View Category').' ( '.' Task '.' #:'.$_product->id ?> )" src="<?php echo image_path('icons/view') ?>">			
							</a>
						</li> 
						<li>  
							<a href="<?php echo url_for('product/edit?product_id='.$_product->id.'&token_id='.$_product->token_id) ?>" >	
								<img title="<?php echo __('Edit Category').' ( '.' Task '.' #:'.$_product->id ?> )" src="<?php echo image_path('icons/edit')  ?>" >
							</a>    
						</li> 
						<li>   
							<a href="#" class="ui-action-button" id="ui-delete-cash_request-<?php echo $_product->id ?>" onclick="Javascript:deleteProduct(<?php echo $_product->id ?>);" rel="<?php echo $_product->token_id ?>">	
							<img title="<?php echo __('Delete Category').' ( '.' Task '.' #:'.$_product->id ?> )" src="<?php echo image_path('icons/del')  ?>" > 
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

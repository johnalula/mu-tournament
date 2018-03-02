<form action="<?php echo url_for('product/search') ?>" method="get" class="">
<ul class="nav navbar-nav ui-toolbar-action ">
	<li class="">
		<img class="ui-toolbar-filter-img" src="<?php echo image_path('icons/search') ?>">
	</li>	 
	<li class="">
		<select id="product_class_id" name="product_class_id"  class="form-control ui-toolbar-input-xsm-2" title="<?php echo __('Product Category Classification') ?>">
			<option value="0"><?php echo __('All') ?></option>
			<?php foreach( $_productClasses as $_key => $_productClass): ?>								 
				<option value="<?php echo $_productClass ?>" >
					<?php echo PropertyCore::processProductClassificationValue($_productClass) ?>
				</option>						 
			<?php endforeach; ?>		
		</select>
	</li>	 
	<li class="">
		<input type="text" class="form-control ui-toolbar-input-xsm-2" id="product_keyword" name="product_keyword" >
	</li>	 
</ul>
</form>


<form action="<?php echo url_for('product/search') ?>" method="get" class="">
<ul class="nav navbar-nav ui-toolbar-action navbar-right"> 
	<li class="">
		<img class="ui-toolbar-filter-img" src="<?php echo image_path('icons/search') ?>">
	</li>	 
	<li class="ui-toolbar-sm-3">  
		<input type="text" class="form-control ui-toolbar-input-xsm-2" id="product_keyword" name="product_keyword" >
	</li>	
</ul>
 
</form>

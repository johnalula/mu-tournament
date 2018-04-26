
<form action="<?php echo url_for('sport_games/search') ?>" method="get" class="">
<ul class="nav navbar-nav ui-toolbar-action navbar-right"> 
	<li class="">
		<img class="ui-toolbar-filter-img" src="<?php echo image_path('icons/search') ?>">
	</li>	 
	<li class="ui-toolbar-sm-3">  
		<select id="category_id" name="category_id"  class="form-control ui-toolbar-input-xsm-2" title="<?php echo __('Sport Game Category') ?>">
			<option value="0"><?php echo __('All') ?></option>
			 
		</select>
	</li>	 
	<li class="ui-toolbar-sm-3">  
		<input type="text" class="form-control ui-toolbar-input-xsm-2" id="keyword" name="keyword" >
	</li>	
</ul>
 
</form>

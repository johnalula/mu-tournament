<ul class="nav navbar-nav ui-toolbar-action navbar-right"> 
	<li class="">
		<img class="ui-toolbar-filter-img" src="<?php echo image_path('icons/search') ?>">
	</li>	
	<li class="ui-toolbar-sm-2">  
		<select id="system_module_access_level_id" name="system_module_access_level_id" class="form-control ui-toolbar-input-xsm-2">
				<option value="0"><?php echo __('Select Grade') ?></option>
			<?php foreach(PermissionCore::processAccessLevels () as $_key => $_role): ?>								 
				<option value="<?php echo  $_key ?>" >
					<?php echo $_role ?>
				</option>								 
			<?php endforeach; ?>
		</select> 
	</li>	 
	<li class="ui-toolbar-sm-2">  
		<select id="system_module_access_level_id" name="system_module_access_level_id" class="form-control ui-toolbar-input-xsm-2">
				<option value="0"><?php echo __('Select Semester') ?></option>
			<?php foreach(PermissionCore::processAccessLevels () as $_key => $_role): ?>								 
				<option value="<?php echo  $_key ?>" >
					<?php echo $_role ?>
				</option>								 
			<?php endforeach; ?>
		</select> 
	</li>	 
	<li class="ui-toolbar-sm-2">  
		<input type="text" class="form-control ui-toolbar-input-xsm-2" id="candidate_enrollment_order_id" name="candidate_enrollment_order_id" >
	</li>	 
	
</ul>

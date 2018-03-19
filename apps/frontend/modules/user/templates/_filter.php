<ul class="nav navbar-nav ui-toolbar-action navbar-right"> 
	<li class="">
		<img class="ui-toolbar-filter-img" src="<?php echo image_path('icons/search') ?>">
	</li>	 
	<li class="ui-toolbar-sm-22">  
		<select id="system_module_access_level_id" name="system_module_access_level_id" class="form-control ui-toolbar-input-xsm-2">
			<option value="0"><?php echo __('Select Role')  ?></option>
			<?php foreach($_userRoles as $_key => $_userRole): ?>								 
				<option value="<?php echo  $_userRole ?>" >
					<?php echo UserCore::processUserRoleValue($_userRole)  ?>
				</option>								 
			<?php endforeach; ?>
		</select> 
	</li>	 
	<li class="ui-toolbar-sm-3">  
		<input type="text" class="form-control ui-toolbar-input-xsm-31" id="search_student" name="search_student" placeholder="Search" >
	</li>	 
	
</ul>

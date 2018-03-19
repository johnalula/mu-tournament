<div id="" class="navbar-collapse ui-toolbar">
	<ul class="nav navbar-nav ui-toolbar-action">
		<li class=""> 
			<img class="navbar-nav-img" src="<?php echo image_path('icons/key') ?>"> 
		</li>	
		<li class="">  
			<select id="system_module_access_level_id" name="system_module_access_level_id" class="form-control ui-toolbar-input-xsm-2">
					<option value="0"><?php echo __('Select Acc Level') ?></option>
				<?php foreach(PermissionCore::processAccessLevels () as $_key => $_role): ?>								 
					<option value="<?php echo  $_key ?>" >
						<?php echo $_role ?>
					</option>								 
				<?php endforeach; ?>
			</select> 
		</li>	 
		<li class="">
			<button id="applyUserRoleModuleAccessLevelPermission" class="ui-disabled-toolbar-btn" disabled >
				<img class="navbar-nav-img" src="<?php echo image_path('icons/accept') ?>">
				<?php echo __('Apply') ?>
			</button>
		</li>	
	</ul>
</div>

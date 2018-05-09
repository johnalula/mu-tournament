<ul class="nav navbar-nav ui-toolbar-action">
	<li class="">
		<a href="<?php echo url_for('employee/new') ?>" title="<?php echo __('Create New Employee') ?>" id="createNewEmployee" class="" >
			<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
			<?php echo __('New') ?>
		</a>
	</li>	  
	<li class="">
		<a href="<?php echo url_for('team/setup') ?>" title="<?php echo __('Create New Team') ?>" id="defaultTeam" class="" >
			<img class="navbar-nav-img" src="<?php echo image_path('icons/approved') ?>">
			<?php echo __('Activate Employee') ?>
		</a>
	</li>	 
</ul>

<ul class="nav navbar-nav ui-toolbar-action">
	<li class="">
		<a href="<?php echo url_for('tournament/new') ?>" title="<?php echo __('Create New Tournament') ?>" id="createNewTournament" class="" >
			<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
			<?php echo __('New') ?>
		</a>
	</li>	 
	<li class="">
		<a href="<?php echo url_for('tournament/setup') ?>" title="<?php echo __('Create New Tournament') ?>" id="setupTournament" class="" >
			<img class="navbar-nav-img" src="<?php echo image_path('settings/gear') ?>">
			<?php echo __('Setup') ?>
		</a>
	</li>	 
	<li class="">
		<a href="<?php echo url_for('tournament/setup') ?>" title="<?php echo __('Create New Tournament') ?>" id="defaultTournament" class="" >
			<img class="navbar-nav-img" src="<?php echo image_path('status/default') ?>">
			<?php echo __('Default Setting') ?>
		</a>
	</li>	 
</ul>

<ul class="nav navbar-nav ui-toolbar-action">
	<li class="">
		<a href="<?php echo url_for('game_category/new') ?>" title="<?php echo __('Create New Game Category') ?>" id="createNewGameCategory" class="" >
			<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
			<?php echo __('New') ?>
		</a>
	</li>	 
	<li class="">
		<a href="<?php echo url_for('game_category/index') ?>" title="<?php echo __('Create New Game Category') ?>" id="newGameCategory" class="" >
			<img class="navbar-nav-img" src="<?php echo image_path('settings/gear') ?>">
			<?php echo __('Categories') ?>
		</a>
	</li>	 
	<li class="">
		<a href="<?php echo url_for('team/setup') ?>" title="<?php echo __('Create New Team') ?>" id="defaultTeam" class="" >
			<img class="navbar-nav-img" src="<?php echo image_path('status/default') ?>">
			<?php echo __('Default Setting') ?>
		</a>
	</li>	 
</ul>

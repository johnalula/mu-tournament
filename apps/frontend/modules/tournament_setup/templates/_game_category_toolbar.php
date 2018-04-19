<ul class="nav navbar-nav ui-toolbar-action">
	<li class="">
		<a href="<?php echo url_for('game_category/new') ?>" title="<?php echo __('Create New Game Category') ?>" id="createGameCategory" class="" >
			<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
			<?php echo __('New') ?>
		</a>
	</li>	 
	<li class="">
		<a href="<?php echo url_for('sport_games/new') ?>" title="<?php echo __('Create New Game Category') ?>" id="newGameCategory" class="" >
			<img class="navbar-nav-img" src="<?php echo image_path('icons/component') ?>">
			<?php echo __('Sport Games') ?>
		</a>
	</li>	 
</ul>

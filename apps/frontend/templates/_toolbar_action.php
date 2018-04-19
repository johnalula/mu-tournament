<div id="" class="navbar-collapse ui-toolbar">
	<ul class="nav navbar-nav ui-toolbar-action">
	
	<!-- ************ Sport Games ********************** -->
		<?php if($sf_user->canAdd(ModuleCore::$_SPORT_GAME)): ?>	
			<?php if($sf_request->getParameter('module') == 'sport_games' ): ?>
				 
				<?php if($sf_request->getParameter('action') == 'index'): ?>
					<li class="">
						<a href="<?php echo url_for('sport_games/new') ?>" title="<?php echo __('Add New Sport Game') ?>" id="addNewSportGame" class="" >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
							<?php echo __('New') ?>
						</a>
					</li>
				<?php endif; ?>
				<?php if($sf_request->getParameter('action') == 'new'): ?>
					<li class="">
						<button title="<?php echo __('Save Sport Game Information') ?>" id="createTournamentSportGame" class="ui-disabled-toolbar-btn" disabled >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
							<?php echo __('Save') ?>
						</button>
					</li>	
					<li class="">
						<button title="<?php echo __('Cancel Sport Game Information') ?>" id="cancelTournamentSportGame" class="ui-disabled-toolbar-btn" disabled>
							<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
							<?php echo __('Cancel') ?>
						</button>
					</li>
					<li class="">
						<a href="<?php echo url_for('sport_games/index') ?>" title="<?php echo __('Back to Sport Game List') ?>" id="backToSportGame" class="" >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/details') ?>">
							<?php echo __('List') ?>
						</a>
					</li>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
		 
	</ul>
</div>


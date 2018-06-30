<ul class="nav navbar-nav ui-toolbar-action">
			 
	<?php if($sf_request->getParameter('module') == 'tournament_fixture'): ?>
		<?php if(($sf_request->getParameter('match_fixture_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
			<?php if($sf_request->getParameter('action') == 'result'): ?>
				<li class="">
					<button title="<?php echo __('Save Match Fixture Information') ?>" id="createTournamentMatchFixtureResult" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel Match Fixture Information') ?>" id="cancelTournamentMatchFixtureResult" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li> 
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>
</ul>

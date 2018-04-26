<div id="" class="navbar-collapse ui-toolbar">
	<ul class="nav navbar-nav ui-toolbar-action">
		
		<?php if($sf_request->getParameter('module') == 'match'): ?>
			<?php if($sf_request->getParameter('action') == 'new'): ?>
				<li class="">
					<button title="<?php echo __('Save Match Information') ?>" id="createTournamentMatch" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel Match Information') ?>" id="cancelTournamentMatch" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li>
				<li class="">
					<a href="<?php echo url_for('match/index') ?>" title="<?php echo __('Back to Match List') ?>" id="backToMatchList" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('settings/to_do_list') ?>">
						<?php echo __('List') ?>
					</a>
				</li>	 
			<?php endif; ?>

			<?php if(($sf_request->getParameter('match_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
				<?php if($sf_request->getParameter('action') == 'edit'): ?>
					<li class="">
						<a href="<?php echo url_for('match/index') ?>" title="<?php echo __('Create New Team') ?>" id="createNewTeam" class="" >
							<img class="navbar-nav-img" src="<?php echo image_path('pagination/previous_page') ?>">
							<?php echo __('Back') ?>
						</a>
					</li>	  
					<li class="">
						<button title="<?php echo __('Update Match Information') ?>" id="updateTournamentMatch" class="ui-disabled-toolbar-btn" disabled >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/update') ?>">
							<?php echo __('Update') ?>
						</button>
					</li>	
					<li class="">
						<button title="<?php echo __('Cancel Match Information') ?>" id="cancelTournamentMatch" class="ui-disabled-toolbar-btn" disabled>
							<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
							<?php echo __('Cancel') ?>
						</button>
					</li> 
				<?php endif; ?>
			<?php endif; ?>
		
			<?php if(($sf_request->getParameter('match_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
				<?php if($sf_request->getParameter('action') == 'fixture'): ?>
					<li class="">
						<button title="<?php echo __('Save Match Fixture Information') ?>" id="createTournamentMatchFixture" class="ui-disabled-toolbar-btn" disabled >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
							<?php echo __('Save') ?>
						</button>
					</li>	
					<li class="">
						<button title="<?php echo __('Cancel Match Fixture Information') ?>" id="cancelTournamentMatchFixture" class="ui-disabled-toolbar-btn" disabled>
							<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
							<?php echo __('Cancel') ?>
						</button>
					</li>
					<li class="">
						<a href="<?php echo url_for('match/index') ?>" title="<?php echo __('Back to Match List') ?>" id="backToMatchList" class="" >
							<img class="navbar-nav-img" src="<?php echo image_path('settings/to_do_list') ?>">
							<?php echo __('List') ?>
						</a>
					</li>	 
				<?php endif; ?>
			<?php endif; ?>
			
			<?php if(($sf_request->getParameter('match_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
				<?php if($sf_request->getParameter('action') == 'participant_team'): ?> 
					<li class="">
						<button title="<?php echo __('Save Match Participant Team Information') ?>" id="createTournamentMatchParticipantTeam" class="ui-disabled-toolbar-btn" disabled >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
							<?php echo __('Save') ?>
						</button>
					</li>	
					<li class="">
						<button title="<?php echo __('Cancel Match Participant Team Information') ?>" id="cancelTournamentMatchParticipantTeam" class="ui-disabled-toolbar-btn" disabled>
							<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
							<?php echo __('Cancel') ?>
						</button>
					</li>
				<?php endif; ?>
			<?php endif; ?>
			
			<?php if(($sf_request->getParameter('match_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
				<?php if($sf_request->getParameter('action') == 'participant'): ?> 
					<li class="">
						<button title="<?php echo __('Save Match Participant Information') ?>" id="createTournamentMatchParticipant" class="ui-disabled-toolbar-btn" disabled >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
							<?php echo __('Save') ?>
						</button>
					</li>	
					<li class="">
						<button title="<?php echo __('Cancel Match Participant Team Information') ?>" id="cancelTournamentMatchParticipant" class="ui-disabled-toolbar-btn" disabled>
							<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
							<?php echo __('Cancel') ?>
						</button>
					</li>
				<?php endif; ?>
			<?php endif; ?>
			
		<?php endif; ?> 
		
	</ul>
</div>

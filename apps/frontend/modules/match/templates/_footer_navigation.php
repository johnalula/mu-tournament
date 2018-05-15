<ul class="nav navbar-nav ui-toolbar-action " style="margin-left:10px!important;">
	
	<?php if($sf_request->getParameter('module') == 'match'): ?>
		<?php if($sf_request->getParameter('action') == 'new'): ?>
			<li class="ui-nav-button">
				<a href="<?php echo url_for('match/index') ?>" title="<?php echo __('Back to Team List') ?>" id="" class="ui-nav-active-btn" >
					<img class="navbar-nav-img" src="<?php echo image_path('pagination/previous_page') ?>">
					<?php echo __('Back') ?>
				</a>
			</li>	  
		<?php endif; ?>
		
		<?php if(($sf_request->getParameter('match_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
			<?php if($sf_request->getParameter('action') == 'edit'): ?>
				<li class="ui-nav-button">
					<a href="<?php echo url_for('match/new') ?>" title="<?php echo __('Create New Team') ?>" id="createNewTeam" class="ui-nav-active-btn" >
						<img class="navbar-nav-img" src="<?php echo image_path('pagination/previous_page') ?>">
						<?php echo __('Back') ?>
					</a>
				</li>	  
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if(($sf_request->getParameter('match_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
			<?php if($sf_request->getParameter('action') == 'fixture'): ?>
				<li class="ui-nav-button">
					<a class="ui-nav-active-btn" href="<?php echo url_for(ModuleCore::makeModuleURLAction('match', 'match_id', 'edit', $_object)) ?>">
						<img class="navbar-nav-img" src="<?php echo image_path('pagination/previous_page') ?>">
						<?php echo __('Back') ?>
					</a>
				</li>	  
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if(($sf_request->getParameter('match_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
			<?php if($sf_request->getParameter('action') == 'participant_team'): ?>
				<li class="ui-nav-button">
					<a class="ui-nav-active-btn" href="<?php echo url_for(ModuleCore::makeModuleURLAction('match', 'match_id', 'fixture', $_object)) ?>">
						<img class="navbar-nav-img" src="<?php echo image_path('pagination/previous_page') ?>">
						<?php echo __('Back') ?>
					</a>
				</li>	   
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if(($sf_request->getParameter('match_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
			<?php if($sf_request->getParameter('action') == 'participant'): ?>
				<li class="ui-nav-button">
					<a class="ui-nav-active-btn" href="<?php echo url_for(ModuleCore::makeModuleURLAction('match', 'match_id', 'participant_team', $_object)) ?>">
						<img class="navbar-nav-img" src="<?php echo image_path('pagination/previous_page') ?>">
						<?php echo __('Back') ?>
					</a>
				</li>	   
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if(($sf_request->getParameter('match_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
			<?php if($sf_request->getParameter('action') == 'complete'): ?>
				<li class="ui-nav-button">
					<a class="ui-nav-active-btn" href="<?php echo url_for(ModuleCore::makeModuleURLAction('match', 'match_id', 'participant', $_object)) ?>">
						<img class="navbar-nav-img" src="<?php echo image_path('pagination/previous_page') ?>">
						<?php echo __('Back') ?>
					</a>
				</li>	   
			<?php endif; ?>
		<?php endif; ?>
		
	<?php endif; ?> 
	
</ul>

<!--    ********** Right Navigation *********** -->
<ul class="nav navbar-nav ui-toolbar-action  navbar-right" style="margin-right:10px!important;">
	
	<?php if($sf_request->getParameter('module') == 'match'): ?>
		
		<?php if(($sf_request->getParameter('match_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
			<?php if($sf_request->getParameter('action') == 'edit'): ?>
				<li class="ui-nav-button">
					<a class="ui-nav-active-btn" href="<?php echo url_for(ModuleCore::makeModuleURLAction('match', 'match_id', 'fixture', $_object)) ?>">
						<img class="navbar-nav-img" src="<?php echo image_path('pagination/next_page') ?>">
						<?php echo __('Next') ?>
					</a>
				</li>	 
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if(($sf_request->getParameter('match_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
			<?php if($sf_request->getParameter('action') == 'fixture'): ?>
				<?php if($_object->hasTournamentMatchFixtures ): ?>
					<li class="ui-nav-button">
						<a class="ui-nav-active-btn" href="<?php echo url_for(ModuleCore::makeModuleURLAction('match', 'match_id', 'participant_team', $_object)) ?>">
							<img class="navbar-nav-img" src="<?php echo image_path('pagination/next_page') ?>">
							<?php echo __('Next') ?>
						</a>
					</li>	  
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if(($sf_request->getParameter('match_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
			<?php if($sf_request->getParameter('action') == 'participant_team'): ?>
				<li class="ui-nav-button " style="margin-right:5px!important;">
					<a class="ui-nav-active-btn" href="<?php echo url_for(ModuleCore::makeModuleURLAction('match', 'match_id', 'complete', $_object)) ?>">
						<img class="navbar-nav-img" src="<?php echo image_path('pagination/skip') ?>">
						<?php echo __('Skip') ?>
					</a>
				</li>	 
				<li class="ui-nav-button ">
					<a class="ui-nav-active-btn" href="<?php echo url_for(ModuleCore::makeModuleURLAction('match', 'match_id', 'participant', $_object)) ?>">
						<img class="navbar-nav-img" src="<?php echo image_path('pagination/next_page') ?>">
						<?php echo __('Next') ?>
					</a>
				</li>	 
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if(($sf_request->getParameter('match_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
			<?php if($sf_request->getParameter('action') == 'participant'): ?>
				<li class="ui-nav-button ">
					<a class="ui-nav-active-btn" href="<?php echo url_for(ModuleCore::makeModuleURLAction('match', 'match_id', 'complete', $_object)) ?>">
						<img class="navbar-nav-img" src="<?php echo image_path('pagination/next_page') ?>">
						<?php echo __('Next') ?>
					</a>
				</li>	 
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if(($sf_request->getParameter('match_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
			<?php if($sf_request->getParameter('action') == 'complete'): ?>
				<?php if($_object->pendingApprovalTournamentMatch && $_object->pendingTournamentMatch && !$_object->activeFlag ): ?>
					<li class="ui-nav-button ">
						<button id="approveTournamentMatch"  class="ui-nav-active-btn"  title="<?php echo __('Complete Team Grouping').' ( Name: '.$_object->gameCategoryName.' - Code #: '.$_object->matchNumber.' )' ?>">
							<img class="navbar-nav-img" src="<?php echo image_path('status/approved') ?>">
							<?php echo __('Approve') ?>
						</button> 
					</li>	 
				<?php endif; ?>
				<?php if($_object->activeApprovalTournamentMatch && $_object->activeTournamentMatch && !$_object->activeFlag ): ?>
					<li class="ui-nav-button ">
						<button id="completeTournamentMatch"  class="ui-nav-active-btn"  title="<?php echo __('Complete Team Grouping').' ( Name: '.$_object->gameCategoryName.' - Code #: '.$_object->matchNumber.' )' ?>">
							<img class="navbar-nav-img" src="<?php echo image_path('status/approved') ?>">
							<?php echo __('Complete') ?>
						</button> 
					</li>	 
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
		
	<?php endif; ?> 
	
</ul>

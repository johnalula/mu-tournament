<ul class="nav navbar-nav ui-toolbar-action " style="margin-left:10px!important;">
	
	<?php if($sf_request->getParameter('module') == 'team_group'): ?>
		<?php if($sf_request->getParameter('action') == 'new'): ?>
			<li class="ui-nav-button">
				<a href="<?php echo url_for('team_group/index') ?>" title="<?php echo __('Back to Team List') ?>" id="" class="ui-nav-active-btn" >
					<img class="navbar-nav-img" src="<?php echo image_path('pagination/previous_page') ?>">
					<?php echo __('Back') ?>
				</a>
			</li>	  
		<?php endif; ?>
		
		<?php if(($sf_request->getParameter('team_group_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
			<?php if($sf_request->getParameter('action') == 'edit'): ?>
				<li class="ui-nav-button">
					<a href="<?php echo url_for('team_group/new') ?>" title="<?php echo __('Back to Previous') ?>" id="" class="ui-nav-active-btn" >
						<img class="navbar-nav-img" src="<?php echo image_path('pagination/previous_page') ?>">
						<?php echo __('Back') ?>
					</a>
				</li>	  
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if(($sf_request->getParameter('team_group_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
			<?php if($sf_request->getParameter('action') == 'category'): ?>
				<li class="ui-nav-button">
					<a class="ui-nav-active-btn" href="<?php echo url_for(ModuleCore::makeModuleURLAction('team_group', 'team_group_id', 'edit', $_object)) ?>">
						<img class="navbar-nav-img" src="<?php echo image_path('pagination/previous_page') ?>">
						<?php echo __('Back') ?>
					</a>
				</li>	  
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if(($sf_request->getParameter('team_group_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
			<?php if($sf_request->getParameter('action') == 'member'): ?>
				<li class="ui-nav-button">
					<a class="ui-nav-active-btn" href="<?php echo url_for(ModuleCore::makeModuleURLAction('team_group', 'team_group_id', 'category', $_object)) ?>">
						<img class="navbar-nav-img" src="<?php echo image_path('pagination/previous_page') ?>">
						<?php echo __('Back') ?>
					</a>
				</li>	  
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if(($sf_request->getParameter('team_group_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
			<?php if($sf_request->getParameter('action') == 'participant'): ?>
				<li class="ui-nav-button">
					<a class="ui-nav-active-btn" href="<?php echo url_for(ModuleCore::makeModuleURLAction('team_group', 'team_group_id', 'member', $_object)) ?>">
						<img class="navbar-nav-img" src="<?php echo image_path('pagination/previous_page') ?>">
						<?php echo __('Back') ?>
					</a>
				</li>	   
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if(($sf_request->getParameter('team_group_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
			<?php if($sf_request->getParameter('action') == 'complete'): ?>
				<li class="ui-nav-button">
					<a class="ui-nav-active-btn" href="<?php echo url_for(ModuleCore::makeModuleURLAction('team_group', 'team_group_id', 'participant', $_object)) ?>">
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
	
	<?php if($sf_request->getParameter('module') == 'team_group'): ?>
		
		<?php if(($sf_request->getParameter('team_group_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
			<?php if($sf_request->getParameter('action') == 'edit'): ?>
				<li class="ui-nav-button">
					<a class="ui-nav-active-btn" href="<?php echo url_for(ModuleCore::makeModuleURLAction('team_group', 'team_group_id', 'category', $_object)) ?>">
						<img class="navbar-nav-img" src="<?php echo image_path('pagination/next_page') ?>">
						<?php echo __('Next') ?>
					</a>
				</li>	 
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if(($sf_request->getParameter('team_group_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
			<?php if($sf_request->getParameter('action') == 'category'): ?>
				<li class="ui-nav-button">
					<a class="ui-nav-active-btn" href="<?php echo url_for(ModuleCore::makeModuleURLAction('team_group', 'team_group_id', 'member', $_object)) ?>">
						<img class="navbar-nav-img" src="<?php echo image_path('pagination/next_page') ?>">
						<?php echo __('Next') ?>
					</a>
				</li>	 
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if(($sf_request->getParameter('team_group_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
			<?php if($sf_request->getParameter('action') == 'member'): ?>
				<li class="ui-nav-button">
					<a class="ui-nav-active-btn" href="<?php echo url_for(ModuleCore::makeModuleURLAction('team_group', 'team_group_id', 'complete', $_object)) ?>">
						<img class="navbar-nav-img" src="<?php echo image_path('icons/skip') ?>">
						<?php echo __('Skip') ?>
					</a>
				</li>	 
				<li class="ui-nav-button">
					<a class="ui-nav-active-btn" href="<?php echo url_for(ModuleCore::makeModuleURLAction('team_group', 'team_group_id', 'participant', $_object)) ?>">
						<img class="navbar-nav-img" src="<?php echo image_path('pagination/next_page') ?>">
						<?php echo __('Next') ?>
					</a>
				</li>	 
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if(($sf_request->getParameter('team_group_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
			<?php if($sf_request->getParameter('action') == 'participant'): ?>
				<li class="ui-nav-button">
					<a class="ui-nav-active-btn" href="<?php echo url_for(ModuleCore::makeModuleURLAction('team_group', 'team_group_id', 'complete', $_object)) ?>">
						<img class="navbar-nav-img" src="<?php echo image_path('pagination/next_page') ?>">
						<?php echo __('Next') ?>
					</a>
				</li>	 
			<?php endif; ?>
		<?php endif; ?>
		<?php if(($sf_request->getParameter('team_group_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
			<?php if($sf_request->getParameter('action') == 'complete'): ?>
				<?php if($_object->pendingTeamGroup && $_object->pendingApprovalTeamGroup && !$_object->activeFlag ): ?>
					<li class="ui-nav-button ">
						<button id="footerApproveTeamGrouping"  class="ui-nav-active-btn"  title="<?php echo __('Complete Team Grouping').' ( Name: '.$_object->gameCategoryName.' - Code #: '.$_object->tournamentGroupFullCode.' )' ?>">
							<img class="navbar-nav-img" src="<?php echo image_path('status/approved') ?>">
							<?php echo __('Approve') ?>
						</button> 
					</li>	 
				<?php endif; ?>
				<?php if($_object->activeTeamGroup && $_object->activeApprovalTeamGroup && $_object->activeFlag ): ?>
					<li class="ui-nav-button ">
						<button id="footerCompleteTeamGrouping"  class="ui-nav-active-btn"  title="<?php echo __('Complete Team Grouping').' ( Name: '.$_object->gameCategoryName.' - Code #: '.$_object->tournamentGroupFullCode.' )' ?>">
								<img class="navbar-nav-img" src="<?php echo image_path('status/approved') ?>">
								<?php echo __('Complete') ?>
							</button> 
					</li>	 
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
		
	<?php endif; ?> 
	
</ul>

<div id="" class="navbar-collapse ui-toolbar">
	<ul class="nav navbar-nav ui-toolbar-action">
	
	<!-- ************ Account Chart Management ********************** -->
		
		<?php if($sf_request->getParameter('module') == 'team_group' ): ?>
			 
			<?php if($sf_request->getParameter('action') == 'index'): ?>
				<li class="">
					<a href="<?php echo url_for('team_group/new') ?>" title="<?php echo __('Add New Tournament Team Group') ?>" id="addTournamentTeamGRoup" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
						<?php echo __('New') ?>
					</a>
				</li> 
			<?php endif; ?>
			
			<?php if($sf_request->getParameter('action') == 'view'): ?>
				<li class="">
					<a href="<?php echo url_for('team_group/new') ?>" title="<?php echo __('Add New Tournament Team Group') ?>" id="addTournamentTeamGRoup" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
						<?php echo __('New') ?>
					</a>
				</li> 
				<li class="">
					<a href="<?php echo url_for('team_group/new') ?>" title="<?php echo __('Add New Tournament Team Group') ?>" id="addTournamentTeamGRoup" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
						<?php echo __('List') ?>
					</a>
				</li> 
			<?php endif; ?>
			
			<?php if($sf_request->getParameter('action') == 'new'): ?>
				<li class="">
					<button title="<?php echo __('Save Team Group Information') ?>" id="createTournamentTeamGroup" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel Team Group Information') ?>" id="cancelTournamentTeamGroup" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li>
				<li class="">
					<a href="<?php echo url_for('team_group/index') ?>" title="<?php echo __('Back to Team Group List') ?>" id="backToSportGame" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/details') ?>">
						<?php echo __('List') ?>
					</a>
				</li>
			<?php endif; ?>
			
			<?php if($sf_request->getParameter('action') == 'edit'): ?>
				<li class="">
					<button title="<?php echo __('Save Team Group Information') ?>" id="updateTeamGroup" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/update') ?>">
						<?php echo __('Update') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel Team Group Information') ?>" id="cancelTeamGroup" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li>
				<li class="">
					<a href="<?php echo url_for('team_group/index') ?>" title="<?php echo __('Back to Team Group List') ?>" id="backToSportGame" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/details') ?>">
						<?php echo __('List') ?>
					</a>
				</li>
			<?php endif; ?>
			
			<?php if($sf_request->getParameter('action') == 'category'): ?>
				<li class="">
					<button title="<?php echo __('Save Team Group Member Information') ?>" id="createTeamGroup" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel Team Group Member Information') ?>" id="cancelTeamGroup" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li>
				<li class="">
					<a href="<?php echo url_for('team_group/index') ?>" title="<?php echo __('Back to Team Group List') ?>" id="backToSportGame" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/details') ?>">
						<?php echo __('List') ?>
					</a>
				</li>
			<?php endif; ?>
			
			<?php if($sf_request->getParameter('action') == 'member'): ?>
				<li class="">
					<button title="<?php echo __('Save Team Group Member Information') ?>" id="createGroupParticipantTeam" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel Team Group Member Information') ?>" id="cancelGroupParticipantTeam" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li>
				<li class="">
					<a href="<?php echo url_for('team_group/index') ?>" title="<?php echo __('Back to Team Group List') ?>" id="backToSportGame" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/details') ?>">
						<?php echo __('List') ?>
					</a>
				</li>
			<?php endif; ?>
			
			<?php if($sf_request->getParameter('action') == 'participant'): ?>
				<li class="">
					<button title="<?php echo __('Save Team Group Member Participant Information') ?>" id="createGroupTeamParticipantMember" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	 
				<li class="">
					<button title="<?php echo __('Add Team Group Member Participant Information') ?>" id="createBatchGroupTeamParticipantMember" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
						<?php echo __('Batch Participant') ?>
					</button>
				</li>	 
				<li class="">
					<button title="<?php echo __('Cancel Team Group Member Participant Information') ?>" id="cancelGroupTeamParticipantMember" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li>
				<li class="">
					<a href="<?php echo url_for('team_group/index') ?>" title="<?php echo __('Back to Team Group List') ?>" id="backToSportGame" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/details') ?>">
						<?php echo __('List') ?>
					</a>
				</li>
			<?php endif; ?>
			
			<?php if($sf_request->getParameter('action') == 'complete'): ?>
				<li class="">
					<button title="<?php echo __('Save Team Group Member Participant Information') ?>" id="completeTeamGroupMemberParticipant" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('status/approved') ?>">
						<?php echo __('Approve') ?>
					</button>
				</li>	 
				<li class="">
					<button title="<?php echo __('Save Team Group Member Participant Information') ?>" id="completeTeamGroupMemberParticipant" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('status/apply') ?>">
						<?php echo __('Complete') ?>
					</button>
				</li>	 
				<li class="">
					<a href="<?php echo url_for('team_group/index') ?>" title="<?php echo __('Back to Team Group List') ?>" id="backToSportGame" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/details') ?>">
						<?php echo __('List') ?>
					</a>
				</li>
			<?php endif; ?>
			 
		<?php endif; ?>
		 
	</ul>
</div>


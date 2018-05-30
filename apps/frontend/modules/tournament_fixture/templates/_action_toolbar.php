 
	<ul class="nav navbar-nav ui-toolbar-action">
	
	<!-- ************ Account Chart Management ********************** -->
		
		<?php if($sf_request->getParameter('module') == 'tournament_fixture' ): ?>
			
			<?php if($sf_request->getParameter('action') == 'result'): ?> 
				<li class="">
					<a href="<?php echo url_for('tournament_award/edit_medal_award') ?>" title="<?php echo __('Add New Tournament Team Group') ?>" id="addTournamentTeamGRoup" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</a>
				</li>    
				<li class="">
					<button title="<?php echo __('Generate Tournament Match Participant Medal Award Standing Information') ?>" id="generateTournamentMedalAwardStanding" class=""  >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Generate Rank') ?>
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


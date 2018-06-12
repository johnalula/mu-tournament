<ul class="nav navbar-nav ui-toolbar-action">
	<li class="">
		<a href="<?php echo url_for('team/new') ?>" title="<?php echo __('Create New Team') ?>" id="createNewTeam" class="" >
			<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
			<?php echo __('New') ?>
		</a>
	</li>	  
	<?php if(count($_participantTeams) <= 0): ?>
		<li class="">
			<button title="<?php echo __('Generate Tournament Match Participant Medal Award Standing Information') ?>" id="generateTournamentMedalAwardStanding" class=""  >
				<img class="navbar-nav-img" src="<?php echo image_path('settings/target_large') ?>">
				<?php echo __('Generate Participants') ?>
			</button>
		</li>	  
	<?php endif; ?>
</ul>

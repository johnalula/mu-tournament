<ul class="nav navbar-nav ui-toolbar-action">
			 
	<?php if($sf_request->getParameter('action') == 'index'): ?>
		<li class="">
			<a href="<?php echo url_for('team_group/new') ?>" title="<?php echo __('Add New Tournament Team Group') ?>" id="addTournamentTeamGRoup" class="" >
				<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
				<?php echo __('New') ?>
			</a>
		</li> 
	<?php endif; ?>
	
	<?php if($sf_request->getParameter('action') == 'new'): ?>
		<li class="">
			<button title="<?php echo __('Save Team Group Member Information') ?>" id="createBatchGroupParticipantTeam" class="ui-disabled-toolbar-btn" disabled >
				<img class="navbar-nav-img" src="<?php echo image_path('icons/del') ?>">
				<?php echo __('Delete') ?>
			</button>
		</li>	
		<li class="">
			<button title="<?php echo __('Cancel Team Group Member Information') ?>" id="cancelGroupParticipantTeam" class="ui-disabled-toolbar-btn" disabled>
				<img class="navbar-nav-img" src="<?php echo image_path('status/approved') ?>">
				<?php echo __('Confirm') ?>
			</button>
		</li> 
	<?php endif; ?>
	
	 
</ul>

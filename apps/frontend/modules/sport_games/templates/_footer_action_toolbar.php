<ul class="nav navbar-nav ui-toolbar-action">
			 
	<?php if($sf_request->getParameter('action') == 'index'): ?>
		<li class="">
			<a href="<?php echo url_for('team_group/new') ?>" title="<?php echo __('Add New Tournament Team Group') ?>" id="addTournamentTeamGRoup" class="" >
				<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
				<?php echo __('New') ?>
			</a>
		</li> 
	<?php endif; ?>
	
	<?php if($sf_request->getParameter('action') == 'category'): ?>
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
	
	<?php if($sf_request->getParameter('action') == 'member'): ?>
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
	
	<?php if($sf_request->getParameter('action') == 'participant'): ?>
		<li class="">
			<a href="#" title="<?php echo __('Back to Team Group List') ?>" id="deleteTournamentGroupParticipants" class="" >
				<img class="navbar-nav-img" src="<?php echo image_path('icons/del') ?>">
				<?php echo __('Delete') ?>
			</a>
		</li>
		<li class="">
			<a href="#" title="<?php echo __('Back to Team Group List') ?>" id="confirmournamentGroupParticipants" class="" >
				<img class="navbar-nav-img" src="<?php echo image_path('status/approved') ?>">
				<?php echo __('Confirm') ?>
			</a>
		</li>
		<li class="">
			<select id="product_class_id" name="product_class_id"  class="form-control ui-toolbar-input-xsm-2" title="<?php echo __('Product Category Classification') ?>">
				<option value="0"><?php echo __('All') ?></option>
				<?php foreach( $_productClasses as $_key => $_productClass): ?>								 
					<option value="<?php echo $_productClass ?>" >
						<?php echo PropertyCore::processProductClassificationValue($_productClass) ?>
					</option>						 
				<?php endforeach; ?>		
			</select>
		</li>
	<?php endif; ?>
	
	<?php if($sf_request->getParameter('action') == 'view'): ?>
		<li class="">
			<a href="#" title="<?php echo __('Back to Team Group List') ?>" id="deleteTournamentGroupParticipants" class="" >
				<img class="navbar-nav-img" src="<?php echo image_path('icons/del') ?>">
				<?php echo __('Delete') ?>
			</a>
		</li> 
		<li class="">
			<a href="#" title="<?php echo __('Back to Team Group List') ?>" id="confirmournamentGroupParticipants" class="" >
				<img class="navbar-nav-img" src="<?php echo image_path('status/approved') ?>">
				<?php echo __('Confirm') ?>
			</a>
		</li>
		<li class="">
			<select id="product_class_id" name="product_class_id"  class="form-control ui-toolbar-input-xsm-2" title="<?php echo __('Product Category Classification') ?>">
				<option value="0"><?php echo __('All') ?></option>
				<?php foreach( $_productClasses as $_key => $_productClass): ?>								 
					<option value="<?php echo $_productClass ?>" >
						<?php echo PropertyCore::processProductClassificationValue($_productClass) ?>
					</option>						 
				<?php endforeach; ?>		
			</select>
		</li>
	<?php endif; ?>
</ul>

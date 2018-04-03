<div id="" class="navbar-collapse ui-toolbar">
	<ul class="nav navbar-nav ui-toolbar-action">
	
	<!-- ************ Account Chart Management ********************** -->
		<li class="">
			<button title="<?php echo __('Save Team Member Information') ?>" id="createTeamMember" class="ui-disabled-toolbar-btn" disabled >
				<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
				<?php echo __('Save') ?>
			</button>
		</li>	
		<li class="">
			<button title="<?php echo __('Cancel Team Member Information') ?>" id="cancelTeamMember" class="ui-disabled-toolbar-btn" disabled>
				<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
				<?php echo __('Cancel') ?>
			</button>
		</li>
		<li class="">
			<a href="<?php echo url_for('team/index') ?>" title="<?php echo __('Back to Team List') ?>" id="backToTeam" class="" >
				<img class="navbar-nav-img" src="<?php echo image_path('icons/details') ?>">
				<?php echo __('List') ?>
			</a>
		</li>
		 
	</ul>
</div>


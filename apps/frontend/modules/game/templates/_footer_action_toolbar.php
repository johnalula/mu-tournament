<div id="" class="navbar-collapse ui-toolbar">
	<ul class="nav navbar-nav ui-toolbar-action">
	
	<!-- ************ Account Chart Management ********************** -->
		
		<?php if($sf_request->getParameter('module') == 'team' ): ?>
			 
			<?php if($sf_request->getParameter('action') == 'new'): ?>
				<li class="">
					<button title="<?php echo __('Save Team Information') ?>" id="createTeamFooter" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel Team Information') ?>" id="cancelTeamFooter" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li>
			<?php endif; ?>
			 
		<?php endif; ?>
		 
	</ul>
</div>


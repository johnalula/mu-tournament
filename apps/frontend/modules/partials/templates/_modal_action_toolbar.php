<div id="" class="navbar-collapse ui-toolbar">
	<ul class="nav navbar-nav ui-toolbar-action">
	
	<!-- ************ Account Chart Management ********************** -->
		 <?php if($sf_request->getParameter('module') == 'team_group' ): ?>
			<li class="">
				<button title="<?php echo __('Save Team Group Member Information') ?>" id="insertCandidateModalData" class="ui-toolbar-btn"  >
					<img class="navbar-nav-img" src="<?php echo image_path('icons/upload') ?>">
					<?php echo __('Insert') ?>
				</button>
			</li>	
		 <?php if($sf_request->getParameter('action') == 'member' ): ?>
			<li class="">
				<button title="<?php echo __('Add All Data Information') ?>" id="createMultipleCandidateModalData" class=""  >
					<img class="navbar-nav-img" src="<?php echo image_path('icons/upload_all') ?>">
					<?php echo __('Add All') ?>
				</button>
			</li>	
		<?php endif; ?>
			<li class="">
				<button title="<?php echo __('Cancel Modal Information') ?>" id="cancelTeamGroupMember" class=""  data-dismiss="modal">
					<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
					<?php echo __('Cancel') ?>
				</button>
			</li>   
		<?php endif; ?>
		
		 <?php if($sf_request->getParameter('module') == 'team' ): ?>
			<li class="">
				<button title="<?php echo __('Save Team Group Member Information') ?>" id="insertCandidateModalData" class="ui-toolbar-btn"  >
					<img class="navbar-nav-img" src="<?php echo image_path('icons/upload') ?>">
					<?php echo __('Insert') ?>
				</button>
			</li>	
			<li class="">
				<button title="<?php echo __('Cancel Modal Information') ?>" id="cancelTeamGroupMember" class=""  data-dismiss="modal">
					<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
					<?php echo __('Cancel') ?>
				</button>
			</li>   
		<?php endif; ?>
		
	<!-- ************ Tournament Match Fixtures ********************** -->
	
		 <?php if($sf_request->getParameter('module') == 'match' ): ?>
			<li class="">
				<button title="<?php echo __('Save Team Group Member Information') ?>" id="insertCandidateModalData" class="ui-toolbar-btn"  >
					<img class="navbar-nav-img" src="<?php echo image_path('icons/upload') ?>">
					<?php echo __('Insert') ?>
				</button>
			</li>	
		 <?php if($sf_request->getParameter('action') == 'member' ): ?>
			<li class="">
				<button title="<?php echo __('Add All Data Information') ?>" id="createMultipleCandidateModalData" class=""  >
					<img class="navbar-nav-img" src="<?php echo image_path('icons/upload_all') ?>">
					<?php echo __('Add All') ?>
				</button>
			</li>	
		<?php endif; ?>
		 <?php if($sf_request->getParameter('action') == 'participant_team' ): ?>
			<li class="">
				<button title="<?php echo __('Add All Data Information') ?>" id="createMultipleCandidateModalData" class="" disabled >
					<img class="navbar-nav-img" src="<?php echo image_path('icons/upload_all') ?>">
					<?php echo __('Add All') ?>
				</button>
			</li>	
		<?php endif; ?>
			<li class="">
				<button title="<?php echo __('Cancel Modal Information') ?>" id="cancelTeamGroupMember" class=""  data-dismiss="modal">
					<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
					<?php echo __('Cancel') ?>
				</button>
			</li>   
		<?php endif; ?>
		 
		
		  
		
	</ul>
</div>


	<ul class="nav navbar-nav ui-toolbar-action">
	<?php if($sf_request->getParameter('module') == 'student' && $sf_request->getParameter('action') == 'photo'): ?>
		<?php if(($sf_request->getParameter('student_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?> 
			<li class="">
				<button title="<?php echo __('Upload Student Photo') ?>" id="uploadStudentPhoto" class="ui-disabled-toolbar-btn">
					<img class="navbar-nav-img" src="<?php echo image_path('icons/upload') ?>">
					<?php echo __('Upload') ?>
				</button>
			</li>	 
			<li class="">
				<a href="">
					<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
					<?php echo __('Cancel') ?>
				</a>
			</li>	 
		<?php endif; ?>
	<?php else: ?>
		<li class="">
			<a href="#" data-toggle="modal" data-target="#enrolledStudentModal">
				<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
				<?php echo __('Save') ?>
			</a>
		</li>	 
		<li class="">
			<a href="">
				<img class="navbar-nav-img" src="<?php echo image_path('icons/remove') ?>">
				<?php echo __('Remove') ?>
			</a>
		</li>	 
		<li class="">
			<a href="">
				<img class="navbar-nav-img" src="<?php echo image_path('icons/accept') ?>">
				<?php echo __('Forward') ?>
			</a>
		</li>	
		<li class="">
			<a href="">
				<img class="navbar-nav-img" src="<?php echo image_path('icons/component') ?>">
				<?php echo __('Options') ?>
			</a>
		</li>	
	<?php endif; ?>  
	</ul>

<ul id="ui-footer-action-toolbar-menu" >

<!-- **************** Registration Task *************** sarina nuru nuru kula lesetoch-->

<?php if($sf_user->canAccess(ModuleCore::$_REGISTRATION)): ?>
	<?php if($sf_request->getParameter('module') == 'registration'): ?>
		<?php if(($sf_request->getParameter('task_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->tokenID): ?>
			<?php if($sf_request->getParameter('action') == 'edit'): ?>
				<li>
					<span class="ui-footer-action-toolbar-menu" title="<?php echo __('Previous page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleURL($sf_request->getParameter('module'), 'new')) ?>">
							<button id="">
								<img class="ui-footer-action-toolbar-menu-left" src="<?php echo image_path('pagination/previous_page') ?>"><?php echo __('Back') ?>
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') == 'view'): ?>
				<li>
					<span class="ui-footer-action-toolbar-menu" title="<?php echo __('Previous page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleURL($sf_request->getParameter('module'), 'index')) ?>">
							<button id="">
								<img class="ui-footer-action-toolbar-menu-left" src="<?php echo image_path('pagination/previous_page') ?>"><?php echo __('Back') ?>
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') == 'order'): ?>
				<li>
					<span class="ui-footer-action-toolbar-menu" title="<?php echo __('Previous page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), 'edit', $_object)) ?>">
							<button id="">
								<img class="ui-footer-action-toolbar-menu-left" src="<?php echo image_path('pagination/previous_page') ?>"><?php echo __('Back') ?>
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') == 'itemization'): ?>
				<li>
					<span class="ui-footer-action-toolbar-menu" title="<?php echo __('Previous page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), ($_object->completedTask ?'view':'order'), $_object)) ?>">
							<button id="">
								<img class="ui-footer-action-toolbar-menu-left" src="<?php echo image_path('pagination/previous_page') ?>"><?php echo __('Back') ?>
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') == 'complete'): ?>
				<li>
					<span class="ui-footer-action-toolbar-menu" title="<?php echo __('Previous page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), 'itemization', $_object)) ?>">
							<button id="">
								<img class="ui-footer-action-toolbar-menu-left" src="<?php echo image_path('pagination/previous_page') ?>"><?php echo __('Back') ?>
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>
		<?php endif; ?>  
	<?php endif; ?>
<?php endif; ?>
 
<!-- **************** Purchase Task *************** -->

<?php if($sf_user->canAccess(ModuleCore::$_REGISTRATION)): ?>
	<?php if($sf_request->getParameter('module') == 'purchase'): ?>
		<?php if(($sf_request->getParameter('task_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->tokenID): ?>
			<?php if($sf_request->getParameter('action') == 'edit'): ?>
				<li>
					<span class="ui-footer-action-toolbar-menu" title="<?php echo __('Previous page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleURL($sf_request->getParameter('module'), 'new')) ?>">
							<button id="">
								<img class="ui-footer-action-toolbar-menu-left" src="<?php echo image_path('pagination/previous_page') ?>"><?php echo __('Back') ?>
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') == 'view'): ?>
				<li>
					<span class="ui-footer-action-toolbar-menu" title="<?php echo __('Previous page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleURL($sf_request->getParameter('module'), 'index')) ?>">
							<button id="">
								<img class="ui-footer-action-toolbar-menu-left" src="<?php echo image_path('pagination/previous_page') ?>"><?php echo __('Back') ?>
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') == 'order'): ?>
				<li>
					<span class="ui-footer-action-toolbar-menu" title="<?php echo __('Previous page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), 'edit', $_object)) ?>">
							<button id="">
								<img class="ui-footer-action-toolbar-menu-left" src="<?php echo image_path('pagination/previous_page') ?>"><?php echo __('Back') ?>
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') == 'itemization'): ?>
				<li>
					<span class="ui-footer-action-toolbar-menu" title="<?php echo __('Previous page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), ($_object->completedTask ?'view':'order'), $_object)) ?>">
							<button id="">
								<img class="ui-footer-action-toolbar-menu-left" src="<?php echo image_path('pagination/previous_page') ?>"><?php echo __('Back') ?>
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') == 'complete'): ?>
				<li>
					<span class="ui-footer-action-toolbar-menu" title="<?php echo __('Previous page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), 'itemization', $_object)) ?>">
							<button id="">
								<img class="ui-footer-action-toolbar-menu-left" src="<?php echo image_path('pagination/previous_page') ?>"><?php echo __('Back') ?>
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>
		<?php endif; ?>  
	<?php endif; ?>
<?php endif; ?>
 
<!-- **************** Sales Task *************** -->

<?php if($sf_user->canAccess(ModuleCore::$_SALES)): ?>
	<?php if($sf_request->getParameter('module') == 'sales'): ?>
		<?php if(($sf_request->getParameter('task_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->tokenID): ?>
			<?php if($sf_request->getParameter('action') == 'edit'): ?>
				<li>
					<span class="ui-footer-action-toolbar-menu" title="<?php echo __('Previous page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleURL($sf_request->getParameter('module'), 'new')) ?>">
							<button id="">
								<img class="ui-footer-action-toolbar-menu-left" src="<?php echo image_path('pagination/previous_page') ?>"><?php echo __('Back') ?>
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') == 'view'): ?>
				<li>
					<span class="ui-footer-action-toolbar-menu" title="<?php echo __('Previous page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleURL($sf_request->getParameter('module'), 'index')) ?>">
							<button id="">
								<img class="ui-footer-action-toolbar-menu-left" src="<?php echo image_path('pagination/previous_page') ?>"><?php echo __('Back') ?>
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') == 'order'): ?>
				<li>
					<span class="ui-footer-action-toolbar-menu" title="<?php echo __('Previous page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), 'edit', $_object)) ?>">
							<button id="">
								<img class="ui-footer-action-toolbar-menu-left" src="<?php echo image_path('pagination/previous_page') ?>"><?php echo __('Back') ?>
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') == 'payment'): ?>
				<li>
					<span class="ui-footer-action-toolbar-menu" title="<?php echo __('Previous page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), 'order', $_object)) ?>">
							<button id="">
								<img class="ui-footer-action-toolbar-menu-left" src="<?php echo image_path('pagination/previous_page') ?>"><?php echo __('Back') ?>
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') == 'itemization'): ?>
				<li>
					<span class="ui-footer-action-toolbar-menu" title="<?php echo __('Previous page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), ($_object->completedTask ?'view':'payment'), $_object)) ?>">
							<button id="">
								<img class="ui-footer-action-toolbar-menu-left" src="<?php echo image_path('pagination/previous_page') ?>"><?php echo __('Back') ?>
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') == 'complete'): ?>
				<li>
					<span class="ui-footer-action-toolbar-menu" title="<?php echo __('Previous page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), 'itemization', $_object)) ?>">
							<button id="">
								<img class="ui-footer-action-toolbar-menu-left" src="<?php echo image_path('pagination/previous_page') ?>"><?php echo __('Back') ?>
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>
		<?php endif; ?>  
	<?php endif; ?>
<?php endif; ?>
 
</ul> 
<!--
<div class="" style="float:left!important;width:82%!important;margin:4px 20px!important;">
	<div class="progress progress-striped">
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
	</div> 
</div>	
-->

<!-- ************ NEXT Naviagation Button ************** -->

<ul id="ui-footer-action-toolbar-menu-right">

<!-- ************ Registration task Management ************** -->

<?php if($sf_user->canAccess(ModuleCore::$_REGISTRATION)): ?>
	<?php if($sf_request->getParameter('module') == 'registration'): ?>
		<?php if(($sf_request->getParameter('task_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->tokenID): ?>
			<?php if($sf_request->getParameter('action') == 'edit'): ?>
				<li>
					<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Next page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), ($_object->completedTask?'itemization':'order'), $_object)) ?>">
							<button id="">
								<?php echo __('Next') ?>
								<img class="ui-footer-action-toolbar-menu-right" src="<?php echo image_path('pagination/next_page') ?>">
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>	 	
			<?php if($sf_request->getParameter('action') == 'view' && $_object->completedTask): ?>
				<li>
					<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Next page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), ($_object->completedTask?'itemization':''), $_object)) ?>">
							<button id="">
								<?php echo __('Next') ?>
								<img class="ui-footer-action-toolbar-menu-right" src="<?php echo image_path('pagination/next_page') ?>">
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>	 	
			<?php if($sf_request->getParameter('action') == 'order' && $_object->id): ?>
				<li>
					<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Next page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), 'itemization', $_object)) ?>">
							<button id="">
								<?php echo __('Next') ?>
								<img class="ui-footer-action-toolbar-menu-right" src="<?php echo image_path('pagination/next_page') ?>">
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>	 
			<?php if($sf_request->getParameter('action') == 'itemization'): ?>
				<li>
					<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Next page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), 'complete', $_object)) ?>">
							<button id="">
								<?php echo __('Next') ?>
								<img class="ui-footer-action-toolbar-menu-right" src="<?php echo image_path('pagination/next_page') ?>">
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>			
			<?php if($sf_request->getParameter('action') == 'complete'): ?> 
				<?php if($_object->canApprove  ): ?>
					<li>
						<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Approve registration').' ( Task #: '.$_object->taskNumber.' )' ?>"> 
							<button id="approveTask">
								<?php echo __('Approve') ?>
								<img class="ui-footer-action-toolbar-menu-right" src="<?php echo image_path('icons/approved') ?>">
							</button> 
						</span>
					</li>	 
				<?php endif; ?>
				<?php if($_object->canRevert && !$_object->completedTask): ?>
					<li>
						<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Revert registration').' ( Task #: '.$_object->taskNumber.' ) approval' ?>"> 
							<button id="revertTaskApproval">
								<img class="ui-footer-action-toolbar-menu-left" src="<?php echo image_path('icons/revert') ?>">
								<?php echo __('Revert') ?>
							</button> 
						</span>
					</li>	 
				<?php endif; ?> 
				<?php if($_object->canComplete && !$_object->completedTask ): ?>
					<li>
						<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Complete registration').' ( Task #: '.$_object->taskNumber.' )' ?>"> 
							<button id="completeTask">
								<?php echo __('Complete') ?>
								<img class="ui-footer-action-toolbar-menu-right" src="<?php echo image_path('pagination/next_page') ?>">
							</button> 
						</span>
					</li>	 
				<?php endif; ?> 
			<?php endif; ?>		 
		<?php endif; ?>
	<?php endif; ?> 	
<?php endif; ?> 	
	 
<!-- ************ Purchase task Management ************** -->

<?php if($sf_user->canAccess(ModuleCore::$_REGISTRATION)): ?>
	<?php if($sf_request->getParameter('module') == 'purchase'): ?>
		<?php if(($sf_request->getParameter('task_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->tokenID): ?>
			<?php if($sf_request->getParameter('action') == 'edit'): ?>
				<li>
					<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Next page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), ($_object->completedTask?'itemization':'order'), $_object)) ?>">
							<button id="">
								<?php echo __('Next') ?>
								<img class="ui-footer-action-toolbar-menu-right" src="<?php echo image_path('pagination/next_page') ?>">
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>	 	
			<?php if($sf_request->getParameter('action') == 'view' && $_object->completedTask): ?>
				<li>
					<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Next page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), ($_object->completedTask?'itemization':''), $_object)) ?>">
							<button id="">
								<?php echo __('Next') ?>
								<img class="ui-footer-action-toolbar-menu-right" src="<?php echo image_path('pagination/next_page') ?>">
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>	 	
			<?php if($sf_request->getParameter('action') == 'order' && $_object->id): ?>
				<li>
					<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Next page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), 'itemization', $_object)) ?>">
							<button id="">
								<?php echo __('Next') ?>
								<img class="ui-footer-action-toolbar-menu-right" src="<?php echo image_path('pagination/next_page') ?>">
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>	 
			<?php if($sf_request->getParameter('action') == 'itemization'): ?>
				<li>
					<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Next page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), 'complete', $_object)) ?>">
							<button id="">
								<?php echo __('Next') ?>
								<img class="ui-footer-action-toolbar-menu-right" src="<?php echo image_path('pagination/next_page') ?>">
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>			
			<?php if($sf_request->getParameter('action') == 'complete'): ?> 
				<?php if($_object->canApprove  ): ?>
					<li>
						<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Approve registration').' ( Task #: '.$_object->taskNumber.' )' ?>"> 
							<button id="approveTask">
								<?php echo __('Approve') ?>
								<img class="ui-footer-action-toolbar-menu-right" src="<?php echo image_path('icons/approved') ?>">
							</button> 
						</span>
					</li>	 
				<?php endif; ?>
				<?php if($_object->canRevert && !$_object->completedTask): ?>
					<li>
						<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Revert registration').' ( Task #: '.$_object->taskNumber.' ) approval' ?>"> 
							<button id="revertTaskApproval">
								<img class="ui-footer-action-toolbar-menu-left" src="<?php echo image_path('icons/revert') ?>">
								<?php echo __('Revert') ?>
							</button> 
						</span>
					</li>	 
				<?php endif; ?> 
				<?php if($_object->canComplete && !$_object->completedTask ): ?>
					<li>
						<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Complete registration').' ( Task #: '.$_object->taskNumber.' )' ?>"> 
							<button id="completeTask">
								<?php echo __('Complete') ?>
								<img class="ui-footer-action-toolbar-menu-right" src="<?php echo image_path('pagination/next_page') ?>">
							</button> 
						</span>
					</li>	 
				<?php endif; ?> 
			<?php endif; ?>		 
		<?php endif; ?>
	<?php endif; ?> 	
<?php endif; ?> 	

<!-- ************ Sales Task Management ************** -->

<?php if($sf_user->canAccess(ModuleCore::$_SALES)): ?>
	<?php if($sf_request->getParameter('module') == 'sales'): ?>
		<?php if(($sf_request->getParameter('task_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->tokenID): ?>
			<?php if($sf_request->getParameter('action') == 'edit'): ?>
				<li>
					<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Next page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), ($_object->completedTask?'itemization':'order'), $_object)) ?>">
							<button id="">
								<?php echo __('Next') ?>
								<img class="ui-footer-action-toolbar-menu-right" src="<?php echo image_path('pagination/next_page') ?>">
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>	 	
			<?php if($sf_request->getParameter('action') == 'view' && $_object->completedTask): ?>
				<li>
					<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Next page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), ($_object->completedTask?'itemization':''), $_object)) ?>">
							<button id="">
								<?php echo __('Next') ?>
								<img class="ui-footer-action-toolbar-menu-right" src="<?php echo image_path('pagination/next_page') ?>">
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>	 	
			<?php if($sf_request->getParameter('action') == 'order' && $_object->hasOrder): ?>
				<li>
					<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Next page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), 'payment', $_object)) ?>">
							<button id="">
								<?php echo __('Next') ?>
								<img class="ui-footer-action-toolbar-menu-right" src="<?php echo image_path('pagination/next_page') ?>">
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>	 
			<?php if($sf_request->getParameter('action') == 'payment' && $_object->id): ?>
				<li>
					<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Next page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), 'itemization', $_object)) ?>">
							<button id="">
								<?php echo __('Next') ?>
								<img class="ui-footer-action-toolbar-menu-right" src="<?php echo image_path('pagination/next_page') ?>">
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>	 
			<?php if($sf_request->getParameter('action') == 'itemization'): ?>
				<li>
					<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Next page') ?>">
						<a class="" href="<?php echo url_for(ModuleCore::makeModuleActionURL($sf_request->getParameter('module'), 'complete', $_object)) ?>">
							<button id="">
								<?php echo __('Next') ?>
								<img class="ui-footer-action-toolbar-menu-right" src="<?php echo image_path('pagination/next_page') ?>">
							</button>
						</a>
					</span>
				</li>	
			<?php endif; ?>			
			<?php if($sf_request->getParameter('action') == 'complete'): ?> 
				<?php if($_object->canApprove  ): ?>
					<li>
						<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Approve registration').' ( Task #: '.$_object->taskNumber.' )' ?>"> 
							<button id="approveTask">
								<?php echo __('Approve') ?>
								<img class="ui-footer-action-toolbar-menu-right" src="<?php echo image_path('icons/approved') ?>">
							</button> 
						</span>
					</li>	 
				<?php endif; ?>
				<?php if($_object->canRevert && !$_object->completedTask): ?>
					<li>
						<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Revert registration').' ( Task #: '.$_object->taskNumber.' ) approval' ?>"> 
							<button id="revertTaskApproval">
								<img class="ui-footer-action-toolbar-menu-left" src="<?php echo image_path('icons/revert') ?>">
								<?php echo __('Revert') ?>
							</button> 
						</span>
					</li>	 
				<?php endif; ?> 
				<?php if($_object->canComplete && !$_object->completedTask ): ?>
					<li>
						<span class="ui-footer-action-toolbar-right-menu" title="<?php echo __('Complete registration').' ( Task #: '.$_object->taskNumber.' )' ?>"> 
							<button id="completeTask">
								<?php echo __('Complete') ?>
								<img class="ui-footer-action-toolbar-menu-right" src="<?php echo image_path('pagination/next_page') ?>">
							</button> 
						</span>
					</li>	 
				<?php endif; ?> 
			<?php endif; ?>		 
		<?php endif; ?>
	<?php endif; ?> 	
<?php endif; ?> 	
	 
	
<!-- ************ Billing task Management ************** -->
 
</ul>	
	<!-- **************************** -->

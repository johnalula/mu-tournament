<div id="" class="navbar-collapse ui-toolbar">
	<ul class="nav navbar-nav ui-toolbar-action">
	
	<!-- ************ Registration Task ********************** -->
	<?php if($sf_user->canAdd(ModuleCore::$_REGISTRATION)): ?>	
		<?php if($sf_request->getParameter('module') == 'registration'): ?>
			<?php if($sf_request->getParameter('action') == 'index'): ?>
				<li class="">
					<a href="<?php echo url_for('registration/new') ?>" title="<?php echo __('Create New Registration Task') ?>" id="createNewRegistrationTask" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
						<?php echo __('New') ?>
					</a>
				</li> 
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') == 'new'): ?>
				<li class="">
					<button title="<?php echo __('Save Registration Task') ?>" id="createRegistrationTask" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel Registration Task') ?>" id="cancelRegistrationTask" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li>
			<?php endif; ?>
			<?php if(($sf_request->getParameter('task_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->tokenID): ?>
				<?php if($sf_request->getParameter('action') == 'edit'): ?>
					<li class="">
						<button title="<?php echo __('Update Registration Task') ?>" id="updateRegistrationTask" class="ui-disabled-toolbar-btn" disabled >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/update') ?>">
							<?php echo __('Update') ?>
						</button>
					</li>	
					<li class="">
						<button title="<?php echo __('Cancel Registration Task') ?>" id="cancelRegistrationTask" class="ui-disabled-toolbar-btn" disabled>
							<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
							<?php echo __('Cancel') ?>
						</button>
					</li>
				<?php endif; ?>
				<?php if($sf_request->getParameter('action') == 'order'): ?>
					<li class="">
						<button title="<?php echo __('Save Registration Order') ?>" id="createRegistrationOrder" class="ui-disabled-toolbar-btn" disabled >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
							<?php echo __('Save') ?>
						</button>
					</li>	
					<li class="">
						<button title="<?php echo __('Cancel Registration Order') ?>" id="cancelRegistrationOrder" class="ui-disabled-toolbar-btn" disabled>
							<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
							<?php echo __('Cancel') ?>
						</button>
					</li>
				<?php endif; ?>
				<?php if($sf_request->getParameter('action') == 'itemization'): ?>
					<li class="">
						<button title="<?php echo __('Save Inventory Item Serial Numbers') ?>" id="createItemSerialNumber" class="<?php echo $_object->hasSerializedInventoryItems ? '':'ui-disabled-toolbar-btn' ?>" <?php echo $_object->hasSerializedInventoryItems ? '':'disabled' ?> >
							<img class="navbar-nav-img" src="<?php echo image_path('settings/generate_medium') ?>">
							<?php echo __('Generate Serial') ?>
						</button>
					</li>	 
				<?php endif; ?>
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') != 'index'): ?>
				<li class="">
					<a href="<?php echo url_for('registration/index') ?>" title="<?php echo __('Back to Registration Task List') ?>" id="backToRegistrationTask" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/details') ?>">
						<?php echo __('List') ?>
					</a>
				</li> 
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>
	
	<!-- ************ Purchasing Task ********************** -->
	
	<?php if($sf_user->canAdd(ModuleCore::$_REGISTRATION)): ?>	
		<?php if($sf_request->getParameter('module') == 'purchase'): ?>
			<?php if($sf_request->getParameter('action') == 'index'): ?>
				<li class="">
					<a href="<?php echo url_for('purchase/new') ?>" title="<?php echo __('Create New Purchase Task') ?>" id="createNewPurchasingTask" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
						<?php echo __('New') ?>
					</a>
				</li> 
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') == 'new'): ?>
				<li class="">
					<button title="<?php echo __('Save Purchase Task') ?>" id="createPurchasingTask" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel Purchase Task') ?>" id="cancelPurchasingTask" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li>
			<?php endif; ?>
			<?php if(($sf_request->getParameter('task_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->tokenID): ?>
				<?php if($sf_request->getParameter('action') == 'edit'): ?>
					<li class="">
						<button title="<?php echo __('Update Purchase Task') ?>" id="updatePurchaseTask" class="ui-disabled-toolbar-btn" disabled >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/update') ?>">
							<?php echo __('Update') ?>
						</button>
					</li>	
					<li class="">
						<button title="<?php echo __('Cancel Purchasie Task') ?>" id="cancelPurchaseTask" class="ui-disabled-toolbar-btn" disabled>
							<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
							<?php echo __('Cancel') ?>
						</button>
					</li>
				<?php endif; ?>
				<?php if($sf_request->getParameter('action') == 'order'): ?>
					<li class="">
						<button title="<?php echo __('Save Purchase Order') ?>" id="createPurchaseOrder" class="ui-disabled-toolbar-btn" disabled >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
							<?php echo __('Save') ?>
						</button>
					</li>	
					<li class="">
						<button title="<?php echo __('Cancel Purchase Order') ?>" id="cancelPurchaseOrder" class="ui-disabled-toolbar-btn" disabled>
							<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
							<?php echo __('Cancel') ?>
						</button>
					</li>
				<?php endif; ?>
				<?php if($sf_request->getParameter('action') == 'itemization'): ?>
					<li class="">
						<button title="<?php echo __('Save Inventory Item Serial Numbers') ?>" id="createItemSerialNumber" class="<?php echo $_object->hasSerializedInventoryItems ? '':'ui-disabled-toolbar-btn' ?>" <?php echo $_object->hasSerializedInventoryItems ? '':'disabled' ?> >
							<img class="navbar-nav-img" src="<?php echo image_path('settings/generate_medium') ?>">
							<?php echo __('Generate Serial') ?>
						</button>
					</li>	 
				<?php endif; ?>
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') != 'index'): ?>
				<li class="">
					<a href="<?php echo url_for('purchase/index') ?>" title="<?php echo __('Back to Registration Task List') ?>" id="backToRegistrationTask" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/details') ?>">
						<?php echo __('List') ?>
					</a>
				</li> 
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>
	
	<!-- ************ Sales Task ********************** -->
	
	<?php if($sf_user->canAdd(ModuleCore::$_SALES)): ?>	
		<?php if($sf_request->getParameter('module') == 'sales'): ?>
			<?php if($sf_request->getParameter('action') == 'index'): ?>
				<li class="">
					<a href="<?php echo url_for('sales/new') ?>" title="<?php echo __('Create New Sales Task') ?>" id="createNewSalesTask" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
						<?php echo __('New') ?>
					</a>
				</li> 
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') == 'new'): ?>
				<li class="">
					<button title="<?php echo __('Save Sales Task') ?>" id="createSalesTask" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel Sales Task') ?>" id="cancelSalesTask" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li>
			<?php endif; ?>
			<?php if(($sf_request->getParameter('task_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->tokenID): ?>
				<?php if($sf_request->getParameter('action') == 'edit'): ?>
					<li class="">
						<button title="<?php echo __('Update Sales Task') ?>" id="updateSalesTask" class="ui-disabled-toolbar-btn" disabled >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/update') ?>">
							<?php echo __('Update') ?>
						</button>
					</li>	
					<li class="">
						<button title="<?php echo __('Cancel Purchasie Task') ?>" id="cancelSalesTask" class="ui-disabled-toolbar-btn" disabled>
							<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
							<?php echo __('Cancel') ?>
						</button>
					</li>
				<?php endif; ?>
				<?php if($sf_request->getParameter('action') == 'order'): ?>
					<li class="">
						<button title="<?php echo __('Save Sales Order') ?>" id="createSalesOrder" class="ui-disabled-toolbar-btn" disabled >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
							<?php echo __('Save') ?>
						</button>
					</li>	
					<li class="">
						<button title="<?php echo __('Cancel Sales Order') ?>" id="cancelSalesOrder" class="ui-disabled-toolbar-btn" disabled>
							<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
							<?php echo __('Cancel') ?>
						</button>
					</li>
				<?php endif; ?>
				<?php if($sf_request->getParameter('action') == 'payment'): ?>
					<li class="">
						<button title="<?php echo __('Save Sales Payment Order') ?>" id="createSalesTaxPaymentOrder" class="ui-disabled-toolbar-btn" disabled >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
							<?php echo __('Save') ?>
						</button>
					</li>	
					<li class="">
						<button title="<?php echo __('Cancel Sales Payment Order') ?>" id="cancelSalesTaxPaymentOrder" class="ui-disabled-toolbar-btn" disabled>
							<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
							<?php echo __('Cancel') ?>
						</button>
					</li>
				<?php endif; ?>
				<?php if($sf_request->getParameter('action') == 'itemization'): ?>
					<li class="">
						<button title="<?php echo __('Save Inventory Item Serial Numbers') ?>" id="createItemSerialNumber" class="<?php echo $_object->hasSerializedInventoryItems ? '':'ui-disabled-toolbar-btn' ?>" <?php echo $_object->hasSerializedInventoryItems ? '':'disabled' ?> >
							<img class="navbar-nav-img" src="<?php echo image_path('settings/generate_medium') ?>">
							<?php echo __('Generate Serial') ?>
						</button>
					</li>	 
				<?php endif; ?>
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') != 'index'): ?>
				<li class="">
					<a href="<?php echo url_for('sales/index') ?>" title="<?php echo __('Back to Sales Task List') ?>" id="backToSalesTask" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/details') ?>">
						<?php echo __('List') ?>
					</a>
				</li> 
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>
	
	<!-- ************ Sales Invoicing Task ********************** -->
	
	<?php if($sf_user->canAdd(ModuleCore::$_SALES)): ?>	
		<?php if($sf_request->getParameter('module') == 'sales_invoicing'): ?>
			<?php if($sf_request->getParameter('action') == 'index'): ?>
				<li class="">
					<a href="<?php echo url_for('sales_invoicing/new') ?>" title="<?php echo __('Create New Sales Invoicing Task') ?>" id="createNewSalesInvoicingTask" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
						<?php echo __('New') ?>
					</a>
				</li> 
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') == 'new'): ?>
				<li class="">
					<button title="<?php echo __('Save Sales Invoicing Task') ?>" id="createSalesInvoicingTask" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel Sales Invoicing Task') ?>" id="cancelSalesInvoicingTask" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li>
			<?php endif; ?>
			<?php if(($sf_request->getParameter('task_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->tokenID): ?>
				<?php if($sf_request->getParameter('action') == 'edit'): ?>
					<li class="">
						<button title="<?php echo __('Update Sales Invoicing Task') ?>" id="updateSalesInvoicingTask" class="ui-disabled-toolbar-btn" disabled >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/update') ?>">
							<?php echo __('Update') ?>
						</button>
					</li>	
					<li class="">
						<button title="<?php echo __('Cancel Sales Invoicing Task') ?>" id="cancelSalesInvoicingTask" class="ui-disabled-toolbar-btn" disabled>
							<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
							<?php echo __('Cancel') ?>
						</button>
					</li>
				<?php endif; ?>
				<?php if($sf_request->getParameter('action') == 'order'): ?>
					<li class="">
						<button title="<?php echo __('Save Sales Invoicing Order') ?>" id="createSalesInvoicingOrder" class="ui-disabled-toolbar-btn" disabled >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
							<?php echo __('Save') ?>
						</button>
					</li>	
					<li class="">
						<button title="<?php echo __('Cancel Sales Order') ?>" id="cancelSalesInvoicingOrder" class="ui-disabled-toolbar-btn" disabled>
							<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
							<?php echo __('Cancel') ?>
						</button>
					</li>
				<?php endif; ?>
				<?php if($sf_request->getParameter('action') == 'payment'): ?>
					<li class="">
						<button title="<?php echo __('Save Sales Invoicing Payment Order') ?>" id="createSalesInvoicingTaxPaymentOrder" class="ui-disabled-toolbar-btn" disabled >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
							<?php echo __('Save') ?>
						</button>
					</li>	
					<li class="">
						<button title="<?php echo __('Cancel Sales Payment Order') ?>" id="cancelSalesInvoicingTaxPaymentOrder" class="ui-disabled-toolbar-btn" disabled>
							<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
							<?php echo __('Cancel') ?>
						</button>
					</li>
				<?php endif; ?>
				<?php if($sf_request->getParameter('action') == 'itemization'): ?>
					<li class="">
						<button title="<?php echo __('Save Inventory Item Serial Numbers') ?>" id="createItemSerialNumber" class="<?php echo $_object->hasSerializedInventoryItems ? '':'ui-disabled-toolbar-btn' ?>" <?php echo $_object->hasSerializedInventoryItems ? '':'disabled' ?> >
							<img class="navbar-nav-img" src="<?php echo image_path('settings/generate_medium') ?>">
							<?php echo __('Generate Serial') ?>
						</button>
					</li>	 
				<?php endif; ?>
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') != 'index'): ?>
				<li class="">
					<a href="<?php echo url_for('sales/index') ?>" title="<?php echo __('Back to Sales Task List') ?>" id="backToSalesTask" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/details') ?>">
						<?php echo __('List') ?>
					</a>
				</li> 
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>
	 
	
	<!-- ************ Class Allocation Task ********************** -->
	
	<?php if($sf_user->canAdd(ModuleCore::$_GENERAL_SETTING)): ?>	
		<?php if($sf_request->getParameter('module') == 'account'): ?>
			<?php if($sf_request->getParameter('action') == 'index'): ?>
				<li class="">
					<a href="<?php echo url_for('class_allocation/new') ?>" title="<?php echo __('Create New Class Allocation Task') ?>" id="createNewClassAllocationTask" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
						<?php echo __('New') ?>
					</a>
				</li> 
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') == 'new'): ?>
				<li class="">
					<button title="<?php echo __('Save Class Allocation Task') ?>" id="createClassAllocationTask" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel Class Allocation Task') ?>" id="cancelClassAllocationTask" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li>
			<?php endif; ?> 
			<?php if($sf_request->getParameter('action') == 'chart_of_account'): ?>
				<li class="">
					<a href="<?php echo url_for('account/beginning_balance') ?>" title="<?php echo __('Account Beginning Balance') ?>" id="createBeginningBalance" class="" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('settings/fee_2') ?>">
						<?php echo __('Beginning Balances') ?>
					</a>
				</li> 
			<?php endif; ?> 
			<?php if($sf_request->getParameter('action') == 'new_account_chart'): ?>
				<li class="">
					<button title="<?php echo __('Save Account Chart') ?>" id="createAccountChart" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel Account Chart') ?>" id="cancelAccountChart" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li> 
				<li class="">
					<a href="<?php echo url_for('account/chart_of_account') ?>" title="<?php echo __('Back to List') ?>" id="backToAccountChartList" class="" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/details') ?>">
						<?php echo __('List') ?>
					</a>
				</li> 
			<?php endif; ?> 
			<?php if($sf_request->getParameter('action') == 'chart_type'): ?>
				<li class="">
					<button title="<?php echo __('Save Account Chart Type') ?>" id="createAccountChartType" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel Account Chart Type') ?>" id="cancelAccountChartType" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li>
			<?php endif; ?> 
			<?php if($sf_request->getParameter('action') == 'beginning_balance'): ?>
				<li class="">
					<button title="<?php echo __('Save Beginning Balance') ?>" id="createBeginningBalance" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel Beginning Balance') ?>" id="cancelBeginningBalance" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li> 
			<?php endif; ?> 
		<?php endif; ?>
	<?php endif; ?>
	
	<!-- ************ Product Management ********************** -->
		
	<?php if($sf_user->canAccess(ModuleCore::$_PRODUCT)): ?>	
		<?php if($sf_request->getParameter('module') == 'product' ): ?>
			<?php if($sf_request->getParameter('action') == 'index' ): ?>	
				<li class="">
					<a href="<?php echo url_for('product/new') ?>" title="<?php echo __('Create New Product') ?>" id="createNewProduct" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
						<?php echo __('New') ?>
					</a>
				</li> 
			<?php endif; ?>  
			<?php if($sf_request->getParameter('action') == 'new'): ?>
				<li class="">
					<button title="<?php echo __('Save Product Information') ?>" id="createProduct" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel Product Information') ?>" id="cancelProduct" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li>
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') == 'category'): ?>
				<li class="">
					<button title="<?php echo __('Save Product Category Information') ?>" id="createProductCategory" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel Product Category Information') ?>" id="cancelProductCategory" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li>
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') != 'index' && $sf_request->getParameter('action') != 'category'): ?>
				<li class="">
					<a href="<?php echo url_for('product/index') ?>" title="<?php echo __('Back to Product List') ?>" id="backToProductList" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/details') ?>">
						<?php echo __('List') ?>
					</a>
				</li> 
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>
	
	<!-- ************ Account Chart Management ********************** -->
		
	<?php if($sf_user->canAccess(ModuleCore::$_PRODUCT)): ?>	
		<?php if($sf_request->getParameter('module') == 'product' ): ?>
			 
			<?php if($sf_request->getParameter('action') == 'chart_type'): ?>
				<li class="">
					<button title="<?php echo __('Save GL Account Chart Type Information') ?>" id="createAccountChartType" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel GL Account Chart Type Information') ?>" id="cancelAccountChartType" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li>
			<?php endif; ?>
			 
		<?php endif; ?>
	<?php endif; ?>
		
	<!-- ************ Organization Management ********************** -->
		
	<?php if($sf_user->canAccess(ModuleCore::$_ORGANIZATION)): ?>	
		<?php if($sf_request->getParameter('module') == 'employee' ): ?>
			<?php if($sf_request->getParameter('action') == 'index' ): ?>	
				<li class="">
					<a href="<?php echo url_for('employee/new') ?>" title="<?php echo __('Create New Employee') ?>" id="createNewEmployee" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
						<?php echo __('New') ?>
					</a>
				</li> 
			<?php endif; ?>  
			<?php if($sf_request->getParameter('action') == 'new'): ?>
				<li class="">
					<button title="<?php echo __('Save Employee Information') ?>" id="createEmployee" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel Employee Information') ?>" id="cancelEmployee" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li>
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') != 'index'): ?>
				<li class="">
					<a href="<?php echo url_for('employee/index') ?>" title="<?php echo __('Back to Employee List') ?>" id="backToEmployeeList" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/details') ?>">
						<?php echo __('List') ?>
					</a>
				</li> 
			<?php endif; ?>
		<?php endif; ?>
		
		<!-- ************ Administration Management ********************** -->
		
		<?php if($sf_request->getParameter('module') == 'organization' ): ?>
			<?php if($sf_request->getParameter('action') == 'index' ): ?>	
				<li class="">
					<a href="<?php echo url_for('organization/new') ?>" title="<?php echo __('Create New Organization') ?>" id="createNewOrganization" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
						<?php echo __('New') ?>
					</a>
				</li> 
			<?php endif; ?>  
			<?php if($sf_request->getParameter('action') == 'new'): ?>
				<li class="">
					<button title="<?php echo __('Save Organization Information') ?>" id="createOrganization" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel Organization Information') ?>" id="cancelOrganization" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li>
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') != 'index'): ?>
				<li class="">
					<a href="<?php echo url_for('organization/index') ?>" title="<?php echo __('Back to Organization List') ?>" id="backToOrganizationList" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/details') ?>">
						<?php echo __('List') ?>
					</a>
				</li> 
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>
	
	<!-- ************ Administration Management ********************** -->
		
	<?php if($sf_user->canAdd(ModuleCore::$_ADMINISTRATION)): ?>	
		<?php if($sf_request->getParameter('module') == 'administrator' ): ?>
			<?php if($sf_request->getParameter('action') == 'user' ): ?>	
				<li class="">
					<a href="<?php echo url_for('user/new') ?>" title="<?php echo __('Create New System User') ?>" id="createNewSystemUserAccount" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
						<?php echo __('New') ?>
					</a>
				</li> 
			<?php endif; ?> 
			<?php if($sf_request->getParameter('action') == 'module' ): ?>	
				<li class="">
					<a href="<?php echo url_for('module_setting/new') ?>" title="<?php echo __('Create New System Module Setting') ?>" id="createNewSystemModule" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
						<?php echo __('New') ?>
					</a>
				</li> 
			<?php endif; ?> 
			<?php if($sf_request->getParameter('action') == 'user_role'): ?>
				<li class="">
					<button title="<?php echo __('Save School Course Exam Result Information') ?>" id="createSchoolCourseExamGradeBook" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel School Course Exam Result Information') ?>" id="cancelSchoolCourseExamGradeBook" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li>
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if($sf_request->getParameter('module') == 'user_role' ): ?>
			<?php if($sf_request->getParameter('action') == 'index' ): ?>
				<li class="">
					<a href="<?php echo url_for('user_role/new') ?>" title="<?php echo __('Create New User Role') ?>" id="createNewUserRole" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
						<?php echo __('New') ?>
					</a>
				</li> 
			<?php endif; ?>
			<?php if(($sf_request->getParameter('user_role_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
				<?php if($sf_request->getParameter('action') == 'view'): ?>
					<li class="">
						<a href="<?php echo url_for(ModuleCore::makeModuleURLAction('user_role', 'user_role_id', 'access_level', $_object)) ?>" title="<?php echo __('Create User Role Access Level') ?>" id="createNewUserRoleAccessLevel" class="" >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/key') ?>">
							<?php echo __('Access Level') ?>
						</a>
					</li> 
				<?php endif; ?>
				<?php if($sf_request->getParameter('action') == 'access_level'): ?>
					<li class="">
						<button title="<?php echo __('Save User Role Access Level Permission Information') ?>" id="createUserRoleAccessLevelPermission" class="ui-disabled-toolbar-btn" disabled >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
							<?php echo __('Save') ?>
						</button>
					</li>	
					<li class="">
						<button title="<?php echo __('Cancel User Role Access Level Permission Information') ?>" id="cancelUserRoleAccessLevelPermission" class="ui-disabled-toolbar-btn" disabled>
							<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
							<?php echo __('Cancel') ?>
						</button>
					</li>
				<?php endif; ?>
			<?php endif ?>
			<?php if($sf_request->getParameter('action') != 'index' ): ?>
				<li class="">
					<a href="<?php echo url_for('administrator/user_role') ?>" id="backToUserRoleIList" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/details') ?>">
						<?php echo __('List') ?>
					</a>
				</li> 
			<?php endif; ?>
		<?php endif; ?>
		
		<!-- ***************8 User  Module ***************** -->
		
		<?php if($sf_request->getParameter('module') == 'user' ): ?>
			<?php if($sf_request->getParameter('action') == 'index' ): ?>
				<li class="">
					<a href="<?php echo url_for('user/new') ?>" title="<?php echo __('Create New System User') ?>" id="createNewSystemUser" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
						<?php echo __('New') ?>
					</a>
				</li> 
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') == 'new'): ?>
				<li class="">
					<button title="<?php echo __('Save System User Account Information') ?>" id="createSystemUser" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel System User Account Information') ?>" id="cancelSystemUser" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li>
			<?php endif; ?>
			<?php if(($sf_request->getParameter('user_role_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
				<?php if($sf_request->getParameter('action') == 'view'): ?>
					<li class="">
						<a href="<?php echo url_for(ModuleCore::makeModuleURLAction('user_role', 'user_role_id', 'access_level', $_object)) ?>" title="<?php echo __('Create User Role Access Level') ?>" id="createNewUserRoleAccessLevel" class="" >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/key') ?>">
							<?php echo __('Access Level') ?>
						</a>
					</li> 
				<?php endif; ?>
			<?php endif ?>
			<?php if($sf_request->getParameter('action') != 'index' ): ?>
				<li class="">
					<a href="<?php echo url_for('administrator/user') ?>" id="backToUserRoleIList" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/details') ?>">
						<?php echo __('List') ?>
					</a>
				</li> 
			<?php endif; ?>
		<?php endif; ?>
		
		<!-- ************** System Modules ********************-->
		
		<?php if($sf_request->getParameter('module') == 'module_setting' ): ?>
			<?php if($sf_request->getParameter('action') == 'index' ): ?>
				<li class="">
					<a href="<?php echo url_for('module_setting/new') ?>" title="<?php echo __('Create New System Module') ?>" id="createNewSystem" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
						<?php echo __('New') ?>
					</a>
				</li> 
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') == 'new'): ?>
				<li class="">
					<button title="<?php echo __('Save System Module Information') ?>" id="createSystemModuleSetting" class="ui-disabled-toolbar-btn" disabled >
						<img class="navbar-nav-img" id="systemModuleDisabledSave" src="<?php echo image_path('icons/disabled_save') ?>">
						<img class="navbar-nav-img ui-display-none" id="systemModuleEnabledSave" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Save') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel System Module Information') ?>" id="cancelSystemModuleSetting" class="ui-disabled-toolbar-btn" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
						<?php echo __('Cancel') ?>
					</button>
				</li>
			<?php endif; ?>
			<?php if(($sf_request->getParameter('module_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
				<?php if($sf_request->getParameter('action') == 'view'): ?>
					<li class="">
						<a href="<?php echo url_for(ModuleCore::makeModuleURLAction('module_setting', 'module_id', 'edit', $_object)) ?>" title="<?php echo __('Create User Role Access Level') ?>" id="createNewUserRoleAccessLevel" class="" >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/edit') ?>">
							<?php echo __('Edit') ?>
						</a>
					</li> 
				<?php endif; ?> 
			<?php endif ?>
			<?php if($sf_request->getParameter('action') != 'index' ): ?>
				<li class="">
					<a href="<?php echo url_for('administrator/user_role') ?>" id="backToUserRoleIList" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/details') ?>">
						<?php echo __('List') ?>
					</a>
				</li> 
			<?php endif; ?>
		<?php endif; ?>
		
	<?php endif; ?>
	
		<!-- ************** Report ********************-->
		
		<?php if($sf_request->getParameter('module') == 'report' ): ?>
			<?php if($sf_request->getParameter('action') == 'index' ): ?>
				<li class="">
					<a href="<?php echo url_for('module_setting/new') ?>" title="<?php echo __('Create New System Module') ?>" id="createNewSystem" class="" >
						<img class="navbar-nav-img" src="<?php echo image_path('icons/add') ?>">
						<?php echo __('New') ?>
					</a>
				</li> 
			<?php endif; ?>
			<?php if($sf_request->getParameter('action') != 'index'): ?>
				<li class="">
					<button title="<?php echo __('Save System Module Information') ?>" id="createSystemModuleSetting" class="" disabled >
						<img class="navbar-nav-img" id="systemModuleDisabledSave" src="<?php echo image_path('icons/component') ?>">
						<?php echo __('Options') ?>
					</button>
				</li>	
				<li class="">
					<button title="<?php echo __('Cancel System Module Information') ?>" id="cancelSystemModuleSetting" class="" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/printer') ?>">
						<?php echo __('Print') ?>
					</button>
				</li>
				<li class="">
					<button title="<?php echo __('Cancel System Module Information') ?>" id="cancelSystemModuleSetting" class="" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/zoom') ?>">
						<?php echo __('Preview') ?>
					</button>
				</li>
				<li class="">
					<button title="<?php echo __('Cancel System Module Information') ?>" id="cancelSystemModuleSetting" class="" disabled>
						<img class="navbar-nav-img" src="<?php echo image_path('icons/file_xls') ?>">
						<?php echo __('Excel') ?>
					</button>
				</li>
				<li class="">
					<a href="<?php echo url_for(ModuleCore::makeReportURLAction($sf_request->getParameter('module'), $sf_request->getParameter('action'))) ?>">
						<img class="navbar-nav-img" src="<?php echo image_path('icons/file_pdf') ?>">
						<?php echo __('PDF') ?>
					</a>
				</li> 
			<?php endif; ?>
			<?php if(($sf_request->getParameter('module_id') == $_object->id) && $sf_request->getParameter('token_id') == $_object->token_id): ?>
				<?php if($sf_request->getParameter('action') == 'view'): ?>
					<li class="">
						<a href="<?php echo url_for(ModuleCore::makeModuleURLAction('module_setting', 'module_id', 'edit', $_object)) ?>" title="<?php echo __('Create User Role Access Level') ?>" id="createNewUserRoleAccessLevel" class="" >
							<img class="navbar-nav-img" src="<?php echo image_path('icons/edit') ?>">
							<?php echo __('Edit') ?>
						</a>
					</li> 
				<?php endif; ?> 
			<?php endif ?> 
		<?php endif; ?>
		 
	</ul>
</div>


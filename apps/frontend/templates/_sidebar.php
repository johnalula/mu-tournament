<div class="ui-sidebar">
	<div class="ui-sidebar-display">
		<div class="ui-sidebar-list">
			<table>
				<tr>
					<td rowspan=5 >
						<span class="ui-sidebar-avatar-img"><img class="navbar-img" src="<?php echo image_path('settings/user-avatar') ?>"></span>
					</td>
				</tr>
				<tr>
					<td>
						<span class="ui-sidebar-content-sm">
							<?php echo $sf_user->getAttribute('userName').' ( '.Wordlimit::wordLimiterShort($sf_user->getAttribute('userRoleName'),2).' )' ?>
						</span>
					</td>
				</tr>
				<tr>
					<td>
						<span class="ui-sidebar-content">
							<?php echo date('D M d, Y', time()) ?>
						</span>
					</td>
				</tr>
				<tr>
					<td>
						<span class="ui-sidebar-content">
							<a class="" href="<?php echo url_for('@user_signout') ?>">
								<img style="" class="ui-sidebar-logout-img" src="<?php echo image_path('settings/logout_btn') ?>"><?php echo __('Logout') ?>
							</a>
						</span>
					</td>
				</tr> 
			</table>
		</div>
	</div> 
	<?php if($sf_user->canAccess(ModuleCore::$_TOURNAMENT)): ?>
	<div class="ui-sidebar-nav-box">
		<h2 class="ui-sidebar-header">
			<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/student') ?>">
			<?php echo __('Tournament') ?>
			<span class="ui-accordion-slider ui-right-slider ui-display-none"><img class="ui-sidebar-slider-img" src="<?php echo image_path('icons/minus') ?>"></span>
			<span class="ui-accordion-slider ui-right-slider"><img class="ui-sidebar-slider-img" src="<?php echo image_path('icons/plus') ?>"></span>
		</h2>
		<div class="ui-sidebar-nav" id="ui-panel-2">
			<ul class="nav nav-sidebar">
				<li>
					<a href="<?php echo url_for('tournament/index') ?>">
						<img class="ui-sidebar-nav-img" src="<?php echo image_path('icons/save') ?>">
						<?php echo __('Tournaments') ?>
					</a>
				</li> 
				<li>
					<a href="<?php echo url_for('group/index') ?>">
						<img class="ui-sidebar-nav-img" src="<?php echo image_path('icons/update') ?>">
						<?php echo __('Groups') ?>
					</a>
				</li> 
				<li role="separator" class="ui-sidebar-divider"></li>  
				<li>
					<a href="<?php echo url_for('round/index') ?>">
						<img class="ui-sidebar-nav-img" src="<?php echo image_path('icons/edit') ?>">
						<?php echo __('Rounds') ?>
					</a>
				</li>  
				<li>
					<a href="<?php echo url_for('inventory_item/index') ?>">
						<img class="ui-sidebar-nav-img" src="<?php echo image_path('icons/edit') ?>">
						<?php echo __('Purchase Order') ?>
					</a>
				</li> 
			</ul>
		</div>
	</div> 
	<?php endif; ?>
	<?php if($sf_user->canAccess(ModuleCore::$_GAME) || $sf_user->canAccess(ModuleCore::$_MATCH)): ?>
	<div class="ui-sidebar-nav-box">
		<h2 class="ui-sidebar-header">
			<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/organization') ?>">
			<?php echo __('Sport Games') ?>
			<span class="ui-accordion-slider ui-right-slider ui-display-none"><img class="ui-sidebar-slider-img" src="<?php echo image_path('icons/minus') ?>"></span>
			<span class="ui-accordion-slider ui-right-slider"><img class="ui-sidebar-slider-img" src="<?php echo image_path('icons/plus') ?>"></span>
		</h2>
		<div class="ui-sidebar-nav ui-accordion-box ui-display-none" id="ui-panel-3">
			<ul class="nav nav-sidebar">
				<li>
					<a href="<?php echo url_for('game_category/index') ?>">
						<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/school') ?>">
						<?php echo __('Categories') ?>
					</a>
				</li> 
				<li>
					<a href="<?php echo url_for('sport_games/index') ?>">
						<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/organization') ?>">
						<?php echo __('Sport Games') ?>
					</a>
				</li> 
				<li>
					<a href="<?php echo url_for('employee/index') ?>">
						<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/employee') ?>">
						<?php echo __('Employees') ?>
					</a>
				</li>  
				<li>
					<a href="<?php echo url_for('vendor/index') ?>">
						<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/vendor') ?>">
						<?php echo __('Vendor') ?>
					</a>
				</li>  
				<li>
					<a href="<?php echo url_for('customer/index') ?>">
						<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/customer') ?>">
						<?php echo __('Customer') ?>
					</a>
				</li>  
			</ul>
		</div>
	</div> 
	<?php endif; ?>
	<?php if($sf_user->canAccess(ModuleCore::$_TEAM)): ?>
	<div class="ui-sidebar-nav-box">
		<h2 class="ui-sidebar-header">
			<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/group') ?>">
			<?php echo __('Teams') ?>
			<span class="ui-accordion-slider ui-right-slider ui-display-none"><img class="ui-sidebar-slider-img" src="<?php echo image_path('icons/minus') ?>"></span>
			<span class="ui-accordion-slider ui-right-slider"><img class="ui-sidebar-slider-img" src="<?php echo image_path('icons/plus') ?>"></span>
		</h2>
		<div class="ui-sidebar-nav ui-accordion-box ui-display-none" id="ui-panel-3">
			<ul class="nav nav-sidebar">
				<li>
					<a href="<?php echo url_for('company/index') ?>">
						<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/school') ?>">
						<?php echo __('Company') ?>
					</a>
				</li> 
				<li>
					<a href="<?php echo url_for('organization/index') ?>">
						<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/organization') ?>">
						<?php echo __('Organization') ?>
					</a>
				</li> 
				<li>
					<a href="<?php echo url_for('employee/index') ?>">
						<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/people') ?>">
						<?php echo __('People') ?>
					</a>
				</li>  
			</ul>
		</div>
	</div> 
	<?php endif; ?>
	<?php if($sf_user->canAccess(ModuleCore::$_ADMINISTRATOR) && ($sf_user->getAttribute('userRoleTypeID') == UserCore::$_SUPER_ADMINISTRATOR || $sf_user->getAttribute('userRoleTypeID') == UserCore::$_ADMINISTRATOR) ): ?>
	<div class="ui-sidebar-nav-box">
		<h2 class="ui-sidebar-header">
			<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/organization') ?>">
			<?php echo __('Organization') ?>
			<span class="ui-accordion-slider ui-right-slider ui-display-none"><img class="ui-sidebar-slider-img" src="<?php echo image_path('icons/minus') ?>"></span>
			<span class="ui-accordion-slider ui-right-slider"><img class="ui-sidebar-slider-img" src="<?php echo image_path('icons/plus') ?>"></span>
		</h2>
		<div class="ui-sidebar-nav ui-accordion-box ui-display-none" id="ui-panel-3">
			<ul class="nav nav-sidebar">
				<li>
					<a href="<?php echo url_for('company/index') ?>">
						<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/school') ?>">
						<?php echo __('Company') ?>
					</a>
				</li> 
				<li>
					<a href="<?php echo url_for('organization/index') ?>">
						<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/organization') ?>">
						<?php echo __('Organization') ?>
					</a>
				</li> 
				<li>
					<a href="<?php echo url_for('employee/index') ?>">
						<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/employee') ?>">
						<?php echo __('People') ?>
					</a>
				</li>   
			</ul>
		</div>
	</div> 
	<?php endif; ?>
	<?php if($sf_user->canAccess(ModuleCore::$_ADMINISTRATOR) && ($sf_user->getAttribute('userRoleTypeID') == UserCore::$_SUPER_ADMINISTRATOR || $sf_user->getAttribute('userRoleTypeID') == UserCore::$_ADMINISTRATOR) ): ?>
	<div class="ui-sidebar-nav-box">
		<h2 class="ui-sidebar-header">
			<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/user_administration') ?>">
			<?php echo __('Administrator') ?>
			<span class="ui-accordion-slider ui-right-slider ui-display-none"><img class="ui-sidebar-slider-img" src="<?php echo image_path('icons/minus') ?>"></span>
			<span class="ui-accordion-slider ui-right-slider"><img class="ui-sidebar-slider-img" src="<?php echo image_path('icons/plus') ?>"></span>
		</h2>
		<div class="ui-sidebar-nav ui-accordion-box ui-accordion-box <?php echo ($sf_request->getParameter('module') == 'administrator' || $sf_request->getParameter('module') == 'user' || $sf_request->getParameter('module') == 'user_role' || $sf_request->getParameter('module') == 'user_group' || $sf_request->getParameter('module') == 'module_setting') ? '':'ui-display-none' ?>" id="ui-panel-4">
			<ul class="nav nav-sidebar">
				<li>
					<a href="<?php echo url_for('administrator/user') ?>">
						<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/user') ?>">
						<?php echo __('Users') ?>
					</a>
				</li> 
				<li>
					<a href="<?php echo url_for('administrator/user_group') ?>">
						<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/group') ?>">
						<?php echo __('User Groups') ?>
					</a>
				</li> 
				<li>
					<a href="<?php echo url_for('administrator/user_role') ?>">
						<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/user_role') ?>">
						<?php echo __('User Roles') ?>
					</a>
				</li> 
				<li>
					<a href="<?php echo url_for('administrator/module') ?>">
						<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/module') ?>">
						<?php echo __('Modules') ?>
					</a>
				</li> 
				<li>
					<a href="<?php echo url_for('administrator/user_activities') ?>">
						<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/user_activities') ?>">
						<?php echo __('User Activities') ?>
					</a>
				</li> 
			</ul>
		</div>
	</div> 
	<?php endif; ?>
	<div class="ui-sidebar-nav-box">
		<h2 class="ui-sidebar-header">
			<img class="ui-sidebar-nav-img" src="<?php echo image_path('settings/reports') ?>">
			<?php echo __('Reports') ?>
			<span class="ui-accordion-slider ui-right-slider ui-display-none"><img class="ui-sidebar-slider-img" src="<?php echo image_path('icons/minus') ?>"></span>
			<span class="ui-accordion-slider ui-right-slider"><img class="ui-sidebar-slider-img" src="<?php echo image_path('icons/plus') ?>"></span>
		</h2>
		<div class="ui-sidebar-nav ui-accordion-box ui-accordion-box ui-display-none" id="ui-panel-5">
			<ul class="nav nav-sidebar">
				<?php if($sf_request->getParameter('module') == 'report' && ($sf_request->getParameter('action') == 'account_receivable' || $sf_request->getParameter('action') == 'customer_ledger' || $sf_request->getParameter('action') == 'sales_journal' || $sf_request->getParameter('action') == 'sales_order_journal' || $sf_request->getParameter('action') == 'sales_tax_codes')): ?>
					<li>
						<a href="<?php echo url_for('report/cash_receipt_journal') ?>">
							<img class="ui-sidebar-nav-img" src="<?php echo image_path('icons/save') ?>">
							<?php echo __('Cash Receipts Journal') ?>
						</a>
					</li> 
					<li>
						<a href="<?php echo url_for('report/customer_ledger') ?>">
							<img class="ui-sidebar-nav-img" src="<?php echo image_path('icons/save') ?>">
							<?php echo __('Customer Ledgers') ?>
						</a>
					</li> 
					<li>
						<a href="<?php echo url_for('report/sales_journal') ?>">
							<img class="ui-sidebar-nav-img" src="<?php echo image_path('icons/save') ?>">
							<?php echo __('Sales Journal') ?>
						</a>
					</li> 
					<li>
						<a href="<?php echo url_for('report/sales_order_journal') ?>">
							<img class="ui-sidebar-nav-img" src="<?php echo image_path('icons/save') ?>">
							<?php echo __('Sales Order Journal') ?>
						</a>
					</li> 
					<li>
						<a href="<?php echo url_for('report/sales_tax_codes') ?>">
							<img class="ui-sidebar-nav-img" src="<?php echo image_path('icons/update') ?>">
							<?php echo __('Sales Tax Codes') ?>
						</a>
					</li> 
				<?php endif; ?>
				<?php if($sf_request->getParameter('module') == 'report' && ($sf_request->getParameter('action') == 'account_payable' || $sf_request->getParameter('action') == 'purchase_journal' || $sf_request->getParameter('action') == 'purchase_order_journal' || $sf_request->getParameter('action') == 'vendor_ledger' )): ?>
					<li>
						<a href="<?php echo url_for('report/purchase_journal') ?>">
							<img class="ui-sidebar-nav-img" src="<?php echo image_path('icons/edit') ?>">
							<?php echo __('Purchase Journal') ?>
						</a>
					</li> 
					<li>
						<a href="<?php echo url_for('report/purchase_order_journal') ?>">
							<img class="ui-sidebar-nav-img" src="<?php echo image_path('icons/edit') ?>">
							<?php echo __('Purchase Order Journal') ?>
						</a>
					</li> 
					<li>
						<a href="<?php echo url_for('report/vendor_ledger') ?>">
							<img class="ui-sidebar-nav-img" src="<?php echo image_path('icons/edit') ?>">
							<?php echo __('Vendor Ledgers') ?>
						</a>
					</li>  
				<?php endif; ?>
				<?php if($sf_request->getParameter('module') == 'report' && ($sf_request->getParameter('action') == 'general_ledger' || $sf_request->getParameter('action') == 'chart_of_accounts' || $sf_request->getParameter('action') == 'general_journal' || $sf_request->getParameter('action') == 'general_ledger_trial_balance' || $sf_request->getParameter('action') == 'cash_receipts_journal' )): ?>
					<li>
						<a href="<?php echo url_for('report/chart_of_accounts') ?>">
							<img class="ui-sidebar-nav-img" src="<?php echo image_path('icons/edit') ?>">
							<?php echo __('Chart of Accounts') ?>
						</a>
					</li> 
					<li>
						<a href="<?php echo url_for('report/general_journal') ?>">
							<img class="ui-sidebar-nav-img" src="<?php echo image_path('icons/edit') ?>">
							<?php echo __('General Journal') ?>
						</a>
					</li> 
					<li>
						<a href="<?php echo url_for('report/general_ledger') ?>">
							<img class="ui-sidebar-nav-img" src="<?php echo image_path('icons/edit') ?>">
							<?php echo __('General Ledger') ?>
						</a>
					</li> 
					<li>
						<a href="<?php echo url_for('report/general_ledger_trial_balance') ?>">
							<img class="ui-sidebar-nav-img" src="<?php echo image_path('icons/edit') ?>">
							<?php echo __('General Ledger Trial Balance') ?>
						</a>
					</li> 
					<li>
						<a href="<?php echo url_for('report/cash_receipts_journal') ?>">
							<img class="ui-sidebar-nav-img" src="<?php echo image_path('icons/edit') ?>">
							<?php echo __('Working Trial Balance') ?>
						</a>
					</li> 
				<?php endif; ?>
			</ul>
		</div>
	</div> 
</div>
<script>
	$(document).ready(function() {
		$('.ui-sidebar-header').click(function() {
			if($(this).next().hasClass('ui-display-none')) {
				$(this).next().removeClass('ui-display-none');
				$(this).next().slideDown('slow');
			} else {
				$(this).next().slideToggle();
			}
			return false;	
		}); 
	}); 
		
</script>

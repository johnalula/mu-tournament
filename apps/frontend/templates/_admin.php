<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<span class="navbar-brand" title="<?php echo __('eAurora Electronic Inventory Management System') ?>">
				<a href="<?php echo url_for('dashboard/index') ?>">
					<img class="navbar-brand-img" src="<?php echo image_path('images/mulogo') ?>">
					<?php echo __('eMUTMS') ?>
				</a>
			</span>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav"> 
				<?php if($sf_user->canAccess(ModuleCore::$_ADMINISTRATOR) && ($sf_user->getAttribute('userRoleTypeID') == UserCore::$_SUPER_ADMINISTRATOR || $sf_user->getAttribute('userRoleTypeID') == UserCore::$_ADMINISTRATOR) ): ?>
					<li class="dropdown <?php echo ($sf_request->getParameter('module') == 'registration' || $sf_request->getParameter('module') == 'admission' || $sf_request->getParameter('module') == 'enrollment' || $sf_request->getParameter('module') == 'class_allocation' || $sf_request->getParameter('module') == 'course_schedule' || $sf_request->getParameter('module') == 'admission') ? 'active':'' ?>">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<img class="navbar-nav-img" src="<?php echo image_path('settings/task') ?>">
							<span class="ui-hot-key"></span><?php echo __('System') ?><span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="<?php echo url_for('dashboard/index') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/registration') ?>"><?php echo __('Control Panel') ?>
								</a>
							</li>
							<li>
								<a href="<?php echo url_for('sales/index') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/sales') ?>"><?php echo __('Global Configuration') ?>
								</a>
							</li>  
							<li role="separator" class="divider"></li> 
							<li>
								<a href="<?php echo url_for('payment/index') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/course') ?>"><?php echo __('System Info') ?>
								</a>
							</li> 
							<li>
								<a href="<?php echo url_for('system_setting/index') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/code_generator') ?>"><?php echo __('Code Generator') ?>
								</a>
							</li>
						</ul>
					</li>  
				<?php endif; ?>
				<?php if($sf_user->canAccess(ModuleCore::$_TOURNAMENT) ): ?>
					<li class="dropdown <?php echo ($sf_request->getParameter('module') == 'tournament') ? 'active':'' ?>">
						<a href="<?php echo url_for('tournament/index') ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<img class="navbar-nav-img" src="<?php echo image_path('settings/championship') ?>">
							<span class="ui-hot-key"></span><?php echo __('Tournament') ?><span class="caret"></span>
						</a>
						<ul class="dropdown-menu">  
							<li>
								<a href="<?php echo url_for('tournament/index') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/championship') ?>"><?php echo __('Tournament') ?>
								</a>
							</li>  
							<li>
								<a href="<?php echo url_for('sport_games/index') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/sports') ?>"><?php echo __('Sport Games') ?>
								</a>
							</li>  
							<li role="separator" class="divider"></li> 
							<li>
								<a href="<?php echo url_for('tournament_setup/index') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/sport_games') ?>"><?php echo __('Game Setup') ?>
								</a>
							</li> 
							<li class="">
								<a href="<?php echo url_for('game_category/index') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/game_types') ?>"><?php echo __('Sport Game Types') ?>
								</a>
							</li>  
							<li class="">
								<a href="<?php echo url_for('tournament_setup/index') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/game_types') ?>"><?php echo __('Tournament Vanue') ?>
								</a>
							</li>  
						</ul>
					</li>  
				<?php endif; ?>
				<?php if($sf_user->canAccess(ModuleCore::$_TEAM_GROUP)):  ?> 
					<li class="dropdown <?php echo ($sf_request->getParameter('module') == 'tournament_match') ? 'active':'' ?>">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<img class="navbar-nav-img" src="<?php echo image_path('settings/clock') ?>">
							<span class="ui-hot-key"></span><?php echo __('Matchs') ?><span class="caret"></span>
						</a>
						<ul class="dropdown-menu">  
							<li>
								<a href="<?php echo url_for('match/index') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/clock') ?>"><?php echo __('Matchs') ?>
								</a>
							</li> 
							<li>
								<a href="<?php echo url_for('tournament_fixture/index') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/timetable') ?>"><?php echo __('Match Fixtures') ?>
								</a>
							</li>
							<li>
								<a href="<?php echo url_for('tournament_match/chart_type') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/account_chart') ?>"><?php echo __('Match Tables') ?>
								</a>
							</li>
							<li role="separator" class="divider"></li> 
							<li class="">
								<a href="<?php echo url_for('tournament_match/result') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/people') ?>"><?php echo __('Fixture Result') ?>
								</a>
							</li>
							<li class="">
								<a href="<?php echo url_for('tournament_match/medal_award') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/tournament_match') ?>"><?php echo __('Medal Award') ?>
								</a>
							</li> 
							<li role="separator" class="divider"></li> 
							<li class="">
								<a href="<?php echo url_for('tournament_match/team') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/people') ?>"><?php echo __('Team Standings') ?>
								</a>
							</li>
							<li class="">
								<a href="<?php echo url_for('tournament_match/award') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/tournament_match') ?>"><?php echo __('Awards') ?>
								</a>
							</li> 
						</ul>
					</li>  
				<?php endif; ?>
				<?php if($sf_user->canAccess(ModuleCore::$_TEAM) && $sf_user->canAccess(ModuleCore::$_TEAM_GROUP)):  ?> 
					<li class="dropdown <?php echo ($sf_request->getParameter('module') == 'instructor') ? 'active':'' ?>">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<img class="navbar-nav-img" src="<?php echo image_path('settings/team') ?>"><span class="ui-hot-key"></span>
							<?php echo __('Teams') ?><span class="caret"></span>
						</a>
						<ul class="dropdown-menu"> 
							<?php if($sf_user->canAccess(ModuleCore::$_TEAM_GROUP) ): ?>
							<li class="">
								<a href="<?php echo url_for('team_group/index') ?>">
									<img class="navbar-img" src="<?php echo image_path('icons/groups') ?>"><?php echo __('Team Groups') ?>
								</a>
							</li>
							<?php endif; ?> 
							<li role="separator" class="divider"></li> 
							<li>
								<a href="<?php echo url_for('team/index') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/company') ?>"><?php echo __('Teams') ?>
								</a>
							</li> 
							<li>
								<a href="<?php echo url_for('organization/index') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/people') ?>"><?php echo __('Contestants') ?>
								</a>
							</li>
							<li class="">
								<a href="<?php echo url_for('employee/index') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/employees') ?>"><?php echo __('People') ?>
								</a>
							</li> 
						</ul>
					</li>   
				<?php endif; ?>
				<?php if($sf_user->canAccess(ModuleCore::$_ADMINISTRATOR) && ($sf_user->getAttribute('userRoleTypeID') == UserCore::$_SUPER_ADMINISTRATOR || $sf_user->getAttribute('userRoleTypeID') == UserCore::$_ADMINISTRATOR) ): ?>
					<li class="dropdown <?php echo ($sf_request->getParameter('module') == 'school' || $sf_request->getParameter('module') == 'school_setting' || $sf_request->getParameter('module') == 'campus' ) ? 'active':'' ?>">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<img class="navbar-nav-img" src="<?php echo image_path('settings/system_setting') ?>"><span class="ui-hot-key"></span>
							<?php echo __('Adminitrator') ?><span class="caret"></span>
						</a>
						<ul class="dropdown-menu"> 
							<li class="<?php echo ($sf_request->getParameter('module') == 'system_setting') ? 'active':'' ?>">
								<a href="<?php echo url_for('school/calendar') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/system_setting') ?>"><?php echo __('Manage') ?>
								</a>
							</li> 
							<li role="separator" class="divider"></li> 
							<li class="<?php echo ($sf_request->getParameter('module') == 'currency') ? 'active':'' ?>">
								<a href="<?php echo url_for('system_setting/currency') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/currency') ?>"><?php echo __('Users') ?>
								</a>
							</li>
							<li>
								<a href="<?php echo url_for('system_setting/unit') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/group') ?>"><?php echo __('Groups') ?>
								</a>
							</li> 
							<li>
								<a href="<?php echo url_for('system_setting/unit') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/user_role') ?>"><?php echo __('User Roles') ?>
								</a>
							</li> 
							<li role="separator" class="divider"></li> 
							<li>
								<a href="<?php echo url_for('system_setting/unit_conversion') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/key') ?>"><?php echo __('Access Levels') ?>
								</a>
							</li> 
							<li>
								<a href="<?php echo url_for('administrator/activity_log') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/user_activities') ?>"><?php echo __('User Activities') ?>
								</a>
							</li> 
							<li>
								<a href="<?php echo url_for('administrator/module') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/module') ?>"><?php echo __('Module Setting') ?>
								</a>
							</li> 
						</ul>
					</li>  
				<?php endif; ?>
				<?php if($sf_user->canAccess(ModuleCore::$_TEAM_GROUP)):  ?> 
					<li class="dropdown">
						<a href="<?php echo url_for('report/index') ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<img class="navbar-nav-img" src="<?php echo image_path('settings/reports') ?>"><span class="ui-hot-key">R</span><?php echo __('eport') ?><span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="<?php echo url_for('report/account_receivable') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/user') ?>"><?php echo __('Fixture Result') ?>
								</a>
							</li>
							<li>
								<a href="<?php echo url_for('report/account_payable') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/user') ?>"><?php echo __('Match Result') ?>
								</a>
							</li>
							<li>
								<a href="<?php echo url_for('report/general_ledger') ?>">
									<img class="navbar-img" src="<?php echo image_path('settings/group') ?>"><?php echo __('Tournament Result') ?>
								</a>
							</li>  
						</ul>
					</li>  
				<?php endif; ?>
			</ul>
			<!-- ******* Right align toolbar menu ******** -->
			 
		</div><!--/.nav-collapse -->
	</div>
</nav>  

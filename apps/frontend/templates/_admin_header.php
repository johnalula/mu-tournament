
<nav class="navbar navbar-default navbar-fixed-top navbar-back">
	<div class="container" style="border:0px solid #f00;">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#" title="<?php echo __('MU Tournament Management System') ?>">
			<img class="mu-logo-sm" src="<?php echo image_path('images/mulogo') ?>">
			</a>
			<a class="navbar-brand" href="#" title="<?php echo __('MU Tournament Management System') ?>">
			<?php echo __('MU-TMS') ?>
			</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown active">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('System Setting') ?> <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo url_for('home/index') ?>"><?php echo __('Control Panel') ?></a></li>
						<li role="separator" class="divider"></li>
						<li class="dropdown-header"><?php echo __('1') ?></li>
						<li><a href="<?php echo url_for('home/index') ?>"><?php echo __('1') ?></a></li>
						<li><a href="<?php echo url_for('home/index') ?>"><?php echo __('1') ?></a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('Tournament') ?><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo url_for('tournament/index') ?>"><?php echo __('Tournament') ?></a></li>
						<li><a href="<?php echo url_for('sport_games/index') ?>"><?php echo __('Sport Games') ?></a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo url_for('groups/index') ?>"><?php echo __('Groups') ?></a></li>
						<li><a href="<?php echo url_for('team/index') ?>"><?php echo __('Teams') ?></a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('Matchs') ?><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo url_for('match/index') ?>"><?php echo __('Mach') ?></a></li>
						<li><a href="<?php echo url_for('home/index') ?>"><?php echo __('Match Fixtures') ?></a></li>
						<li><a href="<?php echo url_for('home/index') ?>"><?php echo __('Match Table') ?></a></li>
						<li role="separator" class="divider"></li>
						<li class="dropdown-header"><?php echo __('') ?></li>
						<li><a href="<?php echo url_for('home/index') ?>"><?php echo __('Score Table') ?></a></li>
						<li><a href="<?php echo url_for('home/index') ?>"><?php echo __('') ?></a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('Game Setup') ?><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo url_for('home/index') ?>"><?php echo __('Round') ?></a></li>
						<li><a href="<?php echo url_for('home/index') ?>"><?php echo __('Distance') ?></a></li>
						<li><a href="<?php echo url_for('home/index') ?>"><?php echo __('') ?></a></li>
						<li role="separator" class="divider"></li>
						<li class="dropdown-header"><?php echo __('') ?></li>
						<li><a href="<?php echo url_for('home/index') ?>"><?php echo __('') ?></a></li>
						<li><a href="<?php echo url_for('home/index') ?>"><?php echo __('') ?></a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('Administrator') ?> <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo url_for('home/index') ?>"><?php echo __('User') ?></a></li>
						<li><a href="<?php echo url_for('home/index') ?>"><?php echo __('User Groups') ?></a></a></li>
						<li><a href="<?php echo url_for('home/index') ?>"><?php echo __('User Roles') ?></a></li>
						<li role="separator" class="divider"></li>
						<li class="dropdown-header"><?php echo __('Nav header') ?></li>
						<li><a href="<?php echo url_for('home/index') ?>"><?php echo __('Separated link') ?></a></li>
						<li><a href="<?php echo url_for('home/index') ?>"><?php echo __('One more separated link') ?></a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="../navbar/">MU-TMS</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">System Setting <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo url_for('home/index') ?>"><?php echo __('User') ?></a></li>
						<li><a href="<?php echo url_for('home/index') ?>"><?php echo __('User') ?></a></li>
						<li><a href="#">Something else here</a></li>
						<li role="separator" class="divider"></li>
						<li class="dropdown-header">Nav header</li>
						<li><a href="<?php echo url_for('home/index') ?>">Separated link</a></li>
						<li><a href="<?php echo url_for('home/index') ?>">One more separated link</a></li>
					</ul>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>
<div class="ui-module-box">
	<div class="ui-display container">
		<?php echo ucfirst($sf_request->getParameter('module')) ?>
	</div>
</div>






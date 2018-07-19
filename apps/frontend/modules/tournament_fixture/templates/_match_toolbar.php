<ul class="nav navbar-nav ui-toolbar-action">
	<li class="">
		<a href="<?php echo url_for('match/new') ?>" title="<?php echo __('Create New Team') ?>" id="createNewTeam" class="" >
			<img class="navbar-nav-img" src="<?php echo image_path('settings/award_star_gold_1') ?>">
			<?php echo __('Medal Award') ?>
		</a>
	</li>	  
	<li class="">
		<a href="<?php echo url_for('tournament_award/edit_medal_award') ?>" title="<?php echo __('Create New Team') ?>" id="createNewTeam" class="" >
			<img class="navbar-nav-img" src="<?php echo image_path('settings/award_star_gold_1') ?>">
			<?php echo __('Edit Medal Award') ?>
		</a>
	</li>	  
</ul>

<div id="" class="navbar-collapse ui-toolbar">
	<ul class="nav navbar-nav ui-toolbar-action">
	
		<li class="">
			<button title="<?php echo __('Save Game Round Information') ?>" id="createGameRoundType" class="ui-disabled-toolbar-btn" disabled >
				<img class="navbar-nav-img" src="<?php echo image_path('icons/save') ?>">
				<?php echo __('Save') ?>
			</button>
		</li>	
		<li class="">
			<button title="<?php echo __('Cancel Game Round Information') ?>" id="cancelGameRoundType" class="ui-disabled-toolbar-btn" disabled>
				<img class="navbar-nav-img" src="<?php echo image_path('icons/cancel') ?>">
				<?php echo __('Cancel') ?>
			</button>
		</li>
		<li class="">
			<a href="<?php echo url_for('game_category/index') ?>" title="<?php echo __('Back to Game Category List') ?>" id="backToGameCategory" class="" >
				<img class="navbar-nav-img" src="<?php echo image_path('icons/details') ?>">
				<?php echo __('List') ?>
			</a>
		</li> 
		 
	</ul>
</div>


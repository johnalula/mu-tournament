<div class="moduletable_menu">
	<div class="moduletable_top">
		<h3><?php echo ('Team Standings') ?></h3>
	</div>
	<div class="panel-group" id="accordion">
		<?php foreach($_participantTeams as $_key => $_participantTeam ): ?>
		<div class="panel">
			<div class="panel-heading">
				<h5 class="panel-title" rel="<?php echo $_key ?>">
				<a data-toggle="collapse" data-parent="#accordion"	href="#collapse_<?php echo $_key ?>" rel="<?php echo $_key ?>">
					<img class="ui-img-list <?php echo $_key == 0 ? '':'ui-display-none' ?>" id="ui-minus-img_<?php echo $_key ?>" src="<?php echo image_path('icons/minus') ?>" > 
					<img class="ui-img-list <?php echo $_key == 0 ? 'ui-display-none':'' ?>" id="ui-plus-img_<?php echo $_key ?>" src="<?php echo image_path('icons/plus') ?>" > 
					<?php echo  $_participantTeam->teamName ?> 
				</a>
				</h5>
			</div> 
		</div>   
		<?php endforeach; ?> 
	</div>
</div>


<div class="moduletable_menu">
	<div class="moduletable_top">
		<h3><?php echo ('Sport Games') ?></h3>
	</div>
	<div class="panel-group" id="accordion">
		<?php foreach($_tournamentGames as $_key => $_tournamentGame ): ?>
		<div class="panel">
			<div class="panel-heading">
				<h5 class="panel-title" rel="<?php echo $_key ?>">
				<a data-toggle="collapse" data-parent="#accordion"	href="#collapse_<?php echo $_key ?>" rel="<?php echo $_key ?>">
					<img class="ui-img-list <?php echo $_key == 0 ? '':'ui-display-none' ?>" id="ui-minus-img_<?php echo $_key ?>" src="<?php echo image_path('icons/minus') ?>" > 
					<img class="ui-img-list <?php echo $_key == 0 ? 'ui-display-none':'' ?>" id="ui-plus-img_<?php echo $_key ?>" src="<?php echo image_path('icons/plus') ?>" > 
					<?php echo  $_tournamentGame->categoryName ?> 
				</a>
				</h5>
			</div> 
		</div>   
		<?php endforeach; ?> 
	</div>
</div>

  


<script>
	$(document).ready(function() {
		$('.panel-title').click(function() {
			var keyValue = $(this).attr('rel');
			if($('#collapse_'+keyValue).hasClass('in')) {
				$('#ui-minus-img_'+keyValue).addClass('ui-display-none');
				$('#ui-plus-img_'+keyValue).removeClass('ui-display-none');
			} else {
				$('#ui-minus-img_'+keyValue).removeClass('ui-display-none');
				$('#ui-plus-img_'+keyValue).addClass('ui-display-none');	
			}
			//return false;	
		}); 
	}); 
		
</script>

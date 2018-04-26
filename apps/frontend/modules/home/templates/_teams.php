<div class="row">
	<?php foreach($_candidateTeams as $_key => $_participantTeam ): ?>
	<div class="col-sm-2 col-md-1" style="border:1px solid #f00;">
		<div class="thumbnail">
			<img class="first-slide"  src="<?php echo image_path('images/mulogo.png') ?>" alt="Generic placeholder thumbnail">
		</div>
		<div class="caption">
			<h6><?php echo  $_participantTeam->teamName ?></h6>
			<p> </p>
			<p>
			<a href="#" class="btn btn-primary" role="button">
				<?php echo  $_participantTeam->teamAlias  ?>
			</a> 
			</p>
		</div>
	</div> 
	<?php endforeach; ?>
</div> 

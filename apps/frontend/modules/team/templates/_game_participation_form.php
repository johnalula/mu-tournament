<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createTeamForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Team Information') ?>">
						<?php echo __('Game Participation') ?>
					</legend> 
					<div class="form-group">
						<label for="firstname" class="col-sm-102 control-label"><?php echo __('Sport Game') ?>:</label>
						<div class="col-sm-6">
							<div class="input-group">
								<input type="text" class="form-control selectCandidateProductPurchaseOrder" id="product_purchase_order" name="team[team_name]" placeholder="<?php echo __('Product Purchase Order') ?>" title="<?php echo __('Product Purchase Order') ?>" value="" data-toggle="modal" data-target="#candidateProductPurchaseOrderModal"  readonly>
								<input type="hidden" class="form-control" id="product_purchase_order_id" name="team[team_name]" placeholder="" value="">
								<input type="hidden" class="form-control" id="product_purchase_order_token_id" name="team[team_name]" value=""> 
								<span class="input-group-btn">
									<button class="btn btn-default selectCandidateSportGame" type="button" data-toggle="modal" data-target="#candidateSportGameModal" title="<?php echo __('Candidat Sport Game') ?>">
										<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
									</button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div>
					<div class="form-group">
						<label for="firstname" class="col-sm-102 control-label"><?php echo __('Name') ?>:</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="team_name" name="team[team_name]" placeholder="<?php echo __('Name') ?>">
						</div>
					</div>
					
					<div class="form-group" style="border:0px solid #f00;">
						<label for="lastname" class="col-sm-102 control-label"><?php echo __('Alias') ?>:</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="team_alias"	name="team[team_alias]"	placeholder="<?php echo __('Alias') ?>">
						</div>
					</div>
					<div class="form-group" style="border:0px solid #f00;">
						<label for="season" class="col-sm-102 control-label"><?php echo __('Country') ?>:</label>
						<div class="col-sm-201">
							 <select id="country" name="team[country]" class="form-control" title="<?php echo __('Team Country') ?>">
								<?php foreach(SystemCore::processCountrys() as $_key => $_country): ?>								 
									<option value="<?php echo $_key ?>" <?php echo $_key == SystemCore::processDefaultCountry () ? 'selected':'' ?> >
										<?php echo $_country ?>
									</option>								 
								<?php endforeach; ?>
							</select>
						</div>
						<label for="lastname" class="col-sm-101 control-label"><?php echo __('Team City') ?>:</label>
						<div class="col-sm-201">
							 <input type="text" class="form-control" id="team_city"	name="team[team_city]"	placeholder="<?php echo __('Team City') ?>">
						</div>
					</div> 
					<div class="form-group">
						<label for="lastname" class="col-sm-102 control-label">Decription</label>
						<div class="col-sm-6">
							<textarea class="form-control" rows=3 id="description" name="team[description]" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>" ></textarea>
						</div>
					</div> 
				</fieldset> 
			</div> 
			<div class="ui-clear-fix"></div>
		</div> 
	</form>
</div> 

<script>
	$('#status').change(function(e) {
		$("#createTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createTeamFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	 
	$('#team_name').keyup(function(e) {
		$("#createTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createTeamFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#team_alias').keyup(function(e) {
		$("#createTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createTeamFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#description').keyup(function(e) {
		$("#createTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeam").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		$("#createTeamFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelTeamFooter").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$( "#start_date" ).datepicker({  
		yearRange: "2005:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
	$( "#end_date" ).datepicker({  
		yearRange: "2005:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
</script>

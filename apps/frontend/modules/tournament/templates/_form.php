<div class="ui-panel-form-box ui-main-panel-form-box-margin" id="">   
	<form class="form-horizontal" id="createCategoryForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="ui-panel-grid-form12" id=""> 
				<fieldset  class="ui-form-fieldset-frame">
					<legend class="ui-form-legend">
						<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('Product Category Information') ?>">
						<?php echo __('Product Category') ?>
					</legend>
						<div class="form-group">
							<label for="firstname" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" id="firstname" placeholder="Enter First Name">
							</div>
						</div>
						<div class="form-group">
							<label for="lastname" class="col-sm-2 control-label">Alias</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" id="lastname"	placeholder="Enter Last Name">
							</div>
						</div>
						<div class="form-group">
							<label for="lastname" class="col-sm-2 control-label">Decription</label>
							<div class="col-sm-5">
								<textarea class="form-control" rows="3"></textarea>
							</div>
						</div>
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Sign in</button>
						</div>

				</fieldset> 
			</div> 
			<div class="ui-clear-fix"></div>
		</div> 
	</form>
</div> 

<script>
	$('#product_category_group_id').change(function(e) {
		$("#createProductCategory").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelProductCategory").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	$('#product_category_class_id').change(function(e) {
		$("#createProductCategory").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelProductCategory").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});  
	 
	$('#product_category_name').keyup(function(e) {
		$("#createProductCategory").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelProductCategory").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#description').keyup(function(e) {
		$("#createProductCategory").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelProductCategory").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$( "#payment_date" ).datepicker({  
		yearRange: "2005:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
</script>

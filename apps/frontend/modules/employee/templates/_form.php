<div class="ui-panel-form-box" id="">   
	<form class="form-horizontal" id="createEmployeeForm" role="form" action="" method=""> 
		<input type="hidden" class="form-control" id="test_id" name="test_id" value="">
		<div class="ui-row" id=""> 
			<div class="col-md-6 ui-col-sm">
				<div class="ui-fieldset-frame-container ui-col-sm-fieldset">
					<fieldset  class="ui-form-fieldset-frame">
						<legend class="ui-form-legend">
							<img src="<?php echo image_path('icons/add_icon') ?>" title="<?php echo __('New Employee Information') ?>">
							<?php echo __('Employee Info') ?>
						</legend>
						<div class="form-group">
							<label class="col-sm-2  control-label" title="<?php echo __('Employee Parent Organization') ?>"><?php echo __('Company') ?>:<span class="ui-red-text">*</span></label>
							<div class="col-sm-80">
								<div class="input-group">
									<input type="text" class="form-control selectEmployeeParentOrganization" id="parent_organization_name" name="parent_organization_name" placeholder="<?php echo __('Parent Organization') ?>" title="<?php echo __('Employee Parent Organization') ?>" value="<?php echo $sf_user->getAttribute('organizationName') ?>" data-toggle="modal" data-target="#parentOrganizationPartyModal"  readonly>
									<input type="hidden" class="form-control" id="organization_id" name="organization_id" placeholder="<?php echo __('User') ?>" value="<?php echo $sf_user->getAttribute('orgID') ?>">
									<input type="hidden" class="form-control" id="organization_token_id" name="organization_token_id" value="<?php echo $sf_user->getAttribute('orgTokenID') ?>">
									<span class="input-group-btn">
										<button class="btn btn-default selectCandidateOrganization" type="button" data-toggle="modal" data-target="#candidateOrganizationModal" title="<?php echo __('Candidat Employee Parent Organization') ?>">
											<img class="btn-img" src="<?php echo image_path('icons/find') ?>" >
										</button>
									</span>
								</div><!-- /input-group -->
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Employee First Name') ?>"><?php echo __('Name') ?>:<span class="ui-red-text">*</span></label>
							<div class="col-sm-80"> 
								<input type="text" class="form-control" id="employee_name" name="employee_name" placeholder="<?php echo __('Employee Name') ?>" title="<?php echo __('Employee name') ?>" autofocus required rel="ui-string" >
								<span class="required-error ui-display-none" id="employee_name_required"><?php echo __("Required field!") ?></span>
								<span class="invalid-error ui-display-none" id="employee_name_invalid"><?php echo __("Invalid input!") ?></span>
							</div><!-- /input-group --> 
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Employee Father Name') ?>"><?php echo __('FName') ?>:<span class="ui-red-text">*</span></label>
							<div class="col-sm-80"> 
								<input type="text" class="form-control" id="employee_father_name" name="employee_father_name" placeholder="<?php echo __('Employee Father Name') ?>" title="<?php echo __('Employee Father name') ?>"required rel="ui-string">
								<span class="required-error ui-display-none" id="employee_father_name_required"><?php echo __("Required field!") ?></span>
								<span class="invalid-error ui-display-none" id="employee_father_name_invalid"><?php echo __("Invalid input!") ?></span>
							</div><!-- /input-group --> 
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Employee Grand Father Name') ?>"><?php echo __('GF Name') ?>:<span class="ui-red-text">*</span></label>
							<div class="col-sm-80"> 
								<input type="text" class="form-control" id="employee_grand_father_name" name="employee_grand_father_name" placeholder="<?php echo __('Employee Grand Father Name') ?>" title="<?php echo __('Grand father name') ?>"required rel="ui-string" >
								<span class="required-error ui-display-none" id="employee_grand_father_name_required"><?php echo __("Required field!") ?></span>
								<span class="invalid-error ui-display-none" id="employee_grand_father_name_invalid"><?php echo __("Invalid input!") ?></span>
							</div><!-- /input-group --> 
						</div> 
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Employee Place of Birth') ?>"><?php echo __('POB') ?>:</label>
							<div class="col-sm-80"> 
								<input type="text" class="form-control" id="place_of_birth" name="place_of_birth" placeholder="<?php echo __('Place of Birth') ?>" title="<?php echo __('Place of birth') ?>" rel="ui-string" >
								<span class="invalid-error ui-display-none"><?php echo __("Invalid input!") ?></span>
							</div><!-- /input-group --> 
						</div> 
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Employee Gender') ?>"><?php echo __('Gender') ?>:</label>
							<div class="col-sm-31"> 
								<select id="employee_gender" name="employee_gender" class="form-control" title="<?php echo __('Employee Gender') ?>">
									<?php foreach(PartyCore::processAllGenders() as $_key => $_mode): ?>								 
										<option value="<?php echo  $_key ?>">
											<?php echo $_mode ?>
										</option>								 
									<?php endforeach; ?>
								</select>
							</div><!-- /input-group --> 
							<label class="col-sm-21 control-label" title="<?php echo __('Employee Date of Birth') ?>"><?php echo __('DOB') ?>:<span class="ui-red-text"></span></label>
							<div class="col-sm-31"> 
								<div class="input-group"> 
									<input type="text" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="<?php echo __('Date of Birth') ?>" title="<?php echo __('Employee Date of Birth') ?>" readonly rel="ui-date" >
									<span class="input-group-btn">
										<button class="btn btn-default ui-button-img" type="button" title="<?php echo __('Date of birth') ?>">
											<img class="ui-addon-img" src="<?php echo image_path('icons/calendar_small') ?>" >
										</button>
									</span> 
								</div> 
							</div><!-- /input-group --> 
						</div> 
						 
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Employee Role') ?>"><?php echo __('Role') ?>:</label>
							<div class="col-sm-31"> 
								<select id="employee_role" name="employee_role" class="form-control" title="<?php echo __('Employee Role') ?>">
									<?php foreach(PersonCore::processPersonRoles() as $_key => $_role): ?>								 
										<option value="<?php echo  $_key ?>" <?php echo PersonCore::$_EMPLOYEE == $_key ? 'selected':'' ?>>
											<?php echo $_role ?>
										</option>								 
									<?php endforeach; ?>
								</select>
							</div><!-- /input-group --> 
							<label class="col-sm-21 control-label" title="<?php echo __('Employee Status') ?>"><?php echo __('Status') ?>:<span class="ui-red-text"></span></label>
							<div class="col-sm-31"> 
								<select id="employee_status" name="employee_status" class="form-control" title="<?php echo __('Employee Status') ?>">
									<?php foreach(PersonCore::processPartytatus() as $_key => $_status): ?>								 
										<option value="<?php echo  $_key ?>" <?php echo PersonCore::$_ACTIVE == $_key ? 'selected':'' ?>>
											<?php echo $_status ?>
										</option>								 
									<?php endforeach; ?>
								</select>
							</div><!-- /input-group --> 
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>:</label>
							<div class="col-sm-80"> 
								<textarea class="form-control" rows="1" id="description" name="description" placeholder="<?php echo __('Description') ?>" title="<?php echo __('Description') ?>"></textarea>
							</div><!-- /input-group --> 
						</div> 
					</fieldset>
				</div>
				 
			</div>
			<div class="col-md-6 ui-col-sm">
				<div class="ui-fieldset-frame-container ui-col-sm-fieldset">
					<fieldset class="ui-form-fieldset-frame">
						<legend class="ui-form-legend">
							<img src="<?php echo image_path('icons/details') ?>" title="<?php echo __('Employee Detail information') ?>">
							<?php echo __('Detail Info') ?>
						</legend>
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Country') ?>"><?php echo __('Country') ?>:<span class="ui-red-text"></span></label>
							<div class="col-sm-80"> 
								<select id="country_id" name="country_id" class="form-control" title="<?php echo __('Country') ?>" disabled >
									<?php foreach(SystemCore::processCountrys () as $_key => $_type): ?>								 
										<option value="<?php echo  $_key ?>" <?php echo SystemCore::processDefaultCountry() == $_key ? 'selected':''?>  >
											<?php echo $_type.' ( '.SystemCore::processCountryAliasValue($_key).' )' ?>
										</option>								 
									<?php endforeach; ?>
								</select> 
							</div><!-- /input-group --> 
						</div>  
						<div class="form-group">
							<label class="col-sm-2 control-label"  title="<?php echo __('Employee City/Province Address') ?>"><?php echo __('Region') ?>:<span class="ui-red-text"></span></label>
							<div class="col-sm-80"> 
								<input type="text" class="form-control" id="employee_region_address" name="employee_region_address" placeholder="<?php echo __('Region') ?>" title="<?php echo __('Employee Region Address') ?>" value="Tigray" required rel="ui-region-address" > 
							</div><!-- /input-group --> 
						</div>  
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Employee Identification Type') ?>"><?php echo __('ID Type') ?>:<span class="ui-red-text"></span></label>
							<div class="col-sm-31"> 
								<select id="identification_type" name="identification_type" class="form-control" title="<?php echo __('Employee Identification Type') ?>">
									<?php foreach(PersonCore::processPersonRoles () as $_key => $_type): ?>								 
										<option value="<?php echo  $_key ?>">
											<?php echo $_type ?>
										</option>								 
									<?php endforeach; ?>
								</select> 
							</div><!-- /input-group --> 
							<label class="col-sm-21 control-label" title="<?php echo __('Employee ID Number') ?>"><?php echo __('ID') ?> #:<span class="ui-red-text"></span></label>
							<div class="col-sm-31"> 
								<input type="text" class="form-control" id="employee_id_number" name="employee_id_number" placeholder="<?php echo __('ID Number') ?>" title="<?php echo __('Employee ID Number') ?>" value="" rel="ui-identification-number" >
								<span class="required-error ui-display-none"><?php echo __("Required field!") ?></span>
								<span class="invalid-error ui-display-none"><?php echo __("Invalid input!") ?></span>
							</div><!-- /input-group --> 
						</div> 
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Employee Contact Address') ?>"><?php echo __('Address') ?>:<span class="ui-red-text">*</span></label>
							<div class="col-sm-80"> 
								<input type="text" class="form-control" id="employee_contact_adddress" name="employee_contact_adddress" placeholder="<?php echo __('Address') ?>" title="<?php echo __('Employee Address') ?>" value="Mekelle" required rel="ui-contact-address" >
								<span class="required-error ui-display-none"><?php echo __("Required field!") ?></span>
								<span class="invalid-error ui-display-none"><?php echo __("Invalid input!") ?></span>
							</div><!-- /input-group --> 
						</div> 
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Phone Number') ?>"><?php echo __('Phone') ?> #:<span class="ui-red-text">*</span></label>
							<div class="col-sm-31"> 
								<input type="text" class="form-control" id="contact_phone_number" name="contact_phone_number" placeholder="<?php echo __('Phone Number') ?>" title="<?php echo __('Phone Number') ?>" value="523452345" required rel="ui-phone-number" >
								<span class="required-error ui-display-none"><?php echo __("Required field!") ?></span>
								<span class="invalid-error ui-display-none"><?php echo __("Invalid input!") ?></span>
							</div><!-- /input-group --> 
							<label class="col-sm-21 control-label" title="<?php echo __('Mobile Number') ?>"><?php echo __('Mob.') ?> #:<span class="ui-red-text">*</span></label>
							<div class="col-sm-31"> 
								<input type="text" class="form-control" id="contact_mobile_number" name="contact_mobile_number" placeholder="<?php echo __('Mobile Number') ?>" title="<?php echo __('Mobile Number') ?>" value="352345234" rel="ui-mobile-number" >
							</div><!-- /input-group --> 
						</div>  
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('House Number') ?>"><?php echo __('House') ?> #:<span class="ui-red-text"></span></label>
							<div class="col-sm-31"> 
								<input class="form-control" id="house_number" name="house_number" type="text" placeholder="<?php echo __('House Number') ?>" title="<?php echo __('House Number') ?>" value="" rel="ui-house-number"> 
							</div><!-- /input-group --> 
							<label class="col-sm-21 control-label" title="<?php echo __('Street Number') ?>"><?php echo __('Street') ?> #:<span class="ui-red-text"></span></label>
							<div class="col-sm-31"> 
								<input type="text" class="form-control" id="street_number" name="street_number" placeholder="<?php echo __('Street Number') ?>" title="<?php echo __('Street Number') ?>" value="" rel="ui-street-number" > 
							</div><!-- /input-group --> 
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Email Address') ?>"><?php echo __('Email') ?>:<span class="ui-red-text"></span></label>
							<div class="col-sm-80"> 
								<input type="text" class="form-control" id="email_address" name="email_address" placeholder="<?php echo __('Email Address') ?>" title="<?php echo __('Email Address') ?>" value=""  rel="ui-email-address" > 
							</div><!-- /input-group --> 
						</div> 
						<div class="form-group">
							<label class="col-sm-2 control-label" title="<?php echo __('Description') ?>"><?php echo __('Description') ?>:</label>
							<div class="col-sm-80"> 
								<textarea class="form-control" rows="1" id="contact_description" name="contact_description" placeholder="<?php echo __('Contact Address Remark') ?>" title="<?php echo __('Contact Address Remark') ?>">sdfgsdfgs</textarea>
							</div><!-- /input-group --> 
						</div> 
					</fieldset>
				</div> 
				 
			</div> 
			<div class="ui-clear-fix"></div>
		</div> 
	</form>
</div> 

<script>
	
	$('#date_of_birth').change(function(e) {
		$("#createOrganizationEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelOrganizationEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$('#employee_name').keyup(function(e) {
		$("#createOrganizationEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelOrganizationEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	$('#employee_father_name').keyup(function(e) {
		$("#createOrganizationEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelOrganizationEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	$('#employee_grand_father_name').keyup(function(e) {
	$("#createOrganizationEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelOrganizationEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	$('#employee_gender').change(function(e) {
		$("#createOrganizationEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
			$("#cancelOrganizationEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	$('#employee_relationship').change(function(e) {
		$("#createEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	$('#employee_role').change(function(e) {
		$("#createEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	$('#employee_position').change(function(e) {
		$("#createEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	$('#employee_employment_type').change(function(e) {
		$("#createEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	$('#employee_type').change(function(e) {
		$("#createEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	$('#employee_status').change(function(e) {
		$("#createEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	}); 
	$('#description').keyup(function(e) {
		$("#createEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn").addClass("ui-toolbar-btn");
		$("#cancelEmployee").removeAttr("disabled").removeClass("ui-disabled-toolbar-btn");
		return false;
	});
	$( "#date_of_birth" ).datepicker({  
		yearRange: "1980:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	});
	$( "#employee_hired_date" ).datepicker({  
		yearRange: "2005:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	}); 
	$( "#employee_termination_date" ).datepicker({  
		yearRange: "2005:2020", 
		changeYear: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>'
	});
</script>

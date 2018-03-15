<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAdd(ModuleCore::$_ADMINISTRATION)):
   $_pageTitle = "System Module Setting";$_imageName = "module";  
?>  

<div class="ui-page-box">
	<?php include_partial('global/header', array('_pageTitle' => $_pageTitle, '_imageName' => $_imageName)) ?> 
	<div class="ui-main-content-box">
		<div id="ui-tab-menu" class="ui-tab-menu">
			<div class="ui-tab-menu-box">
				<div class="ui-tab-menu-content">
					<?php include_partial('global/tab_menu', array()) ?> 
				</div>
			</div>
			<div class="ui-detail-tab-list ui-grid-content-container-box" >
				<div id="ui-tab-three" class="ui-tab" style="">
					<?php include_partial('new', array( '_systemModules' => $_systemModules )) ?> 
				</div><!-- end of ui-tab-three-->
			</div> <!-- end of ui-detail-tab-list -->
			<div class="ui-clear-fix"></div>
		</div> <!-- end of tabs -->
		<div class="ui-clear-fix"></div>
	 </div> <!-- end of ui-main-list-default -->
	<?php include_partial('global/footer', array()) ?> 	 
</div>		  

<?php else: ?> 
	<div class="ui-error-container" id="ui-error-box" >
		<?php echo include_partial('global/credential_denied', array()) ?>
	</div>  
<?php endif; ?>

<?php else: ?>

	<div class="ui-success-container" id="ui-success-box" >
		<?php echo include_partial('global/authorization_denied', array()) ?>
	</div>
<?php endif; ?>   


<!-- Modal -->
<div class="modal fade" id="moduleSettingModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="insertModalOneData">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-content-container">
				<div class="modal-header modal-header-info">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">
						<?php echo __('Candidate System Modules') ?>
					</h4>
				</div>
				<div class="modal-content-body">
					<div class="ui-panel-filter-box" id="">   
						<div class="ui-panel-filter-list" id="ui-panel-filter-menu"> 
							<?php include_partial('party/modal_filter', array( )) ?> 
						</div><!-- end of ui-filter-list -->
						<div class="ui-clear-fix"></div> 
					</div><!-- end of ui-panel-filter-box -->
					<div class="modal-body">
						<div class="ui-panel-content-box ">
							<div class="ui-panel-grid-list">
								<?php include_partial('candidate_modules', array( '_modules' => $_candidates )) ?> 
							</div>
						</div>  
					</div> 	
				</div>
				
				<div class="modal-footer-container">
					<div class="ui-panel-footer-default-box-top-border">
						<div class="modal-footer">
							<button type="button" class="btn btn-default btn-xs btn-action-img" data-dismiss="modal">
								<?php echo __('Close') ?>
							</button>
							<button type="submit" class="btn btn-primary btn-xs btn-action-img" id="" >
								<img class="btn-img-xs" src="<?php echo image_path('icons/upload') ?>"><?php echo __('Insert') ?>
							</button>
						</div>  
					</div><!-- ui-panel-footer-default -->			
				</div><!-- /.modal-content -->
			</div><!-- /.modal-content -->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</form>
</div><!-- /.modal -->

<script>
	$('#createSystemModuleSetting').click(function(){
		var url = '<?php echo url_for('module_setting/createSystemModuleSetting')?>'; 
		var formName = 'createSystemModuleSettingForm';
		var data = $("form#createSystemModuleSettingForm").serialize();
		var datas = generateValidData (formName);
		processEntry(datas, url )
		///alert(datas);
		return true; 
	});
	$('.selectCandidateSystemUserPerson').click(function() {   
		var url = '<?php echo url_for('module_setting/candidateSystemModules')?>'; 
		var navName = $(this).attr('rel'); 
		var idName = 'candidate-system-module';   
		var data = '';
		processDataSelection(data, idName, url );		 
	});  
	//*********************************/
	
	$("#insertModalOneData").submit(function(e) { 
		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked"); 
		var input = $("input[name=selectCandidate]:checked", this).val();
		var listArr = input.split("$"); 
		document.getElementById("candidate_module_id").value = listArr[0];
		document.getElementById("candidate_module_name").value = listArr[1];  
		$('#createSystemModuleSetting').removeAttr("disabled").removeClass("ui-action-toolbar-disabled-menu").addClass("ui-action-toolbar-enabled-menu");
		$('#moduleSettingModal').modal('hide');
		return e.preventDefault();
	});
</script> 

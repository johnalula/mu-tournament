<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_ADMINISTRATION)):
   $_pageTitle = "Module Setting Management";$_imageName = "module";  
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
					<?php include_partial('module', array( '_modules' => $_modules )) ?> 
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
<!--- ************************  -->
 

<!-- Modal -->
<div class="modal fade" id="moduleSettingModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">
					<?php echo __('Candidate Modules') ?>
				</h4>
			</div>
			<div class="modal-body">
				<div class="ui-panel-content-box ">
					<div class="ui-panel-grid-list">
						<?php include_partial('module_setting/candidate_modules', array( '_modules' => $_candidates )) ?> 
					</div>
				</div>  
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-xs btn-action-img" data-dismiss="modal">
					<?php echo __('Close') ?>
				</button>
				<button type="button" class="btn btn-primary btn-xs btn-action-img" id="insertCandidateDate" >
					<img class="btn-img-xs" src="<?php echo image_path('icons/save') ?>"><?php echo __('Save') ?>
				</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</form>
</div><!-- /.modal -->

<script> 
 
	$("#insertCandidateDate").click(function() {  
		var input = $("input[name=selectCandidate]:checked", this).val();
		//var listArr = input.split("$"); 
		
		alert('Hello'+input);
		return false;
	});

</script>

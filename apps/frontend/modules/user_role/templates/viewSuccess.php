<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_ADMINISTRATION)):
   $_pageTitle = "User Role Management";$_imageName = "user_security";  
?> 

<div class="ui-page-box">
	<?php include_partial('global/header', array('_pageTitle' => $_pageTitle, '_imageName' => $_imageName, '_object' => $_userRole)) ?> 
	<div class="ui-main-content-box">
		<div id="ui-tab-menu" class="ui-tab-menu">
			<div class="ui-tab-menu-box">
				<div class="ui-tab-menu-content">
					<?php include_partial('global/tab_menu', array()) ?> 
				</div>
			</div>
			<div class="ui-detail-tab-list ui-grid-content-container-box" >
				<div id="ui-tab-three" class="ui-tab" style="">
					<?php include_partial('view', array('_userRole' => $_userRole, '_systemUsers' => $_systemUsers, '_userRoleAccessLevels' => $_userRoleAccessLevels)) ?> 
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
  

<script> 
  

</script>

<?php if($sf_user->isAuthenticated()): 	 
	if($sf_user->canAccess(ModuleCore::$_ADMINISTRATOR)):
	//echo sha1(md5(md5(sha1(strtoupper(trim('admin')).trim('admin'))))).'<br>';
	//echo sha1(md5(trim('admin'))).'<br>';
	
	//$_flag = UserTable::processNew ( 1, '94f12f125643718e20d329aef595bc3e', 5, '8996f322088d3d2e8d805da32d3cd057', 4, 4, 4, 'berhe', 'berhe11', $_activationKey, 1, 'adfadfasdf', $_userID , $_userTokenID  );
	//$_user = UserTable::processLogin ( 'berhe', 'berhe11' );
	//echo $_user->userName.' == '.$_user->password.' <br>';
	//echo sha1(md5(md5(sha1(strtoupper(trim('moke')).trim('moke11'))))); 
?> 

<div class="ui-page-box">
	<div class="ui-main-content-box" >
		<div class="ui-detail-tab-list ui-grid-content-container-box" >
			<div id="ui-tab-three" class="ui-tab" style="">
				<?php include_partial('user/user', array('_systemUsers' => $_systemUsers, '_countSysteUsers' => $_countSystemUsers )) ?> 
			</div><!-- end of ui-tab-three-->
		</div> <!-- end of ui-detail-tab-list -->
		<div class="ui-clear-fix"></div>
	</div> <!-- end of ui-main-list-default -->
	
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
 

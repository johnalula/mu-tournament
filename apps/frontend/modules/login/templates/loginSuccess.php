<div class="ui-login-content" id="ui-login-content" style="" >
	<div class="ui-login-error-container">  
	<?php if ($sf_user->getFlash('login_failure', false) == true): ?>
		<div class="ui-login-error-box" id="ui-login-error" >
			<?php echo include_partial('global/login_error', array()) ?>
		</div>   
		
	<?php endif; ?>
	</div><!-- end of ui-login-box -->
	<div class="ui-login"> 
		<?php include_partial('login', array()) ?> 
	</div><!-- end of ui-login-box -->
</div><!-- end of ui-login-box --> 
 
<?php
	//$_user = UserTable::processLogin ( $_userAccount, $_userPassword );
	//$_user = UserTable::processObject( $_orgID, $_orgTokenID, $_userID, $_userTokenID ) ;
?>

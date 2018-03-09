<div class="ui-login-content" id="ui-login-content" style="" >
	<div class="ui-login-error-container">  
	<?php if ($sf_user->getFlash('process_fail', false) == true): ?>
		<div class="ui-login-error-box" id="ui-login-error" >
			<?php echo include_partial('global/login_error', array()) ?>
		</div>   
		
	<?php endif; ?>
	</div><!-- end of ui-login-box -->
	<div class="ui-login">  
		<?php include_partial('login', array()) ?> 
	</div><!-- end of ui-login-box -->
</div><!-- end of ui-login-box --> 

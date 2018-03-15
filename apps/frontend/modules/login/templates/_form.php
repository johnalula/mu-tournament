<div class="ui-login-content-form" id="ui-login-content-form" >
	<div class="ui-login-form" id="ui-login-form-box" >
		<div class="container">
			<div class="row">
				<div class="col-sm-3" style="">  
					&nbsp; 
				</div>
				<div class="col-sm-3" style="">  
					<form class="form" id="ui-login-form" action="<?php echo url_for('@user_signin'); ?>" method="post">
						<div class="form-group">
							<label for="name">Username:</label>
							<div class="input-group "> 
								<input type="text" step=0 id="login-user-account" name="user-login[user_account]" class="form-control" placeholder="Username" required autofocus>
								<span class="input-group-btn">
									<button class="btn btn-default" type="button" title="<?php echo __('Username') ?>" tabindex="-1">
										<img class="btn-img" src="<?php echo image_path('icons/user_icon') ?>" >
									</button>
								</span>
							</div>
							<label for="name">Password:</label>
							<div class="input-group "> 
								<input type="password" step=2 id="login-user-password" name="user-login[password]" tabindex="0" class="form-control" placeholder="Password" required>
								<span class="input-group-btn">
									<button class="btn btn-default" type="button" title="<?php echo __('Password') ?>" tabindex="-1">
										<img class="btn-img" src="<?php echo image_path('icons/key_icon') ?>" >
									</button>
								</span>
							</div> 
							<label for="name">Login as:</label>
							<div class="input-group "> 
								<select name="user-login[user_role]" id="user_role" class="form-control" > 
									<?php foreach(UserCore::processUserLoginRoles() as $_key => $_userRole): ?>								 
										<option value="<?php echo  $_key ?>" <?php echo $_key == UserCore::$_AUTHOR ? 'selected':'' ?> >
											<?php echo $_userRole ?>
										</option>								 
									<?php endforeach; ?>
								</select>
								<span class="input-group-btn">
									<button class="btn btn-default" type="button" title="<?php echo __('Password') ?>" tabindex="-1" >
										<img class="btn-img" src="<?php echo image_path('icons/user_role') ?>" >
									</button>
								</span>
							</div>
						</div>
						<div class="">
							<label>
								<a href=""> <?php echo __('Forget your password?') ?></a>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" value="remember-me">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Remember me
							</label>
						</div>
						<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
					</form>
				</div>
				<div class="col-sm-6" style="">  
					&nbsp;
				</div>
			</div>
		</div>
	</div>
</div>
<script>

</script>

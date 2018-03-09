<div class="ui-login-content-form" id="ui-login-content-form" >
	<div class="ui-login-form-box" id="ui-login-form-box" >
		<form class="well form-inline ui-form ui-login-form" id="ui-login-form" action="<?php echo url_for('@user_signin'); ?>" method="post">
			<table class="ui-login-table-content" style="border:none;">
				<thead>
					<tr>
						<th class="ui-user-login-header">
							<img style="" class="" src="<?php echo image_path('locker') ?>">User Login
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
					</tr>
					<tr>
						<td class="ui-login-table-content-left-td ui-padding"> 
							<label class="ui-login-label ">
								<span class="label-content td-top-padding" style="">
									<?php echo __('User Account') ?>
								</span>
							</label>
						</td>
					<tr>
						<td class="ui-login-table-content-left-td">
							<span class="input-content">
								<input type="text" class="ui-login-user-account ui-login-input" id="login-user-account" name="user-login[user_account]" placeholder="User Account" autofocus >
							</span> 
						</td>
					</tr>
					<tr>
						<td class="ui-login-table-content-left-td ui-padding">
							<label class="ui-login-label">
								<span class="label-content">
									<?php echo __('Password') ?>
								</span>
							</label>
						</td>
					</tr>
					<tr>
						<td class="ui-login-table-content-left-td">
							 <span class="input-content">
								<input type="password" class="ui-login-password ui-login-input" id="login-user-password" name="user-login[password]" placeholder="Password">
							</span> 
						</td>
					</tr>
					<tr>
						<td class="ui-login-table-content-left-td">
							<label class="ui-form-remember">
								<a href=""> <?php echo __('Forget your password?') ?></a>
							</label>
						</td>
					</tr> 
					<tr>
						<td class="ui-login-table-content-left-td">
							<input type="checkbox" class="ui-login-checkbox"> 
							<label class="checkbox ui-form-remember">
								<?php echo __('Remember?') ?>
							</label>
						</td>
					</tr>
					<tr>
						<td class="ui-login-table-content-left-td">
							<span class="input-content">
								<input style="" class="btn-primary input-width btn-right-margin ui-login-button" id="loginSubmit" type="submit" value="<?php echo __('Login')  ?>  " />
							</span>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
</div>
<script>

</script>

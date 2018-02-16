<div class="ui-sidebar">
	<div class="ui-sidebar-display">
		<div class="ui-sidebar-list">
			<table>
				<tr>
					<td rowspan=5 >
						<span class="ui-sidebar-avatar-img"><img class="navbar-img" src="<?php echo image_path('settings/user-avatar') ?>"></span>
					</td>
				</tr>
				<tr>
					<td>
						<span class="ui-sidebar-content-sm">
							<?php echo $sf_user->getAttribute('userName').' ( '.Wordlimit::wordLimiterShort($sf_user->getAttribute('userRoleName'),2).' )' ?>
						</span>
					</td>
				</tr>
				<tr>
					<td>
						<span class="ui-sidebar-content">
							<?php echo date('D M d, Y', time()) ?>
						</span>
					</td>
				</tr>
				<tr>
					<td>
						<span class="ui-sidebar-content">
							<a class="" href="<?php echo url_for('@user_signout') ?>">
								<img style="" class="ui-sidebar-logout-img" src="<?php echo image_path('settings/logout_btn') ?>"><?php echo __('Logout') ?>
							</a>
						</span>
					</td>
				</tr> 
			</table>
		</div>
	</div> 
	
</div>
<script>
	$(document).ready(function() {
		$('.ui-sidebar-header').click(function() {
			if($(this).next().hasClass('ui-display-none')) {
				$(this).next().removeClass('ui-display-none');
				$(this).next().slideDown('slow');
			} else {
				$(this).next().slideToggle();
			}
			return false;	
		}); 
	}); 
		
</script>

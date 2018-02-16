<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title><?php echo __('MU-Sport Management System') ?></title> 
		<?php include_metas() ?>
		<?php include_title() ?>
		<link rel="shortcut icon" href="/favicon.ico" />
		<?php include_stylesheets() ?>
		<?php include_javascripts() ?>  
		<style type="text/css"  media="print"> 
		</style>
		<script> 

		</script>
	</head>
	
	<body > 
			<div class="">
	<div id="ui-container-box">
		<div class="ui-container-box">
			<div class="ui-header-container">
				<?php if($sf_user->isAuthenticated()): ?>
				<div class="ui-admin-menu-box">
					 <?php include_partial('global/header', array()) ?> 
				</div>
				<?php else: ?>
				<div class="ui-admin-menu-box">
					 <?php include_partial('global/admin_header', array()) ?> 
				</div>
				<?php endif; ?>
					
			</div><!-- end of ui-main-menu-container -->
			
			<div id="ui-wrapper-container">
				<div class="ui-wrapper-box" >
					<div class="container"  style="border:0px solid #00f;">
						<div class="row" > 
							<div class="col-sm-3 " style="border:0px solid #f00;">
								<div class="ui-sidebar-header-box">
									<div class="ui-sidebar-header-default">
										<h2 class="ui-sidebar-theme-header"><?php echo __('Main Menu') ?></h2>
									</div>	<!-- end of ui-sidebar-header-box -->
								</div>	<!-- end of ui-sidebar-header-box -->
								<div class="ui-sidebar-box">
									<?php include_partial('global/sidebar', array()) ?> 
								</div>					
							</div> 
							<div class="col-sm-9" style="border:0px solid #f0f;">
									<?php echo $sf_content ?>	
							</div><!-- end of ui-wrapper-box -->
						</div><!-- end of ui-wrapper-box -->
					</div><!-- end of ui-wrapper-box -->
				</div><!-- end of ui-wrapper-box -->
			</div><!-- end of ui-wrapper-container -->
			 
		</div><!-- end of ui-container-box -->
	</div><!-- end of ui-container-box -->
	
	<footer class="blog-footer">
		  
		<div class="ui-footer-container"> 
			<div class="ui-footer">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="ui-footer-logo">
								<table >  
									<tr>
										<td rowspan="2" class="bigText">
											<span class="logo-title">
												<a href="<?php echo url_for('home/index') ?>" title="<?php echo __('Mekelle University - International Journal of Business and Development Studies') ?>">MU-AUFC</a>
											</span>
										</td>
										<td class="title"><span class="title"><a href="<?php echo url_for('home/index') ?>">Mekelle University</a></span></td>
									</tr>
									<tr>
										<td class="title"><span class="local-title"><a href="<?php echo url_for('home/index') ?>">መቐለ ዩኒቨርሲቲ </a></span></td>
									</tr>
									<tr>
										<td colspan=2 class="null-td"> </td>
									</tr>
									<tr>
										<td colspan=4 class="ui-title-location"> Arid Campus,  Mekelle, Ethiopia</td>
									</tr> 
								</table>										
							</div><!-- end of ui-footer-logo -->
						</div><!-- end of span4 --> 
						<div class="col-sm-6">
							<div class="ui-footer-logo" style="float:right!important;">
								<table >  
									<tr>
										<td class="title">
											<span class="local-title ui-bottom-title"><a href="#" ></a></span>
										</td>
									</tr>
									<tr>
										<td colspan=2 class="null-td"> </td>
									</tr>
									<tr>
										<td colspan=4 class="ui-title-link">&nbsp;<a href="mailto:send2joni@gmail.com"></a></td>
									</tr> 
								</table>										
							</div><!-- end of ui-footer-logo -->
						</div><!-- end of span8 -->
					</div><!-- end of row -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="ui-title-link">
								Powered by <a href="http://www.mu.edu.et/cbds" target="_blank" title="<?php echo __('College of Business and Development Studies, Mekelle University') ?>">MU-ICT</a> © &nbsp;2017 All Rights Reserved
							</div><!-- end of container -->
						</div><!-- end of container -->
					</div><!-- end of container -->
				</div><!-- end of container -->
			</div><!-- end of ui-footer --> 
		</div><!-- end of ui-footer-container -->
	</footer>
</body>
</html>

    

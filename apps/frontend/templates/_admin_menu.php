<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title><?php echo __('eAurora-eIMS Inventory Management System') ?></title> 
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
	
	<body oncontextmenu="return false">   
	 <!-- Fixed navbar 0945525171-->
	 <!-- Fixed navbar 0945525171-->
		<div class="">
			<?php if($sf_user->isAuthenticated()): ?> 
				<div class="">
					<?php echo include_partial('global/admin', array()) ?>
				</div>
			<?php else: ?>
				<div class="">
					<?php echo include_partial('global/header', array()) ?>
				</div>
			<?php endif; ?>
		</div>
		
		<!-- Begining of container -->
		
		<?php if($sf_user->isAuthenticated()): ?> 
		<div class="container" id=""> 
			
			<div class="ui-container" id=""> 
				<div class="container-fluid">
					<div class="row">
					<?php if($sf_user->isAuthenticated()): ?> 
						<div class="col-sm-3 col-md-2 sidebar">
							<div class="ui-sidebar-header-box">
								<div class="ui-sidebar-header-default">
									<h2 class="ui-sidebar-theme-header"><?php echo __('Main Menu') ?></h2>
								</div>	<!-- end of ui-sidebar-header-box -->
							</div>	<!-- end of ui-sidebar-header-box -->
							<div class="ui-sidebar-box">
								<?php echo include_partial('global/sidebar', array()) ?>
							</div>					
						</div>
					<?php endif; ?>
						<div class="col-sm-9 col-md-10 ui-main-box">
							<div class="ui-alert-container">
								<!-- error alert message -->
								<?php if ($sf_user->getFlash('process_fail', false) == true): ?>
									<div id="ui-error-message-box" class="">
										<?php echo include_partial('global/operation_error', array()) ?>
									</div>
								<?php endif; ?> 
							<!-- error alert message -->
								<div id="ui-error-message-box" class="ui-display-none">
									<div class="alert alert-danger alert-dismissable">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true" title="<?php echo __('Close error message') ?>">&times;</button>
										<img class="ui-alert-message-img-large" src="<?php echo image_path('icons/error') ?>" title="<?php echo __('System error message') ?>">
										<?php echo __('Error ! there was an error with the system.') ?>
									</div>
								</div>
								<!-- success alert message -->
								<?php if ($sf_user->getFlash('process_success', false) == true): ?>
									<div id="ui-success-message-box" class="">
										<?php echo include_partial('global/operation_success', array()) ?>
									</div>
								<?php endif; ?> 
								<div id="ui-success-message-box" class="ui-display-none">
									<div class="alert alert-success alert-dismissable">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true" title="<?php echo __('Close error message') ?>">&times;</button>
										<img class="ui-alert-message-img-medium" src="<?php echo image_path('icons/accept') ?>" title="<?php echo __('System success message') ?>">
										<?php echo __('Success! The system has processed the request successfuly.') ?>
									</div>
								</div>
							</div><!-- end of ui-alert-container -->
							<div class="">
								<?php echo $sf_content ?>	
							</div> 
						</div> 
						
					</div> 
				</div> 
			</div>
		</div>

		<footer class="footer">
			<div class="container">
				<p class="text-muted"><?php echo __('Powered by') ?><a href=""> <?php echo __('Aurora IT Solutions') ?></a>
				&copy;<?php echo (' 2016 All Rights Reserved') ?></p>
			</div>
		</footer> <!-- Bibi Faye  christina parra shahid khan isabel cristina parra   Juju Ferrari -->
		<!--    brittanya razavi   alejandra ramero silvina valeria lopez   alejandra                      -->
	</body>
</html>


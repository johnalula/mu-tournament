<div class="alert alert-danger alert-dismissable">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true" title="<?php echo __('Close error message') ?>">
	&times;
	</button>
		<img class="ui-alert-message-img-large" src="<?php echo image_path('icons/error') ?>" title="<?php echo __('System error message') ?>">
		Invalid <strong><i>username</i></strong> or <strong><i>password</i></strong>, please try again
</div>


<script type="text/javascript">
	$(".ui-error-close").click(function () {
		$('.alert-error').hide();
		$('#ui-login-error').hide();
	});
</script>

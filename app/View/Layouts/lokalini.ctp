<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Cakephp 2.x User Management Premium Plugin with Twitter Bootstrap | Ektanjali Softwares</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script language="javascript">
		var urlForJs="<?php echo SITE_URL ?>";
	</script>
	<?php
		echo $this->Html->meta('icon');
		/*cakephp default layout -> later change by lokalini layout. 
		 * Neccessary to avoid the message url-rewriting from home-page*/
		echo $this->Html->css('cake.generic');
		
		/* Bootstrap CSS */
		echo $this->Html->css('bootstrap.css?q='.QRDN);
		
		/* Usermgmt Plugin CSS */
		echo $this->Html->css('/usermgmt/css/umstyle.css?q='.QRDN);
		
		/* Bootstrap Datepicker is taken from https://github.com/eternicode/bootstrap-datepicker */
		echo $this->Html->css('/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css?q='.QRDN);

		/* Bootstrap Datepicker is taken from https://github.com/smalot/bootstrap-datetimepicker */
		echo $this->Html->css('/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css?q='.QRDN);
		
		/* Chosen is taken from https://github.com/harvesthq/chosen/releases/ */
		echo $this->Html->css('/plugins/chosen/chosen.min.css?q='.QRDN);

		/* Jquery latest version taken from http://jquery.com */
		echo $this->Html->script('jquery-1.11.3.min.js');
		
		/* Bootstrap JS */
		echo $this->Html->script('bootstrap.js?q='.QRDN);

		/* Bootstrap Datepicker is taken from https://github.com/eternicode/bootstrap-datepicker */
		echo $this->Html->script('/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js?q='.QRDN);

		/* Bootstrap Datepicker is taken from https://github.com/smalot/bootstrap-datetimepicker */
		echo $this->Html->script('/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js?q='.QRDN);
		
		/* Bootstrap Typeahead is taken from https://github.com/biggora/bootstrap-ajax-typeahead */
		echo $this->Html->script('/plugins/bootstrap-ajax-typeahead/js/bootstrap-typeahead.min.js?q='.QRDN);
		
		/* Chosen is taken from https://github.com/harvesthq/chosen/releases/ */
		echo $this->Html->script('/plugins/chosen/chosen.jquery.min.js?q='.QRDN);

		/* Usermgmt Plugin JS */
		echo $this->Html->script('/usermgmt/js/umscript.js?q='.QRDN);
		echo $this->Html->script('/usermgmt/js/ajaxValidation.js?q='.QRDN);

		echo $this->Html->script('/usermgmt/js/chosen/chosen.ajaxaddition.jquery.js?q='.QRDN);

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container">
		<div class="content">
			<?php
				if($this->UserAuth->isLogged()) {
					echo $this->element('Usermgmt.dashboard');
				} ?>
			<?php echo $this->element('Usermgmt.message'); ?>
			<?php echo $this->element('Usermgmt.message_validation'); ?>
			<?php echo $this->fetch('content'); ?>
			<div style="clear:both"></div>
		</div>
	</div>
	<div id="footer">
		<div class="container">
			<p class="muted">Copyright &copy; <?php echo date('Y');?> Your Site. All Rights Reserved. <a href="http://www.ektanjali.com/" target='_blank'>Developed By</a>.</p>
		</div>
    </div>
	<?php if(class_exists('JsHelper') && method_exists($this->Js, 'writeBuffer')) { echo $this->Js->writeBuffer(); } ?>
</body>
</html>
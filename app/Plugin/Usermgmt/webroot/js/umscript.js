jQuery(document).ready(function($){
	// Date picker
	$(document).on("focus", ".datepicker", function() {
		$(this).datepicker({
			format: 'yyyy-mm-dd',
			autoclose: true
		});
	});
	$(document).on("focus", ".datetimepicker", function() {
		$(this).datetimepicker({
			format: 'yyyy-mm-dd hh:ii:ss',
			autoclose: true,
			showMeridian: true
		});
	});
	// adding title to links in table header
	$(document).on("mouseenter", "table tr th a", function() {
		$(this).attr('title', 'Click to sort records');
	});  
	var per_float_div = $('#per_float_header');
	$('#per_loading_text').html('');
	if(per_float_div.length) {
		var start = $(per_float_div).offset().top;
		$.event.add(window, "scroll", function() {
			var p = $(window).scrollTop();
			$(per_float_div).css('position',((p)>start) ? 'fixed' : 'static');
			$(per_float_div).css('top',((p)>start) ? '0px' : '');
		});
	}
	// Create the dropdown base
	$("<select />").appendTo(".dashboard-menu .navbar").attr('class', 'mdropdown');
	// Create default option "Go to..."
	$("<option />", {
	  "value"   : "",
	   "text"    : "Go to..."
	}).appendTo(".dashboard-menu .navbar select.mdropdown");

	// Populate dropdown with menu items
	$(".dashboard-menu .navbar .collapse a").each(function() {
	 var el = $(this);
	 if(el.attr("href") !='#') {
		 var selected = false;
		 if($(el).parents().hasClass('active')) {
			selected = true;
		 }
		 $("<option />", {
			 "selected": selected,
			 "value"   : el.attr("href"),
			 "text"    : el.text()
		 }).appendTo(".dashboard-menu .navbar select.mdropdown");
	 }
	});
	$(".dashboard-menu .navbar select.mdropdown").change(function() {
		window.location = $(this).find("option:selected").val();
	});
	$(document).on('click', '.closeMsg', function(){
		$('.messageHolder').remove();
	});
	$(document).on('click', '.closeMsgAjax', function(){
		$(this).closest('#ajaxValidationMsgText').html('');
		$(this).closest('#ajaxValidationMsg').hide();
	});
});
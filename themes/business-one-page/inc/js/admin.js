jQuery(document).ready(function($){
	
	$('#accordion-panel-wp_default_panel').prepend(
		'<div class="user_sticky_note">'+
		'<h3 class="sticky_title">Need help?</h3>'+
		'<span class="sticky_info_row"><label class="row-element">View demo: </label> <a href="https://raratheme.com/previews/?theme=business-one-page" target="_blank">here</a>'+
		'<span class="sticky_info_row"><label class="row-element">View documentation: </label><a href="https://raratheme.com/documentation/business-one-page/" target="_blank">here</a></span>'+
		'<span class="sticky_info_row"><label class="row-element">Support ticket: </label><a href="https://raratheme.com/support-ticket/" target="_blank">here</a></span>'+		
		'<span class="sticky_info_row"><label class="more-detail row-element">More Details: </label><a href="https://raratheme.com/wordpress-themes/" target="_blank">here</a></span>'+
		'</div>'
		);

	var upgrade_notice = '<div class="notice-up"><a class="upgrade-pro" target="_blank" href="https://raratheme.com/wordpress-themes/business-one-page-pro/"><img src="' + business_one_page_data.promo_url + '" alt="UPGRADE TO BUSINESS ONE PAGE PRO" /></a>';
	upgrade_notice += '<a class="upgrade-pro-demo" target="_blank" href="https://raratheme.com/wordpress-themes/business-one-page-pro/">BUSINESS ONE PAGE PRO FEATURES</a></div>';
	$('#customize-info').append(upgrade_notice);

});
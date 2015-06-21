$(document).ready(function(){
	//Update firstname
	$('#first_name_editmode').click(function(){
		$('#id-firstname-profile').prop('disabled', false);
		$('#id-firstname-profile').css({"border":"solid 1px rgba(166,166,166,0.50)"});
		$('#first_name_editmode').hide();
		$('.submit_button_firstname').show();
		$('.cancel_button_firstname').show();
	});
	$('.cancel_button_firstname').click(function(){
		$('#id-firstname-profile').prop('disabled', true);
		$('#first_name_editmode').show();
		$('.submit_button_firstname').hide();
		$('.cancel_button_firstname').hide();
		$('#id-firstname-profile').css({"border":"solid 1px transparent"});
	});
	$('.submit_button_firstname').click(function(){
		$('#form-first_name_update').submit();
	});
	
	//Update lastname
	$('#last_name_editmode').click(function(){
		$('#id-lastname-profile').prop('disabled', false);
		$('#id-lastname-profile').css({"border":"solid 1px rgba(166,166,166,0.50)"});
		$('#last_name_editmode').hide();
		$('.submit_button_lastname').show();
		$('.cancel_button_lastname').show();
	});
	$('.cancel_button_lastname').click(function(){
		$('#id-lastname-profile').prop('disabled', true);
		$('#last_name_editmode').show();
		$('.submit_button_lastname').hide();
		$('.cancel_button_lastname').hide();
		$('#id-lastname-profile').css({"border":"solid 1px transparent"});
	});
	$('.submit_button_lastname').click(function(){
		$('#form-last_name_update').submit();
	});
	
	//Update phone
	$('#phone_editmode').click(function(){
		$('#id-phone-profile').prop('disabled', false);
		$('#id-phone-profile').css({"border":"solid 1px rgba(166,166,166,0.50)"});
		$('#phone_editmode').hide();
		$('.submit_button_phone').show();
		$('.cancel_button_phone').show();
	});
	$('.cancel_button_phone').click(function(){
		$('#id-phone-profile').prop('disabled', true);
		$('#phone_editmode').show();
		$('.submit_button_phone').hide();
		$('.cancel_button_phone').hide();
		$('#id-phone-profile').css({"border":"solid 1px transparent"});
	});
	$('.submit_button_phone').click(function(){
		$('#form-phone_update').submit();
	});
	
	//Address phone
	$('#address_editmode').click(function(){
		$('#id-firstline_address-profile').prop('disabled', false);
		$('#id-firstline_address-profile').css({"border":"solid 1px rgba(166,166,166,0.50)", "margin-bottom":"4px"});
		
		$('#id-secondline_address-profile').prop('disabled', false);
		$('#id-secondline_address-profile').css({"border":"solid 1px rgba(166,166,166,0.50)", "margin-bottom":"4px"});
		
		$('#id-town-profile').prop('disabled', false);
		$('#id-town-profile').css({"border":"solid 1px rgba(166,166,166,0.50)", "margin-bottom":"4px"});
		
		$('#id-post_code-profile').prop('disabled', false);
		$('#id-post_code-profile').css({"border":"solid 1px rgba(166,166,166,0.50)", "margin-bottom":"4px"});
		
		$('#country_details').hide();
		$('.select_menu_area_country').show();
		$('#address_editmode').hide();
		$('.submit_button_address').show();
		$('.cancel_button_address').show();
	});
	$('.cancel_button_address').click(function(){
		$('#id-firstline_address-profile').prop('disabled', true);
		$('#id-firstline_address-profile').css({"border":"solid 1px transparent", "margin-bottom":"0px"});
		
		$('#id-secondline_address-profile').prop('disabled', true);
		$('#id-secondline_address-profile').css({"border":"solid 1px transparent", "margin-bottom":"0px"});
		
		$('#id-town-profile').prop('disabled', true);
		$('#id-town-profile').css({"border":"solid 1px transparent", "margin-bottom":"0px"});
		
		$('#id-post_code-profile').prop('disabled', true);
		$('#id-post_code-profile').css({"border":"solid 1px transparent", "margin-bottom":"0px"});
		
		$('#country_details').show();
		$('.select_menu_area_country').hide();
		$('#address_editmode').show();
		$('.submit_button_address').hide();
		$('.cancel_button_address').hide();
	});
	$('.submit_button_address').click(function(){
		$('#form-address_update').submit();
	});
	
	
	
	//<-----------Edit contractor profile------------->
	
	//Contractor website
	$('#website_contractor_editmode').click(function(){
		$('#website_contractor-profile').prop('disabled', false);
		$('#website_contractor-profile').css({"border":"solid 1px rgba(166,166,166,0.50)"});
		$('#website_contractor_editmode').hide();
		$('.submit_website_contractor').show();
		$('.cancel_website_contractor').show();
	});
	$('.cancel_website_contractor').click(function(){
		$('#website_contractor-profile').prop('disabled', true);
		$('#website_contractor_editmode').show();
		$('.submit_website_contractor').hide();
		$('.cancel_website_contractor').hide();
		$('#website_contractor-profile').css({"border":"solid 1px transparent"});
	});
	$('.submit_website_contractor').click(function(){
		$('#form-contractor_website_update').submit();
	});
	
	//Contractor email
	$('#email_contractor_editmode').click(function(){
		$('#email_contractor-profile').prop('disabled', false);
		$('#email_contractor-profile').css({"border":"solid 1px rgba(166,166,166,0.50)"});
		$('#email_contractor_editmode').hide();
		$('.submit_email_contractor').show();
		$('.cancel_email_contractor').show();
	});
	$('.cancel_email_contractor').click(function(){
		$('#email_contractor-profile').prop('disabled', true);
		$('#email_contractor_editmode').show();
		$('.submit_email_contractor').hide();
		$('.cancel_email_contractor').hide();
		$('#email_contractor-profile').css({"border":"solid 1px transparent"});
	});
	$('.submit_email_contractor').click(function(){
		$('#form-contractor_email_update').submit();
	});
	
	//Contractor phone
	$('#phone_contractor_editmode').click(function(){
		$('#phone_contractor-profile').prop('disabled', false);
		$('#phone_contractor-profile').css({"border":"solid 1px rgba(166,166,166,0.50)"});
		$('#phone_contractor_editmode').hide();
		$('.submit_phone_contractor').show();
		$('.cancel_phone_contractor').show();
	});
	$('.cancel_phone_contractor').click(function(){
		$('#phone_contractor-profile').prop('disabled', true);
		$('#phone_contractor_editmode').show();
		$('.submit_phone_contractor').hide();
		$('.cancel_phone_contractor').hide();
		$('#phone_contractor-profile').css({"border":"solid 1px transparent"});
	});
	$('.submit_phone_contractor').click(function(){
		$('#form-contractor_phone_update').submit();
	});
	
	//Contractor address
	$('#address_editmode_contractor').click(function(){
		$('#id-firstline_address-profile_contractor').prop('disabled', false);
		$('#id-firstline_address-profile_contractor').css({"border":"solid 1px rgba(166,166,166,0.50)", "margin-bottom":"4px"});
		
		$('#id-secondline_address-profile_contractor').prop('disabled', false);
		$('#id-secondline_address-profile_contractor').css({"border":"solid 1px rgba(166,166,166,0.50)", "margin-bottom":"4px"});
		
		$('#id-town-profile_contractor').prop('disabled', false);
		$('#id-town-profile_contractor').css({"border":"solid 1px rgba(166,166,166,0.50)", "margin-bottom":"4px"});
		
		$('#id-post_code-profile_contractor').prop('disabled', false);
		$('#id-post_code-profile_contractor').css({"border":"solid 1px rgba(166,166,166,0.50)", "margin-bottom":"4px"});
		
		$('#country_details_contractor').hide();
		$('.select_menu_area_country_contractor').show();
		$('#address_editmode_contractor').hide();
		$('.submit_address_contractor').show();
		$('.cancel_address_contractor').show();
	});
	$('.cancel_address_contractor').click(function(){
		$('#id-firstline_address-profile_contractor').prop('disabled', true);
		$('#id-firstline_address-profile_contractor').css({"border":"solid 1px transparent", "margin-bottom":"0px"});
		
		$('#id-secondline_address-profile_contractor').prop('disabled', true);
		$('#id-secondline_address-profile_contractor').css({"border":"solid 1px transparent", "margin-bottom":"0px"});
		
		$('#id-town-profile_contractor').prop('disabled', true);
		$('#id-town-profile_contractor').css({"border":"solid 1px transparent", "margin-bottom":"0px"});
		
		$('#id-post_code-profile_contractor').prop('disabled', true);
		$('#id-post_code-profile_contractor').css({"border":"solid 1px transparent", "margin-bottom":"0px"});
		
		$('#country_details_contractor').show();
		$('.select_menu_area_country_contractor').hide();
		$('#address_editmode_contractor').show();
		$('.submit_address_contractor').hide();
		$('.cancel_address_contractor').hide();
	});
	$('.submit_address_contractor').click(function(){
		$('#form-address_update_contractor').submit();
	});
	
	//Contractor phone
	$('#about_editmode_contractor').click(function(){
		$('#about_editmode_contractor').hide();
		$('.submit_about_contractor').show();
		$('.cancel_about_contractor').show();
		$('.editmode_about_contractor').show();
		$('.about_text_settings').hide();
	});
	$('.cancel_about_contractor').click(function(){
		$('#about_editmode_contractor').show();
		$('.submit_about_contractor').hide();
		$('.cancel_about_contractor').hide();
		$('.editmode_about_contractor').hide();
		$('.about_text_settings').show();
	});
	$('.submit_about_contractor').click(function(){
		$('#form-contractor_about_update').submit();
	});
	
});
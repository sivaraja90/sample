/*!
 * Auto Complete 5.0
 * November 22, 2009
 * Corey Hart @ http://www.codenothing.com
 */ 
jQuery(function($){
	// Normal Auto-complete initiation
	$('input[name=search1]').autoComplete();

	// Add enabling feature (disable to begin with)
	$('input[name=enable-1]').attr('disabled', 'true').click(function(){
		$('input[name=search1]').autoComplete();
		$('input[name=destroy-1]').attr('disabled', false);
		$(this).attr('disabled', 'true');
		// Rebind global focus
		bindGlobalFocus();
	});
	// Add disabling feature
	$('input[name=destroy-1]').click(function(){
		$('input[name=search1]').autoComplete('destroy');
		$('input[name=enable-1]').attr('disabled', false);
		$(this).attr('disabled', 'true');
	});



	// Auto-complete preventing form submission, and firing onSelect function
	$('input[name=search2]').autoComplete({
		// preventEnterSubmit is already flagged true by default
		onSelect: function(event, ui){
			alert('You have selected ' + ui.data.value);
		}
	});



	// Auto-complete using seperate ajax script/post values
	$('input[name=company_name]').autoComplete({
		ajax: 'ajaxcompany.php',
		onSelect: function(event, ui)
		{
			if(typeof Fill_Name_of_Clr=="function")
			
			{
				Fill_Name_of_Clr();
			}
			if(typeof Check_Company_Name=="function")
			{
				Check_Company_Name();
			}
			//alert('You have selected ' + ui.data.value);
			
		},	
		/*onBlur: function(event, ui)
		{
			if(typeof split_cnt_dtls=="function")
			{
				split_cnt_dtls();
			}
			
			alert('You have selected ' + ui.data.value);
			
		},	*/	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	
	// User Group Auto-complete using seperate ajax script/post values
	$('input[name=user_group]').autoComplete({
		ajax: 'ajaxusergroup.php',
		
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	
		// Auto-complete using seperate ajax script/post values
	
		// Auto-complete using seperate ajax script/post values
	$('input[name=cname]').autoComplete({
		ajax: 'ajaxcompany.php',
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	
		$('input[name=supplier_company_name]').autoComplete({
		ajax: 'ajax_vendor.php',
		onSelect: function(event, ui)
		{
			if(typeof Fill_Name_of_Clr=="function")
			{
				Fill_Name_of_Clr();
			}
		},	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});

	$('input[name=product_desc]').autoComplete({
		ajax: 'ajax_product.php',
		onSelect: function(event, ui)
		{
			if(typeof Fill_Add_of_Clr=="function")
			{
				Fill_Add_of_Clr();
			}
		},	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	$('input[name=material_name]').autoComplete({
		ajax: 'ajax_material.php',
		onSelect: function(event, ui)
		{
			if(typeof Fill_Add_of_Clr1=="function")
			{
				Fill_Add_of_Clr1();
			}
		},	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	
		//************************ Auto-complete using Material Name seperate ajax script/post values**********************************/
	$('input[name=item_name]').autoComplete({  
		ajax: 'ajaxmaterialname.php',
		onSelect: function(event, ui)
		{
			Fill_Name_of_Clr1();
		},	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});


	$('input[name=supplier_company]').autoComplete({
		ajax: 'ajax_po_company.php',
		onSelect: function(event, ui)
		{
			if(typeof Fill_Name_of_Clr=="function")
			{
				Fill_Name_of_Clr();
			}
		},	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	// Auto-complete using seperate ajax script/post values
	// Auto-complete using seperate ajax script/post values

		
	// Auto-complete using seperate ajax script/post values
	$('input[name=item_category]').autoComplete({
		ajax: 'ajax_category.php',
		onSelect: function(event, ui)
		{
			if(typeof Fill_Name_of_Clr=="function")
			{
				Fill_Name_of_Clr();
			}
			
			//alert('You have selected ' + ui.data.value);
			
		},	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	// Auto-complete using seperate ajax script/post values
	$('input[name=u_id]').autoComplete({
		ajax: 'ajaxuserid.php',
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	
		// Auto-complete using seperate ajax script/post values
	$('input[name=department]').autoComplete({
		ajax: 'ajaxdepartment.php',
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	
			// Auto-complete using seperate ajax script/post values
	$('input[name=username]').autoComplete({
		ajax: 'ajaxusername.php',
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	
			// Auto-complete using seperate ajax script/post values
	$('input[name=email_id]').autoComplete({
		ajax: 'ajaxuser_email.php',
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	// Auto-complete using seperate ajax script/post values
	$('input[name=mobilesearch]').autoComplete({
		ajax: 'ajax3.php',
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	
	// Auto-complete using seperate ajax script/post values
	$('input[name=mobile]').autoComplete({
		ajax: 'ajax3.php',
		
		onSelect: function(event, ui)
		{
			if(typeof Check_Mobile_Name=="function")
			{
			Check_Mobile_Name();
			}
			//alert('You have selected ' + ui.data.value);
			
		},		
		
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	// Auto-complete using seperate ajax script/post values
	$('input[name=phone]').autoComplete({
		ajax: 'ajaxphone.php',
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	// Auto-complete using seperate ajax script/post values
	$('input[name=city]').autoComplete({
		ajax: 'ajaxcity.php',
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});

// Auto-complete using seperate ajax script/post values
	$('input[name=pincode]').autoComplete({
		ajax: 'ajaxpincode.php',
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	
	
// Auto-complete using seperate ajax script/post values
	$('input[name=product_code]').autoComplete({
		ajax: 'ajaxproductcode.php',
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});

	
	// Auto-complete using seperate ajax script/post values
	$('input[name=area]').autoComplete({
		ajax: 'ajaxarea.php',
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	
	// Auto-complete using seperate ajax script/post values
	$('input[name=assign_to]').autoComplete({
		ajax: 'assign.php',
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});	
	// Auto-complete using seperate ajax script/post values
	$('input[name=customer_name]').autoComplete({
		ajax: 'ajaxcaller.php',
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	
	// Auto-complete using seperate ajax script/post values
	$('input[name=name_of_caller]').autoComplete({
		ajax: 'ajaxcaller.php',
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	// Auto-complete using seperate ajax script/post values
	$('input[name=customersearch]').autoComplete({
		ajax: 'ajax2.php',
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});


	// Auto-complete using seperate ajax script/post values
	$('input[name=created_by_whom]').autoComplete({
		ajax: 'ajax_crtd_by.php',
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		},
	});	
	
	
	// Auto-complete using seperate ajax script/post values
	$('input[name=cmp_reltv_area]').autoComplete({
		onFocus: function(event, ui){
			var company_name=document.getElementById("company_name").value;
			
			if(company_name=="")
			{
			alert('Please Select Company Name Properly');
			return false;
			}
		},	
		onSelect: function(event, ui)
		{
		Fill_Add_of_Clr();	
		Fill_Add_of_Clr2();
			//alert('You have selected ' + ui.data.value);
			
		},			
/*		onSubmit:function(event, ui){
		var company_name=document.getElementById("company_name").value;	
		},*/
/*		requestType:'GET',
		//postVar:'company_name2',
		postData:  {
		comp_name: company_name
		},*/
		ajax: 'ajax_cmp_rltv_area.php'
	});



	// Auto-complete using metadata and maxiumum requests
	$('input[name=search4]').autoComplete({
		onMaxRequest: function(event, ui){
			$(this).css('background-color', 'red');
			alert('Sorry, but you have used up the maximum number of reqests allowed, and ' + ui.search + ' was not processed');
		}
	});
	// Clear requests and remove red background
	$('input[name=search4-submit]').click(function(){
		$('input[name=search4]').autoComplete('flush').css('background-color', 'white').val('').focus();
	});



	// Auto-complete with trigger
	$('#input-c').autoComplete();
	// Trigger full 'c' list
	$('#submit-c').click(function(){
		$('#input-c').autoComplete('button.ajax', {all:true, letter:'c'}, 'ALL_LETTER_C_REQUESTS');
	});
	// Trigger full 'd' list
	$('#submit-d').click(function(){
		$('#input-c').autoComplete('button.ajax', {all:true, letter:'d'},  'ALL_LETTER_D_REQUESTS');
	});
	// Clear just the cache, not the # of requests
	$('#submit-flush').click(function(){
		$('#input-c').autoComplete('flush', true);
	});



	// Autocomplete on User Supplied data
	$('input[name=search6]').autoComplete({
		dataSupply: ['jane', 'john', 'doe', 'amy', 'alice', 'louis', 'liz', {value: 'mark'}, {value: 'merideth', display: 'Merideth Johnson'}]
	});
	// Trigger whole list
	$('#search6').click(function(){
		$('input[name=search6]').autoComplete('button-supply');
	});



	// Multiple words, autofill, and striped lists
	$('input[name=search7]').autoComplete({
		multiple: true,
		multipleSeparator: ' ',
		autoFill: true,
		striped: 'auto-complete-striped',
		// Add a delay as autofill takes some time
		delay: 200
	});




	/**
	 * Currently Focused Div
	 */
	function bindGlobalFocus(){
		var $div = $('#AutoCompleteFocus');
		// Clear last event and rebind it (to ensure this focus event always gets called last)
		$('input[type=text]').unbind('focus.ac-example').bind('focus.ac-example', function(){
			var f = $.autoComplete.getFocus(), p = $.autoComplete.getPrevious();
			$div.find('.current span').html(
				$.autoComplete.hasFocus ? 
				'name=' + $(f).attr('name') + "'" :
				'Nothing in Focus'
			);
			$div.find('.previous span').html(
				p ? 
				'name=' + $(p).attr('name') + "'" :
				'Nothing previously in focus'
			);
		});
	}
	bindGlobalFocus();


	// Hide/Show affect on code preview
	var code = false;
	var $div = $('#AutoCompleteFocus'); // Local copy
	var maxWidth = $(window).width() - $div.offset().left - 50;
	if (maxWidth > 500) maxWidth = 500;
	$div.find('a').click(function(){
		$(this).html(code ? '+ Open Code' : '- Close Code');
		$div.css({height: code ? 100 : 250, width: code ? 300 : maxWidth}).find('pre')[ code ? 'hide' : 'show' ]();
		code = !code;
		return false;
	});
});

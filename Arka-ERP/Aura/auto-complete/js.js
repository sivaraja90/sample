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
	$('input[name=location]').autoComplete({
		ajax: 'ajaxlocation.php',
		onSelect: function(event, ui)
		{
			
			Fill_Name_of_Clr();
			
			//alert('You have selected ' + ui.data.value);
			
		},	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	
	//************************ Auto-complete using po seperate ajax script/post values**********************************/
	$('input[name=po_no]').autoComplete({ 
		ajax: 'ajaxpo.php',
		onSelect: function(event, ui)
		{
			if(typeof PoNo=="function")
			{
			PoNo();
			}
		},	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	/********************************************** Invoice Number /********************/
		$('input[name=invoice_no]').autoComplete({
		ajax: 'ajaxinvoice.php',
		onSelect: function(event, ui)
		{
			if(typeof SoNo=="function")
			{

			SoNo();
			}
			
			//alert('You have selected ' + ui.data.value);
			
		},	
		
		/*onBlur: function(event, ui)
		{
			if(typeof split_cnt_dtls=="function")
			{
			split_cnt_dtls();
			}
			if(typeof split_cnt_dtls2=="function")
			{
			split_cnt_dtls2();
			}
			//alert('You have selected ' + ui.data.value);
			
		},	*/	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
/**********************************************Barcode Invoice Number /********************/
		$('input[name=bar_invoice_no]').autoComplete({
		ajax: 'ajaxinvoice.php',
		onSelect: function(event, ui)
		{
			if(typeof Invoice_No=="function")
			{
			Invoice_No();
			}
			
			//alert('You have selected ' + ui.data.value);
			
		},	
		
		/*onBlur: function(event, ui)
		{
			if(typeof split_cnt_dtls=="function")
			{
			split_cnt_dtls();
			}
			if(typeof split_cnt_dtls2=="function")
			{
			split_cnt_dtls2();
			}
			//alert('You have selected ' + ui.data.value);
			
		},	*/	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	//************************ Auto-complete using Location_Po seperate ajax script/post values**********************************/
	$('input[name=locpo_no]').autoComplete({ 
		ajax: 'ajaxlocpo.php',
		onSelect: function(event, ui)
		{
			if(typeof PoNo=="function")
			{
			PoNo();
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

	// Auto-complete using seperate ajax script/post values
	$('input[name=columns]').autoComplete({
		ajax: 'ajaxcolumn.php',
		onSelect: function(event, ui)
		{
			/*if(typeof Fill_Name_of_Clr=="function")
			{
			Fill_Name_of_Clr();
			}
			*/
			//alert('You have selected ' + ui.data.value);
			
		},	
		
		/*onBlur: function(event, ui)
		{
			if(typeof split_cnt_dtls=="function")
			{
			split_cnt_dtls();
			}
			if(typeof split_cnt_dtls2=="function")
			{
			split_cnt_dtls2();
			}
			//alert('You have selected ' + ui.data.value);
			
		},	*/	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	// Auto-complete using seperate ajax script/post values
	$('input[name=columns2]').autoComplete({
		ajax: 'ajaxcolumn.php',
		onSelect: function(event, ui)
		{
			/*if(typeof Fill_Name_of_Clr=="function")
			{
			Fill_Name_of_Clr();
			}
			*/
			//alert('You have selected ' + ui.data.value);
			
		},	
		
		/*onBlur: function(event, ui)
		{
			if(typeof split_cnt_dtls=="function")
			{
			split_cnt_dtls();
			}
			if(typeof split_cnt_dtls2=="function")
			{
			split_cnt_dtls2();
			}
			//alert('You have selected ' + ui.data.value);
			
		},	*/	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	// Auto-complete using seperate ajax script/post values
	$('input[name=columns3]').autoComplete({
		ajax: 'ajaxcolumn.php',
		onSelect: function(event, ui)
		{
			/*if(typeof Fill_Name_of_Clr=="function")
			{
			Fill_Name_of_Clr();
			}
			*/
			//alert('You have selected ' + ui.data.value);
			
		},	
		
		/*onBlur: function(event, ui)
		{
			if(typeof split_cnt_dtls=="function")
			{
			split_cnt_dtls();
			}
			if(typeof split_cnt_dtls2=="function")
			{
			split_cnt_dtls2();
			}
			//alert('You have selected ' + ui.data.value);
			
		},	*/	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	// Auto-complete using seperate ajax script/post values
	$('input[name=columns4]').autoComplete({
		ajax: 'ajaxcolumn.php',
		onSelect: function(event, ui)
		{
			/*if(typeof Fill_Name_of_Clr=="function")
			{
			Fill_Name_of_Clr();
			}
			*/
			//alert('You have selected ' + ui.data.value);
			
		},	
		
		/*onBlur: function(event, ui)
		{
			if(typeof split_cnt_dtls=="function")
			{
			split_cnt_dtls();
			}
			if(typeof split_cnt_dtls2=="function")
			{
			split_cnt_dtls2();
			}
			//alert('You have selected ' + ui.data.value);
			
		},	*/	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	// Auto-complete using seperate ajax script/post values
	$('input[name=columns5]').autoComplete({
		ajax: 'ajaxcolumn.php',
		onSelect: function(event, ui)
		{
			/*if(typeof Fill_Name_of_Clr=="function")
			{
			Fill_Name_of_Clr();
			}
			*/
			//alert('You have selected ' + ui.data.value);
			
		},	
		
		/*onBlur: function(event, ui)
		{
			if(typeof split_cnt_dtls=="function")
			{
			split_cnt_dtls();
			}
			if(typeof split_cnt_dtls2=="function")
			{
			split_cnt_dtls2();
			}
			//alert('You have selected ' + ui.data.value);
			
		},	*/	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	
	// Auto-complete using seperate ajax script/post values
	$('input[name=material_code]').autoComplete({
		ajax: 'ajaxmaterial.php',
		onSelect: function(event, ui)
		{
			if(typeof Fill_Name_of_Clr=="function")
			{
				Fill_Name_of_Clr1();
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
			if(typeof split_cnt_dtls2=="function")
			{
			split_cnt_dtls2();
			}
			//alert('You have selected ' + ui.data.value);
			
		},	*/	

		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	
	// Auto-complete using seperate ajax script/post values
	$('input[name=to_name]').autoComplete({
		ajax: 'ajax_toname.php',
		onSelect: function(event, ui)
		{
			if(typeof Fill_Name_of_Clr=="function")
			{
				Fill_Name_of_Clr1();
			}
			
			//alert('You have selected ' + ui.data.value);
			
		},	
		/*onBlur: function(event, ui)
		{
			if(typeof split_cnt_dtls=="function")
			{
			split_cnt_dtls();
			}
			if(typeof split_cnt_dtls2=="function")
			{
			split_cnt_dtls2();
			}
			//alert('You have selected ' + ui.data.value);
			
		},	*/	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	
	// Auto-complete using seperate ajax script/post values
	$('input[name=so_no]').autoComplete({
		ajax: 'ajax_so.php',
		onSelect: function(event, ui)
		{
			if(typeof SoNo=="function")
			{
			SoNo();
			//Fill_Name_of_Clr2();
			}
			
			//alert('You have selected ' + ui.data.value);
			
		},	
		/*onBlur: function(event, ui)
		{
			if(typeof split_cnt_dtls=="function")
			{
			split_cnt_dtls();
			}
			if(typeof split_cnt_dtls2=="function")
			{
			split_cnt_dtls2();
			}
			//alert('You have selected ' + ui.data.value);
			
		},	*/	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	
		// Auto-complete using seperate ajax script/post values
	$('input[name=picker_name]').autoComplete({  
		ajax: 'ajaxpickerid.php',
		onSelect: function(event, ui)
		{
			
				Fill_Name_of_Clr_pick();
			//alert('You have selected ' + ui.data.value);
			
		},	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	
	// Auto-complete using seperate ajax script/post values
	$('input[name=packer_name]').autoComplete({  
		ajax: 'ajaxpickerid.php',
		onSelect: function(event, ui)
		{
			
				Fill_Name_of_Clr_pick();
			//alert('You have selected ' + ui.data.value);
			
		},	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});

		// Auto-complete using seperate ajax script/post values
	$('input[name=inward_id]').autoComplete({  
		ajax: 'ajaxinwardid.php',
		onSelect: function(event, ui)
		{
			if(typeof InwardNo=="function")
			{
			InwardNo();
			Fill_Name_of_Clr2();
			}
				Fill_Name_of_Clr_inw();
			//alert('You have selected ' + ui.data.value);
			
		},	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});

			// Auto-complete using Pick List Material Code seperate ajax script/post values
	$('input[name=material_code2]').autoComplete({  
		ajax: 'ajaxpickmaterialcode.php',
		onSelect: function(event, ui)
		{
				Fill_Name_of_Clr_PicMatCode();
			//alert('You have selected ' + ui.data.value);
			
		},	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	// Auto-complete using Pick List Material Code seperate ajax script/post values
	$('input[name=mat_code2]').autoComplete({  
		ajax: 'ajaxpicksomaterialcode.php',
		onSelect: function(event, ui)
		{
				Fill_Name_of_Clr_PicMatCode();
			//alert('You have selected ' + ui.data.value);
			
		},	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	// Auto-complete using Pick List Material Code seperate ajax script/post values
	$('input[name=mat_code3]').autoComplete({  
		ajax: 'ajaxpickInwmaterialcode.php',
		onSelect: function(event, ui)
		{
				Fill_Name_of_Clr_PicMatCode();
			//alert('You have selected ' + ui.data.value);
			
		},	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
		// Auto-complete using Pick List Material Code seperate ajax script/post values
	$('input[name=mat_code4]').autoComplete({  
		ajax: 'ajaxpackSomaterialcode.php',
		onSelect: function(event, ui)
		{
				Fill_Name_of_Clr_PicMatCode();
			//alert('You have selected ' + ui.data.value);
			
		},	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	$('input[name=mat_code]').autoComplete({
		ajax: 'ajaxstockmat.php',
		onSelect: function(event, ui)
		{
			if(typeof Fill_Name_of_Clr=="function")
			{
			Fill_Name_of_Clr1();
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
			if(typeof split_cnt_dtls2=="function")
			{
			split_cnt_dtls2();
			}
			//alert('You have selected ' + ui.data.value);
			
		},	*/	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
// Auto-complete using seperate ajax script/post values
	$('input[name=part_no]').autoComplete({
		ajax: 'ajaxmaterial.php',
		onSelect: function(event, ui)
		{
			if(typeof Fill_Name_of_Clr1=="function")
			{
				Fill_Name_of_Clr1();
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
			if(typeof split_cnt_dtls2=="function")
			{
			split_cnt_dtls2();
			}
			//alert('You have selected ' + ui.data.value);
			
		},	*/	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	
	// Auto-complete using seperate ajax script/post values
	$('input[name=mat_code]').autoComplete({
		ajax: 'ajaxstockmat.php',
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
			if(typeof split_cnt_dtls2=="function")
			{
			split_cnt_dtls2();
			}
			//alert('You have selected ' + ui.data.value);
			
		},	*/	
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
		/*// Auto-complete using seperate ajax script/post values
	$('input[name=supplier_name]').autoComplete({
		ajax: 'ajaxvendor.php',
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});*/
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
	$('input[name=customer_name]').autoComplete({
		ajax: 'ajax3.php',
		postData: {
			hook1: 'Do something on hook1',
			hook2: 1942,
			hook3: 'Do something with hook3'
		}
	});
	$('input[name=customerName]').autoComplete({
		ajax: 'ajax3.php',
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
	$('input[name=assign_to]').autoComplete({
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

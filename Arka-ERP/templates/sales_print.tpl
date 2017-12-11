<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

{literal}
	<style>
.table {
    border-collapse: collapse;
}

.table,td,th {
    border: 1px solid black;
	}
.table-striped,td,th {
    border-top: 1px solid black;
	}
.pullright1
	{
	position:absolute;
	/*margin-right:-110px;left:76%;*/
	}
.pullright2
	{
	right:0;
	left:225px;
	}
</style>
{/literal}
  </head>
  <!--onLoad="window.print();"-->
  <body >
    <div class="wrapper">
      <!-- Main content -->
      <section class="invoice">
        <!-- title row -->
        <div class="row">
          <div class="col-xs-14">
            <h2 class="page-header">
              <img src="./images/logo1.png" style="width:100px; height:40px; margin-left:20px;">
			   {foreach from=$DelAddress item=Address}
             <small class="pull-right"><address style="margin-top:-40px; margin-right:35px;">
			 <br>
              <strong>{$Address.company_name}</strong><br>
             {$Address.del_address}, &nbsp;{$Address.del_area},<br>
             {$Address.del_city}-{$Address.del_pincode}<br>
              Phone: 91-{$Address.area_code}-{$Address.phone_no}<br>
             <!-- Email: info@almasaeedstudio.com-->
           </address></small>
		   {/foreach}
			  <br><br>
			  
			     <img src="./images/download.png" style="width:140px; height:40px; margin-left:20px;">
				 <small class="pull-right"><address style="margin-top:8px; margin-right:-150px;">
				{foreach from=$AddressView item=View}
            <b>Quotaion No : {$View.sales_quote_no}</b><br>
            <b>Rev : {$View.revised_version}</b><br>
           <b>Quote Date : </b>{$View.quote_date} <br>
		   {/foreach}
          </address></small>
            </h2>
			 </div>
          </div><!-- /.col -->
        
        <!-- info row -->
		{foreach from=$AddressView item=View}
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
		     To
            <address> 
              <strong> {$View.company_name}</strong><br>
              {$View.address} {$View.address1}<br>
              {$View.area}, {$View.city} - {$View.pincode}.<br>
              Phone: {$View.mobile_no}<br>
			  
             <!-- Email: {$View.email_id} -->
			  
            </address>
			
          </div><!-- /.col -->
          <!-- /.col -->
		  
        </div><!-- /.row -->
		
		<p>
		<strong>Kind Attn:</strong>
              {$View.salutation}.{$View.customer_name}
            </p>
			{/foreach}
			{foreach from=$Enq_type item=Enquiryt}
			<p>
		<strong>Sub:</strong>
             Regards&nbsp;{$Enquiryt.enquiry_type}&nbsp;Quote
            </p>
			{/foreach}
			<p>
			<strong>Dear Sir,</strong></p>
			<p>
              With Reference to the above,We are Pleased to offer our lowest rates as follow
            </p>
			
        <!-- Table row -->
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table class="table" >
              <thead>
                <tr>
                  <td ><strong><center>Sl.No</center></strong></td>
                  <td><strong><center>Description</center></strong></td>
                  <td><strong><center>Image</center></strong></td>
                  <td><strong><center>Qut</center></strong></td>
                  <td><strong><center>Unit Basic</center></strong></td>
				  <td><strong><center>Vat Per</center></strong></td>
				  <td><strong><center>Total</center></strong></td>
                </tr>
             </thead>
              <tbody>
			   {foreach from=$MailView item=View1}
                <tr id="{$i++}">
                  <td>{$i}</td>
                  <td align="justify">{$View1.item_description} </td>
                 <td align="center">{if $View1.image eq ''} NA {elseif $View1.image neq ''}<img src="./images/product/{$View1.image}" style="width:150px; height:60px;" alt="{$View1.image}">{/if}</td>
                  <td>{$View1.quantity}</td>
                  <td>{$View1.unit_basic}</td>
				  <td>{$View1.vat_per}</td>
				  <td><i class="fa fa-inr"></i>&nbsp;{$View1.total}</td>
                </tr>
               {/foreach}
			  
              </tbody>
            </table>
          </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
          <!-- accepted payments column -->
          <div class="col-xs-6">
            <p class="lead">Terms&Conditions:</p>
			{foreach from=$sale_term item=sale}
			<p>{$sale.terms_1}&nbsp;{$Rev_Term.0.payment}&nbsp;{$sale.terms_2}</p>
			<p>{$sale.terms_3}</p>
			<p>{$sale.terms_4}&nbsp;{$Rev_Term.0.delivery}&nbsp;{$sale.terms_5}</p>
			<p>{$sale.terms_6}&nbsp;{$Rev_Term.0.validity}&nbsp;{$sale.terms_7}</p>
			{/foreach}
			
			<p>For <strong>{$DelAddress.0.company_name} ,</strong></p>
			<br>
			<p>Authorised Signature</p>
          </div><!-- /.col -->
	             <div class="col-xs-6">
               <table class="table" style="margin-left:-1px;">
			   {foreach from=$Adds item=add}
                <tr align="right" >
                  <th style="border-top:1px solid #000;">Sub Total:</th>
                  <td style="border-top:1px solid #000;"><i class="fa fa-inr"></i>&nbsp;{$add.s_Total}</td>
                </tr>
				{/foreach}
				<!--{foreach from=$Add_tax item=value}
                <tr align="right">
                  <th>Vat @ ({$MailView.0.vat_per}%)</th>
                  <td><i class="fa fa-inr"></i>&nbsp;{$value.tax}</td>
                </tr>
				{/foreach}-->
                {foreach from=$AddView item=sub}
                <tr align="right">
                  <th>Total:</th>
                  <td><i class="fa fa-inr"></i>&nbsp;{$sub.Total}</td>
                </tr>
				{/foreach}
              </table>
          </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </section><!-- /.content -->
    </div><!-- ./wrapper -->

    <!-- AdminLTE App -->{literal}
    <script src="./dist/js/app.min.js"></script>
	{/literal}
  </body>
</html>

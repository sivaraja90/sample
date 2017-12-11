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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
	/*right:0;left:84%;*/
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
		   <img src="./images/download.png" style="width:140px; height:40px;margin-left:20px;">
		    {foreach from=$AddressView item=View}
		   <small class="pull-right"><address style="margin-top:8px; margin-right:-150px;">
            <b>Quotaion No : {$View.service_quote_no}</b><br>
            <b>Rev : {$View.revised_version}</b><br>
            <b>Quote Date:</b> {$View.service_quote_date}<br>
		          </address></small>
		             </h2>
          </div><!-- /.col -->
        </div>
        <!-- info row -->
		 {foreach from=$AddressView item=View}
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col" >
            To
            <address> 
              <strong>{$View.company_name}</strong><br>
             {$View.address}, {$View.address1}<br>
              {$View.area}, {$View.city} - {$View.pincode}.<br>
              Phone: {$View.mobile_no}<br>
			   
             <!-- Email: {$View.email} -->
			  {/foreach}
            </address>
          </div><!-- /.col -->
		 
          
          <!-- /.col -->
		 
        </div><!-- /.row -->
		<p>
		<strong>Kind Attn:</strong>
              {$View.salutation}.{$View.customer_name}
            </p>
			 {/foreach}
			 {foreach from=$Enq_type item=View1}
			<p>
		<strong>Sub:</strong>
              Regards&nbsp;{$View1.enquiry_type}&nbsp;Quote
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
            <table class="table table-striped" >
              <thead>
                <tr align="center">
                  <td ><strong>Sl.No</strong></td>
                  <td><strong>Description</strong></td>
                  <td><strong>Sqft</strong></td>
                  <td><strong>Material</strong></td>
                  <td><strong>Labour</strong></td>
				  <td><strong>Total Material</strong></td>
				  <td><strong>Total Labour</strong></td>
				  <td><strong>Total</strong></td>
                </tr>
             </thead>
              <tbody>
			  {foreach from=$SerList item=View}
                <tr id="{$i++}" align="right">
                  <td>{$i}</td>
                  <td>{$View.material_description}</td>
                  <td>{$View.sqft}</td>
                  <td>{$View.material}</td>
                  <td>{$View.labour}</td>
				  <td>{$View.total_material}</td>
				  <td>{$View.total_labour}</td>
				  <td><i class="fa fa-inr"></i>&nbsp;{$View.total}</td>
                </tr>
                {foreachelse}
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					{/foreach}               
              </tbody>
            </table>
          </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
          <!-- accepted payments column -->
          <div class="col-xs-6">
            {foreach from=$TermMas item=Del}
            <p class="lead">Terms&Conditions:</p>
			<p>{$Del.terms_1} &nbsp;{$SerTerm.0.payment}&nbsp;{$Del.terms_2}</p>
			<p>{$Del.terms_3}</p>
			<p>{$Del.terms_4}&nbsp;{$SerTerm.0.delivery} &nbsp;{$Del.terms_5}</p>
			<p>{$Del.terms_6}&nbsp;{$SerTerm.0.validity}&nbsp;{$Del.terms_7}</p>
			{/foreach}
			<br>
			<p>For <strong>{$Address.company_name},</strong></p>
			<br><br>
			<p>Authorised Signature</p>
           <!-- <img src="../../dist/img/credit/visa.png" alt="Visa">
            <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
            <img src="../../dist/img/credit/american-express.png" alt="American Express">
            <img src="../../dist/img/credit/paypal2.png" alt="Paypal">
            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
              Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
            </p>-->
          </div><!-- /.col -->
	
           <!-- <p class="lead">Amount Due 2/22/2014</p>-->
		    
             <div class="col-xs-6">
              <table class="table" style="margin-left:-1px;">
                <tr align="right" >
                  <th style="border-top:1px solid #000;">Subtotal:</th>
                  <td style="border-top:1px solid #000;"><i class="fa fa-inr"></i>&nbsp;{$SubView.0.sub}</td>
                </tr>
				
                <tr align="right">
                  <th>Material Tax({$InvoiceView.0.material_tax_per}%):</th>
                  <td><i class="fa fa-inr"></i>&nbsp;{$InvoiceView.0.material_tax_value}</td>
                </tr>
				
				
                <tr align="right">
                  <th>Labour Tax({$InvoiceView.0.labour_tax_per}%):</th>
                  <td><i class="fa fa-inr"></i>&nbsp;{$InvoiceView.0.labour_tax_value}</td>
                </tr>
												
              </table>
          
          </div><!-- /.col -->
        </div><!-- /.row -->
      </section><!-- /.content -->
    </div><!-- ./wrapper -->

    <!-- AdminLTE App -->{literal}
    <script src="./dist/js/app.min.js"></script>
	{/literal}
  </body>
</html>

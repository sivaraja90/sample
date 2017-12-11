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

{literal}
	<style>

table { 
    border-spacing: 2px;
    border-collapse: none;
	border:none;
}
td
{ padding:5px;
width:50px;
}
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
	right:0;left:84%;
	}
	label,td.thick
{
font-weight:bold;
}
table, td, th {
    border: 0px solid black;
}
/*.hidden {
border-style: hidden;
}*/
/*.hidden {
    border-width:5px;	
    border-style:hidden;
}*/
/*.tablepress-id-N,
.tablepress-id-N tr,
.tablepress-id-N tbody td,
.tablepress-id-N thead th,
.tablepress-id-N tfoot th {
	border: none;
}*/
/*tr {
  visibility: collapse;
}*/
.b1 
{
border-style:none;
}
.page-header
 {
 padding-bottom:5px;
 margin:10px 0 30px;
 border-bottom:1px solid #eee
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
		 <h4 style="margin-top:-10px;"><center> INVOICE</center></h4>
		 <h5 style="margin-top:-10px; margin-right:25px;" align="right">(Triplicate Copy)</h5>
            <h2 class="page-header">
			
		    {foreach from=$DelAddress item=Address}
             <small class="pull-left"><address style="margin-top:-20px; margin-left:25px;">
			 <br>
              <strong>{$Address.company_name}</strong><br>
             {$Address.del_address}, &nbsp;{$Address.del_area},<br>
             {$Address.del_city}-{$Address.del_pincode}<br>
              Phone: 91-{$Address.area_code}-{$Address.phone_no}<br>
             <!-- Email: info@almasaeedstudio.com-->
           </address></small>
		   {/foreach}
			  <br><br><br>

			  
				
		  	 {foreach from=$AddressView item=View}
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
		    
            <small class="pull-left"><address style="margin-top:20px; margin-left:-270px;">
			Consignee<br> 
              <strong>{$View.company_name},</strong><br>
              {$View.address1},<br>
              {$View.area}, {$View.city} - {$View.pincode}.<br>
              Phone: {$View.mobile_no}<br>
              Email: {$View.email_id} 
            </address></small>
          </div><!-- /.col -->
		   </div><!-- /.row -->
		   {/foreach}
		    <small class="pull-right"><address style="margin-top:-250px;">
			
				{foreach from=$AddressView item=View}
					<table class="tablepress" style="border:solid 1px #000000; margin-left:-2%; border-bottom-color:#FFFFFF; border-left-color:#FFFFFF; border-right-color:#FFFFFF; border-top-color:#FFFFFF; width:390px; height:80px; margin-top:15px;">
						<tr class="b1">
						<td class="b1" style="font-weight:bold;">Order No:</td>
						<td class="b1">{$View.project_order_no}</td>
							
						<td class="b1"  style="font-weight:bold;">Order Date:</td>
						<td class="b1">{if $View.project_order_date eq '0000-00-00'} NA {elseif $View.project_order_date neq '0000-00-00'}{$View.project_order_date}{/if}</td>
						</tr>
						<tr>
						<td class="b1"  style="font-weight:bold;">Invoice No:</td>
						<td class="b1">{$View.invoice_no}</td>
						
						<td class="b1"  style="font-weight:bold;">Invoice Date:</td>
						<td class="b1">{if $View.invoice_date eq '0000-00-00'} NA {elseif $View.invoice_date neq '0000-00-00'}{$View.invoice_date}{/if}</td>
						</tr>
				       <tr class="b1">
						<td class="b1"  style="font-weight:bold;">Delivery Note:</td>
						<td class="b1">{$View.delivery_note}</td>
						
						<td class="b1"  style="font-weight:bold;">Mode/Terms of Payment:</td>
						<td class="b1">{$View.term_of_pay}</td>
						</tr >
						
						<tr class="b1">
						<td class="b1"  style="font-weight:bold;">Po No:</td>
						<td class="b1"> {$View.po_no}</td>
						
						<td class="b1"  style="font-weight:bold;">Po Date:</td>
						<td class="b1">{if $View.po_date eq '0000-00-00'} NA {elseif $View.po_date neq '0000-00-00'}{$View.po_date}{/if}</td>
						</tr>
						<tr class="b1">
						<td class="b1"  style="font-weight:bold;">Buyer's Tin No:</td>
						<td class="b1">{$View.tin_no}</td>
						
						<td class="b1"  style="font-weight:bold;">Cst No:</td>
						<td class="b1">{$View.cst_no}</td>
						</tr>
						</table>
					
					</address>
					</small>
           <!-- <b>Order No:{$View.sales_order_no}</b><br>
            <b>PO Ref:{$View.po_no}/{$View.po_date}</b><br>
           <b>Invoice Date:</b>{$View.invoice_date}<br>
		   <b>Invoice No:</b>{$View.invoice_no}
		   {/foreach}
          </address></small>-->
            </h2>
          </div><!-- /.col -->
        </div>
		
        <!-- info row -->
	
		
        <!-- Table row -->
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped" >
              <thead>
                <tr>
                  <td ><strong>Sl.No</strong></td>
                  <td><strong>Description</strong></td>
                  <td><strong>Sqft</strong></td>
                  <td><strong>Material</strong></td>
                  <td><strong>Labour</strong></td>
				  <td><strong>Tot Mat</strong></td>
				  <td><strong>Tot Lab</strong></td>
				  <td><strong>Total</strong></td>
                </tr>
             </thead>
              <tbody>
			   {foreach from=$MailView item=View}
               <tr id="{$i++}">
                  <td>{$i}</td>
                  <td align="justify">{$View.description} </td>
                 <td >{$View.sqft}</td>
                  <td>{$View.material}</td>
                  <td>{$View.labour}</td>
				  <td>{$View.total_material}({$Add_tax.0.material_tax_per}%)</td>
				  <td>{$View.total_labour}({$Add_tax.0.labour_tax_per}%)</td>
				  <td>{$View.total}</td>
                </tr>
               {/foreach}
              </tbody>
            </table>
          </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
          <!-- accepted payments column -->
          <div class="col-xs-6">
			{foreach from=$BankDetails item=bank}
            <p class="lead">Bank Details:</p>
			<table border="0" width="100%" style="margin-top:-25px;">
			<!--<tr><td>Company Name:</td><td> {$bank.company_name}</td></tr>-->
			<tr><td>Account Name:</td><td>  {$bank.bank_ac_name}</td></tr>
			<tr><td>Account No: </td><td> {$bank.bank_ac_no}</td></tr>
			<tr><td>IFSC Code:</td><td>  {$bank.bank_ifsc_code}</td></tr>
			<tr><td>Branch: </td><td> {$bank.bank_branch}</td></tr>
			<tr><td>Bank Name: </td><td> {$bank.bank_name}</td></tr>
			<br>
			</table>
			{/foreach}
			<br/>
			<p style="margin-left:5px;">For <strong>{$Address.company_name},</strong></p>
			<br>
			<p style="margin-left:5px;">Authorised Signature</p>
           <!-- <img src="../../dist/img/credit/visa.png" alt="Visa">
            <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
            <img src="../../dist/img/credit/american-express.png" alt="American Express">
            <img src="../../dist/img/credit/paypal2.png" alt="Paypal">
            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
              Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
            </p>-->
          </div><!-- /.col -->
	
           <!-- <p class="lead">Amount Due 2/22/2014</p>-->
		    
             <div class="col-xs-6 table-responsive">
			 
 <table class="table table-striped">
			   {foreach from=$Adds item=add}
                <tr align="right" >
                  <th style="border-top:1px solid #000;">Sub Total:</th>
                  <td style="border-top:1px solid #000;">{$add.s_Total}</td>
                </tr>
				{/foreach}
				<!--{foreach from=$Add_tax item=value}
                <tr align="right">
                  <th>Material Tax@({$Add_tax.0.material_tax_per}%):</th>
                  <td>{$value.material_tax_value}</td>
                </tr>		
				{/foreach}	
				{foreach from=$Adds item=sub}
                <tr align="right">
                  <th>Labour Tax@({$Add_tax.0.labour_tax_per}%):</th>
                  <td>{$value.labour_tax_value}</td>
                </tr>
				{/foreach}-->
				{foreach from=$Adds1 item=add}
                <tr align="right" >
                  <th style="border-top:1px solid #000;">Total:</th>
                  <td style="border-top:1px solid #000;">{$add.Total}</td>
                </tr>
				{/foreach}
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

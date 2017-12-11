<?php /* Smarty version 2.6.25, created on 2016-07-28 13:48:04
         compiled from service_print.tpl */ ?>
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
	<?php echo '
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
'; ?>

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
              <?php $_from = $this->_tpl_vars['DelAddress']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Address']):
?>
             <small class="pull-right"><address style="margin-top:-40px; margin-right:35px;">
			 <br>

              <strong><?php echo $this->_tpl_vars['Address']['company_name']; ?>
</strong><br>
             <?php echo $this->_tpl_vars['Address']['del_address']; ?>
, &nbsp;<?php echo $this->_tpl_vars['Address']['del_area']; ?>
,<br>
             <?php echo $this->_tpl_vars['Address']['del_city']; ?>
-<?php echo $this->_tpl_vars['Address']['del_pincode']; ?>
<br>
              Phone: 91-<?php echo $this->_tpl_vars['Address']['area_code']; ?>
-<?php echo $this->_tpl_vars['Address']['phone_no']; ?>
<br>
             <!-- Email: info@almasaeedstudio.com-->
           </address></small>
		   <?php endforeach; endif; unset($_from); ?>
		   <br><br>
		   <img src="./images/download.png" style="width:140px; height:40px;margin-left:20px;">
		    <?php $_from = $this->_tpl_vars['AddressView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
		   <small class="pull-right"><address style="margin-top:8px; margin-right:-150px;">
            <b>Quotaion No : <?php echo $this->_tpl_vars['View']['service_quote_no']; ?>
</b><br>
            <b>Rev : <?php echo $this->_tpl_vars['View']['revised_version']; ?>
</b><br>
            <b>Quote Date:</b> <?php echo $this->_tpl_vars['View']['service_quote_date']; ?>
<br>
		          </address></small>
		             </h2>
          </div><!-- /.col -->
        </div>
        <!-- info row -->
		 <?php $_from = $this->_tpl_vars['AddressView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col" >
            To
            <address> 
              <strong><?php echo $this->_tpl_vars['View']['company_name']; ?>
</strong><br>
             <?php echo $this->_tpl_vars['View']['address']; ?>
, <?php echo $this->_tpl_vars['View']['address1']; ?>
<br>
              <?php echo $this->_tpl_vars['View']['area']; ?>
, <?php echo $this->_tpl_vars['View']['city']; ?>
 - <?php echo $this->_tpl_vars['View']['pincode']; ?>
.<br>
              Phone: <?php echo $this->_tpl_vars['View']['mobile_no']; ?>
<br>
			   
             <!-- Email: <?php echo $this->_tpl_vars['View']['email']; ?>
 -->
			  <?php endforeach; endif; unset($_from); ?>
            </address>
          </div><!-- /.col -->
		 
          
          <!-- /.col -->
		 
        </div><!-- /.row -->
		<p>
		<strong>Kind Attn:</strong>
              <?php echo $this->_tpl_vars['View']['salutation']; ?>
.<?php echo $this->_tpl_vars['View']['customer_name']; ?>

            </p>
			 <?php endforeach; endif; unset($_from); ?>
			 <?php $_from = $this->_tpl_vars['Enq_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View1']):
?>
			<p>
		<strong>Sub:</strong>
              Regards&nbsp;<?php echo $this->_tpl_vars['View1']['enquiry_type']; ?>
&nbsp;Quote
            </p>
			<?php endforeach; endif; unset($_from); ?>
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
			  <?php $_from = $this->_tpl_vars['SerList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
                <tr id="<?php echo $this->_tpl_vars['i']++; ?>
" align="right">
                  <td><?php echo $this->_tpl_vars['i']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['View']['material_description']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['View']['sqft']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['View']['material']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['View']['labour']; ?>
</td>
				  <td><?php echo $this->_tpl_vars['View']['total_material']; ?>
</td>
				  <td><?php echo $this->_tpl_vars['View']['total_labour']; ?>
</td>
				  <td><i class="fa fa-inr"></i>&nbsp;<?php echo $this->_tpl_vars['View']['total']; ?>
</td>
                </tr>
                <?php endforeach; else: ?>
					<tr>
								<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
					</tr>
					<?php endif; unset($_from); ?>               
              </tbody>
            </table>
          </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
          <!-- accepted payments column -->
          <div class="col-xs-6">
            <?php $_from = $this->_tpl_vars['TermMas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Del']):
?>
            <p class="lead">Terms&Conditions:</p>
			<p><?php echo $this->_tpl_vars['Del']['terms_1']; ?>
 &nbsp;<?php echo $this->_tpl_vars['SerTerm']['0']['payment']; ?>
&nbsp;<?php echo $this->_tpl_vars['Del']['terms_2']; ?>
</p>
			<p><?php echo $this->_tpl_vars['Del']['terms_3']; ?>
</p>
			<p><?php echo $this->_tpl_vars['Del']['terms_4']; ?>
&nbsp;<?php echo $this->_tpl_vars['SerTerm']['0']['delivery']; ?>
 &nbsp;<?php echo $this->_tpl_vars['Del']['terms_5']; ?>
</p>
			<p><?php echo $this->_tpl_vars['Del']['terms_6']; ?>
&nbsp;<?php echo $this->_tpl_vars['SerTerm']['0']['validity']; ?>
&nbsp;<?php echo $this->_tpl_vars['Del']['terms_7']; ?>
</p>
			<?php endforeach; endif; unset($_from); ?>
			<br>
			<p>For <strong><?php echo $this->_tpl_vars['Address']['company_name']; ?>
,</strong></p>
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
                  <td style="border-top:1px solid #000;"><i class="fa fa-inr"></i>&nbsp;<?php echo $this->_tpl_vars['SubView']['0']['sub']; ?>
</td>
                </tr>
				
                <tr align="right">
                  <th>Material Tax(<?php echo $this->_tpl_vars['InvoiceView']['0']['material_tax_per']; ?>
%):</th>
                  <td><i class="fa fa-inr"></i>&nbsp;<?php echo $this->_tpl_vars['InvoiceView']['0']['material_tax_value']; ?>
</td>
                </tr>
				
				
                <tr align="right">
                  <th>Labour Tax(<?php echo $this->_tpl_vars['InvoiceView']['0']['labour_tax_per']; ?>
%):</th>
                  <td><i class="fa fa-inr"></i>&nbsp;<?php echo $this->_tpl_vars['InvoiceView']['0']['labour_tax_value']; ?>
</td>
                </tr>
												
              </table>
          
          </div><!-- /.col -->
        </div><!-- /.row -->
      </section><!-- /.content -->
    </div><!-- ./wrapper -->

    <!-- AdminLTE App --><?php echo '
    <script src="./dist/js/app.min.js"></script>
	'; ?>

  </body>
</html>
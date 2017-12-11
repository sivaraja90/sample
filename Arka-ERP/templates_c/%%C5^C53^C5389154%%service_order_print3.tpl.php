<?php /* Smarty version 2.6.25, created on 2016-08-10 15:53:02
         compiled from service_order_print3.tpl */ ?>
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

<?php echo '
	<style>
table { 
    border-spacing: 2px;
    border-collapse: none;
	border:none;
}
td
{ padding:5px;
width:100px;
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
 table, td, th {
    border: 0px solid black;
}
    body {
        height: 95%;
        width: 103%;
        /* to centre page on screen*/
        margin-left: auto;
        margin-right: auto;
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
		  <h4 style="margin-top:-3px;"><center> INVOICE</center></h4>
		  <h5 style="margin-top:-10px; margin-right:25px;" align="right">(Quadruplicate Copy)</h5>
            <h2 class="page-header">
			 <?php $_from = $this->_tpl_vars['DelAddress']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Address']):
?>
             <small class="pull-left"><address style="margin-top:-20px; margin-left:25px;">
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
		   <br><br><br>
		   
		    <!--<img src="./images/download.png" style="width:140px; height:40px; margin-left:20px;">-->
		   <?php $_from = $this->_tpl_vars['AddressView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
          <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            <small class="pull-left"><address style="margin-top:20px; margin-left:-270px;">
			Consignee<br> 
			 <strong><?php echo $this->_tpl_vars['View']['company_name']; ?>
,</strong><br>
              <?php echo $this->_tpl_vars['View']['address1']; ?>
,<br>
              <?php echo $this->_tpl_vars['View']['area']; ?>
, <?php echo $this->_tpl_vars['View']['city']; ?>
 - <?php echo $this->_tpl_vars['View']['pincode']; ?>
.<br>
              Phone: <?php echo $this->_tpl_vars['View']['mobile_no']; ?>
<br>
              Email: <?php echo $this->_tpl_vars['View']['email_id']; ?>
 
			 </address></small>
			  </div><!-- /.col -->
		   </div><!-- /.row -->
			  <?php endforeach; endif; unset($_from); ?>
			 
			 <small class="pull-right"><address style="margin-top:-250px;">
			 <?php $_from = $this->_tpl_vars['AddressView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
			<table class="tablepress" style="border:solid 1px #000000; margin-left:-2%; border-bottom-color:#FFFFFF; border-left-color:#FFFFFF; border-right-color:#FFFFFF; border-top-color:#FFFFFF; width:390px; height:80px; margin-top:15px;">
						<tr class="b1">
						<td class="b1"  style="font-weight:bold;">Order No:</td>
						<td class="b1"><?php echo $this->_tpl_vars['View']['service_order_no']; ?>
</td>
							
						<td class="b1"  style="font-weight:bold;">Order Date:</td>
						<td class="b1"><?php if ($this->_tpl_vars['View']['service_order_date'] == '0000-00-00'): ?> NA <?php elseif ($this->_tpl_vars['View']['service_order_date'] != '0000-00-00'): ?><?php echo $this->_tpl_vars['View']['service_order_date']; ?>
<?php endif; ?></td>
						</tr>
						<tr>
						<td class="b1"  style="font-weight:bold;">Invoice No:</td>
						<td class="b1"><?php echo $this->_tpl_vars['View']['invoice_no']; ?>
</td>
						
						<td class="b1"  style="font-weight:bold;">Invoice Date:</td>
						<td class="b1"><?php if ($this->_tpl_vars['View']['invoice_date'] == '0000-00-00'): ?> NA <?php elseif ($this->_tpl_vars['View']['invoice_date'] != '0000-00-00'): ?><?php echo $this->_tpl_vars['View']['invoice_date']; ?>
<?php endif; ?></td>
						</tr>
				       <!--<tr class="b1">
						<td class="b1"  style="font-weight:bold;">Delivery Note:</td>
						<td class="b1"><?php echo $this->_tpl_vars['View']['del_note']; ?>
</td>
						
						<td class="b1"  style="font-weight:bold;">Mode/Terms of Payment:</td>
						<td class="b1"><?php echo $this->_tpl_vars['View']['mode_of_payment']; ?>
</td>
						</tr >-->
						
						<tr class="b1">
						<td class="b1"  style="font-weight:bold;">Po No:</td>
						<td class="b1"><?php echo $this->_tpl_vars['View']['po_no']; ?>
 </td>
						
						<td class="b1"  style="font-weight:bold;">Po Date:</td>
						<td class="b1"><?php if ($this->_tpl_vars['View']['po_date'] == '0000-00-00'): ?> NA <?php elseif ($this->_tpl_vars['View']['po_date'] != '0000-00-00'): ?><?php echo $this->_tpl_vars['View']['po_date']; ?>
<?php endif; ?></td>
						</tr>
						<tr class="b1">
						<td class="b1"  style="font-weight:bold;">Buyer's Tin No:</td>
						<td class="b1"><?php echo $this->_tpl_vars['View']['tin_no']; ?>
</td>
						
						<td class="b1"  style="font-weight:bold;">Cst No:</td>
						<td class="b1"><?php echo $this->_tpl_vars['View']['cst_no']; ?>
</td>
						</tr>
						</table>
						</address><?php endforeach; endif; unset($_from); ?></small>
             <!-- <img src="./images/logo1.png" style="width:100px; height:40px; margin-left:20px;">-->
			
		    </h2>
          </div><!-- /.col -->
        </div>
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                 <td ><strong>Sl.No</strong></td>
                  <td><strong>Description</strong></td>
                  <td><strong>Sqft</strong></td>
                  <td><strong>Material</strong></td>
                  <td><strong>Labour</strong></td>
				  <td><strong>Tot.Mat</strong></td>
				  <td><strong>Tot.Lab</strong></td>
				  <td><strong>Total</strong></td>
                </tr>
             </thead>
              <tbody>
			   <?php $_from = $this->_tpl_vars['MailView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
                <tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
                  <td><?php echo $this->_tpl_vars['i']; ?>
</td>
                  <td align="justify"><?php echo $this->_tpl_vars['View']['description']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['View']['sqft']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['View']['material']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['View']['labour']; ?>
</td>
				  <td><?php echo $this->_tpl_vars['View']['total_material']; ?>
(<?php echo $this->_tpl_vars['Add_tax']['0']['material_tax_per']; ?>
%)</td>
				  <td><?php echo $this->_tpl_vars['View']['total_labour']; ?>
(<?php echo $this->_tpl_vars['Add_tax']['0']['labour_tax_per']; ?>
%)</td>
				  <td align="right"><?php echo $this->_tpl_vars['View']['total']; ?>
</td>
                </tr>
               <?php endforeach; endif; unset($_from); ?>
			  
              </tbody>
            </table>
          </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
          <!-- accepted payments column -->
          <div class="col-xs-6">
           <?php $_from = $this->_tpl_vars['BankDetails']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bank']):
?>
            <p class="lead">Bank Details:</p>
			<table border="0" width="100%" style="margin-top:-25px;">
			<!--<tr><td>Company Name:</td><td> <?php echo $this->_tpl_vars['bank']['company_name']; ?>
</td></tr>-->
			<tr><td>Account Name:</td><td>  <?php echo $this->_tpl_vars['bank']['bank_ac_name']; ?>
</td></tr>
			<tr><td>Account No: </td><td> <?php echo $this->_tpl_vars['bank']['bank_ac_no']; ?>
</td></tr>
			<tr><td>IFSC Code:</td><td>  <?php echo $this->_tpl_vars['bank']['bank_ifsc_code']; ?>
</td></tr>
			<tr><td>Branch: </td><td> <?php echo $this->_tpl_vars['bank']['bank_branch']; ?>
</td></tr>
			<tr><td>Bank Name: </td><td> <?php echo $this->_tpl_vars['bank']['bank_name']; ?>
</td></tr>
			<br>
			</table>
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['DelAddress']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Address']):
?>
			<p style="margin-left:5px;">For<strong> <?php echo $this->_tpl_vars['Address']['company_name']; ?>
</strong>,</p>
			<?php endforeach; endif; unset($_from); ?>
			<br><br>
			<p style="margin-left:5px;">Authorised Signature</p>
          </div><!-- /.col -->
	
           <!-- <p class="lead">Amount Due 2/22/2014</p>-->
		   <!-- <div class="col-xs-1"></div>-->
             <div class="col-xs-6 table-responsive">
               <table class="table table-striped">
			  <?php $_from = $this->_tpl_vars['SerAddView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['view']):
?>
                <tr align="right" >
                  <th style="border-top:1px solid #000;">Total:</th>
                  <td style="border-top:1px solid #000;"><?php echo $this->_tpl_vars['view']['Total']; ?>
</td>
                </tr>
				<?php endforeach; endif; unset($_from); ?>
<!--				<?php $_from = $this->_tpl_vars['Add_tax']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
                <tr align="right">
                  <th>Material Tax@(<?php echo $this->_tpl_vars['Add_tax']['0']['material_tax_per']; ?>
%):</th>
                  <td><?php echo $this->_tpl_vars['value']['material_tax_value']; ?>
</td>
                </tr>		
				<?php endforeach; endif; unset($_from); ?>
				<?php $_from = $this->_tpl_vars['Add_tax']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
                <tr align="right">
                  <th>Labour Tax@(<?php echo $this->_tpl_vars['Add_tax']['0']['labour_tax_per']; ?>
%):</th>
                  <td><?php echo $this->_tpl_vars['value']['labour_tax_value']; ?>
</td>
                </tr>		
				<?php endforeach; endif; unset($_from); ?>-->
                <tr align="right">
                  <th>Sub Total:</th>
                  <td><?php echo $this->_tpl_vars['Adds']['0']['s_Total']; ?>
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
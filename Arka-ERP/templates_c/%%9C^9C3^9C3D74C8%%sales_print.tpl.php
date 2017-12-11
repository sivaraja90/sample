<?php /* Smarty version 2.6.25, created on 2016-08-02 22:52:49
         compiled from sales_print.tpl */ ?>
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
	/*margin-right:-110px;left:76%;*/
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
			  
			     <img src="./images/download.png" style="width:140px; height:40px; margin-left:20px;">
				 <small class="pull-right"><address style="margin-top:8px; margin-right:-150px;">
				<?php $_from = $this->_tpl_vars['AddressView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
            <b>Quotaion No : <?php echo $this->_tpl_vars['View']['sales_quote_no']; ?>
</b><br>
            <b>Rev : <?php echo $this->_tpl_vars['View']['revised_version']; ?>
</b><br>
           <b>Quote Date : </b><?php echo $this->_tpl_vars['View']['quote_date']; ?>
 <br>
		   <?php endforeach; endif; unset($_from); ?>
          </address></small>
            </h2>
			 </div>
          </div><!-- /.col -->
        
        <!-- info row -->
		<?php $_from = $this->_tpl_vars['AddressView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View']):
?>
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
		     To
            <address> 
              <strong> <?php echo $this->_tpl_vars['View']['company_name']; ?>
</strong><br>
              <?php echo $this->_tpl_vars['View']['address']; ?>
 <?php echo $this->_tpl_vars['View']['address1']; ?>
<br>
              <?php echo $this->_tpl_vars['View']['area']; ?>
, <?php echo $this->_tpl_vars['View']['city']; ?>
 - <?php echo $this->_tpl_vars['View']['pincode']; ?>
.<br>
              Phone: <?php echo $this->_tpl_vars['View']['mobile_no']; ?>
<br>
			  
             <!-- Email: <?php echo $this->_tpl_vars['View']['email_id']; ?>
 -->
			  
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
    foreach ($_from as $this->_tpl_vars['Enquiryt']):
?>
			<p>
		<strong>Sub:</strong>
             Regards&nbsp;<?php echo $this->_tpl_vars['Enquiryt']['enquiry_type']; ?>
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
			   <?php $_from = $this->_tpl_vars['MailView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['View1']):
?>
                <tr id="<?php echo $this->_tpl_vars['i']++; ?>
">
                  <td><?php echo $this->_tpl_vars['i']; ?>
</td>
                  <td align="justify"><?php echo $this->_tpl_vars['View1']['item_description']; ?>
 </td>
                 <td align="center"><?php if ($this->_tpl_vars['View1']['image'] == ''): ?> NA <?php elseif ($this->_tpl_vars['View1']['image'] != ''): ?><img src="./images/product/<?php echo $this->_tpl_vars['View1']['image']; ?>
" style="width:150px; height:60px;" alt="<?php echo $this->_tpl_vars['View1']['image']; ?>
"><?php endif; ?></td>
                  <td><?php echo $this->_tpl_vars['View1']['quantity']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['View1']['unit_basic']; ?>
</td>
				  <td><?php echo $this->_tpl_vars['View1']['vat_per']; ?>
</td>
				  <td><i class="fa fa-inr"></i>&nbsp;<?php echo $this->_tpl_vars['View1']['total']; ?>
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
            <p class="lead">Terms&Conditions:</p>
			<?php $_from = $this->_tpl_vars['sale_term']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sale']):
?>
			<p><?php echo $this->_tpl_vars['sale']['terms_1']; ?>
&nbsp;<?php echo $this->_tpl_vars['Rev_Term']['0']['payment']; ?>
&nbsp;<?php echo $this->_tpl_vars['sale']['terms_2']; ?>
</p>
			<p><?php echo $this->_tpl_vars['sale']['terms_3']; ?>
</p>
			<p><?php echo $this->_tpl_vars['sale']['terms_4']; ?>
&nbsp;<?php echo $this->_tpl_vars['Rev_Term']['0']['delivery']; ?>
&nbsp;<?php echo $this->_tpl_vars['sale']['terms_5']; ?>
</p>
			<p><?php echo $this->_tpl_vars['sale']['terms_6']; ?>
&nbsp;<?php echo $this->_tpl_vars['Rev_Term']['0']['validity']; ?>
&nbsp;<?php echo $this->_tpl_vars['sale']['terms_7']; ?>
</p>
			<?php endforeach; endif; unset($_from); ?>
			
			<p>For <strong><?php echo $this->_tpl_vars['DelAddress']['0']['company_name']; ?>
 ,</strong></p>
			<br>
			<p>Authorised Signature</p>
          </div><!-- /.col -->
	             <div class="col-xs-6">
               <table class="table" style="margin-left:-1px;">
			   <?php $_from = $this->_tpl_vars['Adds']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['add']):
?>
                <tr align="right" >
                  <th style="border-top:1px solid #000;">Sub Total:</th>
                  <td style="border-top:1px solid #000;"><i class="fa fa-inr"></i>&nbsp;<?php echo $this->_tpl_vars['add']['s_Total']; ?>
</td>
                </tr>
				<?php endforeach; endif; unset($_from); ?>
				<!--<?php $_from = $this->_tpl_vars['Add_tax']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
                <tr align="right">
                  <th>Vat @ (<?php echo $this->_tpl_vars['MailView']['0']['vat_per']; ?>
%)</th>
                  <td><i class="fa fa-inr"></i>&nbsp;<?php echo $this->_tpl_vars['value']['tax']; ?>
</td>
                </tr>
				<?php endforeach; endif; unset($_from); ?>-->
                <?php $_from = $this->_tpl_vars['AddView']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sub']):
?>
                <tr align="right">
                  <th>Total:</th>
                  <td><i class="fa fa-inr"></i>&nbsp;<?php echo $this->_tpl_vars['sub']['Total']; ?>
</td>
                </tr>
				<?php endforeach; endif; unset($_from); ?>
              </table>
          </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </section><!-- /.content -->
    </div><!-- ./wrapper -->

    <!-- AdminLTE App --><?php echo '
    <script src="./dist/js/app.min.js"></script>
	'; ?>

  </body>
</html>
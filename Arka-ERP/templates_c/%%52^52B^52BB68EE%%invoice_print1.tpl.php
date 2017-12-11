<?php /* Smarty version 2.6.25, created on 2016-02-23 13:40:41
         compiled from invoice_print1.tpl */ ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Invoice</title>
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
          <div class="col-xs-12">
            <h2 class="page-header">
              <img src="./images/logo.png" style="width:100px; height:40px;">
              <small class="pull-right">Date: 2/10/2014</small>
            </h2>
          </div><!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            From
            <address>
              <strong>Universal Infrastructure Systems</strong><br>
              #51,Sidco Ind.Esate,Ambattur,<br>
              Chennai-600 098<br>
              Phone: 91-44-26524381,42189380<br>
              Email: info@almasaeedstudio.com
            </address>
          </div><!-- /.col -->
          <div class="col-sm-4 invoice-col">
            To
            <address>
              <strong>John Doe</strong><br>
              795 Folsom Ave, Suite 600<br>
              San Francisco, CA 94107<br>
              Phone: (555) 539-1037<br>
              Email: john.doe@example.com
            </address>
          </div><!-- /.col -->
          <div class="col-sm-4 invoice-col">
            <b>Quotaion No:</b><br>
            <b>Rev:-</b>fgd<br>
            <b>Payment Due:</b> 2/22/2014<br>
            <b>Account:</b> 968-34567
          </div><!-- /.col -->
        </div><!-- /.row -->
		<p>
		<strong>Kind Attn:</strong>
              Etsy doostang zoodles disqus groupon greplin  zimbra.
            </p>
			<p>
		<strong>Sub:</strong>
              Etsy doostang zoodles disqus groupon greplin  zimbra.
            </p>
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
                <tr>
                  <td>1</td>
                  <td align="justify">Anna University is a technical university in Tamil Nadu, India. The main university campus is located in Guindy, Chennai. It was named after C N Annadurai, former Chief Minister of Tamil Nadu on 4 September 1978 . WikipediaAnna University is a technical university in Tamil Nadu, India. The main university campus is located in Guindy, Chennai. It was named after C N Annadurai, former Chief Minister of Tamil Nadu on 4 September 1978 . Wikipedia</td>
                  <td>455-981-221</td>
                  <td>6700</td>
                  <td>$64.50</td>
				  <td>$64.50</td>
				  <td>$64.50</td>
				  <td>$64.50</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td align="justify">Anna University is a technical university in Tamil Nadu, India. The main university campus is located in Guindy, Chennai. It was named after C N Annadurai, former Chief Minister of Tamil Nadu on 4 September 1978 . WikipediaAnna University is a technical university in Tamil Nadu, India. The main university campus is located in Guindy, Chennai. It was named after C N Annadurai, former Chief Minister of Tamil Nadu on 4 September 1978 . Wikipedia</td>
                  <td>247-925-726</td>
                  <td>5600</td>
                  <td>$50.00</td>
				  <td>$64.50</td>
				  <td>$64.50</td>
				  <td>$64.50</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td align="justify">Anna University is a technical university in Tamil Nadu, India. The main university campus is located in Guindy, Chennai. It was named after C N Annadurai, former Chief Minister of Tamil Nadu on 4 September 1978 . WikipediaAnna University is a technical university in Tamil Nadu, India. The main university campus is located in Guindy, Chennai. It was named after C N Annadurai, former Chief Minister of Tamil Nadu on 4 September 1978 . Wikipedia</td>
                  <td>735-845-642</td>
                  <td>6756</td>
                  <td>$10.70</td>
				  <td>$64.50</td>
				  <td>$64.50</td>
				  <td>$64.50</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td align="justify">Anna University is a technical university in Tamil Nadu, India. The main university campus is located in Guindy, Chennai. It was named after C N Annadurai, former Chief Minister of Tamil Nadu on 4 September 1978 . WikipediaAnna University is a technical university in Tamil Nadu, India. The main university campus is located in Guindy, Chennai. It was named after C N Annadurai, former Chief Minister of Tamil Nadu on 4 September 1978 . WikipediaAnna University is a technical university in Tamil Nadu, India. The main university campus is located in Guindy, Chennai. It was named after C N Annadurai, former Chief Minister of Tamil Nadu on 4 September 1978 . Wikipedia</td>
                  <td>422-568-642</td>
                  <td>7665</td>
                  <td>$25.99</td>
				  <td>$64.50</td>
				  <td>$64.50</td>
				  <td>$64.50</td>
                </tr>
              </tbody>
            </table>
          </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
          <!-- accepted payments column -->
          <div class="col-xs-6">
            <p class="lead">Terms&Conditions:</p>
			<p>Payment :50%Advance,Balance Running Bill</p>
			<p>Delivery:6to7Weeks</p>
			<p>Validity of Quote:30 days from the date of quote.</p>
			<br>
			<p>For UNIVERSAL INFRASTRUCTURE SYSTEMS,</p>
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
		    
             <div class="col-xs-6 table-responsive">
              <table class="table table-striped">
                <tr align="right" >
                  <th style="border-top:1px solid #000;">Subtotal:</th>
                  <td style="border-top:1px solid #000;">$250.30</td>
                </tr>
                <tr align="right">
                  <th>Sale Tax%</th>
                  <td>$10.34</td>
                </tr>
                <tr align="right">
                  <th>Service Tax%:</th>
                  <td>$5.80</td>
                </tr>
                <tr align="right">
                  <th>Total:</th>
                  <td>$265.24</td>
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
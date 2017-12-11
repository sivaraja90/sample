<?php /* Smarty version 2.6.25, created on 2017-02-18 18:49:59
         compiled from turbineList.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'turbineList.tpl', 250, false),)), $this); ?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ARKA|| Turbine List</title>



    <!-- Data Tables -->
  



		<?php echo '
		
		<script>
        $(document).ready(function() {
            $(\'.dataTables-example\').dataTable({
                responsive: true,
                "dom": \'T<"clear">lfrtip\',
                "tableTools": {
                    "sSwfPath": "assets/js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            /* Init DataTables */
            var oTable = $(\'#editable\').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$(\'td\').editable( \'../example_ajax.php\', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute(\'id\'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $(\'#editable\').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
		$(document).on("click", ".fa-trash", function () {
     var turbine_id = $(this).data(\'id\');
     $(".modal-body #hdnDelturbine_id").val(turbine_id);
});

		
		function deleteCats(CatIdent){
 if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.TurbineMgmt;
   //var gate = document.getElementById(\'gate_entry_id\').value;
  FormName.action= "./turbineList.php?turbine_id="+CatIdent;
  
  FormName.submit();
 }
 }
    </script>

<style>
.isa_success
{
	color:#4F8A10;
	background-color:#DFF2BF;
}
.isa_error
{
	color:#D8000C;
	background-color:#FFBABA;
}
.isa_success i,.isa_error i
{
    margin:10px 22px;
	font-size:2em;
	vertical-align:middle;

}

    body.DTTT_Print {
        background: #fff;

    }
    .DTTT_Print #page-wrapper {
        margin: 0;
        background:#fff;
    }

    button.DTTT_button, div.DTTT_button, a.DTTT_button {
        border: 1px solid #e7eaec;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }
    button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
        border: 1px solid #d2d2d2;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }

    .dataTables_filter label {
        margin-right: 5px;

    }
</style>


'; ?>


</head>
<body>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
     <div class="row">
      <?php if ($this->_tpl_vars['SuccessMessage1'] != ""): ?>
  			<div class="isa_success">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['SuccessMessage1']; ?>
		 
			</div>
		 <?php endif; ?>
		  <?php if ($this->_tpl_vars['ErrorMessage'] != ""): ?>
			<div class="isa_error">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['ErrorMessage']; ?>
		 
			</div>
		 <?php endif; ?>
                <div class="col-lg-12">
                    <div class="panel blank-panel">

                        <div class="panel-heading">
                           <!-- <div class="panel-title m-b-md"><h4>Turbine Details Tabs<?php echo $this->_supers['session']['CustomerId']; ?>
</h4></div> -->
                            <div class="panel-options">

                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-1">All Turbines</a></li>
									<li class=""><a data-toggle="tab" href="#tab-2">SCADA</a></li>

                                    
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">

                            <div class="tab-content">
               <div id="tab-1" class="tab-pane active">
				<div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5  style="padding-left:40%;">List of Turbines</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                          
                        </div>
                    </div>
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
					<form name="TurbineMgmt" method="post">
                    <thead>
                    <tr>
					    <th>Sl.No</th>
                        <th>Turbine ID</th>
						<?php if ($this->_supers['session']['CustomerId'] == 'CUS1001'): ?>
						<th>Customer Id</th>
						<?php endif; ?>
						<th>Location No</th>
                        <th>Turbine HTSC No</th>
						<th>Site Name</th>
						<th>MF</th>
						<th>Make</th>
						<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						   <?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Turbine' || $this->_tpl_vars['roles']['role_name'] == 'Delete Turbine'): ?>
						      <th>Action</th>	
						   <?php endif; ?>
				        <?php endforeach; endif; unset($_from); ?>	
                       
                    </tr>
                    </thead>
                   <tbody>
				
			<?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
                    <tr class="gradeX" id="<?php echo $this->_tpl_vars['i']++; ?>
">
			<td><a href="./turbineDetails.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><?php echo $this->_tpl_vars['i']; ?>
 </a></td>
			<td><a href="./turbineDetails.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
 </a></td>
			<?php if ($this->_supers['session']['CustomerId'] == 'CUS1001'): ?>
			<td><a href="./turbineDetails.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['customer_id']; ?>
 </a></td>
			<?php endif; ?>
			<td><a href="./turbineDetails.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
 </a></td>
			<td><a href="./turbineDetails.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
</a></td>
			<td><a href="./turbineDetails.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
</a></td>
            <td ><a href="./turbineDetails.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['mf']; ?>
</a></td>
	        <td ><a href="./turbineDetails.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['make']; ?>
</a></td>
			
    <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
       <?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Turbine'): ?>
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineEdit.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><i class="fa fa-edit"></i></a></td>
	   <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>	      
		
    <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
	   <?php if ($this->_tpl_vars['roles']['role_name'] == 'Delete Turbine'): ?> 
	      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick=" deleteCats('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');"></a></td>
	   <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>	
               
              <!--   <td class="center"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src=" ./img/wind_turbine.png" alt="Panel Entry"></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/eb_gen_entry.jpg" alt="EB Entry"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="./turbineStatus.php"><img src="./img/maintenance_icon.png" alt="Material Entry"></a></td>-->
				  </tr>
<?php endforeach; endif; unset($_from); ?>
                    </tbody>
					</form>
                    </table>

                    </div>
                </div>
               </div>

	<div id="tab-2" class="tab-pane ">
	<div class="ibox float-e-margins">
	<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
	<?php $_from = $this->_tpl_vars['VestasList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Vestas']):
?>
	<div class="col-lg-4">
	
	<div class="contact-box">
	<div class="col-sm-4">
	<div class="text-center">
	<?php if ($this->_tpl_vars['Vestas']['STATUS'] == 0): ?>
		<img alt="image" class="img-circle m-t-xs img-responsive" src="./images/yellow_turbine.png">
		<div class="m-t-xs font-bold"> Grid Drop</div>
	<?php elseif ($this->_tpl_vars['Vestas']['VDATE'] == ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) || ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) <= $this->_tpl_vars['Vestas']['VDT']): ?>
	 	<?php if ($this->_tpl_vars['Vestas']['STATUS'] == 225): ?>
			<img alt="image" class="img-circle m-t-xs img-responsive" src="./images/green.png">
			<div class="m-t-xs font-bold">Running</div>
		<?php elseif ($this->_tpl_vars['Vestas']['STATUS'] != 225 && $this->_tpl_vars['Vestas']['STATUS'] != 0): ?> 
			<img alt="image" class="img-circle m-t-xs img-responsive" src="./images/red.gif">
			<div class="m-t-xs font-bold"> 
			Other Error</div>
						<!--<?php if ($this->_tpl_vars['Vestas']['STATUS'] != ''): ?>Error No: <?php endif; ?><?php echo $this->_tpl_vars['Vestas']['STATUS']; ?>
<?php if ($this->_tpl_vars['Vestas']['STATUS'] == ''): ?>Other Error<?php endif; ?>
						<?php  
							require_once('Connections/ARKA.php');
							mysql_select_db($database_arka, $arka);
							$query_rs1 = "select DESCRIPTION from vestas_error_details where ERROR_ID='".$Vestas.STATUS."'";
							$rs1 = mysql_query($query_rs1, $arka) or die(mysql_error());
							$row_rs1 = mysql_fetch_assoc($rs1);
							echo $desc =$row_rs1["DESCRIPTION"];
						 ?>-->
						<?php endif; ?>
	<?php elseif ($this->_tpl_vars['Vestas']['VDATE'] != ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) || ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) <= $this->_tpl_vars['Vestas']['VDT'] && $this->_tpl_vars['Vestas']['STATUS'] == 225): ?>
					 	<img alt="image" class="img-circle m-t-xs img-responsive" src="./images/navy.png" alt="navy">
			<div class="m-t-xs font-bold"> No Comm.</div>
				
		
   
   <?php elseif ($this->_tpl_vars['Vestas']['VDATE'] != ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) || ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) <= $this->_tpl_vars['Vestas']['VDT'] && $this->_tpl_vars['Vestas']['STATUS'] <> 225): ?>
		<img alt="image" class="img-circle m-t-xs img-responsive" src="./images/navy.png" alt="navy">
		<div class="m-t-xs font-bold"> No Comm.</div>
   <?php endif; ?>
	</div>
	</div>
	<div class="col-sm-8">
	<h3><strong>HTSC :<?php echo $this->_tpl_vars['Vestas']['turbine_htsc_no']; ?>
 / LOC: <?php echo $this->_tpl_vars['Vestas']['location_no']; ?>
 </strong></h3>
	<p><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Site : <?php echo $this->_tpl_vars['Vestas']['site_name']; ?>
</p>
	<address>
	<strong>Wind Speed : </strong><?php echo $this->_tpl_vars['Vestas']['WS']; ?>
&nbsp; m/s<br>
	<strong>Instant Kw : </strong> </abbr> <?php echo $this->_tpl_vars['Vestas']['KW']; ?>
&nbsp;Kw<br>
	<strong>Last Update: </strong><?php echo $this->_tpl_vars['Vestas']['TZ']; ?>
<br>
	
	
	</address>
	</div>
	
	<div class="clearfix"></div>
	</div>
	</div>
	<?php endforeach; endif; unset($_from); ?><br/>
		<?php $_from = $this->_tpl_vars['NepcList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListNepc']):
?>
	<div class="col-lg-4">
	<div class="contact-box">
	<div class="col-sm-4">
	<div class="text-center">
	<?php if ($this->_tpl_vars['ListNepc']['STATUS'] == 19): ?>
		<img alt="image" class="img-circle m-t-xs img-responsive" src="./images/yellow_turbine.png">
		<div class="m-t-xs font-bold"> Grid Drop.</div>
	<?php elseif ($this->_tpl_vars['ListNepc']['VDATE'] == ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) || ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) <= $this->_tpl_vars['ListNepc']['VDT']): ?>
	 	<?php if ($this->_tpl_vars['ListNepc']['STATUS'] == 49): ?>
			<img alt="image" class="img-circle m-t-xs img-responsive" src="./images/green.png">
			<div class="m-t-xs font-bold">Running</div>
		<?php elseif ($this->_tpl_vars['ListNepc']['STATUS'] != 49 && $this->_tpl_vars['ListNepc']['STATUS'] != 19): ?> 
			<img alt="image" class="img-circle m-t-xs img-responsive" src="./images/red.gif">
			<div class="m-t-xs font-bold"> 
			Other Error</div>
						<!--<?php if ($this->_tpl_vars['Vestas']['STATUS'] != ''): ?>Error No: <?php endif; ?><?php echo $this->_tpl_vars['Vestas']['STATUS']; ?>
<?php if ($this->_tpl_vars['Vestas']['STATUS'] == ''): ?>Other Error<?php endif; ?>
						<?php  
							require_once('Connections/ARKA.php');
							mysql_select_db($database_arka, $arka);
							$query_rs1 = "select DESCRIPTION from vestas_error_details where ERROR_ID='".$Vestas.STATUS."'";
							$rs1 = mysql_query($query_rs1, $arka) or die(mysql_error());
							$row_rs1 = mysql_fetch_assoc($rs1);
							echo $desc =$row_rs1["DESCRIPTION"];
						 ?>-->
						<?php endif; ?>
	<?php elseif ($this->_tpl_vars['ListNepc']['VDATE'] != ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) || ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) <= $this->_tpl_vars['ListNepc']['VDT'] && $this->_tpl_vars['ListNepc']['STATUS'] == 49): ?>
					 	<img alt="image" class="img-circle m-t-xs img-responsive" src="./images/navy.png" alt="navy">
			<div class="m-t-xs font-bold">No Comm.</div>
				
		
   
   <?php elseif ($this->_tpl_vars['ListNepc']['VDATE'] != ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')) || ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')) <= $this->_tpl_vars['ListNepc']['VDT'] && $this->_tpl_vars['ListNepc']['STATUS'] != 49 && $this->_tpl_vars['ListNepc']['STATUS'] != 19): ?>
		<img alt="image" class="img-circle m-t-xs img-responsive" src="./images/navy.png" alt="navy">
		<div class="m-t-xs font-bold">No Comm.</div>
   <?php endif; ?>
	</div>
	</div>
	<div class="col-sm-8">
	<h3><strong>HTSC :<?php echo $this->_tpl_vars['ListNepc']['turbine_htsc_no']; ?>
 / LOC: <?php echo $this->_tpl_vars['ListNepc']['location_no']; ?>
 </strong></h3>
	<p><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Site : <?php echo $this->_tpl_vars['ListNepc']['site_name']; ?>
</p>
	<address>
	<strong>Wind Speed : </strong><?php echo $this->_tpl_vars['ListNepc']['WS']; ?>
&nbsp; m/s<br>
	<strong>Instant Kw : </strong> </abbr> <?php echo $this->_tpl_vars['ListNepc']['KW']; ?>
&nbsp;Kw<br>
	<strong>Last Update: </strong><?php echo $this->_tpl_vars['ListNepc']['TZ']; ?>
<br>
	
	
	</address>
	</div>

	<div class="clearfix"></div>
	</div>
	</div>
	<?php endforeach; endif; unset($_from); ?>
	</div>
	</div>
	</div>
	
	</div>
	</div>
    </div>

                    </div>
                </div>
            </div>
        </div>
		<?php echo '
<script>
    
        $(document).ready(function(){
            $(\'.contact-box\').each(function() {
                animationHover(this, \'pulse\');
            });
			
        });
    
</script>
'; ?>
<?php /* Smarty version 2.6.25, created on 2015-11-14 15:48:00
         compiled from powergenerationList1.tpl */ ?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Data Tables</title>



    <!-- Data Tables -->

		
		<?php echo '
		<script>
        $(document).ready(function() {
            $(\'.dataTables-example\').dataTable({
                responsive: true,
                "dom": \'T<"clear">lfrtip\',
                "tableTools": {
                    "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
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
     var site_name = $(this).data(\'name\');
     $(".modal-body #hdnDelsite_name").val(site_name);
});
			
		function deleteCats(CatIdent){
 if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.PanelMgmt;
   //var gate = document.getElementById(\'gate_entry_id\').value;
  FormName.action= "./powergenerationList.php?site_id="+CatIdent;
  
  FormName.submit();
 }
 }
    </script>
	<style>
	 <link rel="codebase/dhtmlxcalendar.css" type="text/css">
	 <link rel="codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css">
	 <link rel="codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
	 
	</style>

<script src="dhtmlxMessage/codebase/dhtmlxcalendar.js" type="text/javascript"></script>
<script src="codebase/dhtmlxcalendar.js" type="text/javascript"></script>
<script src="codebase/dhtmlxcommon.js" type="text/javascript"></script>


	<script>
	$(function(Date1) {
				//alert("test");
				$( "#from_date" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});
			$(function(Date2) {
				//alert("test");
				$( "#to_date" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});
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
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Panel Registration</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="./siteList.php">Panel Management</a>
                        </li>
                        <li>
                            <a href="#">List Panel</a>
                        </li>

                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
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
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5  style="padding-left:40%;">List of Panel</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                          
                        </div>
                    </div>
                    <div class="ibox-content">
                     <form name="PanelMgmt" method="post" >
                    <table width="100%" cellpadding="2" cellspacing="0" border="0">	
            <tr><td>&nbsp;</td> </tr>
	        <tr>
            <td><label>Region:</label></td>
                <td><input type="text" name="region" id="region" readonly="true" value="Thirunelveli"></td>
				<td>Sites:</td>
			   <!-- <td><select name="site_name" id="site_name" onChange="showGroup(this.value);" style="height:18px;">  >-->
			    <td><select name="site_name" id="site_name"  style="height:18px;">  
				<option value="Region" >---Please Select Region---</option>
         		<option value="Pazhavoor" >Pazhavoor</option>
				<option value="Thandayarkulam" >Thandayar kulam</option>
				<option value="Karunkulam" >Karun kulam</option>
				<option value="Keelkulam" >Keel kulam</option>
				<option value="Kothankulam" >Kothan kulam</option>
				<option value="Perungudi" >Perungudi</option>
                <option value="Uthumalai">Uthumalai</option>
                <option value="Panagudi" >Panagudi</option>
			    </select>&nbsp;&nbsp;<font class="error"><b>*</b>&nbsp;</font></td>
                            
<!--                            <td>HTSC No: </td>
                            <td >
                                <select id="htsc_grouping" name="htsc_no" style="height:18px;" >   
                                <option value=0 selected="selected">----Please Select Sites-----</option>
                                </select> 
                            </td>-->

                            <td><label>From Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="from_date" name="from_date" size="15"  readonly="true" value="<?php echo $this->_tpl_vars['Date1']; ?>
" >&nbsp;&nbsp;<font class="error"   ><b>*</b>&nbsp;</font></td>
							<td><label>To Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="to_date" name="to_date" size="15"  readonly="true" value="<?php echo $this->_tpl_vars['Date2']; ?>
">&nbsp;&nbsp;<font class="error"   ><b>*</b>&nbsp;</font></td>
                     <!--<td><input class="button" type='submit' name="get_details" value='Get Details' /></td>-->
				 
       </tr>
		</table>
		<br />
					<table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
					    <th>Location No</th>
                        <th>G1 KWh</th>
					   	<th>G2 KWh</th>
						<?php if ($this->_supers['session']['CustomerId'] == 'CUS1001'): ?>
						<th>Total KWh</th>
						<th>G1 Hrs</th>
						<?php endif; ?>
                        <th>G2 Hrs</th>
                        <th>Gen Hrs</th>
						<th>Idle Hrs</th>
						<th>FW Hrs</th>
						<th>GD Hrs</th>
						<th>MT Hrs</th>
						<th>BD Hrs</th>
						<th>AB Hrs</th>
						
						<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						   <?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Panel' || $this->_tpl_vars['roles']['role_name'] == 'Delete Panel'): ?>				
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
			<td><a href="./powergenerationDetails.php?site_id=<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
			<td><a href="./powergenerationDetails.php?site_id=<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
"><?php echo $this->_tpl_vars['ListDet']['site_id']; ?>
</a></td>
			<td><a href="./powergenerationDetails.php?site_id=<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
"><?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
</a></td>
			<?php if ($this->_supers['session']['CustomerId'] == 'CUS1001'): ?>
			<td> <a href="./powergenerationDetails.php?site_id=<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
"><?php echo $this->_tpl_vars['ListDet']['customer_id']; ?>
 </a></td>
			<td> <a href="./powergenerationDetails.php?site_id=<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
"><?php echo $this->_tpl_vars['ListDet']['customer_name']; ?>
 </a></td>
			<?php endif; ?>
			<td><a href="./powergenerationDetails.php?site_id=<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
"><?php echo $this->_tpl_vars['ListDet']['contact_person']; ?>
</a></td>
            <td ><a href="./powergenerationDetails.php?site_id=<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
"><?php echo $this->_tpl_vars['ListDet']['mobile']; ?>
</a></td>
	        <td ><a href="./powergenerationDetails.php?site_id=<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
"><?php echo $this->_tpl_vars['ListDet']['no_of_turbines']; ?>
</a></td>
			
    <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
	   <?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Panel'): ?>
						   <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./powergenerationEdit.php?site_name=<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
"><i class="fa fa-edit"></i></a></td>      
       <?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>						
	<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
	   <?php if ($this->_tpl_vars['roles']['role_name'] == 'Delete Panel'): ?>
	      <td class="center">&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick="deleteCats('<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
');"></a></td>
	   <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>	
						  
                  </tr>
					<?php endforeach; endif; unset($_from); ?>
                    </tbody>
                 <!--    <tfoot>
                   <tr>
                        <th>User ID</th>
						<th>User Name</th>
                        <th>Site Name</th>
						
						
                        <th>User Group</th>
                        <th>Contact Person</th>
						<th>Action</th>
						
                    </tr>
                    </tfoot>-->
					</form>
                    </table>
<!-----------------------------------------  Start of Delete Role ------------------------->						
<div id="modal-form3" class="modal fade" aria-hidden="true" data-backdrop="static">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
										
										<div class="row">
											  <h3 class="m-t-none m-b text-center">Deleting Panel</h3>
											  <div class="hr-line-dashed"></div>
									    </div>	
										
<div id="panelDeleteLoader" style="display:none;" align="center"><img src="assets/images/icons/loading.gif"  alt="Delete is in Process..."/></div>	
																		
						
                                    <div class="row">
										<div class="col-lg-12" id="succsMsgPanelDelete"></div>
									</div>

                                    </div>
                                    </div>
                                </div>
                        </div>						
<!-----------------------------------------  End of Delete Role ------------------------->	

                    </div>
                </div>
            </div>
            </div>
           
        </div>
		<?php echo '
<script>
$(document).on("click", ".fa-trash", function () {
     var site_name = $(this).data(\'name\');
     $(".modal-body #hdnDelsite_name").val(site_name);
});

function deleteSite(deldata)
{
	if(confirm("Are you sure to Delete?"))
	{
					$(\'#modal-form3\').modal(\'show\')
													
					$("#PanelDeleteLoader").css("display","block");
					$.ajax({
					url: "index.php/panelList/deletePanel",
					type:"POST",
					beforeSend:function()
					{
					
					},
					data:{siteId:deldata},
					success: function(result)
					{
					$("#panelDeleteLoader").css("display","none");
					$("#succsMsgPanelDelete").html(result);
					setTimeout(function(){location.reload(); }, 2000);
					
					
					}
					});	
	}
	else
	{
	return false;
	}				

}
</script>
'; ?>


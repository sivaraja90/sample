<?php /* Smarty version 2.6.25, created on 2016-02-05 10:34:57
         compiled from vendorList.tpl */ ?>
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
     var pan_no = $(this).data(\'id\');
     $(".modal-body #hdnDelpan_no").val(pan_no);
});
			
		function deleteCats(CatIdent){
 if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.SiteMgmt;
   //var gate = document.getElementById(\'gate_entry_id\').value;
  FormName.action= "./vendorList.php?pan_no="+CatIdent;
  
  FormName.submit();
 }
 }
    </script>
	<script type="text/javascript" src="./dhtmlxMessage/codebase/dhtmlxcalendar.js" ></script>
	<script type="text/javascript" src="./templates/codebase/dhtmlxcalendar.js"></script>
	<script type="text/javascript" src="./templates/codebase/dhtmlxcommon.js"></script>
	<script src="./jquery/jquery.ui.datepicker.js"></script>
	<script>
	function getval()
        {
		var from_date,to_date;
		from_date=document.getElementById("from_date").value;
		to_date=document.getElementById("to_date").value;
		

		if(from_date=="" || to_date=="" )
		{
			alert("Please Specify Date");
			return false;
		}
		
        }	
	var myCalendar;
function doOnLoad() {
    
    var from_date;
	from_date=new Date();
    myCalendar = new dhtmlXCalendarObject(["from_date"]);
	myCalendar = new dhtmlXCalendarObject(["to_date"]);
   	

}	</script>
<link rel="stylesheet" type="text/css" href="./css/datepickier_main.css">
	 	    <link rel="stylesheet" type="text/css" href="./css/jquery-ui.css">
	  		<link rel="stylesheet" href="./codebase/dhtmlxcalendar.css" type="text/css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css"> 
			<link rel="stylesheet" href="./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
			<link rel="stylesheet" type="text/css" href="./templates/css/datepicker.css">
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
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5  style="padding-left:40%;">LIST OF VENDORS</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                          
                        </div>
                    </div>
					
					<table width="100%" border="0" cellspacing=1 cellpadding=2><body onLoad="doOnLoad();">
 <tr>
				<td>From Date</td>
                <td ><input type="text" id="from_date" name="from_date" value="" placeholder="From Date" size="25" readonly="true" autocomplete="Off"></td>
				<td>To Date</td>
                <td ><input type="text" id="to_date" name="to_date" value="" placeholder="To Date" size="25" readonly="true" autocomplete="Off"></td>				 	
	            <td  align="right"> ></td>
				
</tr>
</body>
</table>
					
					
					
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
					<form name="SiteMgmt" method="post" >
                    <thead>
                    <tr>
					    <th>Sl.No</th>
                        <!--<th  width="30">Supplier Name</th>-->
					   	<th>Supplier Code</th>
						<th>Contact Person</th>
						<th>Designation</th>
						<th>Mobile No</th>
						<th>City</th>
						<th>State</th>
						<th>EMail</th>
						<th>Pincode</th>
						
						<th>Action</th>

						</tr>
						</thead>
						 <!--<tr class="" id="<?php echo '<?='; ?>
$row['ticket_id']<?php echo '?>'; ?>
">
			 
                <td bgcolor="#CCFFFF" align="center"></td>
                <td bgcolor="#CCFFFF" align="center"><input type="text" id="inward_entry_id" name="inward_entry_id" value="" autocomplete="off" size="5"></td>
                
				<td bgcolor="#CCFFFF" align="center"><input type="text" id="dc_date" name="dc_date" value="" autocomplete="off" onKeyUp="showList(this.value,this.id)" size="8"></td>
                <td bgcolor="#CCFFFF" align="center"><input type="text" id="dc_no" name="dc_no" value="" autocomplete="off" autocomplete="off" onkeyup="showList(this.value,this.id)" size="5"></td>
		<td bgcolor="#CCFFFF" align="center"><input type="text" id="supplier_name" onKeyUp="showList(this.value,this.id)" autocomplete="off" name="supplier_name" value="" size="5"></td>
                <td bgcolor="#CCFFFF" align="center"><input type="text" id="invoice_date" name="invoice_date" value="" onKeyUp="showList(this.value,this.id)" autocomplete="off" size="8"></td>
				 <td bgcolor="#CCFFFF" align="center"><input type="text" id="invoice_amt" name="invoice_amt" value="" onKeyUp="showList(this.value,this.id)" autocomplete="off" size="8"></td>
				 
				  
				<input id="search" name="search" value="" size="10" class="btn" type="submit" style="visibility:hidden" > 
				
	
			  <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./outwardEdit.php?site_id=<?php echo $this->_tpl_vars['ListDet']['site_id']; ?>
"><i class="fa fa-edit"></i></a></td>      
			  <td class="center">&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick="deleteCats('<?php echo $this->_tpl_vars['ListDet']['site_id']; ?>
');"></a></td>
		
		
				
            </tr>-->

                    
                    <tbody>
					<?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
            <tr class="gradeX" id="<?php echo $this->_tpl_vars['i']++; ?>
" >
				<td align="left" ><a href="./vendorDetails.php?panNo=<?php echo $this->_tpl_vars['ListDet']['pan_no']; ?>
"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
                <!--<td align="left" ><a href="./vendorDetails.php?supplierCode=<?php echo $this->_tpl_vars['ListDet']['supplier_code']; ?>
"><?php echo $this->_tpl_vars['ListDet']['supplier_name']; ?>
</a></td>-->
                <td align="left" ><a href="./vendorDetails.php?panNo=<?php echo $this->_tpl_vars['ListDet']['pan_no']; ?>
"><?php echo $this->_tpl_vars['ListDet']['supplier_code']; ?>
</a></td>
	            <td align="left"><a href="./vendorDetails.php?panNo=<?php echo $this->_tpl_vars['ListDet']['pan_no']; ?>
"><?php echo $this->_tpl_vars['ListDet']['contact_person']; ?>
</a></td>

	   <!--<td align="left"><a href="./vendorDetails.php?supplierName=<?php echo $this->_tpl_vars['ListDet']['supplier_name']; ?>
"><?php echo $this->_tpl_vars['ListDet']['address2']; ?>
</a></td>-->
	              <td align="left"><a href="./vendorDetails.php?panNo=<?php echo $this->_tpl_vars['ListDet']['pan_no']; ?>
"><?php echo $this->_tpl_vars['ListDet']['designation']; ?>
</a></td>
		           <td align="left"><a href="./vendorDetails.php?panNo=<?php echo $this->_tpl_vars['ListDet']['pan_no']; ?>
"><?php echo $this->_tpl_vars['ListDet']['mobile_no']; ?>
</a></td>

		             <td align="left"><a href="./vendorDetails.php?panNo=<?php echo $this->_tpl_vars['ListDet']['pan_no']; ?>
"><?php echo $this->_tpl_vars['ListDet']['city']; ?>
</a></td>
		            <td align="left"><a href="./vendorDetails.php?panNo=<?php echo $this->_tpl_vars['ListDet']['pan_no']; ?>
"><?php echo $this->_tpl_vars['ListDet']['state']; ?>
</a></td>
			     <td align="left"><a href="./vendorDetails.php?panNo=<?php echo $this->_tpl_vars['ListDet']['pan_no']; ?>
"><?php echo $this->_tpl_vars['ListDet']['email']; ?>
</a></td>
			     <td align="left"><a href="./vendorDetails.php?panNo=<?php echo $this->_tpl_vars['ListDet']['pan_no']; ?>
"><?php echo $this->_tpl_vars['ListDet']['pincode']; ?>
</a></td>
			    <!--<td align="left"><a href="./vendorDetails.php?supplierName=<?php echo $this->_tpl_vars['ListDet']['supplier_name']; ?>
"><?php echo $this->_tpl_vars['ListDet']['created_date']; ?>
</a></td>
			     <td align="left"><a href="./vendorDetails.php?supplierName=<?php echo $this->_tpl_vars['ListDet']['supplier_name']; ?>
"><?php echo $this->_tpl_vars['ListDet']['created_time']; ?>
</a></td>
				 <td align="left"><a href="./vendorDetails.php?supplierName=<?php echo $this->_tpl_vars['ListDet']['supplier_name']; ?>
"><?php echo $this->_tpl_vars['ListDet']['created_by']; ?>
</a></td>-->
			    <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./vendorEdit.php?panNo=<?php echo $this->_tpl_vars['ListDet']['pan_no']; ?>
"><i class="fa fa-edit"></i></a>      
			   &nbsp;&nbsp; &nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick="deleteCats('<?php echo $this->_tpl_vars['ListDet']['pan_no']; ?>
');"></a></td>
		
		<?php endforeach; endif; unset($_from); ?>
			
    					  
                  </tr>
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
											  <h3 class="m-t-none m-b text-center">Deleting Site</h3>
											  <div class="hr-line-dashed"></div>
									    </div>	
										
<div id="siteDeleteLoader" style="display:none;" align="center"><img src="../../../../../192.168.1.8/wamp/www/Aura/templates/assets/images/icons/loading.gif"  alt="Delete is in Process..."/></div>	
																		
						
                                    <div class="row">
										<div class="col-lg-12" id="succsMsgSiteDelete"></div>
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
     var siteId = $(this).data(\'id\');
     $(".modal-body #hdnDelSiteId").val(siteId);
});

function deleteSite(deldata)
{
	if(confirm("Are you sure to Delete?"))
	{
					$(\'#modal-form3\').modal(\'show\')
													
					$("#siteDeleteLoader").css("display","block");
					$.ajax({
					url: "index.php/siteList/deleteSite",
					type:"POST",
					beforeSend:function()
					{
					
					},
					data:{siteId:deldata},
					success: function(result)
					{
					$("#siteDeleteLoader").css("display","none");
					$("#succsMsgSiteDelete").html(result);
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

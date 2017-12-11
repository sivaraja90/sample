<?php /* Smarty version 2.6.25, created on 2017-03-09 16:30:36
         compiled from customerList.tpl */ ?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ARKA|| Customer List</title>



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
     var customer_id = $(this).data(\'id\');
     $(".modal-body #hdnDelcustomer_id").val(customer_id);
});

		
		function deleteCats(CatIdent){
 if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.CustomerMgmt;
   //var gate = document.getElementById(\'gate_entry_id\').value;
  FormName.action= "./customerList.php?customer_id="+CatIdent;
  
  FormName.submit();
 }
 }
		/*function deleteCustomer(delData)
{
	if(confirm("Are you sure to Delete?"))
	{
				
					$(\'#modal-form3\').modal(\'show\')
													
					$("#customerDeleteLoader").css("display","block");
					$.ajax({
					url: "./customerList.php/deleteCustomer",
					type:"POST",
					beforeSend:function()
					{
					
					},
					data:{customerId:delData},
					success: function(result)
					{
					$("#customerDeleteLoader").css("display","none");
					$("#succsMsgCustomerDelete").html(result);
					setTimeout(function(){location.reload(); }, 2000);
					
					
					}
					});	
	}
	else
	{
		
	return false;
	}				

}*/
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
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5  style="padding-left:40%;">List of Customers</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                          
                        </div>
                    </div>
                    <div class="ibox-content">
<!--<div class="examp" style="overflow-x:auto;">-->
                    <table class="table table-striped table-bordered table-hover  dataTables-example"  >
					<form name="CustomerMgmt" method="post" >
                    <thead>
                    <tr>
						<th>Sl No.</th>
                        <th>Customer ID</th>
                        <th>Name</th>
                        <th>Contact Person</th>
						<th>Mobile</th>	
						<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						   <?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Customer' || $this->_tpl_vars['roles']['role_name'] == 'Delete Customer'): ?>					
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
			
			<td><a href="./customerDetails.php?customer_id=<?php echo $this->_tpl_vars['ListDet']['customer_id']; ?>
"><?php echo $this->_tpl_vars['i']; ?>
</a></td>	
		  	<td><a href="./customerDetails.php?customer_id=<?php echo $this->_tpl_vars['ListDet']['customer_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['customer_id']; ?>
</a></td>			        
		    <td><a href="./customerDetails.php?customer_id=<?php echo $this->_tpl_vars['ListDet']['customer_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['customer_name']; ?>
</a></td>	          	
            <td><a href="./customerDetails.php?customer_id=<?php echo $this->_tpl_vars['ListDet']['customer_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['contact_person']; ?>
</a></td>
		    
			
	        <td >
			<a href="./customerDetails.php?customer_id=<?php echo $this->_tpl_vars['ListDet']['customer_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['mobile']; ?>
</a>
			</td>					
			
		<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
	       <?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Customer'): ?>
		      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./customerEdit.php?customer_id=<?php echo $this->_tpl_vars['ListDet']['customer_id']; ?>
"><i class="fa fa-edit"></i></a></td> 
		   <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>	 
		<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
		   <?php if ($this->_tpl_vars['roles']['role_name'] == 'Delete Customer'): ?>
		      <td class="center">	&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick="deleteCats('<?php echo $this->_tpl_vars['ListDet']['customer_id']; ?>
');"></a></td> 
		   <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>	
					
                  </tr>
					<?php endforeach; endif; unset($_from); ?>	
                    

                    </tbody>
                   </form>
                    </table>
					<!--</div>-->
<!-----------------------------------------  Start of Delete Role ------------------------->						
<div id="modal-form3" class="modal fade" aria-hidden="true" data-backdrop="static">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
										
										<div class="row">
											  <h3 class="m-t-none m-b text-center">Deleting Customer</h3>
											  <div class="hr-line-dashed"></div>
									    </div>	
										
<div id="customerDeleteLoader" style="display:none;" align="center"><img src="./images/icons/loading.gif"  alt="Delete is in Process..."/></div>	
																		
						
                                    <div class="row">
										<div class="col-lg-12" id="succsMsgCustomerDelete"></div>
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

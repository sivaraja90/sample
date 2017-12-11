<?php /* Smarty version 2.6.25, created on 2015-12-22 17:09:21
         compiled from pdtMaterialEntryList.tpl */ ?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ARKA|| Product Material Entry List</title>



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
     var scada_id = $(this).data(\'id\');
     $(".modal-body #hdnDelscada_id").val(scada_id);
});

function deletePdt(delData)
{
	if(confirm("Are you sure to Delete?"))
	{
					$(\'#modal-form3\').modal(\'show\')
													
					$("#scadaDeleteLoader").css("display","block");
					$.ajax({
					url: "./productList.php",
					type:"POST",
					beforeSend:function()
					{
					
					},
					data:{product_id:delData},
					success: function(result)
					{
					$("#scadaDeleteLoader").css("display","none");
					$("#succsMsgScadaDelete").html(result);
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
<style>
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
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5  style="padding-left:40%;">List of Product Materials</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                          
                        </div>
                    </div>
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
						<th>Sl No</th>	
                        <th>Turbine_Id</th>
						<th>Location</th>
                        <th>HTSC</th>
                        <th>Site Name</th>
						<th>Scada_Id</th>
						<th>Product_Id</th>
						<th>Install_Date</th>
						<th>Install_By</th>
						 <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						   <?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Product Mapping' || $this->_tpl_vars['roles']['role_name'] == 'Delete Product Mapping'): ?>	
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
		  <td><a href="./pdtMappingDetails.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
			<td><a href="./pdtMappingDetails.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
</a></td>
			<td><a href="./pdtMappingDetails.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['location']; ?>
</a></td>
			<td><a href="./pdtMappingDetails.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['htsc']; ?>
</a></td>
            <td ><a href="./pdtMappingDetails.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
</a></td>
			<td ><a href="./pdtMappingDetails.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['scada_id']; ?>
</a></td>
	        <td ><a href="./pdtMappingDetails.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['product_id']; ?>
</a></td>
	        <td ><a href="./pdtMappingDetails.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['install_date']; ?>
</a></td>
			<td ><a href="./pdtMappingDetails.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['install_by']; ?>
</a></td>
                   <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
					  <?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Product Mapping'): ?>	
						   <td class="center"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./pdtMappingEdit.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><i class="fa fa-edit"></i></a></td>
					  <?php endif; ?>
				   <?php endforeach; endif; unset($_from); ?>
                   <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				      <?php if ($this->_tpl_vars['roles']['role_name'] == 'Delete Product Mapping'): ?>	
					     <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="#"><i class="fa fa-trash" onClick="deletePdt("<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
")"></a></td>
					  <?php endif; ?>
				   <?php endforeach; endif; unset($_from); ?>

               
           </tr>
					
                   <?php endforeach; endif; unset($_from); ?>  

                    </tbody>
                   
                    </table>

    
<!-----------------------------------------  Start of Delete Role ------------------------->						
<div id="modal-form3" class="modal fade" aria-hidden="true" data-backdrop="static">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
										
										<div class="row">
											  <h3 class="m-t-none m-b text-center">Deleting User</h3>
											  <div class="hr-line-dashed"></div>
									    </div>	
										
<div id="scadaDeleteLoader" style="display:none;" align="center"><img src="./images/icons/loading.gif"  alt="Delete is in Process..."/></div>	
																		
						
                                    <div class="row">
										<div class="col-lg-12" id="succsMsgScadaDelete"></div>
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

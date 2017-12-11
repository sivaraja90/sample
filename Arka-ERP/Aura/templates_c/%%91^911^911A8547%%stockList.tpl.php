<?php /* Smarty version 2.6.25, created on 2017-10-05 19:23:58
         compiled from stockList.tpl */ ?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ARKA|| Stock List</title>



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
<script type="text/javascript">
function bookcopy(id)
{ //alert("hi");alert(id);
$(\'#bookcopyid_\'+id).hide();
$(\'#bookconfirmid_\'+id).show();
$(\'#hid_\'+id).show();
$(\'#hidden_\'+id).show();
$(\'#sid_\'+id).hide();
$(\'#quantity_\'+id).hide();
}
</script>
<script type="text/javascript">
function bookconfirm(id)
{
if($(\'#barcode_num_\'+id).val()==\'\')
alert("Please Enter Quantity");
else if($(\'#quantity_edit\'+id).val()==\'\')
alert("Please Enter Quantity");

else
{
$.ajax({
		type: "POST",
		url: "stock_location_update.php",
		data: {loc:$(\'#barcode_num_\'+id).val(),qty:$(\'#quantity_edit\'+id).val(),mcode:$(\'#mcode_\'+id).val()},
		success: function(data){
					alert("Updated Successfully");
                	}
});
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
<!-- SEARCH FORM START -->
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
                        <h5  style="padding-left:40%;">List of Stock</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                          
                        </div>
                    </div>
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example">
					<form name="StockMgmt" method="post" id="StockMgmt" >
                    <thead>
                    <tr>
						<th>Sl No.</th>
<!--                        <th>Item Category Code</th>
                        <th>Material Category</th>
-->                        <th>Mateial Name</th>
<!--						<th>Mateial Code</th>
-->						<th>Location</th>
						<th>Quantity</th>	
<!--						<th>Unit Price</th>	
						<th>Total Price</th>	
-->						<th>Status</th>
						<th>Action</th>
						
                    </tr>
                    </thead>
                    <tbody>
					<?php $_from = $this->_tpl_vars['StockList12']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Liststock']):
?>
	<tr id="<?php echo $this->_tpl_vars['j']++; ?>
"  class="gradeX" >
	<input type="hidden" id="mcode_<?php echo $this->_tpl_vars['j']; ?>
" name="mcode_<?php echo $this->_tpl_vars['j']; ?>
" value="<?php echo $this->_tpl_vars['Liststock']['item_category_code']; ?>
"> 
			<td align="left"><a href="./stockDetails.php?inward_entry_id=<?php echo $this->_tpl_vars['Liststock']['inward_entry_id']; ?>
"><?php echo $this->_tpl_vars['j']; ?>
</a></td>   
		    <td align="left"><a href="./stockDetails.php?inward_entry_id=<?php echo $this->_tpl_vars['Liststock']['inward_entry_id']; ?>
"><?php echo $this->_tpl_vars['Liststock']['material_name']; ?>
</a></td>
            <td align="left"><span id="sid_<?php echo $this->_tpl_vars['j']; ?>
"><a href="./stockDetails.php?inward_entry_id=<?php echo $this->_tpl_vars['Liststock']['inward_entry_id']; ?>
"><?php echo $this->_tpl_vars['Liststock']['location']; ?>
</a></span>
			<span id="hid_<?php echo $this->_tpl_vars['j']; ?>
" style="display:none;">
								<select class="form-control" id="barcode_num_<?php echo $this->_tpl_vars['j']; ?>
" name="barcode_num_<?php echo $this->_tpl_vars['j']; ?>
" value="<?php echo $this->_tpl_vars['Liststock']['location']; ?>
">
							   	<?php if ($this->_tpl_vars['Liststock']['location'] == 'PAT'): ?>
								   <option value="<?php echo $this->_tpl_vars['Liststock']['location']; ?>
" selected="selected"><?php echo $this->_tpl_vars['Liststock']['location']; ?>
</option>
								   <option value="WAV">WAV</option>
								    <option value="TAD" >TAD</option>
								<?php elseif ($this->_tpl_vars['Liststock']['location'] == 'WAV'): ?>
								  <option value="<?php echo $this->_tpl_vars['Liststock']['location']; ?>
" selected="selected"><?php echo $this->_tpl_vars['Liststock']['location']; ?>
</option>
								  <option value="PAT" >PAT</option>  
							      <option value="TAD" >TAD</option>  
							   <?php elseif ($this->_tpl_vars['Liststock']['location'] == 'TAD'): ?>
								  <option value="<?php echo $this->_tpl_vars['Liststock']['location']; ?>
" selected="selected"><?php echo $this->_tpl_vars['Liststock']['location']; ?>
</option>
							      <option value="PAT" >PAT</option>
								   <option value="WAV">WAV</option>  
								<?php endif; ?>
								</span>
		    </td>
			
		<td align="left"><span id="quantity_<?php echo $this->_tpl_vars['j']; ?>
"><a href="./stockDetails.php?inward_entry_id=<?php echo $this->_tpl_vars['Liststock']['inward_entry_id']; ?>
"><?php echo $this->_tpl_vars['Liststock']['quantity']; ?>
</a></span>
		<span id="hidden_<?php echo $this->_tpl_vars['j']; ?>
" style="display:none;">
		<input type="text" id="quantity_edit<?php echo $this->_tpl_vars['j']; ?>
" name="quantity_edit<?php echo $this->_tpl_vars['j']; ?>
"  value="<?php echo $this->_tpl_vars['Liststock']['quantity']; ?>
" class="form-control">
		</span> </td>
		
		<td align="left"><a href="./stockDetails.php?inward_entry_id=<?php echo $this->_tpl_vars['Liststock']['inward_entry_id']; ?>
"><?php if ($this->_tpl_vars['Liststock']['quantity'] > '0'): ?><span style="color:#00CC33">Available</span><?php else: ?> <span style=" color:#FF0000">Not Available</span><?php endif; ?></a></td>
	    <td><span id="bookcopyid_<?php echo $this->_tpl_vars['j']; ?>
"><input type="button" name="add_copy" value="Edit" onClick="bookcopy(<?php echo $this->_tpl_vars['j']; ?>
);" class="btn btn-success"></span>
		<span id="bookconfirmid_<?php echo $this->_tpl_vars['j']; ?>
" style="display:none"><input type="button" name="add_confirm" value="Confirm" onClick="bookconfirm(<?php echo $this->_tpl_vars['j']; ?>
);" class="btn btn-success"></span></td>

			</tr>
					<?php endforeach; endif; unset($_from); ?>	
                    </tbody>
                   </form>
                    </table>

    
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
		</body>
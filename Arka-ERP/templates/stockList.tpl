<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ARKA|| Stock List</title>



    <!-- Data Tables -->

{literal}
<script>
       $(document).ready(function() {
            $('.dataTables-example').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "assets/js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
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
				
					$('#modal-form3').modal('show')
													
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
$('#bookcopyid_'+id).hide();
$('#bookconfirmid_'+id).show();
$('#hid_'+id).show();
$('#hidden_'+id).show();
$('#sid_'+id).hide();
$('#quantity'+id).hide();
}
</script>
<script type="text/javascript">
function bookconfirm(id)
{
if($('#barcode_num_'+id).val()=='')
alert("Please Enter Quantity");
else if($('#quantity_edit'+id).val()=='')
alert("Please Enter Quantity");

else
{
$.ajax({
		type: "POST",
		url: "stock_location_update.php",
		data: {loc:$('#barcode_num_'+id).val(),qty:$('#quantity_edit'+id).val(),mcode:$('#mcode_'+id).val()},
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
{/literal}

</head>
<body>
<!-- SEARCH FORM START -->
<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
			{if $SuccessMessage1 neq ""}
			<div class="isa_success">
			<i class="fa fa-check"></i>
			{$SuccessMessage1}		 
			</div>
		 {/if}
		  {if $ErrorMessage neq ""}
			<div class="isa_error">
			<i class="fa fa-check"></i>
			{$ErrorMessage}		 
			</div>
		 {/if}
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
					{foreach from=$StockList12 item=Liststock}
	<tr id="{$j++}"  class="gradeX" >
	<input type="hidden" id="mcode_{$j}" name="mcode_{$j}" value="{$Liststock.item_category_code}"> 
			<td align="left"><a href="./stockDetails.php?inward_entry_id={$Liststock.inward_entry_id}">{$j}</a></td>   
		    <td align="left"><a href="./stockDetails.php?inward_entry_id={$Liststock.inward_entry_id}">{$Liststock.material_name}</a></td>
            <td align="left" id="sid_{$j}"><a href="./stockDetails.php?inward_entry_id={$Liststock.inward_entry_id}">{$Liststock.location}</a></td>
			<td id="hid_{$j}" style="display:none;">
								<select class="form-control" id="barcode_num_{$j}" name="barcode_num_{$j}" value="{$Liststock.location}">
							   	{if $Liststock.location eq 'AmbatturPattaravakkam'}
								   <option value="{$Liststock.location}" selected="selected">{$Liststock.location}</option>
								   <option value="AmbatturIE">AmbatturIE</option>
								    <option value="Tada" >Tada</option>
								{elseif $Liststock.location eq 'AmbatturIE'}
								  <option value="{$Liststock.location}" selected="selected">{$Liststock.location}</option>
								  <option value="AmbatturPattaravakkam" >AmbatturPattaravakkam</option>  
							      <option value="Tada" >Tada</option>  
							   {elseif $Liststock.location eq 'Tada'}
								  <option value="{$Liststock.location}" selected="selected">{$Liststock.location}</option>
							      <option value="AmbatturPattaravakkam" >AmbatturPattaravakkam</option>
								   <option value="AmbatturIE">AmbatturIE</option>  
								{/if}
								</select>
		    </td>
			
		<td align="left" id="quantity{$j}"><a href="./stockDetails.php?inward_entry_id={$Liststock.inward_entry_id}">{$Liststock.quantity}</a></td>
		<td id="hidden_{$j}" style="display:none;">
		<input type="text" id="quantity_edit{$j}" name="quantity_edit{$j}"  value="{$Liststock.quantity}" class="form-control">
		</td>
		
		<td align="left"><a href="./stockDetails.php?inward_entry_id={$Liststock.inward_entry_id}">{if $Liststock.quantity gt '0'}<span style="color:#00CC33">Available</span>{else} <span style=" color:#FF0000">Not Available</span>{/if}</a></td>
	    <td id="bookcopyid_{$j}"><input type="button" name="add_copy" value="Edit" onClick="bookcopy({$j});" class="btn btn-success"></td>
		<td id="bookconfirmid_{$j}" style="display:none"><input type="button" name="add_confirm" value="Confirm" onClick="bookconfirm({$j});" class="btn btn-success"></td>

			</tr>
					{/foreach}	
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
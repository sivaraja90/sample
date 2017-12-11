<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ARKA|| Scada List</title>



    <!-- Data Tables -->
  {literal}
	
		<script>
        
		
		 $(document).ready(function() {
            $('.dataTables-example').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
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

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
		
		
function deleteScada(delData)
{
	if(confirm("Are you sure to Delete?"))
	{
					$('#modal-form3').modal('show')
													
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
$(document).on("click", ".fa-trash", function () {
     var product_id = $(this).data('id');
     $(".modal-body #hdnDelproduct_id").val(product_id);
});

		
		function deleteCats(CatIdent){
 if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.ProductMgmt;
   //var gate = document.getElementById('gate_entry_id').value;
  FormName.action= "./productList.php?product_id="+CatIdent;
  
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

{/literal}


</head>
<body>
   </div>
           
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
                        <h5  style="padding-left:40%;">List of Product</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                          
                        </div>
                    </div>
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
					<form name="ProductMgmt" method="post">
                    <thead>
                    <tr>
						<th>Sl No</th>	
                        <th>scada_id</th>
						<th>product_id</th>
                        <th>Production_batch</th>
                        <th>production_date</th>
						<th>Tested_date</th>
						<th>Modify_date</th>
						<th>Modify_by</th>
						{foreach from=$RList item=roles}
						   {if $roles.role_name eq 'Edit Product' || $roles.role_name eq 'Delete Product'}	
						      <th>Action</th>
						   {/if}
				        {/foreach}
						
                    </tr>
                    </thead>
                    <tbody>  
					{foreach from=$PageList item=ListDet}
          <tr class="gradeX" id="{$i++}">
		  <td><a href="./productDetails.php?product_id={$ListDet.product_id}">{$i}</a></td>
			<td><a href="./productDetails.php?product_id={$ListDet.product_id}">{$ListDet.scada_id}</a></td>
			<td><a href="./productDetails.php?product_id={$ListDet.product_id}">{$ListDet.product_id}</a></td>
			<td><a href="./productDetails.php?product_id={$ListDet.product_id}">{$ListDet.Production_batch}</a></td>
            <td ><a href="./productDetails.php?product_id={$ListDet.product_id}">{$ListDet.Production_date}</a></td>
			<td ><a href="./productDetails.php?product_id={$ListDet.product_id}">{$ListDet.Tested_date}</a></td>
	        <td ><a href="./productDetails.php?product_id={$ListDet.product_id}">{$ListDet.Modify_date}</a></td>
	        <td ><a href="./productDetails.php?product_id={$ListDet.product_id}">{$ListDet.Modify_by}</a></td>
                   {foreach from=$RList item=roles}
					  {if $roles.role_name eq 'Edit Product'}	
						   <td class="center"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./productEdit.php?product_id={$ListDet.product_id}"><i class="fa fa-edit"></i></a></td>
					  {/if}
				   {/foreach}
                   {foreach from=$RList item=roles}
				      {if $roles.role_name eq 'Delete Product'}	
					     <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a href="#"><i class="fa fa-trash" onClick="deleteCats('{$ListDet.product_id}');"></a></td>
					  {/if}
				   {/foreach}

               
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


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Data Tables</title>



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
		$(document).on("click", ".fa-trash", function () {
     var site_id = $(this).data('id');
     $(".modal-body #hdnDelsite_id").val(site_id);
});
			
		function deleteCats(CatIdent){
 if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.SiteMgmt;
   //var gate = document.getElementById('gate_entry_id').value;
  FormName.action= "./siteList.php?site_id="+CatIdent;
  
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
                        <h5  style="padding-left:40%;">List of Site</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                          
                        </div>
                    </div>
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
					<form name="SiteMgmt" method="post" >
                    <thead>
                    <tr>
					    <th>Sl.No</th>
                        <th>Site ID</th>
					   	<th>Site Name</th>
						{if $smarty.session.CustomerId eq 'CUS1001'}
						<th>Customer ID</th>
						<th>Customer Name</th>
						{/if}
                        <th>Contact Person</th>
                        <th>Mobile</th>
						<th>No. Of Turbines</th>
						{foreach from=$RList item=roles}
						   {if $roles.role_name eq 'Edit Site' || $roles.role_name eq 'Delete Site'}				
						      <th>Action</th>
						   {/if}
				        {/foreach}	
						
                    </tr>
                    </thead>
                    <tbody>
			{foreach from=$PageList item=ListDet}			
            <tr class="gradeX" id="{$i++}">
			<td><a href="./siteDetails.php?site_id={$ListDet.site_id}">{$i}</a></td>
			<td><a href="./siteDetails.php?site_id={$ListDet.site_id}">{$ListDet.site_id}</a></td>
			<td><a href="./siteDetails.php?site_id={$ListDet.site_id}">{$ListDet.site_name}</a></td>
			{if $smarty.session.CustomerId eq 'CUS1001'}
			<td> <a href="./siteDetails.php?site_id={$ListDet.site_id}">{$ListDet.customer_id} </a></td>
			<td> <a href="./siteDetails.php?site_id={$ListDet.site_id}">{$ListDet.customer_name} </a></td>
			{/if}
			<td><a href="./siteDetails.php?site_id={$ListDet.site_id}">{$ListDet.contact_person}</a></td>
            <td ><a href="./siteDetails.php?site_id={$ListDet.site_id}">{$ListDet.mobile}</a></td>
	        <td ><a href="./siteDetails.php?site_id={$ListDet.site_id}">{$ListDet.no_of_turbines}</a></td>
			
    {foreach from=$RList item=roles}
	   {if $roles.role_name eq 'Edit Site'}
						   <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./siteEdit.php?site_id={$ListDet.site_id}"><i class="fa fa-edit"></i></a></td>      
       {/if}
	{/foreach}						
	{foreach from=$RList item=roles}
	   {if $roles.role_name eq 'Delete Site'}
	      <td class="center">&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick="deleteCats('{$ListDet.site_id}');"></a></td>
	   {/if}
    {/foreach}	
						  
                  </tr>
					{/foreach}
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
										
<div id="siteDeleteLoader" style="display:none;" align="center"><img src="assets/images/icons/loading.gif"  alt="Delete is in Process..."/></div>	
																		
						
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
		{literal}
<script>
$(document).on("click", ".fa-trash", function () {
     var siteId = $(this).data('id');
     $(".modal-body #hdnDelSiteId").val(siteId);
});

function deleteSite(deldata)
{
	if(confirm("Are you sure to Delete?"))
	{
					$('#modal-form3').modal('show')
													
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
{/literal}
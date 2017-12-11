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
     var outward_entry_no = $(this).data('id');
     $(".modal-body #hdnDeloutward_entry_no").val(outward_entry_no);
});
			
		function deleteCats(CatIdent){
 if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.SiteMgmt;
   //var gate = document.getElementById('gate_entry_id').value;
  FormName.action= "./outwardList.php?outward_entry_no="+CatIdent;
  
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
                        <h5  style="padding-left:40%;">LIST OF OUTWARDS</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                          
                        </div>
                    </div>
					
					<!--<table width="100%" border="0" cellspacing=1 cellpadding=2 >
 <tr><body onLoad="doOnLoad();">
				<td>From Date</td>
                <td ><input type="text" id="fromDate" name="fromDate" value="" placeholder="From Date" size="25" readonly="true" autocomplete="Off"></td>
				<td>To Date</td>
                <td ><input type="text" id="toDate" name="toDate" value="" placeholder="To Date" size="25" readonly="true" autocomplete="Off"></td>				 	
	            <td  align="right"> </td>
		</body>		
</tr>
</table>-->
					
					
					
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
					<form name="SiteMgmt" method="post" >
                    <thead>
                    <tr>
					    <th>Sl.No</th>
                        <th>Outward Entry No</th>
						<th>Material Name</th>
						<th>Date Of Entry</th>
						<th>To Name</th>
						<th>Purpose</th>
						<th>Action</th>
						</tr>
						</thead>
						<tbody>
						{foreach from=$PageList item=ListOutward}
						<tr class="gradeX" id="{$i++}">
						<td><a href="./outwardDetails.php?outward_entry_no={$ListOutward.outward_entry_no}">{$i}</a></td>	
						<td><a href="./outwardDetails.php?outward_entry_no={$ListOutward.outward_entry_no}">{$ListOutward.outward_entry_no}</a></td>	
						<td><a href="./outwardDetails.php?outward_entry_no={$ListOutward.outward_entry_no}">{$ListOutward.material_name}</a></td>			        
						<td><a href="./outwardDetails.php?outward_entry_no={$ListOutward.outward_entry_no}">{$ListOutward.date_of_entry}</a></td>	
						<td><a href="./outwardDetails.php?outward_entry_no={$ListOutward.outward_entry_no}">{$ListOutward.to_name}</a></td>			        
						<td><a href="./outwardDetails.php?outward_entry_no={$ListOutward.outward_entry_no}">{$ListOutward.purpose}</a></td>	
						
			   <td class="center"><a href="./outwardEdit.php?outward_entry_no={$ListOutward.outward_entry_no}" class="fa fa-edit"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" class="fa fa-trash" onClick="deleteCats('{$ListOutward.outward_entry_no}');"></a></td> 
						
			
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
											  <h3 class="m-t-none m-b text-center">Deleting Outwards</h3>
											  <div class="hr-line-dashed"></div>
									    </div>	
										
<div id="siteDeleteLoader" style="display:none;" align="center"><img src="assets/images/icons/loading.gif"  alt="Delete is in Process..."/></div>	
																		
						
                                    <div class="row">
										<div class="col-lg-12" id="succsMsgOutwardDelete"></div>
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
		{literal}<link rel="stylesheet" type="text/css" href="css/datepickier_main.css">
	 	    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	  		<link rel="stylesheet" href="./codebase/dhtmlxcalendar.css" type="text/css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css"> 
			<link rel="stylesheet" href="./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
			<link rel="stylesheet" type="text/css" href="css/datepicker.css">
			<script type="text/javascript" src="dhtmlxMessage/codebase/dhtmlxcalendar.js" ></script>
<script type="text/javascript" src="./codebase/dhtmlxcalendar.js"></script>
<script type="text/javascript" src="./codebase/dhtmlxcommon.js"></script>
		<script src="jquery/jquery.ui.datepicker.js"></script>
<script>
 function getval()
        {
		var fromDate,toDate;
		fromDate=document.getElementById("fromDate").value;
		toDate=document.getElementById("toDate").value;
		if(fromDate=="" || toDate=="")
		{
			alert("Please Specify Date");
			return false;
		}
		
        }	
	var myCalendar;
function doOnLoad() {
    
    var fromDate;
	fromDate=new Date();
    myCalendar = new dhtmlXCalendarObject(["fromDate"]);
	myCalendar = new dhtmlXCalendarObject(["toDate"]);
   
}	
 // calendar in datepicker
			/*$(function(fromDate) {
				//alert("test");
				$( "#fromDate" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});
			$(function(toDate) {
				//alert("test");
				$( "#toDate" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});*/
			
// picker closed

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

<?php /* Smarty version 2.6.25, created on 2015-11-05 13:04:15
         compiled from powergenlist.tpl */ ?>
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
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Panel Generation</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="./siteList.php">Generation Management</a>
                        </li>
                        <li>
                            <a href="#">List Panel Generation</a>
                        </li>

                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5  style="padding-left:40%;">Panel Generation List </h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                          
                        </div>
                    </div>
                    <div class="ibox-content">
                    <table width="100%" cellpadding="2" cellspacing="0" border="0">	
                  <tr>
                  <td>
                      <h3><?php if ($this->_supers['post']['region'] != ""): ?>Region:&nbsp;&nbsp; <?php echo $this->_supers['post']['region']; ?>
<?php endif; ?></h3>
                  </td>
                  <td>
                      <h3><?php if ($this->_supers['post']['site_name'] != ""): ?>Site Name:&nbsp;&nbsp;<?php echo $this->_supers['post']['site_name']; ?>
<?php endif; ?></h3>
                  </td>
				  <td>
                      <h3><?php if ($this->_supers['post']['site_name'] != ""): ?>Date From:&nbsp;&nbsp;<?php echo $this->_supers['post']['from_date']; ?>
<?php endif; ?></h3>
                  </td>
				  <td>
                      <h3><?php if ($this->_supers['post']['site_name'] != ""): ?>Date To:&nbsp;&nbsp;<?php echo $this->_supers['post']['to_date']; ?>
<?php endif; ?></h3>
                  </td>
				  </tr>
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
					    <th width="70" align="center">Location</th>
	        <th width="60" align="center">G1 KWh</th>
             <th width="60" align="center">G2 KWh</th>
			<th width="75" align="center">Total KWh</th>
			<th width="50" align="center">G1 Hrs</th>
			<th width="50" align="center">G2 Hrs</th>
			<th width="60" align="center">Gen Hrs</th>
			<th width="60" align="center">Idle Hrs</th>
			<th width="50" align="center">FW Hrs</th>
			<th width="50" align="center">GD Hrs</th>
			<th width="50" align="center">MT Hrs</th>
			<th width="50" align="center">BD Hrs</th>
			<th width="60" align="center">Action</th>
						

						
                    </tr>
                    </thead>
                    <tbody>
			<?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>			
            <tr class="gradeX" id="<?php echo $this->_tpl_vars['i']++; ?>
">
			<td><a href="./powergenerationDetails.php?site_id=<?php echo $this->_tpl_vars['ListDet']['site_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['Location']; ?>
</a></td>
			<td><a href="./powergenerationDetails.php?site_id=<?php echo $this->_tpl_vars['ListDet']['site_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['G1']; ?>
</a></td>
			<td><a href="./powergenerationDetails.php?site_id=<?php echo $this->_tpl_vars['ListDet']['site_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['G2']; ?>
</a></td>
			<td> <a href="./powergenerationDetails.php?site_id=<?php echo $this->_tpl_vars['ListDet']['site_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['Total']; ?>
 </a></td>
			<td> <a href="./powergenerationDetails.php?site_id=<?php echo $this->_tpl_vars['ListDet']['site_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['G1']; ?>
 </a></td>
			<td><a href="./powergenerationDetails.php?site_id=<?php echo $this->_tpl_vars['ListDet']['site_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['G2']; ?>
</a></td>
            <td ><a href="./powergenerationDetails.php?site_id=<?php echo $this->_tpl_vars['ListDet']['site_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['Gen']; ?>
</a></td>
	        <td ><a href="./powergenerationDetails.php?site_id=<?php echo $this->_tpl_vars['ListDet']['site_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['Idle']; ?>
</a></td>
			<td ><a href="./powergenerationDetails.php?site_id=<?php echo $this->_tpl_vars['ListDet']['site_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['FW']; ?>
</a></td>
			<td ><a href="./powergenerationDetails.php?site_id=<?php echo $this->_tpl_vars['ListDet']['site_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['GD']; ?>
</a></td>
			<td ><a href="./powergenerationDetails.php?site_id=<?php echo $this->_tpl_vars['ListDet']['site_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['MT']; ?>
</a></td>
			<td ><a href="./powergenerationDetails.php?site_id=<?php echo $this->_tpl_vars['ListDet']['site_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['BD']; ?>
</a></td>
   </tr>
   
			<tr>
			<td height="20" colspan="13" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
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
                    </table>
					</div>

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

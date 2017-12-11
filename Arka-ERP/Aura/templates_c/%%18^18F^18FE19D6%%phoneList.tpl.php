<?php /* Smarty version 2.6.25, created on 2017-02-20 19:14:05
         compiled from phoneList.tpl */ ?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARKA|| Phone List</title>
    <!-- Data Tables -->
	<?php echo '
		<script>
                $(document).ready(function() {
/*            $(\'.dataTables-example1\').dataTable();*/
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
     var sim_id = $(this).data(\'id\');
     $(".modal-body #hdnDelsim_id").val(sim_id);
});

		
		function deleteCats(CatIdent){ alert("hiiiiii");
 if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.prepaid;
   //var gate = document.getElementById(\'gate_entry_id\').value;
  FormName.action= "./phoneList.php?sim_id="+CatIdent;
  
  FormName.submit();
 }
 }
 
 function deleteCats1(CatIdent){ alert("jiiiiii");
 if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.postpaid;
   //var gate = document.getElementById(\'gate_entry_id\').value;
  FormName.action= "./phoneList.php?sim_id="+CatIdent;
  
  FormName.submit();
 }
 }
 /*$(function () {
        $("#example1").DataTable();
        $(\'#example2\').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });*/
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

    }<style>
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
                <div class="panel blank-panel">
                    <div class="panel-heading">
                        <!--<h5  style="padding-left:40%;">List of Phone</h5>-->
                        <div class="panel-options">
						<ul class="nav nav-tabs">
								    <li class="active"><a data-toggle="tab" href="#tab-1">PREPAID</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-2">POST PAID</a></li>
                                    
                                </ul>
                           <!-- <a class="nav nav-tabs">
                                <i class="fa fa-chevron-up"></i>
                            </a>-->
                          
                        </div>
                    </div>
                    <div class="panel-body">
					<div class="tab-content">
					<!-- prepaid table start -->
                                <div id="tab-1" class="tab-pane active">
                                    
								<div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5  style="padding-left:40%;">List of Prepaid</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                          
                        </div>
                    </div>
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example" id="example1" >
					<form name="prepaid" method="post" id="prepaid">
                    <thead>
                    <tr>
				        <th>Sl.No</th>
                        <th>sim ID</th>
						<!--<?php if ($this->_supers['session']['CustomerId'] == 'CUS1001'): ?>
							<th>Customer Id</th>
						<?php endif; ?>-->
                        <th>simType</th>
                        <th>mobileNo</th>
                        <th>serviceNo</th>
						<th>Network</th>
						<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						   <?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Phone'): ?>		
						      <th>Action</th>
						   <?php endif; ?>
				        <?php endforeach; endif; unset($_from); ?>	
						
						
                    </tr>
                    </thead>
                    <tbody id="<?php $this->assign('i', '0'); ?>">
					
							
					<?php $_from = $this->_tpl_vars['PrepaidList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
						<?php if ($this->_tpl_vars['ListDet']['sim_type'] == 'Prepaid'): ?> 
							<tr class="gradeX" id="<?php echo $this->_tpl_vars['i']++; ?>
">
							<td><a href="./phone_prepaidDetails.php?simId=<?php echo $this->_tpl_vars['ListDet']['sim_id']; ?>
"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
							<td><a href="./phone_prepaidDetails.php?simId=<?php echo $this->_tpl_vars['ListDet']['sim_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['sim_id']; ?>
</a></td>
							<td><a href="./phone_prepaidDetails.php?simId=<?php echo $this->_tpl_vars['ListDet']['sim_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['sim_type']; ?>
 </a></td>
							<td><a href="./phone_prepaidDetails.php?simId=<?php echo $this->_tpl_vars['ListDet']['sim_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['mobile_no']; ?>
</a></td>
							<td><a href="./phone_prepaidDetails.php?simId=<?php echo $this->_tpl_vars['ListDet']['sim_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['service_no']; ?>
</a></td>
							<td><a href="./phone_prepaidDetails.php?simId=<?php echo $this->_tpl_vars['ListDet']['sim_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['network']; ?>
</a></td>
					<?php endif; ?>
	<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
	   <?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Phone'): ?>
	        <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./phoneEdit.php?simId=<?php echo $this->_tpl_vars['ListDet']['sim_id']; ?>
"><i class="fa fa-edit"></i></a> 
			  
	   <?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>	

	<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
       <?php if ($this->_tpl_vars['roles']['role_name'] == 'Delete Phone'): ?>		
	      &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick=" deleteCats('<?php echo $this->_tpl_vars['ListDet']['sim_id']; ?>
');"></a></td>
       <?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
          </tr>
		  <?php endforeach; endif; unset($_from); ?>
              </tbody>
			  </form>
                    </table>
					</div>
                </div>
              </div>
								<!-- prepaid table end -->
								
								<!-- postpaid table start -->
					<div id="tab-2" class="tab-pane">
								<div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5  style="padding-left:40%;">List of Postpaid</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                          
                        </div>
                    </div>
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example" id="example2">
					<form name="postpaid" method="post" id="postpaid">
                    <thead>
                    <tr>
				        <th>Sl.No</th>
                        <th>sim ID</th>
						<!--<?php if ($this->_supers['session']['CustomerId'] == 'CUS1001'): ?>
							<th>Customer Id</th>
						<?php endif; ?>-->
                        <th>simType</th>
                        <th>mobileNo</th>
                        <th>serviceNo</th>
						<th>Network</th>
						<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
						   <?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Phone'): ?>		
						      <th>Action</th>
						   <?php endif; ?>
				        <?php endforeach; endif; unset($_from); ?>	
						
						
                    </tr>
                    </thead>
                    <tbody id="<?php $this->assign('i', '0'); ?>">
					
							
					<?php $_from = $this->_tpl_vars['PostpaidList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListpostpaidDet']):
?>
						
							<tr class="gradeX" id="<?php echo $this->_tpl_vars['i']++; ?>
">
							<td ><a href="./phone_postpaidDetails.php?simId=<?php echo $this->_tpl_vars['ListpostpaidDet']['sim_id']; ?>
"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
							<td><a href="./phone_postpaidDetails.php?simId=<?php echo $this->_tpl_vars['ListpostpaidDet']['sim_id']; ?>
"><?php echo $this->_tpl_vars['ListpostpaidDet']['sim_id']; ?>
</a></td>
							<td><a href="./phone_postpaidDetails.php?simId=<?php echo $this->_tpl_vars['ListpostpaidDet']['sim_id']; ?>
"><?php echo $this->_tpl_vars['ListpostpaidDet']['sim_type']; ?>
 </a></td>
							<td><a href="./phone_postpaidDetails.php?simId=<?php echo $this->_tpl_vars['ListpostpaidDet']['sim_id']; ?>
"><?php echo $this->_tpl_vars['ListpostpaidDet']['mobile_no']; ?>
</a></td>
							<td><a href="./phone_postpaidDetails.php?simId=<?php echo $this->_tpl_vars['ListpostpaidDet']['sim_id']; ?>
"><?php echo $this->_tpl_vars['ListpostpaidDet']['service_no']; ?>
</a></td>
							<td ><a href="./phone_postpaidDetails.php?simId=<?php echo $this->_tpl_vars['ListpostpaidDet']['sim_id']; ?>
"><?php echo $this->_tpl_vars['ListpostpaidDet']['network']; ?>
</a></td>
					
	<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
	   <?php if ($this->_tpl_vars['roles']['role_name'] == 'Edit Phone'): ?>
	        <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./phoneEdit.php?simId=<?php echo $this->_tpl_vars['ListpostpaidDet']['sim_id']; ?>
"><i class="fa fa-edit"></i></a> 
			  
	   <?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>	

	<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
       <?php if ($this->_tpl_vars['roles']['role_name'] == 'Delete Phone'): ?>		
	      &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick=" deleteCats1('<?php echo $this->_tpl_vars['ListpostpaidDet']['sim_id']; ?>
');"></a></td>
       <?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
          </tr>
		  <?php endforeach; endif; unset($_from); ?>
              </tbody>
			  </form>
                    </table>
					</div>
                </div>
              </div>						
								
					<!-- postpaid table end -->			
								

<!-----------------------------------------  Start of Delete Role ------------------------->						
<!--<div id="modal-form3" class="modal fade" aria-hidden="true" data-backdrop="static">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
										
										<div class="row">
											  <h3 class="m-t-none m-b text-center">Deleting phone</h3>
											  <div class="hr-line-dashed"></div>
									    </div>	
										
<div id="phoneDeleteLoader" style="display:none;" align="center"><img src="assets/images/icons/loading.gif"  alt="Delete is in Process..."/></div>	
																		
						
                                    <div class="row">
										<div class="col-lg-12" id="succsMsgPhoneDelete"></div>
									</div>

                                    </div>
                                    </div>
                                </div>
                        </div>	-->					
<!-----------------------------------------  End of Delete Role ------------------------->	



                    </div>
                </div>
            </div>
            </div>
			</div>
           
        </div>
		<?php echo '
<script>

$(document).on("click", ".fa-trash", function () {
     var simId = $(this).data(\'id\');
     $(".modal-body #hdnDelSimId").val(simId);
});
function deleteScada(delData)
{
	if(confirm("Are you sure to Delete?"))
	{
					$(\'#modal-form3\').modal(\'show\')
													
					$("#phoneDeleteLoader").css("display","block");
					$.ajax({
					url: "./phoneList.php",
					type:"POST",
					beforeSend:function()
					{
					
					},
					data:{simId:delData},
					success: function(result)
					{
					$("#phoneDeleteLoader").css("display","none");
					$("#succsMsgPhoneDelete").html(result);
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
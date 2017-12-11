<?php /* Smarty version 2.6.25, created on 2016-02-04 13:38:02
         compiled from modelList.tpl */ ?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ARKA|| SCADA</title>



    <!-- Data Tables -->
  
	<?php echo '
		<script>
        $(document).ready(function() {
            $(\'.dataTables-example\').dataTable({
                responsive: true,
                "dom": \'T<"clear">lfrtip\',
                "tableTools": {
                    "sSwfPath": "./js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
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
     var group_id = $(this).data(\'id\');
     $(".modal-body #hdnDelGroupId").val(group_id);
});

		
	function deleteCats(CatIdent){
 if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.ModelMgmt;
   //var gate = document.getElementById(\'gate_entry_id\').value;
  FormName.action= "./modelList.php?model_id="+CatIdent;
  
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



'; ?>


</head>
<body>
   </div>
            
<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
			<?php if ($this->_tpl_vars['SuccessMessage'] != ""): ?>
			<div class="isa_success">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['SuccessMessage']; ?>
		 
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
                        <h5  style="padding-left:40%;">List of User Group</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                          
                        </div>
                    </div>
                     <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
					<form name="ModelMgmt" method="post" >
                    <thead>
                    <tr>
					    <th>Sl.No</th>
                        <th>model Name</th>
						<th>Action</th>
						
                    </tr>
                    </thead>
                    <tbody>
					<?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
                    <tr class="gradeX" id="<?php echo $this->_tpl_vars['i']++; ?>
">
			<td><a href="./modelDetails.php?model_id=<?php echo $this->_tpl_vars['ListDet']['model_id']; ?>
"><?php echo $this->_tpl_vars['i']; ?>
</a></td>
			<td><a href="./modelDetails.php?model_id=<?php echo $this->_tpl_vars['ListDet']['model_id']; ?>
"><?php echo $this->_tpl_vars['ListDet']['model_name']; ?>
</a></td>
			<td class="center"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./modelEdit.php?model_id=<?php echo $this->_tpl_vars['ListDet']['model_id']; ?>
"><i class="fa fa-edit"></i></a> &nbsp;&nbsp; &nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick="deleteCats('<?php echo $this->_tpl_vars['ListDet']['model_id']; ?>
');"></a></td>

                  

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
											  <h3 class="m-t-none m-b text-center">Deleting User Group</h3>
											  <div class="hr-line-dashed"></div>
									    </div>	
										
<div id="groupDeleteLoader" style="display:none;" align="center"><img src="assets/images/icons/loading.gif"  alt="Delete is in Process..."/></div>	
																		
						
                                    <div class="row">
										<div class="col-lg-12" id="succsMsgGroupDelete"></div>
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

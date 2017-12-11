<?php /* Smarty version 2.6.25, created on 2017-06-22 11:58:00
         compiled from powergenerationList.tpl */ ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ARKA|| Panel List</title>



    <!-- Data Tables -->
<!--<?php if ($this->_tpl_vars['accordion'] == '0'): ?>

	<input type="hidden" id="hdn_accordion" value="0">

<?php endif; ?>
<?php if ($this->_tpl_vars['accordion'] == '1'): ?>

	<input type="hidden" id="hdn_accordion" value="1">
             
<?php endif; ?>-->
<?php echo '

<script>
      $(function() {
    $( "#accordion" ).accordion(); 
  
var accd_val= document.getElementById("hdn_accordion").value;  
if(accd_val==1)
{
$( "#accordion" ).accordion("option", "active",1);
}
else
{
$( "#accordion" ).accordion("option", "active",0);   
}
  
});    
    
  </script>
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
			
$("#addPanel").click(function(){
			var fields=["g1_kwh","g2_kwh","total_kwh","g1_hrs","g2_hrs","fw_duration","gd_duration","mt_duration","bd_duration"];
				for(i=0;i<fields.length;i++)
				{
				
				current_iteration = document.getElementById(fields[i]).value;
				
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{			
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";									
									return false;
						}	

				}				
              FormName= document.PanelMgmt;
  			  FormName.method= "POST";
              FormName.submit(); 
			                 });

$("#back").click(function(){

window.history.back();

});

</script>
<script type="text/javascript">
function showGroup(str) 
{
    //alert(str);
if (str=="")
  {
  document.getElementById("txtHint").value="";
  return;
  }
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	var x;
	//if(xmlhttp.responseText.indexOf("|$|")!=-1)
        if(xmlhttp.responseText)
	   {
            // alert(xmlhttp.responseText);  
  
	x=xmlhttp.responseText;
	document.getElementById("htsc_no").innerHTML=x;

  //      var name_of_site_index =  document.getElementById("site_name").selectedIndex;
   //     var  name_of_site=   document.getElementById("site_name").options;
     //   showGroup(name_of_site[name_of_site_index].text);
	   }
	 else 
	   {
	   document.getElementById("htsc_no").innerHTML="<option value=\'0\'>Please select Site</option>";
        
	   }  
       
    }
  }

xmlhttp.open("GET","select_htsc_ajax.php?q="+str,true);
xmlhttp.send();


}
</script>
<script type="text/javascript">
function showMake(str)

{
    //alert(str);
if (str=="")
  {
  document.getElementById("txtHint").value="";
  return;
  }
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	var x;
	//if(xmlhttp.responseText.indexOf("|$|")!=-1)
        if(xmlhttp.responseText)
	   {
            // alert(xmlhttp.responseText);  
  
	x=xmlhttp.responseText;
	document.getElementById("make").innerHTML=x;
       //var name_of_site_index =  document.getElementById("site_name").selectedIndex;
//       var  name_of_site=   document.getElementById("site_name").options;
//        showGroup(name_of_site[name_of_site_index].text);
	   }
	 else 
	   {
	   document.getElementById("make").innerHTML="<option value=\'0\'>Please select Site</option>";

	   }  
       
    }
  }
xmlhttp.open("GET","select_make_ajax.php?q="+str,true);
xmlhttp.send();
}
</script>
<script>
 function getval()
        {
		var from_Date,to_Date;
		from_Date=document.getElementById("from_Date").value;
		to_Date=document.getElementById("to_Date").value;
		if(from_Date=="" || to_Date=="")
		{
			alert("Please Specify Date");
			return false;
		}
		
        }	
	var myCalendar;
function doOnLoad() {
   
    var from_Date;
	from_Date=new Date();
    myCalendar = new dhtmlXCalendarObject(["from_Date"]);
	myCalendar= new dhtmlXCalendarObject(["to_Date"]);
	 }
	 </script>
	 <script>
	var myCalendar;
function doOnLoad() {
    var date;date=new Date();
    myCalendar = new dhtmlXCalendarObject(["panel_date", "from_Date", "to_Date"]);
    myCalendar2 = new dhtmlXCalendarObject(["to_Date"]);
    myCalendar3 = new dhtmlXCalendarObject(["panel_date"]);
   var myEvent = myCalendar2.attachEvent("onClick", function (){
   
		if(  document.getElementById("site_name").value && document.getElementById("htsc_no").value && document.getElementById("make").value && document.getElementById("from_Date").value && document.getElementById("to_Date").value)
		{

		     document.getElementById("PanelMgmt").submit();
	   }
	   else
	   {
	   		dhtmlx.alert({
			title: "Alert !",
			type:"alert-error",
			text: "Please Select From Date!",
						});
						
			document.getElementById("to_Date").value="";			
			return false;	
		
		}   
   
           
});    
     var myEvent2 = myCalendar3.attachEvent("onClick", function ()
    {
    document.getElementById("eb_gen_list2").submit();
    });        
    
    
	<!--myCalendar.setSensitiveRange(date,null);-->
}
	<!--myCalendar.setSensitiveRange(date,null);-->

</script>
<script type="text/javascript" src="dhtmlxMessage/codebase/dhtmlxcalendar.js" ></script>
<script type="text/javascript" src="./codebase/dhtmlxcalendar.js"></script>
<script type="text/javascript" src="./codebase/dhtmlxcommon.js"></script>
<script src="jquery/jquery.ui.datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="css/datepickier_main.css">
	 	    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	  		<link rel="stylesheet" href="./codebase/dhtmlxcalendar.css" type="text/css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css"> 
			<link rel="stylesheet" href="./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
			<link rel="stylesheet" type="text/css" href="css/datepicker.css">
<script>
	/*$(function(Date1) {
				//alert("test");
				$( "#from_Date" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});
			$(function(Date2) {
				//alert("test");
				$( "#to_Date" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});*/
        function fnClickAddRow() {
            $(\'#editable\').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
		$(document).on("click", ".fa-trash", function () {
     var panel_date = $(this).data(\'id\');
     $(".modal-body #hdnDelpanel_date").val(panel_date);
});

		
		function deleteCats(CatIdent,MIdent){
 if(confirm("Are you sure to Delete this Content?")){

  FormName		= document.powGenNepc;
   //var gate = document.getElementById(\'gate_entry_id\').value;
  FormName.action= "./powergenerationList.php?panel_date="+CatIdent+"&make="+MIdent;
  FormName.submit(); 
 }
 } 
 function deleteCats1(CatIdent,MIdent){
 if(confirm("Are you sure to Delete this Content?")){
 alert(CatIdent);
  FormName		= document.powGenVestas;
   //var gate = document.getElementById(\'gate_entry_id\').value;
  FormName.action= "./powergenerationList.php?panel_date="+CatIdent+"&make="+MIdent;
  
  FormName.submit();
 }
 } /*
		function deleteCustomer(delData)
{
	if(confirm("Are you sure to Delete?"))
	{
				
					$(\'#modal-form3\').modal(\'show\')
													
					$("#PanelDeleteLoader").css("display","block");
					$.ajax({
					url: "./powergenerationList.php/deletePanel",
					type:"POST",
					beforeSend:function()
					{
					
					},
					data:{customerId:delData},
					success: function(result)
					{
					$("#PanelDeleteLoader").css("display","none");
					$("#succsMsgPanelDelete").html(result);
					setTimeout(function(){location.reload(); }, 2000);
					
					
					}
					});	
	}
	else
	{
		
	return false;
	}	*/
	function numericFilter(data) 
{
   data.value = data.value.replace(/[^.0-9]/ig,"");
}	
function textFilter(data)
{
   data.value = data.value.replace(/[^.a-z]/ig,"");
}		 
	    /*$(\'.datepicker\').datepicker({
                todayBtn: "linked",
				format:\'yyyy-mm-dd\',
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });				*/


    </script>
	
	 <script>
var myCalendar;
function doOnLoad() {
    var date;date=new Date();
    myCalendar = new dhtmlXCalendarObject(["panel_date", "from_Date", "to_Date"]);
    myCalendar2 = new dhtmlXCalendarObject(["to_Date"]);
    myCalendar3 = new dhtmlXCalendarObject(["panel_date"]);
   var myEvent = myCalendar2.attachEvent("onClick", function (){
   
		if(  document.getElementById("site_name").value && document.getElementById("htsc_no").value && document.getElementById("from_Date").value)
		{

		     document.getElementById("PanelMgmt").submit();
	   }
	   else
	   {
	   		dhtmlx.alert({
			title: "Alert !",
			type:"alert-error",
			text: "Please Select From Date!",
						});
						
			document.getElementById("to_Date").value="";			
			return false;	
		
		}   
   
           
});    
     var myEvent2 = myCalendar3.attachEvent("onClick", function ()
    {
    document.getElementById("PanelMgmt2").submit();
    });        
    
    
	<!--myCalendar.setSensitiveRange(date,null);-->
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
	 <link rel="codebase/dhtmlxcalendar.css" type="text/css">
	 <link rel="codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css">
	 <link rel="codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
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
                <div class="col-lg-12" >
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5  style="padding-left:40%;">List of Panel</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                          
                        </div>
                    </div>
                    <div class="ibox-content"><body onLoad="doOnLoad();">
		       <form name="PanelMgmt" id="PanelMgmt" method="post">
			    <input type="hidden" name="hdAction" id="hdAction">
			   <table width="100%" cellpadding="2" cellspacing="0" border="0">
                <tr><td>&nbsp;</td> </tr>
	            <tr>
                <td><label>Sites:</label></td>
			    <td><select name="site_name" id="site_name" onChange="showGroup(this.value);" style="height:20px;">  
			    <!--<td><select name="site_name" id="site_name"  style="height:20px;">-->  
				<option value=0 selected="selected">---Please Select Site---</option>
         		<?php $_from = $this->_tpl_vars['SiteList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Listsite']):
?>	
				<option value="<?php echo $this->_tpl_vars['Listsite']['site_name']; ?>
"><?php echo $this->_tpl_vars['Listsite']['site_name']; ?>
 </option>
				<?php endforeach; endif; unset($_from); ?>
			   </select>&nbsp;&nbsp;<font class="error"><b>*</b>&nbsp;</font></td>
			   <td ><label>HTSC No:&nbsp;&nbsp;</label> 
							  <select name="htsc_no" id="htsc_no" onChange="showMake(this.value);"  style="height:24px;">  
							   <option value=0 selected="selected" >--Select--</option>
							   </select>
			</td>
				<td><label>Make:&nbsp;&nbsp;</label>
				<select  name="make" id="make"  autocomplete="off" style="height:24px;">
<!--  											 <select  name="make" id="make"  autocomplete="off" style="height:24px;width:200px">
-->											  <option value="">-Select-</option></select>
</td>
                            <td><label>From Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="from_Date" name="from_Date" size="15"  readonly="true" value="" >&nbsp;&nbsp;<font class="error"   ><b>*</b>&nbsp;</font></td>
							<td><label>To Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="to_Date" name="to_Date" size="15"  readonly="true" value="" >&nbsp;&nbsp;<font class="error"   ><b>*</b>&nbsp;</font></td>
                     
              </tr>
		       
			   <input type="hidden" id="datetodate_hdn_htsc_no" value="<?php echo $_POST['htsc_no'] ?>">
                <input type="hidden" id="datetodate_hdn_site_name" value="<?php echo $_POST['site_name'] ?>"> 
                <input type="hidden" id="datetodate_hdn_from_date" value="<?php echo $_POST['from_date'] ?>">
                <input type="hidden" id="datetodate_hdn_to_date" value="<?php echo $_POST['to_date'] ?>">        
        </table>
		</form>
<br/>

			   <table style="width:100%">
              <tr>
                  <td>
                      <?php if ($this->_supers['post']['site_name'] != ""): ?>Site Name:&nbsp;&nbsp;<?php echo $this->_supers['post']['site_name']; ?>
<?php endif; ?>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				  <td>
                     <?php if ($this->_supers['post']['htsc_no'] != ""): ?>HTSC No:&nbsp;&nbsp;<?php echo $this->_supers['post']['htsc_no']; ?>
<?php endif; ?>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				  <td>
                     <?php if ($this->_supers['post']['make'] != ""): ?>Make:&nbsp;&nbsp;<?php echo $this->_supers['post']['make']; ?>
<?php endif; ?>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td>
                     <?php if ($this->_supers['post']['from_Date'] != ""): ?>From Date:&nbsp;&nbsp;<?php echo $this->_supers['post']['from_Date']; ?>
<?php endif; ?>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				
                    <td> <?php if ($this->_supers['post']['to_Date'] != ""): ?>To Date:&nbsp;&nbsp;<?php echo $this->_supers['post']['to_Date']; ?>
<?php endif; ?>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </tr>
         	</table>
              <br />
			             <?php if ($this->_tpl_vars['PageList2'] != ""): ?>
						  <?php if ($this->_tpl_vars['make'] == 'NEPC'): ?>
						<table class="table table-striped table-bordered table-hover dataTables-example" >
						<form name="powGenNepc" method="post" id="powGenNepc" >
						   <tr>
			<!--			<th>Location No</th>  -->
			            <th><center>Sl No</center></th>
						 <th><center>Panel Date</center></th>
						  <th><center>Location No</center></th>
                        <th><center>G1 KWh</center></th>
					   	<th><center>G2 KWh</center></th>
						<th><center>Total KWh</center></th>
						<th><center>G1 Hrs</center></th>
                        <th><center>G2 Hrs</center></th>
                       <!-- <th><center>Gen Hrs</center></th>-->
						<th><center>Idle Hrs</center></th>
						<th><center>FW Hrs</center></th>
						<th><center>GD Hrs</center></th>
						<th><center>MT Hrs</center></th>
						<th><center>BD Hrs</center></th>
						<!--<th><center>AB Hrs</center></th>-->
						<!--<th>&nbsp;&nbsp;&nbsp;&nbsp; Action</th>-->
                       <th><center> &nbsp;&nbsp;&nbsp;&nbsp;Action</center></th>		
						
                    </tr>                 
					   
					
                    <?php $_from = $this->_tpl_vars['PageList2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
					
					<input type="hidden" value="<?php echo $this->_supers['post']['make']; ?>
">
                    <tr class="gradeX" id="<?php echo $this->_tpl_vars['i']++; ?>
">
	       <td align="center" ><a  href="#" ><?php echo $this->_tpl_vars['i']; ?>
</a></td>	
		       <td align="center" ><a  href="#"><?php echo $this->_tpl_vars['ListDet']['panel_date']; ?>
</a></td>
			    <td align="center" ><a  href="#"><?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
</a></td>		
	        <td align="center" ><a  href="#"><?php echo $this->_tpl_vars['ListDet']['g1_kwh']; ?>
</a></td>			        
            <td align="center" ><a  href="#"><?php echo $this->_tpl_vars['ListDet']['g2_kwh']; ?>
</a></td>	          	
            <td align="center" ><a  href="#"><?php echo $this->_tpl_vars['ListDet']['total_kwh']; ?>
</a></td>
	        <td align="center" ><a  href="#"><?php echo $this->_tpl_vars['ListDet']['g1_hrs']; ?>
</a></td>					
		    <td align="center" ><a  href="#"><?php echo $this->_tpl_vars['ListDet']['g2_hrs']; ?>
</a></td>					
		   <!-- <td align="center" ><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['make']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['gen_hrs']; ?>
</a></td>	-->				
		    <td align="center" ><a  href="#" ><?php echo $this->_tpl_vars['ListDet']['idle_hrs']; ?>
</a></td>					
		    <td align="center" ><a  href="#" ><?php echo $this->_tpl_vars['ListDet']['fw_duration']; ?>
</a></td>					
		    <td align="center" ><a  href="#" ><?php echo $this->_tpl_vars['ListDet']['gd_duration']; ?>
</a></td>					
		    <td align="center" ><a  href="#" ><?php echo $this->_tpl_vars['ListDet']['mt_duration']; ?>
</a></td>					
		    <td align="center" ><a  href="#" ><?php echo $this->_tpl_vars['ListDet']['bd_duration']; ?>
</a></td>					
		  <!--  <td align="center" ><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['make']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['ab_duration']; ?>
</a></td>			-->		
		      <!--<td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./powergenerationEdit.php?g1_kwh=<?php echo $this->_tpl_vars['ListDet']['g1_kwh']; ?>
"><i class="fa fa-edit"></i></a></td>--> 
		      <td class="center">	&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick="deleteCats('<?php echo $this->_tpl_vars['ListDet']['panel_date']; ?>
','<?php echo $this->_supers['post']['make']; ?>
');"></a></td> 
		   	              </tr>
						  <?php endforeach; else: ?>
			<tr>
			<td height="20" colspan="16" align="center"><img src="images/warning.gif" border="0">&nbsp;<h4 style="color:#FF0000">NO value of Data on that Date...</h4></td>
			</tr>
					<?php endif; unset($_from); ?>	
					</form>
                    </table>
                    
					    <?php endif; ?>
						 <?php if ($this->_tpl_vars['make'] == 'Vestas'): ?>
                      <table class="table table-striped table-bordered table-hover dataTables-example ">
					 <form name="powGenVestas" method="post" >
			          <tr>
                    <!-- <th><center>Select</center></th>--> 
					 <th><center>Sl No</center></th>  
					<th><center>Panel Date</center></th>
	               <th><center>Location No</center></th> 
				   <th><center> LCS</center></th> 
	           <th><center>G1 KWH</center></th>
              <th><center>Import</center></th>
			<th><center>Total KWH </center></th>
			<th><center>Line Ok</center></th>
			<th><center>Turbine Ok</center></th>
			<th><center>Run</center></th>
			<th><center>Gen 1 Hrs</center></th>
			<th><center>Grid Drop</center></th>
			 <th><center> &nbsp;&nbsp;&nbsp;&nbsp;Action</center></th>
			
			<!--<th><center>Action</th>-->
            </tr>
			
			
    <?php $_from = $this->_tpl_vars['PageList2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
					
             <tr class="gradeX" id="<?php echo $this->_tpl_vars['i']++; ?>
" >
	        <td align="center" ><a  href="#" ><?php echo $this->_tpl_vars['i']; ?>
</a></td>	
			<td align="center" ><a  href="#" ><?php echo $this->_tpl_vars['ListDet']['panel_date']; ?>
</a></td>	
	       <td align="center" ><a  href="#" ><?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
</a></td>			
		   <td align="center" ><a  href="#" ><?php echo $this->_tpl_vars['ListDet']['t_lcs']; ?>
</a></td>
	        <td align="center" ><a  href="#" ><?php echo $this->_tpl_vars['ListDet']['g1_kwh2']; ?>
</a></td>					
		    <td align="center" ><a  href="#" ><?php echo $this->_tpl_vars['ListDet']['import2']; ?>
</a></td>					
		    <td align="center" ><a  href="#" ><?php echo $this->_tpl_vars['ListDet']['total_kwh2']; ?>
</a></td>					
		    <td align="center" ><a  href="#" ><?php echo $this->_tpl_vars['ListDet']['lineOk']; ?>
</a></td>					
		    <td align="center" ><a  href="#" ><?php echo $this->_tpl_vars['ListDet']['turbineOk']; ?>
</a></td>					
		    <td  align="center" ><a  href="#" ><?php echo $this->_tpl_vars['ListDet']['run']; ?>
</a></td>					
		    <td  align="center" ><a  href="#" ><?php echo $this->_tpl_vars['ListDet']['gen1']; ?>
</a></td>					
		    <td  align="center" ><a  href="#" ><?php echo $this->_tpl_vars['ListDet']['gridDrop']; ?>
</a></td>					
		   				
		      <!--<td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./powergenerationEdit.php?g1_kwh=<?php echo $this->_tpl_vars['ListDet']['g1_kwh']; ?>
"><i class="fa fa-edit"></i></a></td>--> 
		      <td class="center">	&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick="deleteCats1('<?php echo $this->_tpl_vars['ListDet']['panel_date']; ?>
','<?php echo $this->_supers['post']['make']; ?>
');"></a></td> 
		   	              </tr>
						  <?php endforeach; else: ?>
			<tr>
			<td height="20" colspan="16" align="center"><img src="images/warning.gif" border="0">&nbsp;<h4 style="color:#FF0000">NO value of Data on that Date...</h4></td>
			</tr>
					<?php endif; unset($_from); ?>	
					</form>
					</table>
					
					<?php endif; ?><?php endif; ?>
<!-----------------------------------------  Start of Delete Role ------------------------->						
<div id="modal-form3" class="modal fade" aria-hidden="true" data-backdrop="static">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
										
										<div class="row">
											  <h3 class="m-t-none m-b text-center">Deleting Panel</h3>
											  <div class="hr-line-dashed"></div>
									    </div>	
										
<div id="PanelDeleteLoader" style="display:none;" align="center"><img src="./images/icons/loading.gif"  alt="Delete is in Process..."/></div>	
																		
						
                                    <div class="row">
										<div class="col-lg-12" id="succsMsgPanelDelete"></div>
									</div>

                                    </div>
                                    </div>
                                </div>
                        </div>						
<!-----------------------------------------  End of Delete Role ------------------------->	


					</body>
						
                    </div>
                </div>
            </div>
            </div>
        </div>

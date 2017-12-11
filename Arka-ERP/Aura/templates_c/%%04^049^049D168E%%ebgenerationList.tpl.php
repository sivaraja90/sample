<?php /* Smarty version 2.6.25, created on 2016-01-20 13:22:33
         compiled from ebgenerationList.tpl */ ?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ARKA | EB List</title>
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
		 function fnClickAddRow() {
            $(\'#editable\').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
		$(document).on("click", ".fa-trash", function () {
     var eb_date = $(this).data(\'id\');
     $(".modal-body #hdnDeleb_date").val(eb_date);
});
function deleteCats(CatIdent){
 if(confirm("Are you sure to Delete this Content?")){
  FormName		= document.ebGen;
   //var gate = document.getElementById(\'gate_entry_id\').value;
  FormName.action= "./ebgenerationList.php?eb_date="+CatIdent;
  
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
    <!-- Data Tables -->

		

<!--         {if $accordion eq \'0\'}

             <input type="hidden" id="hdn_accordion" value="0">

         {/if}
         {if $accordion eq \'1\'}

             <input type="hidden" id="hdn_accordion" value="1">
             
         {/if} -->

  <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
 <link rel="stylesheet" href="/resources/demos/style.css">   --> 
 <script type="text/javascript" src="dhtmlxMessage/codebase/dhtmlxcalendar.js" ></script>
<script type="text/javascript" src="./codebase/dhtmlxcalendar.js"></script>
<script type="text/javascript" src="./codebase/dhtmlxcommon.js"></script>
<script src="jquery/jquery.ui.datepicker.js"></script>
 <script>
function getval()
        {
		
		var from_date,to_date;
		from_date=document.getElementById("from_date").value;
		to_date=document.getElementById("to_date").value;
		if(from_date=="" || to_date=="")
		{
			alert("Please Specify Date");
			return false;
		}
		
        }	
	var myCalendar;
function doOnLoad() {
    
    var from_date;
	from_date=new Date();
    myCalendar = new dhtmlXCalendarObject(["from_date"]);
	myCalendar = new dhtmlXCalendarObject(["to_date"]);
   
}	
/*$(function(from_date) {
				//alert("test");
				$( "#from_date" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});
			
$(function(to_date) {
				//alert("test");
				$( "#to_date" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});*/
       
	</script>

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
var myCalendar;
function doOnLoad() {
    var date;date=new Date();
    myCalendar = new dhtmlXCalendarObject(["eb_date", "from_date", "to_date"]);
    myCalendar2 = new dhtmlXCalendarObject(["to_date"]);
    myCalendar3 = new dhtmlXCalendarObject(["eb_date"]);
   var myEvent = myCalendar2.attachEvent("onClick", function (){
   
		if(  document.getElementById("site_name").value && document.getElementById("htsc_no").value && document.getElementById("from_date").value)
		{

		     document.getElementById("eb_gen_list").submit();
	   }
	   else
	   {
	   		dhtmlx.alert({
			title: "Alert !",
			type:"alert-error",
			text: "Please Select From Date!",
						});
						
			document.getElementById("to_date").value="";			
			return false;	
		
		}   
   
           
});    
     var myEvent2 = myCalendar3.attachEvent("onClick", function ()
    {
    document.getElementById("eb_gen_list2").submit();
    });        
    
    
	<!--myCalendar.setSensitiveRange(date,null);-->
}

</script>
<!--<script>
function showSites()
{
//alert(name);
str= document.getElementById("datetodate_region").value;
var var1=document.getElementById("datetodate_region").id;
var var2=var1.split("_",2);
var prefx=var2[0];
//alert(prefx);
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
  
	x=xmlhttp.responseText;
	document.getElementById(prefx+"_"+"site_name").innerHTML=x;
        var name_of_site_index =  document.getElementById(prefx+"_"+"site_name").selectedIndex;
       var  name_of_site=   document.getElementById(prefx+"_"+"site_name").options;
       var prefx_append=prefx+"_"+"tht";
        showGroup(name_of_site[name_of_site_index].text,prefx_append);
	   
	   }
	 else 
	   {
	 document.getElementById(prefx+"_"+"site_name").innerHTML="<option value=\'0\'>Please select region</option>";
	 //  document.getElementById("htsc_grouping").innerHTML="<option value=\'0\'>Please select region</option>";
	   
	   }  
       
    }
  }
xmlhttp.open("GET","select_sites_ajax.php?q="+str,true);

xmlhttp.send();
}

</script>-->
<script>
function showGroup(str)
{
 
 //alert(name);
/*var var1=name;
var var2=var1.split("_",2);
var prefx=var2[0];  */     
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
             //alert(xmlhttp.responseText);  
  
	x=xmlhttp.responseText;
	//document.getElementById(prefx+"_"+"htsc_grouping").innerHTML=x;
		document.getElementById("htsc_no").innerHTML=x;

  //      var name_of_site_index =  document.getElementById("site_name").selectedIndex;
   //     var  name_of_site=   document.getElementById("site_name").options;
     //   showGroup(name_of_site[name_of_site_index].text);
	   }
	 else 
	   {
	   document.getElementById("htsc_no").innerHTML="<option value=\'0\'>Please select region</option>";

	   }  
       
    }
  }
xmlhttp.open("GET","select_htsc_ajax.php?q="+str,true);

xmlhttp.send();


}
</script>
<script>

 function getval(prefix)
        {
		
var name_from_event=prefix;
var prefx =name_from_event.split("_",1);         
var region_var,htsc_no_var,site_name_var,from_date_var,to_date_var;
if(prefx=="datetodate")
{
prefx=0;
}
else
{
prefx=1;
}

switch(prefx)
{
   
case 0:    
prefx="datetodate";

htsc_no_var=document.getElementById(prefx+"_"+"hdn_htsc_no").value;
site_name_var=document.getElementById(prefx+"_"+"hdn_site_name").value;
from_date_var=document.getElementById(prefx+"_"+"hdn_from_date").value;
to_date_var=document.getElementById(prefx+"_"+"hdn_to_date").value;
 if(htsc_no_var==\'\' || site_name_var==\'\' || from_date_var==\'\' || to_date_var==\'\')
{

	   		dhtmlx.alert({
			title: "Alert !",
			type:"alert-error",
			text: "Please select the details properly for XL Conversion!",
						});

 return false;   
}
else
{
var window_var=window.open(\'report_power_gen_list.php?switch_case=\'+"datetodate_in_ebgeneration"+\'&\'+"region="+region_var+\'&\'+"htsc_no="+htsc_no_var+\'&\'+"site_name="+site_name_var+\'&\'+"from_date="+from_date_var+\'&\'+"to_date="+to_date_var,\'popUpWindow\',\'height=150,width=300,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes,url=no\')
setInterval(function(){window_var.close();},3000);

}

break;
case 1: 
prefx="datewise";

htsc_no_var=document.getElementById(prefx+"_"+"hdn_htsc_no").value;
site_name_var=document.getElementById(prefx+"_"+"hdn_site_name").value;
panel_date_var=document.getElementById(prefx+"_"+"hdn_panel_date").value; 
 if(htsc_no_var==\'\' || site_name_var==\'\' || panel_date_var==\'\')
{
 alert(\'Please select the details properly for XL Conversion\'); 
 return false;   
}
else
{
var window_var=window.open(\'report_power_gen_list.php?switch_case=\'+"datewise_in_ebgeneration"+\'&\'+"htsc_no="+htsc_no_var+\'&\'+"site_name="+site_name_var+\'&\'+"panel_date="+panel_date_var,\'popUpWindow\',\'height=150,width=300,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes,url=no\')
setInterval(function(){window_var.close();},3000); 
}

break; 
}

 }
</script>

<script>


			  
/*function deleteCats(){

var from_date,to_date,htsc_no;
htsc_no=document.getElementById("datetodate_hdn_htsc_no").value;
from_date=document.getElementById("datetodate_hdn_from_date").value;
to_date=document.getElementById("datetodate_hdn_to_date").value;
dhtmlx.confirm({
    title: "Close",
    type:"confirm-warning",
    text: "Are you sure to Delete Details From \' "+ from_date + " \'  To  \' " + to_date +" \' ?",
    callback: function(result) 
	{
	if(result==true)
	    {

  FormName		= document.eb_gen_list;
  FormName.action	= "ebgenerationList.php?deleid="+htsc_no+"&from_date="+from_date+"&to_date="+to_date;
  FormName.submit();

 		}  
	}
});
 
 }
*/

       /* $(\'.datepicker\').datepicker({
                todayBtn: "linked",
				format:\'yyyy-mm-dd\',
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });	
			
		*/
 
/*function deleteSite(deldata)
{
	if(confirm("Are you sure to Delete?"))
	{
					$(\'#modal-form3\').modal(\'show\')
													
					$("#EbDeleteLoader").css("display","block");
					$.ajax({
					url: "index.php/ebList/deleteEb",
					type:"POST",
					beforeSend:function()
					{
					
					},
					data:{siteId:deldata},
					success: function(result)
					{
					$("#EbDeleteLoader").css("display","none");
					$("#succsMsgEbDelete").html(result);
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

<link rel="stylesheet" type="text/css" href="css/datepickier_main.css">
	 	    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	  		<link rel="stylesheet" href="./codebase/dhtmlxcalendar.css" type="text/css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css"> 
			<link rel="stylesheet" href="./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
			<link rel="stylesheet" type="text/css" href="css/datepicker.css">
'; ?>


</head> 
 
   </div>
          <body onLoad="doOnLoad();showSites();">
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
                        <h5  style="padding-left:40%;">List of EB</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                          
                        </div>
                    </div>
                    <div class="ibox-content">
                     <!--<table class="table table-striped table-bordered table-hover dataTables-example" >-->
					<!--<form name="ebMgmt" method="post" >
					<thead>
                    <tr>
											<th><center>Sl No</center></th>
					    <th style="text-align:center;">Site</th>
                        <th style="text-align:center;">HTSC No</th>
                        <th style="text-align:center;">EB Date</th>			
						      <th>  &nbsp;&nbsp;&nbsp;&nbsp; Action</th>
                                 <th> &nbsp;&nbsp;&nbsp;&nbsp;	Action</th>					
                    </tr>
                    </thead>
                    <tbody>
					<?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
                    <tr class="gradeX" id="<?php echo $this->_tpl_vars['i']++; ?>
">
			<td><a href="./ebgenerationDetails.php?site_name=<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
"><?php echo $this->_tpl_vars['i']; ?>
</a></td>	
		  	<td><a href="./ebgenerationDetails.php?site_name=<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
"><?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
</a></td>			        
		    <td><a href="./ebgenerationDetails.php?site_name=<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
"><?php echo $this->_tpl_vars['ListDet']['htsc_no']; ?>
</a></td>	          	
            <td><a href="./ebgenerationDetails.php?site_name=<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
"><?php echo $this->_tpl_vars['ListDet']['eb_date']; ?>
</a></td>
		      <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./ebgenerationEdit.php?site_name=<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
"><i class="fa fa-edit"></i></a></td> 
		      <td class="center">	&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick="deleteCats('<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
');"></a></td> 
		   	 </tr>
				 <?php endforeach; endif; unset($_from); ?>
                    <tbody>-->
					
                 <!--    <tfoot>
                   <tr>
                        <th>User ID</th>
						<th>User Name</th>
                        <th>Site Name</th>
                        <th>User Group</th>
                        <th>Contact Person</th>
						<th>Action</th>
						
                    </tr>
                    </tfoot>
					</form>
                    </table>-->
					      
<!--<table width="100%" cellpadding="2" cellspacing="0" border="0">
-->				<!--<tr>
				  	<td colspan="2" align="right"><?php echo $this->_tpl_vars['LinkPage']; ?>
<?php echo $this->_tpl_vars['PerPageNavigation']; ?>
</td>
				</tr>-->
<!--<tr>    <td colspan="2" align="right">&nbsp;&nbsp;</td>
</tr>-->

<!--<?php if ($this->_tpl_vars['SuccessMessage'] != "" && $this->_tpl_vars['ErrorMessage'] == ""): ?> <tr><td class="succs_text"  style="min-width:50%"><?php echo $this->_tpl_vars['SuccessMessage']; ?>
</td><td   style="min-width:50%">&nbsp;</td>	</tr><?php endif; ?>
 <?php if ($this->_tpl_vars['ErrorMessage'] != ""): ?><tr><td class="errtxt"  style="min-width:50%">	<?php echo $this->_tpl_vars['ErrorMessage']; ?>
</td> <td   style="min-width:50%">&nbsp;</td></tr>  <?php endif; ?>-->	
		
        
    <form name="eb_gen_list" id="eb_gen_list" method="post">
		      <table class="dataTables-example" cellspacing="2" >
      <!--<table class="table table-striped table-bordered table-hover dataTables-example" >--><!--<table align="center" class="ticketinfo" cellspacing="1" cellpadding="3" width="100%" border=0 style="margin-top:1%">
-->           <input type="hidden" name="hdAction" id="hdAction"> 
                    
               
                   <!-- <td>Select Region:</td>
				<?php if ($this->_supers['session']['Region'] != 'Chennai'): ?>	
                 <td><input type="text" name="region" id="datetodate_region" value="<?php echo $this->_supers['session']['Region']; ?>
" readonly="true"></td>
				<?php elseif ($this->_supers['session']['Region'] == 'Chennai'): ?>
				<td>
				<select name="region" id="datetodate_region" onChange="showSites();">
				<option value="tirunelveli">Tirunelveli</option>
				<option value="coimbatore">Coimbatore</option>
				</select>
				</td>
				<?php endif; ?>
				 -->
				  <tr>
                    <td><label>Site:&nbsp;&nbsp;&nbsp;</label><select name="site_name" id="site_name"  style="height:24px;" onChange="showGroup(this.value);" >  
                            <option value=0 selected="selected">--- Please Select Site ---</option>
          		<?php $_from = $this->_tpl_vars['SiteList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Listsite']):
?>	
							   <option value="<?php echo $this->_tpl_vars['Listsite']['site_name']; ?>
"><?php echo $this->_tpl_vars['Listsite']['site_name']; ?>
 </option>
						       <?php endforeach; endif; unset($_from); ?>
         			  </select>&nbsp;&nbsp;<font class="error"><b>*</b>&nbsp;</font></td>
                           
			    
				<td><label>HTSC No:&nbsp;&nbsp;</label></td>
                             <td >
                                <select id="htsc_no" name="htsc_no" style="height:24px;" >   
                                <option value=0 selected="selected">---Please Select Sites---</option>
                                </select> &nbsp;&nbsp; &nbsp;&nbsp; 
                            </td>                       
	<td><label>From Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="from_date" name="from_date" size="20"  readonly="true" value="<?php echo $this->_supers['post']['from_date']; ?>
" autocomplete="off">&nbsp;&nbsp;<font class="error"   ><b>*</b>&nbsp;&nbsp;&nbsp;&nbsp;</font></td>                 
        <td><label>To Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="to_date" name="to_date" size="20"  readonly="true" value="<?php echo $this->_supers['post']['to_date']; ?>
" autocomplete="off">&nbsp;&nbsp;<font class="error"   ><b>*</b>&nbsp;</font></td>                                
 <!--<td colspan="2" align="right"><?php if ($this->_tpl_vars['PageList_dtd'] != ""): ?><a href="#"><img src="images/xls.gif" onClick="getval(this.id);" id="datetodate_xlprinter" alt="xls" border=0></a><?php endif; ?>&nbsp;&nbsp;<?php echo $this->_tpl_vars['LinkPage']; ?>
<?php echo $this->_tpl_vars['PerPageNavigation']; ?>
</td>-->                 
             </tr>
		</table>
        
<!--                <input type="hidden" id="datetodate_hdn_region" value="<?php echo $_POST['region'] ?>"> 
-->                <input type="hidden" id="datetodate_hdn_htsc_no" value="<?php echo $_POST['htsc_no'] ?>">
                <input type="hidden" id="datetodate_hdn_site_name" value="<?php echo $_POST['site_name'] ?>"> 
                <input type="hidden" id="datetodate_hdn_from_date" value="<?php echo $_POST['from_date'] ?>">
                <input type="hidden" id="datetodate_hdn_to_date" value="<?php echo $_POST['to_date'] ?>">        
        
        
    </form>
	<br />
	
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
                      <?php if ($this->_supers['post']['from_date'] != ""): ?>From Date:&nbsp;&nbsp;<?php echo $this->_supers['post']['from_date']; ?>
<?php endif; ?>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td>
                     <?php if ($this->_supers['post']['to_date'] != ""): ?>To Date:&nbsp;&nbsp;<?php echo $this->_supers['post']['to_date']; ?>
<?php endif; ?>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				   
              </tr>
    </table>
<br />
	
              <table class="table table-striped table-bordered table-hover dataTables-example" >

<!--		<table align="center" class="dtable" cellspacing="1" cellpadding="3" width="100%" border=0 style="margin-top:2%">
--><!--		<table align="center"  cellspacing="1" cellpadding="3" width="100%" border=0 style="margin-top:2%">
-->		<?php if ($this->_tpl_vars['PageList2'] != ""): ?>
 <form name="ebGen" id="ebGen" method="post">
			<tr>
			<!--<th width="8" align="center" >Machine Id</th>-->
	    
<!--	        <th width="4" align="center">Imp Kwh</th>
	        <th width="4" align="center">Exp Kwh</th>
			<th width="4" align="center">Imp Kvarh</th>
            
			<th width="4" align="center">Exp Kvarh</th>
			<th width="6" align="center">% Imp Kwh</th>
			<th width="6" align="center">% Exp Kwh</th>
			<th width="9" align="center">% Imp Kvarh</th>
			<th width="9" align="center">% Exp Kvarh</th>
			<th width="32" align="center">Cum Imp Kwh</th>
			<th width="32" align="center">Cum Exp Kwh</th>
			<th width="9" align="center">Cum Imp Kvarh</th>
			<th width="9" align="center">Cum Exp Kvarh</th>
			<th width="20" align="center">Action</th>-->
			<th width="4" ><center>Sl No</center></th>
            <th width="4" ><center>Eb Date</center></th>
			<th width="4" ><center>Location No</center></th>
	        <th width="4" ><center>Imp Kwh</center></th>
			<th width="4" ><center>Imp Kwh/Day</center></th>
	        <th width="4" ><center>Exp Kwh</center></th>
			<th width="4" ><center>Exp Kwh/Day</center></th>
			<th width="4" ><center>Imp Kvarh</center></th>
			<th width="4" >Imp Kvarh/Day</center></th>
            <th width="4" ><center>Exp Kvarh</center></th>
			<th width="4" ><center>Exp Kvarh/Day</center></th>
				

			<!--<th width="20" align="center">Action</th>-->
			<th width="20" align="center">Action</th>			
            </tr>
			<!--			 <tr >
                <td align="center"><input type="text" id="machine_id" name="machine_id" value="" size="10" autocomplete="Off"></td>
                <td align="center"><input type="text" id="htsc_no" name="htsc_no" value="" size="10" autocomplete="Off"></td>
                <td align="center"><input type="text" id="mf" name="mf" value="" size="10" autocomplete="Off"></td>
                <td align="center"><input type="text" id="import_kwh" name="import_kwh" value="" size="10" autocomplete="Off"></td>
                <td align="center"><input type="text" id="export_kwh" name="export_kwh" value="" size="10" autocomplete="Off"></td>
				<td align="center"><input type="text" id="import_kvarh" name="import_kvarh" value="" size="10" autocomplete="Off"></td>
				<td align="center"><input type="text" id="export_kwh" name="export_kvarh" value="" size="10" autocomplete="off"></td>
				<td align="center"><input type="text" id="percent_imp_kwh" name="percent_imp_kwh" value="" size="10" autocomplete="off"></td>
				<td align="center"><input type="text" id="percent_exp_kwh" name="percent_exp_kwh" value="" size="10" autocomplete="off"></td>
				<td align="center"><input type="text" id="percent_imp_kvarh" name="percent_imp_kvarh" value="" size="10" autocomplete="off"></td>
				<td align="center"><input type="text" id="percent_exp_kvarh" name="percent_exp_kvarh" value="" size="10" autocomplete="off"></td>
				<td align="center"><input type="text" id="cum_imp_kwh" name="cum_imp_kwh" value="" size="10" autocomplete="off"></td>
				<td align="center"><input type="text" id="cum_exp_kwh" name="cum_exp_kwh" value="" size="10" autocomplete="off"></td>
				<td align="center"><input type="text" id="cum_imp_kvarh" name="cum_imp_kvarh" value="" size="10" autocomplete="off"></td>
		
                               <td align="center"><input type="text" id="cum_exp_kvarh" name="cum_exp_kvarh" value="" size="10" autocomplete="off"></td>
                              
                         </tr> -->
        
		  <?php $_from = $this->_tpl_vars['PageList2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
            <tr class="gradeX" id="<?php echo $this->_tpl_vars['i']++; ?>
">          
                              <!--  <td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['machine_id']; ?>
</a></td>-->
							  <td align="center" ><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['make']; ?>
');"><?php echo $this->_tpl_vars['i']; ?>
</a></td>	
				<td align="center"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['make']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['eb_date']; ?>
</a></td>	
				<td align="center"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['make']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
</a></td>			  
				<td align="center" ><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['make']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['imp_kwh']; ?>
</a></td>
				<td align="center" ><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['make']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['imp_kwh_day']; ?>
</a></td>
				<td align="center" ><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['make']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['exp_kwh']; ?>
</a></td>	
				<td align="center" ><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['make']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['exp_kwh_day']; ?>
</a></td>	
				<td align="center" ><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['make']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['imp_kvarh']; ?>
</a></td>
				<td align="center" ><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['make']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['imp_kvarh_day']; ?>
</a></td>
				<td align="center" ><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['make']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['exp_kvarh']; ?>
</a></td>
				<td align="center" ><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['make']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['exp_kvarh_day']; ?>
</a></td>
				
				 <!--<td class="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="./ebgenerationEdit.php?turbine_id=<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"><i class="fa fa-edit"></i></a></td>-->		
				<td class="center">	&nbsp;&nbsp; &nbsp;&nbsp;<a href="#" class="fa fa-trash" onClick="deleteCats('<?php echo $this->_tpl_vars['ListDet']['eb_date']; ?>
');"></a></td>	
            </tr>
		   <?php endforeach; else: ?>
			<tr>
			<td height="20" colspan="16" align="center"><img src="images/warning.gif" border="0">&nbsp;<h4 style="color:#FF0000">NO value of Data on that Date...</h4></td>
			</tr>
			<!--<tr>
			<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
			</tr>-->
              <?php endif; unset($_from); ?>
			  </form>
			  <?php endif; ?>
		</table>
		
		    </div>
		 </div>
		 </div>
		 </div>
		 </div>
		 </body>
		 
<!-----------------------------------------  Start of Delete Role ------------------------->						
<div id="modal-form3" class="modal fade" aria-hidden="true" data-backdrop="static">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
										
										<div class="row">
											  <h3 class="m-t-none m-b text-center">Deleting Panel</h3>
											  <div class="hr-line-dashed"></div>
									    </div>	
										
<div id="EbDeleteLoader" style="display:none;" align="center"><img src="./images/icons/loading.gif" alt="Delete is in Process..."/></div>	
																		
						
                                    <div class="row">
										<div class="col-lg-12" id="succsMsgEbDelete"></div>
									</div>

                                    </div>
                                    </div>
                                </div>
                        </div>						
<!-----------------------------------------  End of Delete Role ------------------------->	

                 
   	 
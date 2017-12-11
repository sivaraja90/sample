<?php /* Smarty version 2.6.25, created on 2017-02-22 17:11:07
         compiled from ebgenerationReg.tpl */ ?>
<?php echo '
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
function getval()
        {
		var eb_date;
		eb_date=document.getElementById("eb_date").value;
		
		//date2=document.getElementById("date2").value;
		
		if(eb_date=="" )
		{
			alert("Please Specify Date");
			return false;
		}
		
        }	
		
	
var myCalendar;
function doOnLoad() {
    
    var eb_date;
	eb_date=new Date();
    myCalendar = new dhtmlXCalendarObject(["eb_date"]);
   
}	
</script>
<script>

/* if(  document.getElementById("site_name").value && document.getElementById("htsc_no").value && document.getElementById("make").value &&  document.getElementById("eb_date").value )
		{
 
 // var make = document.getElementById(\'make\').value;
 //alert(ev);
document.getElementById("eb_generation").submit();
}
if(document.getelementById("eb_date").value!=="")
{
dhtmlx.alert({
			title: "Alert !",
			type:"alert-error",
			text: "Please Select site name !",
						});
}
else
{
document.getElementById("eb_generation").submit();
/*dhtmlx.alert({
			title: "Alert !",
			type:"alert-error",
			text: "Please Select site name !",
						});
						
			document.getElementById("eb_date").value="";			
			return false;
		
		}   
});    
 }
   */
	<!--myCalendar.setSensitiveRange(date,null);-->

</script>
 

<script>
$(document).ready(function() {	
$("#addEB").click(function(){ 
                //  var fields=["site_name","htsc_no","eb_date","select_id[]","imp_kwh","exp_kwh","imp_kvarh","exp_kvarh","imp_kva","exp_kva"];
				var fields=["imp_kwh","exp_kwh","imp_kvarh","exp_kvarh","imp_kva","exp_kva"];
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
              FormName= document.power_generation;
  			  FormName.method= "POST";
              FormName.submit();
			       <!--alert("hiiiii");-->         
             });
							 
$("#back").click(function(){
window.history.back();
});
});

		
</script>
<script type="text/javascript">
   
function tab(field, event) {
    if (event.which == 13 /* IE9/Firefox/Chrome/Opera/Safari */ || event.keyCode == 13 /* IE8 and earlier */ ) {
        for (i = 0; i < field.form.elements.length; i++) {
            if (field.form.elements[i].tabIndex == field.tabIndex + 1) {
                field.form.elements[i].focus();
                if (field.form.elements[i].type == "text") {
                    field.form.elements[i].select();
                    break;
                }
            }
        }
        return false;
    }
    return true;
}   
   </script>
   <script>
function autocheck()
{
var imp_kwh,exp_kwh,exp_kvarh,imp_kvarh,exp_kva,imp_kva;
imp_kwh=document.getElementById("imp_kwh").value;
exp_kwh=document.getElementById("exp_kwh").value;
imp_kva=document.getElementById("imp_kva").value;
exp_kva=document.getElementById("exp_kva").value;
/*cum_imp_kwh=document.getElementById("cum_imp_kwh"+"["+parameter1+"]").value;
cum_exp_kwh=document.getElementById("cum_exp_kwh"+"["+parameter1+"]").value;*/
imp_kvarh=document.getElementById("imp_kvarh").value;
exp_kvarh=document.getElementById("exp_kvarh").value;
/*prct_imp_kvarh=document.getElementById("prct_imp_kvarh"+"["+parameter1+"]").value;
prct_exp_kvarh=document.getElementById("prct_exp_kvarh"+"["+parameter1+"]").value;
cum_imp_kvarh=document.getElementById("cum_imp_kvarh"+"["+parameter1+"]").value;
cum_exp_kvarh=document.getElementById("cum_exp_kvarh"+"["+parameter1+"]").value;*/
//if(imp_kwh!="" || exp_kwh!="" || imp_kva!="" || exp_kva!="" || cum_imp_kwh!="" || cum_exp_kwh!="" || imp_kvarh!="" || exp_kvarh!="" || prct_imp_kvarh!="" || prct_exp_kvarh!="" || cum_imp_kvarh!="" || cum_exp_kvarh)
if(imp_kwh!="" || exp_kwh!="" || imp_kva!="" || exp_kva!="" ||  imp_kvarh!="" || exp_kvarh!="" )

{
document.getElementById("select_id[]").checked=true;
}
else
{
document.getElementById("select_id[]").checked=false;
}
}   
 </script>
 <script>
 var myCalendar;
function doOnLoad() {

   // var date;date=new Date();
    
	//eb_date=new Date();
   // myCalendar = new dhtmlXCalendarObject(["date1"]);
//	myCalendar = new dhtmlXCalendarObject(["date2"]);
    myCalendar = new dhtmlXCalendarObject(["eb_date"]);
   var ev = document.getElementById(\'eb_date\').value;
 var myEvent = myCalendar.attachEvent("onClick", function (){
 var fields=["eb_date","make","htsc_no","site_name"];
				for(i=0;i<fields.length;i++)
				{
				
				current_iteration = document.getElementById(fields[i]).value;
				document.getElementById(fields[i]).style.borderColor="";

						if(current_iteration=="")
						{			
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";	
			       alert("Please Select Site Name");
									return false;
						}	
				}				
             /* FormName= document.eb_generation;
  			  FormName.method= "POST";
              FormName.submit();*/
			     document.getElementById("eb_generation").submit();  

			       <!--alert("hiiiii");-->         
             });
			 }
 </script>
 <script> 
function validate_and_submit()
{
    var checked_check_boxes=0;
	var proper_value_row=0;
	var check_boxes=document.getElementsByName("select_id[]").length;
	var check_boxes2=document.getElementsByName("select_id[]");
		for(n=0;n<check_boxes;n++)
		{
			if(check_boxes2[n].checked==true)
			{
			    checked_check_boxes=checked_check_boxes+1;
				//alert(check_boxes2[n].id);
				var imp_kwh,exp_kwh,,imp_kvarh,exp_kvarh,imp_kva,exp_kva;
				var chk_box_val=check_boxes2[n].value;				
				imp_kwh=document.getElementById("imp_kwh").value;
				exp_kwh=document.getElementById("exp_kwh").value;
				imp_kva=document.getElementById("imp_kva").value;
				exp_kva=document.getElementById("exp_kva").value;
/*				cum_imp_kwh=document.getElementById("cum_imp_kwh"+"["+chk_box_val+"]").value;
				cum_exp_kwh=document.getElementById("cum_exp_kwh"+"["+chk_box_val+"]").value;*/
				imp_kvarh=document.getElementById("imp_kvarh").value;
				exp_kvarh=document.getElementById("exp_kvarh").value;
/*				prct_imp_kvarh=document.getElementById("prct_imp_kvarh"+"["+chk_box_val+"]").value;
				prct_exp_kvarh=document.getElementById("prct_exp_kvarh"+"["+chk_box_val+"]").value;
				cum_imp_kvarh=document.getElementById("cum_imp_kvarh"+"["+chk_box_val+"]").value;
				cum_exp_kvarh=document.getElementById("cum_exp_kvarh"+"["+chk_box_val+"]").value;*/

/*						if(imp_kwh!="" && exp_kwh!="" && prct_imp_kwh!="" && prct_exp_kwh!="" && cum_imp_kwh!="" && cum_exp_kwh!="" && imp_kvarh!="" 
						&& exp_kvarh!="" && prct_imp_kvarh!="" && prct_exp_kvarh!="" && cum_imp_kvarh!="" && cum_exp_kvarh)*/
						if(imp_kwh!="" && exp_kwh!="" && imp_kva!="" && exp_kva!="" &&  imp_kvarh!="" 
						&& exp_kvarh!=""  )						
						{
							proper_value_row=proper_value_row+1;
						}
			
			}
		
		}
		
		if(proper_value_row==checked_check_boxes && checked_check_boxes>0)
		{
		//alert("submitting Part");
		document.power_generation.submit();
		}
		else
		{
		alert("Please Verify Your Input");
		return false;
		}
}  </script>
   <script>
function numericFilter(data) 
{
   data.value = data.value.replace(/[^.0-9]/ig,"");
}
</script>
<script>
function showSites(str)
{
<!--var str=document.getElementById("region").value;-->
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
	document.getElementById("site_name").innerHTML=x;
        var name_of_site_index =  document.getElementById("site_name").selectedIndex;
       var  name_of_site=   document.getElementById("site_name").options;
        showGroup(name_of_site[name_of_site_index].text);
	   
	   }
	 else 
	   {
	 document.getElementById("site_name").innerHTML="<option value=\'0\'>Please select site</option>";
	   document.getElementById("htsc_no").innerHTML="<option value=\'0\'>Please select site</option>";
	   
	   }  
       
    }
  }
xmlhttp.open("GET","select_sites_ajax.php?q="+str,true);

xmlhttp.send();
}


function showLocation(str)
{
   // alert(\'hi\');
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
        alert(x);
	
	//if(xmlhttp.responseText.indexOf("|$|")!=-1)
        if(xmlhttp.responseText)
	   {
             //alert(xmlhttp.responseText);  
  
	x=xmlhttp.responseText;
	document.getElementById("htsc_no").innerHTML=x;
        var name_of_site_index =  document.getElementById("site_name").selectedIndex;
        var  name_of_site=   document.getElementById("site_name").options;
        showGroup(name_of_site[name_of_site_index].text);
	   }
	 else 
	   {
	   document.getElementById("htsc_no").innerHTML="<option value=\'0\'>Please select site</option>";

	   
	   }  
       
    }
  }
xmlhttp.open("GET","select_location_ajax.php?q="+str,true);

xmlhttp.send();


}


</script>

<script>
 $(document).ready(function(){
 
        //iterate through each textboxes and add keyup
        //handler to trigger sum event
        $(".txt").each(function() {
 
            $(this).keyup(function(){
                calculateSum();
            });
			
		
        });
 
    });
    function calculateSum() {
 
        var sum = 0;
        //iterate through each textboxes and add the values
        $(".txt").each(function() {
 
            //add only if the value is number
            if(!isNaN(this.value) && this.value.length!=0) {
                sum += parseFloat(this.value);
            }
			 
        });
        //.toFixed() method will roundoff the final sum to 2 decimal places
        //$("#sum").html(sum.toFixed(2));
		total_kwh.value =sum.toFixed(2);
		//total_kwh.value=total_kwh.value-total_kwh.value;
    }
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
	//document.getElementById("make").innerHTML=x;
  //      var name_of_site_index =  document.getElementById("site_name").selectedIndex;
   //     var  name_of_site=   document.getElementById("site_name").options;
     //   showGroup(name_of_site[name_of_site_index].text);
	   }
	 else 
	   {
	   document.getElementById("htsc_no").innerHTML="<option value=\'0\'>Please select Site</option>";
// document.getElementById("make").innerHTML="<option value=\'0\'>Please select Site</option>";
	   }  
       
    }
  }
xmlhttp.open("GET","select_htsc_ajax.php?q="+str,true);

xmlhttp.send();


}
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
  //      var name_of_site_index =  document.getElementById("site_name").selectedIndex;
   //     var  name_of_site=   document.getElementById("site_name").options;
     //   showGroup(name_of_site[name_of_site_index].text);
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
		   <script type="text/javascript">
		/*   $(document).ready(function(){
		   
		  // document.getElementById(\'region\').value = "<?php echo $_POST[\'region\'];?>";
  		  document.getElementById(\'site_name\').value = "<?php echo $_POST[\'site_name\'];?>";
		   }*/
</script>


<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script language="javascript">
function validate(MyForm){	
	if(!IsValid(MyForm.d_id.value,"Content Title")){
		MyForm.d_id.focus();
		return false;
	}
	MyForm.hdAction.value = 1;
}
</script>

            <script>
function createWindow() {
	
	var dhxWins, w1;
	var p = 0;
	var idPrefix = 1;
	var e = document.getElementById("site_name");
	var str = e.options[e.selectedIndex].text;
	
	dhxWins = new dhtmlXWindows();
    dhxWins.setImagePath("./codebase/imgs/");
  // dhxWins.enableAutoViewport(false);
    dhxWins.attachViewportTo("winVP");
	
	win = dhxWins.createWindow("w1", 400, 0, 600, 300);
	win.button("close").enable();
	win.button("minmax1").disable();
	win.setText("Machine Details");
	win.attachURL("./machine_details.php?s_name="+str);
	win.denyMove();
	
	}</script>
	<script>
         function addG($parmtr)
         {  
        var exp = document.getElementById(\'exp_kwh\').value;
        var lastexp = document.getElementById(\'last_exp_kwh\').value;
        var tot1 = +exp - +lastexp;
		var tot11=(tot1 * 900);
        document.getElementById(\'exp_kwh_day\').value=tot11;
         }
        </script>
		<script>
         function addG1($parmtr)
         {  
        var imp = document.getElementById(\'imp_kvarh\').value;
        var lastimp = document.getElementById(\'last_imp_kvarh\').value;
        var tot2 = +imp - +lastimp;
		var tot21=(tot2 * 900);
        document.getElementById(\'imp_kvarh_day\').value=tot21;
         }</script>
		 <script>
		  function addG2($parmtr)
         {  
        var exp = document.getElementById(\'exp_kvarh\').value;
        var lastexp = document.getElementById(\'last_exp_kvarh\').value;
        var tot3 = +exp - +lastexp;
		var tot31=(tot3 * 900);
        document.getElementById(\'exp_kvarh_day\').value=tot31;
         }
		 </script>
		 <script>
 function subractG($parmtr) 
         {  
        var lastimp = document.getElementById("last_imp_kwh").value;
        var imp = document.getElementById("imp_kwh").value;
        var tot = +imp - +lastimp;
		var tot41=(tot * 900);
        document.getElementById("imp_kwh_day").value=tot41;
         }
</script>
		 <script>
        function addGHOURS($parmtr)
        {
        var  g1,g2,idle1,idle2,idle3,idle4,tot;          
         g1 = document.getElementById(\'g1hours\'+"["+$parmtr+"]").value;
         g2 = document.getElementById(\'g2hours\'+"["+$parmtr+"]").value;
         idle1 = document.getElementById(\'fw_duration\'+"["+$parmtr+"]").value;
         idle2 = document.getElementById(\'gd_duration\'+"["+$parmtr+"]").value;
         idle3 = document.getElementById(\'mt_duration\'+"["+$parmtr+"]").value;
         idle4 = document.getElementById(\'bd_duration\'+"["+$parmtr+"]").value;
         tot = +g1 + +g2 + +idle1 + +idle2+ +idle3 + +idle4;
        document.getElementById(\'totalhours\'+"["+$parmtr+"]").value=tot;
        }
        
        function hour_alerting($parmtr)
        {
         var tot;   
         tot=document.getElementById(\'totalhours\'+"["+$parmtr+"]").value;  
        if(tot>24) 
        {
            
        alert(\'You have entered more than 24 hours\');
        return false;
        }
        else if(tot<24)
        {
            
        alert(\'You have entered less than 24 hours\'); 
        return false;
        }
        else
        {
           // alert(tot);
        return true;     
        }    
        }    
        
       </script>

        
        


<script>
/*$(function(Date2) {
				//alert("test");
				$( "#eb_date" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});*/
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
</style>
<script>
function autocheck()
{
var imp_kwh,exp_kwh,imp_kvarh,exp_kvarh;
imp_kwh=document.getElementById("imp_kwh").value;
exp_kwh=document.getElementById("exp_kwh").value;
imp_kvarh=document.getElementById("imp_kvarh").value;
exp_kvarh=document.getElementById("exp_kvarh").value;


if(imp_kwh!="" || exp_kwh!="" ||imp_kvarh!="" || exp_kvarh!=""  )
{
//document.getElementByName("checkbox"+"["+parameter1+"]").checked=true;
<!--document.getElementByName("select_id2").checked=true;-->
document.getElementById("select_id[]").checked=true;

}
else
{
<!--document.getElementByName("select_id2").checked=false;-->
document.getElementById("select_id[]").checked=false;
}
}  
</script>


'; ?>

      
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
            <div class="row">
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5  style="padding-left:40%;">EB Registration Form </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
						</div>
                        <div class="ibox-content"><body onLoad="doOnLoad();">
                           <form name="eb_generation" method="post" id="eb_generation">
                         <input type="hidden" name="hdAction" />
	                     <table width="100%" cellpadding="2" cellspacing="0" border="0">	
	                       <tr>
				<td><label>Sites:&nbsp;</label>
<!--				 <select name="site_name" id="site_name"  style="height:24px; "value="<?php echo $this->_supers['post']['site_name']; ?>
" onChange="showGroup(this.value);">  
-->								 <select name="site_name" id="site_name"  style="height:24px;" onChange="showGroup(this.value);" >  
                            <option value=0 selected="selected">--- Please Select Site ---</option>
          		<?php $_from = $this->_tpl_vars['SiteList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Listsite']):
?>	
							   <option value="<?php echo $this->_tpl_vars['Listsite']['site_name']; ?>
"><?php echo $this->_tpl_vars['Listsite']['site_name']; ?>
 </option>
						       <?php endforeach; endif; unset($_from); ?>
         			  </select>&nbsp;&nbsp;<font class="error"><b>*</b>&nbsp;</font></td>
                           
						   
						    <td ><label>HTSC No:&nbsp;</label> 
							  <select name="htsc_no" id="htsc_no"  style="height:24px;" onChange="showMake(this.value);">  
				<option value=0 selected="selected">-select-</option>
			    <!--<option value="">1</option>
				<option value="">2</option>-->
         		<!--<?php $_from = $this->_tpl_vars['SiteList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Listsite']):
?>	
							   <option value="<?php echo $this->_tpl_vars['Listsite']['turbine_htsc_no']; ?>
"><?php echo $this->_tpl_vars['Listsite']['turbine_htsc_no']; ?>
 </option>
						      <?php endforeach; endif; unset($_from); ?>-->
         			         </select> 
							</td>
							
							
							<td><label>Make:</label>&nbsp;&nbsp;&nbsp;&nbsp;<select name="make" id="make" style="height:24px;" autocomplete="off">
							<option value="">-select-</option>
						<!--<option value="NEPC">NEPC</option>
						<option value="VESTAS">VESTAS</option>-->
							</select></td>
							 
							 
							 <td><label>EB Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="eb_date" name="eb_date" size="15"  readonly="true" value="" placeholder="select EB Date!">&nbsp;&nbsp;<font class="error"   ><b>*</b>&nbsp;</font></td>
				</tr> 
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
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
				   <td>
                     <?php if ($this->_supers['post']['eb_date'] != ""): ?>EB Date:&nbsp;&nbsp;<?php echo $this->_supers['post']['eb_date']; ?>
<?php endif; ?>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </tr>
         	
		 
		 
		 <!-- <tr> 
		<td  width=50%>&nbsp;</td>
		<td  width=50%>&nbsp;</td>
	  </tr>-->
	   </table>
	   <br />
	   <br/>
	  
	   <?php if ($this->_tpl_vars['PageList'] != ""): ?>
	      
		 <table class="table table-striped table-bordered table-hover dataTables-example">
			<tr>
	        <th><center>Select</center></th>
			<th><center>Location No</center></th>
			 <th><center>Last Imp KWH</center></th>
            <th><center>Imp KWH</center></th>
			<th><center>Last Exp KWH</center></th>
			<th><center>Exp KWH</center></th>
			<th><center>Last Imp KVARH</center></th>
			<th><center>Imp KVARH</center></th>
			<th><center>Last Exp KVARH</center></th>
			<th><center>Exp KVARH</center></th>
            </tr>
		     <form name="power_generation" method="post" id="power_generation">
              <input type="hidden" name="hdAction2" />
			  <?php $this->assign('tabindex', '1'); ?> 
<?php $_from = $this->_tpl_vars['PageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>  
			   <input type="hidden" name="hdn_eb_date[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" value="<?php echo $this->_tpl_vars['EBDate']; ?>
">
			    <input type="hidden" name="hdn_sitename[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" value="<?php echo $this->_tpl_vars['ListDet']['site_name']; ?>
">
				<input type="hidden" name="hdn_make[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" value="<?php echo $this->_tpl_vars['ListDet']['make']; ?>
">
              
        <tr>
	   <td align="center"><input type="checkbox" id="select_id[]" name="select_id[]" value="<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
" size="5" autocomplete="off"  ></td>	
	   <td><center><?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
<input type="hidden" id="locationNo" name="locationNo[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]"  value="<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
" size="5" style="width:100%;" readonly="true" autocomplete="off"></center></td>
	    <input type="hidden" id="machine_id"    name="machine_id[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" value="<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
"  size="5" style="width:100%;" autocomplete="Off"   >
	    <input type="hidden" id="hdn_htsc_no" name="hdn_htsc_no[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" value="<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
"  size="5" style="width:100%;" autocomplete="Off"  >
	<center><input type="hidden" id="mf" name="mf[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]"  value="" onkeyUp="numericFilter(this);return tab(this, event);addG('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" autocomplete="Off" size="5" style="width:100%;"></center>
	<td><center><input type="text" id="last_imp_kwh" name="last_imp_kwh[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]"  value="" onkeyUp="numericFilter(this);subractG('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" autocomplete="Off" size="5" style="width:100%;"></center></td>
	<td><center><input type="text" id="imp_kwh" name="imp_kwh[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]"  value="" onkeyUp="numericFilter(this);subractG('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" autocomplete="Off" size="5" style="width:100%;" ></center></td>
	<center><input type="hidden" id="imp_kwh_day" name="imp_kwh_day[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]"  value="" onkeyUp="numericFilter(this);return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" autocomplete="Off" size="5" style="width:100%;"></center>
	
	<td><center><input type="text" id="last_exp_kwh" name="last_exp_kwh[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]"  value="" onkeyUp="numericFilter(this);addG('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" autocomplete="Off" size="5" style="width:100%;"></center></td>
	<td><center><input type="text" id="exp_kwh" name="exp_kwh[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]"  value="" onkeyUp="numericFilter(this);addG('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" autocomplete="Off" size="5" style="width:100%;"></center></td>
	<center><input type="hidden" id="exp_kwh_day" name="exp_kwh_day[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]"  value="" onkeyUp="numericFilter(this);return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" autocomplete="Off" size="5" style="width:100%;"></center>

<td><center><input type="text" id="last_imp_kvarh" name="last_imp_kvarh[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" value="" onkeyUp="numericFilter(this);addG1('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" autocomplete="Off" size="5" style="width:100%;"></center></td>	
	<td><center><input type="text" id="imp_kvarh" name="imp_kvarh[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" value="" onkeyUp="numericFilter(this);addG1('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" autocomplete="Off" size="5" style="width:100%;"></center></td>
	<center><input type="hidden" id="imp_kvarh_day" name="imp_kvarh_day[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" value="" onkeyUp="numericFilter(this);return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" autocomplete="Off" size="5" style="width:100%;"></center>
	
	<td><center><input type="text" id="last_exp_kvarh" name="last_exp_kvarh[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" value="" onkeyUp="numericFilter(this);addG2('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');"return tab(this, event); onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" autocomplete="Off" size="5" style="width:100%;"></center></td>
	<td><center><input type="text" id="exp_kvarh" name="exp_kvarh[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" value="" onkeyUp="numericFilter(this);addG2('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" autocomplete="Off" size="5" style="width:100%;"></center></td>
	<center><input type="hidden" id="exp_kvarh_day" name="exp_kvarh_day[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]" value="" onkeyUp="numericFilter(this);return tab(this, event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" autocomplete="Off" size="5" style="width:100%;"></center>
	
	
	
	<center><input type="hidden" id="imp_percentage" name="imp_percentage[<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
]"  value="" onkeyUp="numericFilter(this);return tab(this,event);" onBlur="autocheck('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
');" tabindex="<?php echo $this->_tpl_vars['i']++; ?>
" autocomplete="Off" size="5" style="width:100%;" ></center>
			</tr>
      <?php endforeach; else: ?>
			<tr>
			<td height="20" colspan="16" align="center"><img src="images/warning.gif" border="0">&nbsp;<h4 style="color:#FF0000">Already value Exists on that Date...</h4></td>
			</tr>
<?php endif; unset($_from); ?>  
		
			</table>
			<div align="center">
                           <button class="btn btn-primary" type="submit" id="addEB" onClick="validate_and_submit()">ADD EB</button>
							<button class="btn btn-white" type="button" id="back" onClick="history.go(-1)">CANCEL</button>
     </div>
	 </form>
	 
	<?php endif; ?>                            

</td>
</tr>
</table>
</body>
</form>

	
                              </div>
				            </div>
                    </div>
                </div>
            </div>
        </div>
	</form>
		
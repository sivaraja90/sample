<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>{if $OverallSiteTitle neq ''}{$OverallSiteTitle}{else}ARKA -::- {/if} {$AddSiteTitle}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
{$IncludeJS}
{$IncludeCSS}
{literal}

<style>
div.fixed {
    position: fixed;
    bottom: 0;
    right: 0;
    width: 300px;
    border: 3px solid #73AD21;
}
</style>
<script>
function csearch() {
  var str =	document.getElementById("customersearch").value;

  if (str=="") {
    document.getElementById("customersearch").value="";
    return;
  }
  FormName		= document.cussearch;
  FormName.action ='customer_detail_view.php?c_search='+str;
  FormName.submit();

}

 function msearch() {
  var str =	document.getElementById("mobilesearch").value;
//  alert(str);
  if (str=="") {
    document.getElementById("mobilesearch").value="";
    return;
  }
  FormName		= document.mobsearch;
  FormName.action ='customer_detail_view.php?m_search='+str;
  FormName.submit();

}
function numericFilter(data)
{
   data.value = data.value.replace(/[^.0-9^.+,-]/ig,"");
}
function text_filter(data)
{
   data.value = data.value.replace(/[^ .a-z]/ig,"");

}
</script>
{/literal}
    <!-- Bootstrap 3.3.5 -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
	<body class="hold-transition skin-blue sidebar-mini" onLoad="doOnLoad();">

    <div class="wrapper">
      <header class="main-header">

        <!-- Logo -->
        <a href="dashboard.php" class="logo">
		<span class="logo-mini"><img src="images/logo_icon.png" height="43px;"/></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img src="images/logo1.png" width="234px" height="80px"  style="margin-left:-20px;" alt="Arka Logo"/></span>
          <!-- mini logo for sidebar mini 50x50 pixels -->
        <!--  <span class="logo-element"><img src="./images/logo_icon.png" border="0"  style="margin-left:-20px;" alt="Arka Logo"></span>
          <!-- logo for regular state and mobile devices -->
         <!-- <span class="logo-lg"><img src="./images/logo1.png" width="234px" height="80px" alt="Arka Logo"></span>-->
        </a>


        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->

		<!--  <form name="mobsearch" method="post" onSubmit="msearch()" />
					<div style="float:center; margin: 15px 100px -730px 39%; position:absolute;">
	 <input type="text" id="mobilesearch" name="mobilesearch" Placeholder=" Mobile No" size="20" maxlength="10" autoComplete="Off" onKeyUp="numericFilter(this);"/>&nbsp;&nbsp;OR&nbsp;&nbsp;</div></form>
	 <form name="cussearch" method="post" onSubmit="csearch()" />
					<div style="float:right; margin:15px 280px -830px 55%; position:absolute;"><input type="text" id="customersearch" name="customersearch" onKeyUp="text_filter(this);" Placeholder=" Search Company" size="25" autoComplete="Off" />&nbsp;&nbsp;<a href="#"><img src="images/icons/toolbar_find.png"></a></div></form>-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">

            <span class="sr-only">Toggle navigation</span>


          </a>
		   <div id="wrapper">



		</div>

          <div class="navbar-custom-menu">


            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->


              <li class="dropdown messages-menu">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">{$ACnt.0.accept}</span>
                </a>
				{if $ACnt.0.accept neq 0}

                <ul class="dropdown-menu">
                  <li class="header">You have {$ACnt.0.accept} messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
					  {literal}
					<script>
					function EnqId()
					{
					var Enq_Id = document.getElementById('enquiry_id').value;
					$enq_id = btoa(Enq_Id);
					location.href = "enquiry_detail_view.php?enquiry_id="+$enq_id;
					}
					</script>
					{/literal}
                  		{foreach from=$Accept item=Select}
				  		<input type="hidden" id="enquiry_id" name="enquiry_id" value="{$Select.enquiry_id}" />
						<a href ="javascript:EnqId()">
                          <i class="fa fa-users text-aqua"></i>{$Select.assign_to}({$Select.enquiry_id})
                        </a>
						{/foreach}
                      </li>
					  <!-- end message -->
                    </ul>
                  </li>
                  <li class="footer"><a href="enquiry_list.php?acceptstatus=0">See All Messages</a></li>
                </ul>
				{/if}
              </li>

              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">{$PendingCnt.0.count}</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have {$PendingCnt.0.count} notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
					  {literal}
					<script>
					function EnqId()
					{
					var Enq_Id = document.getElementById('enquiry_id').value;
					$enq_id = btoa(Enq_Id);
					location.href = "enquiry_detail_view.php?enquiry_id="+$enq_id;
					}
					</script>
					{/literal}
                  		{foreach from=$Enquiry item=Select}
				  		<input type="hidden" id="enquiry_id" name="enquiry_id" value="{$Select.enquiry_id}" />
						<a href ="javascript:EnqId()">
					  	<i class="fa fa-users text-aqua"></i>{$Select.company_name}({$Select.enquiry_id})
                        </a>
						{/foreach}
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="enquiry_list.php?linkvalue=Pending">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
<!--              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                     inner menu: contains the actual data 
                    <ul class="menu">
                      <li> Task item 
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li> end task item 
                      <li> Task item 
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li> end task item 
                      <li> Task item 
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li> end task item 
                      <li> Task item 
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">

                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>

                            </div>
                          </div>
                        </a>
                      </li> end task item 
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>-->

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  {if $smarty.session.Image neq ''}
				   		<img src="images/user/{$smarty.session.Image}" class="user-image" alt="User Image">
				  {else}
				  		{if $smarty.session.Sex eq 'Male'}
				   			<img src="images/avatar5.png" class="user-image" alt="User Image">
						{else}
							<img src="images/avatar3.png" class="user-image" alt="User Image">
						{/if}
				  {/if}
                  <span class="hidden-xs">{$smarty.session.UserName}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
				  	  {if $smarty.session.Image neq ''}
				   		<img src="images/user/{$smarty.session.Image}" class="img-circle" alt="User Image">
				  {else}
				  		{if $smarty.session.Sex eq 'Male'}
				   			<img src="images/avatar5.png" class="img-circle" alt="User Image">
						{else}
							<img src="images/avatar3.png" class="img-circle" alt="User Image">
						{/if}
				  {/if}
                    <p>
                     {$smarty.session.UserName}- {$smarty.session.DESIGNATION}
                      <small>Member since {$smarty.session.CDate|date_format}</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="./profile.php" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="./logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>

                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>

      </header>

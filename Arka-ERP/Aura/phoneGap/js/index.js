/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
var app = {
    // Application Constructor
    initialize: function() {
        this.bindEvents();
    },
    // Bind Event Listeners
    //
    // Bind any events that are required on startup. Common events are:
    // 'load', 'deviceready', 'offline', and 'online'.
    bindEvents: function() {
        document.addEventListener('deviceready', this.onDeviceReady, false);
    },
    // deviceready Event Handler
    //
    // The scope of 'this' is the event. In order to call the 'receivedEvent'
    // function, we must explicitly call 'app.receivedEvent(...);'
    onDeviceReady: function() {
        app.receivedEvent('deviceready');
    },
    // Update DOM on a Received Event
    receivedEvent: function(id) {
        var parentElement = document.getElementById(id);
        var listeningElement = parentElement.querySelector('.listening');
        var receivedElement = parentElement.querySelector('.received');

        listeningElement.setAttribute('style', 'display:none;');
        receivedElement.setAttribute('style', 'display:block;');

        console.log('Received Event: ' + id);
    }
};




/*********************************Altered Code by Arka Team ************************************************/

//var hostPrefix="http://192.168.1.9/";
var hostPrefix="http://192.168.1.222/Aura/index.php/";

        $(document).ready(function() {		
		$("#loginButton").click(function(){

				var userName = $("#userName").val();
				var password = $("#password").val();
				
				if(userName =="")
				{
					alert("Please fill User Name");	
					return false;
				}
				else if(password =="")
				{
					alert("Please fill Password");
					return false;
				}
				

				menuClick("menuPage");				
             /* FormName= document.frmAddPanelEntry;
  			  FormName.method= "POST";
              FormName.submit(); */
			                 });
				  
        
		 });
		
		
		
            function menuClick(nMode)
            {
                
                $(':mobile-pagecontainer').pagecontainer('change', '#menuPage', {
                    transition: 'none',
                    changeHash: true,
                    reverse: true,
                    //showLoadMsg: true,
                });
                
                newsLoc = nMode;
                var myTitle = getNewsLocationTitle(nMode);
                $('#titleName').text(myTitle);
                $('#titleName1').text(myTitle);
                $('#newsListUL').html('');
                
                //displayNews(nMode);
               // readAjaxJson(nMode);
            }		


  $(document).ready(function() {		
		$("#externalCall").click(function(){										  
              													
				$.ajax({
				url: hostPrefix+"phoneGap/index.php",
				beforeSend:function()
				{
				//alert("before send")
				},
				
				success: function(result)
				{
				//alert(result);					
			    
                },
                error: function(err)
				{
				//alert("on failure");					
			    
                }				
				});						
			                 });
				  
        
		 });

function turbineMenuClick(category,cusId)
{
/*	alert(category);
	
			$.ajax({
				url: hostPrefix+"PG_listTurbines/index/"+category+"/"+cusId,
				beforeSend:function()
				{
				alert("before send")
				},
				
				success: function(result)
				{
			    alert(result);					
			    
                },
                error: function(err)
				{
				alert("on failure");					
			    
                }				
				});	*/
			
			
			

                
                $(':mobile-pagecontainer').pagecontainer('change', '#pageone', {
                    transition: 'none',
                    changeHash: true,
                    reverse: true,
                    //showLoadMsg: true,
                });
                
                //newsLoc = nMode;
                var myTitle = "List of Turbines - "+category;
                $('#titleName').text(myTitle);
              //  $('#titleName1').text(myTitle);
                $('#newsListUL').html('');
                
                //displayNews(nMode);
                readAjaxJson(category,cusId);

	
}



 function readAjaxJson(category,cusId)
            {
                
/*                spinnerplugin.show({
                        overlay: true,    // defaults to true
                        timeout: 100,       // defaults to 0 (no timeout)
                        fullscreen: true  // defaults to false
                    });*/
                
                jsonURL = hostPrefix+"PG_listTurbines/index/"+category+"/"+cusId
                //alert("call ajax json");
                $.ajax({

                    url:jsonURL,
                    dataType:"text",
                    async: false,
                    timeout:1000,
                    success:function(data){
                        json = $.parseJSON(data);
                        //alert('json loaded');
                        
                        var tempDiv = document.createElement('div');
                        var out = [];
						var divStr = "";
						$('#newsListUL').empty();
						//alert('empty='+ $('#newsListUL').text());
						
                        $.each(json, function(index, newsLocation){
                            $.each(newsLocation, function(key, value){
                                
                                    //alert('news id='+newsLocation[key].newsID);

                                    //var imgSrc = newsLocation[key].newsImg;                    
                                    
									divStr = '<li data-icon="carat-r" >';
									
									/*if (imgSrc!='') {
										divStr += '<img src="'+ newsLocation[key].newsImg +'" class="liImg" width="60" height="60" />';
									}*/
									if(category=="HTSC")
									{
									divStr += '<a href=# data-transition=none onclick=javascript:showTurbinesList('+newsLocation[key].turbine_htsc_no+',"'+category+'")>';
									divStr += '<p style="white-space:normal; font-weight:bold; font-size:14px;"> HTSC No : ' + newsLocation[key].turbine_htsc_no +'</p></a>';
									}
									else
									{	
									divStr += '<a href=# data-transition=none onclick=javascript:showTurbinesList('+newsLocation[key].turbine_htsc_no+',"'+category+'")>';
									divStr += '<p style="white-space:normal; font-weight:bold; font-size:14px;"> Area Name : ' + newsLocation[key].site_name +'</p></a>';
									}
									
									//divStr += '<p class="ui-li-aside">'+ newsLocation[key].newsDate +'</p></li>';
									
									out.push(divStr);
                                    
                                });
                            });

                                var upDateTime = "Updated on : "+localStorage.getItem("updateDateTime")
                                $('#upateDateTime').html(upDateTime);
                                $('#newsListUL').append(out.join('')).listview('refresh');
                                spinnerplugin.hide();
                          
                        localStorage.setItem("updateDateTime",GetTodayDate());
                    },
                    error:function(err){
                            alert('time out');
                    }
                    
                });
              //return true;
            }




function showTurbinesList(nID,category) {
        
/*        spinnerplugin.show({
            overlay: true,    // defaults to true
            timeout: 100,       // defaults to 0 (no timeout)
            fullscreen: true  // defaults to false
        });*/
        
        
        $(':mobile-pagecontainer').pagecontainer('change', '#pagetwo', {
            transition: 'none',
            changeHash: true,
            reverse: true
            //showLoadMsg: true
        });
		 $('#titleName1').text(category+" Wise Turbines");
		
		
		        jsonURL = hostPrefix+"PG_listTurbines/extractHTSCTurbines/"+category+"/"+nID
                //alert("call ajax json");
                $.ajax({

                    url:jsonURL,
                    dataType:"text",
                    async: false,
                    timeout:1000,
                    success:function(data)
					{
						alert(data);
					
      $.each(json, function(index, TurbineList){
            $.each(TurbineList, function(key, value){
                //alert("newLocation Nid="+newsLocation[key].newsID+"//nid="+nID);
                if (TurbineList[key].newsID==nID) {
                    newsContentStr = '<h2 style="line-height:25px;">'+newsLocation[key].groupOfTurbineList+'</h2>';
                    newsContentStr += '<p>'+newsLocation[key].groupOfTurbineList+'</p>';
                    newsContentStr += '<p>'+newsLocation[key].groupOfTurbineList+'</p>';
                    $('#jsonNewsContent').html(newsContentStr);
                                    
                    localStorage.setItem("newsId",nID);
                    localStorage.setItem("newsTitle",newsLocation[key].newsTitle);
                    localStorage.setItem("newsLoc",newsLoc);
                }      
            });
      }); 
      
      spinnerplugin.hide();  						
						
					},
                    error:function(err){
                            alert('time out');
                    }
                    
                });
		
		
		
		
                  
    }
<!DOCTYPE html>
<?php 
session_start();
?>
<html>
	<head>
		<title>verify_information</title>
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
		<link href="default.css" rel="stylesheet" type="text/css" media="all" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script> 
		function move_panel()
		{
			<?php 
					$endTime=time();
					$_SESSION["endTime"]=$endTime;
				?>
			 $("#panel_knowledge").slideToggle("swing");
			    $("#iframe_body_two").hide(500);
			    $("#iframe_body").show(500);
			    $("#iframe_body").css("background-color","#DC1E2F");
			    $("#iframe_body_two").css("background-color","white");
			    $("#iframe_body").hide(500);
			    $("#iframe_body_two").show(500);	 
		    
		    
		}
		
		$(document).ready(function(){
		  $("#flip_information").click(function(){
		    $("#panel_information").slideToggle("swing");
		
		//        	$("#iframe_body_two").hide(1500);
		// 	    $("#iframe_body").show(1500);	
		// 		$("#iframe_body").css("background-color","#02A81B");
		// 	    $("#iframe_body_two").css("background-color","white");
		// 	    $("#iframe_body").hide(1500);
		// 	    $("#iframe_body_two").show(1500);
			    
		  });
		  
		  $("#flip_severity").click(function(){
			    $("#panel_severity").slideToggle("swing");
		
		// 	    $("#iframe_body_two").hide(1500);
		// 	    $("#iframe_body").show(1500);
		// 	    $("#iframe_body").css("background-color","#D76203");
		// 	    $("#iframe_body_two").css("background-color","white");
		// 	    $("#iframe_body").hide(1500);
		// 	    $("#iframe_body_two").show(1500);
			    
			  });
		  $("#flip_literacy").click(function(){
			    $("#panel_literacy").slideToggle("swing");
		
		// 	    $("#iframe_body_two").hide(1500);
		// 	    $("#iframe_body").show(1500);
		// 	    $("#iframe_body").css("background-color","#6650B5");
		// 	    $("#iframe_body_two").css("background-color","white");
		// 	    $("#iframe_body").hide(1500);
		// 	    $("#iframe_body_two").show(1500);
			    
			  });
		  $("#flip_knowledge").click(function(){
			    $("#panel_knowledge").slideToggle("swing");
		
		// 	    $("#iframe_body_two").hide(1500);
		// 	    $("#iframe_body").show(1500);
		// 	    $("#iframe_body").css("background-color","#DC1E2F");
		// 	    $("#iframe_body_two").css("background-color","white");
		// 	    $("#iframe_body").hide(1500);
		// 	    $("#iframe_body_two").show(1500);	    
			  });
		
		});
		function loadXMLDoc(dname)
		{
		if (window.XMLHttpRequest)
		  {
		  xhttp=new XMLHttpRequest();
		  }
		else
		  {
		  xhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xhttp.open("GET",dname,false);
		xhttp.send();
		return xhttp.responseXML;
		}



		function ShowContent(val)
		{
			//var v=val.toString();
			var name=document.getElementById(val).innerHTML;
			xmlDoc=loadXMLDoc("./bph.xml");
			x=xmlDoc.getElementsByTagName(name)[0].childNodes[0];	
			
			//if(val==0)
			//{
				z=get_firstChild(xmlDoc.documentElement);//definition
				var iterator=val;
				while(iterator>0)
				{
					z=get_nextSibling(z);
					iterator--;
				}
					
				z2=get_firstChild(z);//NewLineBreak1
				//z3=xmlDoc.getElementsByTagName(z2.nodeName)[0].childNodes[0];//getting node via name
				//document.getElementById("rightFrame").innerHTML="<p>".concat(z.nodeName).concat(" ").concat(z2.childNodes[0].nodeValue).concat("</p>");
				var str="\0";
				//z3=z.childNodes;
				if(z2==null)
					str=x.data;
				while(z2!=null)
				//var i=0;
				//for(i=0;i<z3.length;i++)
				{		
					//alert("In while!");
					prevName=z2.nodeName;
					//alert(prevName);
					//alert(z3.length);
					str=str.concat(z2.childNodes[0].nodeValue).concat("<br><br>");
					//alert(str);
					z2=get_nextSibling(z2);
					//alert(z2.nodeName);
					//str=str.concat(z2.childNodes[0].nodeValue);
					if(z2==null)
						break;
					
					/*if(prevName==z2.nodeName)
					{
						break;
						alert("Breaking Out");
					}*/	
					//alert("Going for next iteration!");									
				}
				//alert("Out of while");
				document.getElementById("rightFrame").innerHTML="<h2 style=\"margin-left:1%;\">".concat(z.nodeName).concat("</h2><p><h3 style=\"margin-left:2%; margin-right:2%;\">").concat(str).concat("</h3><p>");		
			//}
			//else
				//document.getElementById("rightFrame").innerHTML="<h2 style=\"margin-left:5px;\">".concat(val).concat(" ").concat(name).concat("</h2><p><h3 style=\"margin-left:5px; margin-right:5px;\">").concat(x.data).concat("</h3><p>");
		}
		
		/*function ShowContent(val)
		{
			var v=val.toString();
			var name=document.getElementById(val).innerHTML;
			xmlDoc=loadXMLDoc("./bph.xml");
			x=xmlDoc.getElementsByTagName(name)[0].childNodes[0];
			//y=x.firstChild;
			char str="\0";
			if(x.childNodes.length==0)
			{  
				document.getElementById("rightFrame").innerHTML="<h2 style=\"margin-left:5px;\">".concat(name).concat("</h2><p><h3 style=\"margin-left:5px; margin-right:5px;\">").concat(x.data).concat("</h3><p>");
			}
			else
			{
				for(i=0;i<x.childNodes.lenght;i++)
				{
					str=str.concat(x.childNodes[i].childNodes[0].nodeValue.concat("<br>");
				}
				document.getElementById("rightFrame").innerHTML="<h2 style=\"margin-left:5px;\">".concat(name).concat("</h2><p><h3 style=\"margin-left:5px; margin-right:5px;\">").concat(x.data).concat("</h3><p>");
			}					
		}*/

				
		</script>
	</head>

	<body onload="move_panel()">
		<?php 
	// 	echo $_POST["usrname"];
// 		echo $_POST["score_1"];
		require_once 'databaseInterfaceService.php';
		$avctDB=new InterfaceService();
		// 	$avctDB->getAllInterface();
		
// 		$avctDB->insertSsResponses($_POST["score_1"],$_SESSION['emId'],'ss1');
// 		$avctDB->insertSsResponses($_POST["score_2"],$_SESSION['emId'],'ss2');
// 		$avctDB->insertSsResponses($_POST["score_3"],$_SESSION['emId'],'ss3');
// 		$avctDB->insertSsResponses($_POST["score_4"],$_SESSION['emId'],'ss4');
// 		$avctDB->insertSsResponses($_POST["score_5"],$_SESSION['emId'],'ss5');
// 		$avctDB->insertSsResponses($_POST["score_6"],$_SESSION['emId'],'ss6');
// 		$avctDB->insertSsResponses($_POST["score_7"],$_SESSION['emId'],'ss7');	
		
		
		$avctDB->insertBPHResponses($_POST["ques1"],$_SESSION['emId'],'bph1');
		$avctDB->insertBPHResponses($_POST["ques2"],$_SESSION['emId'],'bph2');
		$avctDB->insertBPHResponses($_POST["ques3"],$_SESSION['emId'],'bph3');
		$avctDB->insertBPHResponses($_POST["ques4"],$_SESSION['emId'],'bph4');
		$avctDB->insertBPHResponses($_POST["ques5"],$_SESSION['emId'],'bph5');
		$avctDB->insertBPHResponses($_POST["ques6"],$_SESSION['emId'],'bph6');
		$avctDB->insertBPHResponses($_POST["ques7"],$_SESSION['emId'],'bph7');
		$avctDB->insertBPHResponses($_POST["ques8"],$_SESSION['emId'],'bph8');
		$avctDB->insertBPHResponses($_POST["ques9"],$_SESSION['emId'],'bph9');
		$avctDB->insertBPHResponses($_POST["ques10"],$_SESSION['emId'],'bph10');
		$avctDB->insertBPHResponses($_POST["ques11"],$_SESSION['emId'],'bph11');
		$avctDB->insertBPHResponses($_POST["ques12"],$_SESSION['emId'],'bph12');
		$avctDB->insertBPHResponses($_POST["ques13"],$_SESSION['emId'],'bph13');
		$avctDB->insertBPHResponses($_POST["bph_14"],$_SESSION['emId'],'bph14');
		$avctDB->insertBPHResponses($_POST["bph_15"],$_SESSION['emId'],'bph15');
		$avctDB->insertBPHResponses($_POST["bph_16"],$_SESSION['emId'],'bph16');
		$avctDB->insertBPHResponses($_POST["bph_17"],$_SESSION['emId'],'bph17');
		$avctDB->insertBPHResponses($_POST["bph_18"],$_SESSION['emId'],'bph18');
		$avctDB->insertBPHResponses($_POST["bph_19"],$_SESSION['emId'],'bph19');
		$avctDB->insertBPHResponses($_POST["bph_20"],$_SESSION['emId'],'bph20');
		
		
		// 		echo 'start time is ';
		// 		echo $_SESSION["strtTime"];
		// 		echo 'end time is ';
		// 		echo $_SESSION["endTime"];
		$sessionTime=$_SESSION["endTime"]-$_SESSION["strtTime"];
		$avctDB->insertTimeFields($_SESSION["emId"], $sessionTime,'Total_Survey_time');
		$sessionTime/=60;//minutes
		// 		echo 'hello';
		// 		echo $sessionTime;
		// 		echo 'minutes is the time of session';
		// 		echo $_SESSION["emId"];
		$avctDB->insertSessionTime($_SESSION["emId"],$sessionTime,'global_clk');
		
		
		
		
		$avctDB->closeConnection();
		session_destroy(); 
		?>
		
		
		
		<!-- <hr color="red"> -->
		<div style="color:white;">a</div>
		<div id="header-wrapper">
			<div id="header-wrapper2">
				<div id="header" class="container">
					<div id="logo">
						<h1><a href="index.html"><span>AVCT</span></a></h1>
					</div>
					<div id="menu">
						<ul>
							<li><a href="#" accesskey="1" title="" id="flip_information" style="background-color:#02A81B;border-left:1px solid #FFFFFF;" >1.Information</a></li>
							<li><a href="#" accesskey="2" title="" id="flip_severity" style="background-color: #D76203;border-left:1px solid #FFFFFF;">2.Assessment </a></li>
							<li><a href="#" accesskey="3" title="" id="flip_literacy" style="background-color: #6650B5;border-left:1px solid #FFFFFF;">3.Symptom</a></li>
							<li><a href="#" accesskey="4" title="" id="flip_knowledge" style="background-color: #DC1E2F;border-left:1px solid #FFFFFF;border-right:1px solid #FFFFFF;" >4.Education</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		
		<div id="panel_information" style="height: 4em;"><p style="display: inline-block;font-size:2.5em;text-transform: uppercase;font-weight: 400;color: #FFF;white-space:pre;">Step 1: Login Information</p></div>
		<div id="panel_severity" style="height: 4em;"><p style="display: inline-block;font-size:2.5em;text-transform: uppercase;font-weight: 400;color: #FFF;white-space:pre;">Step 2: Health Literacy Test</p></div>
		<div id="panel_literacy" style="height: 4em;"><p style="display: inline-block;font-size:2.5em;text-transform: uppercase;font-weight: 400;color: #FFF;white-space:pre;">Step 3: Severity Symptoms Score</p></div>
		<div id="panel_knowledge" style="height: 4em;"><p style="display: inline-block;font-size:2.5em;text-transform: uppercase;font-weight: 400;color: #FFF;white-space:pre;">Step 4: Education Reference</p></div>
		
		<hr>					
		<div id="iframe_body_two" style="width:100%; height:100px; background-color: white 	;padding-top: 50px; padding-left: 5%;"><!-- height:400px; -->
			
			
		<!-- 	<h2 style="margin-left: 0;">Pleae complete the Questionnaire</h2> --
			<h3 style="margin-left: 0;font-weight: 700;">Please complete the BPH Knowledge Questionnaire</h3>
			
			<div id="div_system_overview">
				<div align="center" style="width:90%;">
					<br>
		
		
					<div></div>
				<br>
				<!-- ======================================================================= -->
<!-- 				<form action="verify_bph_finish.php" method="post"> -->
<!-- 					<br> -->
					<!-- table style="width: 95;" class="auss"> -->
						
						
		<!-- 				<tr> -->
		<!-- 					<th colspan="2"><h3>BPH knowledge questionnaire</h3></th> -->
		<!-- 				</tr> -->
						
<!-- 						<tr> -->
							<!-- td style="width:45%;"-->
		<!-- 						<h4>Please select True/False for ques 1-5:</h4> -->
								<!-- p class="main_center" style="padding-left:2%;font-weight:700;">Please select True/False/Not Sure for ques 1-5:</p> -->
<!-- 							</td> -->
							
							<!--  <td style="text-align: center;">
								<div style="width:33%;float: left;"><p class="main_center" style="padding-left:2%;padding-top:15%;font-weight:700;text-align: center;">True</p></div>
		<!-- 						<div style="width:33%;height:100%;float: left; background-color: #C1C1C1;"><h4>False</h4></div> -->
		<!-- 						<div style="width:33%;float: left;"><h4>Not Sure</h4></div>	-->
								<!-- div style="width:33%;height:100%;float: left;background-color: #C1C1C1;"><p class="main_center" style="padding-left:2%;padding-top:15%;font-weight:700;text-align: center;">False</p></div>
								<div style="width:33%;float: left;"><p class="main_center" style="padding-left:2%;padding-top:15%;font-weight:700;text-align: center;">Not Sure</p></div-->			
								
<!-- 							</td> -->
<!-- 						</tr>	 -->
						
<!-- 						<tr> -->
<!-- 							<td> -->
		<!-- 						<strong>1. The prostate is a small gland that helps purify the urine.</strong> -->
<!-- 								<p class="main_center">1. The prostate is a small gland that helps purify the urine.</p> -->
<!-- 							</td> -->
<!-- 							<td> -->
									<!-- div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques1" value="true"> -->
<!-- 									</div> -->
									<!-- iv style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques1" value="false"> -->
<!-- 									</div> -->
									<!-- div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques1" value="none"> -->
<!-- 									</div>
									<input type="radio" name="ques1" value="null" checked="checked" style="display: none;">
<!-- 							</td> -->
<!-- 						</tr> -->
						
						
								
<!-- 						<tr> -->
<!-- 							<td> -->
		<!-- 						<strong>2. Symptoms of benign prostatic hyperplasia (BPH) can become less bothersome over time without treatment.</strong> -->
<!-- 								<p class="main_center">2. Symptoms of benign prostatic hyperplasia (BPH) can become less bothersome over time without treatment. -->
<!-- 								</p> 
<!-- 							</td> 
<!-- 							<td> 
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques2" value="true"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques2" value="false"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques2" value="none"> -->
<!-- 									</div> --
									<input type="radio" name="ques2" value="null" checked="checked" style="display: none;">
<!-- 							</td> -->
<!-- 						</tr> --
<!-- 						<tr> --
<!-- 							<td> --
		<!-- 						<strong>3. An enlarged prostate gland can cause a change in urination, such as a weak urine stem.</strong> -->
<!-- 								<p class="main_center">3. An enlarged prostate gland can cause a change in urination, such as a weak urine stream. -->
<!-- 								</p> --
<!-- 							</td> --
<!-- 							<td> --
								<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques3" value="true"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques3" value="false"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques3" value="none"> -->
<!-- 									</div> --
									<input type="radio" name="ques3" value="null" checked="checked" style="display: none;">
<!-- 							</td> -->
<!-- 						</tr> -->
<!-- 						<tr> -->
<!-- 							<td> -->
		<!-- 						<strong>4. Men bothered by uncomplicated BPH generally have a choice between prostate surgery and simply following their condition with their doctor ("watchful waiting".</strong> -->
<!-- 								<p class="main_center">4. Men bothered by uncomplicated BPH generally have a choice between prostate surgery and simply following their condition with their doctor ("watchful waiting"). -->
<!-- 								</p> -->
<!-- 							</td> -->
<!-- 							<td> -->
								<!-- div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques4" value="true"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques4" value="false"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques4" value="none"> -->
<!-- 									</div> --
									<input type="radio" name="ques4" value="null" checked="checked" style="display: none;">
<!-- 							</td> -->
<!-- 						</tr> -->
<!-- 						<tr> -->
<!-- 							<td> -->
		<!-- 						<strong>5. Most men with benign prostatic hyperplasia (BPH) who decide against surgery are treated with drugs.</strong> -->
<!-- 								<p class="main_center">5. Most men with benign prostatic hyperplasia (BPH) who decide against surgery are treated with drugs.</p> -->
<!-- 							</td> -->
<!-- 							<td> --
								<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques5" value="true"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques5" value="false"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques5" value="none"> -->
<!-- 									</div> --
									<input type="radio" name="ques5" value="null" checked="checked" style="display: none;">
<!-- 							</td> -->
<!-- 						</tr> -->
<!-- 						<tr> -->
<!-- 							<td> -->
		<!-- 						<strong>6. When a man cannot urinate at all due to a large prostate, a tube must be passed through the penis into the bladder to drain the urine.</strong> -->
<!-- 								<p class="main_center">6. When a man cannot urinate at all due to a large prostate, a tube must be passed through the penis into the bladder to drain the urine. -->
<!-- 								</p> -->
<!-- 							</td> -->
<!-- 							<td> -->
								<!-- div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques6" value="true"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques6" value="false"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques6" value="none"> -->
<!-- 									</div> --
									<input type="radio" name="ques6" value="null" checked="checked" style="display: none;">
<!-- 							</td> -->
<!-- 						</tr> -->
<!-- 						<tr> -->
<!-- 							<td> -->
		<!-- 						<strong>7. The standard prostate operation BPH lowers your future risk of prostate cancer.</strong> -->
<!-- 								<p class="main_center">7. The standard prostate operation BPH lowers your future risk of prostate cancer. -->
<!-- 								</p> -->
<!-- 							</td> -->
<!-- 							<td> -->
								<!-- div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques7" value="true"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques7" value="false"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques7" value="none"> -->
<!-- 									</div> --
									<input type="radio" name="ques7" value="null" checked="checked" style="display: none;">
<!-- 							</td> -->
<!-- 						</tr> -->
<!-- 						<tr> -->
<!-- 							<td> -->
		<!-- 						<strong>8. Men with BPH who choose not to have prostate surgery should see their doctors once a year or so to check on the condition of their prostate.</strong> -->
<!-- 								<p class="main_center">8. Men with BPH who choose not to have prostate surgery should see their doctors once a year or so to check on the condition of their prostate. -->
<!-- 								</p> -->
<!-- 							</td> -->
<!-- 							<td> -->
								<!-- div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques8" value="true"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques8" value="false"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques8" value="none"> -->
<!-- 									</div> --
									<input type="radio" name="ques8" value="null" checked="checked" style="display: none;">
<!-- 							</td>					 -->
<!-- 						</tr> -->
						
<!-- 						<tr> -->
<!-- 							<td> -->
		<!-- 						<strong>9. Most men have persistent trouble with dripping urine or wet pants after prostate surgery.</strong> -->
<!-- 								<p class="main_center">9. Most men have persistent trouble with dripping urine or wet pants after prostate surgery. -->
<!-- 								</p> -->
<!-- 							</td> -->
<!-- 							<td> --
								<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques9" value="true"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques9" value="false"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques9" value="none"> -->
<!-- 									</div> --
									<input type="radio" name="ques9" value="null" checked="checked" style="display: none;">
<!-- 							</td> -->
<!-- 						</tr> -->
						
<!-- 						<tr> -->
<!-- 							<td> -->
		<!-- 						<strong>10. Some men who have prostate surgery for BPH eventually need another operation because the prostate tissue grows back over time.</strong> -->
<!-- 								<p class="main_center">10. Some men who have prostate surgery for BPH eventually need another operation because the prostate tissue grows back over time. -->
<!-- 								</p> -->
<!-- 							</td> -->
<!-- 							<td> -->
								<!-- div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques10" value="true"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques10" value="false"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques10" value="none"> -->
<!-- 									</div> --
									<input type="radio" name="ques10" value="null" checked="checked" style="display: none;">
<!-- 							</td> -->
<!-- 						</tr> -->
						
						
						
<!-- 						<tr> -->
<!-- 							<td> -->
		<!-- 						<strong>11. Most sexually active men have difficulty getting sexual erections after surgery for benign prostatic hyperplasia (BPH).</strong> -->
<!-- 								<p class="main_center">11. Most sexually active men have difficulty getting sexual erections after surgery for benign prostatic hyperplasia (BPH). -->
<!-- 								</p> -->
<!-- 							</td> -->
<!-- 							<td> --
								<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques11" value="true"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques11" value="false"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques11" value="none"> -->
<!-- 									</div> --
									<input type="radio" name="ques11" value="null" checked="checked" style="display: none;">
<!-- 							</td> -->
<!-- 						</tr> -->
						
<!-- 						<tr> -->
<!-- 							<td> -->
		<!-- 						<strong>12. Retrograde ejaculation means the semen goes into the bladder during a sexual climax.</strong> -->
<!-- 								<p class="main_center">12. Retrograde ejaculation means the semen goes into the bladder during a sexual climax. -->
<!-- 								</p> -->
<!-- 							</td> -->
<!-- 							<td> -->
								<!-- div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques12" value="true"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques12" value="false"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques12" value="none"> -->
<!-- 									</div> --
									<input type="radio" name="ques12" value="null" checked="checked" style="display: none;">
<!-- 							</td> -->
<!-- 						</tr> -->
						
<!-- 						<tr> -->
<!-- 							<td> 
		<!-- 						<strong>13. Only a few men who have prostate surgery have retrograde ejaculation after the operation.</strong> -->
<!-- 								<p class="main_center">13. Only a few men who have prostate surgery have retrograde ejaculation after the operation. -->
<!-- 								</p> -->
<!-- 							</td> -->
<!-- 							<td> -->
								<!-- div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques13" value="true"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques13" value="false"> -->
<!-- 									</div> --
									<div style="width:33.3%;float:left; background-color: white;" align="center">
<!-- 										<input type="radio" name="ques13" value="none"> -->
<!-- 									</div> --
									<input type="radio" name="ques13" value="null" checked="checked" style="display: none;">
<!-- 							</td> -->
<!-- 						</tr> -->
									
<!-- 						<tr> -->
<!-- 							<td colspan="2"> 
		<!-- 						<strong>14. When your doctor checks the prostate gland with a gloved finger, he or she can:</strong> -->
<!-- 								<p class="main_center">14. When your doctor checks the prostate gland with a gloved finger, he or she can: -->
<!-- 									<select name="bph_14" class="bph"> -->
<!-- 									<option value="nothing"></option> -->
<!-- 									<option value="Feel some prostate cancers">Feel some prostate cancers</option> -->
<!-- 									<option value="Check the kidneys">Check the kidneys</option> -->
<!-- 									<option value="Both of the above">Both of the above</option> -->
<!-- 									<option value="Not sure">Not sure</option> -->
<!-- 									</select> -->
<!-- 								</p>  -->
<!-- 							</td> -->
<!-- 						</tr> -->
						
<!-- 						<tr> -->
<!-- 							<td colspan="2"> -->
		<!-- 						<strong>15. Benign prostatic hyperplasia (BPH)ocassionally causes:</strong> -->
<!-- 								<p class="main_center">15. Benign prostatic hyperplasia (BPH)ocassionally causes: -->
								
<!-- 								<select name="bph_15" class="bph"> -->
<!-- 								<option value="nothing"></option> -->
<!-- 								<option value="Damge to the kidneys">Damge to the kidneys</option> -->
<!-- 								<option value="Damage to the bladder">Damage to the bladder</option> -->
<!-- 								<option value="Both of the above">Both of the above</option> -->
<!-- 								<option value="Not sure">Not sure</option> -->
<!-- 								</select></p>  -->
<!-- 							</td> -->
<!-- 						</tr> -->
						
<!-- 						<tr> -->
<!-- 							<td colspan="2"> -->
		<!-- 						<strong>16. Men who have benign prostatic hyperplasia (BPH)have a higher risk of which of the following conditions:</strong> -->
<!-- 								<p class="main_center">16. Men who have benign prostatic hyperplasia (BPH)have a higher risk of which of the following conditions: -->
								
<!-- 								<select name="bph_16" class="bph"> -->
<!-- 								<option value="nothing"></option> -->
<!-- 								<option value="Prostate cancer">Prostate cancer</option> -->
<!-- 								<option value="Urinary tract infections">Urinary tract infections</option> -->
<!-- 								<option value="Both of the above">Both of the above</option> -->
<!-- 								<option value="Not sure">Not sure</option> -->
<!-- 								</select></p>  -->
<!-- 							</td> -->
<!-- 						</tr> -->
						
<!-- 						<tr> -->
<!-- 							<td colspan="2"> -->
		<!-- 						<strong>17. The main purpose of surgery for benign prostatic hyperplasia (BPH)is:</strong> -->
<!-- 								<p class="main_center">17. The main purpose of surgery for benign prostatic hyperplasia (BPH)is: -->
								
<!-- 								<select name="bph_17" class="bph"> -->
<!-- 								<option value="nothing"></option> -->
<!-- 								<option value="To reduce bothersome urinary symptoms">To reduce bothersome urinary symptoms</option> -->
<!-- 								<option value="To reduce the risk of death from BPH">To reduce the risk of death from BPH</option> -->
<!-- 								<option value="To find small prostate cancers">To find small prostate cancers</option> -->
<!-- 								<option value="Not sure">Not sure</option> -->
<!-- 								</select></p>  -->
<!-- 							</td> -->
<!-- 						</tr> -->
						
<!-- 						<tr> -->
<!-- 							<td colspan="2"> -->
		<!-- 						<strong>18. Men who have small prostate cancers found when an operation is done for BPH:</strong> -->
<!-- 								<p class="main_center">18. Men who have small prostate cancers found when an operation is done for BPH: -->
								
<!-- 								<select name="bph_18" class="bph"> -->
<!-- 								<option value="nothing"></option> -->
<!-- 								<option value="Almost always need to be treated">Almost always need to be treated</option> -->
<!-- 								<option value="Usually do not die from prostate cancer">Usually do not die from prostate cancer</option> -->
<!-- 								<option value="Both of the above">Both of the above</option> -->
<!-- 								<option value="Not sure">Not sure</option> -->
<!-- 								</select></p> -->
<!-- 							</td> -->
<!-- 						</tr> -->
						
<!-- 						<tr> -->
<!-- 							<td colspan="2"> -->
		<!-- 						<strong>19. Some men who follow "watchful waiting" for their prostate condition:</strong> -->
<!-- 								<p class="main_center">19. Some men who follow "watchful waiting" for their prostate condition: -->
<!-- 								<select name="bph_19" class="bph"> -->
<!-- 								<option value="nothing"></option> -->
<!-- 								<option value="Will eventually need an operation because they can't urinate at all">Will eventually need an operation because they can't urinate at all</option> -->
<!-- 								<option value="Will eventually need an operation because their symptoms get worse">Will eventually need an operation because their symptoms get worse</option> -->
<!-- 								<option value="Both of the above">Both of the above</option> -->
<!-- 								<option value="Not sure">Not sure</option> -->
<!-- 								</select></p> -->
<!-- 							</td> -->
<!-- 						</tr> -->
						
<!-- 						<tr> -->
<!-- 							<td colspan="2"> -->
		<!-- 						<strong>20. The most common kind of prostate surgery reuires:</strong> -->
<!-- 								<p class="main_center">20. The most common kind of prostate surgery requires: -->
<!-- 								<select name="bph_20" class="bph"> -->
<!-- 								<option value="nothing"></option> -->
<!-- 								<option value="An incision (a cut) made in the abdomen(belly)">An incision (a cut) made in the abdomen(belly)</option> -->
<!-- 								<option value="A lighted scope passed through the penis">A lighted scope passed through the penis</option> -->
<!-- 								<option value="Both of the above">Both of the above</option> -->
<!-- 								<option value="Not sure">Not sure</option> -->
<!-- 								</select></p> -->
<!-- 							</td> -->
<!-- 						</tr> -->
<!-- 					</table> -->
					
<!-- 					<br> -->
<!-- 					<br> -->
<!-- 					<br> -->
<!-- 					<br> -->
					
		<!-- 			<table style="width: 100%;" class="auss"> -->
		
		<!-- 				<tr> -->
		<!-- 					<th colspan="2"> -->
		<!-- 						<h3>Satisfaction with the Decision-making process questionnaire</h3> -->
		<!-- 					</th>					 -->
		<!-- 				</tr>	 -->
						
		<!-- 				<tr> -->
		<!-- 					<td width="50%"> -->
		<!-- 						<h4>Response frame for questions 1-5</h4> -->
		<!-- 					</td> -->
		<!-- 					<td style="text-align: center;"> -->
		<!-- 						<div style="width:20%;float: left;"><h4>Strongly Disagree</h4></div> -->
		<!-- 						<div style="width:20%;height:100%;float: left; background-color: #C1C1C1;"><h4>Disagree</h4></div> -->
		<!-- 						<div style="width:20%;float: left;"><h4>Not Sure</h4></div> -->
		<!-- 						<div style="width:20%;float: left;"><h4>Agree</h4></div> -->
		<!-- 						<div style="width:20%;float: left;"><h4>Strongly Agree</h4></div>						 -->
		<!-- 					</td> -->
		<!-- 				</tr> -->
						
		<!-- 				<tr> -->
		<!-- 					<td> -->
		<!-- 						<strong>1. I got as much information as I wanted about my prostate problem at the beginning of the study.</strong> -->
		<!-- 					</td> -->
		<!-- 					<td> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Strongly Disagree" value="Strongly Disagree"> -->
		<!-- 							</div> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Disagree" value="Disagree"> -->
		<!-- 							</div> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Not Sure" value="Not Sure"> -->
		<!-- 							</div> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Agree" value="Agree"> -->
		<!-- 							</div> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Strongly Agree" value="Strongly Agree"> -->
		<!-- 							</div> -->
		<!-- 					</td> -->
		<!-- 				</tr> -->
						
		<!-- 				<tr> -->
		<!-- 					<td> -->
		<!-- 						<strong>2. I am satisfied that I was adequately informed about the different treatment available for my prostate problem.</strong> -->
		<!-- 					</td> -->
		<!-- 					<td> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Strongly Disagree" value="Strongly Disagree"> -->
		<!-- 							</div> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Disagree" value="Disagree"> -->
		<!-- 							</div> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Not Sure" value="Not Sure"> -->
		<!-- 							</div> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Agree" value="Agree"> -->
		<!-- 							</div> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Strongly Agree" value="Strongly Agree"> -->
		<!-- 							</div> -->
		<!-- 					</td> -->
		<!-- 				</tr> -->
						
		<!-- 				<tr> -->
		<!-- 					<td> -->
		<!-- 						<strong>3. I had as much input as I wanted in the choice of treatment for my prostate problem at the beginning of the study.</strong> -->
		<!-- 					</td> -->
		<!-- 					<td> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Strongly Disagree" value="Strongly Disagree"> -->
		<!-- 							</div> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Disagree" value="Disagree"> -->
		<!-- 							</div> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Not Sure" value="Not Sure"> -->
		<!-- 							</div> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Agree" value="Agree"> -->
		<!-- 							</div> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Strongly Agree" value="Strongly Agree"> -->
		<!-- 							</div> -->
		<!-- 					</td> -->
		<!-- 				</tr> -->
						
		<!-- 				<tr> -->
		<!-- 					<td> -->
		<!-- 						<strong>4. I am satisfied that my own opinion was important in the decision about treatment for my prostate problem at the beginning of the study.</strong> -->
		<!-- 					</td> -->
		<!-- 					<td> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Strongly Disagree" value="Strongly Disagree"> -->
		<!-- 							</div> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Disagree" value="Disagree"> -->
		<!-- 							</div> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Not Sure" value="Not Sure"> -->
		<!-- 							</div> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Agree" value="Agree"> -->
		<!-- 							</div> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Strongly Agree" value="Strongly Agree"> -->
		<!-- 							</div> -->
		<!-- 					</td> -->
		<!-- 				</tr> -->
						
		<!-- 				<tr> -->
		<!-- 					<td> -->
		<!-- 						<strong>5. Looking back, I think I relied too much on the opinion of my doctors in deciding whether or not to have surgery at the beginning of the study.</strong> -->
		<!-- 					</td> -->
		<!-- 					<td> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Strongly Disagree" value="Strongly Disagree"> -->
		<!-- 							</div> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Disagree" value="Disagree"> -->
		<!-- 							</div> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Not Sure" value="Not Sure"> -->
		<!-- 							</div> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Agree" value="Agree"> -->
		<!-- 							</div> -->
		<!-- 							<div style="width:20%;float:left; background-color: white;" align="center"> -->
		<!-- 								<input type="radio" name="Strongly Agree" value="Strongly Agree"> -->
		<!-- 							</div> -->
		<!-- 					</td> -->
		<!-- 				</tr> -->
						
		<!-- 				</table> -->
					
<!-- 					<br> -->
<!-- 					<input type="image" alt="submit" src="./images/submit.jpg" > -->
<!-- 					<br> -->
<!-- 					<br> -->
<!-- 				</form> -->
<!-- 				</div> -->
<!-- ======================================================================= -->
				
		<div id="leftDiv" style="text-align:justify; width:30%; overflow:scroll; height:600px; background-color:#C0C0C0;float:left;font-size:20px;">

<script>


function get_firstChild(n)
{
y=n.firstChild;
try{
while (y.nodeType!=1)
  {
  y=y.nextSibling;
  }
}catch(err)
{
	//alert("think i caught something"+err);
	return null;
}
return y;
}

function get_nextSibling(n)
{
	//alert(y.nodeName);
	y=n.nextSibling;
	try{
	while (y.nodeType!=1)
	  {
	  y=y.nextSibling;
	  //alert(y.nodeName);
	  }
	}catch(err)
	{
		//alert("think i caught something"+err);
		return null;
	}
	//alert("out of sibling() and y is ");
	//alert(y.nodeName);
	return y;
	
}

xmlDoc=loadXMLDoc("./bph.xml");
document.write("&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp");
document.write("<p style=\"margin-left:4%;margin-bottom:0px;margin-top:0px;font-size:1.5em;font-weight:500;\">".concat("Table of Contents").concat("</p>"));


x=get_firstChild(xmlDoc.documentElement);
var i=0;
var j=i.toString();
	while(x!=null)
	{
		j=i.toString();
		var but=document.createElement('button');
		but.innerHTML=x.nodeName;
		but.setAttribute("type","button");
		but.setAttribute("id",j);
		but.setAttribute("onClick","ShowContent(id)");
		but.setAttribute("style","border:none;background-color:#C0C0C0;color:#DC1E2F;font-size:1em;margin-left:8%;");
		document.getElementById("leftDiv").appendChild(but);
		document.write("<br>");
		x=get_nextSibling(x);
		i++;
	}

</script>
</div>
<div id="rightFrame"  style="margin-left:10px; margin-right:20px;text-align:justify;width:63%; overflow:scroll; background-color:#FFFF66;float:left;font-weight:700;height:600px;">
<br><h2 style="margin-left: 5px;margin-top:0px;">
Benign Prostatic Hyperplasia 
</h2></div>
		
			
		<br>
		<br>
		<br>
		</div>
		
	</body>
	
</html>

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

		function closeWindow(){
			window.close();
		}


		function move_panel()
		{
			<?php 
// 				$endTime=time();
// 				$_SESSION["endTime"]=$endTime;
// 			?>
		// 	 $("#panel_knowledge").slideToggle("swing");
		// 	    $("#iframe_body_two").hide(500);
		// 	    $("#iframe_body").show(500);
		// 	    $("#iframe_body").css("background-color","#DC1E2F");
		// 	    $("#iframe_body_two").css("background-color","white");
		// 	    $("#iframe_body").hide(500);
		// 	    $("#iframe_body_two").show(500);
			$("#div_walking").animate({left:'79%'},"slow");	  
		    
		    
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
		</script>
	</head>

	<body onload="move_panel()">
		<hr>
		<?php 
	// 	echo $_POST["ques1"];
// 		require_once 'databaseInterfaceService.php';
// 		$avctDB=new InterfaceService();
// 		// 	$avctDB->getAllInterface();
// 		$avctDB->insertBPHResponses($_POST["ques1"],$_SESSION['emId'],'bph1');
// 		$avctDB->insertBPHResponses($_POST["ques2"],$_SESSION['emId'],'bph2');
// 		$avctDB->insertBPHResponses($_POST["ques3"],$_SESSION['emId'],'bph3');
// 		$avctDB->insertBPHResponses($_POST["ques4"],$_SESSION['emId'],'bph4');
// 		$avctDB->insertBPHResponses($_POST["ques5"],$_SESSION['emId'],'bph5');
// 		$avctDB->insertBPHResponses($_POST["ques6"],$_SESSION['emId'],'bph6');
// 		$avctDB->insertBPHResponses($_POST["ques7"],$_SESSION['emId'],'bph7');
// 		$avctDB->insertBPHResponses($_POST["ques8"],$_SESSION['emId'],'bph8');
// 		$avctDB->insertBPHResponses($_POST["ques9"],$_SESSION['emId'],'bph9');
// 		$avctDB->insertBPHResponses($_POST["ques10"],$_SESSION['emId'],'bph10');
// 		$avctDB->insertBPHResponses($_POST["ques11"],$_SESSION['emId'],'bph11');
// 		$avctDB->insertBPHResponses($_POST["ques12"],$_SESSION['emId'],'bph12');
// 		$avctDB->insertBPHResponses($_POST["ques13"],$_SESSION['emId'],'bph13');
// 		$avctDB->insertBPHResponses($_POST["bph_14"],$_SESSION['emId'],'bph14');
// 		$avctDB->insertBPHResponses($_POST["bph_15"],$_SESSION['emId'],'bph15');
// 		$avctDB->insertBPHResponses($_POST["bph_16"],$_SESSION['emId'],'bph16');
// 		$avctDB->insertBPHResponses($_POST["bph_17"],$_SESSION['emId'],'bph17');
// 		$avctDB->insertBPHResponses($_POST["bph_18"],$_SESSION['emId'],'bph18');
// 		$avctDB->insertBPHResponses($_POST["bph_19"],$_SESSION['emId'],'bph19');
// 		$avctDB->insertBPHResponses($_POST["bph_20"],$_SESSION['emId'],'bph20');		
		
		
// // 		echo 'start time is ';
// // 		echo $_SESSION["strtTime"];
// // 		echo 'end time is ';
// // 		echo $_SESSION["endTime"];
// 		$sessionTime=$_SESSION["endTime"]-$_SESSION["strtTime"];
// 		$avctDB->insertTimeFields($_SESSION["emId"], $sessionTime,'Total_Survey_time');
// 		$sessionTime/=60;//minutes
// // 		echo 'hello';
// // 		echo $sessionTime;
// // 		echo 'minutes is the time of session';
// // 		echo $_SESSION["emId"];
// 		$avctDB->insertSessionTime($_SESSION["emId"],$sessionTime,'global_clk');
// 		$avctDB->closeConnection();
// 		session_destroy();
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
							<li><a href="#" accesskey="1" title="" id="flip_information" style="background-color:#02A81B;border-left:1px solid #FFFFFF;" >1.INFORMATION</a></li>
							<li><a href="#" accesskey="2" title="" id="flip_severity" style="background-color: #D76203;border-left:1px solid #FFFFFF;">2.STOFHLA</a></li>
							<li><a href="#" accesskey="3" title="" id="flip_literacy" style="background-color: #6650B5;border-left:1px solid #FFFFFF;">3.LITERACY</a></li>
							<li><a href="#" accesskey="4" title="" id="flip_knowledge" style="background-color: #DC1E2F;border-left:1px solid #FFFFFF;border-right:1px solid #FFFFFF;" >4.KNOWLEDGE</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		
		<div id="panel_information" style="height: 4em;"><p style="display: inline-block;font-size:2.5em;text-transform: uppercase;font-weight: 400;color: #FFF;white-space:pre;">Step 1: Login Information</p></div>
		<div id="panel_severity" style="height: 4em;"><p style="display: inline-block;font-size:2.5em;text-transform: uppercase;font-weight: 400;color: #FFF;white-space:pre;">Step 2: Health Literacy Test</p></div>
		<div id="panel_literacy" style="height: 4em;"><p style="display: inline-block;font-size:2.5em;text-transform: uppercase;font-weight: 400;color: #FFF;white-space:pre;">Step 3: Severity Symptoms Score</p></div>
		<div id="panel_knowledge" style="height: 4em;"><p style="display: inline-block;font-size:2.5em;text-transform: uppercase;font-weight: 400;color: #FFF;white-space:pre;">Step 4: BPH Knowledge Test</p></div>
		
		<hr>					
		<div id="iframe_body_two" style="width:100%; height:100px; background-color: white 	;padding-top: 50px; padding-left: 5%;"><!-- height:400px; -->
			<br>
			<h2 style="margin-left: 0;">You have completed the survey!</h2>
			<div id="div_system_overview">
				<br>
				<br>
				<br>
				<div align="center" style="width:90%;border: solid 1px #05598A;">
					<br><br><br>
					<br>
					<img src="./images/design7.jpg" width="90%">			
				<div id="div_walking" align="right" style="margin-left: -79%;position:relative; background-color: black;width:10%;"><img src="./images/walking.gif" width="100%" height="100px" style="position: relative;"></div>
				<br>
				</div>
				<br>
				<br>
				
				<div  align="center" style="width: 100%;background-color: white;float:left;">
<!-- 		<a id="start" href="information.html" class="icon icon-ok button">Start</a> -->
			<button id="start" onclick="closeWindow()"><img border="0"  src="./images/close.jpg" ></button>
		</div>
		
			</div>
		<br>
		<br>
		<br>
		</div>
		
		
	</body>
		
</html>

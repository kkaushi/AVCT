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
	function loadBPHForm()
	{
		$("#one").hide(500);
		$("#two").show(500);		
	}

	function move_panel()
	{
		<?php 
				$_SESSION["stofhla_end_time"]=time();
		?>
		$("#panel_literacy").slideToggle("swing");
	    $("#iframe_body_two").hide(500);
	    $("#iframe_body").show(500);
	    $("#iframe_body").css("background-color","#6650B5");
	    $("#iframe_body_two").css("background-color","white");
	    $("#iframe_body").hide(500);
	    $("#iframe_body_two").show(500);
	    
	    
	}

	$(document).ready(function(){
	  $("#flip_information").click(function(){
	    $("#panel_information").slideToggle("swing");

//	        	$("#iframe_body_two").hide(1500);
//	 	    $("#iframe_body").show(1500);	
//	 		$("#iframe_body").css("background-color","#02A81B");
//	 	    $("#iframe_body_two").css("background-color","white");
//	 	    $("#iframe_body").hide(1500);
//	 	    $("#iframe_body_two").show(1500);
		    
	  });
	  
	  $("#flip_severity").click(function(){
		    $("#panel_severity").slideToggle("swing");

//	 	    $("#iframe_body_two").hide(1500);
//	 	    $("#iframe_body").show(1500);
//	 	    $("#iframe_body").css("background-color","#D76203");
//	 	    $("#iframe_body_two").css("background-color","white");
//	 	    $("#iframe_body").hide(1500);
//	 	    $("#iframe_body_two").show(1500);
		    
		  });
	  $("#flip_literacy").click(function(){
		    $("#panel_literacy").slideToggle("swing");

//	 	    $("#iframe_body_two").hide(1500);
//	 	    $("#iframe_body").show(1500);
//	 	    $("#iframe_body").css("background-color","#6650B5");
//	 	    $("#iframe_body_two").css("background-color","white");
//	 	    $("#iframe_body").hide(1500);
//	 	    $("#iframe_body_two").show(1500);
		    
		  });
	  $("#flip_knowledge").click(function(){
		    $("#panel_knowledge").slideToggle("swing");

//	 	    $("#iframe_body_two").hide(1500);
//	 	    $("#iframe_body").show(1500);
//	 	    $("#iframe_body").css("background-color","#DC1E2F");
//	 	    $("#iframe_body_two").css("background-color","white");
//	 	    $("#iframe_body").hide(1500);
//	 	    $("#iframe_body_two").show(1500);	    
		  });

	});
	</script>
</head>

<body onload="move_panel()">
	<?php 
// 		echo $_POST["A_1"]; 
		require_once 'databaseInterfaceService.php';
		$avctDB=new InterfaceService();
		// 	$avctDB->getAllInterface();
		$avctDB->insertStofhlaResponses($_POST["A_1"],$_SESSION['emId'],'a1');
		$avctDB->insertStofhlaResponses($_POST["A_2"],$_SESSION['emId'],'a2');
		$avctDB->insertStofhlaResponses($_POST["A_3"],$_SESSION['emId'],'a3');
		$avctDB->insertStofhlaResponses($_POST["A_4"],$_SESSION['emId'],'a4');
		$avctDB->insertStofhlaResponses($_POST["A_5"],$_SESSION['emId'],'a5');
		$avctDB->insertStofhlaResponses($_POST["A_6"],$_SESSION['emId'],'a6');
		$avctDB->insertStofhlaResponses($_POST["A_7"],$_SESSION['emId'],'a7');
		$avctDB->insertStofhlaResponses($_POST["A_8"],$_SESSION['emId'],'a8');
		$avctDB->insertStofhlaResponses($_POST["A_9"],$_SESSION['emId'],'a9');
		$avctDB->insertStofhlaResponses($_POST["A_10"],$_SESSION['emId'],'a10');
		$avctDB->insertStofhlaResponses($_POST["A_11"],$_SESSION['emId'],'a11');
		$avctDB->insertStofhlaResponses($_POST["A_12"],$_SESSION['emId'],'a12');
		$avctDB->insertStofhlaResponses($_POST["A_13"],$_SESSION['emId'],'a13');
		$avctDB->insertStofhlaResponses($_POST["A_14"],$_SESSION['emId'],'a14');
		$avctDB->insertStofhlaResponses($_POST["A_15"],$_SESSION['emId'],'a15');
		$avctDB->insertStofhlaResponses($_POST["A_16"],$_SESSION['emId'],'a16');
		$avctDB->insertStofhlaResponses($_POST["B_17"],$_SESSION['emId'],'b17');
		$avctDB->insertStofhlaResponses($_POST["B_18"],$_SESSION['emId'],'b18');
		$avctDB->insertStofhlaResponses($_POST["B_19"],$_SESSION['emId'],'b19');
		$avctDB->insertStofhlaResponses($_POST["B_20"],$_SESSION['emId'],'b20');
		$avctDB->insertStofhlaResponses($_POST["B_21"],$_SESSION['emId'],'b21');
		$avctDB->insertStofhlaResponses($_POST["B_22"],$_SESSION['emId'],'b22');
		$avctDB->insertStofhlaResponses($_POST["B_23"],$_SESSION['emId'],'b23');
		$avctDB->insertStofhlaResponses($_POST["B_24"],$_SESSION['emId'],'b24');
		$avctDB->insertStofhlaResponses($_POST["B_25"],$_SESSION['emId'],'b25');
		$avctDB->insertStofhlaResponses($_POST["B_26"],$_SESSION['emId'],'b26');
		$avctDB->insertStofhlaResponses($_POST["B_27"],$_SESSION['emId'],'b27');
		$avctDB->insertStofhlaResponses($_POST["B_28"],$_SESSION['emId'],'b28');
		$avctDB->insertStofhlaResponses($_POST["B_29"],$_SESSION['emId'],'b29');
		$avctDB->insertStofhlaResponses($_POST["B_30"],$_SESSION['emId'],'b30');
		$avctDB->insertStofhlaResponses($_POST["B_31"],$_SESSION['emId'],'b31');
		$avctDB->insertStofhlaResponses($_POST["B_32"],$_SESSION['emId'],'b32');
		$avctDB->insertStofhlaResponses($_POST["B_33"],$_SESSION['emId'],'b33');
		$avctDB->insertStofhlaResponses($_POST["B_34"],$_SESSION['emId'],'b34');
		$avctDB->insertStofhlaResponses($_POST["B_35"],$_SESSION['emId'],'b35');
		$avctDB->insertStofhlaResponses($_POST["B_36"],$_SESSION['emId'],'b36');
		//sthofla time
		$sthoflatime=$_SESSION["stofhla_end_time"]-$_SESSION["stofhla_start_time"];
		$avctDB->insertTimeFields($_SESSION["emId"], $sthoflatime,'Total_Stofhla_time');
		$sthoflatime/=60;
		$avctDB->insertSessionTime($_SESSION["emId"], $sthoflatime,'stofhla_timer');
		
		$avctDB->closeConnection();
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
							<li><a href="#" accesskey="1" title="" id="flip_information" style="background-color:#02A81B;border-left:1px solid #FFFFFF;" >1.Information</a></li>
							<li><a href="#" accesskey="2" title="" id="flip_severity" style="background-color: #D76203;border-left:1px solid #FFFFFF;">2.Assessment </a></li>
							<li><a href="#" accesskey="3" title="" id="flip_literacy" style="background-color: #6650B5;border-left:1px solid #FFFFFF;">3.Symptom</a></li>
							<!-- li><a href="#" accesskey="4" title="" id="flip_knowledge" style="background-color: grey;border-left:1px solid #FFFFFF;border-right:1px solid #FFFFFF;pointer-events:none;curson:default;" >4.Education</a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		
		<div id="panel_information" style="height: 4em;"><p style="display: inline-block;font-size:2.5em;text-transform: uppercase;font-weight: 400;color: #FFF;white-space:pre;">Step 1: Login Information</p></div>
		<div id="panel_severity" style="height: 4em;"><p style="display: inline-block;font-size:2.5em;text-transform: uppercase;font-weight: 400;color: #FFF;white-space:pre;">Step 2: Health Literacy Test</p></div>
		<div id="panel_literacy" style="height: 4em;"><p style="display: inline-block;font-size:2.5em;text-transform: uppercase;font-weight: 400;color: #FFF;white-space:pre;">Step 3: Severity Symptoms Score and BPH Knowledge</p></div>
		<div id="panel_knowledge" style="height: 4em;"><p style="display: inline-block;font-size:2.5em;text-transform: uppercase;font-weight: 400;color: #FFF;white-space:pre;">Step 4: Education Reference</p></div>
		
		<hr>					
		<div id="iframe_body_two" style="width:100%; height:100px; background-color: white 	;padding-top: 50px; padding-left: 5%;"><!-- height:400px; -->
			<div id="one">
			<br>
		
			<h3 style="margin-left: 0;font-weight: 700;">Please Complete Symptoms Severity Assessment</h3>
			<div id="div_system_overview">
		
				<div align="center" style="width:90%;">
					<br>
		
		
					<div></div>
				
				<!-- form id="MainForm" action="verify_auass_bph.php" method="post"-->
					<br>
					<br>
		
						<table style="width: 95;" class="auss">
		
						<tr>
							<th style="width:45%;padding-left: 1%;">
		
								<p class="main_center" style="padding-left:2%;font-weight:700;">During the last month or so how often have you</p>
							</th>
						
								<th style="background-color: white;">
								
								
								<div style="width:15%;height:100%;float: left;"><P class="main_center" style="text-align: center; font-weight:700;margin-top: 20%;margin-left: 5%;margin-right: 5%;">Not at all</P></div>
								<div style="width:17%;height:100%;float: left; background-color: #C1C1C1;"><P class="main_center" style="text-align: center; font-weight:700;margin-top: 20%;margin-left: 5%;margin-right: 5%;">Less than 1 time in 5</P></div> 
								<div style="width:18%;height:100%;float: left;"><P class="main_center" style="text-align: center; font-weight:700;margin-top: 20%;margin-left: 5%;margin-right: 5%;">Less than 1/2 the time</P></div>
								<div style="width:16%;height:100%;float: left; background-color: #C1C1C1;"><P class="main_center" style="text-align: center; font-weight:700;margin-top: 20%;margin-left: 5%;margin-right: 5%;">About 1/2 the time</P></div>
								<div style="width:18%;height:100%;float: left;"><P class="main_center" style="text-align: center; font-weight:700;margin-top: 20%;margin-left: 5%;margin-right: 5%;">More than 1/2 the time</P></div>
								<div style="width:16%;height:100%;float: left; background-color: #C1C1C1;"><P class="main_center" style="text-align: center; font-weight:700;margin-top: 20%;margin-left: 5%;margin-right: 5%;">Almost always</P></div>
		<!-- 							<img src="./images/auss_table.png" style="width: 100%">												 -->
							</th>
						</tr>			
						<tr>
							<td>
		<!-- 						<strong>1. had a sensation of not emptying your bladder completely after urinating?</strong> -->
								<p class="main_center">1. had a sensation of not emptying your bladder completely after urinating?</p>
							</td>
							<td>
								<!-- input type="range" name="score_1" min="0" max="5" style="width: 98%;counter-increment:1;"-->
								<div style="width:13%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_1" value="true">
								</div>
								<div style="width:17%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_1" value="false">
								</div>
								<div style="width:18%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_1" value="none">
								</div>
								<div style="width:18%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_1" value="true">
								</div>
								<div style="width:18%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_1" value="false">
								</div>
								<div style="width:16%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_1" value="none">
								</div>
								<input type="radio" name="score_1" value="null" checked="checked" style="display: none;">
							</td>
						</tr>
						<tr>
							<td>
		<!-- 						<strong>2. had to urinate again less than two hours after you have urinated?</strong> -->
								<p class="main_center">2. had to urinate again less than two hours after you have urinated?</p>
		 					</td>
							<td>
								<!-- input type="range" name="score_2" min="0" max="5" style="width: 98%;counter-increment:1;"-->
								<div style="width:13%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_2" value="true">
								</div>
								<div style="width:17%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_2" value="false">
								</div>
								<div style="width:18%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_2" value="none">
								</div>
								<div style="width:18%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_2" value="true">
								</div>
								<div style="width:18%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_2" value="false">
								</div>
								<div style="width:16%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_2" value="none">
								</div>
								<input type="radio" name="score_2" value="null" checked="checked" style="display: none;">
							
							</td>
						</tr>
						<tr>
							<td>
		<!-- 						<strong>3. how often have you stopped and started, several times when you urinated?</strong> -->
								<p class="main_center">3. how often have you stopped and started, serveral times when you urinated?</p>
							</td>
							<td>
								<!-- input type="range" name="score_3" min="0" max="5" style="width: 98%;counter-increment:1;"-->
								<div style="width:13%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_3" value="true">
								</div>
								<div style="width:17%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_3" value="false">
								</div>
								<div style="width:18%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_3" value="none">
								</div>
								<div style="width:18%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_3" value="true">
								</div>
								<div style="width:18%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_3" value="false">
								</div>
								<div style="width:16%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_3" value="none">
								</div>
								<input type="radio" name="score_3" value="null" checked="checked" style="display: none;">
							
							</td>
						</tr>
						<tr>
							<td>
		<!-- 						<strong>4. found it difficult to postpone urination?</strong> -->
								<p class="main_center">4. found it difficult to postpone urination?</p>
							</td>
							<td>
								<!-- input type="range" name="score_4" min="0" max="5" style="width: 98%;counter-increment:1;"-->
								<div style="width:13%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_4" value="true">
								</div>
								<div style="width:17%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_4" value="false">
								</div>
								<div style="width:18%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_4" value="none">
								</div>
								<div style="width:18%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_4" value="true">
								</div>
								<div style="width:18%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_4" value="false">
								</div>
								<div style="width:16%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_4" value="none">
								</div>
								<input type="radio" name="score_4" value="null" checked="checked" style="display: none;">
							
							</td>
						</tr>
						<tr>
							<td>
		<!-- 						<strong>5. had a weak urinary stream?</strong> -->
								<p class="main_center">5. had a weak urinary stream?</p>
							</td>
							<td>
								<!-- input type="range" name="score_5" min="0" max="5" style="width: 98%;counter-increment:1;"-->
								<div style="width:13%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_5" value="true">
								</div>
								<div style="width:17%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_5" value="false">
								</div>
								<div style="width:18%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_5" value="none">
								</div>
								<div style="width:18%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_5" value="true">
								</div>
								<div style="width:18%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_5" value="false">
								</div>
								<div style="width:16%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_5" value="none">
								</div>
								<input type="radio" name="score_5" value="null" checked="checked" style="display: none;">
							
							</td>
						</tr>
						<tr>
							<td>
		<!-- 						<strong>6. had to push or stain to urinate?</strong> -->
								<p class="main_center">6. had to push or stain to urinate?</p>
							</td>
							<td>
								<!-- input type="range" name="score_6" min="0" max="5" style="width: 98%;counter-increment:1;"-->
								<div style="width:13%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_6" value="true">
								</div>
								<div style="width:17%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_6" value="false">
								</div>
								<div style="width:18%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_6" value="none">
								</div>
								<div style="width:18%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_6" value="true">
								</div>
								<div style="width:18%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_6" value="false">
								</div>
								<div style="width:16%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_6" value="none">
								</div>
								<input type="radio" name="score_6" value="null" checked="checked" style="display: none;">
							
							</td>
						</tr>
		<!-- 			</table> -->
		<!-- 			<br><br>		 -->
		<!-- 				<table border="1" style="border-color: #05598A;width: 95;" class="auss"> -->
						
						<tr>
							<td>
		<!-- 						<h4 style="text-align:center;"> During the last month </h4> -->
								<p class="main_center">7. During the last month how many times did you most typically get up to urinate from the time you went to bed at night until the time you got up in the morning?</p>
							</td>
							<td style="text-align: center;">
		<!-- 						<div style="width:16%;float: left"><h4>None</h4></div> -->
		<!-- 						<div style="width:16%;height:100%;float: left;background-color: #C1C1C1;"><h4>1 times</h4></div> -->
		<!-- 						<div style="width:16%;float: left"><h4>2 times</h4></div> -->
		<!-- 						<div style="width:16%;height:100%;float: left;background-color: #C1C1C1;"><h4>3 times</h4></div> -->
		<!-- 						<div style="width:16%;float: left"><h4>4 times</h4></div> -->
		<!-- 						<div style="width:16%;height:100%;float: left;background-color: #C1C1C1;"><h4>5 times or more</h4></div> -->
									<div style="width:15%;float:left; background-color: white;" align="center">
										<input type="radio" name="score_7" value="None"><strong>None</strong><br>
									</div>
									<div style="width:15%;float:left; background-color: white;" align="center">
										<input type="radio" name="score_7" value="1 times"><strong>1 time</strong><br>
									</div>
									<div style="width:15%;float:left; background-color: white;" align="center">
										<input type="radio" name="score_7" value="2 times"><strong>2 times</strong><br>
									</div>
									<div style="width:15%;float:left; background-color: white;" align="center">
										<input type="radio" name="score_7" value="3 times"><strong>3 times</strong><br>
									</div>
									<div style="width:15%;float:left; background-color: white;" align="center">
										<input type="radio" name="score_7" value="4 times"><strong>4 times</strong><br>
									</div>
									<div style="width:25%;float:left; background-color: white;" align="center">
										<input type="radio" name="score_7" value="5 times or more"><strong>5 times or more</strong><br>
									</div>
									<div style="width:1%;float:left; background-color: white;" align="center">
						
									<input type="radio" name="score_7" value="null" checked="checked" style="display: none;">
 										
									</div>
							</td>
						</tr>
						<!-- tr>
							
							<!-- td colspan="2" style="text-align: center; font-weight: 700;font-size: large;">BPH Impact Index</td> -->
							 
						<!--/tr -->
						
						
						
						
						<tr>
							<!-- div style="width: 45%; margin-left:5%; float: left; border:solid 1px #05598A; background-color:  white;" align="center"> -->
							<td style="width:45%;padding-left: 1%;">
								<p class="main_center" style="padding-left:2%;font-weight:700;">Over the past month</p>
							</td>
						
							<td style="background-color: white;">
								<div style="width:25%;height:100%;float: left;"><P class="main_center" style="text-align: center; font-weight:700;margin-top: 20%;">None</P></div>
								<div style="width:25%;height:100%;float: left; background-color: #C1C1C1;"><P class="main_center" style="text-align: center; font-weight:700;margin-top: 20%;">Only a little</P></div> 
								<div style="width:25%;height:100%;float: left;"><P class="main_center" style="text-align: center; font-weight:700;margin-top: 20%;">Some</P></div>
								<div style="width:25%;height:100%;float: left; background-color: #C1C1C1;"><P class="main_center" style="text-align: center; font-weight:700;margin-top: 20%;">A lot</P></div>
							</td>
						</tr>
						<tr>
							<td><p class="main_center">8. how much physical <strong>discomfort</strong> did any urinary problems cause you?</p></td>
							<td>
								<div style="width:25%;float:left; background-color: white;"  align="center">
									<input type="radio" name="score_8" value="None"><br>
								</div>
								<div style="width:25%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_8" value="Only a little"><br>
								</div>
								<div style="width:25%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_8" value="Some"><br>
								</div>
								<div style="width:25%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_8" value="A lot"><br>
								</div>
								<div style="width:1%;float:left; background-color: white;" align="center">					
									<input type="radio" name="score_8" value="null" checked="checked" style="display: none;">
 								</div>
							</td>
						</tr>
						<tr>
							<td><p class="main_center">9. how much did you <strong>worry about</strong> your health because of any urinary problems?</p></td>
							<td>
								<div style="width:25%;float:left; background-color: white;"  align="center">
									<input type="radio" name="score_9" value="None"><br>
								</div>
								<div style="width:25%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_9" value="Only a little"><br>
								</div>
								<div style="width:25%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_9" value="Some"><br>
								</div>
								<div style="width:25%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_9" value="A lot"><br>
								</div>
								<div style="width:1%;float:left; background-color: white;" align="center">					
									<input type="radio" name="score_9" value="null" checked="checked" style="display: none;">
 								</div>
							</td>
						</tr>
						<tr>
							<td><p class="main_center">10. how <strong>bothersome</strong> has any trouble with urination been?</p></td>
							<td>
								<div style="width:25%;float:left; background-color: white;"  align="center">
									<input type="radio" name="score_10" value="Not at all bothersome"><br>
								</div>
								<div style="width:25%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_10" value="Bothers me a little"><br>
								</div>
								<div style="width:25%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_10" value="Bothers me some"><br>
								</div>
								<div style="width:25%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_10" value="Bothers me a lot"><br>
								</div>
								<div style="width:1%;float:left; background-color: white;" align="center">					
									<input type="radio" name="score_10" value="null" checked="checked" style="display: none;">
 								</div>
							</td>
						</tr>
						<tr>
							<td><p class="main_center">11. how much of the time has any urinary problem <strong>kept you from doing the kind of things you would usually do</strong>?</p></td>
							<td>
								<div style="width:20%;float:left; background-color: white;"  align="center">
									<input type="radio" name="score_11" value="None"><strong>None</strong><br>
								</div>
								<div style="width:20%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_11" value="A little"><strong>A little</strong><br>
								</div>
								<div style="width:20%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_11" value="Some"><strong>Some</strong><br>
								</div>
								<div style="width:20%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_11" value="Most"><strong>Most</strong><br>
								</div>
								<div style="width:19%;float:left; background-color: white;" align="center">
									<input type="radio" name="score_11" value="All"><strong>All</strong><br>
								</div>
								<div style="width:1%;float:left; background-color: white;" align="center">					
									<input type="radio" name="score_11" value="null" checked="checked" style="display: none;">
 								</div>
							</td>
						</tr>		
					</table>
					<br>
					<br>
				
					<!-- input type="image" alt="submit" src="./images/submit.jpg" -->
					<button id="start_form_button" onclick="loadBPHForm()" style="margin-left: 5%;"><img border="0"  src="./images/continue.jpg" ></button>
					
					<br>
					<br>
				<!-- /form-->
				</div>
				<br><br><br>
		
			</div>
		<br>
		<br>
		<br>
	
		
	</div>	
	<!--------------------------------------------------------------------------------->
	<!-- div id="iframe_body_two" style="width:100%; height:100px; display:none;background-color: white 	;padding-top: 50px; padding-left: 5%;"-->
			<div id="two" style="display:none;">
			<br>
			<h3 style="margin-left: 0;font-weight: 700;">Please complete the BPH Knowledge Questionnaire</h3>
				
			<div id="div_system_overview">
		
				<div align="center" style="width:90%;">
					<br><br>
			
			<br>
			<!-- form action="verify_bph_finish.php" method="post"-->
			<form action="verify_auass_bph.php" method="post">
			
						<br>
						<table style="width: 95;" class="auss">
							
							
			<!-- 				<tr> -->
			<!-- 					<th colspan="2"><h3>BPH knowledge questionnaire</h3></th> -->
			<!-- 				</tr> -->
							
							<tr>
								<td style="width:45%;">
			<!-- 						<h4>Please select True/False for ques 1-5:</h4> -->
									<p class="main_center" style="padding-left:2%;font-weight:700;">Please select True/False/Not Sure for ques 1-5:</p>
								</td>
								
								<td style="text-align: center;">
									<div style="width:33%;float: left;"><p class="main_center" style="padding-left:2%;padding-top:15%;font-weight:700;text-align: center;">True</p></div>
			<!-- 						<div style="width:33%;height:100%;float: left; background-color: #C1C1C1;"><h4>False</h4></div> -->
			<!-- 						<div style="width:33%;float: left;"><h4>Not Sure</h4></div>	-->
									<div style="width:33%;height:100%;float: left;background-color: #C1C1C1;"><p class="main_center" style="padding-left:2%;padding-top:15%;font-weight:700;text-align: center;">False</p></div>
									<div style="width:33%;float: left;"><p class="main_center" style="padding-left:2%;padding-top:15%;font-weight:700;text-align: center;">Not Sure</p></div>			
									
								</td>
							</tr>	
							
							<tr>
								<td>
			<!-- 						<strong>1. The prostate is a small gland that helps purify the urine.</strong> -->
									<p class="main_center">1. The prostate is a small gland that helps purify the urine.</p>
								</td>
								<td>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques1" value="true">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques1" value="false">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques1" value="none">
										</div>
										<input type="radio" name="ques1" value="null" checked="checked" style="display: none;">
								</td>
							</tr>
							
							
									
							<tr>
								<td>
			<!-- 						<strong>2. Symptoms of benign prostatic hyperplasia (BPH) can become less bothersome over time without treatment.</strong> -->
									<p class="main_center">2. Symptoms of benign prostatic hyperplasia (BPH) can become less bothersome over time without treatment.
									</p>
								</td>
								<td>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques2" value="true">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques2" value="false">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques2" value="none">
										</div>
										<input type="radio" name="ques2" value="null" checked="checked" style="display: none;">
								</td>
							</tr>
							<tr>
								<td>
			<!-- 						<strong>3. An enlarged prostate gland can cause a change in urination, such as a weak urine stem.</strong> -->
									<p class="main_center">3. An enlarged prostate gland can cause a change in urination, such as a weak urine stream.
									</p>
								</td>
								<td>
									<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques3" value="true">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques3" value="false">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques3" value="none">
										</div>
										<input type="radio" name="ques3" value="null" checked="checked" style="display: none;">
								</td>
							</tr>
							<tr>
								<td>
			<!-- 						<strong>4. Men bothered by uncomplicated BPH generally have a choice between prostate surgery and simply following their condition with their doctor ("watchful waiting".</strong> -->
									<p class="main_center">4. Men bothered by uncomplicated BPH generally have a choice between prostate surgery and simply following their condition with their doctor ("watchful waiting").
									</p>
								</td>
								<td>
									<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques4" value="true">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques4" value="false">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques4" value="none">
										</div>
										<input type="radio" name="ques4" value="null" checked="checked" style="display: none;">
								</td>
							</tr>
							<tr>
								<td>
			<!-- 						<strong>5. Most men with benign prostatic hyperplasia (BPH) who decide against surgery are treated with drugs.</strong> -->
									<p class="main_center">5. Most men with benign prostatic hyperplasia (BPH) who decide against surgery are treated with drugs.</p>
								</td>
								<td>
									<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques5" value="true">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques5" value="false">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques5" value="none">
										</div>
										<input type="radio" name="ques5" value="null" checked="checked" style="display: none;">
								</td>
							</tr>
							<tr>
								<td>
			<!-- 						<strong>6. When a man cannot urinate at all due to a large prostate, a tube must be passed through the penis into the bladder to drain the urine.</strong> -->
									<p class="main_center">6. When a man cannot urinate at all due to a large prostate, a tube must be passed through the penis into the bladder to drain the urine.
									</p>
								</td>
								<td>
									<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques6" value="true">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques6" value="false">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques6" value="none">
										</div>
										<input type="radio" name="ques6" value="null" checked="checked" style="display: none;">
								</td>
							</tr>
							<tr>
								<td>
			<!-- 						<strong>7. The standard prostate operation BPH lowers your future risk of prostate cancer.</strong> -->
									<p class="main_center">7. The standard prostate operation BPH lowers your future risk of prostate cancer.
									</p>
								</td>
								<td>
									<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques7" value="true">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques7" value="false">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques7" value="none">
										</div>
										<input type="radio" name="ques7" value="null" checked="checked" style="display: none;">
								</td>
							</tr>
							<tr>
								<td>
			<!-- 						<strong>8. Men with BPH who choose not to have prostate surgery should see their doctors once a year or so to check on the condition of their prostate.</strong> -->
									<p class="main_center">8. Men with BPH who choose not to have prostate surgery should see their doctors once a year or so to check on the condition of their prostate.
									</p>
								</td>
								<td>
									<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques8" value="true">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques8" value="false">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques8" value="none">
										</div>
										<input type="radio" name="ques8" value="null" checked="checked" style="display: none;">
								</td>					
							</tr>
							
							<tr>
								<td>
			<!-- 						<strong>9. Most men have persistent trouble with dripping urine or wet pants after prostate surgery.</strong> -->
									<p class="main_center">9. Most men have persistent trouble with dripping urine or wet pants after prostate surgery.
									</p>
								</td>
								<td>
									<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques9" value="true">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques9" value="false">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques9" value="none">
										</div>
										<input type="radio" name="ques9" value="null" checked="checked" style="display: none;">
								</td>
							</tr>
							
							<tr>
								<td>
			<!-- 						<strong>10. Some men who have prostate surgery for BPH eventually need another operation because the prostate tissue grows back over time.</strong> -->
									<p class="main_center">10. Some men who have prostate surgery for BPH eventually need another operation because the prostate tissue grows back over time.
									</p>
								</td>
								<td>
									<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques10" value="true">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques10" value="false">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques10" value="none">
										</div>
										<input type="radio" name="ques10" value="null" checked="checked" style="display: none;">
								</td>
							</tr>
							
							
							
							<tr>
								<td>
			<!-- 						<strong>11. Most sexually active men have difficulty getting sexual erections after surgery for benign prostatic hyperplasia (BPH).</strong> -->
									<p class="main_center">11. Most sexually active men have difficulty getting sexual erections after surgery for benign prostatic hyperplasia (BPH).
									</p>
								</td>
								<td>
									<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques11" value="true">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques11" value="false">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques11" value="none">
										</div>
										<input type="radio" name="ques11" value="null" checked="checked" style="display: none;">
								</td>
							</tr>
							
							<tr>
								<td>
			<!-- 						<strong>12. Retrograde ejaculation means the semen goes into the bladder during a sexual climax.</strong> -->
									<p class="main_center">12. Retrograde ejaculation means the semen goes into the bladder during a sexual climax.
									</p>
								</td>
								<td>
									<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques12" value="true">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques12" value="false">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques12" value="none">
										</div>
										<input type="radio" name="ques12" value="null" checked="checked" style="display: none;">
								</td>
							</tr>
							
							<tr>
								<td>
			<!-- 						<strong>13. Only a few men who have prostate surgery have retrograde ejaculation after the operation.</strong> -->
									<p class="main_center">13. Only a few men who have prostate surgery have retrograde ejaculation after the operation.
									</p>
								</td>
								<td>
									<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques13" value="true">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques13" value="false">
										</div>
										<div style="width:33.3%;float:left; background-color: white;" align="center">
											<input type="radio" name="ques13" value="none">
										</div>
										<input type="radio" name="ques13" value="null" checked="checked" style="display: none;">
								</td>
							</tr>
										
							<tr>
								<td colspan="2">
			<!-- 						<strong>14. When your doctor checks the prostate gland with a gloved finger, he or she can:</strong> -->
									<p class="main_center">14. When your doctor checks the prostate gland with a gloved finger, he or she can:
										<select name="bph_14" class="bph">
										<option value="nothing"></option>
										<option value="Feel some prostate cancers">Feel some prostate cancers</option>
										<option value="Check the kidneys">Check the kidneys</option>
										<option value="Both of the above">Both of the above</option>
										<option value="Not sure">Not sure</option>
										</select>
									</p> 
								</td>
							</tr>
							
							<tr>
								<td colspan="2">
			<!-- 						<strong>15. Benign prostatic hyperplasia (BPH)ocassionally causes:</strong> -->
									<p class="main_center">15. Benign prostatic hyperplasia (BPH)ocassionally causes:
									
									<select name="bph_15" class="bph">
									<option value="nothing"></option>
									<option value="Damge to the kidneys">Damge to the kidneys</option>
									<option value="Damage to the bladder">Damage to the bladder</option>
									<option value="Both of the above">Both of the above</option>
									<option value="Not sure">Not sure</option>
									</select></p> 
								</td>
							</tr>
							
							<tr>
								<td colspan="2">
			<!-- 						<strong>16. Men who have benign prostatic hyperplasia (BPH)have a higher risk of which of the following conditions:</strong> -->
									<p class="main_center">16. Men who have benign prostatic hyperplasia (BPH)have a higher risk of which of the following conditions:
									
									<select name="bph_16" class="bph">
									<option value="nothing"></option>
									<option value="Prostate cancer">Prostate cancer</option>
									<option value="Urinary tract infections">Urinary tract infections</option>
									<option value="Both of the above">Both of the above</option>
									<option value="Not sure">Not sure</option>
									</select></p> 
								</td>
							</tr>
							
							<tr>
								<td colspan="2">
			<!-- 						<strong>17. The main purpose of surgery for benign prostatic hyperplasia (BPH)is:</strong> -->
									<p class="main_center">17. The main purpose of surgery for benign prostatic hyperplasia (BPH)is:
									
									<select name="bph_17" class="bph">
									<option value="nothing"></option>
									<option value="To reduce bothersome urinary symptoms">To reduce bothersome urinary symptoms</option>
									<option value="To reduce the risk of death from BPH">To reduce the risk of death from BPH</option>
									<option value="To find small prostate cancers">To find small prostate cancers</option>
									<option value="Not sure">Not sure</option>
									</select></p> 
								</td>
							</tr>
							
							<tr>
								<td colspan="2">
			<!-- 						<strong>18. Men who have small prostate cancers found when an operation is done for BPH:</strong> -->
									<p class="main_center">18. Men who have small prostate cancers found when an operation is done for BPH:
									
									<select name="bph_18" class="bph">
									<option value="nothing"></option>
									<option value="Almost always need to be treated">Almost always need to be treated</option>
									<option value="Usually do not die from prostate cancer">Usually do not die from prostate cancer</option>
									<option value="Both of the above">Both of the above</option>
									<option value="Not sure">Not sure</option>
									</select></p>
								</td>
							</tr>
							
							<tr>
								<td colspan="2">
			<!-- 						<strong>19. Some men who follow "watchful waiting" for their prostate condition:</strong> -->
									<p class="main_center">19. Some men who follow "watchful waiting" for their prostate condition:
									<select name="bph_19" class="bph">
									<option value="nothing"></option>
									<option value="Will eventually need an operation because they can't urinate at all">Will eventually need an operation because they can't urinate at all</option>
									<option value="Will eventually need an operation because their symptoms get worse">Will eventually need an operation because their symptoms get worse</option>
									<option value="Both of the above">Both of the above</option>
									<option value="Not sure">Not sure</option>
									</select></p>
								</td>
							</tr>
							
							<tr>
								<td colspan="2">
			<!-- 						<strong>20. The most common kind of prostate surgery reuires:</strong> -->
									<p class="main_center">20. The most common kind of prostate surgery requires:
									<select name="bph_20" class="bph">
									<option value="nothing"></option>
									<option value="An incision (a cut) made in the abdomen(belly)">An incision (a cut) made in the abdomen(belly)</option>
									<option value="A lighted scope passed through the penis">A lighted scope passed through the penis</option>
									<option value="Both of the above">Both of the above</option>
									<option value="Not sure">Not sure</option>
									</select></p>
								</td>
							</tr>
						</table>
						
						<br>
						<br>
						<br>
						<br>
					
		
					<input type="image" alt="submit" src="./images/submit.jpg">
					
					
					<br>
					<br>
				</form>
							</div>
				<br><br><br>
		
			</div>
		<br>
		<br>
		<br>
		</div>
		</div>
	
	

	</body>	
</html>

<!DOCTYPE html>
<?php session_start();
$_SESSION['emId']=null;
?>
<html>
	<head>
		<title>Stofhla</title>
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
		<link href="default.css" rel="stylesheet" type="text/css" media="all" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script> 
		function show_stofhla_form()
		{
			<?php 
				$_SESSION["stofhla_start_time"]=time();
			?>
			$("#stofhla_instructions").hide(500);
		// 	$("#stofhla_instructions").css("display","none");
		    $("#stofhla_form").show(500);
		    setTimeout(function(){$("#Frm_PassageA").submit()},1000*60*7);
		}
		
		function move_panel()
		{
			<?php 
			//Insert Start time in database
			$startTime=time();
			$_SESSION["strtTime"]=$startTime;
			?>
			$("#panel_severity").slideToggle("swing");
		    $("#iframe_body_two").hide(500);
		    $("#iframe_body").show(500);
		    $("#iframe_body").css("background-color","#D76203");
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
		</script>	
	</head>

	<body onload="move_panel()">
		<?php 
		require_once 'databaseInterfaceService.php';
	// 	echo $_POST["usrname"]; 
 		$var = $_POST["usrname"];
		$avctDB=new InterfaceService();
		$avctDB->getAllInterface();
		$avctDB->insertEmail($_POST["usrname"]);
		$_SESSION['emId']=$_POST["usrname"];
	// 	$avctDB->closeConnection();	
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
							<!-- li><a href="#" accesskey="3" title="" id="flip_literacy" style="background-color: grey;border-left:1px solid #FFFFFF;pointer-events:none;curson:default;">3.Symptom</a></li> -->
							<!--li><a href="#" accesskey="4" title="" id="flip_knowledge" style="background-color: grey;border-left:1px solid #FFFFFF;border-right:1px solid #FFFFFF;pointer-events:none;curson:default;" >4.Education</a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		
		<div id="panel_information" style="height: 4em;"><p style="display: inline-block;font-size:2.5em;text-transform: uppercase;font-weight: 400;color: #FFF;white-space:pre;">Step 1: Login Information</p></div>
		<div id="panel_severity" style="height: 4em;"><p style="display: inline-block;font-size:2.5em;text-transform: uppercase;font-weight: 400;color: #FFF;white-space:pre;">Step 2: Health Literacy Assessment</p></div>
		<div id="panel_literacy" style="height: 4em;"><p style="display: inline-block;font-size:2.5em;text-transform: uppercase;font-weight: 400;color: #FFF;white-space:pre;">Step 3: Symptoms Score</p></div>
		<div id="panel_knowledge" style="height: 4em;"><p style="display: inline-block;font-size:2.5em;text-transform: uppercase;font-weight: 400;color: #FFF;white-space:pre;">Step 4: BPH Knowledge Test</p></div>
		
		<hr>					
		<div id="iframe_body_two" style="width:100%; height:100px; background-color: white 	;padding-top: 50px; padding-left: 5%;"><!-- height:400px; -->
			<br>
		<!-- 	<h2 style="margin-left: 0;">Please complete a short Literacy Assessment</h2> -->
		<h3 style="margin-left: 0; font-weight: 700;">Please complete a short Literacy Assessment</h3>
			<div id="div_system_overview">
				<br>
				<br>
		<!-- 		<br> -->
				<div id="stofhla_instructions" align="center" style="width:90%;border: solid 1px #05598A;">
					<br>
					<h3 align="center" style="margin-left:0%"><strong>Instructions</strong></h3>
					<br>
					<p class="main_center" style="margin-left: 5%; margin-right:5%; font-size: x-large;">
						Here are some other medical instructions that you or anybody might see around the hospital. These instructions are in sentences that have some of the words missing and 4 possible words that could go in the blank appear in the form of list. You have to figure out which of those 4 words should go in the blank, which word makes the sentence make sense. When you think you know which one it is, select that word, and go on to the next one. You have exactly <strong style="color: red">7 minutes</strong> to complete this assessment and after 7 minutes, the assessment would be automatically submitted and the responses can't be changed. After completion, click on the Submit button to proceed.  
					</p>
		<!-- 			<div  align="center" style="width: 100%; margibackground-color: white;float:left;"><a id="start" href="information.html" class="icon icon-ok button" style="width:5%;"><font size="3">Start</font></a></div> -->
					<button id="start_form_button" onclick="show_stofhla_form()" style="margin-left: 5%;"><img border="0"  src="./images/start_form.jpg" ></button>
					<br><br><br><br>
				</div>
			
				
				<div id="stofhla_form" align="center" style="width:90%;border: solid 1px #05598A;display: none; background-color: white;">
					<br>
					<div></div>
				<br>
				<form id="Frm_PassageA" action="verify_stofhla_auass.php" method="post" style="margin-left: 10%;margin-right: 10%;">
		<!-- 		<form style="align:center;border: solid;border-color:#666666;border-width:2px;"> -->
					<div align="center" style="background-color:white; margin-left: -11%;">
					<h3>Passage A: X-RAY PREPARATION</h3></div>
					<br>
					<p class="main_center" > Your doctor has sent you to have a 
					<select name="A_1">
					<option value="nothing"></option>
					<option value="stomach">stomach</option>
					<option value="diabetes">diabetes</option>
					<option value="stitches">stitches</option>
					<option value="germs">germs</option>
					</select>
					X-ray.
		<!-- 			</p> -->
		<!-- 			<br> -->
					
		<!-- 			<p class="main_center"> --> 
					You must have an 
					<select name="A_2">
					<option value="nothing"></option>
					<option value="asthma">asthma</option>
					<option value="empty">empty</option>
					<option value="incest">incest</option>
					<option value="anemia">anemia</option>
					</select>
					stomach when you come for  
					<select name="A_3">
					<option value="nothing"></option>
					<option value="is">is</option>
					<option value="am">am</option>
					<option value="if">if</option>
					<option value="it">it</option>
					</select>
					.
		<!-- 			</p><br> -->
					
					
		<!-- 			<p class="main_center">  -->
					The X-ray will 
					<select name="A_4">
					<option value="nothing"></option>
					<option value="take">take</option>
					<option value="view">view</option>
					<option value="talk">talk</option>
					<option value="look">look</option>
					</select>
					from 1 to 3  
					<select name="A_5">
					<option value="nothing"></option>
					<option value="beds">beds</option>
					<option value="brains">brains</option>
					<option value="hours">hours</option>
					<option value="diets">diets</option>
					</select>
					to do.
					</p><br>
					
		<!-- 			<hr style="border: solid 0.5px #05598A;"> -->
					<br>
					<div align="center" style="background-color:white; margin-left: -11%;">
					<h3>THE DAY BEFORE THE X-RAY</h3></div>
					<br>
					<p class="main_center"> For supper have only a 
					<select name="A_6">
					<option value="nothing"></option>
					<option value="little">little</option>
					<option value="broth">broth</option>
					<option value="attack">attack</option>
					<option value="nausea">nausea</option>
					</select>
					snack of fruit,  
					<select name="A_7">
					<option value="nothing"></option>
					<option value="toes">toes</option>
					<option value="throat">throat</option>
					<option value="toast">toast</option>
					<option value="thigh">thigh</option>
					</select>
					and jelly, with coffee or tea.
		<!-- 			</p><br> -->
					
		<!-- 			<p class="main_center">  -->
					After 
					<select name="A_8">
					<option value="nothing"></option>
					<option value="minute">minute</option>
					<option value="midnight">midnight</option>
					<option value="during">during</option>
					<option value="before">before</option>
					</select>
					, you must not  
					<select name="A_9">
					<option value="nothing"></option>
					<option value="easy">easy</option>
					<option value="ate">ate</option>
					<option value="drank">drank</option>
					<option value="eat">eat</option>
					</select>
					or drink anything at 
					<select name="A_10">
					<option value="nothing"></option>
					<option value="ill">ill</option>
					<option value="all">all</option>
					<option value="each">each</option>
					<option value="any">any</option>
					</select>
					until after you have 
					<select name="A_11">
					<option value="nothing"></option>
					<option value="are">are</option>
					<option value="has">has</option>
					<option value="had">had</option>
					<option value="was">was</option>
					</select>
					the X-ray.
		<!-- 			</p><br> -->
					
		<!-- 			<p class="main_center">  -->
					Do not eat 
					<select name="A_12">
					<option value="nothing"></option>
					<option value="appointment">appointment</option>
					<option value="walk-in">walk-in</option>
					<option value="breakfast">breakfast</option>
					<option value="clinic">clinic</option>
					</select>
					.
		<!-- 			</p><br> -->
					
		<!-- 			<p class="main_center">  -->
					Do not 
					<select name="A_13">
					<option value="nothing"></option>
					<option value="drive">drive</option>
					<option value="drink">drink</option>
					<option value="dress">dress</option>
					<option value="dose">dose</option>
					</select>
					, even  
					<select name="A_14">
					<option value="nothing"></option>
					<option value="heart">heart</option>
					<option value="breath">breath</option>
					<option value="water">water</option>
					<option value="cancer">cancer</option>
					</select>
					.
		<!-- 			</p><br> -->
					
					
		<!-- 			<p class="main_center">  -->
					If you have any 
					<select name="A_15">
					<option value="nothing"></option>
					<option value="answers">answers</option>
					<option value="exercises">exercises</option>
					<option value="tracts">tracts</option>
					<option value="questions">questions</option>
					</select>
					, call the X-ray  
					<select name="A_16">
					<option value="nothing"></option>
					<option value="Department">Department</option>
					<option value="Sprain">Sprain</option>
					<option value="Pharmacy">Pharmacy</option>
					<option value="Toothache">Toothache</option>
					</select>
					at 616-4500.
					</p><br>
					<br>
					<div align="center" style="background-color:white; margin-left: -11%;">
					<h3>Passage B: MEDICAID RIGHTS AND RESPONSIBILITIES</h3></div>
					<br>
					
					<p class="main_center"> I agree to give correct information to  
					
					<select name="B_17">
					<option value="nothing"></option>
					<option value="hair">hair</option>
					<option value="salt">salt</option>
					<option value="see">see</option>
					<option value="ache">ache</option>
					</select>
					if I can receive Medicaid. I
		<!-- 			</p> -->
		<!-- 			<br> -->
					
					
		<!-- 			<p class="main_center"> I   -->
					<select name="B_18">
					<option value="nothing"></option>
					<option value="agree">agree</option>
					<option value="probe">probe</option>
					<option value="send">send</option>
					<option value="gain">gain</option>
					</select>
					to provide the county information to  
					<select name="B_19">
					<option value="nothing"></option>
					<option value="hide">hide</option>
					<option value="risk">risk</option>
					<option value="discharge">discharge</option>
					<option value="prove">prove</option>
					</select>
					any statements given in this 
					<select name="B_20">
					<option value="nothing"></option>
					<option value="emphysema">emphysema</option>
					<option value="application">application</option>
					<option value="gallbladder">gallbladder</option>
					<option value="relationship">relationship</option>
					</select>
					and hereby give permission to the 
					<select name="B_21">
					<option value="nothing"></option>
					<option value="inflammation">inflammation</option>
					<option value="religion">religion</option>
					<option value="iron">iron</option>
					<option value="county">county</option>
					</select>
					to get such proof. I 
					<select name="B_22">
					<option value="nothing"></option>
					<option value="investigate">investigate</option>
					<option value="entertain">entertain</option>
					<option value="understand">understand</option>
					<option value="establish">establish</option>
					</select>
					that for Medicaid I must report any  
					<select name="B_23">
					<option value="nothing"></option>
					<option value="changes">changes</option>
					<option value="hormones">hormones</option>
					<option value="antacids">antacids</option>
					<option value="charges">charges</option>
					</select>
					in my circumstances within 
					<select name="B_24">
					<option value="nothing"></option>
					<option value="three">three</option>
					<option value="one">one</option>
					<option value="five">five</option>
					<option value="ten">ten</option>
					</select>
					(10) days of becoming 
					<select name="B_25">
					<option value="nothing"></option>
					<option value="award">award</option>
					<option value="aware">aware</option>
					<option value="away">away</option>
					<option value="await">await</option>
					</select>
					of the change.
		<!-- 			</p><br> -->
					
		<!-- 			<p class="main_center"> -->
					I understand 
					<select name="B_26">
					<option value="nothing"></option>
					<option value="thus">thus</option>
					<option value="this">this</option>
					<option value="that">that</option>
					<option value="than">than</option>
					</select>
					if I DO NOT like the 
					<select name="B_27">
					<option value="nothing"></option>
					<option value="marital">marital</option>
					<option value="occupation">occupation</option>
					<option value="adult">adult</option>
					<option value="decision">decision</option>
					</select>
					made on my case, I have the 
					<select name="B_28">
					<option value="nothing"></option>
					<option value="bright">bright</option>
					<option value="left">left</option>
					<option value="wrong">wrong</option>
					<option value="right">right</option>
					</select>
					to a fair hearing. I can 
					<select name="B_29">
					<option value="nothing"></option>
					<option value="request">request</option>
					<option value="refuse">refuse</option>
					<option value="fail">fail</option>
					<option value="mend">mend</option>
					</select>
					a hearing by writing or  
					<select name="B_30">
					<option value="nothing"></option>
					<option value="counting">counting</option>
					<option value="reading">reading</option>
					<option value="calling">calling</option>
					<option value="smelling">smelling</option>
					</select> 
					the county where I applied. 
		<!-- 			</p><br>			 -->
		<!-- 			<p class="main_center"> -->
					If you  
					<select name="B_31">
					<option value="nothing"></option>
					<option value="wash">wash</option>
					<option value="want">want</option>
					<option value="cover">cover</option>
					<option value="tape">tape</option>
					</select>
					TANF for any family 
					<select name="B_32">
					<option value="nothing"></option>
					<option value="member">member</option>
					<option value="history">history</option>
					<option value="weight">weight</option>
					<option value="seatbelt">seatbelt</option>
					</select>
					, you will have to 
					<select name="B_33">
					<option value="nothing"></option>
					<option value="relax">relax</option>
					<option value="break">break</option>
					<option value="inhale">inhale</option>
					<option value="sign">sign</option>
					</select>
					a different application form. 
					<select name="B_34">
					<option value="nothing"></option>
					<option value="Since">Since</option>
					<option value="Whether">Whether</option>
					<option value="However">However</option>
					<option value="Because">Because</option>
					</select>
					, we will use the  
					<select name="B_35">
					<option value="nothing"></option>
					<option value="lung">lung</option>
					<option value="date">date</option>
					<option value="meal">meal</option>
					<option value="pelvic">pelvic</option>
					</select>
					on this form to determine your 
					<select name="B_36">
					<option value="nothing"></option>
					<option value="hypoglycemia">hypoglycemia</option>
					<option value="eligibility">eligibility</option>
					<option value="osteoporosis">osteoporosis</option>
					<option value="schizophrenia">schizophrenia</option>
					</select>
					.
					</p>
					<br>
					<br>
					<input name='submit_stofhla_form' type="image" alt="submit" src="./images/submit.jpg" >
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
	</body>
</html>

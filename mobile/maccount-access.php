
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$infoOrganization->organization_name?></title>

	<?php

	define('PATH','includes/mvc-theme/theme-login');

	

	if( $getMember->member_id != "" ){
		
		echo redirect('maccount-profile');
	} 

	?>
	
	<meta charset="UTF-8">


	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=PATH?>/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=PATH?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=PATH?>/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=PATH?>/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=PATH?>/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=PATH?>/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=PATH?>/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=PATH?>/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=PATH?>/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=PATH?>/css/main.css">
<!--===============================================================================================-->

	<style>
		.errorLogin {color: yellow;margin: 5px auto 10px auto;font-size: 90%;text-align: center;}
	</style>

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?=PATH?>/images/bg-01.jpg');">
			<div class="wrap-login100">

				<?php

				if($_POST['btnAction']!=""){


					switch($_POST['btnAction']){

						case "REGISTER":
					
							if($_POST['member_username']=="" ||  $_POST['member_phone_country']=="" || $_POST['member_phone']=="" || $_POST['member_password']=="" || $_POST['otp'] == ""){
								$strError = "Incomplete input.<br>";
							}

							$strPhone = filterPhone($_POST['member_phone_country'].$_POST['member_phone']);

							// CHECK OTP
							$infoOTP = tep_fetch_object(tep_query("SELECT * FROM nano_master_otp WHERE otp_phone = '".tep_input($strPhone)."' ORDER BY otp_id DESC LIMIT 0,1 "));

							if($infoOTP->otp_code != $_POST['otp'])
							{
								$strError = "Incorrect OTP.<br>";
							}

							if($strError==""){
								
								tep_query("INSERT INTO nano_members (member_username, member_phone, member_password, member_createdate, member_referral, organization_id) VALUES (
									'".tep_input($_POST['member_username'])."', 
									'".tep_input($strPhone)."', 
									'".md5($_POST['member_password'])."', 
									NOW(),
									'".tep_input($_POST['member_referral'])."', 
									'".tep_input($infoOrganization->organization_id)."')");

								$insertId = tep_insert_id();

								$token = createToken($insertId);

                				setcookie('token', $token, time() + COOKIE_TIME, "/", $infoOrganization->organization_domain);
                	
                				echo redirect("football-main");

							}

							break;
					
						case "PASSWORDRESET":
							
							if($_POST['member_username']=="" || $_POST['member_phone_country']=="" || $_POST['member_phone']==""){
								$strError = "Incomplete input.<br>";
							}

							$strPhone = filterPhone($_POST['member_phone_country'].$_POST['member_phone']);

							$infoRow = tep_fetch_object(tep_query("
											SELECT * FROM nano_members 
											WHERE 
												member_username = '".tep_input($_POST['member_username'])."' AND 
												member_phone = '".tep_input($strPhone)."' AND 
												organization_id = '".tep_input($infoOrganization->organization_id)."'"));

							if($infoRow->member_id==""){
								$strError = "Account not found.<br>";
							}

							if($strError==""){

								$newPassword = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);

								tep_query("UPDATE nano_members 
										SET 
											member_password = '".md5($newPassword)."' 
										WHERE 
										member_id = '".tep_input($infoRow->member_id)."' AND 
										organization_id = '".tep_input($infoOrganization->organization_id)."'");

								// FORGET PASSWORD - SEND OTP
								// FORGET PASSWORD - SEND OTP
								// FORGET PASSWORD - SEND OTP

								$strBrandTitle = $infoOrganization->organization_name;

								$arrPOST['numbers'] = $strPhone;
								$arrPOST['content'] = $newPassword.' is your new temporary password. Do not share it with anyone. ['.$strBrandTitle.']';

								$smsSender = send_sms($arrPOST);

								// FUTURE - need check from credit only proceed to send operation

								if($smsSender)
								{
									$strError = "New password has send to your phone.";

									// SAVE TO DATABASE FOR THE OTP RECORDS

									tep_query("INSERT INTO nano_master_otp (otp_phone, otp_code, otp_message, otp_datetime, otp_type, organization_id) VALUES (
										'".tep_input($strPhone)."', 
										'".tep_input($newPassword)."', 
										'".tep_input($arrPOST['content'])."', 
										NOW(),
										'PASSWORD',
										'".tep_input($infoOrganization->organization_id)."')");
								}
								else
								{
									$strError = "Sending failed.";
								}

							}

							break;
					
						case "LOGIN":
							
							if($_POST['member_username']=="" || $_POST['member_password']==""){
								$strError = "Incomplete input.<br>";
							}

							$infoRow = tep_fetch_object(tep_query("
											SELECT * FROM nano_members 
											WHERE 
												member_username = '".tep_input($_POST['member_username'])."' AND 
												member_password = '".md5(tep_input($_POST['member_password']))."' AND 
												organization_id = '".tep_input($infoOrganization->organization_id)."'"));

							if($infoRow->member_id==""){
								$strError = "Account not found.<br>";
							}

							if($strError==""){
								
								$token = createToken($infoRow->member_id);

								setcookie('token', $token, time() + COOKIE_TIME, "/", $infoOrganization->organization_domain);

								echo redirect("football-main");

							}

							break;

					}

				}

				?>
				
				
					
					<div style="text-align: center;margin-bottom: 20px;">
						<a href="https://<?=$infoOrganization->organization_domain?>">
							<img src="includes/mvc-theme/desktop/<?=$infoOrganization->organization_domain?>/images/brand-logo.png" alt="<?=$infoOrganization->organization_domain?>" style="height:73px;margin:5px 0px 2px 0px;">
						</a>
					</div>
					
					<?php 


					if($strError!=""){

						echo "<div class=\"errorLogin\">".$strError."</div>";

					}

					$optionCountry = '<option value="65">+65</option>
								      <option value="60">+60</option>';

					if($_GET['type']=="REGISTER"){

						// GET REFERRAL 
						// GET REFERRAL 
						// GET REFERRAL 
						if($_COOKIE['ref']!=""){

							$infoReferral = tep_fetch_object(tep_query("SELECT * FROM nano_members WHERE member_id = '".tep_input($_COOKIE['ref'])."'"));

							if($infoReferral->member_id!=""){

								$strReferral .= '
								<div class="wrap-input100 validate-input" data-validate = "Enter username">
									<input class="input100 " type="text" name="" placeholder="" value="'.$infoReferral->member_username.'" disabled >
									<input type="hidden" name="member_referral" value="'.$infoReferral->member_id.'" />
									<span class="focus-input100" data-placeholder="&#xf207;"></span>
								</div>';

							}

						}

						echo 
						'
						<form id="form" class="login100-form validate-form" action="account-access?type=REGISTER" method="POST">

						'.$strReferral.'

						<div class="wrap-input100 validate-input" data-validate = "Enter username">
							<input class="input100" type="text" id="member_username" name="member_username" placeholder="Username">
							<span class="focus-input100" data-placeholder="&#xf207;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<input class="input100" type="password" id="member_password" name="member_password" placeholder="Password">
							<span class="focus-input100" data-placeholder="&#xf191;"></span>
						</div>

						<div class="">

							<div style="float:left;margin-right:10px;width:20%;">
								<select id="member_phone_country" name="member_phone_country" style="float:left;padding:3px 5px; height:45px;">
									'.$optionCountry.'
								</select>
							</div>

							<div style="float:left;margin-right:5px;width: 60%">
								<div class="wrap-input100 validate-input" data-validate = "Enter phone">
									<input class="input100" type="number" id="member_phone" name="member_phone" placeholder="Phone">
								</div>
							</div>

							<div style="float:left;width:15%">
								<button type="submit" id="btnOTP" style="float:right; color:white; background: rgb(120,119,116); background: linear-gradient(135deg, rgba(120,119,116,1) 35%, rgba(152,151,146,1) 100%); font-size:14px;line-height:18px; border-radius:2px;height:45px;">
									Send OTP
								</button>
								<button type="submit" id="btnresendOTP" style="float:right; color:white; display:none;">
									Did not receive OTP ?
								</button>

								<input type="hidden" name="btnAction" value="OTP" />

							
							</div>							

							<div style="clear:both;"></div>

						</div>

						<div id="divOTP" class=" validate-input" data-validate = "Enter OTP" style="display:none;margin-bottom:30px;">
							
								
							<div class="wrap-input100" style="margin-bottom:-35px;">

								<input class="input100" type="number" name="otp" placeholder="OTP">
								
								<span class="focus-input100" data-placeholder="&#xf10b;"></span>

							</div>

							<div style="margin-right:15px;">

								<span id="timer" style="float:right; color:white;"></span>

								<div id="otp_message" style="float: right; color:white; margin-right:15px;"></div>

								<div style="clear:both;"></div>

							</div>

						</div>


						<div class="container-login100-form-btn">
							<button class="login100-form-btn">
								Register
							</button>
							<input type="hidden" name="btnAction" value="REGISTER" />
						</div>

						<div class="text-center p-t-90">
							<a class="txt1" href="account-access?type=LOGIN">Login</a>
							&nbsp;&nbsp;<span style="font-size:12px; color:white">|</span>&nbsp;&nbsp;
							<a class="txt1" href="account-access?type=PASSWORDRESET">Forgot Password?</a>
						</div>
						</form>';

					} else if($_GET['type']=="PASSWORDRESET"){

						echo 
						'
						<form class="login100-form validate-form" action="account-access?type=PASSWORDRESET" method="POST">
						<div class="wrap-input100 validate-input" data-validate = "Enter username">
							<input class="input100" type="text" name="member_username" placeholder="Username">
							<span class="focus-input100" data-placeholder="&#xf207;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Enter phone">
							<input class="input100" type="number" name="member_phone" placeholder="Phone">
							<span class="focus-input100" data-placeholder="&#xf10b;"></span>
						</div>

						<div class="">

							<div style="float:left;margin-right:10px;width:20%;">
								<select id="member_phone_country" name="member_phone_country" style="float:left;padding:3px 5px; height:45px;">
									'.$optionCountry.'
								</select>
							</div>

							<div style="float:left;margin-right:5px;width: 60%">
								<div class="wrap-input100 validate-input" data-validate = "Enter phone">
									<input class="input100" type="number" id="member_phone" name="member_phone" placeholder="Phone">
								</div>
							</div>

							<div style="float:left;width:15%">
								<button type="submit" id="btnOTP" style="float:right; color:white; background: rgb(120,119,116); background: linear-gradient(135deg, rgba(120,119,116,1) 35%, rgba(152,151,146,1) 100%); font-size:14px;line-height:18px; border-radius:2px;height:45px;">
									Send OTP
								</button>
								<button type="submit" id="btnresendOTP" style="float:right; color:white; display:none;">
									Did not receive OTP ?
								</button>

								<input type="hidden" name="btnAction" value="OTP" />

							
							</div>							

							<div style="clear:both;"></div>

						</div>

						<div id="divOTP" class=" validate-input" data-validate = "Enter OTP" style="display:none;margin-bottom:30px;">
							
								
							<div class="wrap-input100" style="margin-bottom:-35px;">

								<input class="input100" type="number" name="otp" placeholder="OTP">
								
								<span class="focus-input100" data-placeholder="&#xf10b;"></span>

							</div>

							<div style="margin-right:15px;">

								<span id="timer" style="float:right; color:white;"></span>

								<div id="otp_message" style="float: right; color:white; margin-right:15px;"></div>

								<div style="clear:both;"></div>

							</div>

						</div>

						<div class="container-login100-form-btn">
							<button class="login100-form-btn">
								Send New Password
							</button>
							<input type="hidden" name="btnAction" value="PASSWORDRESET" />
						</div>
						

						<div class="text-center p-t-90">
							<a class="txt1" href="account-access?type=LOGIN">Login</a>
							&nbsp;&nbsp;<span style="font-size:12px; color:white">|</span>&nbsp;&nbsp;
							<a class="txt1" href="account-access?type=REGISTER">Register</a>
						</div>
						</form>';

					} else {

						echo 
						'
						<form class="login100-form validate-form" action="account-access" method="POST">
						<div class="wrap-input100 validate-input" data-validate = "Enter username">
							<input class="input100" type="text" name="member_username" placeholder="Username">
							<span class="focus-input100" data-placeholder="&#xf207;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<input class="input100" type="password" name="member_password" placeholder="Password">
							<span class="focus-input100" data-placeholder="&#xf191;"></span>
						</div>


						<div class="container-login100-form-btn">
							<button class="login100-form-btn">
								Login
							</button>
							<input type="hidden" name="btnAction" value="LOGIN" />
						</div>
						

						<div class="text-center p-t-90">
							<a class="txt1" href="account-access?type=PASSWORDRESET">Forgot Password?</a>
							&nbsp;&nbsp;<span style="font-size:12px; color:white">|</span>&nbsp;&nbsp;
							<a class="txt1" href="account-access?type=REGISTER">Register</a>
						</div>
						</form>';

					}


					?>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?=PATH?>/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=PATH?>/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=PATH?>/vendor/bootstrap/js/popper.js"></script>
	<script src="<?=PATH?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=PATH?>/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=PATH?>/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?=PATH?>/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?=PATH?>/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?=PATH?>/js/main.js"></script>

	<script>
		// COUNTDOWN OTP
		// COUNTDOWN OTP
		// COUNTDOWN OTP

		let timerOn = true;

		function timer(remaining) {
		    var m = Math.floor(remaining / 60);
		    var s = remaining % 60;

		    m = m < 10 ? '0' + m : m;
		    s = s < 10 ? '0' + s : s;
		    document.getElementById('timer').innerHTML = m + ':' + s;
		    remaining -= 1;

		    if(remaining >= 0 && timerOn) {
		        setTimeout(function() {
		            timer(remaining);
		        }, 1000);
		        return;
		    }

		    if(!timerOn) {
		        // Do validate stuff here
		        return;
		    }

		    // Do timeout stuff here
		    // $("#btnOTP").css("display", "block");
		    $("#btnresendOTP").css("display", "block");
		    $("#timer").css("display", "none");
		    $("#otp_message").css("display", "none");
		}

		// SEND OTP
		// SEND OTP
		// SEND OTP

		$("#btnOTP").click(function(){
			if($("#member_username").val() == "" || $("#member_password").val() == "" || $("#member_phone_country").val() == "" || $("#member_phone").val() == "")
			{
				alert("Incomplete input.");
			}
			else
			{

				var strPhone = $("#member_phone_country").val()+''+$("#member_phone").val();
				
				timer(60);
			  	$("#timer").css("display", "block");
			  	$("#btnOTP").css("display", "none");
			  	$("#divOTP").css("display", "block");

			  	$.ajax({
	                url: window.location.origin + "/includes/ajax/ajax.php",
	                method: "POST",
	                data: {
			          otp: 1,
			          //phone: $("#member_phone").val(),
			          phone: strPhone,
			        },
	                success: function(data) {
	                	$('#otp_message').html(data);
	                }
	            });
			}
		});

		// RESEND OTP
		// RESEND OTP
		// RESEND OTP

		$("#btnresendOTP").click(function(){
			if($("#member_username").val() == "" || $("#member_password").val() == "" || $("#member_phone_country").val() == "" || $("#member_phone").val() == "")
			{
				alert("Incomplete input.");
			}
			else
			{	
				var strPhone = $("#member_phone_country").val()+''+$("#member_phone").val();

				timer(60);
			  	$("#timer").css("display", "block");
			  	$("#btnresendOTP").css("display", "none");
			  	$("#divOTP").css("display", "block");

			  	$.ajax({
	                url: window.location.origin + "/includes/ajax/ajax.php",
	                method: "POST",
	                data: {
			          otp: 1,
			          //phone: $("#member_phone").val(),
			          phone: strPhone,
			        },
	                success: function(data) {
	                	$('#otp_message').html(data);
	                }
	            });
			}
		});

		// timer(120);
	</script>

</body>
</html>


<?php

	tep_close();

?>


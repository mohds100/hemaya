<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/User.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"/>
    <link rel="stylesheet" href="./styles.css" />
    <title>تسجيل الدخول </title>
</head>
<body>
    <!-- navber -->
    <nav>
     <div class="logo">
     <i class="fas fa-camera-retro"></i>
     <h4>حماية</h4></div>
     <ul class="nav-items">
     <li class="nav-item">
    </nav>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
  <link href="assets/css/user-registration.css" type="text/css"rel="stylesheet" />
<style>
	
.sign-up-container{
  background-image: linear-gradient(to right, #fffacd  , #fffacd );
}
.form-label{
color:#512b11 !important;
}
#login-btn{
	color:#512b11;
	font-weight:bold;
	background: #765;
}
</style>
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
				<a href="user-registration.php" style="color:#512b11;">التسجيل</a>
			</div>
			<div class="signup-align">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading"  style="color:#512b11;">تسجيل الدخول</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
				<div class="row">
						<div class="inline-block">
							<div class="form-label">
								اسم المستخدم<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								كلمة المرور 	<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="login-password" id="login-password">
						</div>
					</div>
					<div class="row">
						<input class="btn btn-dark" type="submit" name="login-btn"
							id="login-btn" value="تسجيل الدخول">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
function loginValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
</BODY>
</HTML>
<!-- footer -->	
<footer>
<div class="footer-section">
<p>جميع الحقوق محفوظة لموقع حماية 2023</p>
<p>للتواصل 0560349555</p>
</div>
</footer>
</body>
</html>

    <?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index_log.php";
    header("Location: $url");
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"/>
    <link rel="stylesheet" href="./styles.css" />
    <title>موقع حماية</title>
</head>
<body>
    <!-- navber -->
    <nav>
     <div class="logo">
     <i class="fas fa-camera-retro"></i>
     <h4>حماية</h4></div>
     <ul class="nav-items">
     <li class="nav-item">
     <a href="home.php" class="nav-link"> الرئيسية</a></li>
     <ul class="nav-items">
     <li class="nav-item">
     <a href="ibout.html" class="nav-link">عنا </a></li>
     <ul class="nav-items">
     <li class="nav-item">
     <a href="server.html" class="nav-link">الخدمات </a></li>
     <ul class="nav-items"><li class="nav-item">
     <a href="prod.html" class="nav-link">المنتجات</a></li>
     <ul class="nav-items">
     <li class="nav-item">
     <a href="#" class="nav-link">الشراء </a></li>
     <ul class="nav-items">
     <li class="nav-item">
     <a href="user-registration.php" class="nav-link">التسجيل </a></li>
     <a href="login.php" class="nav-link">تسجيل الدخول  </a></li>
     <ul class="nav-items">
      <li class="nav-item">
     <a href="logout.php" class="nav-link">تسجيل الخروج  </a></li>
     </nav>
     <BODY>
  <div class="page-content jumbotron">
    <h3 style="color:#512b11; font-weight:bold;">اهلا<?php echo $username;?></h3></div>
    </div>	
  </BODY>
        <!--hero section -->
    <section class="--hero">
    <div class="hero-section">
    <div class="content">
    <h4>اهلا بك في موقع حماية لكاميرات مراقبة المنازل والسيارات</h4>
     <!-- What's New Section -->
     <section class="home-bage" id="bage">
        <div class="bage-section">
          <div class="bage">
            <div class="bage">
              
            <img width="200" height="200" src="./imge/prod.png" /><br>
            <a href="prod.html" class=""><h2>المنتجات</h2></a></div>
          <div class="bage">
            <img width="200" height="200" src="./imge/trk.png" /><br>
            <a href="trk.html" class=""><h2>التركيب</h2></a></div>
          <div class="bage">
            <img width="200" height="200" src="./imge/snn.png" /><br>
            <a href="./sunh.html" class=""><h2>الصيانة</h2></a></div>
            
                
        </div>
      </section>
    </div>
</section>
<!-- footer -->
<br> <br><br><br>
<br><br><br><br>
<footer>
<div class="footer-section">
<p>جميع الحقوق محفوظة لموقع حماية  2023</p>
<p>للتواصل 0560349555</p>
</div>
</footer>
</body>
</html>
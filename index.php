<?php
session_start();
if (!isset($_SESSION['user'])) {
	header("location:contents/welcome.php");
}
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Jaga SiGinjal - Sistem Pakar Penyakit Ginjal</title>
    
    <!-- Meta -->
    <meta charset="utf-8">   
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/theme.css">

</head> 

<body>
    
    <header class="header text-center">	    
	    <h1 class="blog-name pt-lg-4 mb-0"><a href="?page=home">Jaga SiGinjal</a></h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="assets/images/logo.png" alt="image" >				
					<div class="bio mb-3">Jaga SiGinjal adalah sistem pakar penyakit ginjal berbasis web.<br><a href="?page=about">Mengenal Penyakit Ginjal</a></div><!--//bio-->
                    <hr> 
				<!--//profile-section-->
				
				<ul class="navbar-nav flex-column text-left">
					<li class="nav-item">
					    <a class="nav-link" href="?page=home"><i class="fas fa-home fa-fw mr-2"></i>Beranda <span class="sr-only">(current)</span></a>
					</li>
                    <li class="nav-item">
					    <a class="nav-link" href="?page=check"><i class="fas fa-check fa-fw mr-2"></i>Periksa</a>
                    </li>
                    <li class="nav-item">
					    <a class="nav-link" href="?page=about"><i class="fas fa-info fa-fw mr-2"></i>Pengetahuan</a>
                    </li>
                    <li class="nav-item">
					    <a class="nav-link" href="?page=dev"><i class="fas fa-code fa-fw mr-2"></i>Pengembang</a>
                    </li>
					<li class="nav-item">
					    <a class="nav-link" href="?page=logout"><i class="fas fa-key fa-fw mr-2"></i>Keluar</a>
                    </li>
				</ul>
                <hr>
			</div>
            </div>
		</nav>
    </header>
    
    <div class="main-wrapper">
	    <section class="cta-section theme-bg-light py-5">
		    <div class="container align-items-center">
                <?php
                $page = isset($_GET['page']) ? $_GET['page'] : 'home';
                if ($page == 'home') {
                    include_once('contents/home.php');
                } elseif ($page == 'about') {
                    include_once('contents/about.php');
                } elseif ($page == 'check') {
                    include_once('contents/check.php');
                } elseif ($page == 'logout') {
                    include_once('contents/logout.php');
                } elseif ($page == 'dev') {
                    include_once('contents/dev.php');
                } else {
                    header('location:.');
                }
                ?>
		    </div>
	    </section>
	    
	    <footer class="footer text-center py-3 theme-bg-dark">
		   
            <small class="copyright">Jaga SiGinjal - Sistem Pakar Penyakit Ginjal Berbasis Web - &copy; 2021</small>
		   
	    </footer>
    
    </div><!--//main-wrapper-->
        
    <!-- Javascript -->          
    <script src="assets/plugins/jquery-3.3.1.min.js"></script>
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap.min.js"></script>

</body>
</html> 


<?php
session_start();
// koneksi
require_once "database/db.php";
?>
<!DOCTYPE html>
 <html lang="en">
  <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <!-- start: Facebook Open Graph -->
   <meta property="og:title" content=""/>
   <meta property="og:description" content=""/>
   <meta property="og:type" content=""/>
   <meta property="og:url" content=""/>
   <meta property="og:image" content=""/>
   <title>BerkahKomputer | Pusat perlengkapan komputer terpercaya</title>
   <!-- end: Facebook Open Graph --> 
   <!-- start: CSS --> 
   <link href="css/bootstrap.css" rel="stylesheet">
   <link href="css/bootstrap-responsive.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
   <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
   <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
   <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
   <style>
	  .span4{
		  box-shadow:0 0 10px #dddd;
	  }
	  .gambar{
		  overflow:hidden;
		  width:100%;
		  height:250px;
	  }
	  .gambar img{
		  width:100%;
		  height:100%;
	  }
   </style>
   <!-- end: CSS -->
  </head>
  <body>
	<!--start: Header -->
	<header>
	 <!--start: Container -->
	 <div class="container">
	  <!--start: Row -->
	  <div class="row">	
	   <!--start: Logo -->
		<div class="logo span3">			
		 <a class="brand" href="#"><img src="img/logo2.png" alt="Logo"></a>
		</div>
		<!--end: Logo -->	
		<!--start: Navigation -->
		<div class="span9">
		 <div class="navbar navbar-inverse">
		  <div class="navbar-inner">
		   <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		   </a>
		   <div class="nav-collapse collapse">
			 <ul class="nav">
			  <li class="active"><a href="index.php">Home</a></li>
			  <li><a href="produk.php">Produk Kami</a></li>
			  <li><a href="testimoni.php">Testimoni</a></li>
              <li><a href="detail.php">Keranjang</a></li>
			  <?php if(isset($_SESSION["user"])): ?>
				<li><a href="logout.php">Logout</a></li>
			  <?php else: ?>
			  <li class="dropdown">
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
			                			<ul class="dropdown-menu">
			                  				<li><a href="admin/login.php">Admin</a></li>
			                  				<li><a href="login.php">User</a></li>
			                  				<!--<li class="divider"></li>
			                  				<li class="nav-header">Nav header</li>
			                  				<li><a href="#">Separated link</a></li>
			                  				<li><a href="#">One more separated link</a></li>-->
			                			</ul>
			              			</li>
				<?php endif; ?>
			            		</ul>
			          		</div>
			        	</div>
			      	</div>
					
				</div>	
				<!--end: Navigation -->
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
	
	<!-- start: Slider -->
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2>CPU</h2>
				<p>Kami menyediakan CPU AMD dan Intel dengan kualitas tinggi.</p>
				<div class="da-img"><img src="img/parallax-slider/cpu.png" alt="image01" /></div>
			</div>
			<div class="da-slide">
				<h2>GPU</h2>
				<p>Kami memiliki banyak pilihan GPU bagi para gamers dari harga yang terjangkau hingga premium.</p>
				<div class="da-img"><img src="img/parallax-slider/gpu.png" alt="image02" /></div>
			</div>
			<div class="da-slide">
				<h2>Motherboard</h2>
				<p>Miliki Motherboard yang berkualitas tinggi untuk PC rakitan anda.</p>
				<div class="da-img"><img src="img/parallax-slider/motherboard.png" alt="image03" /></div>
			</div>
			<div class="da-slide">
				<h2>RAM</h2>
				<p>Tingkatkan RAM PC anda untuk meningkatkan kecepatan PC anda.</p>
				
				<div class="da-img"><img src="img/parallax-slider/ram.png" alt="image04" /></div>
			</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>
		
	</div>
	<!-- end: Slider -->
			
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
	
      		<!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
      		<div class="hero-unit">
        		<p>
					Kami adalah toko perlengkapan komputer online terpercaya dan terlengkap di jakarta, dengan harga terjangkau anda sudah dapat memiliki produk kamu. Selamat Berbelanja Customer..
				</p>
        		<p><a class="btn btn-success btn-large" href="produk.php">Mulai Berbelanja &raquo;</a></p>
                                
      		</div>
            <!--<div class="title"><h3>Keranjang Anda</h3></div>
            <div class="hero-unit">
            </div> -->
			<!-- end: Hero Unit -->

      		<!-- start: Row -->
            
      		<div class="row">
	                <?php
                    $allData = $db->query("SELECT*FROM barang");
                    while($data = $allData->fetch_assoc()){
                    ?>
        		<div class="span4">
          			<div class="icons-box">
                        <div class="title"><h3><?php echo $data['merek']; ?></h3></div>
						<div class="gambar"><img src="admin/css/img/<?php echo $data['gambar']; ?>"/></div>
                        
						<div><h3>Rp.<?php echo number_format($data['harga']);?></h3></div>
					<p>
						
						</p>
						<div class="clear"><a href="detailproduk.php?uniq=<?php echo $data['id_barang'];?>" class="btn btn-lg btn-danger">Detail</a></div>
					
                    </div>
        		</div>
                <?php   
              }
              
              
              ?> -->
      		</div>
			<!-- end: Row -->
      		

		
			<hr>
			
			<!-- start: Row -->
			<div class="row">
				
				<!-- start: Icon Boxes -->
				<div class="icons-box-vert-container">

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-ok ico-white circle-color-full big-color"></i>
							<div class="icons-box-vert-info">
								<h3>Kemudahan Berbelanja</h3>
								<p>Dapatkan kemudahan berbelanja di BerkahKomputer, Kami menyediakan kebutuhan untuk PC anda.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box-->

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-ipad ico-white circle-color-full big-color"></i>
							<div class="icons-box-vert-info">
								<h3>Berbelanja Dengan Gadget</h3>
								<p>Anda bisa memesan produk kami melalui gadget kesayangan anda, belanja di BerkahKomputer praktis dan mudah.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

					<!-- start: Icon Box Start -->
					<div class="span6">
						<div class="icons-box-vert">
							<i class="ico-thumbs-up  ico-white circle-color-full big-color"></i>
							<div class="icons-box-vert-info">
								<h3>Sosial Media</h3>
								<p>Follow twitter dan fan page facebook kami untuk mendapatkan update promo special setiap harinya.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

				</div>
				<!-- end: Icon Boxes -->
				<div class="clear"></div>
			</div>
			<!-- end: Row -->
			
			<hr>
			
		</div>
		<!--end: Container-->
	
	</div>
	<!-- end: Wrapper  -->			

			
			</div>
			<!-- end: Row -->
			
		</div>
		<!-- end: Container  -->	

	</div>	
	<!-- end: Footer Menu -->

	<!-- start: Footer -->
	<div id="footer">
		
		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: About -->
				<div class="span3">
					
					<h3>Tentang BerkahKomputer</h3>
					<p>
						BerkahKomputer adalah toko online yang bergerak di bidang perlengkapan komputer, sasaran kami semua kalangan baik muda maupun tua, peminat IT atau kasual
					</p>
						
				</div>
				<!-- end: About -->

				<!-- start: Photo Stream -->
				<div class="span3">
					
					<h3>Alamat Kami</h3>
					Jl. Margonda Raya No.100, Pondok Cina, Beji, Kota Depok, Jawa Barat 16424 (Kampus D)<br />
                    Telp : 081287727825<br />
                    Email : <a href="mailto:ichsanrazan3@gmail.com">ichsanrazan3@gmail.com</a> / <a href="mailto:ichsanrazan3@gmail.com">ichsanrazan3@gmail.com</a>
				</div>
				<!-- end: Photo Stream -->

				<div class="span6">
				
					<!-- start: Follow Us -->
					<h3>Follow Us!</h3>
					<ul class="social-grid">
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-twitter">
											<a href="http://twitter.com"></a>
										</div>
										<div class="social-info-back social-twitter-hover">
											<a href="http://twitter.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-facebook">
											<a href="http://facebook.com"></a>
										</div>
										<div class="social-info-back social-facebook-hover">
											<a href="http://facebook.com"></a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-dribbble">
											<a href="http://dribbble.com"></a>
										</div>
										<div class="social-info-back social-dribbble-hover">
											<a href="http://dribbble.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-flickr">
											<a href="http://flickr.com"></a>
										</div>
										<div class="social-info-back social-flickr-hover">
											<a href="http://flickr.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
					</ul>
					<!-- end: Follow Us -->
				
					<!-- start: Newsletter -->
				<!--	<form id="newsletter">
						<h3>Newsletter</h3>
						<p>Please leave us your email</p>
						<label for="newsletter_input">@:</label>
						<input type="text" id="newsletter_input"/>
						<input type="submit" id="newsletter_submit" value="submit">
					</form> -->
					<!-- end: Newsletter -->
				
				</div>
				
			</div>
			<!-- end: Row -->	
			
		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Footer -->

	<!-- start: Copyright -->
	<div id="copyright">
	
		<!-- start: Container -->
		<div class="container">
		
			<p>
			Copyright &copy; 2021 <!-- <a href="http://www.niqoweb.com">DistroIT 2015</a> <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">Bootstrap Themes</a> designed by BootstrapMaster -->
			</p>
	
		</div>
		<!-- end: Container  -->
		
	</div>	
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script defer="defer" src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>


  <?php include "header.php"; ?>
	<!-- End Header_Area -->

    
    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>HAKKIMIZDA</h2>
        <ol class="breadcrumb">
            <li><a href="index.php">ANASAYFA</a></li>
            <li><a href="javascript:void(0)" class="active">HAKKIMIZDA</a></li>
        </ol>
    </section>
    <!-- End Banner area -->
        
    <?php
        $hakkimizda = $db->prepare("SELECT *FROM hakkimizda");
        $hakkimizda->execute();
        $hakkimizda_cek = $hakkimizda->fetch(PDO::FETCH_ASSOC);
        ?> 




    <!-- About Us Area -->
    <section class="about_us_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>HAKKIMIZDA</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="row about_row">
                <div class="col-md-12 col-sm-12 about_client about_pages_client">
                    <div class="subtittle">
                        <h2>BİZ KİMİZ</h2>
                    </div>
                    <p><?php echo $hakkimizda_cek["hakkimizda_aciklama"]; ?></p>
                </div>


                <div class="col-md-12 col-sm-12 about_client about_pages_client">
                    <div class="subtittle">
                        <h2>VİZYONUMUZ</h2>
                    </div>
                    <p><?php echo $hakkimizda_cek["hakkimizda_vizyon"]; ?></p>
                </div>


                <div class="col-md-12 col-sm-12 about_client about_pages_client">
                    <div class="subtittle">
                        <h2>MİSYONUMUZ</h2>
                    </div>
                    <p><?php echo $hakkimizda_cek["hakkimizda_misyon"]; ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->
  <hr style ="background-color: #ccc; height:3px; ">

    <!-- Our Team Area -->
    <?php include "ekip.php"; ?>
    <!-- End Our Team Area -->

    <!-- Footer Area -->
    <?php include "footer.php"; ?>
    <!-- End Footer Area -->





    <!-- jQuery JS -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Animate JS -->
    <script src="vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="vendors/stellar/jquery.stellar.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>
</body>
</html>

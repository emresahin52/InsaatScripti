<section class="our_partners_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>SPONSORLAR</h2>
            </div>
            <div class="partners">


            <?php
        $sponsor = $db->prepare("SELECT *FROM sponsorlar ORDER BY sponsor_id DESC");
        $sponsor->execute();
        $sponsor_cek = $sponsor->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($sponsor_cek as $row) {
            ?>

                <div class="col-md-12 booking_text"><img src="images/client_logo/<?php echo $row["sponsor_resim"]; ?>" alt=""></div>
         
              <?php
             }
              ?> 
            </div>
        </div>
        
        
        <?php
        $duyurular = $db->prepare("SELECT *FROM duyurular");
        $duyurular->execute();
        $duyuru_cek = $duyurular->fetch(PDO::FETCH_ASSOC);
        ?> 


        <div class="book_now_aera">
            <div class="container">
                <div class="row book_now">
                    <div class="col-md-10 booking_text">
                        <h4><?php echo $duyuru_cek["duyuru_kalinyazi"]; ?></h4>
                        <p><?php echo $duyuru_cek["duyuru_aciklama"]; ?></p>
                    </div>
                    
                    <div class="col-md-2 p0 book_bottun">
                        <a href="<?php echo $duyuru_cek["duyuru_link"]; ?>" class="button_all"><b style ="font-size:50px;">  &rarr; </b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
<section class="testimonial_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>MÜŞTERİ YORUMLARI</h2>
                <?php
        
        $yorumlar = $db->prepare("SELECT *FROM yorumlar ORDER BY yorum_id DESC");
        $yorumlar->execute();
        $yorum_cek = $yorumlar->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($yorum_cek as $row) {
            ?>

            </div>
            <div class="testimonial_carosel">
                <div class="item">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img style="border-radius:50%;"  class="media-object" src="images/<?php echo $row["yorum_resim"]; ?>" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo $row["yorum_isim"]; ?></h4>
                            <h6><?php echo $row["yorum_meslek"]; ?></h6>
                        </div>
                    </div>
                    <p><i class="fa fa-quote-right" aria-hidden="true"></i><?php echo $row["yorum_aciklama"]; ?><i class="fa fa-quote-left" aria-hidden="true"></i></p>
                </div>

       
        <?php
        }
        ?> 

               
            </div>
        </div>
    </section>


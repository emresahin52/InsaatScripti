<?php 
        $slidersor = $db->prepare("SELECT * FROM Slider");
        $slidersor->execute();

?>
<section class="slider_area row m0">
        <div class="slider_inner">
        <?php while ($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) { ?>
            <div data-thumb="images/<?php echo $slidercek["slider_resim"]; ?>" data-src="images/<?php echo $slidercek["slider_resim"]; ?>">
                <div class="camera_caption">
                   <div class="container">
                        <h5 class=" wow fadeInUp animated"><?php echo $slidercek["sldier_renklibaslik"]; ?></h5>
                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s"><?php echo $slidercek["slider_normalbaslik"]; ?></h3>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s"><?php echo $slidercek["slider_paragraf"]; ?></p>
                        <a class=" wow fadeInUp animated" data-wow-delay="1s" href="<?php echo $slidercek["slider_link"]; ?>">GİT</a>
                   </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
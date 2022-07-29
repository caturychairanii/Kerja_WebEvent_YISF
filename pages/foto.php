======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

    <ol>
        <li><a href="index.php">Home</a></li>
        <li>Photo</li>
    </ol>
    <h2>Photo</h2>

    </div>
    </section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Photo</h2>
            <p>Our Memories</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">2021</li>
            <li data-filter=".filter-card">2022</li>
            <!-- <li data-filter=".filter-web">2022</li> -->
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <?php foreach ($Foto as $f => $value) { ?>
            
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-img"><img src="assets/img/portfolio/<?= $f ?>.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>1</h4>
                        <p><?= $value ?></p>
                        <a href="assets/img/portfolio/<?= $f ?>.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="1"><i class="bx bx-plus"></i></a>
                        <a href="" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

        <?php } ?>

       
        
        
        

        </div>

    </div>
    </section><!-- End Portfolio Section
<?php

    class Page{
        private $page_name;

        public function set_page_name($page_name)
        {
            $this->page_name = $page_name;
        }
        
        function add_styles() {
            #Favicon
            echo '<link href="../assets/img/favicon.png" rel="icon">';
            echo '<link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">';
        
            #Google Fonts
            echo '<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">';
        
            #Vendor CSS files
            echo '<link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">';
            echo '<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">';
            echo '<link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">';
            echo '<link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">';
            echo '<link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">';
            echo '<link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">';
        
            #Main CSS file
            echo '<link href="../assets/css/style.css" rel="stylesheet">';
        }

        function add_scripts(){
            #Vendor JS Files
            echo '<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>';
            echo '<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>';
            echo '<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>';
            echo '<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>';
        
            #Main JS file
            echo '<script src="../assets/js/main.js"></script>';
        }

        function redirect_homepage(){
            header("Location: templates/home.php");
            die("Nepodarilo sa nájsť Domovskú stránku");
        }

        function generateCarousel($slides) {
            
            foreach ($slides as $slide) {
                ?>
                <div class="carousel-item <?php if ($slide['active']) echo 'active'; ?>" style="background-image: url(<?php echo $slide['image']; ?>);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown"><?php echo $slide['title']; ?></h2>
                            <p class="animate__animated animate__fadeInUp"><?php echo $slide['description']; ?></p>
                            <div>
                                <a href="menu.php" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                                <a href="login.php" class="btn-book animate__animated animate__fadeInUp scrollto">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }

        function generateGallery($galleryItems) {
            
            foreach ($galleryItems as $item) {
                ?>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="<?php echo $item['href']; ?>" class="gallery-lightbox">
                            <img src="<?php echo $item['src']; ?>" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <?php
            }
        }

        function generateTestimonials($testimonials) {
            foreach ($testimonials as $testimonial) {
                ?>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="<?php echo $testimonial['img']; ?>" class="testimonial-img" alt="">
                        <h3><?php echo $testimonial['name']; ?></h3>
                        <h4><?php echo $testimonial['position']; ?></h4>
                        <div class="stars">
                            <?php for ($i = 0; $i < 5; $i++) { ?>
                                <i class="bi bi-star-fill"></i>
                            <?php } ?>
                        </div>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            <?php echo $testimonial['quote']; ?>
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>
                <?php
            }
        }
    }

?>
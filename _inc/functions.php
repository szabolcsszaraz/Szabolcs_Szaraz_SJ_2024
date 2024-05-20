<?php

function add_styles() {
    #Favicon
    echo '<link href="assets/img/favicon.png" rel="icon">';
    echo '<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">';

    #Google Fonts
    echo '<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">';

    #Vendor CSS files
    echo '<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">';
    echo '<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">';
    echo '<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">';
    echo '<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">';
    echo '<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">';
    echo '<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">';

    #Main CSS file
    echo '<link href="assets/css/style.css" rel="stylesheet">';
}

function add_scripts(){
    #Vendor JS Files
    echo '<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>';
    echo '<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>';
    echo '<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>';
    echo '<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>';
    echo '<script src="assets/vendor/php-email-form/validate.js"></script>';

    #Main JS file
    echo '<script src="assets/js/main.js"></script>';
    echo '<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>';
}

function generate_menu(array $pages) {
    $menuItems = ''; // Inicializácia premennej pre uloženie HTML kódu navigačného menu

    // Prechádza všetky položky v zadanom zozname stránok a URL adries
    foreach($pages as $page_name => $page_url){
        $menuItems .= '<li><a class="nav-link" href="'.$page_url.'">'.$page_name.'</a></li>';
      }

    // Vráti vygenerovaný HTML kód pre navigačné menu
    return $menuItems;
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
                        <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}

?>
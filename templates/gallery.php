<?php
    include_once 'partials/header.php';
?>
<br>
<br>
<br>
<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Some photos from <span>Our Restaurant</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row g-0">

        <?php
          $galleryItems = [
              ['href' => '../assets/img/gallery/gallery-1.jpg', 'src' => '../assets/img/gallery/gallery-1.jpg'],
              ['href' => '../assets/img/gallery/gallery-2.jpg', 'src' => '../assets/img/gallery/gallery-2.jpg'],
              ['href' => '../assets/img/gallery/gallery-3.jpg', 'src' => '../assets/img/gallery/gallery-3.jpg'],
              ['href' => '../assets/img/gallery/gallery-4.jpg', 'src' => '../assets/img/gallery/gallery-4.jpg'],
              ['href' => '../assets/img/gallery/gallery-5.jpg', 'src' => '../assets/img/gallery/gallery-5.jpg'],
              ['href' => '../assets/img/gallery/gallery-6.jpg', 'src' => '../assets/img/gallery/gallery-6.jpg'],
              ['href' => '../assets/img/gallery/gallery-7.jpg', 'src' => '../assets/img/gallery/gallery-7.jpg'],
              ['href' => '../assets/img/gallery/gallery-8.jpg', 'src' => '../assets/img/gallery/gallery-8.jpg'],
          ];

          generateGallery($galleryItems);
        ?>


        </div>

      </div>
    </section><!-- End Gallery Section -->
    <?php
    include_once 'partials/footer.php';
    ?>
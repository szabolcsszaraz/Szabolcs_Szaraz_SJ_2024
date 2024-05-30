<?php
      include_once 'partials/header.php';
?>
<br>
<br>
<br>

  <main id="main">


    <section class="inner-page">
      <div class="container">
        <p>
          Thank You ...
        </p>
<?php
  $contact_object = new Contact();
  $contact_object->insert();
?>
      </div>
    </section>

  </main><!-- End #main -->

  <?php
    include_once 'partials/footer.php';
  ?>
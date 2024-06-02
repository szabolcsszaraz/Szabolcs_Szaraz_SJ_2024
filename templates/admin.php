<?php
include('partials/header.php');

if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true){
    header('Location: 404.php');
}
?>
<br>
<br>
<br>
<br>
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-left">
                <h1>Admin rozhranie</h1>
                <?php
                include('partials/admin-kontakt.php');
                ?>
            </div>
        </div>
    </section> 
</main>
<?php
    include('partials/footer.php');
?>

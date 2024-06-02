<?php
include('partials/header.php');
echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">';

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
                    //print_r($_SESSION);
                    if($_SESSION['is_admin']==1){
                        include('partials/admin-kontakt.php');
                    }
                ?>
            </div>
        </div>
    </section> 
</main>
<?php
    include('partials/footer.php');
?>

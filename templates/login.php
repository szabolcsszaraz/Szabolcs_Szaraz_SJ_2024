<?php
include('partials/header.php');
echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">';
if(isset($_SESSION['logged_in'])&&$_SESSION['logged_in']==true){
    header('Location: admin.php');
}
?>
<br>
<br>
<br>
<br>
<br>
<br>
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-left">
                <h1>Prihlásenie</h1>
                <form action="" method="POST">
                    <input type="email" name="email" placeholder="Vaše meno">
                    <br>
                    <input type="text" name="password" placeholder="Vaše heslo">
                    <br>
                    <input type="submit" value="Odoslať" name="user_login">
                    <a href="register.php">Register</a>
                </form>
                <?php
                    if(isset($_POST['user_login'])){
                        $email = $_POST['email'];
                        $password = $_POST['password']; 

                        $user_object = new User();

                        $login_success = $user_object->login($email,$password);
                        //ak metóda vráti TRUE
                        if($login_success == true){
                            header('Location: admin.php');
                            die;
                        }else{
                            echo 'Nesprávne meno alebo heslo';
                        }

                    }
                ?>
            </div>
        </div>
    </section> 
</main>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
    include('partials/footer.php');
?>
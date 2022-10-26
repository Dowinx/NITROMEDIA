 <?php session_start(); 
    // setcookie('name', 'graven', time() + (30 * 24 * 3600));
    // var_dump($_COOKIE);
    // if(isset($_COOKIE['name'])) {
    //     echo "L'element existe bien " . $_COOKIE['name'];
    // } else {
    //     echo "L'element exit pas";
    // }

?> 





<!DOCTYPE html>
<html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="NITROMEDIA/SITE WEB/style.css">
        <title>NITROMEDIA</title>
        <script src="NITROMEDIA\SITE WEB\index.js" defer></script>
        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
       </head>
        
        <body>
            <nav>
                <ul>
                    <li><a href ="NITROMEDIA/SITE WEB/index.html" class="animation-border">Home</a></li>
                    <li><a href ="NITROMEDIA/SITE WEB/navbar html\pack.html"class="animation-border">Editing Packs</a><a</li>
                    <li><a href ="NITROMEDIA/SITE WEB/navbar html\services.html"class="animation-border">Services</a></li>
                    <li><a href ="NITROMEDIA/SITE WEB/navbar html\contact.html"class="animation-border">Contact & FAQ</a></li>             
                </ul>
                <div class="profile">
                    <li><a href="NITROMEDIA/SITE WEB/navbar html/panier.html"><img src="NITROMEDIA/SITE WEB/IMAGE/achat.png" alt="achat" />  </a></li>
                </div>         
                <div class="inscription">
                    <li><a href="index.php"><img src="NITROMEDIA/SITE WEB/IMAGE/inscription.png" alt="inscription" />  </a></li>
                    </div>                    
            </nav>
    <!-- Formulaire inscription -->
    <form method="post">
    <fieldset id="section1">
        <legend class="ml16">Sign Up :</legend>
        <label for="name">Enter your name</label>
        <input type="text" id="name" name="nom" autocomplete autofocus required></br> <!--Monoligne-->
    </br>
        <label for="pass">Enter your password</label>
        <input type="password" id="mdp" name="password" required></br>
    </br>
    <label for="pass">Confirm your password</label>
        <input type="password" id="confirmpass" name="confirmpass" required></br>
    </br>
        <label for="phone">Phone</label>
        <input type="number" id="phone" name="phone" required></br>
    </br>
        <label for="email">Enter your mail</label>
        <input type="email" id="email" name="email" placeholder="Ex: nom.prenom@gmail.com" required></br>
    </br>    
        <label for="postal">Postal code</label>
        <input type="number" id="postal" name="postal" required></br>
    </br>
        <label for="address">Address</label>
        <input type="address" id="address" name="address" placeholder="Optional"></br>
    </br>    
        <label>Do you accept the terms of use?</label> <br>
        <input type="checkbox" name="cgu" value="true" id="cgu" checked="checked" required>
        <label for="true">Accept</label>
        <input type="checkbox" name="cgu" value="false" id="cgu" >
        <label for="false">Refuse</label>
        <input id = "formsend" name="formsend" type="submit" value="Sign Up">
    </fieldset>
    
    </form>
    <video id="background-video" autoplay loop muted>
                <source src="NITROMEDIA\SITE WEB\VIDEO\background-editingpack.mp4" type="video/mp4">
                </video>
    <?php include 'includes/database.php';
                global $db; ?>

   
    
<?php include 'includes/signup.php'; ?>


<!-- FORMULAIRE SIGN IN -->

<form method="post">
    <fieldset id="section1">
        <legend class="ml17">Sign In :</legend>
        <label for="name">Enter your name</label>
        <input type="text" id="lname" name="lnom" autocomplete autofocus required></br> <!--Monoligne-->
    </br>
        <label for="pass">Enter your password</label>
        <input type="password" id="lmdp" name="lpassword" required></br>
    </br>
    
        <input id = "formlogin" name="formlogin" type="submit" value="Sign In">
        <?php include 'includes/signin.php'; ?>
        
    </fieldset>
    
    </form>


    <video id="background-video" autoplay loop muted>
                <source src="NITROMEDIA\SITE WEB\VIDEO\background-editingpack.mp4" type="video/mp4">
                </video>
        </body>


            <h1>Bienvenue sur votre profil</h1>
    <?php 
        if(isset($_SESSION['name'])) { ?>
            <p>Votre pseudo : <?= $_SESSION['name']; ?></p> <?php
        } else {
            echo "Veuillez vous connectez à votre compte";
        }

?>

</html>

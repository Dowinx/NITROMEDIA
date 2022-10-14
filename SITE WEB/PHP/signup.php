<!-- SESSION PHP PROFILE -->
<!-- <?php session_start();
    $_SESSION['pseudo'] = 'Graven'
    $_SESSION['age'] = 42 
    echo $_SESSION['pseudo'];
    ?> -->



<!DOCTYPE html>
<html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../style.css">
        <title>NITROMEDIA</title>
        <script src="../index.js" defer></script>
        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
       </head>
        
        <body>
            <nav>
                <ul>
                    <li><a href ="../index.html" class="animation-border">Home</a></li>
                    <li><a href ="../navbar html\pack.html"class="animation-border">Editing Packs</a><a</li>
                    <li><a href ="../navbar html\services.html"class="animation-border">Services</a></li>
                    <li><a href ="../navbar html\contact.html"class="animation-border">Contact & FAQ</a></li>             
                </ul>
                <div class="profile">
                    <li><a href="../navbar html/panier.html"><img src="../image/achat.png" alt="achat" />  </a></li>
                </div>         
                <div class="inscription">
                    <li><a href="../navbar html/inscription.html"><img src="../IMAGE/inscription.png" alt="inscription" />  </a></li>
                    </div>                    
            </nav>
    <form method="post">
    <fieldset id="section1">
        <legend class="form">Sign Up :</legend>
        <label for="name">Enter your name</label>
        <input type="text" id="name" name="prenom" autocomplete autofocus required></br> <!--Monoligne-->
    </br>
        <label for="pass">Enter your password</label>
        <input type="password" id="mdp" name="pass" required></br>
    </br>
    <label for="pass">Confirm your password</label>
        <input type="password" id="confirm-pass" name="confirm-password" required></br>
    </br>
        <label for="naissance">Phone</label>
        <input type="number" id="naissance" name="naissance" required></br>
    </br>
        <label for="email">Enter your mail</label>
        <input type="email" id="email" name="mail" placeholder="Ex: nom.prenom@gmail.com" required></br>
    </br>    
        <label for="naissance">Postal code</label>
        <input type="number" id="postal-code" name="postal-code" required></br>
    </br>
        <label for="address">Address</label>
        <input type="address" id="address" name="address" placeholder="Optional"></br>
    </br>    
        <label>Do you accept the terms of use?</label> <br>
        <input type="checkbox" name="cgu" value="true" id="cgu" checked="checked" required>
        <label for="true">Accept</label>
        <input type="checkbox" name="cgu" value="false" id="cgu" >
        <label for="false">Refuse</label>
        <input id = "formsend" type="submit" value="Sign Up">
        <ul>
            <a class ="signin" href="../navbar html/signin.html"><li>Sign In</li></a>
        </ul>
    </fieldset>
    
    </form>
    <video id="background-video" autoplay loop muted>
                <source src="../VIDEO/background-editingpack.mp4" type="video/mp4">
                </video>

        </body>
   

    <?php
        if(isset($_POST['formsend'])){

            extract ($_POST);

            if(!empty($password && !empty($password) && !empty($email))){

                if($password == $confirm-pass) {

                $options = [
                    'cost' => 12,
                ];

                $haspass = password_hash($password, PASSWORD_BCRYPT, $options);
                
                include 'PHP/database.php';
                global $db;

                $c = $db->prepare("SELECT email FROM users WHERE email = :email");
                $c->execute([
                    'email' => $email ]);
                $result = $c->rowCont();

                if($result == 0) {
                    $q = $db->prepare('INSERT INTO users(email,password) VALUES(:email,:password)');
                    $q->execute([
                        'email' => $email,
                        'password' => $hashpass
                    ]);
                    echo "Le compte a été créée";
                } else {
                    echo "Cet email existe déjà !"
                }
            }   
                // if (password_verify($password, $hashpass)){
                //     echo "correct";
                // } else {
                //     echo "incorrect";
                // }
            } else {
                echo "les champs ne sont pas tous remplies";
            }
        }
            
    ?>
    
</html>

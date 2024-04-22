<?php
  // // <?php if (!empty($erreur))  {echo $erreur;}



  if(isset($_SESSION['connect']) && $_SESSION['connect'] == false) {
    header("Location:promotion");
  }else{
    header("Location:   ");
  }

$erreur = "";
$email_Valid = "testphp@gmail.com";
$password_Valid = "passer123";

// Vérification de la soumission du formulaire
if(isset($_POST['login'])) {
    // Utilisation de la fonction filter_var pour nettoyer les entrées utilisateur
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if (empty($email) && empty($password)) {
        $erreur = "L'email et le mot de passe ne doivent pas être vides";
    } elseif (empty($email)) {
        $erreur = "L'email ne doit pas être vide";
    } elseif(empty($password)){
        $erreur = "Le mot de passe ne doit pas être vide";
    } else {
        // Utilisation de FILTER_VALIDATE_EMAIL pour valider l'email
        $email_secured = filter_var($email, FILTER_VALIDATE_EMAIL);
        
        if ($email_secured !== false && $email_Valid == $email_secured && $password_Valid == trim($password)) {
            // Utilisation de header pour rediriger après une validation réussie
            $_SESSION['connect'] = true;
            header("Location:promotion");
            exit; 
        } else {
            $erreur = "Mot de passe ou adresse email incorrect!";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulaire de Connexion</title>
<link rel="stylesheet" href="public/css/login.css">

</head>
<body>
  <form action=""  method="POST" class="tout">

  <div class="container">
    <img class="logo" src="public/images/sonatel.png" alt="">
    <div class="login-form">
      <div  style="<?php if (!empty($erreur))  echo"background-color: #f7d7da;"?>"> 
        <span><?php {echo $erreur;}?></span>
    </div>
      <label for="txt">Adresse Email <span>*</span></label>
      <input type="text" name="email"   placeholder="Entrez votre adresse email*">

      <label for="password">Mot de Passe <span>*</span></label>
      <input type="password"  name="password"  placeholder="Entrez votre mot de passe*">
      
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" name="remember"> Se souvenir de moi
      </label>
      <a href="#">Mot de passe Oublié?</a>
    </div>
    <button class="btn"  type="submit"  name="login">Login</button>
  </div>
  </form>
</body>
</html>
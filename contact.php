<?php
require('phpmailer/class.phpmailer.php');

if(!empty($_POST)){
    extract ($_POST);
    $valid = true;

    if(empty($nom)){
        $valid = false;
        $erreur_nom = "Vous n avez pas rempli votre nom";
    }

    if(empty($prenom)){
        $valid = false;
        $erreur_prenom = "Vous n avez pas rempli votre prenom";
    }

    if(!preg_match("/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i",$email)){
        $valid = false;
        $erreur_email = "email invalide";
    }

    if(empty($email)){
        $valid = false;
        $erreur_email = "Vous n avez pas rempli votre adresse mail";
    }

    if(empty($message)){
        $valid = false;
        $erreur_message = "Vous n avez pas rempli votre message";
    }

    $mail = new PHPMailer();
    $mail->CharSet = "utf-8";
    $mail->Host='smtp.free.fr';
    $mail->SMTPAuth   = false;
    $mail->Port = 25;


    // Expéditeur
    $mail->SetFrom($email, $nom .' '. $prenom);
    // Destinataire
    $mail->AddAddress('dubois.geof@gmail.com', 'Nom Prénom');
    $mail->AddReplyTo($email, $nom .' '. $prenom);
    // Objet
    $mail->Subject = $nom .' '. $prenom .' Vous a envoyé un message';

    // Votre message
    $message = nl2br(htmlspecialchars(stripslashes($_POST['message'])));
    $mail->MsgHTML($message);


    // Envoi du mail avec gestion des erreurs


    if($valid){
        if($mail->Send()) {
          $alert = "Votre message nous ai bien parvenu";
          unset($nom);
          unset($prenom);
          unset($email);
          unset($message);
        } else {
          $alert = "Désolé, il y a eut une erreur. Votre message ne nous ai pas parvenu";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Présentation Dubois Geoffrey</title>
    <meta name="google-site-verification" content="HwFdnNTQm4bX5Se151EnNuH0JDwU5eFbTVoDjp1EBrk" />
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <meta name="author" content="Geoffrey Dubois">
    <meta name="description" content="Geoffrey Dubois, Développeur, Développeur Web, autodidacte">
    <meta name="keywords" content="Développeur, Integrateur, Codeur, Web, Développeur Web, HTML, CSS, Javascript, JQuery, Java, SQL, Xml">

    <!-- Appel de la police google font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>

    <!-- Appel css -->
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    <link rel="stylesheet" type="text/css" href="css/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="css/bg_fullscreen.css"/>

    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Appel js -->
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="js/bg_fullscreen.js"></script>
    <script type="text/javascript" src="js/opacity_img.js"></script>
    <script type="text/javascript" src="js/filtre_folio.js"></script>
    <script type="text/javascript" src="js/return_top.js"></script>
    <script type="text/javascript" src="js/fix.js"></script>
</head>
<body>

<!-- Debut Images arrière plan-->
<ul class="cb-slideshow">
    <li>
        <span>Image 01</span>
    </li>
    <li>
        <span>Image 02</span>
    </li>
    <li>
        <span>Image 03</span>
    </li>
    <li>
        <span>Image 04</span>
    </li>
    <li>
        <span>Image 05</span>
    </li>
    <li>
        <span>Image 06</span>
    </li>
</ul>
<!-- Fin Images arrière plan-->

<!-- Debut Conteneur-->
<div id="menu_content">
    <!-- Debut menu-->
    <div id="menu">
        <div id="logo" class="mb30">
            <a href="index.html" title="Dubois Geoffrey developpeur web"><img src="images/logo.png" title="Dubois Geoffrey developpeur web" alt="Dubois Geoffrey developpeur web"/></a>
        </div>
        <!-- Debut items-->
        <ul>
            <li><a href="index" title="presentation">Présentation</a><br><span> Venez découvrir un petit bout de moi</span></li>
            <li><a href="cv" title="cv">Mon CV</a><br><span> Venez découvrir mon expérience</span></li>
            <li><a href="parcours" title="parcours">Mon Parcours</a><br><span> Venez découvrir mon parcours</span></li>
            <li><a href="portfolio" title="portfolio">Portfolio</a><br><span> Venez découvrir mon portfolio</span></li>
            <li class="active"><a href="contact" title="contact" class="active" >Contact</a><br><span> Contactez moi</span></li>
        </ul>
        <!-- Fin items-->

        <!-- Debut reseau sociaux-->
        <div id="reseau">
            <!-- Appel du js opacity_img -->
            <div class="miniGallery">
                <a href="#" title="linkedin"><img src="images/ico_in.png" title="linkedin" alt="profil dubois geoffrey linkedin"/></a>
                <a href="#" title="viadeo"><img src="images/ico_viadeo.png" title="viadeo" alt="profil dubois geoffrey viadeo"/></a>
            </div>
        </div>
        <!-- Fin reseau sociaux-->

    </div>
    <!-- Fin menus-->
</div>
<!-- Fin Conteneur-->

<!-- Debut Conteneur-->
<div id="content">
    <!-- Debut main-->
    <div id="main">
        <h1 class="titre_web">Dubois Geoffrey - Développeur Web</h1>
        <hr>
        <div class="ariane">
            Vous etes ici : <a href="#" title="">Home</a> > Contact
        </div>
        <h2 class="contact mt15">M'écrire</h2>
        <p class="mt15">N'hésitez pas à me contacter pour de plus amples informations.</p>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2609.228289752801!2d2.306055599999995!3d49.158274899999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e64535c6aa19c9%3A0x795ed26106eac640!2s20+Rue+du+Val+d&#39;Oise%2C+95340+Bernes-sur-Oise!5e0!3m2!1sfr!2sfr!4v1438781958583" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
        <hr class="hr-2 mt15">


        <?php if(isset($alert)) echo "<p>$alert</p>"; ?>
        <!-- Debut formulaire de contact-->
        <form id="contact_form" method="post" action="contact.php">
            <p><input name="nom" id="nom" class="txt required" type="text" placeholder="Votre Nom" value="<?php if(isset($nom)) echo $nom ?>"/>
                <span class="error-message">
                    <?php if(isset($erreur_nom)) echo $erreur_nom; ?>
                </span>
            </p>

            <p><input name="prenom" id="prenom" class="txt required" type="text" placeholder="Votre Prenom" value="<?php if(isset($prenom)) echo $prenom ?>"/>
                <span class="error-message">
                    <?php if(isset($erreur_prenom)) echo $erreur_prenom; ?>
                </span>
            </p>

            <p><input name="email" id="email" class="txt required" type="text" placeholder="Votre Email" value="<?php if(isset($email)) echo $email ?>"/>
                <span class="error-message">
                    <?php if(isset($erreur_email)) echo $erreur_email; ?>
                </span>
            </p>

            <p><textarea rows="10" id="message" class="required" name="message" placeholder="Votre Message"><?php if(isset($message)) echo $message ?></textarea>
                <span class="error-message">
                    <?php if(isset($erreur_message)) echo $erreur_message; ?>
                </span>
            </p>
            <p><input id="submit" class="submit_btn" name="submit" value="Envoyer" type="submit"/>
            <input class="submit_btn" name="reset" value="Reset" type="reset"/></p>
        </form>

        <!-- Fin formulaire de contact-->

    </div>
    <!-- Fin main-->
</div>
<!-- Fin Conteneur-->

<!-- Debut footer-->
<div id="footer">
    <div class="copyright">
        Dubois Geoffrey - Développeur Web - 2015
    </div>
    <div id="return_top">
        <a href="#menu">Retour en haut de page <img src="images/ico_return.png" alt="" title=""/></a>
    </div>
</div>
<!-- Fin footer-->
</body>
</html>
        <?php
include "Include/Header.php";
    $page = $_GET['page'];
    if (empty($page))
    {
        ?>
        <h1>Connexion</h1>
        <a href="User.php?page=Forgotten">Mot de passe oublié ?</a>
        <p>Vous n'avez pas de compte ? <a href="User.php?page=Inscription">S'inscrire</a></p>
        <?php
    }
    if ($page=="Inscription")
    {
        ?>
        <h1>Inscription</h1>
        <?php
    }
    if ($page=="Forgotten")
    {
        ?>
        <h1>Mot de passe oublié</h1>

        <?php
        if (empty($username) && empty($answer))
        {
            // demande identifiant
        }
        if ($username==true)
        {
            // demande de la réponse à la question
        }
        if ($answer==true)
        {
            // changement de mot de passe possible
        }

    }

include "Include/Footer.php";
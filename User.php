        <?php
include "Include/Header.php";
    $page = $_GET['page'];
    if (empty($page))
    {
        ?>
            <main>
                <div id="user">
        <h1>Connexion</h1>
                <form action="Index.php" method="post">
                    <div>
                        <label for="username">Identifiant</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div>
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" id="password" required> <br>
                        <a href="User.php?page=Forgotten">Mot de passe oublié ?</a>
                    </div>
                    <div>
                        <input type="submit" value="Valider">
                    </div>
                </form>
        <p>Vous n'avez pas de compte ? <a href="User.php?page=signup">S'inscrire</a></p>
        <?php
    }
    if ($page=="signup")
    {
        ?>
        <h1>Inscription</h1>
        <form action="User.php?page=signup" method="post">
            <fieldset class="tab">
                <div>
                    <label for="lastname">Nom</label>
                    <input type="text" name="lastname" id="lastname" required>
                </div>
                <div>
                    <label for="firstname">Prénom</label>
                    <input type="text" name="firstname" id="firstname" required>
                </div>


                <div>
                    <label for="username">Identifiant</label>
                    <input type="text" name="username" id="username" required>
                </div>
            </fieldset>
            <fieldset>
                <div>
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div>
                    <label for="password-confirm">Confirmer le mot de passe</label>
                    <input type="password" name="password-confirm" id="password-confirm" required>
                </div>
            </fieldset>
            <fieldset>
            <div>
                <label for="question">Question secrète</label>
                <input type="text" name="question" id="question" required>
            </div>
            <div>
                <label for="answer">Réponse</label>
                <input type="text" name="answer" id="answer" required>
            </div>
            </fieldset>
            <div>
                <input type="submit" value="S'inscrire">
            </div>
        </form>


        <?php
    }
    if ($page=="Forgotten")
    {
        ?>
        <h1>Mot de passe oublié</h1>
        <form action="User.php?page=Forgotten" method="post">
            <div>
                <label for="username">Identifiant</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div>
                <input type="submit" value="Valider">
            </div>
        </form>

        <?php
    }
    if ($page=="Account")
    {

        ?>
            <h1>Profil</h1>
        <form action="User.php?page=Account" method="post">
            <fieldset class="tab">
                <div>
                    <label for="lastname">Nom</label>
                    <input type="text" name="lastname" id="lastname" value="PROFIL">
                </div>
                <div>
                    <label for="firstname">Prénom</label>
                    <input type="text" name="firstname" id="firstname" value="Test">
                </div>
            </fieldset>
            <fieldset>
                <div>
                    <label for="new-password">Nouveau mot de passe</label>
                    <input type="password" name="new-password" id="new-password">
                </div>
                <div>
                    <label for="new-password-confirm">Confirmer le nouveau mot de passe</label>
                    <input type="password" name="new-password-confirm" id="new-password-confirm">
                </div>
            </fieldset>
            <fieldset>
                <div>
                    <label for="question">Question secrète</label>
                    <input type="text" name="question" id="question" value="Test ?">
                 </div>
                <div>
                    <label for="answer">Réponse</label>
                    <input type="text" name="answer" id="answer" value="test">
                </div>
            </fieldset>
                 <div>
                    <label for="password"><strong>Mot de passe</strong> <small>(<em>Obligatoire</em>)</small></label>
                    <input type="password" name="password" id="password" required>
                </div>
            <div>
                <input type="submit" value="Enregistrer">
            </div>
        </form>
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
    ?>


            </div>
        </main>
    <?php
include "Include/Footer.php";
    ?>
<?php include "includes/header.php"; ?>



<main>

    <video class="bg-video" src="assets/videos/james_harden.mp4" autoplay muted loop></video>
    <div class="sign-container">
        <div class="sign-card">
            <h1>S'inscrire</h1>
            <form action="includes/signup_check.php" method="POST" class="sign-inputs">
                <input type="text" name="nom" placeholder="Nom...">
                <input type="text" name="prenom" placeholder="Prénom...">
                <input type="number" name="age" placeholder="Age...">
                <input type="text" name="email" placeholder="Email...">
                <input type="password" name="mdp" placeholder="Mot de passe...">
                <input type="password" name="mdprepeat" placeholder="Répéter le mot de passe...">
                <div class="sign-submit">
                    <label for="submit">Vous avez déjà un compte ? <a href="login.php">Connectez vous !</a></label>
                    <button type="submit" name="submit">S'inscrire</button>
                </div>
            </form>
        </div>
    </div>
</main>




<?php include "includes/footer.php"; ?>
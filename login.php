<?php include "includes/header.php"; ?>



<main>

    <video class="bg-video" src="assets/videos/james_harden.mp4" autoplay muted loop></video>
    <div class="sign-container">
        <div class="sign-card">
            <h1>Se connecter</h1>
            <form action="includes/login_check.php" method="POST" class="sign-inputs">

                <label for="email">Nom d'utilisateur :</label>
                <input type="text" name="email" placeholder="Email...">
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" placeholder="Mot de passe...">
                <div class="sign-submit">
                    <label for="submit">Pas de compte ? <a href="signup.php">Inscrivez vous !</a></label>
                    <button type="submit" name="submit">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
</main>




<?php include "includes/footer.php"; ?>
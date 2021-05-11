<?php

// * Utils

function emptyInputs($inputs)
{
    if (!is_array($inputs))
        return true;

    foreach ($inputs as $input) {
        if (empty($input))
            return true;
    }

    return false;
}

function is_between($value, $min, $max)
{
    if (!is_numeric($value))
        return false;

    return ($value >= $min && $value <= $max);
}


function userexists($dbh, $email)
{
    $q = 'SELECT email FROM utilisateurs WHERE email = :email;';
    $stmt = $dbh->prepare($q);
    $status = $stmt->execute(
        array(
            'email' => $email
        )
    );

    if ($status) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result['email'])
            return true;
    }

    return false;
}

function sendVerificationMail($email, $hash)
{
    $sujet = 'Inscription | Verification';
    $message = "
        Bienvenue !!!
        Merci d'avoir rejoint la troupe !

        Votre compte à été crée avec succés, vous pourrez vous connectez avec les informations suivantes :
        ------------------------
        Email: '.$email.'
        Ainsi que le mot de passe renseigner a l'inscription.
        ------------------------

        Cliquez sur ce lien pour activer votre compte : 
        http://www.yourwebsite.com/verify.php?email='.$email.'&hash='.$hash.'
    ";

    $titre = 'De:noreply@myteam.com' . '\n\n';
    mail($email, $sujet, $message, $titre);
}

// * End Utils

// * Signup



function invalidAge($age)
{
    if (!is_numeric($age))
        return true;

    return $age < 18;
}

function createUser($dbh, $nom, $prenom, $age, $email, $mdp)
{
    $q = 'INSERT INTO utilisateurs (nom, prenom, age, email, mdp, hash) VALUES(:nom, :prenom, :age, :email, :mdp, :hash);';
    $stmt = $dbh->prepare($q);

    $hash = md5(rand(0, 1000));

    $status = $stmt->execute(
        array(
            'nom' => $nom,
            'prenom' => $prenom,
            'age' => $age,
            'email' => $email,
            'mdp' => password_hash($mdp, PASSWORD_DEFAULT),
            'hash' => $hash
        )
    );

    if ($status) {
        sendVerificationMail($email, $hash);
        return true;
    }

    return false;
}


// * End Signup


// * Login

function validpassword($dbh, $email, $mdp)
{
    $q = 'SELECT mdp FROM utilisateurs WHERE email = :email;';
    $stmt = $dbh->prepare($q);
    $status = $stmt->execute(
        array(
            'email' => $email
        )
    );

    if ($status) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result['mdp']) {
            return password_verify($mdp, $result['mdp']);
        }
    }

    return false;
}

// * End Login

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Se connecter</h2>
        <?php
        include("php/connect.php");
        session_start();

        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $check_user = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email'");
            if (mysqli_num_rows($check_user) > 0) {
                $user = mysqli_fetch_assoc($check_user);
                if (password_verify($password, $user['password'])) {
                    // Connexion réussie
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_name'] = $user['name'];
                    $_SESSION['role'] = $user['role'];
                    
                    header("Location: bienvenu.php");
                    exit;
                } else {
                    echo "<div class='message'><p>Mot de passe incorrect.</p></div>";
                }
            } else {
                echo "<div class='message'><p>Aucun compte trouvé avec cet email.</p></div>";
            }
        } else {
        ?>
        <form action="" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <input type="submit" class="button" name="login" value="Se connecter">
        </form>
        <p>Pas encore de compte ? <a href="signup.php">S'inscrire</a></p>
        <?php } ?>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php
            session_start(); 

            include("php/connect.php");

            if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($connect, $_POST['email']);
                $password = mysqli_real_escape_string($connect, $_POST['password']);

                $result = mysqli_query($connect, "SELECT * FROM users WHERE email='$email' AND password='$password'");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['email'];
                    $_SESSION['phone_num'] = $row['phone_num'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];

                    header("Location: bienvenu.php");
                    exit(); 
                } else {
                    echo "<div class='message'><p>خطأ في اسم المستخدم أو كلمة المرور</p></div><br>";
                    echo "<a href='login.php'><button class='btn'>الرجوع</button></a>"; // تصحيح خطأ في `href`
                }
            } else {
        ?>
        <form method="post" action="login.php">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign Up Now</a></p>
        <?php } ?>
    </div>
</body>
</html>

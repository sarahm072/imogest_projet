<?php
include("php/connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Phone_num'];
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $password = password_hash($_POST['Password'], PASSWORD_BCRYPT);  // تشفير كلمة المرور
    $role = $_POST['Role'];

    // التحقق مما إذا كان البريد الإلكتروني موجودًا مسبقًا
    $stmt = $connect->prepare("SELECT email FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<div class='message'>
                <p>Ce courriel est déjà utilisé, veuillez en essayer un autre.</p>
              </div><br>";
        echo "<a href='javascript:self.history.back()'><button class='btn'>Retour</button></a>";
    } else {
        // إدخال بيانات المستخدم في قاعدة البيانات
        $stmt = $connect->prepare("INSERT INTO users (phone_num, name, email, password, role) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $username, $name, $email, $password, $role);

        if ($stmt->execute()) {
            echo "<div class='message'>
                    <p>Inscription réussie! Vous pouvez maintenant vous connecter.</p>
                  </div><br>";
            echo "<a href='login.html'><button class='btn'>Se connecter</button></a>";
        } else {
            echo "<p>Une erreur s'est produite, veuillez réessayer.</p>";
        }
    }
    $stmt->close();
    $connect->close();
}
?>

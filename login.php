<?php
session_start();
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username == 'admin' && $password == 'password123') {
    $_SESSION['logged_in'] = true;
    echo "<p>Přihlášení proběhlo úspěšně. Vítejte, $username!</p>";
} else {
    echo "<p style='color:red;'>Neplatné přihlašovací údaje.</p>";
}
?>
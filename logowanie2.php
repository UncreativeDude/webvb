<?php
    include 'konfiguracja.php';

    if (!isset($_GET["lgn"]) || !isset($_GET["pwd"])) {
        header("Location: logowanie.php");
        exit();
    }

    $login = $_GET["lgn"];
    $password = $_GET["pwd"];

    // Create a connection
    $conn = new mysqlimysqli_connect('artkoc7548.mysql.dhosting.pl', 'seey3m_michalak', 'thi3eexohY3s', 'ange9a_michalak');;

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT id, haslo FROM uzytkownicy WHERE login = ?");
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashed_password)) {
            setcookie('login', $login, time() + 86400, "/", "", false, true);
            setcookie('haslo', $hashed_password, time() + 86400, "/", "", false, true);
            
            header("Location: menu.php");
            exit();
        }
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();

    // Redirect to login page if authentication fails
    header("Location: logowanie.php");
    exit();
?>

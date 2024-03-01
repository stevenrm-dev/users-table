<?php
    require "../config/connect.php";

    $userName = $_POST['new-user-name'];
    $userEmail = $_POST['new-user-email'];
    $userTel = $_POST['new-user-tel'];
    $userDni = $_POST['new-user-dni'];
    $userDate = $_POST['new-user-date'];

    $sqlValidate = "SELECT * FROM users WHERE dni = '$userDni'";
    $validate = $db->query($sqlValidate);

    if($validate->rowCount() > 0) {
        echo "ERROR";
    } else {
        // SQL
        $insertToUsers = $db->prepare("INSERT INTO users (userName, email, phone, dni, age) VALUES (?, ?, ?, ?, ?)");
        $insertToUsers->bindParam(1, $userName);
        $insertToUsers->bindParam(2, $userEmail);
        $insertToUsers->bindParam(3, $userTel);
        $insertToUsers->bindParam(4, $userDni);
        $insertToUsers->bindParam(5, $userDate);
        $insertToUsers->execute();

        $newUserId = $db->lastInsertId();

        // JSON
        $jsonFile = '../data/data.json';
        $currentData = file_get_contents($jsonFile);
        $currentUsers = json_decode($currentData, true);
        
        $newUser = array(
            'id' => $newUserId,
            'userName' => $userName,
            'email' => $userEmail,
            'phone' => $userTel,
            'dni' => $userDni,
            'age' => $userDate
        );

        $currentUsers[] = $newUser;
        
        file_put_contents($jsonFile, json_encode($currentUsers));

        header('Location: ../../index.php');
        exit();
    }
?>

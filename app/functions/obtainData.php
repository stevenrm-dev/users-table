<?php
    require "../config/connect.php";

    if(isset($_GET['Id'])) {
        $userId = intval($_GET['Id']);

        $query = $db->prepare("SELECT id, userName, email, phone, dni, age FROM users WHERE id = ?");
        $query->execute([$userId]);

        $contentItems = $query->fetch(PDO::FETCH_ASSOC);
    }
?>
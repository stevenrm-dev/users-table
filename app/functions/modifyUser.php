<?php
require "../config/connect.php";

$id = $_POST['mod-id'];
$modName = $_POST['mod-name'];
$modEmail = $_POST['mod-email'];
$modTel = $_POST['mod-tel'];
$modDni = $_POST['mod-dni'];
$modAge = $_POST['mod-date'];

$sqlModify = 
    "UPDATE users SET 
    userName = ?, 
    email = ?, 
    phone = ?, 
    dni = ?,
    age = ? 
    WHERE id = ?"
;

$stmt = $db->prepare($sqlModify);
$stmt->execute([$modName, $modEmail, $modTel, $modDni, $modAge, $id]);

if($stmt->rowCount() > 0) {
    $jsonFile = '../data/data.json';
    $currentData = file_get_contents($jsonFile);
    $currentUsers = json_decode($currentData, true);

    foreach ($currentUsers as &$user) {
        if ($user['id'] == $id) {
            $user['userName'] = $modName;
            $user['email'] = $modEmail;
            $user['phone'] = $modTel;
            $user['dni'] = $modDni;
            $user['age'] = $modAge;
            break;
        }
    }

    file_put_contents($jsonFile, json_encode($currentUsers));

    header('Location: ../../index.php');
    exit;
} else {
    echo "ERROR";
}
?>

<?php

require_once("../includes/db_connection.php");

$id = $_SESSION['userSession'];
//verify user to photographer
$stmt = new mysqli_stmt ($connection, "UPDATE tbl_users SET permissions = 3 WHERE id = ?");
if ($stmt) {
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

$connection->close();
header("Location: admin.php");


?>
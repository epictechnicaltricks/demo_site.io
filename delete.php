<?php
include 'connectdb.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $sql = "DELETE FROM inquiries WHERE id = $id";
    mysqli_query($conn, $sql);

    header('Location: data.php');
    exit;
}
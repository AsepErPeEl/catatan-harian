<?php
include 'config.php';
$id = $_POST['id'];
$isi = $_POST['isi'];
$stmt = $conn->prepare("UPDATE notes SET isi=? WHERE id=?");
$stmt->bind_param("si", $isi, $id);
$stmt->execute();
header("Location: index.php");

?>
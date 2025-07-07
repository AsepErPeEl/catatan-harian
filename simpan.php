<?php include 'config.php'; 
$isi = $_POST['isi'];
if (!empty($isi)) {
    $stmt = $conn->prepare("INSERT INTO notes (isi) VALUES (?)");
    $stmt->bind_param("s", $isi);
    $stmt->execute();
}
header("Location: index.php");
?>
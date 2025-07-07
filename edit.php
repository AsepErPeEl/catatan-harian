<?php
include 'config.php';
$id = $_GET['id'];
$hasil = $conn->query("SELECT * FROM notes WHERE id = $id");
$data = $hasil->fetch_assoc();
?>
<form action="update.php" method="POST">
  <input type="hidden" name="id" value="<?= $data['id'] ?>">
  <textarea name="isi"><?= htmlspecialchars($data['isi']) ?></textarea>
  <button type="submit">Update</button>
</form>
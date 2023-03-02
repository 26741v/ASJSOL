<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $pdo = new PDO('sqlite:database.db');
  $stmt = $pdo->prepare("DELETE FROM students WHERE id = ?");
  $stmt->execute([$id]);
}
header("Location: index.php");
exit;
?>

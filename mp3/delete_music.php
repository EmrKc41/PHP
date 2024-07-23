<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

include 'db.php';

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM music WHERE id = ? AND uploaded_by = ?");
$stmt->bind_param("ii", $id, $_SESSION['user_id']);
$stmt->execute();

header("Location: dashboard.php");
?>

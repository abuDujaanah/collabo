<?php
include('db_connect.php');
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <?php include('header.php'); ?>
    <main>
        <h2>Dashboard Content</h2>
    </main>
</body>
</html>
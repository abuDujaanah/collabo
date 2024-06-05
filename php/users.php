<?php
include('db_connect.php');
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../login.php');
    exit;
}

// Handle form submission for adding a new user
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $password = password_hash($conn->real_escape_string($_POST['password']), PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $conn->query($sql);
}

// Fetch all users
$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Users</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <?php include('header.php'); ?>
    <main>
        <h2>Users List</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
        <h2>Add New User</h2>
        <form method="post" action="users.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Add User</button>
        </form>
    </main>
</body>
</html>
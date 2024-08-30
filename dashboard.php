<?php
session_start();
include 'db.php';

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$email = $_SESSION['email'];

// Fetch user details
$stmt = $conn->prepare("SELECT full_name FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($full_name);
$stmt->fetch();
$stmt->close();

// Logout logic
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/dashboard.css">
</head>
<body>
    <?php include 'head.php'; ?>
    <div class="dashboard">
        <p>Welcome, <?php echo htmlspecialchars($full_name); ?>!</p>
        <p>You are logged in as <?php echo htmlspecialchars($email); ?>.</p>

        <form action="dashboard.php" method="post">
            <button type="submit" name="logout">Logout</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>

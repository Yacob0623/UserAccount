<head>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<?php

$user = $_SESSION['user'];
?>
<div class="dashboard">
<h2>Welcome, <?php echo htmlspecialchars($user['username']); ?>!</h2>

<?php if ($user['is_admin']) : ?>
    <p>You are logged in as <strong>Admin</strong>.</p>
    <a href="../public/index.php?action=admin_panel">Go to Admin Panel</a>
    <?php else : ?>
    <p>You are logged in as <strong>User</strong>.</p>
<?php endif; ?>

<a href="index.php?action=logout">Logout</a>
</div>

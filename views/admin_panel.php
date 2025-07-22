<head>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<?php

if (!isset($_SESSION['user']) || $_SESSION['user']['is_admin'] != 1) {
    die("Access denied.");
}
?>
<div class="admin-panel">
<h2>Admin Panel</h2>
<p>Only visible to admins.</p>
</div>

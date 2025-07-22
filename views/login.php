<head>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<div class="container">
<form method="POST" action="../public/index.php?action=login">
    <h2>Login</h2>
    Email: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form>
<p>Don't have an account? 
    <a href="../public/index.php?action=register">Register</a>
</p>
</div>
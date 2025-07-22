<head>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<div class="container">
<form method="POST" action="../public/index.php?action=register">
    <h2>Register</h2>
    Username: <input type="text" name="username" required><br>
    Email: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Register</button>
</form>

<p>Already have an account?
    <a href="../public/index.php?action=login">Login</a>
</p>
</div>

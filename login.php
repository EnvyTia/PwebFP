<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <style></style>
</head>
<body>
    <h2>Halaman Login</h2>
    <form action="process_login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

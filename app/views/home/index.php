<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/js/script.js" defer></script>
</head>
<body>
    <header>
        <img src="/assets/images/logo.png" alt="Logo" height="50">
        <h1>Welcome to the Home Page!</h1>
    </header>
    <nav>
        <a href="/<?= $usersLink ?>">View User List</a> |
        <a href="/<?= $adminLink ?>">Admin Dashboard</a>
    </nav>
</body>
</html>

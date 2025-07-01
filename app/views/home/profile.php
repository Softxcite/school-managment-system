<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <h1>User Profile</h1>
    <p>ID: <?= htmlspecialchars($user['id']) ?></p>
    <p>Name: <?= htmlspecialchars($user['name']) ?></p>
    <p>Email: <?= htmlspecialchars($user['email']) ?></p>
</body>
</html>

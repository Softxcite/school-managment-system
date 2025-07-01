<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <h1>All Users</h1>
    <ul>
        <?php foreach ($users as $u): ?>
            <li>
                <?= htmlspecialchars($u['name']) ?> -
                <a href="/<?= \App\Core\Encryptor::encrypt('user/profile/' . $u['id']) ?>">View Profile</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

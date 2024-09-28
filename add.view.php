<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Task Manager</title>
    <link
        rel="stylesheet"
        href="/pico.min.css"
    />
</head>
<body>
<header class="container">
    <nav>
        <ul>
            <li><strong>Add Contacts</strong></li>
        </ul>
        <ul>
            <li><a href="contacts.php">List of Contacts</a></li>
            <li><a href="remove.php">Remove Contacts</a></li>
        </ul>
    </nav>
</header>
<main class="container">
    <h1>Add Contact</h1>
    <form method="post">
        <label>name</label>
        <input type="text" name="name">
        <label>email</label>
        <input type="text" name="email">
        <label>phone</label>
        <input type="text" name="phone">
        <input type="submit">
    </form>
</main>
</body>
</html>
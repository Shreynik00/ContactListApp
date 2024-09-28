<html>
<head>
<link rel="stylesheet" href="/pico.min.css" />
</head>

    <header class="container">
    <nav>
        <ul>
            <li><strong>Contact list</strong></li>
        </ul>
        <ul>
            <li><a href="contacts.php">List of Contacts</a></li>
            <li><a href="add.php">Add Contact</a></li>
            <li><a href="remove.php">Remove Contact</a></li>
        </ul>
    </nav>
</header>

</body>
<header class="container">

</header>
<main class="container">
<h1> List of Contacts</h1><br>
    <table>
      
        <tr>
            <th> No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php foreach($rows as $row): ?>
        <tr>
        <th ><?= $row['id']; ?></th>
            <th ><?= $row['name']; ?></th>
            <th> <?=$row['email']; ?><th>
            <th> <?=$row['phone']; ?><th>
        </tr>
       <?php endforeach; ?> 
</main>
</html>
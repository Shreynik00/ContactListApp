<html>
    <body>
    <table>
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
    </body>
</html>
<?php
    $host = "172.20.0.2";
    $username = "root";
    $password = "asdfasdf";
    $db_name = "mysql";

    $connection = new mysqli($host, $username, $password, $db_name);

    if(!$connection){
        die("Database not found");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trucorp</title>
</head>
<body>
    <table>
        <tr>
            <td>Users:</td>
        </tr>
    <?php
        $count = 0;
        $query = "SELECT user FROM user";
        $result = $connection->query($query);

        while($users = $result->fetch_assoc()) :
            $count = $count + 1;
    ?>
    <tr>
        <td><?= $users["user"]?></td>
    </tr>
    <?php 
        endwhile;
        printf("Total Users: %d", $count);
    ?>

    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <table border="1">
    <tr>
        <th>id</th>
        <th>dateno</th>
        <th>breakfast</th>
        <th>university</th>
        <th>lunch</th>
        <th>exercise</th>
        <th>coaching</th>
        <th>dinner</th>
    </tr>
    <?php
    $db_surver = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "loginsystem";
    $conn = mysqli_connect($db_surver, $db_user, $db_pass, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM todolist";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) > 0) {
        while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
            <tr>
                <td><?php echo htmlspecialchars($row['id']); ?></td>
                <td><?php echo htmlspecialchars($row['dateno']); ?></td>
                <td><?php echo htmlspecialchars($row['breakfast']); ?></td>
                <td><?php echo htmlspecialchars($row['university']); ?></td>
                <td><?php echo htmlspecialchars($row['lunch']); ?></td>
                <td><?php echo htmlspecialchars($row['exercise']); ?></td>
                <td><?php echo htmlspecialchars($row['coaching']); ?></td>
                <td><?php echo htmlspecialchars($row['dinner']); ?></td>
            </tr>
            <?php
        }
    } else {
        echo "<tr><td colspan='8'>No records found</td></tr>";
    }

    mysqli_close($conn);
    ?>
    <a href="index.html">
           <button>Input</button>
          </a>
</table>

</body>
</html>

<!DOCTYPE html>
<html>

<head>
    <style>
        th {
            background-color: lightgray;
        }

        td {
            padding: 15px 0;
        }

        table,
        th,
        td {
            margin-left: auto;
            margin-right: auto;
            font-size: 20px;
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php
    include "connection.php";

    $sql = "SELECT name,company_nam,email,number,academy_student  FROM client_reg";
    $result = mysqli_query($connect, $sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>Client Name</th><th>Company Name</th><th>Email</th><th>Tel.Num</th><th>Student From</th></tr>";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["name"] . "</td><td>" . $row["company_nam"] . "</td><td>" . $row["email"] . "</td><td>" . $row["number"] . "</td><td>" . $row["academy_student"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 clients";
    }
    ?>
</body>

</html>
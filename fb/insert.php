<?php
session_start();
$l=mysqli_connect("localhost:6306","student2","pass2","student2");
$user = $_SESSION['userData'];
$name = $user['first_name'] . ' ' . $user['last_name'];
$message = $_POST['message'];
//echo $message;
$q = "INSERT INTO sentence (Message, UserID, Stamp) VALUES ('$message','$name',NOW())";
mysqli_query($l,$q);
$l=mysqli_connect("localhost:6306","student2","pass2","student2");
    $query = "select * from sentence";
    //executing query
    $r = mysqli_query($l,$query);
    echo "<div id='data'>";
    echo "<table cellpadding=10 bordercolor='#000000' id='posts'>";
    echo "<tr><th>Message</th><th>User</th><th>Time</th></tr>";
    while($row=mysqli_fetch_array($r))
    {
        echo "<tr>";
            echo "<td>";
                echo $row[Message];
            echo "</td><td>";
                echo "$row[UserID]";
            echo "</td><td>";
                echo $row[Stamp];
            echo "</td>";

        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
?>
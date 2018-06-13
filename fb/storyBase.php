<?php
    $l=mysqli_connect("localhost:6306","student2","pass2","student2");
    $query = "insert into sentence (Message, UserID, Stamp) values ('$message', '$userID', now())";
    $r = mysqli_query($l, $query);

    $query = "select * from sentence";
    //executing query
    $totalMsg = "";
    $r = mysqli_query($l,$query);
    while($row=mysqli_fetch_array($r))
    {
    // echo $totalMsg;
    //  echo $row[Message];
      $totalMsg = $totalMsg . $row[Message] ." ";
    }
    echo $totalMsg;
?>
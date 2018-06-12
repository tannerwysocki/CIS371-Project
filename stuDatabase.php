<?PHP
/**if ($_POST['userID'] == "" || $_POST['message'] == ""){
    die("You must be logged in and submit a sentence.");
}
*/
//print_r($_POST);
//making a connection
$l=mysqli_connect("localhost:6306","student2","pass2","student2");
//$message = mysqli_escape_string($l,$_POST['message']);
//$userID = mysqli_escape_string($l,$_POST['userID']);
$student = 'Antony';
//putting query together
//$query = "insert into sentence'$student' (Message, UserID, Stamp) values ('$message', '$userID', now())";
$l=mysqli_connect("localhost:6306","student2","pass2","student2");
$query = "select * from sentence";
    //executing query
$r = mysqli_query($l,$query);
echo "<table border=1 cellpadding=10 >";
echo "<tr><th>SentenceID</td><th>Message</th><th>UserID</th><th>Stamp</th></tr>";
while($row=mysqli_fetch_array($r))
{
echo "<tr>";
    echo "<td>";
        echo $row[SentenceID];
    echo "</td><td>";
        echo $row[Message];
    echo "</td><td>";
        echo "$row[UserID]";
    echo "</td><td>";
        echo $row['Stamp'];
    echo "</td>";

echo "</tr>";


}
echo "</table>";
?>



<!DOCTYPE html>
<html>
<head>
<!-- including title -->
<title>Combined Story Telling</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style>
/** including CSS sizing **/
input[type=text] {
	width:60%;
	padding:12px 20px;
	margin: 8px 0;
	box-sizing: border-box;
    background-color: #ffffff;
}
*{
    font-family: Roboto;
    background-color: #87f3ff;
}
#logo{
    position: absolute;
    top: -50px;
    left: -30px;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
<script>
$(document).ready(function(){
    $("#post").click(function(){
        $("p").append("#include");
    });
});

</script>
</head>
<body>
<img src="images/logo.png" id="logo">
<br>
<br>
<br>
<br>
<br>
<br>
<center><p> Welcome to the Story Telling Page! </p>
<br/><br/>
<form>
  <label for="include"> Submit your portion of the story<br/></label>
  <input type="text" id= "include" name="include">
  <br/>
  <!-- <input type = submit value = "Post" /> -->
  <button id  = "submit()"> submit </button>
    </p>
    </form></center>
    <script>
    function submit(){
        var x = document.getElementById("include").value;
        var newString = "";
        var finSentence = 0;
        for(i = 0; i < x.length; i++){
            if (x[i] == "." || x[i] == ":" && finSentence == 0){
                newString = x.substring(0,i+1);
                i = x.length;
                finSentence = 1;
            }
        }
        loadDoc(newString);
       //Send newstring (which contains the message) to the database here.
    }

        function loadDoc(msg) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo").innerHTML =
                        this.responseText;
                }
            };
            xhttp.open("POST", "form.php", true);
            xhttp.send("message:"+msg"&userID:"+"Null");
        }

</script>

<?php
//making a connection
$l=mysqli_connect("localhost:6306","student2","pass2","student2");
if ($_POST['message'] != null || $_POST['userID'] != null){
    $message = mysqli_escape_string($l,$_POST['message']);
    //Message is from the javascript above, through get(?)
    $userID = mysqli_escape_string($l,$_POST['userID']);
    //putting query together
    $query = "insert into sentence (Message, UserID, Stamp) values ('$message', '$userID', now())";
    $r = mysqli_query($l, $query);
}
    else{
        echo "It didn't work.";
    }
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


</body>

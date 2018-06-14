<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
<!-- including title -->
<title>Combined Story Telling</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style>
/** including CSS sizing and background  **/
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
th,td{
    background-color: #ffffff;
    border-color: #000000;
}
#logo{
    position: absolute;
    top: -50px;
    left: -30px;
}
#data {
    overflow:scroll;
    height:300px;
}
table {
    width: 50%;
    margin-left: auto;
    margin-right: auto;
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
<div id="content">
<br>
<br>
<br>
<br>
<br>
<br>
<center><p id="greeting">Welcome to the Story Telling Page! </p>
<br/><br/>
<form action="insert.php">
  <label for="include" id=label> Submit your portion of the story<br/></label>
  <input type="text" id= "include" name="include">
  <br/>
  <!-- <input type = submit value = "Post" /> -->
  <button type = "submit" id = "submit()"> submit </button>
    </p>
    </form></center>
    <script>
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        alert("Welcome to Ribbit for Mobile");
        $("#logo").remove();
        $("<img src='images/logo.png' id='logo' style='display: block; margin-left: auto; margin-right: auto; width: 50%;'><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>").insertBefore("#content");
        document.getElementById('greeting').style.fontSize = "50px";
        document.getElementById('label').style.fontSize = "40px";
        document.getElementById('include').style.fontSize = "30px";
        document.getElementById('include').style.width = "800px";
        document.getElementById('include').style.height = "200px";
        document.getElementById('submit()').style.width="400px";
        document.getElementById('submit()').style.height="100px";
    }
    function addToDB(){
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
   //     Send newstring (which contains the message) to the database here.
        return newString;
    }
    // magic.js
    $(document).ready(function() {

    // process the form
    $('form').submit(function(event) {

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'message'              : $("#include").val()
        };

        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'insert.php', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
            encode      : true
        })
            // using the done promise callback
            .done(function(data) {

                // log data to the console so we can see
                console.log(data);
                // here we will handle errors and validation messages
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });

});

</script>
</div>
<?php
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


</body>
</html>

<?php
 session_start();
?>
<!DOCTYPE html>
<htm>
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
<form id="story" action="insert.php" method="post">
  <label for="include" id=label> Submit your portion of the story<br/></label>
  <input type="text" id= "include" name="include">
  <br/>
  <!-- <input type = submit value = "Post" /> -->
  <button id  = "submit()"> submit </button>
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
            'message'              : addToDB()
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
        document.getElementById('storyBase').contentWindow.location.reload();
    });

});

</script>
</div>
<iframe id="storyBase" width:"400" height="600" src="storyBase.php" align='center'></iframe>
<style>
    iframe {
    width: 400px;
    height: 600px;
    margin: 0 auto;
    display: block;
}
</style>
<br/><br/>
<div align="center">
<!--  <button type = "submit" name = "names" id  = "names"> Show Names </button>//-->
</div>
<br><br>
<style>
#names {
    width: 50px;
    margin-right: auto;
    float: right;
}

</style>
 <?php
//$receive = $_GET['include'];
$button1 = $_GET['include'];

echo $button1;

//$button2 = $_GET['names'];
//if(($button2)) {
	//echo "<center>hello</center>";
	//include("~/apache/htdocs/ribbit/CIS371-Project/bbnames.php");
//	$file_path = "/home/student11/apache/htdocs/ribbit/CIS371-Project/bbnames.php";
//	include("/home/student11/apache/htdocs/ribbit/CIS371-Project/bbnames.php");

//echo $receive;
	//$content = file_get_contents($file_path);
	//print $content;
//}

?>
    <center><label for="bbusers" id=userslabel>Registered Blackboard Users<br/></label></center>
<iframe src="https://tantheman.hopto.org:9003/CIS371-Project/bbnames.php" align='center' id="bbusers">

</body>

</body>


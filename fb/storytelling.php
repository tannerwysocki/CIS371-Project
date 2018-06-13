<!DOCTYPE html>
<?php
session_start();
?>
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

</head>
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>

<script>
var el = document.getElementById("include");
$(document).ready(function(){
    $("#post").click(function(){
        $("#starter").append(el);
    });
});

</script>

<img src="images/logo.png" id="logo">
<br>
<br>
<br>
<br>
<br>
<br>
<center><p> Welcome to the Story Telling Page! </p>
<br/><br/>
<!--<form>-->
  <label for="include"> Post your portion of the story<br/></label>
  <!--<input type="text" id= "include" name="include">-->
  <input type="text" id= "include">

  <br/>
  <!-- <input type = submit value = "Post" /> -->
  <button id  = "post"> Post </button>
  
<!--</form>-->

</center>

<br/><br/>
<div id="starter">
</div>
<div> <button type = "submit" name = "shownames" id="shownames"> Show Names </button>
</div>
<style>
#shownames {
width: 50px;
margin-right: auto;
float: right;
}

</style>
<?php
$button1 = $_GET['include'];

echo $button1;

$button2=$_POST['shownames'];
if(isset($button2)) {
	//echo "<center>hello</center>";
	//include("~/apache/htdocs/ribbit/CIS371-Project/bbnames.php");
//	$file_path = "/home/student11/apache/htdocs/ribbit/CIS371-Project/bbnames.php";
//	include("/home/student11/apache/htdocs/ribbit/CIS371-Project/bbnames.php");
echo '<iframe src="https://cis371a.hopto.org:9011/ribbit/CIS371-Project/bbnames.php">
';
	//$content = file_get_contents($file_path);
	//print $content;
}

?>


</body>
</html>

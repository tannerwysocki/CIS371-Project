<!DOCTYPE html>
<html>
<head>
<!-- including title -->
<title>Combined Story Telling</title>

<style>
/** including CSS sizing **/
input[type=text] {
	width:60%;
	padding:12px 20px;
	margin: 8px 0;
	box-sizing: border-box;
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

<p> Welcome to the Story Telling Page! </p>
<br/><br/>
<form>
  <label for="include"> Post your portion of the story<br/></label>
  <input type="text" id= "include" name="include">
  <br/>
  <!-- <input type = submit value = "Post" /> -->
  <button id  = "post"> Post </button>

</form>
<?php
//$receive = $_GET['include'];

//echo $receive;

?>


</body>

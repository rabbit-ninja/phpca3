<!DOCTYPE HTML>  
<html>
<head>
<title>
Question 2
</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$optionErr = "";
$option = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["option"])) {
    $optionErr = "Answer is required";
  } else {
    $option = test_input($_POST["option"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Question 2</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Options: <br>
  <input type="radio" name="option" <?php if (isset($option) && $option=="option1") echo "checked";?> value="option1">option1 <br>
  <input type="radio" name="option" <?php if (isset($option) && $option=="option2") echo "checked";?> value="option2">option2 <br>
  <input type="radio" name="option" <?php if (isset($option) && $option=="option3") echo "checked";?> value="option3">option3 <br>
  <input type="radio" name="option" <?php if (isset($option) && $option=="option4") echo "checked";?> value="option3">option4 <br>
  <span class="error">* <?php echo $optionErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "<br>";
if($option== "option1"){
	echo $option;
	echo "<br>";
	echo "Awesome it's correct! you will be redirected to next page in 5 seconds!";
	header( "refresh:5;url=question3.php" );
}
else
	echo"Wrong answer!"
?>

</body>
</html>
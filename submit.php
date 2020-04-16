<!DOCTYPE html>
<html>
<head>
<title>submit</title>
</head>
<body style="background-color:black">
<form action="submit.php" method="POST"> </form>

 <h3 style="color:white;" > Make a sentence using the words you got:</h3> <br><textarea name="sentence" rows="5" cols="40" id='sent'></textarea>
  
  <br>
  
  <br><br>
  <input type="submit" value="Submit" onclick="viewsentence()">
  <input type="reset">
 
  <!-- <?php
  $sentERR="";
  $sentence="";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $sentERR = "Name is required";
    } else {
      $sentence = test_input($_POST["name"]);
    }
?>
  -->
</body>
</html>

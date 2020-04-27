<?php
echo "Submit your car info here!";
?>
<!doctype html>
<html lang="en">
    
<html>
<body style="background-color:grey">

<form action="welcome.php" method="post">
Make: <input type="text" name="make"><br>
Model: <input type="text" name="model"><br>
Year: <input type="text" name="year"><br>
Price: <input type="text" name="price"><br>
<input type="radio" id="new" name="condition" value="new">
  <label for="male">New</label><br>
  <input type="radio" id="used" name="condition" value="used">
  <label for="female">Used</label><br>
<input type="submit">
</form>


    
<form action="index.php">
    <input type="submit" value="Go back to index page" />
</form>
</body>
</html>
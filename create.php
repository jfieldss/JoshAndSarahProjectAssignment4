<?php
$error='';
$year='';
$make='';
$model='';
$condition='';
$price='';
$picture='';
$dollar='$';

function clean_text($string){
    $string=trim($string);
    $string=stripslashes($string);
    $string=htmlspecialchars($string);
    return $string;
}
if (isset($_POST["submit"])){
    if (empty($_POST["year"])){
        $error .= '<p>Please enter a year</p>'; }
    else{
     $year=clean_text($_POST["year"]); }
}
    if (empty($_POST["make"])){
        $error .= '<p>Please enter a make</p>';}
    else{
        $make=clean_text($_POST["make"]);}
    if (empty($_POST["model"])){
        $error .= '<p>Please enter a model</p>';}
    else{
        $model=clean_text($_POST["model"]); }
    if (empty($_POST["condition"])){
        $error .= '<p>Please pick a condition</p>';}
    else{
        $condition=clean_text($_POST["condition"]); }
    if (empty($_POST["price"])){
        $error .= '<p>Please enter a price</p>'; }
    else{
        $price=clean_text($_POST["price"]);
        $price='$'.$price;}
    if (empty($_POST["picture"])){
        $error .= '<p>Please link a picture</p>';}
    else{
        $picture=clean_text($_POST["picture"]);
    
    $file_open=fopen("data.csv","a");
    $form_data=array(
    'year' => $year,
    'make' => $make,
    'model' => $model,
    'condition' => $condition,
    'price' => $price,
    'picture' => $picture
    );
    fputcsv($file_open,$form_data);
    $year='';
    $make='';
    $model='';
    $condition='';
    $price='';
    $picture='';
}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Create an entry for a new car</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head><body><br />
  <div class="container">
   <div class="col-md-6" style="margin:0 auto; float:none;">
    <form method="post" action="index.php">
 <h3 align="center">Car Submission</h3>
     <br />
     <?php echo $error; ?>
     <div class="form-group">
      <label>Enter Year</label>
      <input type="text" name="year" placeholder="Enter Year" class="form-control" value="<?php echo $year; ?>" />
     </div>
     <div class="form-group">
      <label>Enter Make</label>
      <input type="text" name="make" class="form-control" placeholder="Enter Make" value="<?php echo $make; ?>" />
     </div>
     <div class="form-group">
      <label>Enter Model</label>
      <input type="text" name="model" class="form-control" placeholder="Enter Model" value="<?php echo $model; ?>"/>
     </div>
     <div class="form-group">
      <label>Enter Condition</label>
      <input type="text" name="condition" class="form-control" placeholder="Enter 'New' or 'Used'" value="<?php echo $condition; ?>"/>
     </div>
     <div class="form-group">
      <label>Enter Price</label>
      <input type="text" name="price" class="form-control" placeholder="Enter Price" value="<?php echo $price; ?>"/>
     </div>
      <div class="form-group">
      <label>Enter Link to Car Picture</label>
      <input type="text" name="picture" class="form-control" placeholder="Enter Link to Picture" value="<?php echo $picture; ?>"/>
     </div>
     <div class="form-group" align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Submit" />
         <form action="index.php">
         <input type="submit" value="Go back to index page" />
         </form>
     </div>
    </form>
   </div>
  </div>
 </body>
</html>

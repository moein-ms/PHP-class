<?php
// var s
$D = "0";

// Day-repiter
if (is_numeric($D)) {
  switch ($D) {
    case 0: echo "Saturday"; break;
    case 1: echo "Sunday"; break;
    case 2: echo "Monday"; break;
    case 3: echo "Tuesday"; break;
    case 4: echo "Wednesday"; break;
    case 5: echo "Thursday"; break;
    case 6: echo "Friday"; break;
    default:
      echo "Your number must be between 0 to 6.";
      break;
  }
} else {
  echo "Err Not a number";
}

// Even-Number-finder
$start = 3;
$end = 10;

// find the Even number after odd number 
$firstEven = $start + ($start % 2);

$G = "";
for($i=$firstEven ; $i<$end ; $i+=2){
  $G = $G.$i;
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Day Result</title>
</head>
<body>
  <p>
    <?php echo "The input is: " . $D; ?><br>
    ........................................<br>
    <?php echo "Start : $start "?> <br>
    <?php echo "End : $end "?> <br>
    <?php echo "result : $G "?> 
   
      

  </p>
</body>
</html>

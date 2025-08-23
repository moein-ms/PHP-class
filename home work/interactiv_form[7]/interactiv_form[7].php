
<?php

    


    if (isset($_POST['Age'])){

    include_once("conection.php");


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
</head>
<body class="d-flex justify-content-center align-items-center mt-5">


   <form class="form gap-2 w-25 d-flex flex-column" method="post" action = "">

<label for="FName">Enter your First Name</label>
<input id="FName" name="FName">

<label for="LName">Enter your Last Name</label>
<input id="LName" name="LName">

<label for="Age">Enter your Age</label>
<input id="Age" name="Age">

<label for="Phonenumber">Enter your Phone Number</label>
<input id="Phonenumber" name="Phonenumber">

<label for="Address">Enter your Address</label>
<input id="Address" name="Address">

<p>Choose your gender:</p>
<label><input type="radio" name="gender" value="male"> Male</label><br>
<label><input type="radio" name="gender" value="female"> Female</label><br>

    <button>Sub</button>

   </form> 

</body>
</html>

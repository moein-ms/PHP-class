<?php
$Data_Base_Conect = mysqli_connect( "localhost" , "root" ,"", "school");

$sql                = '
    INSERT INTO students
     (first_name , last_name , phone , gender , age , address)
      VALUES
      ("'.$_POST['FName'].'" , "'.$_POST['LName'].'" , "'.$_POST['Phonenumber'].'" , "'.$_POST['gender'].'" , "'.$_POST['Age'].'" , "'.$_POST['Address'].'") 
';

        
$result = mysqli_query($Data_Base_Conect , $sql);
var_dump($result);
<?php
    if(isset($_POST['Fname'])){
        // $file = 'mamd.txt';
        // $file_content = file_get_contents($file);
        // if ($file_content) {
        //     $users = unserialize($file_content); 
        // }else{
        //     $users = [];
        // }
        $db_conection = mysqli_connect()

        $Lname = $_POST['Lname'],
        $Fname = $_POST['Fname'],

        // $user = [
        //         "Ferst.name" => $Fname = $_POST['Fname'],
        //         "Last.name" => $Lname = $_POST['Lname'],
        //     ];
        // $users [] = $user ;
        // $data = serialize($users);
        // file_put_contents( $file , $data . PHP_EOL , FILE_APPEND);
        
    };

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action = "">
        <label for="Fname">first name</label>
        <input id="Fname" name ="Fname"></input><br></br>


        <label for="Lname">Last name</label>
        <input id="Lname" name ="Lname"></input>

        <option>

        </option>
            <button>
        Post
    </botton>
    </form>

</body>
</html>

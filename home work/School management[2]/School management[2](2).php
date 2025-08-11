<?php
$students = [
    [
        "name" => "ali",
        "family" => "akbari",
        "age" => "16",
        "Field of study" => "tajrobi",
        "GPA" => "18",
        "mardod" => false
    ],
    [
        "name" => "hosseyn",
        "family" => "hashemy",
        "age" => "18",
        "Field of study" => "sakhteman",
        "GPA" => "10",
        "mardod" => false
    ],
    [
        "name" => "amir",
        "family" => "rezai",
        "age" => "15",
        "Field of study" => "shabake",
        "GPA" => "18",
        "mardod" => false
    ]
];

// only tajrobi
foreach ($students as $student) {
    if ($student["Field of study"] == "tajrobi") { 
        echo "{$student['name']} {$student['family']}<br>";
    }
}

// Avrage
$totalGPA = 0;
foreach ($students as $student) {
    $totalGPA = $totalGPA + (int)$student["GPA"];
}
$Avrage =  $totalGPA / count($students);
$Avrage = round($Avrage, 2);
echo"<br><strong>Average GPA:</strong>$Avrage<br>";

// mardody

foreach ($students as &$student) {
    if ((int)$student['GPA'] < 12) {
        $student['mardod'] = true;
    }
}
unset($student); // برای جلوگیری از باگ در حلقه‌های بعدی

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Table</title>
        <!-- boot -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>

</style>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Family</th>
                <th>age</th>
                <th>Field of study</th>
                <th>GPA</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($students as $index => $student) {
                 $class = "";
                         if ($student['mardod'] == true) {
                                $class = "bg-danger";
                         }
                    echo "
                    <tr class='$class'>
                        <td>" . ($index + 1) . "</td>
                        <td>{$student['name']}</td>
                        <td>{$student['family']}</td>
                        <td>{$student['age']}</td>
                        <td>{$student['Field of study']}</td>
                        <td>{$student['GPA']}</td>
                    </tr>
                    ";

                }
            
            ?>
        </tbody>
    </table>
</body>
</html>
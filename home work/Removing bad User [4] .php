
<?php
$users = [
    [
        'name' => 'ali',
        'family' => 'mousavi',
        "username" => "Aiii",
        "password" => "45648",
        "countOf-Err" => 0, 
        "Nazar" => "این مستند به خوبی پیامدهای جنگ را به تصویر کشیده است. دیدن آن را توصیه می‌کنم."
    ],

    [
        'name' => 'reza',
        'family' => 'akbary',
        "username" => "Silll",
        "password" => "4788",
        "countOf-Err" => 0, 
        "Nazar" => "این تحلیل شما در مورد جنگ کاملاً اشتباه است. این رویکرد خودش نوعی ترور افکار است."
    ],

    [
        'name' => 're',
        'family' => 'akbary',
        "username" => "Nal",
        "password" => "46788",
        "countOf-Err" => 0, 
        "Nazar" => "از مقاله مفید شما بسیار سپاسگزارم. نکات خوبی مطرح شده بود."
    ],
];

$forbidden_words = ["جنگ", "ترور"];





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="d-flex justify-content-center align-items-center ">
     <div class=" justify-content-center text-center " ><style>
     </style>
        <?php
        foreach ($users as $key => &$user) {
            $user["Nazar"] = str_replace($forbidden_words, "**", $user["Nazar"], $count);
            $user["countOf-Err"] = $count ;
            if ($user["countOf-Err"] > 1) {
                unset($users[$key ]);
                continue;
            }
            echo "کاربر " . ($key + 1) . ": " . $user["Nazar"] . "<br><br>";


}
        ?>
     </div>
</body>

</html>

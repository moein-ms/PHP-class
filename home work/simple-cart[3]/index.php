<?php
$products = [
    [
        "src" => "images/product1.jpg" ,
        "name" => "خرید لپ تاپ اصلی ایسوس با گرافیک 8 گیگ RTX 5080" ,
        "description" => "طراحی شده برای اجرای روان بازی‌ها و نرم‌افزارهای سنگین...",
        "price" => "50200000"
    ]
    ,
    [
        "src" => "images/product2.jpg" ,
        "name" => "لپ‌تاپ Lenovo ThinkBook 15 G4" ,
        "description" => "طراحی شده برای کاربران حرفه‌ای با نمایشگر Full HD، بدنه فلزی و پردازنده‌های نسل جدید. مناسب برای کارهای گرافیکی، برنامه‌نویسی و استفاده روزمره.",
        "price" => "36800000"
    ]
    ,
        [
        "src" => "images/product3.jpg" ,
        "name" => "مایکروسافت سرفیس لپ‌تاپ Go 3" ,
        "description" => "سبک، زیبا و کاملاً مناسب برای دانشجویان و مدیران! با سیستم‌عامل ویندوز 11 و باتری طولانی‌مدت، همراه همیشگی شما در جلسات کاری و تحصیل.",
        "price" => "29500000"
    ]    
    ,
    [
        "src" => "images/product4.jpg" ,
        "name" => "لپ‌تاپ گیمینگ MSI Katana GF66" ,
        "description" => "آماده برای نبردهای گرافیکی! با کارت گرافیک RTX، صفحه‌کلید RGB و سیستم خنک‌کننده پیشرفته، این لپ‌تاپ مخصوص گیمرهای حرفه‌ای طراحی شده.",
        "price" => "59900000"
    ]
];
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>صفحه اصلی</title>
    <link rel="stylesheet" href="https://dl.daneshjooyar.com/mvie/Moodi_Hamed/assets/css/font-yekanbakh-vf.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="header finisher-header" style="width: 100%; height: 300px;">
    <p class="header-title">Impact-Shop</p>
  </div>

    <div class="container" id="product-list-container">
        <h2>لیست محصولات</h2>
        <div class= 'product-list'>
        <?php
        foreach ($products as $key => $product) {
                $price = $product["price"];
                $formatted_price = number_format($price , 0 , "." , ",");
                    echo"
            <div class='product'>
                <img src='{$product["src"]}' alt='' width='696' height='696'>
                <h2>{$product["name"]}</h2>
                <p>{$product["description"]}</p>
                <div class='price'>
                    <ins>$formatted_price</ins>
                    <span>تومان</span>
                </div>
                <a href='product.html' class='btn btn-primary'>
                    جزئیات
                </a>
            </div>
            ";
        };
            ?>   
        </div>
    </div>

    <script src="asset/finisher-header.es5.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
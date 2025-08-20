<?php
                $price = $discount = $currency = $finaly = 0;

                
    if(isset($_POST['currency'])){
        
    $currency = $_POST["currency"];
    $price = $_POST["price"];
    $discount = $_POST["discount"];

    $discount_amount = ($price * $discount) / 100;
    $finaly = $price - $discount_amount;

    if ($currency == "tooman") {

        $price_display = $price / 10;
        $finaly_display = $finaly / 10;

    }else{
        $price_display = $price;
        $finaly_display = $finaly;
    };
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>محاسبه قیمت پس از تخفیف</title>
    <link rel="stylesheet" href="https://dl.daneshjooyar.com/mvie/Moodi_Hamed/assets/css/font-yekanbakh-vf.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <a href="https://daneshjooyar.com/php-tutorial/" class="course-url">
            <img src="assets/imges/daneshjooyar-logo.svg" alt="Daneshjooyar" width="145" height="59">
        </a>
        <form action="" method="post" class="price-form">
            <h3>محاسبه قیمت فروش</h3>
            <p>
                <label for="price">قیمت اصلی(ریال)</label>
                <input  value="<?php echo ($price); ?>" type="text" id="price" name="price" placeholder="قیمت اصلی">
            </p>
            <p>
                <label for="discount">درصد تخفیف</label>
                <input value="<?php echo ($discount); ?>" type="text" id="discount" name="discount" placeholder="درصد تخفیف">
            </p>
            <p>
                <label for="currency">واحد پولی نمایشی</label>
        <select name="currency" id="currency">
            <option value="rial" <?php if ($currency=="rial") echo "selected"; ?>>ریال</option>
            <option value="tooman" <?php if ($currency=="tooman") echo "selected"; ?>>تومان</option>
        </select>
            </p>
            <button>محاسبه قیمت</button>
        </form>
        <div class="result">
            <del style="text-decoration: line-through;"><?php echo" $price_display " ?></del>
            <ins> <?php echo" $finaly_display" ?> </ins>
            <span class="percent"><?php echo" $discount  % " ?> </span>
        </div>
    </div>
</body>
</html>

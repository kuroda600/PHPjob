<?php
    $number = $_POST['number'];
    $pieces = str_split($number);
    shuffle($pieces);
    $random = $pieces[0];

    switch (true) {
        case $random === "0":
            $omikuji = "凶";
            break;
        case $random >= "1" && $random <= "3":
            $omikuji = "小吉";
            break;
        case $random >= "4" && $random <= "6":
            $omikuji = "中吉";
            break;
        case $random >= "7" && $random <= "8":
            $omikuji = "吉";
            break;
        case $random === "9":
            $omikuji = "大吉";
            break;
    }
?>

<p><?php echo date("Y/m/d"); ?>の運勢は<br />
選ばれた数字は<?php echo $random; ?><br />
<?php echo $omikuji; ?></p>
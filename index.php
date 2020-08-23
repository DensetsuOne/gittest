<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Densetsu</title>
</head>
<body>
    <h1>HELLO, DENSETSU!</h1>
    <a href="https://github.com">github.com</a>

    <form method="post">
    <input type="text" name="text_arr">
    <input type="submit" name="button_arr">
    </form>
    <?php 
    
    $text_arr = $_POST['text_arr'];
    $button_arr = $_POST['button_arr'];
    
    if(isset($button_arr) != 0){
        $arr = explode(' ', $text_arr);
        $count = count($arr);
        for($i = 0; $count >= $i ; $i++){
            echo $arr[$i]."<br>";
        }
        echo 'Суммма элементов массива: '.array_sum($arr);
    }
    
    ?>
</body>
</html>
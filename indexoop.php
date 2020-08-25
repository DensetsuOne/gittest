<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>IndexOOP</title>
</head>
<body>
    <p>Welcome to my OOP</p>
    <a href="index.php">Main</a>
    <form method="post">
        <input type="text" name="text_global">
        <input type="text" name="text2_global">
        <input type="submit" name="button_global">
    </form>
    <?php
        $text_global = $_POST['text_global'];
        $text2_global = $_POST['text2_global'];
        $button_global = $_POST['button_global'];
        if(isset($button_global) != 0){
        include('oop.php');
        $global = new Xlobal($text_global, $text2_global);
        echo "<table border='1'> <tr>";
        echo "<td>".$global->getGlobal1()."</td><br><td>". $global->getGlobal2()."</td>";
       
        }
    ?>
    </tr></table>
</body>
</html>
<?php
if(isset($_POST["submit_button"])){
    $first_name = htmlentities($_POST["first_name"]);
    $second_game = htmlentities($_POST["second_name"]);
    $email = htmlentities($_POST["emal"]);
    $review = htmlentities($_POST[review]);
    $red = false;
    $green = false;
    $blue = false;
    if(isset($_POST["red"])){
        $red = true;
    }
    if(isset($_POST["green"])){
        $green = true;
    }
    if(isset($_POST["blue"])){
        $blue = true;
    }
    $output = "
    <html>
    <head>
    <title>Анкетные данные</title>
    </head>
    <body>
    Вас зовут: $first_name $second_name<br />
    Вааша почта: $enail<br />
    Ваша оценка: $review<br />
    Вам нравится красный: $red<br />
    Вам нравится зеленый: $green<br />
    Вам нравится синий: $blue<br />
    ";
    echo $output;
}
else
{
    echo "Введение данные некорректны";
}
?>

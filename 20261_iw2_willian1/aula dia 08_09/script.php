<?php
if ($_POST['resultado'] == "Div by 0 error") {
    $_POST['resultado'] = 0;
};

if ($_POST['resultado'] != '' and $_POST['resultado'] != 0) {
    if ($_POST['button'] == "+") {
        $resposta = $_POST['resultado'] + $_POST['n1'];
        echo $resposta;
    } else if ($_POST['button'] == "-") {
        $resposta = $_POST['resultado'] - $_POST['n1'];
        echo $resposta;
    } else if ($_POST['button'] == "*") {
        $resposta = $_POST['resultado'] * $_POST['n1'];
        echo $resposta;
    } else if ($_POST['button'] == "/") {
        $resposta = $_POST['resultado'] / $_POST['n1'];
        echo $resposta;
    };
} else {
    if ($_POST['button'] == "+") {
        $resposta = 0 + $_POST['n1'];
        echo $resposta;
    } else if ($_POST['button'] == "-") {
        $resposta = 0 - $_POST['n1'];
        echo $resposta;
    } else if ($_POST['button'] == "*") {
        $resposta = 0 * $_POST['n1'];
        echo $resposta;
    } else if ($_POST['button'] == "/") {
        $resposta = "Div by 0 error";
        echo $resposta;
    };
};
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>




<?php
# определяем с каким контроллером будем работать

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
echo 'Подключаемый php файл [Контроллер] = ' . $controllerName . '<br />';

# Определяем с какой функцией будем работать

$actionName = isset ($_GET['action']) ? $_GET['action'] : 'index';

echo 'Функция формирующая страницу (Экшн) = ' . $actionName . '<br />';

// подключаем контроллер

include_once '../controllers/' . $controllerName . 'Controller.php';

// http://fanshop.local/www/?controller=index&action=test























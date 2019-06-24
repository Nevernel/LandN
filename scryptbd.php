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
<?php
$host = 'localhost';  // Хост, у нас все локально
$user = 'thispc';    // Имя созданного вами пользователя
$pass = '36159'; // Установленный вами пароль пользователю
$db_name = 'test';   // Имя базы данных
$link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой

// Ругаемся, если соединение установить не удалось
if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
}
$sql = mysqli_query($link, 'SELECT `Id`, `Name` FROM `univ`');
while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['Id']}"," ",":"," ","{$result['Name']} </br>";
}

?>
<form action = "scryptbd.php" method = "post">
    <button></button>
</form>
</body>
</html>

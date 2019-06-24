
<?php
$arr = array ('Да','Нет');
if ($_GET['text'] == 'Есть общежитие?') { echo "Ответ:";
echo "  ".$arr[array_rand($arr)];}
if ($_GET['text'] == 'Есть военная кафедра?') { echo "Ответ:";
    echo "  ".$arr[array_rand($arr)];}
?>

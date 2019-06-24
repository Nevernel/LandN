<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css.map">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/chat.css">

    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="navbar bg-nav">
    <div class="navbar-brand" style="display: flex; flex-flow: row">
        <img src="img/logo.png" class="img-responsive img-rounded" width="70" height="70">
        <h2 class="header">UniChoice</h2>
    </div>
</div>
<div class="navbar search-bar">
    <img src="img/magnifier.png" width="24" height="24">
    <input placeholder="text" class="search">
</div>
<div class="container-fluid row">
    <div class="col-lg-8 section-container">
        <?php
        $host = 'localhost';  // Хост, у нас все локально
        $user = 'thispc';    // Имя созданного вами пользователя
        $pass = '36159'; // Установленный вами пароль пользователю
        $db_name = 'test';   // Имя базы данных
        $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
        $pdo = new PDO("mysql:host=localhost;dbname=test;charset=utf8", $user, $pass);

        // Ругаемся, если соединение установить не удалось
        if (!$link) {
            echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
            exit;
        }

        ?>
        <?php foreach($pdo->query('SELECT * FROM description') as $row){
        ?>

        <div
                class="section col-lg-8">
            <img src="img/house.jpg">
            <div class="block container-fluid round-container">
                <div class="description">
                    <?php
                    {
                        echo $row['Description'];
                    }
                    ?>
                </div>
                <div class="note"> <?php
                    {
                        echo $row['note'];
                    };
                    ?>

                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="col-lg-4" style="height: 100%">
        <div class="block-ege round-container">
            <div class="ege-items">
                <div class="ege-item">
                    <div class="description">
                        AAA
                    </div>
                    <div class="note">
                        <input placeholder="...">
                    </div>
                </div>
                <div class="ege-item">
                    <div class="description">
                        AAA
                    </div>
                    <div class="note">
                        <input placeholder="...">
                    </div>
                </div>
                <div class="ege-item">
                    <div class="description">
                        AAA
                    </div>
                    <div class="note">
                        <input placeholder="...">
                    </div>
                </div>
                <div class="ege-item">
                    <div class="description">
                        AAA
                    </div>
                    <div class="note">
                        <input placeholder="...">
                    </div>
                </div>
            </div>
            <div class="ege-btn">
                <button>TEST</button>
            </div>
        </div>
        <div class="block-forum round-container">
            <div class="forum-item">

            </div>
        </div>
    </div>
</div>
<img class="dialog-btn" src="img/dialog.png" onclick="openChat()">
<div class="dialog" id="chat" style="opacity: 0; z-index: -100">
    <div class="close dialog-close" style="height: 20px" onclick="closeChat()">
        <span aria-hidden="true">&times;</span>
    </div>
    <div class="dialog-content chat" id="chat-content"></div>
    <div class="dialog-input container">
        <input placeholder="Message" class="col-lg-9" id="chat-input">
        <button class="col-lg-3" onclick="sendChatMessage()">Send</button>
    </div>
</div>
<script src="js/main.js"></script>
</body>
</html>
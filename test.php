<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Родословное древо</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .person {
            width: 150px;
            border: 1px solid #000;
            text-align: center;
            padding: 10px;
            position: relative;
        }

        .line {
            position: absolute;
            width: 50%;
            height: 2px;
            background-color: black;
            top: calc(100% + 5px);
            left: 25%;
        }

        .line.vertical {
            transform: rotate(90deg);
            left: calc(50% - 1px);
            width: 2px;
            height: 30px;
        }

        .family-tree {
            position: relative;
            display: inline-block;
        }

        .child {
            position: absolute;
            top: 60px;
            left: 50%;
            transform: translateX(-50%);
        }

        .parent {
            position: absolute;
            top: 120px;
            left: 50%;
            transform: translateX(-50%);
        }

        #grandparent {
            position: absolute;
            top: 180px;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
</head>
<body>
    <div class="family-tree">
        <!-- Сын -->
        <div class="persons child">Иванов Егор Петрович</div>
        <div class="line"></div>

        <!-- Отец -->
        <div class="persons parent">Иванов Петр Сергеевич</div>
        <div class="line vertical"></div>

        <!-- Мать отца -->
        <div class="persons grandparent">Иванова Елена Анатольевна</div>
        <div class="line"></div>

        <!-- Мать -->
        <div class="person parent" style="left: 200px;">Иванова Татьяна Семеновна</div>
        <div class="line" style="left: 75%;"></div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/styles.css">
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <title>Коробки</title>
</head>
<body>
    <div class="wrap">
        <h3>Введите количество требуемых бутылок:</h3>
        <div class="input_block">
            <input class="input_num" type="text" name="num" id="num">
            <button class="btn" onclick="count()">OK</button>
        </div>
        <div class="answer_box" id="answer"></div>
    </div>
<script defer src="C_Counter.js"></script>
<script defer src="counter.js"></script>
</body>
</html>
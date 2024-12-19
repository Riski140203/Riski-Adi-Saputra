<html>
<head>
    <title>Looping PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin: 20px;
        }
        .box {
            display: inline-block;
            width: 30px;
            height: 30px;
            border: 1px solid black;
            text-align: center;
            line-height: 30px;
            margin: 2px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $rows = 5;
        for ($i = 1; $i <= $rows; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "<div class='box'>$j</div>";
            }
            echo "<br>";
        }
        ?>
    </div>
</body>
</html>
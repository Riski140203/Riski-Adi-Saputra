<html>
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: white;
        }
        .container {
            display: grid;
            grid-template-columns: repeat(5, 50px);
            grid-gap: 5px;
        }
        .box {
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            font-size: 20px;
            color: white;
        }
        .box.blue {
            background-color: #000033;
        }
        .box.gray {
            background-color: #cccccc;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box blue">1</div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        
        <div class="box gray">1</div>
        <div class="box gray">2</div>
        <div></div>
        <div></div>
        <div></div>
        
        <div class="box blue">1</div>
        <div class="box blue">2</div>
        <div class="box blue">3</div>
        <div></div>
        <div></div>
        
        <div class="box gray">1</div>
        <div class="box gray">2</div>
        <div class="box gray">3</div>
        <div class="box gray">4</div>
        <div></div>
        
        <div class="box blue">1</div>
        <div class="box blue">2</div>
        <div class="box blue">3</div>
        <div class="box blue">4</div>
        <div class="box blue">5</div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1c - pw</title>

    <style>
        .kotak{
            width: 500px;
            height: 100px;
            margin: 0 0;
            display: grid;
            grid-template-columns: 50px 50px 50px ;
            grid-template-rows: 50px 50px 50px;
            grid-template-areas:    'kotak1 kotak1 kotak1 '
                                    'kotak2 kotak2_1 kotak2_1'
                                    'kotak3 kotak3_1 kotak3_2';
            
        }
        .kotak1{
            grid-area: kotak1;
            position: relative;
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            border: 1px solid black;
        }
        .kotak2{
            grid-area: kotak2;
            position: relative;
            width: 50px;
            height: 50px;
            background-color: #ff6;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            border: 1px solid black;
        }

        .kotak2_1{
            grid-area: kotak2.1;
            position: relative;
            width: 50px;
            height: 50px;
            background-color: #ff6;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            border: 1px solid black;
        }

        .kotak3{
            grid-area: kotak3;
            position: relative;
            width: 50px;
            height: 50px;
            background-color: lightblue;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            border: 1px solid black;
        }

        .kotak3_1{
            grid-area: kotak3_1;
            position: relative;
            width: 50px;
            height: 50px;
            background-color: lightblue;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            border: 1px solid black;
        }

        .kotak3_2{
            grid-area: kotak3_2;
            position: relative;
            width: 50px;
            height: 50px;
            background-color: lightblue;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            border: 1px solid black;
        }
            </style>
        </head>
</head>
<body>
    <div class="kotak">
        <div class="kotak1">1</div>
        <div class="kotak2">2</div>
        <div class="kotak2_1">2</div>
        <div class="kotak3">3</div>
        <div class="kotak3_1">3</div>
        <div class="kotak3_2">3</div>
    </div>
</body>
</html>
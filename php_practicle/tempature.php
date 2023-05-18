<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./style.css">
    <script src="./jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="container" style="background-color: #676767; margin: 5rem auto; max-width: 500px;">
    <p id="Msg"></p>
        <div class="first-portion">
            <label for="">From</label>
            <input type="number" id="data" data-flag="tempature">
            <select name="" id="from" data-flag="tempature">
                <option value="Fahrenheit">Fahrenheit</option>
                <option value="Celsius">Celsius</option>
                <option value="Kelvin">Kelvin</option>
            </select>
        </div>
        <div class="second-portion">
            <label for="">To</label>
            <select name="" id="to" data-flag="tempature">
            <option value="Fahrenheit">Fahrenheit</option>
                <option value="Celsius">Celsius</option>
                <option value="Kelvin">Kelvin</option>
            </select>
        </div>
        <label for="">Answer</label>
        <div class="answer">
            <h3 id="resultData">0</h3>
        </div>
    </div>
    <script src="./script.js"></script>
</body>

</html>
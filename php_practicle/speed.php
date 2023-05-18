<?php

session_start();
$_SESSION['flag'] = "speed";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="./jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="container" style="margin: 5rem auto;">
    <p id="Msg"></p>
        <div class="input-group mb-3 w-50">
            <!-- <label for="">From</label> -->
            <span class="input-group-text" id="inputGroup-sizing-default">From</span>
            <input type="number" id="data" data-flag="speed" class="form-control w-25">
            <select name="" id="from"  data-flag="speed">
                <option value="fromKM">Kilometre/hour</option>
                <option value="fromMeter">Metre/second</option>
            </select>
        </div>
        <div class="second-portion">
            <label for="">To</label>
            <select name="" id="to"  data-flag="speed">
                <option value="toKM">Kilometre/hour</option>
                <option value="toMeter">Metre/second</option>
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
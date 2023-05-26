<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="./jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="background">
        <div class="darkside"></div>
        <div class="lightside"></div>
    </div>
    <div class="container" style="background-color: #fff; max-width: 500px;">
        <p id="Msg"></p>
        <input type="number" id="data" data-flag="area" class="form-control numberSpace" placeholder="Enter a Value">
        <div class="input-group mb-3">
            <span class="input-group-text btn btn-outline-secondary">From</span>
            <select name="" id="from" data-flag="area" class="input-group-text selectValue">
                <option value="Kilometer">Square Kilometer</option>
                <option value="Meter">Square Meter</option>
                <option value="Foot">Square Foot</option>
            </select>
        </div>
        <div class="input-group mb-3">
        <span class="input-group-text btn btn-outline-secondary">&nbsp;&nbsp;To</span>
        <select name="" id="to" data-flag="area" class="input-group-text selectValue">
            <option value="Kilometer"> &nbsp; &nbsp;Square Kilometer</option>
            <option value="Meter">Square Meter</option>
            <option value="Foot">Square Foot</option>
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
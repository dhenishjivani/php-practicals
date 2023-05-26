<?php
if (isset($_POST['getValue'])) {
    $val = $_POST['inputval'];
    $from = $_POST['inputFrom'];
    $to = $_POST['inputTo'];
    switch (true) {
        case $from == "fromKM" && $to === "toMeter":
            $result = $val * 1000;
            break;
        case $from == "fromKM" && $to === "toKM":
            $result = $val * 1;
            break;
        case $from == "fromMeter" && $to === "toMeter":
            $result = $val * 1;
            break;
        case $from == "fromMeter" && $to === "toKM":
            $result = $val / 1000;
            break;
        default:
            $result = "Invalid input";
            break;
    }
    echo $result;
}

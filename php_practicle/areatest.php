<?php 
if(isset($_POST['getValue'])) {
    $val = $_POST['inputval'];
    $from = $_POST['inputFrom'];
    // echo $from;
    // die();
    $to = $_POST['inputTo'];

    $fromTo = "$from" . "To" .$to;

    $convertFromKilometer  = [
        "KilometerToKilometer" => '$val',
        "KilometerToMeter" => '$val * 1000000',
        "KilometerToFoot" => '$val * 10760000'
    ];
    $convertFromMeter  = [
        "MeterToKilometer" => '$val * 0.000001',
        "MeterToMeter" => '$val',
        "MeterToFoot" => '$val * 10.764'
    ];
    $convertFromFoot  = [
        "FootToKilometer" => '$val / 10760000',
        "FootToMeter" => '$val / 10.764',
        "FootToFoot" => '$val'
    ];
    if(array_key_exists($fromTo, $convertFromKilometer)) {   
        $str = $convertFromKilometer[$fromTo];
        echo eval("return $str;");
    } else if (array_key_exists($fromTo, $convertFromMeter)) {
        $str = $convertFromMeter[$fromTo];
        echo eval("return $str;");
    } else if (array_key_exists($fromTo, $convertFromFoot)) {
        $str = $convertFromFoot[$fromTo];
        echo eval("return $str;");
    }
}

?>
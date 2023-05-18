<?php 
if(isset($_POST['getValue'])) {
    $val = $_POST['inputval'];
    $from = $_POST['inputFrom'];
    // echo $from;
    // die();
    $to = $_POST['inputTo'];

    $fromTo = "$from" . "To" .$to;

    $convertFromFahrenheit  = [
        "FahrenheitToFahrenheit" => '$val',
        "FahrenheitToCelsius" => '($val - 32) * 5/9',
        "FahrenheitToKelvin" => '($val - 32) * 5/9 + 273.15'
    ];
    $convertFromCelsius  = [
        "CelsiusToFahrenheit" => '($val * 9/5) + 32',
        "CelsiusToCelsius" => '$val',
        "CelsiusToKelvin" => '$val + 273.15'
    ];
    $convertFromKelvin  = [
        "KelvinToFahrenheit" => '($val - 273.15) * (9/5) + 32',
        "KelvinToCelsius" => '$val - 273.15',
        "KelvinToKelvin" => '$val'
    ];
    if(array_key_exists($fromTo, $convertFromFahrenheit)) {   
        $str = $convertFromFahrenheit[$fromTo];
        echo eval("return $str;");
    } else if (array_key_exists($fromTo, $convertFromCelsius)) {
        $str = $convertFromCelsius[$fromTo];
        echo eval("return $str;");
    } else if (array_key_exists($fromTo, $convertFromKelvin)) {
        $str = $convertFromKelvin[$fromTo];
        echo eval("return $str;");
    }
}

// $number = 32;
// $convertFromFahrenheit  = [
//     "celsius" => '($number - 32) * 5/9',
//     "kelvin" => '($number - 32) * 5/9 + 273.15'
// ];
// if(array_key_exists('celsius', $convertFromFahrenheit)) {   
//     $str = $convertFromFahrenheit['celsius'];
//     echo eval("return $str;");
// } else if (array_key_exists('kelvin', $convertFromFahrenheit)) {
//     $str = $convertFromFahrenheit['kelvin'];
//     echo eval("return $str;");
// }
?>
<?php
echo "helloo";

$data = file_get_contents('EMP.json');
$result = json_decode($data,true);
echo "<pre>";
// echo gettype($result);
// print_r($result);

$len = count($result['messages']);
echo $len;

for($i=0 ; $i < $len ; $i++){
    echo "<pre>";
    echo $result['messages'][$i]['to_email'];
}
?>
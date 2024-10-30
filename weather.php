<?php
header("Content-Type: application/json");
$city = htmlspecialchars($_GET['city'] ?? '');

if (empty($city)) {
    echo json_encode(["error" => "Zadejte město."]);
    exit;
}

$apiKey = '0deb86cff2bd61b10210efc7501cd67e';
$url = "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric&lang=cz";
$response = file_get_contents($url);
$data = json_decode($response, true);

echo json_encode($data['cod'] == 200 
    ? ["city" => $data['name'], "temperature" => $data['main']['temp'], "description" => $data['weather'][0]['description']]
    : ["error" => "Město nebylo nalezeno."]);
?>
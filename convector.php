<?php
$ch = curl_init();
$a = $_GET['url_old'];
$Url = "https://qps.ru/api?url=$a&format=text";
$agent = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.70 Safari/537.36";

curl_setopt($ch, CURLOPT_URL,$Url);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);


curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'GET');

curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

$output = curl_exec($ch);

curl_close($ch);
var_dump($Url);
?>


<html>
<head>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="js/form.js"></script>
</head>

<body>
<form action="/" method="get">
    <input type="text" name="url_old">
    <input type="submit">
</form>
</body>
</html>
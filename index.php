<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro Xablau</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


</body>
</html>

<?php

//Basics
/*
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url); //getting connection
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //the way you can get access a https protocol
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); //now it's able to store the result in a variable

$result = curl_exec($curl);

echo $result;

curl_close($curl);
*/


//returning a image from amazon.co.uk
$curl = curl_init();

$search_string = 'pc video games 2021';
$url = "https://www.amazon.co.uk/s?k=pc+video+games+2021&ref=nb_sb_noss";

curl_setopt($curl, CURLOPT_URL, $url); //getting connection
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //the way you can get access to https protocol
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); //now it's able to store the result in a variable

$result = curl_exec($curl);

preg_match_all("!https://m.media-amazon.com/images/I/[^\s]*?._AC_UY218_.jpg!", $result/*taking from*/, $matches /*saving on*/);

$images = array_values(array_unique($matches[0]));


for($i = 0; $i < count($images); $i++){
	echo "<div style='float:left; margin: 10 0 0 0;'>";
	echo "<img src='$images[$i]'><br>";
	echo "</div>";
}

curl_close($curl)

?>

<!--

	$ch = curl_init();

 	curl_setopt($ch, CURLOPT_URL, "http://localhost/PHP/web_services/request.php");
 	curl_setopt($ch, CURLOPT_POST, 1);

 	//na vida real pode-se usar passando como array e usar a função http_build_query
 	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('request'=>'name_return')));

 	//respostas do servidor
 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

 	$server_output = curl_exec($ch);

 	curl_close($ch);

 	echo "$server_output";

 -->
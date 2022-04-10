<?php
$curl = curl_init();
curl_setopt_array($curl, [
	CURLOPT_URL => "https://axesso-facebook-data-service.p.rapidapi.com/fba/facebook-lookup-posts?url=https%3A%2F%2Fwww.facebook.com%2Flonghornsteakhouse%2Fposts%2F",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30000,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: axesso-facebook-data-service.p.rapidapi.com",
		"X-RapidAPI-Key: 1a4ffdaa43msh518fad0dde60f02p15a791jsn1e7fd5dafca4"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
     $res = json_decode($response, true);
     print_r(json_encode($res));
}
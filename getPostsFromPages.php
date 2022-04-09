<?php
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => "https://axesso-facebook-data-service.p.rapidapi.com/fba/facebook-lookup-posts?url=https%3A%2F%2Fwww.facebook.com%2Fdishtelecom%2Fposts%2F",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: axesso-facebook-data-service.p.rapidapi.com",
        "X-RapidAPI-Key: 8fa19ec541msha400f0ee2cd627bp1fcce0jsn62c1ec6fbde1"
    ],
]);
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "cURL Error #:" . $err;
} else {
     $res = json_decode($response, true);
     echo json_encode($res);
}
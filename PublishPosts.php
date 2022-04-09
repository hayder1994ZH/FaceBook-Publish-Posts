
<?php
require_once ('vendor/autoload.php');
  $fb = new Facebook\Facebook([
    'app_id' => '3100558243546370',
    'app_secret' => 'a5993126b8abb208caf7d917c9810269',
    'default_graph_version' => 'v2.10',
    ]);
    $pageAccessToken = 'EAAsD8Pi2RQIBADDZAnTJUprZA1R6IHZBA7t1XZClfjtPidyiek7GZCPh6TTOze2WAzVnFT8vhoRHIaQiwPaLGZBHTv8wWLDgWsnwYD06fFVozEGRYS4dbVGs8c9kQU03RjlgRLDugB8B3Am4WaHgSpKeQqT3pyP526TTVIIxHgebFFOhAdmzCdzhwBoM44e71p4DWKxMByLGMcwF6la1UKcX2PC0dDPbniuuNlvcTFBFBbjYCLKrDB';
    $daRequest['picture'] = "https://scontent-ssn1-1.xx.fbcdn.net/v/t39.30808-6/277574074_4979185132129806_6705498247237504779_n.jpg?stp=dst-jpg_p960x960&_nc_cat=104&ccb=1-5&_nc_sid=36a2c1&_nc_ohc=ArCvsj8QrIoAX-9yyQ6&_nc_ht=scontent-ssn1-1.xx&oh=00_AT-txITInAJWk3FexUcmRPSCRDBegf3vt1KdUNTFsxb40Q&oe=62576F91";
    $daRequest['link'] = "http://www.example.com/";
    $daRequest['message'] = "Your message";
try
{
  $response = $fb->post('/me/feed', $daRequest, $pageAccessToken);
}catch(Facebook\Exceptions\FacebookResponseException $e)
{
  echo 'Graph returned an error: '.$e->getMessage();
  exit;
}catch(Facebook\Exceptions\FacebookSDKException $e)
{
  echo 'Facebook SDK returned an Error: '.$e->getMessage();
  exit;
}
$graphNode = $response->getGraphNode();
echo 'ID:'.$graphNode['id'];
?>
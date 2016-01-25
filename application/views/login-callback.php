<?
require_once BASEPATH . '../facebook-sdk-v5/autoload.php';
$fb = new Facebook\Facebook([
'app_id' => '214340015575657',
'app_secret' => 'cad7051613820a8abbd70964efda8a2f',
'default_graph_version' => 'v2.5',
]);
$helper = $fb->getRedirectLoginHelper();
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (isset($accessToken)) {
  // Logged in!
  $_SESSION['facebook_access_token'] = (string) $accessToken;
  header('Location: /');
  exit;
  // Now you can redirect to another page and use the
  // access token from $_SESSION['facebook_access_token']
}

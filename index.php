<?php
session_start();

require_once './vendor/autoload.php';

class Insight { 

    public function index()
    {
         
    	$accessToken ='EAAUkPsv2QlkBABopKAtqtpYmPZCRHR2cW12JJGv1PiEa006cE1wkykVPlmFgM3ByYpFNf5JPtDYNU8ZCJgBjnmbcwmgvDQYbGLqZANmmSExOEP4WCB7k8ECANJDNFvnV7B9Y7MLrdrFHrhVUg2rxYx3YZBJYwcPPnTG6ioIX93ZBgTHMzHtQJVGFCj7QvOYY8dvPfqmA5KwZDZD';

    	$data =array();
    	$fb = new Facebook\Facebook([
            'app_id' => '', // Replace {app-id} with your app id
            'app_secret' => '',
            'default_graph_version' => 'v3.1',
            'grant_type'=>'client_credentials',
        ]);

      $oAuth2Client = $fb->getOAuth2Client();

// Get the access token metadata from /debug_token
        $tokenMetadata = $oAuth2Client->debugToken($accessToken);
        //echo '<h3>Metadata</h3>';

        //echo '<pre>';
        //print_r($tokenMetadata);
 
// Validation (these will throw FacebookSDKException's when they fail)
        $tokenMetadata->validateAppId('app_id'); // Replace {app-id} with your app id
// If you know the user ID this access token belongs to, you can validate it here
//$tokenMetadata->validateUserId('123');
        $tokenMetadata->validateExpiration();
        
            try {
                $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
            } catch (Facebook\Exceptions\FacebookSDKException $e) {
                echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
                exit;
            }

            //echo '<h3>Long-lived</h3>';
            //var_dump($accessToken->getValue());
        

        //echo '<pre>';
        //print_r($tokenMetadata);
        //echo '</pre>';


    	
    	$response = $fb->get('/page_id/insights/?metric=page_fan_adds_unique,page_fan_adds,post_reactions_like_total,page_post_engagements,page_actions_post_reactions_like_total,page_actions_post_reactions_love_total,page_actions_post_reactions_wow_total,page_actions_post_reactions_haha_total,page_total_actions,post_reactions_like_total', $accessToken); // Replace {page_id} with your page id
        
        $insights = $response->getGraphEdge()->asArray();

        require_once'insight_view.php';
    }
}
$insihts = new Insight();
$insihts::index();

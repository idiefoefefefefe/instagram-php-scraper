<?php
require __DIR__ . '/../../../../vendor/autoload.php';

use InstagramScraper\Instagram;

$instagram  = Instagram::withCredentials(new \GuzzleHttp\Client(), '', '', null);
$instagram->loginWithSessionId('70209781271%3A1u4L3PFFxXVbqq%3A7%3AAYc1Suvo0A8lY6vnrN2oLXdwEJvz16JuEOqdI7EEKQ');      // 'sessionid' from browser
                                                                        // it can work for a long time, months
                                                                        // and can throw InstagramAuthException
$posts  = $instagram->getFeed();

foreach ($posts as $post){
    echo $post->getImageHighResolutionUrl()."\n";
}

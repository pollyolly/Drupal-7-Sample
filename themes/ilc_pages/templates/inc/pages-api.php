<?php
function getUvleCredentials($data){
	$url = "https://192.168.1.28/ilc-pages-2017/?q=user";
	if(count($data) > 0){
		return uvleApi($url, $data);
		//drupal_goto('user', array('query' => array('destination' => '<front>')));
	} return 'No data received!';
}
function getFeaturedImage($id){
    $url = 'https://ilc.upd.edu.ph/wp-json/wp/v2/media/' . $id;
    $data = websiteApi($url);
    return $data['guid']['rendered'];
}
function getArticleText(){
    try {
    $url = 'https://ilc.upd.edu.ph/wp-json/wp/v2/posts';
    $data = websiteApi($url, null);
    return $data;
} catch (Exception $e) {
	echo 'Unable to load the articles.<a href="https://ilc.upd.edu.ph/announcements" target="_blank"> Proceed to ILC Website.</a>';
}
}
function websiteApi($url){
    $options = array(
         CURLOPT_RETURNTRANSFER => true, // return web page
         CURLOPT_HEADER => false, // don't return headers
         CURLOPT_FOLLOWLOCATION => true, // follow redirects
         CURLOPT_MAXREDIRS => 10, // stop after 10 redirects
         CURLOPT_ENCODING => "utf8", // handle compressed
         CURLOPT_USERAGENT => "pages.upd.edu.ph", // name of client
         CURLOPT_AUTOREFERER => true // set referrer on redirect
    //CURLOPT_CONNECTTIMEOUT => 120, // time-out on connect
    //CURLOPT_TIMEOUT => 120, // time-out on response
    );
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    //curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt_array($curl, $options);
    //curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($credentials));
    // $errmsg = curl_error($curl);
    // $cinfo = curl_getinfo($curl);
    $response = curl_exec($curl);
    if(curl_errno($curl)){
        throw new Exception(curl_error($curl));
    }
    curl_close($curl);
    $data = json_decode($response, true);
    return $data;
}
function uvleApi($url, $credentials){
    $options = array(
         CURLOPT_RETURNTRANSFER => true, // return web page
         CURLOPT_HEADER => false, // don't return headers
         CURLOPT_FOLLOWLOCATION => true, // follow redirects
         CURLOPT_MAXREDIRS => 5, // stop after 10 redirects
         CURLOPT_ENCODING => "utf8", // handle compressed
         CURLOPT_USERAGENT => "uvle.upd.edu.ph", // name of client
         CURLOPT_AUTOREFERER => true // set referrer on redirect
         //CURLOPT_CONNECTTIMEOUT => 120, // time-out on connect
         //CURLOPT_TIMEOUT => 120, // time-out on response
    );
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
//    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt_array($curl, $options);
//    curl_setopt($curl, CURLOPT_POSTFIELDS, $credentials);
    // $errmsg = curl_error($curl);
    // $cinfo = curl_getinfo($curl);
    $response = curl_exec($curl);
    if(curl_errno($curl)){
        throw new Exception(curl_error($curl));
    }
    curl_close($curl);
    $data = json_decode($response, true);
    return $data;
}
?>

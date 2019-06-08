<?php
echo '<pre>',print_r($_SERVER),'</pre>';
function getHeaders(){
    $arr = [
        'ACCEPT' => $_SERVER['HTTP_ACCEPT'],
        'ACCEPT_ENCODING' => $_SERVER['HTTP_ACCEPT_ENCODING'],
        'ACCEPT_LANGUAGE' => $_SERVER['HTTP_ACCEPT_LANGUAGE']
    ];
    return ($arr);
};
function getPath(){
    return($_SERVER['PATH_INFO']);
};
function getScheme(){
    $s = $_SERVER['SERVER_PROTOCOL'];
    if(stripos($s,'https')!=false){
        return ('https://');
    }
    else{
        return ('http://');
    }
};
function getPort(){
    return ($_SERVER['REMOTE_PORT']);
};
function getQueryParams(){
    $queryString = $_SERVER['QUERY_STRING'];
    $queryArray = explode('&',$queryString);
    $arr=[];
    foreach ($queryArray as $value){
        $separatedQuery = explode('=',$value);
        $arr[$separatedQuery[0]]=$separatedQuery[1];
    }
    return ($arr);
};
//not sure about this one
function get($data){
    return($_GET[$data]);
};
function getData(){
    if($_SERVER['REQUEST_METHOD']=="POST"){
        return ($_POST);
    }
    else{
        return ($_GET);
    }
};
function getClientIp(){
    return ($_SERVER['REMOTE_ADDR']);
}
function getCountry(){
    $ip = $_SERVER['REMOTE_ADDR'];
    $country = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
    return($country['geoplugin_continentName']);
};
function getMimeType(){
    $mimeType = explode(',',$_SERVER['HTTP_ACCEPT']);
    return($mimeType);
};

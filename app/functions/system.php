<?php

function _redirect(string $url){
    return redirect(base_url($url));
}

function _encrypt($text){
    return base64_encode($text);
}

function _decrypt($text){
    return base64_decode($text);
}

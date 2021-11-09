<?php
/**
* plugin name: SSG - Bucketlist
* Description: A bucket list for SSG
* Plugin URI: http://localhost
* Version: 1.0
* Author: Amalie Vinther
* Author: http://localhost
* License: GPL2
*/

function register_my_plugin (){
    wp_enqueue_style('BucketStylesheet', plugins_url('ssgplugin/css/style.css'));
    wp_enqueue_script('BucketScript', plugins_url('ssgplugin/script/script.js'),array(),null,true);
}


function ssgfunction (){
    $mycode = '
    <div id="mainbox" class="mainbox">
    <div id="box" class="box">
      <div class="box1">
        <span class="span1"><b>Visit ARoS</b></span>
        <span class="span2"><b>Go winter bathing</b></span>
        <span class="span3"><b>Free Standup at Alberts</b></span>
        <span class="span4"><b>Go to pub-quiz on Tir Na Nog</b></span>
      </div>
      <div class="box2">
        <span class="span1"><b>Eat "stegt flæsk med persillesovs"</b></span>
        <span class="span2"><b>"Become a knight in Guldhornene"</b></span>
        <span class="span3"><b>Have a study session at Dokk1</b></span>
        <span class="span4"><b>Take a selfie</b></span>
      </div>
    </div> 
    <button class="spin" onclick="rotateFunction()">SPIN</button>f
  </div>';
    return $mycode;
}

add_shortcode('ssgplugin','ssgfunction');
add_action('wp_enqueue_scripts','register_my_plugin');
?>
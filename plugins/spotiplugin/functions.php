<?php
/**
* plugin name: Spotify plugin
* Description: A plugin test
* Plugin URI: http://localhost
* Version: 1.0
* Author: Amalie Vinther
* Author: http://localhost
* License: GPL2
*/

function spotifyfunction (){
    $mycode = '
    <iframe src="https://open.spotify.com/embed/playlist/37i9dQZF1DX5622XLsm5RS?theme=0" width="80%" height="380" frameBorder="0" allow="autoplay;"></iframe>
    ';
    return $mycode;
}

add_shortcode('spotiplugin','spotifyfunction');
?>
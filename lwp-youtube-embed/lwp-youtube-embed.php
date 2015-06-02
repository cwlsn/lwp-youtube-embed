<?php
/*
* Plugin Name: Lightweight Reponsive Youtube Embed
* Description: Add an easy to use shortcode to add responsive YouTube embeds to your WordPress sites without weighing your load times down.
* Version: 1.1
* Author: Lightweight Plugins
* Author URI: http://www.lightweightplugins.co
*/
function lwp_youtube_style () {
    wp_register_style('lwp_youtube_style',plugins_url('lwp-youtube-embed.min.css',__FILE__), array(),'20150602','all');
    wp_enqueue_style('lwp_youtube_style');
}function lwp_youtube_embed($atts) {
    $a=shortcode_atts(array(
        'autohide'=>'2','autoplay'=>'0','loop'=>'0','modestbranding'=>'0','rel'=>'1'),$atts);
    $params=http_build_query($a);
    $video=$atts['v'];
    $class=(isset($atts['4x3'])&&$atts['4x3'])?'lwp_youtube_4x3':'lwp_youtube_16x9';
    return '<div class="lwp_youtube_embed '.$class.'"><iframe src="https://www.youtube.com/embed/'.$video.'?'.$params.'" frameborder="0" allowfullscreen></iframe></div>'; }
add_shortcode('youtube', 'lwp_youtube_embed');
add_action('wp_enqueue_scripts', 'lwp_youtube_style');
?>
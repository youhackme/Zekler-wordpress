<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 09/02/2017
 * Time: 14:07
 */


/*-----------------------------------------------------------------------------------*/
/*	Added by Hyder - 02 November 2012
/*-----------------------------------------------------------------------------------*/

function step($atts, $content = null)
{

    extract(shortcode_atts([
        'no' => '1',
    ], $atts));

    //return '<li><span class="redbtn">' . $no . '.</span>' . do_shortcode($content) . '</li>';
    return '<li>' . do_shortcode($content) . '</li>';
}

add_shortcode('step', 'step');


/*-----------------------------------------------------------------------------------*/
/*	Added by Hyder - Keyboard styling - 03 November 2012
/*-----------------------------------------------------------------------------------*/

function keyboard_shortcut($atts, $content = null)
{


    return '<kbd>' . do_shortcode($content) . '</kbd>';

}

add_shortcode('kbd', 'keyboard_shortcut');

/*-----------------------------------------------------------------------------------*/
/*	Added by Hyder - Code shortcode - 06  November 2012
/*-----------------------------------------------------------------------------------*/

function code($atts, $content = null)
{


    return '<code>' . do_shortcode($content) . '</code>';

}

add_shortcode('code', 'code');
<?php
/**************************** */
/* Versluis 2013 Theme
/* Ad-Free options
/* *************************** */

function guru_adfree_note() {
    
    // explain that ad-free videos would appear here
    // prompt user to login or register
}

function guru_adfree_showcase($showcase) {

    // print generic Vimeo Showcase code
    // pass Showcase ID from page template

    // $showcase = "6067703";
    
    $vimeo = "<div style='padding:56.25% 0 0 0;position:relative;'><iframe src='https://vimeo.com/showcase/" . $showcase . "/embed' allowfullscreen frameborder='0' style='position:absolute;top:0;left:0;width:100%;height:100%;'></iframe></div>";
    
    // $vimeo = "<div style='padding:56.25% 0 0 0;position:relative;'><iframe src='https://vimeo.com/showcase/6067703/embed' allowfullscreen frameborder='0' style='position:absolute;top:0;left:0;width:100%;height:100%;'></iframe></div>";
    echo $vimeo;

}

function guru_adfree() {
    
    // quick function called from page template
    // figure out showcase ID by page title
    
    if(is_user_logged_in()) {

        // user is logged in
        // echo'<p>User is logged in.';


        // show playlist
        $showcase = guru_get_showcase();
        // guru_adfree_showcase(6067703);
        if ($showcase > 0) {
            guru_adfree_showcase($showcase);
        }

        // add a thank you message below
        guru_thanks();
        //////////////////////////////////

    } else {

        // user is NOT logged in
        // echo'<p>User is NOT logged in.';
        guru_explain_support();
    }
}

function guru_get_showcase() {

    // figure out which page we're on, and return the showcase ID

    // DAZ Studio 101
    if (is_page('ds101')) {
        return 7455448;
    }

    // if we don't have a matching ID, return a default
    return 0;
}

function guru_explain_support() {

    // print an explanation about supporter benefits
    ?>
    <strong>Supporters can watch this couse ad-free!</strong>
    <h3>Already registered? <a href="https://versluis.com/wp-admin">Login here</a></h3>
    <hr class="wp-block-separator">
    <h3>Not a supporter yet? Sign up now!</h3>
    <script type='text/javascript' src='https://ko-fi.com/widgets/widget_2.js'></script><script async type='text/javascript'>kofiwidget2.init('Support Me on Ko-fi', '#29abe0', 'F1F721DI9');kofiwidget2.draw();</script><br>

    <p>
	If you enjoy my content, consider supporting me and all my projects. It would mean the world to me, and as a thank you, I'll take away those annoying ads on all articles and videos.</p>

    <p>Pick any of the options below to unlock ad-free viewing and reading:</p>
    <ul>
    <li><a href="https://patreon.com/versluis" target="_blank">Support me on Patreon</a></li>
    <li><a href="https://ko-fi.com/wpguru" target="_blank">Buy me a Ko-Fi</a> or two (or three)</li>
    <li><a href="https://youtube.com/thewpguru" target="_blank">Buy a Super Chat during a YouTube stream</a></li> 
    <li><a href="https://twitch.tv/wpguru" target="_blank">Become a Twitch subscriber</a> or cheer with bits</li>
    <li>Make a <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=Z65UJ3DQUHWS4&source=url" target="_blank">PayPal donation</a></li>
    </ul>
    <p>I'll have to approve your ad-free access manually, but I'm usually pretty quick with that. As long as I can link your donation to a registered user on this site, you will get access. I've explained how the whole process works <a href="https://www.versluis.com/ad-free/">on this page</a>. 
    </p>
    <h3>Thank you - and enjoy 😍</h3>
    <?php
}

function guru_thanks() {

    // print a thank you message below the content
    echo "<h3>Thank you for your continued support 😍</h3>";
}
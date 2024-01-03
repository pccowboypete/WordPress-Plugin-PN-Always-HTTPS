<?php
/**
 * Plugin Name: PN Always HTTPS
 * Description: Very simple but effective HTTPS redirect plugin.
 * Author: Peter Nanayon
 * Author URI: https://peternanayon.online
 * Version: 1.0.0
 * License: GPL v2
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
 * Update URI: https://dev.peternanayon.online/release/wordpress/plugins/pn-always-https/
 * Text Domain: pn-always-https
 * Domain Path: /languages
 */


if(!defined('ABSPATH')){
    exit;
}


class PN_AlwaysHTTPS{

    public function __construct(){

        //add custom HTML to head
        add_action('wp_head', array($this, 'load_custom_html_head'));
    }

    public function load_custom_html_head(){
        ?>
            <script type="text/javascript">
                if (location.protocol !== 'https:') {
                    location.replace(`https:${location.href.substring(location.protocol.length)}`);
                }
            </script>
        <?php
    }
}


new PN_AlwaysHTTPS;
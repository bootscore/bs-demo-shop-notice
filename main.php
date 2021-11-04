<?php
/*Plugin Name: bS Demo Shop Notice
Plugin URI: https://bootscore.me/
Description: This plugin adds a Demo Shop Notice Alert to bootScore. Delete it when shop is live.
Version: 5.0.0.0
Author: bootScore
Author URI: https://bootscore.me
License: MIT License
*/




function bs_demo_shop_notice() {
    echo '
    
        <div id="demo-shop-notice" class="alert alert-danger alert-dismissible fade show" role="alert">
            This is a demo store for testing purposes — no orders shall be fulfilled.
            <button onclick="acceptCookie();" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>


        <style>
            #demo-shop-notice {
                display: none;
            }
        </style>


        <script>
            function acceptCookie() {
                document.cookie = "demo-shop-accepted=1; max-age=600; path=/", document.getElementById("demo-shop-notice").style.visibility = "hidden"
            }
            document.cookie.indexOf("demo-shop-accepted") < 0 && (document.getElementById("demo-shop-notice").style.display = "block");
        </script>
       
    ';
}
add_action('bs_after_primary', 'bs_demo_shop_notice', 5);




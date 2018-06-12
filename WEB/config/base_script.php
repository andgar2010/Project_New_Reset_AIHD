<?php
/**
 * Base Script
 *
 * Lista requiere liberias JS al <SCRIPT>
 *
 * @category Base
 * @package  Lib
 * @author   Andres Garcia <afagrcia0479@misena.edu.co>
 * @license  <a href="www.mit.org">mit</a>
 * @version  Release:<ASD4A6S54DASD>
 * @link     www.github.com/andgar2010
 */
$url_host = '../..';
$js_path        =$url_host .'/assets/js/';
$framework_path =$url_host .'/assets/Framework/';
//  JAVASCRIPT NODE_MODULES
$jquery_js                  =$url_host .'/node_modules/jquery/dist/jquery.min.js';
$bootstrap_js               =$url_host .'/node_modules/bootstrap/dist/js/bootstrap.min.js';
$propeller_bootstrap_js     =$url_host .'/node_modules/propellerkit/dist/js/bootstrap.min.js';
$propeller_js               =$url_host .'/node_modules/propellerkit/dist/js/propeller.min.js';
$bootstrap_datepicker_js    =$url_host .'/node_modules/propellerkit-datetimepicker/js/bootstrap-datetimepicker.js';
$Toastr_js                  =$url_host .'/node_modules/toastr/build/toastr.min.js';
$moment_js                  =$url_host .'/node_modules/moment/min/moment-with-locales.js';

echo '
<!-- Scripts Starts -->
<!-- Javascript for Bootstrap Propeller -->
<!-- build:[src] assets/js/ -->
<script defer src="' . $framework_path.'propeller-themes/js/jquery-2.2.4.min.js"></script>
<script defer src="' . $propeller_bootstrap_js . '"></script>
<!-- /build -->


<script>
        $(document).ready(function () {
            var sPath = window.location.pathname;
            var sPage = sPath.substring(sPath.lastIndexOf(\'/\') + 1);
            $(".pmd-sidebar-nav").each(function () {
                $(this).find("a[href=\'" + sPage + "\']").parents(".dropdown").addClass("open");
                $(this).find("a[href=\'" + sPage + "\']").parents(".dropdown").find(\'.dropdown-menu\').css(
                    "display", "block");
                $(this).find("a[href=\'" + sPage + "\']").parents(".dropdown").find(\'a.dropdown-toggle\').addClass(
                    "active");
                $(this).find("a[href=\'" + sPage + "\']").addClass("active");
            });
        });
    </script>
    <script type="text/javascript">
        (function () {
            "use strict";
            var toggles = document.querySelectorAll(".c-hamburger");
            for (var i = toggles.length - 1; i >= 0; i--) {
                var toggle = toggles[i];
                toggleHandler(toggle);
            };

            function toggleHandler(toggle) {
                toggle.addEventListener("click", function (e) {
                    e.preventDefault();
                    (this.classList.contains("is-active") === true) ? this.classList.remove("is-active"):
                        this.classList.add("is-active");
                });
            }
        })();
    </script>



<!-- Javascript for Propeller -->
<!-- build:[src] assets/js/ -->
<script defer src="' . $propeller_js . '"></script>
<!-- /build -->

<!-- Javascript for Ajax Load Page -->
<!-- build:[src] assets/js/ -->
<script defer src="' . $js_path . 'ajaxLoadPage.js"></script>
<!-- /build -->


';

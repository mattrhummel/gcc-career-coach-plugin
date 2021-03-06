<?php
//business pathways (gcc_wp_2018_ccwidget_shortcodes)
//
//
//business administration shortcode output
function business_administration_ccwidget_shortcode ($args, $content="") {
add_action('init', 'register_script');

      wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
      wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
  var subdomain = 'germanna'; // subdomain
  var level = 'county'; // state or county atm
  var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
  var onets = ['11-1021.00', '11-2022.00', '11-3011.00', '11-3061.00', '11-3071.01', '11-3071.02', '11-3071.03', '11-9199.01', '11-9199.02', '11-9199.04', '11-9199.08', '13-1011.00', '13-1051.00', '13-1111.00', '13-1199.04', '15-1199.08', '43-1011.00', '43-6011.00', '43-9061.00']; // onets, must be an array
  var legacy = false; //specify version, must be Boolean
  ccWidget.render(subdomain, level, geoids, onets, legacy);
}
    </script>

<?php

$output = '

<div id="cc-widget-careers"></div>
';
return $output;
}
//business management shortcode output
function business_management_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
var subdomain = 'germanna'; // subdomain
var level = 'county'; // state or county atm
var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
var onets = ['11-1021.00', '11-2022.00', '11-3011.00', '11-3061.00', '11-3071.01', '11-3071.02', '11-3071.03', '11-9199.01', '11-9199.02', '11-9199.04', '11-9199.08', '13-1011.00', '13-1051.00', '13-1111.00', '13-1199.04', '15-1199.08', '43-1011.00', '43-6011.00', '43-9061.00']; // onets, must be an array
var legacy = false; //specify version, must be Boolean
ccWidget.render(subdomain, level, geoids, onets, legacy);
}
    </script>

<?php

$output = '

<div id="cc-widget-careers"></div>
';
return $output;

}
//accounting shortcode output
function accounting_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );
?>

    <script type="text/javascript" async>
    window.onload = function() {
    var subdomain = 'germanna'; // subdomain
    var level = 'county'; // state or county atm
    var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
    var onets = ['11-3031.01', '11-3031.02', '13-2011.01', '13-2011.02', '13-2031.00', '13-2041.00', '13-2051.00', '13-2061.00', '13-2081.00', '13-2082.00', '43-3031.00', '43-3051.00', '43-4011.00', '43-9111.00']; // onets, must be an array
    var legacy = false; //specify version, must be Boolean
    ccWidget.render(subdomain, level, geoids, onets, legacy);
  }
    </script>

<?php

$output = '

<div id="cc-widget-careers"></div>

';
return $output;
}
//business core shortcode output
function business_core_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
        var subdomain = 'germanna'; // subdomain
        var level = 'county'; // state or county atm
        var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
        var onets = ['11-1021.00', '11-2022.00', '11-3011.00', '11-3051.00', '11-3071.01', '11-3071.02', '11-9021.00', '11-9151.00', '11-9199.01', '11-9199.02', '11-9199.04', '11-9199.08', '13-1051.00', '13-1111.00', '13-1121.00', '13-1199.04', '15-1199.08']; // onets, must be an array
        var legacy = false; //specify version, must be Boolean
        ccWidget.render(subdomain, level, geoids, onets, legacy);
      }
    </script>

<?php

$output = '

<div id="cc-widget-careers"></div>

';
return $output;
}
//entrepreneurship shortcode output
function entrepreneurship_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );
?>

    <script type="text/javascript" async>
    window.onload = function() {
    var subdomain = 'germanna'; // subdomain
    var level = 'county'; // state or county atm
    var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
    var onets = ['11-1021.00', '11-9199.04', '13-1131.00', '13-1199.04', '13-1199.06', '13-2099.02', '15-1199.08', '15-1199.10']; // onets, must be an array
    var legacy = false; //specify version, must be Boolean
    ccWidget.render(subdomain, level, geoids, onets, legacy);
  }
    </script>

<?php

$output = '

<div id="cc-widget-careers"></div>

';
return $output;
}
//entrepreneurship shortcode output
function supervision_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );
?>

    <script type="text/javascript" async>
    window.onload = function() {
        var subdomain = 'germanna'; // subdomain
        var level = 'county'; // state or county atm
        var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
        var onets = ['11-1021.00', '11-3051.00', '11-3051.01', '11-3061.00', '11-3071.03', '11-9199.04', '11-9199.08', '13-1075.00', '13-1081.00', '13-1081.02', '13-1111.00', '13-1199.04', '15-2031.00', '19-4099.01']; // onets, must be an array
        var legacy = false; //specify version, must be Boolean
        ccWidget.render(subdomain, level, geoids, onets, legacy);
      }
    </script>

<?php

$output = '

<div id="cc-widget-careers"></div>

';
return $output;
}
?>

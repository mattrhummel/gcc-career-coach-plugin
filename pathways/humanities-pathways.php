<?php
//humanities and arts (gcc_wp_2018_ccwidget_shortcodes)
//
//
//general studies shortcode output
function general_studies_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
    var subdomain = 'germanna'; // subdomain
    var level = 'county'; // state or county atm
    var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
    var onets = [None]; // onets, must be an array
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
//liberal arts shortcode output
function liberal_arts_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );;

?>

    <script type="text/javascript" async>
    window.onload = function() {
    var subdomain = 'germanna'; // subdomain
    var level = 'county'; // state or county atm
    var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
    var onets = [None]; // onets, must be an array
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
//fine arts shortcode output
function fine_arts_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
      var subdomain = 'germanna'; // subdomain
      var level = 'county'; // state or county atm
      var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
      var onets = ['25-1121.00', '25-2021.00', '25-2022.00', '25-2031.00', '25-3021.00', '25-4011.00', '25-4012.00', '25-4013.00', '27-1011.00', '27-1012.00', '27-1013.00', '27-1014.00', '27-1021.00', '27-1024.00', '27-1027.00', '27-4021.00', '29-1125.01', '51-9071.01', '51-9071.06', '51-9071.07', '51-9194.00']; // onets, must be an array
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
//general studies shortcode output
function graphic_communications_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
  var subdomain = 'germanna'; // subdomain
  var level = 'county'; // state or county atm
  var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
  var onets = ['15-1134.00', '27-1011.00', '27-1014.00', '27-1021.00', '27-1024.00', '27-2012.05', '27-4021.00', '27-4032.00', '43-9031.00', '51-5111.00', '51-5112.00', '51-5113.00', '51-9151.00']; // onets, must be an array
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

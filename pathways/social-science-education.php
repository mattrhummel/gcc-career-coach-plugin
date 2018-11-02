<?php
//social science and engineering pathways (gcc_wp_2018_ccwidget_shortcodes)
//
//
//education shortcode output
function education_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
    var subdomain = 'germanna'; // subdomain
    var level = 'county'; // state or county atm
    var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
    var onets = ['11-9031.00', '11-9032.00', '25-2011.00', '25-2012.00', '25-2021.00', '25-2022.00', '25-2031.00', '25-3011.00', '25-9031.00', '25-9041.00']; // onets, must be an array
    var legacy = false; //specify version, must be Boolean
    ccWidget.render(subdomain, level, geoids, onets, legacy);
  }
    </script>

<?php

$output = '

<div id="cc-widget-careers"></div>
';
return $output;
};
//education k8 shortcode output
function education_k8_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
    var subdomain = 'germanna'; // subdomain
    var level = 'county'; // state or county atm
    var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
    var onets = ['11-9031.00', '11-9032.00', '21-1021.00', '25-2011.00', '25-2012.00', '25-2021.00', '25-2051.00', '25-2052.00', '25-9031.00', '25-9041.00', '39-9011.00', '39-9011.01']; // onets, must be an array
    var legacy = false; //specify version, must be Boolean
    ccWidget.render(subdomain, level, geoids, onets, legacy);
  }
    </script>

<?php

$output = '

<div id="cc-widget-careers"></div>
';
return $output;
};
//general studies psychology shortcode output
function gs_psychology_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
    var subdomain = 'germanna'; // subdomain
    var level = 'county'; // state or county atm
    var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
    var onets = ['11-9199.01', '11-9199.02', '19-3031.01', '19-3031.02', '19-3031.03', '19-3032.00', '19-3039.01', '21-1011.00', '21-1012.00', '21-1013.00', '21-1014.00', '21-1015.00', '21-1021.00', '21-1022.00', '21-1023.00', '25-1066.00', '29-1066.00', '31-1013.00']; // onets, must be an array
    var legacy = false; //specify version, must be Boolean
    ccWidget.render(subdomain, level, geoids, onets, legacy);
  }
    </script>

<?php

$output = '

<div id="cc-widget-careers"></div>
';
return $output;
};
//early childhood development shortcode output
function ecd_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
var subdomain = 'germanna'; // subdomain
var level = 'county'; // state or county atm
var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
var onets = ['11-9031.00', '21-1021.00', '21-1093.00', '25-2011.00', '25-9021.00', '39-9011.00', '39-9011.01']; // onets, must be an array
var legacy = false; //specify version, must be Boolean
ccWidget.render(subdomain, level, geoids, onets, legacy);
}
    </script>

<?php

$output = '

<div id="cc-widget-careers"></div>
';
return $output;
};
//early childhood development certificate shortcode output
function ecd_certificate_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
    var subdomain = 'germanna'; // subdomain
    var level = 'county'; // state or county atm
    var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
    var onets = ['11-9031.00', '21-1021.00', '21-1093.00', '25-2011.00', '25-9021.00', '39-9011.00', '39-9011.01']; // onets, must be an array
    var legacy = false; //specify version, must be Boolean
    ccWidget.render(subdomain, level, geoids, onets, legacy);
  }
    </script>

<?php

$output = '

<div id="cc-widget-careers"></div>
';
return $output;
};
//general education certificate shortcode output
function ge_certificate_ccwidget_shortcode ($args, $content="") {
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
};
//early childhood development csc shortcode output
function ecd_csc_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
    var subdomain = 'germanna'; // subdomain
    var level = 'county'; // state or county atm
    var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
    var onets = ['11-9031.00', '21-1021.00', '21-1093.00', '25-2011.00', '25-9021.00', '39-9011.00', '39-9011.01']; // onets, must be an array
    var legacy = false; //specify version, must be Boolean
    ccWidget.render(subdomain, level, geoids, onets, legacy);
  }
    </script>

<?php

$output = '

<div id="cc-widget-careers"></div>
';
return $output;
};
?>

<?php
//science and engineering pathways (gcc_wp_2018_ccwidget_shortcodes)
//
//
//science shortcode output
function science_ccwidget_shortcode ($args, $content="") {

      //setup our output variable - the emsi script
      wp_enqueue_style( 'ccwidget-styles', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.css',  array(),'1.0.0','all');
      wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
      wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
      window.onload = function() {
        var subdomain = 'germanna'; // subdomain
        var level = 'county'; // state or county atm
        var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
        var onets = ['11-2022.00', '11-3011.00', '11-3061.00', '11-3071.01', '11-3071.02', '11-3071.03', '11-9199.01', '11-9199.02', '11-9199.04', '11-9199.08', '13-1011.00', '13-1051.00', '13-1111.00', '13-1199.04', '15-1199.08', '43-1011.00', '43-6011.00', '43-9061.00']; // onets, must be an array
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
//engineering electrical shortcode output
function ee_ccwidget_shortcode ($args, $content="") {

      //setup our output variable - the emsi script
      wp_enqueue_style( 'ccwidget-styles', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.css',  array(),'1.0.0','all');
      wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
      wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
      window.onload = function() {
        var subdomain = 'germanna'; // subdomain
        var level = 'county'; // state or county atm
        var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
        var onets = ['11-2022.00', '11-3011.00', '11-3061.00', '11-3071.01', '11-3071.02', '11-3071.03', '11-9199.01', '11-9199.02', '11-9199.04', '11-9199.08', '13-1011.00', '13-1051.00', '13-1111.00', '13-1199.04', '15-1199.08', '43-1011.00', '43-6011.00', '43-9061.00']; // onets, must be an array
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
//engineering mechanical shortcode output
function ee_mechanical_shortcode ($args, $content="") {

      //setup our output variable - the emsi script
      wp_enqueue_style( 'ccwidget-styles', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.css',  array(),'1.0.0','all');
      wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
      wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
      window.onload = function() {
        var subdomain = 'germanna'; // subdomain
        var level = 'county'; // state or county atm
        var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
        var onets = ['11-2022.00', '11-3011.00', '11-3061.00', '11-3071.01', '11-3071.02', '11-3071.03', '11-9199.01', '11-9199.02', '11-9199.04', '11-9199.08', '13-1011.00', '13-1051.00', '13-1111.00', '13-1199.04', '15-1199.08', '43-1011.00', '43-6011.00', '43-9061.00']; // onets, must be an array
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
//engineering technology csc shortcode output
function et_csc_ccwidget_shortcode ($args, $content="") {

      //setup our output variable - the emsi script
      wp_enqueue_style( 'ccwidget-styles', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.css',  array(),'1.0.0','all');
      wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
      wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
      window.onload = function() {
        var subdomain = 'germanna'; // subdomain
        var level = 'county'; // state or county atm
        var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
        var onets = ['11-2022.00', '11-3011.00', '11-3061.00', '11-3071.01', '11-3071.02', '11-3071.03', '11-9199.01', '11-9199.02', '11-9199.04', '11-9199.08', '13-1011.00', '13-1051.00', '13-1111.00', '13-1199.04', '15-1199.08', '43-1011.00', '43-6011.00', '43-9061.00']; // onets, must be an array
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

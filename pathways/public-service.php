<?php
//public service pathways (gcc_wp_2018_ccwidget_shortcodes)
//
//
//general studies administration of justice specialization shortcode output
function gs_adj_ccwidget_shortcode ($args, $content="") {
    add_action('init', 'register_script');

          wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
          wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
      var subdomain = 'germanna'; // subdomain
      var level = 'county'; // state or county atm
      var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
      var onets = ['11-9161.00', '11-9199.02', '11-9199.07', '11-9199.08', '13-1041.04', '13-1199.02', '13-2099.04', '15-1122.00', '21-1021.00', '21-1092.00', '33-1011.00', '33-1012.00', '33-2021.02', '33-3011.00', '33-3012.00', '33-3021.01', '33-3021.02', '33-3021.03', '33-3021.05', '33-3021.06', '33-3051.01', '33-3051.03', '33-3052.00', '33-9021.00', '33-9032.00', '43-5031.00']; // onets, must be an array
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
//administration of justice specialization shortcode output
function adj_ccwidget_shortcode ($args, $content="") {
    add_action('init', 'register_script');

          wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
          wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
      var subdomain = 'germanna'; // subdomain
      var level = 'county'; // state or county atm
      var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
      var onets = ['11-9161.00', '11-9199.02', '11-9199.07', '11-9199.08', '13-1041.04', '13-1199.02', '13-2099.04', '15-1122.00', '21-1021.00', '21-1092.00', '33-1011.00', '33-1012.00', '33-2021.02', '33-3011.00', '33-3012.00', '33-3021.01', '33-3021.02', '33-3021.03', '33-3021.05', '33-3021.06', '33-3051.01', '33-3051.03', '33-3052.00', '33-9021.00', '33-9032.00', '43-5031.00']; // onets, must be an array
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
//administration of justice certificate shortcode output
function adj_certificate_ccwidget_shortcode ($args, $content="") {
    add_action('init', 'register_script');

          wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
          wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
      var subdomain = 'germanna'; // subdomain
      var level = 'county'; // state or county atm
      var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
      var onets = ['11-9161.00', '11-9199.02', '11-9199.07', '11-9199.08', '13-1041.04', '13-1199.02', '13-2099.04', '15-1122.00', '21-1021.00', '21-1092.00', '33-1011.00', '33-1012.00', '33-2021.02', '33-3011.00', '33-3012.00', '33-3021.01', '33-3021.02', '33-3021.03', '33-3021.05', '33-3021.06', '33-3051.01', '33-3051.03', '33-3052.00', '33-9021.00', '33-9032.00', '43-5031.00']; // onets, must be an array
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
//administration of justice csc shortcode output
function adj_csc_ccwidget_shortcode ($args, $content="") {
    add_action('init', 'register_script');

          wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
          wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
      var subdomain = 'germanna'; // subdomain
      var level = 'county'; // state or county atm
      var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
      var onets = ['11-9161.00', '11-9199.02', '11-9199.07', '11-9199.08', '13-1041.04', '13-1199.02', '13-2099.04', '15-1122.00', '21-1021.00', '21-1092.00', '33-1011.00', '33-1012.00', '33-2021.02', '33-3011.00', '33-3012.00', '33-3021.01', '33-3021.02', '33-3021.03', '33-3021.05', '33-3021.06', '33-3051.01', '33-3051.03', '33-3052.00', '33-9021.00', '33-9032.00', '43-5031.00']; // onets, must be an array
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
//american sign language csc shortcode output
function asl_certificate_ccwidget_shortcode ($args, $content="") {

    add_action('init', 'register_script');

          wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
          wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
      var subdomain = 'germanna'; // subdomain
      var level = 'county'; // state or county atm
      var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
      var onets = ['25-2051.00', '25-2052.00', '25-2053.00', '25-2054.00', '25-9041.00', '27-3091.00']; // onets, must be an array
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
//legal assistant csc shortcode output
function la_csc_ccwidget_shortcode ($args, $content="") {
    add_action('init', 'register_script');

          wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
          wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
      var subdomain = 'germanna'; // subdomain
      var level = 'county'; // state or county atm
      var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
      var onets = ['13-1041.02', '23-2011.00', '23-2093.00', '43-6012.00']; // onets, must be an array
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
//paraprofessional counseling csc specialization shortcode output
function pc_csc_ccwidget_shortcode ($args, $content="") {

    add_action('init', 'register_script');

          wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
          wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
      var subdomain = 'germanna'; // subdomain
      var level = 'county'; // state or county atm
      var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
      var onets = ['19-3031.03']; // onets, must be an array
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

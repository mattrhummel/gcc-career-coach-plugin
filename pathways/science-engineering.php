<?php
//science and engineering pathways (gcc_wp_2018_ccwidget_shortcodes)
//
//
//science shortcode output
function science_ccwidget_shortcode ($args, $content="") {
    add_action('init', 'register_script');

          wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
          wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
      var subdomain = 'germanna'; // subdomain
      var level = 'county'; // state or county atm
      var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
      var onets = ['11-9121.00', '11-9121.01', '11-9121.02', '15-2041.01', '17-2041.00', '17-2081.00', '17-2151.00', '17-2161.00', '17-2171.00', '17-2199.01', '19-1011.00', '19-1012.00', '19-1013.00', '19-1020.01', '19-1021.00', '19-1022.00', '19-1023.00', '19-1029.01', '19-1029.02', '19-1029.03', '19-1031.01', '19-1041.00', '19-1042.00', '19-2011.00', '19-2012.00', '19-2021.00', '19-2031.00', '19-2032.00', '19-2041.00', '19-2042.00', '19-2043.00', '19-4021.00', '19-4031.00', '19-4041.01', '19-4041.02', '19-4051.01', '19-4051.02', '19-4091.00', '19-4092.00', '25-1042.00', '25-1052.00', '25-2031.00', '25-4013.00']; // onets, must be an array
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
    add_action('init', 'register_script');

          wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
          wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
      var subdomain = 'germanna'; // subdomain
      var level = 'county'; // state or county atm
      var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
      var onets = ['11-9041.00', '17-2071.00', '17-2072.00', '17-2199.05']; // onets, must be an array
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
function em_ccwidget_shortcode ($args, $content="") {
    add_action('init', 'register_script');

          wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
          wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
        var subdomain = 'germanna'; // subdomain
        var level = 'county'; // state or county atm
        var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
        var onets = ['11-9041.00', '17-2141.00', '17-2199.05']; // onets, must be an array
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
    add_action('init', 'register_script');

          wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
          wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
  var subdomain = 'germanna'; // subdomain
  var level = 'county'; // state or county atm
  var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
  var onets = ['17-3011.02', '17-3012.01', '17-3012.02', '17-3013.00', '17-3021.00', '17-3022.00', '17-3023.01', '17-3023.03', '17-3024.00', '17-3026.00', '17-3027.00', '17-3029.02', '17-3029.03', '17-3029.04', '17-3029.05', '17-3029.06', '17-3029.07']; // onets, must be an array
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

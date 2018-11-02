<?php //IT & Technical Studies pathways (gcc_wp_2018_ccwidget_shortcodes)
//
//
//ist information management and network security shortcode output
function ist_info_management_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
    var subdomain = 'germanna'; // subdomain
    var level = 'county'; // state or county atm
    var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
    var onets = ['13-1199.02', '15-1122.00', '15-1141.00', '15-1142.00', '15-1143.00', '15-1199.06', '15-1199.07', '15-1199.09', '15-2041.02']; // onets, must be an array
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
//ist networking
function ist_networking_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
      var subdomain = 'germanna'; // subdomain
      var level = 'county'; // state or county atm
      var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
      var onets = ['11-3021.00', '13-1199.02', '15-1111.00', '15-1121.00', '15-1121.01', '15-1122.00', '15-1131.00', '15-1141.00', '15-1142.00', '15-1143.00', '15-1143.01', '15-1152.00', '15-1199.02', '15-1199.03', '15-1199.09']; // onets, must be an array
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
function tech_studies_ccwidget_shortcode ($args, $content="") {

  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
            var subdomain = 'germanna'; // subdomain
            var level = 'county'; // state or county atm
            var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
            var onets = ['17-3026.00', '17-3029.05', '49-1011.00', '49-2094.00', '49-9041.00', '49-9043.00', '49-9044.00', '49-9071.00', '49-9098.00', '51-4041.00']; // onets, must be an array
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
//advanced networking
function advanced_networking_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

<script type="text/javascript" async>
window.onload = function() {
    var subdomain = 'germanna'; // subdomain
    var level = 'county'; // state or county atm
    var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
    var onets = ['15-1122.00', '15-1142.00', '15-1143.00', '15-1143.01', '15-1152.00', '15-1199.09', '49-2022.00']; // onets, must be an array
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
function automotive_diagnostician_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

<script type="text/javascript" async>
window.onload = function() {
    var subdomain = 'germanna'; // subdomain
    var level = 'county'; // state or county atm
    var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
    var onets = ['49-1011.00', '49-2093.00', '49-2096.00', '49-3021.00', '49-3022.00', '49-3023.01', '49-3023.02', '49-3093.00', '49-9071.00', '51-9122.00', '53-6051.07']; // onets, must be an array
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
//automotive technician shortcode
function automotive_technician_ccwidget_shortcode ($args, $content="") {

  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

<script type="text/javascript" async>
window.onload = function() {
    var subdomain = 'germanna'; // subdomain
    var level = 'county'; // state or county atm
    var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
    var onets = ['49-1011.00', '49-2093.00', '49-2096.00', '49-3021.00', '49-3022.00', '49-3023.01', '49-3023.02', '49-3093.00', '49-9071.00', '51-9122.00', '53-6051.07']; // onets, must be an array
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
//cybersecurity
function cybersecurity_ccwidget_shortcode ($args, $content="") {

  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
      var subdomain = 'germanna'; // subdomain
      var level = 'county'; // state or county atm
      var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
      var onets = ['13-1199.02', '15-1122.00', '15-1141.00', '15-1142.00', '15-1143.00', '15-1199.06', '15-1199.07', '15-1199.09', '15-2041.02']; // onets, must be an array
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
//ecommerce_ccwidget_shortcode
function ecommerce_ccwidget_shortcode ($args, $content="") {

  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
  var subdomain = 'germanna'; // subdomain
  var level = 'county'; // state or county atm
  var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
  var onets = ['11-1021.00', '11-2022.00', '13-1199.06', '15-1132.00', '15-1151.00', '15-1199.03', '15-1199.10']; // onets, must be an array
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
//industrial maintenance
function industrial_maintenance_technology_ccwidget_shortcode ($args, $content="") {

  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
        var subdomain = 'germanna'; // subdomain
        var level = 'county'; // state or county atm
        var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
        var onets = ['17-3026.00', '17-3029.05', '49-1011.00', '49-2094.00', '49-9041.00', '49-9043.00', '49-9044.00', '49-9071.00', '49-9098.00', '51-4041.00']; // onets, must be an array
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
//microcomputer microcomputer_applications_ccwidget
function microcomputer_applications_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
      var subdomain = 'germanna'; // subdomain
      var level = 'county'; // state or county atm
      var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
      var onets = ['15-1199.12', '43-4071.00', '43-9011.00', '43-9021.00', '43-9022.00', '43-9061.00']; // onets, must be an array
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
//networking_ccwidget
function networking_ccwidget_shortcode ($args, $content="") {

  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );

?>

    <script type="text/javascript" async>
    window.onload = function() {
        var subdomain = 'germanna'; // subdomain
        var level = 'county'; // state or county atm
        var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
        var onets = ['11-3021.00', '13-1199.02', '15-1111.00', '15-1121.00', '15-1121.01', '15-1122.00', '15-1131.00', '15-1141.00', '15-1142.00', '15-1143.00', '15-1143.01', '15-1152.00', '15-1199.02', '15-1199.03', '15-1199.09']; // onets, must be an array
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

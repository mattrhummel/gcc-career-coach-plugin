<?php
//Health and Sciences Pathways shortcodes
//allied Health shortcode $output

function allied_health_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );
?>

    <script type="text/javascript" async>
    window.onload = function() {
        var subdomain = 'germanna'; // subdomain
        var level = 'county'; // state or county atm
        var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
        var onets = ['11-9111.00', '15-1121.01', '21-1015.00', '29-1031.00', '29-1071.00', '29-1071.01', '29-1122.00', '29-1122.01', '29-1123.00', '29-1124.00', '29-1126.00', '29-1127.00', '29-1181.00', '29-1199.05', '29-2011.00', '29-2011.02', '29-2012.00', '29-2021.00', '29-2031.00', '29-2032.00', '29-2033.00', '29-2034.00', '29-2041.00', '29-2051.00', '29-2054.00', '29-2055.00', '29-2057.00', '29-2071.00', '29-2081.00', '29-2091.00', '29-2099.01', '29-2099.05', '29-2099.06', '29-2099.07', '29-9091.00', '31-1014.00', '31-2011.00', '31-2012.00', '31-2021.00', '31-2022.00', '31-9091.00', '31-9092.00', '31-9093.00', '31-9094.00', '31-9097.00', '31-9099.01', '43-6013.00', '51-9081.00', '51-9082.00']; // onets, must be an array
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
//dental assisting shortcode $output

function dental_assisting_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );
?>

    <script type="text/javascript" async>
    window.onload = function() {
  var subdomain = 'germanna'; // subdomain
  var level = 'county'; // state or county atm
  var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
  var onets = ['31-9091.00']; // onets, must be an array
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
//expanded dental shortcode $output

function expanded_dental_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );
?>

    <script type="text/javascript" async>
    window.onload = function() {
    var subdomain = 'germanna'; // subdomain
    var level = 'county'; // state or county atm
    var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
    var onets = ['31-9091.00']; // onets, must be an array
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
//hpe shortcode $output

function hpe_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );
?>

    <script type="text/javascript" async>
    window.onload = function() {
      var subdomain = 'germanna'; // subdomain
      var level = 'county'; // state or county atm
      var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
      var onets = ['11-9039.02', '11-9151.00', '21-1091.00', '21-1094.00', '25-2022.00', '25-2031.00', '25-2059.01', '27-2021.00', '27-2022.00', '27-2023.00', '29-1031.00', '29-1069.11', '29-1125.00', '29-1128.00', '29-2051.00', '29-9091.00', '31-2022.00', '39-9031.00', '39-9032.00']; // onets, must be an array
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
//bsn shortcode $output

function bsn_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );
?>

    <script type="text/javascript" async>
    window.onload = function() {
  var subdomain = 'germanna'; // subdomain
  var level = 'county'; // state or county atm
  var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
  var onets = ['15-1121.01', '25-1072.00', '29-1141.00', '29-1141.01', '29-1141.02', '29-1141.03', '29-1141.04', '29-1151.00', '29-1171.00']; // onets, must be an array
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
//healthcare technician shortcode $output

function healthcare_technician_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );
 ?>

    <script type="text/javascript" async>
    window.onload = function() {
    var subdomain = 'germanna'; // subdomain
    var level = 'county'; // state or county atm
    var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
    var onets = ['11-9111.00', '15-1121.01', '21-1015.00', '29-1031.00', '29-1071.00', '29-1071.01', '29-1122.00', '29-1122.01', '29-1123.00', '29-1124.00', '29-1126.00', '29-1127.00', '29-1181.00', '29-1199.05', '29-2011.00', '29-2011.02', '29-2012.00', '29-2021.00', '29-2031.00', '29-2032.00', '29-2033.00', '29-2034.00', '29-2041.00', '29-2051.00', '29-2054.00', '29-2055.00', '29-2057.00', '29-2071.00', '29-2081.00', '29-2091.00', '29-2099.01', '29-2099.05', '29-2099.06', '29-2099.07', '29-9091.00', '31-1014.00', '31-2011.00', '31-2012.00', '31-2021.00', '31-2022.00', '31-9091.00', '31-9092.00', '31-9093.00', '31-9094.00', '31-9097.00', '31-9099.01', '43-6013.00', '51-9081.00', '51-9082.00']; // onets, must be an array
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
//indirect dental shortcode $output

function indirect_dental_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );
?>

    <script type="text/javascript" async>
    window.onload = function() {
        var subdomain = 'germanna'; // subdomain
        var level = 'county'; // state or county atm
        var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
        var onets = ['31-9091.00']; // onets, must be an array
        var legacy = false; //specify version, must be Boolean
        ccWidget.render(subdomain, level, geoids, onets, legacy);
      }
    </script>

<?php

$output = '

<div id="cc-widget-careers" style="width: 100%;"></div>

';
return $output;
}
//lpn shortcode $output

function lpn_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );
?>

    <script type="text/javascript" async>
    window.onload = function() {
    var subdomain = 'germanna'; // subdomain
    var level = 'county'; // state or county atm
    var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
    var onets = ['29-2061.00', '31-1011.00', '31-1014.00']; // onets, must be an array
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
//nursing shortcode $output

function nursing_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );
?>

    <script type="text/javascript" async>
    window.onload = function() {
      var subdomain = 'germanna'; // subdomain
      var level = 'county'; // state or county atm
      var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
      var onets = ['11-9111.00', '15-1121.01', '19-1042.00', '25-1072.00', '29-1141.00', '29-1141.01', '29-1141.02', '29-1141.03', '29-1141.04', '29-1161.00', '29-1171.00']; // onets, must be an array
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
//personal training shortcode $output

function personal_training_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );
?>

    <script type="text/javascript" async>
    window.onload = function() {
    var subdomain = 'germanna'; // subdomain
    var level = 'county'; // state or county atm
    var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
    var onets = ['11-9039.02', '25-2059.01', '29-1128.00', '39-9031.00']; // onets, must be an array
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
//pharmacy technician shortcode $output

function pharmacy_technician_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );
?>

    <script type="text/javascript" async>
    window.onload = function() {
        var subdomain = 'germanna'; // subdomain
        var level = 'county'; // state or county atm
        var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
        var onets = ['29-2052.00', '31-9095.00']; // onets, must be an array
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
//pta shortcode $output

function pta_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );
?>

    <script type="text/javascript" async>
    window.onload = function() {
    var subdomain = 'germanna'; // subdomain
    var level = 'county'; // state or county atm
    var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
    var onets = ['31-2021.00', '31-2022.00']; // onets, must be an array
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
//practical nursing shortcode $output

function practical_nursing_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );
?>

    <script type="text/javascript" async>
    window.onload = function() {
        var subdomain = 'germanna'; // subdomain
        var level = 'county'; // state or county atm
        var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
        var onets = ['29-2061.00', '31-1011.00', '31-1014.00']; // onets, must be an array
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
//restorative dental shortcode $output

function restorative_dental_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );
?>

    <script type="text/javascript" async>
    window.onload = function() {
    var subdomain = 'germanna'; // subdomain
    var level = 'county'; // state or county atm
    var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
    var onets = ['31-9091.00']; // onets, must be an array
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
//surgical scrub shortcode $output

function surgical_scrub_ccwidget_shortcode ($args, $content="") {
  add_action('init', 'register_script');

        wp_enqueue_style ( 'ccwidget-custom-styles', plugins_url( '/career-coach/dist/css/custom-widget-styles.css'), array(),'1.0.0','all');
        wp_enqueue_script('ccwidget-script', 'https://s3-us-west-2.amazonaws.com/cc-widget-v2/ccWidget.js', array(), '1.0.0', true );
?>

    <script type="text/javascript" async>
    window.onload = function() {
      var subdomain = 'germanna'; // subdomain
      var level = 'county'; // state or county atm
      var geoids = ['11001','24009','24017','24031','24033','24037','51003','51013','51033','51047','51057','51059','51061','51065','51075','51079','51085','51087','51097','51099','51101','51107','51109','51113','51137','51145','51153','51157','51159','51177','51179','51193','51510','51600','51610','51630','51683','51685','51760']; // state id or county ids, must be an array
      var onets = ['29-2055.00', '29-2099.07', '31-9093.00']; // onets, must be an array
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

<?php

$headercolor1="#".get_option('careersjob_header_color1');// # default
$headercolor2="#".get_option('careersjob_header_color2');//#dce9f9 default
$bordercolor="#".get_option('careersjob_bordercolor');//#ccc default
$hovercolor="#".get_option('careersjob_hovercolor');//#fbf8e9 default

?>
<style type="text/css">
table {
    *border-collapse: collapse; /* IE7 and lower */
    border-spacing: 0;
    width: 100%;    
}

.bordered {
    border: solid <?php echo $bordercolor;?> 1px!important;
    -moz-border-radius: 6px!important;
    -webkit-border-radius: 6px!important;
    border-radius: 6px!important;
    -webkit-box-shadow: 0 1px 1px <?php echo $bordercolor;?>!important;
    -moz-box-shadow: 0 1px 1px <?php echo $bordercolor;?>!important;
    box-shadow: 0 1px 1px <?php echo $bordercolor;?>!important;
}

.bordered tr:hover {
    background: <?php echo $hovercolor;?>;
    -o-transition: all 0.1s ease-in-out;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -ms-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;
}

.bordered td, .bordered th {
    border-left: 1px solid <?php echo $bordercolor;?>;
    border-top: 1px solid <?php echo $bordercolor;?>;
    padding: 10px;
    text-align: left;
    
}

.bordered th {
    background-color: <?php echo $headercolor2; ?>;
    background-image: -webkit-gradient(linear, left top, left bottom, from(<?php echo $headercolor1; ?>), to(<?php echo $headercolor2; ?>));
    background-image: -webkit-linear-gradient(top, <?php echo $headercolor1; ?>, <?php echo $headercolor2; ?>);
    background-image:    -moz-linear-gradient(top, <?php echo $headercolor1; ?>, <?php echo $headercolor2; ?>);
    background-image:     -ms-linear-gradient(top, <?php echo $headercolor1; ?>, <?php echo $headercolor2; ?>);
    background-image:      -o-linear-gradient(top, <?php echo $headercolor1; ?>, <?php echo $headercolor2; ?>);
    background-image:         linear-gradient(top, <?php echo $headercolor1; ?>, <?php echo $headercolor2; ?>);
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;
    border-top: none;
    text-shadow: 0 1px 0 rgba(255,255,255,.5);
}

.bordered td:first-child, .bordered th:first-child {
    border-left: none;
}

.bordered th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;
}

.bordered th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}

.bordered th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}

.bordered tr:last-child td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}

.bordered tr:last-child td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}
</style>
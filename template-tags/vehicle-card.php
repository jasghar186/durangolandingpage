<?php
/** Template to display the vehicles card */

echo '<div class="col-12 col-md-6 col-lg-4 col-xxl-3">';
echo '<div class="border p-3 vehicle-card-column">';
echo '<div class="vehicle-thumbnail-wrap">';
echo '<img src="'.get_post_meta(get_the_ID(), 'vehicleimage-src', true).'" height="180" width="300" />';
echo '</div>';
echo '<div class="content pt-3">';
echo '<div class="vehicle-card-title">';
echo '<h5 class="result-title p-0" style="margin: 0;"><span class="title-top">New 2024</span></h5>';
echo '<h2 class="result-title"><span class="title-bottom">'.get_the_title().'</span></h2>';
echo '</div>';

// Stock and vin
echo '<div class="vehicle-post-meta-wrap">';
echo '<div><span class="vehicle-stock-number">'.get_post_meta(get_the_ID(), 'vehiclestock', true).'</span></div>';
echo '<div>Vin #: <span class="vehicle-vin-number">'.get_post_meta(get_the_ID(), 'vehiclevin', true).'</span></div>';
echo '<div><span class="vehicle-durango-url d-none">'.get_post_meta(get_the_ID(), 'vehicletitle-href', true).'</span></div>';
echo '</div>';

// details
echo '<div class="mt-4 mb-2">';

$postmeta_arr = array('vehiclemsrp', 'vehicledealerdiscount', 'vehiclebestprice', 'vehicledrivetrain',
'vehicleengine', 'vehicletransmission', 'vehiclefuelefficiency');
foreach($postmeta_arr as $postmeta) {
    echo '<div class="card-meta-row d-flex align-items-center justify-content-between">';
    echo '<span>'.$postmeta.'</span>';
    echo '<span>'.get_post_meta(get_the_ID(), $postmeta, true).'</span>';    
    echo '</div>';
}

echo '</div>';

// Divider
echo '<hr class="mb-4" />';
echo '<hr class="mb-4" />';

// colors
echo '<div class="colors">';
echo '<div class="et_pb_text_inner"><div class="card-color-meta"><span class="card-color-pill color-pill-grey"></span><br><span>Exterior Color:</span><br><span class="card-color-pill-name">Grey</span></div>
<div class="card-color-meta"><span class="card-color-pill color-pill-grey"></span><br><span>Interior Color:</span><br><span class="card-color-pill-name">Grey</span></div></div>';
echo '</div>';

echo '<hr class="my-3"/>';

// button
echo '<div class="cta">';
echo '<button class="et_pb_button et_pb_button_1_tb_body et_pb_bg_layout_light">Details</button>';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</div>';
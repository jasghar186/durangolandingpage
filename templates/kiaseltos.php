<?php /* Template Name: Kia Seltos */
get_header();

ob_start();
?>
<style>
    .vehicle-thumbnail-wrap {
        height: 200px;
    }
    .vehicle-thumbnail-wrap img {
        height: 100%;
        object-fit: cover;
    }
</style>
<?php
echo ob_get_clean();

$args = array(
    'post_type' => 'vehicles',
    'posts_per_page' => -1,
    'paged' => 1,
    'meta_query' => array(
        array(
            'key' => 'model',
            'value' => 'seltos',
            'compare' => '='
        )
    ),
);

$vehicles_query = new WP_Query($args);

echo '<div class="container">';

// Banner
echo '<div class="vehicle-banner my-3">';
echo '<img src="'.site_url().'/wp-content/uploads/2024/02/Kia-CO-EV-Tax-VRP-Slider-Banners.jpg"
alt="kia" loading="lazy" class="w-100 border border-dark" />';
echo '</div>';

// Vehicles Count
$vehicles_count = 0;
echo '<h3 class="vehicles-count">'.$vehicles_count.' New kia seltos in durango, co</h3>';

if($vehicles_query->have_posts()) {
    echo '<div class="row">';
    while($vehicles_query->have_posts()) {
        $vehicles_query->the_post();
        get_template_part('/template-tags/vehicle', 'card');
        $vehicles_count++;
    }
    echo '</div>';

    wp_reset_postdata();
}else {
    echo 'sorry no posts found';
}

echo '</div>';

get_footer(); ?>

<script>
    jQuery(document).ready(function($) {
        $('.vehicles-count').html('<?php echo $vehicles_count; ?> New vehicles in durango, co')
    })
</script>
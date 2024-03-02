<?php

function test_site_enqueue_scripts() {
    wp_enqueue_style('styles', get_template_directory_uri() . '/style.css', array(), '4.23.4');
    wp_enqueue_style('bootstrap-styles', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3');
	wp_enqueue_script('input-mask-script', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js', array('jquery'), '5.0.7', true);
}

add_action('wp_enqueue_scripts', 'test_site_enqueue_scripts');

/**
 * Vehicle Popup
 */
function durango_vehicle_lead_popup() {
    $popup = ob_start(); ?>
        <div class="lead-popup-wrapper">
            <div class="lead-popup-overlay"></div>
            <div class="lead-popup-content-container">
                <div class="lead-popup-close">
                    <img src="https://junaid-testing-site.231e.com/wp-content/uploads/2024/02/close.png"
                    alt="close" width="32" height="32" />
					<span class="lead-popup-close-tooltip">Close Window</span>
                </div>
                <div class="lead-popup-content">
                    <div class="lead-popup-header">
                        <div class="vehicle-image-wrapper">
                            <img src="https://junaid-testing-site.231e.com/wp-content/uploads/2024/02/61c6825c829740635da6e99de0467f3b.png"
                            alt="vehicle title" title="vehicle title" loading="lazy" width="200" height="200" />
                        </div>
                        <div class="lead-popup-header-content">
                            <h3>Vehicle Title</h3>
                            <div class="lead-popup-vehicle-meta">
                                <span>Stock #:</span>
                                <span>Vin:</span>
                            </div>
                        </div>
                    </div>
                    <div class="lead-popup-body">
                        <?php echo do_shortcode('[contact-form-7 id="8b0308f" title="Contact form 1"]'); ?>
						<div class="lead-popup-disclaimer">
						Close Window
						</div>
                    </div>
                </div>
            </div>
        </div>

        <style>
			.lead-popup-disclaimer {
				text-align: center;
				margin-top: 7px;
				font-size:1rem;
				margin-bottom: 1rem;
			}
            .lead-popup-wrapper {
                position: fixed;
                top: 0;
                left: 0;
                z-index: 100;
                background: white;
                width: 100%;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content:center;
                transform: scale(0);
                user-select:none;
                transition: all .3s;
            }
            .lead-popup-overlay {
                position: absolute;
                top: 0;
                left: 0;
                background: #000000cc;
                width: 100%;
                height: 100%;
                z-index: 1;
            }
            .lead-popup-content-container {
                background: white;
                position: relative;
                z-index: 5;
                width: 100%;
                max-width: 900px;
                width: 100%;
                margin: auto;
                height: 90%;
                overflow: scroll;
            }
			.lead-popup-content-container::-webkit-scrollbar {
				display: none;
			}
            .lead-popup-close {
                position: absolute;
                top: 1rem;
                right: 1rem;
                cursor: pointer;
            }
            .lead-popup-close span {
                font-size: 1.2rem;
                color: black;
            }
            .lead-popup-header {
                align-items: center;
                justify-content: flex-start;
                padding: 30px 0 0;
                max-width: 75%;
                margin: auto;
            }
			@media (min-width: 767px) {
				.lead-popup-header {
					display: flex;
				}
			}
            .vehicle-image-wrapper {
                margin-right: 0;
            }
            .vehicle-image-wrapper img {
                width: 100%;
                object-fit: contain;
            }
			@media (min-width: 767px) {
				.vehicle-image-wrapper {
					margin-right: 1rem;
				}
				.vehicle-image-wrapper img {
					max-width: 200px;
				}
			}
            .lead-popup-header h3 {
                padding: 0;
                font-weight: bold;
                font-size: 1.5rem;
                text-transform: capitalize;
				margin-bottom: 1rem;
            }
			@media (min-width: 767px) {
				.lead-popup-header h3 {
					font-size: 2.5rem;
					margin-bottom: 0;
				}
			}
            .lead-popup-vehicle-meta span{
                font-size: .8rem;
                color: gray;
                font-weight: lighter;
                margin-right: .8rem;
            }
			@media (min-width: 767px) {
				.lead-popup-vehicle-meta span {
					font-size: 1.1rem;
				}
			}
            .lead-popup-body {
                padding: 0 30px 30px;
            }
            .lead-popup-body form {
                max-width: 90%;
                margin: auto;
            }
			@media (min-width: 767px) {
				.lead-popup-body form{
					max-width: 75%;
				}
			}
            .lead-popup-body form input,
            .lead-popup-body label,
            .lead-popup-body textarea {
                padding: 1rem;
                width: 100%;
            }
            .lead-popup-body label {
                padding: 0;
                font-size: 1rem;
                color: #111;
            }
            .lead-popup-body input[type="submit"] {
                background: rgb(5, 20, 31);
                color: white;
                text-transform: uppercase;
                font-weight: semibold;
                font-size: 1.1rem;
                border: none;
                outline: none;
            }
            .lead-popup-active {
                transform: scale(1);
            }
			.lead-popup-body textarea {
				height: 150px;
				resize: none;
			}
			.vehicle-thumbnail-wrap {
				height: 215px;
				
			}
			.vehicle-thumbnail-wrap img,
			.vehicle-thumbnail-wrap span{
				height: 100%;
				object-fit: contain;
			}
			.lead-popup-close-tooltip {
				position: absolute;
				top: 100%;
				right: 0;
				width: 150px;
				background: #000000cc;
				text-align: center;
				z-index: 10;
				color: white !important;
				padding: .5rem;
				display: none;
			}
			.lead-popup-close:hover .lead-popup-close-tooltip{
				display: block;
			}
			span.lead-popup-close-tooltip::before {
				content: '';
				position: absolute;
				height: 20px;
				top: -40px;
				right: 0;
				left: unset;
				border-left: 10px solid transparent;
				border-right: 10px solid transparent;
				border-top: 10px solid transparent;
				border-bottom: 10px solid #000000cc;
			}
			.lead-popup-body .selected-vehicle-url {
				display: none;
			}
			.lead-popup-disclaimer {
				cursor: pointer;
			}
			.vehicle-card-column .et_pb_button {
				cursor:pointer;
			}
        </style>
        <script>
            jQuery(document).ready(function($) {
				$('.lead-popup-body .wpcf7-tel').inputmask({"mask": "(999)-999-9999"});
				$('.vehicle-card-column .et_pb_button').removeAttr('href')
				
				let windowURL = window.location.pathname.toLowerCase();
				let websiteOrigin = window.location.origin;
				if(windowURL === '/') {
// 					At the home page
					$('.lead-popup-body .vehicle-lead-image-wrap img').attr('src', `${websiteOrigin}/wp-content/uploads/2024/02/2024-kia-sportage-banner.png`)
					$('.lead-popup-body .vehicle-lead-image-wrap').css('display', 'block')
				}else if(windowURL === '/kia-telluride/') {
					$('.lead-popup-body .vehicle-lead-image-wrap img').attr('src', `${websiteOrigin}/wp-content/uploads/2024/02/2024-kia-telluride-banner.png`)
					$('.lead-popup-body .vehicle-lead-image-wrap').css('display', 'block')
				}else if(windowURL === '/durango-kia-sorento/') {
					$('.lead-popup-body .vehicle-lead-image-wrap img').attr('src', `${websiteOrigin}/wp-content/uploads/2024/02/2023-kia-sorento-phev-banner.png`)
					$('.lead-popup-body .vehicle-lead-image-wrap').css('display', 'block')
				}else if(windowURL === '/durango-kia-sorento-hybrid/') {
					$('.lead-popup-body .vehicle-lead-image-wrap img').attr('src', `${websiteOrigin}/wp-content/uploads/2024/02/2023-kia-sorento-phev-banner.png`)
					$('.lead-popup-body .vehicle-lead-image-wrap').css('display', 'block')
				}else if(windowURL === '/kia-sorento-plugin-hybrid/') {
					$('.lead-popup-body .vehicle-lead-image-wrap img').attr('src', `${websiteOrigin}/wp-content/uploads/2024/02/2023-kia-sorento-phev-banner.png`)
					$('.lead-popup-body .vehicle-lead-image-wrap').css('display', 'block')
				}else if(windowURL === '/kia-seltos/') {
					$('.lead-popup-body .vehicle-lead-image-wrap img').attr('src', `${websiteOrigin}/wp-content/uploads/2024/02/2024-kia-seltos-banner.png`)
					$('.lead-popup-body .vehicle-lead-image-wrap').css('display', 'block')
				}else {
					$('.lead-popup-body .vehicle-lead-image-wrap').css('display', 'none')
				}
				
                $('.vehicle-card-column').click(function() {
                    let vehicleTitle = $(this).find('.vehicle-card-title').first().text()
                    let vehicleStock = $(this).find('.vehicle-stock-number').text()
                    let vehicleVin = $(this).find('.vehicle-vin-number').text();
                    let vehicleThumbnail = $(this).find('.vehicle-thumbnail-wrap img').attr('src')
					let vehicleDurangoUrl = $(this).find('.vehicle-durango-url').text()
					let vehicleYearText = $(this).find('.result-title:first-child span').text();
    				let vehicleYear = vehicleYearText.split(' ')[1]; 
					let titleBottomText = $(this).find('.result-title .title-bottom').text();
					let titleBottomWords = titleBottomText.split(' '); // Split the text into an array of words

					let vehicleMake = titleBottomWords[0];
					let vehicleModel = titleBottomWords.length > 1 ? titleBottomWords[1] : ''; 
					
					console.log('Year:', vehicleYear);
    console.log('Make:', vehicleMake);
    console.log('Model:', vehicleModel);

                    $('.lead-popup-header-content h3').html(vehicleTitle)
                    $('.lead-popup-vehicle-meta span:first-child').html(`Stock #: ${vehicleStock}`)
                    $('.lead-popup-vehicle-meta span:last-child').html(`Vin #: ${vehicleVin}`)
					$('.lead-popup-wrapper form .selected-vehicle-vin').val(vehicleVin.trim());
					$('.lead-popup-wrapper form .selected-vehicle-stock').val(vehicleStock.trim());
					$('.lead-popup-wrapper form .selected-vehicle-year').val(vehicleYear.trim())
					$('.lead-popup-wrapper form .selected-vehicle-make').val(vehicleMake.trim())
					$('.lead-popup-wrapper form .selected-vehicle-model').val(vehicleModel.trim())
                    $('.vehicle-image-wrapper img').attr('src', vehicleThumbnail)
					$('.selected-vehicle-url').val(vehicleDurangoUrl)
                    $('.lead-popup-wrapper').addClass('lead-popup-active')
                })
                $('.lead-popup-close, .lead-popup-overlay, .lead-popup-disclaimer').click(function() {
                    $('.lead-popup-wrapper').removeClass('lead-popup-active')
                    $('.lead-popup-header-content h3').html('Vehicle Title')
                    $('.lead-popup-vehicle-meta span:first-child').html(`Stock #: `)
                    $('.lead-popup-vehicle-meta span:last-child').html(`Vin #: `)
					$('.lead-popup-wrapper form .selected-vehicle-vin').val('')
					$('.lead-popup-wrapper form .selected-vehicle-stock').val('')
                    $('.vehicle-image-wrapper img').attr('src', 'https://junaid-testing-site.231e.com/wp-content/uploads/2024/02/61c6825c829740635da6e99de0467f3b.png')
                })
				
// 				Redirect user on form submission
				$('.lead-popup-body form').submit(function() {
					
				})
				$(document).on('wpcf7submit', '.lead-popup-body form', function(e) {
					 if ('mail_sent' === e.detail.status) {
						window.location.href = window.location.origin + '/thank-you'
						 sessionStorage.setItem('vehicle-durango-url', JSON.stringify($('.lead-popup-body form .selected-vehicle-url').val()))
					}
				})
            })
        </script>
    <?php 
    $popup = ob_get_clean();
    echo $popup;
}

add_action('wp_footer', 'durango_vehicle_lead_popup');



if ( ! function_exists('durango_inventory_vehicels') ) {

    // Register Custom Post Type
    function durango_inventory_vehicels() {
    
        $labels = array(
            'name'                  => _x( 'Vehicles', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Vehicle', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Vehicles', 'text_domain' ),
            'name_admin_bar'        => __( 'Vehicel', 'text_domain' ),
            'archives'              => __( 'Vehicle Archives', 'text_domain' ),
            'attributes'            => __( 'Vehicle Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Vehicle:', 'text_domain' ),
            'all_items'             => __( 'All Vehicles', 'text_domain' ),
            'add_new_item'          => __( 'Add New Vehicle', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Vehicle', 'text_domain' ),
            'edit_item'             => __( 'Edit Vehicle', 'text_domain' ),
            'update_item'           => __( 'Update Vehicle', 'text_domain' ),
            'view_item'             => __( 'View Vehicle', 'text_domain' ),
            'view_items'            => __( 'View Vehicles', 'text_domain' ),
            'search_items'          => __( 'Search Vehicles', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into vehicle', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this vehicle', 'text_domain' ),
            'items_list'            => __( 'Vehicles list', 'text_domain' ),
            'items_list_navigation' => __( 'Vehicles list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter vehicles list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Vehicle', 'text_domain' ),
            'description'           => __( 'inventory vehicles', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-car',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'vehicles', $args );
    
    }
    add_action( 'init', 'durango_inventory_vehicels', 0 );
    
    }


    // Get csv file count
    add_action('wp_ajax_get_csv_files_count', 'get_csv_files_count_callback');
    add_action('wp_ajax_nopriv_get_csv_files_count', 'get_csv_files_count_callback');
    function get_csv_files_count_callback() {
        $csv_files_count = count(glob(get_stylesheet_directory() . '/vehicles/*.csv'));
        wp_send_json(array('csv_files_count' => $csv_files_count));
        wp_die();
    }

    // Import vehicles data
    add_action('wp_ajax_durango_import_vehicles_data', 'durango_import_vehicles_data_callback');
    add_action('wp_ajax_nopriv_durango_import_vehicles_data', 'durango_import_vehicles_data_callback');

    function durango_import_vehicles_data_callback() {
        $directory = glob(get_stylesheet_directory() . '/vehicles/*.csv');
        $csv_file = array_shift($directory);
        $make = '';
        $model = '';

        if ($csv_file) {
            $file_name = basename($csv_file, '.csv'); // Extract file name without extension
            $file_name_parts = explode('-', $file_name); // Split file name by '-'

            if (count($file_name_parts) >= 2) {
                $make = ucfirst($file_name_parts[0]); // Make the first word uppercase
                $model = ucfirst($file_name_parts[1]); // Make the second word uppercase   
            }
        } else {
            wp_send_json(
                array(
                    'no_csv_file' => 'No CSV file found in the directory.'
                )
            );
        }

        /** Now first delete the existing posts */
        $delete_posts_args = array(
            'post_type' => 'vehicles',
            'posts_per_page' => -1,
            'pages' => 1,
            'meta_query' => array(
                array(
                    'key' => 'model',
                    'value' => $model,
                    'compare' => '=',
                ),
            )
        );
        
        $delete_posts_query = get_posts($delete_posts_args);
        if(!empty($delete_posts_query)) {
            foreach($delete_posts_query as $post) {
                wp_delete_post($post->ID, true);
            }
        }

        /** After deleting the posts start importing new posts from the CSV file */
        if (($handle = fopen($csv_file, "r")) !== FALSE) {
            $header = fgetcsv($handle);
            
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

                $listing_data = array_combine($header, $data);

                // Skip header row
                if ($listing_data['web-scraper-order'] == 'web-scraper-order') {
                    continue;
                }
                
                // Create post array
                $post_data = array(
                    'post_title' => $listing_data['vehicletitle'],
                    'post_type' => 'vehicles',
                    'post_status' => 'publish',
                );
    
                // Insert the post into the database
                $post_id = wp_insert_post($post_data);
    
                // Add post meta
                if ($post_id) {
                    // Map CSV headers to meta keys
                    $meta_keys = array(
                        'vehiclestock',
                        'vehiclevin',
                        'vehiclemsrp',
                        'vehicledealerdiscount',
                        'vehiclebestprice',
                        'vehicleimage-src',
                        'vehicleexteriorcolor',
                        'vehicleinteriorcolor',
                        'vehicleengine',
                        'vehicledrivetrain',
                        'vehicletransmission',
                        'vehiclefuelefficiency'
                    );
                    
                    foreach ($meta_keys as $meta_key) {
                        if (!empty($listing_data[$meta_key])) {
                            update_post_meta($post_id, $meta_key, $listing_data[$meta_key]);
                        }
                    }
                    
                    // Add model meta
                    update_post_meta($post_id, 'model', $model);
                    update_post_meta($post_id, 'make', $make);
                }
            }
            fclose($handle);
        }

        // Unlink the CSV file after deleting the posts
        if (!unlink($csv_file)) {
            // Handle error if file deletion fails
            wp_send_json(
                array(
                    'file_delete_error' => 'Error deleting CSV file.',
                )
            );
        }

        wp_send_json(
            array(
                'file' => $csv_file,
                'make' => $make,
                'model' => $model,
            )
        );

        wp_die();
    }
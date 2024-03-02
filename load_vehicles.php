<?php /* Template Name: Load Vehicles */

get_header();

?>

<main>
    <h1>Importing vehicles please stand by...</h1>
    <p class="response"></p>
    <ul class="progress"></ul>
</main>

<?php get_footer(); ?>

<script>
    jQuery(document).ready(function($) {

        $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'POST',
            data: {
                action: 'get_csv_files_count'
            },
            success: function(response) {
                // Start importing files after getting the count

                $('.response').html(response.csv_files_count)
                importCSVFiles(response.csv_files_count);
            }
        });

        function importCSVFiles(filesCount) {
            $.ajax({
                type: 'POST',
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                data: {
                    action: 'durango_import_vehicles_data',
                },
                success: function(response) {
                    let updatedCounter = filesCount - 1;
                    // if files count is not 0 keep running the function
                    if( updatedCounter !== 0 ) {
                        importCSVFiles(updatedCounter)
                        $('.progress').append(`<li>${response.make} ${response.model} file import completes</li>`)
                    }else {
                        $('.progress').append('<li>Import Process Completes</li>')
                    }
                },
                error: function(XHR, error, status) {
                    $('.progress').html(error)
                }
            })
        }

    })
</script>

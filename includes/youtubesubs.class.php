<?php
/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */


function wporg_add_dashboard_widgets() {
    wp_add_dashboard_widget(
        'youtubesubs_widget',                          // Widget slug.
        esc_html__( 'YouTube Subs', 'yts_domain' ), // Title.
        'wporg_dashboard_widget_render'                    // Display function.
    ); 
}
add_action( 'wp_dashboard_setup', 'wporg_add_dashboard_widgets' );

/**
 * Create the function to output the content of our Dashboard Widget.
 */
function wporg_dashboard_widget_render() {
    // Display whatever you want to show.
    esc_html_e( "Howdy! I'm a great Dashboard Widget.", "wporg" );
    echo "Hello from YTS widget";

?>

    <label for="<?php echo esc_attr( $this->get_field('title')); ?>">
        <?php esc_attr_e('Title', 'yts_domain'); ?>
    </label>
<?php
}
?>
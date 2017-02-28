<?php
/**
 * Run this script via cron job
 */

include '../../../wp-load.php';
include 'vendor/autoload.php';


$args = [
	'post_type'      => 'post',
	'posts_per_page' => 10,
	'post_status'    => 'publish',
];


Predis\Autoloader::register();
$client = new Predis\Client();
$prefix = 'darktips_';


$post_query = new WP_Query( $args );
if ( $post_query->have_posts() ) {
	while ( $post_query->have_posts() ) {
		$post_query->the_post();
		$social      = socialCount( get_permalink() );
		$totalShares = $social->total;
		$client->set( $prefix . '_' . get_the_ID(), $totalShares );
		var_dump( $client->get( $prefix . '_' . get_the_ID() ) );
		?>
        <h6><?php echo get_the_title(); ?> | <?php echo $totalShares; ?> </h6>
		<?php
	}
}


//https://count.donreach.com/?url=http://9gag.com/&providers=google,twitter

function socialCount( $url ) {
// Get cURL resource
	$curl = curl_init();
// Set some options - we are passing in a useragent too here
	curl_setopt_array( $curl, [
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL            => 'https://count.donreach.com/?url=' . $url . '&providers=google,facebook',
		CURLOPT_USERAGENT      => 'Firefox',
	] );
// Send the request & save response to $resp
	$resp = curl_exec( $curl );

// Close request to clear up some resources
	curl_close( $curl );

	return json_decode( $resp );
}



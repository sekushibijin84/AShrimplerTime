<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package A_Shrimpler_Time
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				?> Pete and repeat Are in a boat... <?php
				the_post();
			
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
<?php ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL); 
echo(fish_func([]));
?>
  
  <section>
   
 <h1>Crimson Jobfish</h1>
 <h5>Physical Description:</h5>
 <ul>
	<li>Crimson jobfish have skin that is slightly brown with some brighter colors when caught over hard bottoms.</li>
	<li>Their caudal fin has an orange edge.</li>
	<li>Pectoral fins are brownish or yellow.</li>
	<li>The iris is typically yellow.</li>
</ul>
 <h5>Fishing Rate:</h5>
 <p>Reduced to end overfishing of the bottomfish complex in American Samoa. At recommended levels for other 4 bottomfish complexes.</p>
 <img src="https://origin-east-01-drupal-fishwatch.woc.noaa.gov/sites/default/files/Hake_White_NB_W_0.png" alt="White hake in a tank at the New England Aquarium",
				title="White hake at New England Aquarium. Photo credit: Stephen Luk"></img>
 
 <a href="<?php echo esc_url( __( '/fish/red-fish/', 'single-fish' ) ); ?>">
				<?php
				/* Crimson Jobfish link */
				printf( esc_html__( 'Click for more information about this fish' ), 'single-fish' );
				?>
			</a>
  </section>
  <section>
  <h1>Yellowtail Rockfish</h1>

<h5>Physical Description:</h5>
<ul>
	<li>Yellowtail rockfish are greyish brown on top and fade to white on the belly.</li>
	<li>Their body has trace yellow spotting.</li>
	<li>Yellowtail tail fins are yellowish green.</li>
	<li>Their other fins have a darker yellowish green coloration.</li>
</ul>
<h5>Fishing Rate:</h5>
<p>At recommended levels.</p>
<img src="https://origin-east-01-drupal-fishwatch.woc.noaa.gov/sites/default/files/Rockfish_Yellowtail_NB_W.png" alt="Yellowtail Rockfish",
			   title="Yellowtail Rockfish"></img>
			   <a href="<?php echo esc_url( __( '/fish/yellowtail/', 'yellowtail-fish' ) ); ?>">
				<?php
				/* Yellowtail Rockfish link */
				printf( esc_html__( 'Click for more information about this fish' ), 'yellowtail-fish' );
				?>
			</a>
  </section>
  <section>
  <h1>American Lobster</h1>

<h5>Physical Description:</h5>
<ul>
	<li>American lobster is a crustacean with a large shrimp-like body and 10 legs, two of which are large, strong claws.</li>
	<li>One claw is a big-toothed crusher claw for pulverizing shells, and the other is a finer-edged ripper claw, resembling a steak knife, for tearing soft flesh.</li>
	<li>Male and female lobsters</a> can be distinguished by the first pair of swimmerets (pleopods) on the upper portion of the underside of the tail. The male swimmerets are larger and more rigid. The female swimmerets are softer, smaller, and have rounded edges.</li>
    <li>Live lobsters are not red like those you see in a restaurant or grocery store, after they have been cooked. Most are either olive-green or greenish-brown. Some have orange, reddish, dark green, or black speckles and bluish colors in the joints of their appendages.</li>
</ul>

<h5>Fishing Rate:</h5>
<p>At recommended levels.</p>
<img src="https://origin-east-01-drupal-fishwatch.woc.noaa.gov/sites/default/files/Lobster_American_NB_Web.png" alt="American Lobster",
			   title="American Lobster"></img>
			   <a href="<?php echo esc_url( __( '/fish/lobster/', 'lobster-fish' ) ); ?>">
				<?php
				/* American Lobster link */
				printf( esc_html__( 'Click for more information about this fish' ), 'lobster-fish' );
				?>
			</a>
  </section>
  <section>
  <h1>Shortfin Squid</h1>

<h5>Physical Description:</h5>
<ul>
	<li>Female shortfin squid range from 7 to 12 inches in mantle length, while males are 7 to 10.6 inches in mantle length.</li>
	<li>They can regulate their body color, but are primarily orange-colored with a brown stripe that extends along the top side of the mantle.</li>
</ul>
<h5>Availability:</h5>
<p>Summer and fall.</p>
<img src="https://origin-east-01-drupal-fishwatch.woc.noaa.gov/sites/default/files/Squid_Illex_NB_W.png" alt="shortfin squid",
			   title="Shortfin Squid"></img>
			   <a href="<?php echo esc_url( __( '/fish/shortfin/', 'shortfin-fish' ) ); ?>">
				<?php
				/* Shortfin Squid link */
				printf( esc_html__( 'Click for more information about this fish' ), 'shortfin-fish' );
				?>
			</a>
  </section>

  <section>
  <h1>Atlantic Shortfin Mako Shark</h1>

<h5>Physical Description:</h5>
<ul>
	<li>Shortfin mako sharks have very pointed snouts and long gill slits.&nbsp;</li>
	<li>They have dark blue/gray backs, light metallic blue sides, and white undersides.</li>
	<li>Shortfin mako sharks can be differentiated from&nbsp;longfin mako sharks. Compared to shortfin mako sharks, longfin mako sharks have much longer pectoral fins and larger eyes, a different body shape, and the underside of&nbsp;their snout is darker.</li>
</ul>
<h5>Fishing Rate:</h5>
<p>Retention limit of zero in place to end overfishing.</p>
<img src="https://origin-east-01-drupal-fishwatch.woc.noaa.gov/sites/default/files/atlantic_common_thresher_shark_0.png" alt="White hake in a tank at the New England Aquarium",
			   title="White hake at New England Aquarium. Photo credit: Stephen Luk"></img>
			   <a href="<?php echo esc_url( __( '/fish/shark/', 'shark-fish' ) ); ?>">
				<?php
				/* Atlantic Shortfin Mako Shark link */
				printf( esc_html__( 'Click for more information about this fish' ), 'shark-fish' );
				?>
			</a>
  </section>
  <section>
  <h1>King Mackerel</h1>

<h5>Physical Description:</h5>
<ul>
	<li>King mackerel are iron-gray on the back and silvery on their sides and belly.</li>
	<li>They have pale to dusky fins.</li>
	<li>Small king mackerel sometimes have spots like Spanish mackerel, but king mackerel can be distinguished by their sharply dipping lateral line and gray anterior (near the front) dorsal (the upper side) fin.</li>
</ul>
<h5>Fishing Rate:</h5>
<p>At recommended levels in the South Atlantic and the Gulf of Mexico.</p>
<img src="https://origin-east-01-drupal-fishwatch.woc.noaa.gov/sites/default/files/king_mackerel.png" alt="Illustration of King Mackarel",
			   title="King Mackarel"></img>
			   <a href="<?php echo esc_url( __( '/fish/mackarel/', 'mackarel-fish' ) ); ?>">
				<?php
				/* King Mackerel link */
				printf( esc_html__( 'Click for more information about this fish' ), 'mackarel-fish' );
				?>
			</a>
  </section>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

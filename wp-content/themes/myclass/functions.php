<?php 
if(!function_exists('godream_theme_setup')){
	function godream_theme_setup(){
		add_theme_support( 'custom-logo' );

		register_nav_menu('primary-menu',__('Primary Menu'));

		add_theme_support('custom-background');

		add_theme_support( 'post-thumbnails' );

		register_sidebar( array(
			'name'          => 'Right Sidebar',
			'id'            => 'right-sidebar',
			'description'   => 'this is right sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>'
		));
	}
	}
	add_action( 'after_setup_theme', 'godream_theme_setup' );

function itc_enqueue_scripts() {
	// Load our main stylesheet.
	wp_enqueue_style('main-style',get_template_directory_uri() . '/style.css');
	wp_enqueue_style('style1',get_template_directory_uri() . '/style1.css');
	wp_enqueue_script( 'jquery');
	wp_enqueue_style('flower','https://fonts.googleapis.com/css?family=East+Sea+Dokdo');
	wp_enqueue_style( 'owl.carousel.min.css', get_template_directory_uri() . '/owlcarousel/dist/assets/owl.carousel.min.css' );
	wp_enqueue_style( 'owl.theme.default.min.css', get_template_directory_uri() . '/owlcarousel/dist/assets/owl.theme.default.min.css' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/slick/slick/slick.css' );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/slick/slick/slick-theme.css' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/fontawesome/css/all.css' );
	wp_enqueue_style('responsive',get_template_directory_uri() . '/responsive.css');
	/*wp_enqueue_script( 'slick.min', get_template_directory_uri() . '/slick/slick/slick.min.js');*/
		wp_enqueue_script( 'owl.carousel.min.js', get_template_directory_uri() . '/owlcarousel/dist/owl.carousel.min.js');
	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/js/main.js' );
}
add_action( 'wp_enqueue_scripts', 'itc_enqueue_scripts' );

function get_terms_by_taxonomy(){
	$terms = get_terms( array(
    'taxonomy' => 'product_cat',
    /*'hide_empty' => false*/
	) );
	return $terms;
}

function get_products_by_category($cat_name,$num_of_products){
	$wc_query=new WP_Query(
	array(
		'post_type'=>'product',
		'posts_per_page'=>$num_of_products,
        'tax_query'=>array(
        	array(
            'taxonomy'      => 'product_cat',
            'field'         => 'slug',
            'terms'         => $cat_name,
            'operator'      => 'IN'
        )
        )
	)
	);
	if($wc_query->have_posts()):
		while($wc_query->have_posts()):
			$wc_query->the_post();
				get_template_part( 'content');
	endwhile;
	wp_reset_postdata();
	else: _e( 'No Products');
	endif;
}
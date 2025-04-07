<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'noteblock', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'noteblock' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'noteblock' ),
	'button_url'  => 'https://agnarson.com/wpthemes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'noteblock' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'noteblock' ),
	'button_url'  => 'https://wordpress.org/support/theme/noteblock/reviews/?filter=5#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'noteblock' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'noteblock' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'noteblock' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'noteblock' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'noteblock' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'noteblock' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'noteblock' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'noteblock' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'noteblock' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'noteblock' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'noteblock' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'noteblock' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'noteblock' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Enable Blog Heading
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'heading-enable',
	'label'			=> esc_html__( 'Enable Blog Heading', 'noteblock' ),
	'description'	=> esc_html__( 'Show heading on blog home', 'noteblock' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Heading
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'noteblock' ),
	'description'	=> esc_html__( 'Your blog heading', 'noteblock' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'noteblock' ),
	'description'	=> esc_html__( 'Your blog subheading', 'noteblock' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'noteblock' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'noteblock' ),
	'section'		=> 'blog',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'checkbox',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts', 'noteblock' ),
	'description'	=> esc_html__( 'To show featured posts in the featured section AND the content below', 'noteblock' ),
	'section'		=> 'blog',
	'default'		=> false,
) );
// Blog: Featured Category
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'noteblock' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'noteblock' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'noteblock' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'noteblock' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set it to 0 to disable', 'noteblock' ),
	'section'		=> 'blog',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '14',
		'step'	=> '1',
	),
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'noteblock' ),
	'description'	=> esc_html__( '2 columns of widgets', 'noteblock' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'noteblock' ),
	'description'	=> esc_html__( '2 columns of widgets', 'noteblock' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Comment Count
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'noteblock' ),
	'description'	=> esc_html__( 'Comment count with bubbles', 'noteblock' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'noteblock' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'noteblock' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'noteblock' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'noteblock' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'noteblock' ),
		'categories'=> esc_html__( 'Related by categories', 'noteblock' ),
		'tags'		=> esc_html__( 'Related by tags', 'noteblock' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'noteblock' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'noteblock' ),
	'section'		=> 'blog',
	'default'		=> 'content',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'noteblock' ),
		'content'	=> esc_html__( 'Below content', 'noteblock' ),
	),
) );
// Header: Search
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'noteblock' ),
	'description'	=> esc_html__( 'Header search button', 'noteblock' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'noteblock' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'noteblock' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Profile Avatar
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'noteblock' ),
	'description'	=> esc_html__( 'Minimum width of 320px', 'noteblock' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Name', 'noteblock' ),
	'description'	=> esc_html__( 'Your name appears below the image', 'noteblock' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'noteblock' ),
	'description'	=> esc_html__( 'A short description of you', 'noteblock' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Ads
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'noteblock' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'noteblock' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'noteblock' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 2', 'noteblock' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'noteblock' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'noteblock' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'noteblock' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'noteblock' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'noteblock' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'noteblock' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'noteblock' ),
	'description'	=> esc_html__( 'Footer credit text', 'noteblock' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'noteblock' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'noteblock' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cr',
	'choices'     => array(
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'noteblock' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'noteblock' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'noteblock' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'noteblock' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'noteblock' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'noteblock' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'noteblock' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'noteblock' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'noteblock' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'noteblock' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'noteblock' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'noteblock' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'noteblock' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'noteblock' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );


function noteblock_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'noteblock_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'noteblock' ),
		'description'	=> esc_html__( '(is_home) Primary', 'noteblock' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'noteblock' ),
	) );
	Kirki::add_field( 'noteblock_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'noteblock' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'noteblock' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'noteblock' ),
	) );
	Kirki::add_field( 'noteblock_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'noteblock' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'noteblock' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'noteblock' ),
	) );
	Kirki::add_field( 'noteblock_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'noteblock' ),
		'description'	=> esc_html__( '(is_category) Primary', 'noteblock' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'noteblock' ),
	) );
	Kirki::add_field( 'noteblock_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'noteblock' ),
		'description'	=> esc_html__( '(is_search) Primary', 'noteblock' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'noteblock' ),
	) );
	Kirki::add_field( 'noteblock_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'noteblock' ),
		'description'	=> esc_html__( '(is_404) Primary', 'noteblock' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'noteblock' ),
	) );
	Kirki::add_field( 'noteblock_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'noteblock' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'noteblock' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'noteblock' ),
	) );
	
 } 
add_action( 'init', 'noteblock_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'noteblock' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'noteblock' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'noteblock' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'noteblock' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'noteblock' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'noteblock' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'noteblock' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'noteblock' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'noteblock' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'noteblock' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'noteblock' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'noteblock' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'noteblock' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'noteblock' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'noteblock' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'noteblock' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'noteblock' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Font
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'noteblock' ),
	'description'	=> esc_html__( 'Select font for the theme', 'noteblock' ),
	'section'		=> 'styling',
	'default'		=> 'roboto',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'noteblock' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'noteblock' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'noteblock' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'noteblock' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'noteblock' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'noteblock' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'noteblock' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'noteblock' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'noteblock' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'noteblock' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'noteblock' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'noteblock' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'noteblock' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'noteblock' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'noteblock' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'noteblock' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'noteblock' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'noteblock' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'noteblock' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'noteblock' ),
		'arial'					=> esc_html__( 'Arial', 'noteblock' ),
		'georgia'				=> esc_html__( 'Georgia', 'noteblock' ),
		'verdana'				=> esc_html__( 'Verdana', 'noteblock' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'noteblock' ),
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'noteblock' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'noteblock' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Container Width
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'noteblock' ),
	'description'	=> esc_html__( 'Max-width of the container.', 'noteblock' ),
	'section'		=> 'styling',
	'default'		=> '1024',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Gradient Left
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'color',
	'settings'		=> 'gradient-left',
	'label'			=> esc_html__( 'Gradient Color Left', 'noteblock' ),
	'section'		=> 'styling',
	'default'		=> '#00c498',
) );
// Styling: Gradient Right
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'color',
	'settings'		=> 'gradient-right',
	'label'			=> esc_html__( 'Gradient Color Right', 'noteblock' ),
	'section'		=> 'styling',
	'default'		=> '#1c6da1',
) );
// Styling: Link Color
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-link',
	'label'			=> esc_html__( 'Link Color', 'noteblock' ),
	'section'		=> 'styling',
	'default'		=> '#000000',
) );
// Styling: Sidebar Color
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-sidebar',
	'label'			=> esc_html__( 'Sidebar Color', 'noteblock' ),
	'section'		=> 'styling',
	'default'		=> '',
) );
// Styling: Background Color
Kirki::add_field( 'noteblock_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-background',
	'label'			=> esc_html__( 'Background Color', 'noteblock' ),
	'section'		=> 'styling',
	'default'		=> '#100e17',
) );
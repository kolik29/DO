<?php
add_theme_support('menus');

function styles() {
    wp_enqueue_style('style', get_template_directory_uri() . '/styles/style.css', [], '0.1');
}

add_action('wp_enqueue_scripts', 'styles');

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'post_type_name', [
		'label'  => null,
		'labels' => [
			'name'               => 'Digital Octane', // основное название для типа записи
			'singular_name'      => 'Digital Octane', // название для одной записи этого типа
			'add_new'            => 'Добавить Digital Octane', // для добавления новой записи
			'add_new_item'       => 'Добавление Digital Octane', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Digital Octane', // для редактирования типа записи
			'new_item'           => 'Новый Digital Octane', // текст новой записи
			'view_item'          => 'Смотреть Digital Octane', // для просмотра записи этого типа.
			'search_items'       => 'Искать Digital Octane', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Digital Octane', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}
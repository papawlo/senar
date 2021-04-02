<?php
/* Bones Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'senar_flush_rewrite_rules' );

// Flush your rewrite rules
function senar_flush_rewrite_rules() {
	flush_rewrite_rules();
}

// let's create the function for the custom type
function cpt_curso() { 
	// creating (registering) the custom type 
	register_post_type( 'curso', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Cursos', 'senar' ), /* This is the Title of the Group */
			'singular_name' => __( 'Curso', 'senar' ), /* This is the individual type */
			'all_items' => __( 'Todos os Cursos', 'senar' ), /* the all items menu item */
			'add_new' => __( 'Adicionar Novo', 'senar' ), /* The add new menu item */
			'add_new_item' => __( 'Adicionar Novo Curso', 'senar' ), /* Add New Display Title */
			'edit' => __( 'Editar', 'senar' ), /* Edit Dialog */
			'edit_item' => __( 'Editar Curso', 'senar' ), /* Edit Display Title */
			'new_item' => __( 'Novo Curso', 'senar' ), /* New Display Title */
			'view_item' => __( 'Ver CUrso', 'senar' ), /* View Display Title */
			'search_items' => __( 'Procurar Curso', 'senar' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nada encontrado na base de dados.', 'senar' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nada encontrado na lixeira', 'senar' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Esse é um exemplo de curso', 'senar' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-welcome-learn-more', /* the icon for the custom post type menu */
//			'rewrite'	=> array( 'slug' => 'custom_type', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'cursos', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'sticky')
		) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
//	register_taxonomy_for_object_type( 'category', 'custom_type' );
	/* this adds your post tags to your custom post type */
//	register_taxonomy_for_object_type( 'post_tag', 'custom_type' );
	
}

	// adding the function to the Wordpress init
	add_action( 'init', 'cpt_curso');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
	register_taxonomy( 'curso-category', 
		array('curso'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => __( 'Categorias', 'senar' ), /* name of the custom taxonomy */
				'singular_name' => __( 'Categoria', 'senar' ), /* single taxonomy name */
				'search_items' =>  __( 'Procurar Categorias', 'senar' ), /* search title for taxomony */
				'all_items' => __( 'Todas as Categorias', 'senar' ), /* all title for taxonomies */
				'parent_item' => __( 'Categoria Pai', 'senar' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Categoria Pai:', 'senar' ), /* parent taxonomy title */
				'edit_item' => __( 'Editar Categoria', 'senar' ), /* edit custom taxonomy title */
				'update_item' => __( 'Atualizar Categoria', 'senar' ), /* update title for taxonomy */
				'add_new_item' => __( 'Adicionar Nova Categoria', 'senar' ), /* add new title for taxonomy */
				'new_item_name' => __( 'Nova Categoria', 'senar' ) /* name title for taxonomy */
			),
			'show_admin_column' => true, 
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'curso-categoria' ),
		)
	);
	
	// now let's add custom tags (these act like categories)
//	register_taxonomy( 'custom_tag', 
//		array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
//		array('hierarchical' => false,    /* if this is false, it acts like tags */
//			'labels' => array(
//				'name' => __( 'Custom Tags', 'senar' ), /* name of the custom taxonomy */
//				'singular_name' => __( 'Custom Tag', 'senar' ), /* single taxonomy name */
//				'search_items' =>  __( 'Search Custom Tags', 'senar' ), /* search title for taxomony */
//				'all_items' => __( 'All Custom Tags', 'senar' ), /* all title for taxonomies */
//				'parent_item' => __( 'Parent Custom Tag', 'senar' ), /* parent title for taxonomy */
//				'parent_item_colon' => __( 'Parent Custom Tag:', 'senar' ), /* parent taxonomy title */
//				'edit_item' => __( 'Edit Custom Tag', 'senar' ), /* edit custom taxonomy title */
//				'update_item' => __( 'Update Custom Tag', 'senar' ), /* update title for taxonomy */
//				'add_new_item' => __( 'Add New Custom Tag', 'senar' ), /* add new title for taxonomy */
//				'new_item_name' => __( 'New Custom Tag Name', 'senar' ) /* name title for taxonomy */
//			),
//			'show_admin_column' => true,
//			'show_ui' => true,
//			'query_var' => true,
//		)
//	);
	
	/*
		looking for custom meta boxes?
		check out this fantastic tool:
		https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
	*/
	

?>

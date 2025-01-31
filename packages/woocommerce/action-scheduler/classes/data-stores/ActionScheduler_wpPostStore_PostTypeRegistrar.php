<?php

/**
 * Class ActionScheduler_wpPostStore_PostTypeRegistrar
 * @codeCoverageIgnore
 */
class ActionScheduler_wpPostStore_PostTypeRegistrar {
	/**
	 * Registrar.
	 */
	public function register() {
		register_post_type( ActionScheduler_wpPostStore::POST_TYPE, $this->post_type_args() );
	}

	/**
	 * Build the args array for the post type definition
	 *
	 * @return array
	 */
	protected function post_type_args() {
		$args = array(
			'label' => __( 'Scheduled Actions', 'pronamic-pay-with-mollie-for-contact-form-7' ),
			'description' => __( 'Scheduled actions are hooks triggered on a certain date and time.', 'pronamic-pay-with-mollie-for-contact-form-7' ),
			'public' => false,
			'map_meta_cap' => true,
			'hierarchical' => false,
			'supports' => array('title', 'editor','comments'),
			'rewrite' => false,
			'query_var' => false,
			'can_export' => true,
			'ep_mask' => EP_NONE,
			'labels' => array(
				'name' => __( 'Scheduled Actions', 'pronamic-pay-with-mollie-for-contact-form-7' ),
				'singular_name' => __( 'Scheduled Action', 'pronamic-pay-with-mollie-for-contact-form-7' ),
				'menu_name' => _x( 'Scheduled Actions', 'Admin menu name', 'pronamic-pay-with-mollie-for-contact-form-7' ),
				'add_new' => __( 'Add', 'pronamic-pay-with-mollie-for-contact-form-7' ),
				'add_new_item' => __( 'Add New Scheduled Action', 'pronamic-pay-with-mollie-for-contact-form-7' ),
				'edit' => __( 'Edit', 'pronamic-pay-with-mollie-for-contact-form-7' ),
				'edit_item' => __( 'Edit Scheduled Action', 'pronamic-pay-with-mollie-for-contact-form-7' ),
				'new_item' => __( 'New Scheduled Action', 'pronamic-pay-with-mollie-for-contact-form-7' ),
				'view' => __( 'View Action', 'pronamic-pay-with-mollie-for-contact-form-7' ),
				'view_item' => __( 'View Action', 'pronamic-pay-with-mollie-for-contact-form-7' ),
				'search_items' => __( 'Search Scheduled Actions', 'pronamic-pay-with-mollie-for-contact-form-7' ),
				'not_found' => __( 'No actions found', 'pronamic-pay-with-mollie-for-contact-form-7' ),
				'not_found_in_trash' => __( 'No actions found in trash', 'pronamic-pay-with-mollie-for-contact-form-7' ),
			),
		);

		$args = apply_filters('action_scheduler_post_type_args', $args);
		return $args;
	}
}

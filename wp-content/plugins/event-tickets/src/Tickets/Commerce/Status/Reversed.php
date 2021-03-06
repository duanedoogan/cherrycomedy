<?php

namespace TEC\Tickets\Commerce\Status;

/**
 * Class Refunded.
 *
 *
 * @since   5.1.9
 *
 * @package TEC\Tickets\Commerce\Status
 */
class Reversed extends Status_Abstract {
	/**
	 * Slug for this Status.
	 *
	 * @since 5.1.9
	 *
	 * @var string
	 */
	const SLUG = 'reversed';

	/**
	 * {@inheritdoc}
	 */
	public function get_name() {
		return __( 'Reversed', 'event-tickets' );
	}

	/**
	 * {@inheritdoc}
	 */
	protected $flags = [
		'warning',
		'count_refunded',
	];

	/**
	 * {@inheritdoc}
	 */
	protected $wp_arguments = [
		'public'                    => true,
		'exclude_from_search'       => false,
		'show_in_admin_all_list'    => true,
		'show_in_admin_status_list' => true,
	];
}
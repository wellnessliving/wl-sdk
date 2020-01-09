<?php

namespace WellnessLiving\Wl\Profile\Term;

use WellnessLiving\WlModelAbstract;

/**
 * Information about online waiver.
 */
class TermModel extends WlModelAbstract
{
	/**
	 * ID of current business.
	 *
	 * @post get
	 * @var string
	 */
	public $k_business = '0';

	/**
	 * ID of a user to show information for.
	 *
	 * @post get
	 * @var string
	 */
	public $uid = '0';
}

?>
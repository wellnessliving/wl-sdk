<?php

namespace WellnessLiving\Wl\Business\Partner;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Works with partner url for a business that takes part in the partner program.
 *
 * @method WlModelRequest get() Returns the partner URL for the specified business.  Used to display or share the business's unique Partner Program landing page link. Partner URLs are public information, so no access check is performed.
 * @method WlModelRequest post() Updates partner url for a business that takes part in the partner program.  Allows a Partner Program member to set a memorable custom vanity code for their referral landing page. The code must be unique across all businesses and contain only letters, digits, and underscores.
 */
class PartnerCodeModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Unique code that business can give other businesses to tell them about system.
   *
   * @post post
   * @var string
   */
  public $text_code = '';

  /**
   * Link to the landing campaign
   *
   * @get result
   * @var string
   */
  public $url_partner = '';
}

?>
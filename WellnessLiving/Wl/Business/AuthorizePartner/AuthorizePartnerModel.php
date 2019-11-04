<?php

namespace WellnessLiving\Wl\Business\AuthorizePartner;

use WellnessLiving\WlModelAbstract;

/**
 * Model for response to request enter into business location.
 */
class AuthorizePartnerModel extends WlModelAbstract
{
  /**
   * <tt>true</tt> - grant access; <tt>false</tt> - deny access.
   *
   * @get get
   * @var bool
   */
  public $is_grant = false;

  /**
   * ID of the Franchisee location to enter.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * ID of user who will be granted access.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>
<?php

namespace WellnessLiving\Wl\Business\AuthorizePartner;

use WellnessLiving\WlModelAbstract;

/**
 * Model to give members of a franchisor access to a franchisee.
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
   * Key of the Franchisee location to enter.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * Key of user who will be granted access.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>
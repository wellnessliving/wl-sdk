<?php

namespace WellnessLiving\Wl\Business\AuthorizeSupport\Response;

use WellnessLiving\WlModelAbstract;

/**
 * Model for response to request enter into business location.
 */
class ResponseModel extends WlModelAbstract
{
  /**
   * <tt>true</tt> - grant access; <tt>false</tt> - deny access.
   *
   * @get get
   * @var bool
   */
  public $is_grant = false;

  /**
   * Key of location to enter.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * Key of user who requests enter.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>
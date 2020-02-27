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
   * ID of the location to access.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * ID of the user to grant access .
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>
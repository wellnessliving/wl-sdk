<?php

namespace WellnessLiving\Wl\Login\Agree;

use WellnessLiving\WlModelAbstract;

/**
 * Saves user's agreement to online waiver.
 */
class AgreeModel extends WlModelAbstract {
  /**
   * The base64 encoded user's signature image in PNG.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var string
   */
  public $s_signature = null;

  /**
   * ID of business.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post get
   * @var string
   */
  public $k_business = null;

  /**
   * User's ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post get
   * @var string
   */
  public $uid = null;
}

?>
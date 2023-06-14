<?php

namespace WellnessLiving\Wl\Login\Agree;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that saves the user's agreement to the online waiver.
 */
class AgreeModel extends WlModelAbstract {
  /**
   * The base64-encoded user's signature image from the signature pad as a PNG file.
   *
   * This will be `null` if not set yet.
   *
   * @post post
   * @var string
   */
  public $s_signature = null;

  /**
   * The ID of business.
   *
   * This will be `null` if not set yet.
   *
   * @post get
   * @var string
   */
  public $k_business = null;

  /**
   * The user's ID.
   *
   * This will be `null` if not set yet.
   *
   * @post get
   * @var string
   */
  public $uid = null;
}

?>
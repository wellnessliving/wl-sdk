<?php

namespace WellnessLiving\Wl\Import\Migration\Cookie;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to receive user cookies from Mindbody.
 *
 * @method WlModelRequest get() Returns cookies from an authorized user with Mindbody.
 */
class CookieGeneralModel extends WlModelAbstract
{
  /**
   * Key of the business from Mindbody.
   * Note: This key is used to go to the backend page of the business in Mindbody.
   * Key of the business can be a negative number.
   *
   * @get get
   * @var int
   */
  public $k_studio = 0;

  /**
   * Cookie key.
   *
   * @get result
   * @var string
   */
  public $s_cookie;

  /**
   * User login for authorization for Mindbody.
   *
   * @get get
   * @var string
   */
  public $text_login = '';

  /**
   * User password for authorization for Mindbody.
   *
   * @get get
   * @var string
   */
  public $text_password = '';
}

?>
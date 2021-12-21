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
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * ID of a user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';

  /**
   * Date/time of the waiver confirmation.
   *
   * @get result
   * @var string
   */
  public $dt_agree = '';

  /**
   * Text of online waiver.
   *
   * @get result
   * @var string
   */
  public $html_contract = '';

  /**
   * The IP address from which the confirmation was carried out.
   *
   * @get result
   * @var string
   */
  public $ip_agree = '';

  /**
   * User's name.
   *
   * @get result
   * @var string
   */
  public $s_name = '';

  /**
   * URL to image with client's signature.
   *
   * @get result
   * @var string
   */
  public $url_signature = '';
}

?>
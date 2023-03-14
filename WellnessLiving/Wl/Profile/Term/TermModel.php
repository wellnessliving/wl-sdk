<?php

namespace WellnessLiving\Wl\Profile\Term;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that displays information about online waiver.
 */
class TermModel extends WlModelAbstract
{
  /**
   * The ID of the current business.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The ID of the user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';

  /**
   * The date/time of the waiver confirmation.
   *
   * @get result
   * @var string
   */
  public $dt_agree = '';

  /**
   * The text of the online waiver.
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
   * The user's name.
   *
   * @get result
   * @var string
   */
  public $s_name = '';

  /**
   * The URL to the image with the client's signature.
   *
   * @get result
   * @var string
   */
  public $url_signature = '';
}

?>
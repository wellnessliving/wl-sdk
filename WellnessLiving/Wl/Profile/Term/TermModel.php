<?php

namespace WellnessLiving\Wl\Profile\Term;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Displays information about online waiver.
 *
 * @method WlModelRequest get() Returns online waiver information for the specified user and business.  Returns the rendered online waiver text for the business along with the client's current  agreement status. Used to display the waiver page and show whether the client has already  signed, including their signature image and the confirmation timestamp.
 */
class TermModel extends WlModelAbstract
{
  /**
   * The date/time of the waiver confirmation.
   * <tt>null</tt> if waiver is not confirmed.
   *
   * @get result
   * @var string|null
   */
  public $dt_agree;

  /**
   * The text of the online waiver.
   *
   * @get result
   * @var string
   */
  public $html_contract;

  /**
   * Age of minor which documents can be signed by parent or legal guardian.
   *
   * @get result
   * @var int
   */
  public $i_minor_age;

  /**
   * The IP address from which the confirmation was carried out.
   * <tt>null</tt> if waiver is not confirmed.
   *
   * @get result
   * @var string|null
   */
  public $ip_agree;

  /**
   * Flag of successful saving agreement.
   * <tt>true</tt> if agreement was sign up successful <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_agree;

  /**
   * The key of the current business.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The user's name.
   *
   * @get result
   * @var string
   */
  public $s_name;

  /**
   * The key of the user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';

  /**
   * The URL to the image with the client's signature.
   * <tt>false</tt> if waiver is not confirmed.
   *
   * @get result
   * @var string|false
   */
  public $url_signature;
}

?>
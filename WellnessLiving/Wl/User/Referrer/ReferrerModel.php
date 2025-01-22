<?php

namespace WellnessLiving\Wl\User\Referrer;

use WellnessLiving\WlModelAbstract;

/**
 * Searches for a referrer using a string.
 */
class ReferrerModel extends WlModelAbstract
{
  /**
   * Information about the referrer's photo. The information returned has the following structure:
   * <dl>
   *   <dt>
   *     int <var>i_height</var>
   *   </dt>
   *   <dd>
   *     The height of the photo.
   *   </dd>
   *   <dt>
   *     int <var>i_width</var>
   *   </dt>
   *   <dd>
   *     The width of the photo.
   *   </dd>
   *   <dt>
   *     string <var>url_photo</var>
   *   </dt>
   *   <dd>
   *     The URL of the photo.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_photo;

  /**
   * The key of the current business.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * The email address of the referrer.
   *
   * @get result
   * @var string
   */
  public $s_email;

  /**
   * The business client ID of the referrer.
   *
   * @get result
   * @var string
   */
  public $s_member;

  /**
   * The first name of the referrer.
   *
   * @get result
   * @var string
   */
  public $s_name_first;

  /**
   * The last name of the referrer.
   *
   * @get result
   * @var string
   */
  public $s_name_last;

  /**
   * The phone number of the referrer.
   *
   * @get result
   * @var string
   */
  public $s_phone;

  /**
   * The string to be used for searching for a referrer.
   *
   * @get get
   * @var string
   */
  public $s_search = '';

  /**
   * Composes name of the referrer for public usage.
   * `null` if the referrer is not found.
   *
   * @get result
   * @var string|null
   */
  public $text_name_public = null;

  /**
   * The referrer's user key.
   *
   * @get result
   * @var string
   */
  public $uid_referrer;
}

?>
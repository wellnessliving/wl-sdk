<?php

namespace WellnessLiving\Wl\User\Referrer;

use WellnessLiving\WlModelAbstract;

/**
 * Search referrer by query's string.
 */
class ReferrerModel extends WlModelAbstract
{
  /**
   * Information about the referrer's photo. Has next structure:
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
   * Current business key.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * The email of the referrer.
   *
   * @get result
   * @var string
   */
  public $s_email;

  /**
   * The business client key of the referrer.
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
   * The phone of the referrer.
   *
   * @get result
   * @var string
   */
  public $s_phone;

  /**
   * A string for search a referrer.
   *
   * @get get
   * @var string
   */
  public $s_search = '';

  /**
   * Client's user key of the referrer.
   *
   * @get result
   * @var string
   */
  public $uid_referrer;
}
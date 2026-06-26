<?php

namespace WellnessLiving\Wl\Session\Status;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages api methods for sessions.
 *
 * @method WlModelRequest get() Returns current user business and mode.
 */
class Model extends WlModelAbstract
{
  /**
   * Whether current user has left hist contact details.
   *
   * @get result
   * @var bool
   */
  public $has_contact;

  /**
   * IP address of remote user.
   *
   * @get get
   * @var string
   */
  public $ip = '';

  /**
   * Business key if user logged in.
   *
   * @field business_id
   * @get result
   * @var int
   */
  public $k_business;

  /**
   * User contact email address.
   *
   * @field mail
   * @get result
   * @var string
   */
  public $text_email;

  /**
   * First name of the user.
   *
   * @field firstname
   * @get result
   * @var string
   */
  public $text_first_name;

  /**
   * Last name of the user.
   *
   * @field lastname
   * @get result
   * @var string
   */
  public $text_last_name;

  /**
   * Cell phone number.
   *
   * @field phone
   * @get result
   * @var string
   */
  public $text_phone;

  /**
   * User's role. May be on of: <tt>guest</tt>, <tt>user</tt>, <tt>location-owner</tt>, <tt>admin</tt>.
   *
   * @field role
   * @get result
   * @var string
   */
  public $text_role;

  /**
   * Mode of current user session: <tt>frontend</tt> or <tt>backend</tt>.
   *
   * @field state
   * @get result
   * @var string
   */
  public $text_state;

  /**
   * Current user ID.
   *
   * @get result
   * @var int
   */
  public $uid;

  /**
   * User photo URL.
   *
   * @get result
   * @var string
   */
  public $url_photo;
}

?>
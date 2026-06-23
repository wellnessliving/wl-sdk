<?php

namespace WellnessLiving\Wl\Login\Mail;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * An endpoint to check if an email address is used by member of a business.
 *
 * @method WlModelRequest get() Checks if specified user exists in specified business.  Accepts a business key and an email address, validates both, and returns `true` if a user with that email is an active member of the business. Requests are rate-limited per IP unless the caller has the required privilege.
 */
class MailUseModel extends WlModelAbstract
{
  /**
   * If <tt>true</tt>, the user with the specified email address exists in specified business. Otherwise, this will
   * be <tt>false</tt>.
   *
   * @get result
   * @var bool
   */
  public $is_exists;

  /**
   * The business for which the email address search is being performed.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * The email address to check for.
   *
   * @get get
   * @var string
   */
  public $text_mail;

  /**
   * Key of the user who using email within the business.
   *
   * @get result
   * @var string|null
   */
  public $uid_use = null;
}

?>
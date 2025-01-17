<?php

namespace WellnessLiving\Wl\Login\Mail;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint to check if an email address is used by member of a business.
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
     *
     */
  public $k_business;

  /**
     * The email address to check for.
     *
     * @get get
     * @var string
     */
  public $text_mail;
}

?>
<?php

namespace WellnessLiving\Wl\Login\Mail;

use WellnessLiving\WlModelAbstract;

/**
 * Point to check if an email address is used by member of a business.
 */
class MailUseModel extends WlModelAbstract
{
  /**
   * <tt>true</tt> if user with specified email exists in specified business; <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_exists;

  /**
   * Business to check email usage in.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * Email to check usage.
   *
   * @get get
   * @var string
   */
  public $text_mail;
}

?>
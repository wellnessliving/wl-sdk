<?php

namespace WellnessLiving\Core\Amazon\Ses\Blacklist;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Clears all caches where messages can be cached.
 *
 * This includes compiled versions of templates.
 *
 * @method WlModelRequest delete() Removes an email address from the Amazon Ses blacklist.
 * @method WlModelRequest get() Checks if an email address is on the Amazon Ses blacklist.
 */
class BlacklistModel extends WlModelAbstract
{
  /**
   * Indicates if the email address is blacklisted.
   *
   * @get result
   * @var bool
   */
  public $is_mail_blacklisted;

  /**
   * Email address.
   *
   * @delete get
   * @get get
   * @var string
   */
  public $s_mail;
}

?>
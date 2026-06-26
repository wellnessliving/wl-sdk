<?php

namespace WellnessLiving\Wl\Login\Mail\Secondary;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages the list of secondary mailing recipients.
 *
 * @method WlModelRequest delete() Removes a secondary notification recipient from the secondary notification list.
 */
class MailSecondaryModel extends WlModelAbstract
{
  /**
   * Business key withing which the secondary contact is managed.
   *
   * @delete get
   * @var string
   */
  public $k_business = '';

  /**
   * Secret string to validate access for non-registered user.
   *
   * @delete get
   * @var string|null
   */
  public $s_secret = null;

  /**
   * Email address of the external secondary contact to delete.
   * Empty string if deleting a registered user secondary contact.
   *
   * Either `text_mail_secondary` or `uid_secondary` must be set for delete.
   *
   * @delete get
   * @var string|null
   */
  public $text_mail_secondary = null;

  /**
   * Key of the client whose activity notifications the secondary contacts receive.
   *
   * @delete get
   * @var string
   */
  public $uid = '';

  /**
   * Key of the registered secondary contact to delete.
   *
   * Empty string if deleting an external secondary contact.
   *
   * Either `uid_secondary` or `text_mail_secondary` must be set for delete.
   *
   * @delete get
   * @var string|null
   */
  public $uid_secondary = null;
}

?>